<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Cloud Computing 2025 – Registration</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-indigo-50 to-emerald-50 text-gray-900 font-sans flex flex-col items-center p-6 min-h-screen">

  <form method="post" action="{{ route('kontak.store') }}" class="bg-white border border-gray-200 p-6 rounded-2xl shadow-lg w-full max-w-md">
    <h2 class="text-2xl mb-1 text-center font-bold text-indigo-700">Cloud Computing 2025</h2>
    <p class="text-center text-sm text-gray-500 mb-6">Registration Form</p>

    {{-- Alert sukses --}}
    @if (session('success'))
      <div class="mb-4 p-3 rounded-lg bg-emerald-50 border border-emerald-200 text-emerald-700">
        {{ session('success') }}
      </div>
    @endif

    {{-- Error validasi --}}
    @if ($errors->any())
      <div class="mb-4 p-3 rounded-lg bg-red-50 border border-red-200 text-red-700">
        <ul class="list-disc ml-5">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    @csrf

    {{-- Honeypot (anti-bot) --}}
    <div class="sr-only" aria-hidden="true">
      <label>Leave this field empty</label>
      <input type="text" name="hp_token" value="" tabindex="-1" autocomplete="new-password">
    </div>

    {{-- Full Name --}}
    <div class="mb-4">
      <label class="block mb-1 text-sm font-medium text-gray-700">Full Name</label>
      <input
        type="text"
        name="full_name"
        required
        placeholder="Enter your full name"
        value="{{ old('full_name') }}"
        class="w-full p-3 rounded-lg bg-white border border-gray-300 text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
    </div>

    {{-- Student Email --}}
    <div class="mb-4">
      <label class="block mb-1 text-sm font-medium text-gray-700">Student Email</label>
      <input
        type="email"
        name="student_email"
        required
        placeholder="Enter your student email"
        value="{{ old('student_email') }}"
        class="w-full p-3 rounded-lg bg-white border border-gray-300 text-gray-900 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
    </div>

    {{-- Password --}}
    <div class="mb-4">
      <label class="block mb-1 text-sm font-medium text-gray-700">Password</label>
      <input
        type="password"
        name="password"
        required
        placeholder="Create a secure password"
        class="w-full p-3 rounded-lg bg-white border border-gray-300 text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
    </div>

    {{-- Confirm Password --}}
    <div class="mb-4">
      <label class="block mb-1 text-sm font-medium text-gray-700">Confirm Password</label>
      <input
        type="password"
        name="password_confirmation"
        required
        placeholder="Confirm your password"
        class="w-full p-3 rounded-lg bg-white border border-gray-300 text-gray-900 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
    </div>

    {{-- Birthdate --}}
    <div class="mb-6">
      <label class="block mb-1 text-sm font-medium text-gray-700">Birthdate</label>
      <input
        type="date"
        name="birthdate"
        required
        value="{{ old('birthdate') }}"
        class="w-full p-3 rounded-lg bg-white border border-gray-300 text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
    </div>

    <button type="submit"
      class="w-full bg-gradient-to-r from-indigo-600 to-emerald-500 hover:from-indigo-500 hover:to-emerald-400 text-white font-semibold py-3 px-4 rounded-lg transition">
      Register for Cloud Computing 2025
    </button>
  </form>

</body>
</html>