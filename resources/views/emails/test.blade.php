<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi Baru - Cloud Computing 2025</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body { 
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Arial, sans-serif;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: #333;
      line-height: 1.6;
      padding: 40px 20px;
    }
    
    .email-wrapper {
      max-width: 650px;
      margin: 0 auto;
      background: #ffffff;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
    }
    
    .header {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      padding: 40px 30px;
      text-align: center;
      color: white;
    }
    
    .header-icon {
      font-size: 48px;
      margin-bottom: 15px;
      display: inline-block;
      animation: float 3s ease-in-out infinite;
    }
    
    @keyframes float {
      0%, 100% { transform: translateY(0px); }
      50% { transform: translateY(-10px); }
    }
    
    .header h1 {
      font-size: 32px;
      font-weight: 700;
      margin-bottom: 8px;
      text-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    
    .header-subtitle {
      font-size: 16px;
      opacity: 0.95;
      font-weight: 300;
    }
    
    .content {
      padding: 40px 30px;
    }
    
    .greeting {
      font-size: 20px;
      color: #1e293b;
      margin-bottom: 20px;
      font-weight: 600;
    }
    
    .greeting-name {
      color: #667eea;
    }
    
    .success-message {
      background: linear-gradient(135deg, #10b981 0%, #059669 100%);
      color: white;
      padding: 20px;
      border-radius: 12px;
      margin-bottom: 30px;
      font-size: 15px;
      line-height: 1.6;
    }
    
    .details-box {
      background: #f8fafc;
      border: 2px solid #e2e8f0;
      border-radius: 12px;
      padding: 25px;
      margin-bottom: 30px;
    }
    
    .details-title {
      font-size: 18px;
      font-weight: 700;
      color: #1e293b;
      margin-bottom: 20px;
      display: flex;
      align-items: center;
      gap: 8px;
    }
    
    .detail-row {
      display: flex;
      padding: 12px 0;
      border-bottom: 1px solid #e2e8f0;
    }
    
    .detail-row:last-child {
      border-bottom: none;
    }
    
    .detail-label {
      font-weight: 600;
      color: #64748b;
      min-width: 140px;
      font-size: 14px;
    }
    
    .detail-value {
      color: #1e293b;
      font-weight: 500;
      flex: 1;
      font-size: 14px;
    }
    
    .action-box {
      background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
      border-left: 4px solid #f59e0b;
      padding: 20px;
      border-radius: 8px;
      margin-bottom: 30px;
    }
    
    .action-box strong {
      color: #92400e;
      display: block;
      margin-bottom: 8px;
      font-size: 15px;
    }
    
    .action-box p {
      color: #78350f;
      font-size: 14px;
      line-height: 1.5;
    }
    
    .cta-button {
      display: inline-block;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      text-decoration: none;
      padding: 16px 40px;
      border-radius: 10px;
      font-weight: 600;
      font-size: 16px;
      text-align: center;
      transition: transform 0.2s, box-shadow 0.2s;
      box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
      margin: 20px 0;
    }
    
    .cta-button:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(102, 126, 234, 0.6);
    }
    
    .info-text {
      color: #64748b;
      font-size: 14px;
      line-height: 1.8;
      margin: 20px 0;
    }
    
    .footer {
      background: #f8fafc;
      padding: 30px;
      text-align: center;
      border-top: 2px solid #e2e8f0;
    }
    
    .footer-message {
      color: #64748b;
      font-size: 14px;
      margin-bottom: 15px;
    }
    
    .footer-links {
      margin-top: 15px;
    }
    
    .footer-link {
      color: #667eea;
      text-decoration: none;
      font-size: 14px;
      margin: 0 10px;
      font-weight: 500;
    }
    
    .footer-link:hover {
      text-decoration: underline;
    }
    
    .divider {
      height: 1px;
      background: linear-gradient(to right, transparent, #e2e8f0, transparent);
      margin: 25px 0;
    }
  </style>
</head>
<body>
  <div class="email-wrapper">
    <!-- Header -->
    <div class="header">
      <div class="header-icon">🎓</div>
      <h1>Cloud Computing 2025</h1>
      <div class="header-subtitle">Konfirmasi Registrasi</div>
    </div>
    
    <!-- Content -->
    <div class="content">
      <div class="greeting">
        Hello <span class="greeting-name">{{ $full_name }}</span>!
      </div>
      
      <div class="success-message">
        <strong>🎉 Selamat!</strong> Anda telah berhasil mendaftar untuk <strong>Cloud Computing 2025</strong>. Kami sangat senang Anda bergabung dengan program kami!
      </div>
      
      <!-- Registration Details -->
      <div class="details-box">
        <div class="details-title">
          📋 Detail Registrasi
        </div>
        
        <div class="detail-row">
          <div class="detail-label">Nama Lengkap:</div>
          <div class="detail-value">{{ $full_name }}</div>
        </div>
        
        <div class="detail-row">
          <div class="detail-label">Email:</div>
          <div class="detail-value">{{ $student_email }}</div>
        </div>
        
        <div class="detail-row">
          <div class="detail-label">Tanggal Lahir:</div>
          <div class="detail-value">{{ \Carbon\Carbon::parse($birthdate)->format('d F Y') }}</div>
        </div>
        
        <div class="detail-row">
          <div class="detail-label">Program:</div>
          <div class="detail-value">Cloud Computing 2025</div>
        </div>
      </div>
      
      <!-- Action Required -->
      <div class="action-box">
        <strong>⚠️ Penting!</strong>
        <p>Untuk menyelesaikan registrasi dan mengamankan tempat Anda di program, silakan konfirmasi pendaftaran Anda dalam <strong>7 hari</strong>.</p>
      </div>
      
      <!-- CTA Button -->
      <div style="text-align: center;">
        <a href="https://calvin.team6.my.id/kontak" class="cta-button">🎓 Konfirmasi Registrasi Saya</a>
      </div>
      
      <div class="divider"></div>
      
      <div class="info-text">
        <p><strong>Apa Selanjutnya?</strong></p>
        <p>Setelah Anda mengkonfirmasi pendaftaran, kami akan mengirimkan informasi lebih lanjut tentang jadwal orientasi, materi pembelajaran, dan akses ke platform kursus.</p>
      </div>
      
      <div class="info-text" style="margin-top: 25px;">
        <p>Terima kasih telah memilih <strong>Cloud Computing 2025</strong>! 🚀</p>
      </div>
    </div>
    
    <!-- Footer -->
    <div class="footer">
      <div class="footer-message">
        Email ini dikirim secara otomatis oleh sistem pendaftaran Cloud Computing 2025.
      </div>
      
      <div class="divider"></div>
      
      <div class="footer-links">
        Butuh bantuan? <a href="mailto:support@clickberes.com" class="footer-link">Hubungi Kami</a>
      </div>
      
      <div style="margin-top: 20px; font-size: 12px; color: #94a3b8;">
        ©️ 2025 Cloud Computing. All rights reserved.
      </div>
    </div>
  </div>
</body>
</html>