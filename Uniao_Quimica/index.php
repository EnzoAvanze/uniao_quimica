<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="assets/Pictures/Logo.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Login - União Química</title>
</head>
<body>

   <div class="tela-preta"></div>

<video autoplay muted loop id="bg-video">
    <source src="assets/Pictures/Design sem nome (3).mp4" type="video/mp4">
  </video>
  
  <header>
    <!-- Logo -->
  <div class="logo">
    <img src="assets/Pictures/enzoavanze.png" alt="União Química">
  </div>

  </header>

  <main>
     <!-- Área restrita -->
<div class="login-container">
  <video autoplay muted playsinline loop preload="auto">
    <source src="bg.mp4" type="video/mp4">
  </video>
  <div class="video-fallback"><div class="fallback-wave"></div></div>
  <div class="video-overlay"></div>

  <div class="login-content">
    <h2>Area restrita</h2>
    <form novalidate>
      <div class="input-group">
        <input type="Login" placeholder=" " required class="esquerda">
        <label>E-mail</label>
      </div>

      <div class="input-group">
        <input type="password" placeholder=" " required class="esquerda">
        <label>Senha</label>
      </div>

      <div class="options">
        <label class="remember"><input type="checkbox"> Lembrar-me</label>
        <label class="forgot-link" for="modalToggle">Esqueceu a senha?</label>
      </div>

      <button class="login-btn" type="button" onclick="window.location.href='index2.html'">
  Entrar
</button>

     
    </form>
  </div>
</div>

<!-- Checkbox escondida só para controlar o modal -->
<input type="checkbox" id="modalToggle" class="modal-toggle" style="display:none;">
<div class="modal-backdrop">
  <div class="modal">
    <h3>Redefinir senha</h3>
    <p>Digite seu e-mail para receber instruções de redefinição.</p>
    <div class="modal-row">
      <input type="email" placeholder="Seu e-mail">
      <button class="btn-primary">Enviar</button>
    </div>
    <div class="modal-actions">
      <label for="modalToggle" class="btn-ghost">Fechar</label>
    </div>
  </div>
</div>

  </main>

    
</body>
</html>

<?php


?>