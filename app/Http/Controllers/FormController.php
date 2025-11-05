<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\FormModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function show()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        // Honeypot
        if (filled($request->input('hp_token'))) {
            return back()->withErrors(['form' => 'Form tidak valid.'])->withInput();
        }

        $validated = $request->validate([
            'full_name'             => 'required|string|max:150',
            'student_email'         => 'required|string|email:rfc,dns|max:191|',
            'password'              => 'required|string|min:8|max:100|confirmed', // perlu field password_confirmation
            'birthdate'             => 'required|date|before:today',
        ]);

        try {
            $form = FormModel::create([
                'full_name'     => $validated['full_name'],
                'student_email' => $validated['student_email'],
                'password_hash' => Hash::make($validated['password']),
                'birthdate'     => $validated['birthdate'],
            ]);
        } catch (\Throwable $e) {
            return back()
                ->withErrors(['db' => 'DB error: '.$e->getMessage()])
                ->withInput();
        }

        try {
            Mail::to($validated['student_email'])->send(new TestMail($form));
        } catch (\Throwable $e) {
            Log::error('Mail error', ['exception' => $e]);
            return back()
                ->withErrors(['mail' => 'Gagal mengirim email: '.$e->getMessage()])
                ->withInput();
        }

        return back()->with('success', 'Registrasi berhasil disimpan dan email terkirim.');
    }
}