<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/login.css" />
  <title>Ekonomi</title>
  <link rel="shortcut icon" href="<?= BASEURL; ?>/img/unsri.png" type="image/x-icon">
</head>
<body>
  <section class="header">
    <nav>
      <div class="tes">
        <a href="<?= BASEURL; ?>" class="nav__logo">
          <img src="<?= BASEURL; ?>/img/logo.png" alt="" class="nav__logo-img">
        </a>
      </div>
      <div class="nav-links">
        <ul>
          <li><a href="http://localhost/phpmvc/public/">Beranda</a></li>
          <li><a href="http://localhost/phpmvc/public/fakultas/index">Fakultas</a></li>
        </ul>
      </div>
    </nav>
  </section>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form method="POST" action="<?= BASEURL; ?>/Auth/processLogin" class="sign-in-form">
          <h2 class="title">Masuk</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="nim" placeholder="Username" required/>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" required/>
          </div>
          <div class="input-field">
            <i class="fas fa-graduation-cap"></i>
            <select name="id_jurusan" required>
              <option value="" disabled selected>Pilih Jurusan</option>
              <option value="0101">Manajemen</option>
              <option value="0102">Ekonomi Pembangunan</option>
              <option value="0103">Akuntansi</option>
            </select>
          </div>
          <input type="submit" value="Login" class="btn solid" />
        </form>

        <form method="POST" action="<?= BASEURL; ?>/auth/processRegistration" class="sign-up-form">
          <h2 class="title">Daftar</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="nim" placeholder="Username" required/>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Confirm Password"required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="confirm_password" placeholder="Password"required />
          </div>
          <input type="submit" class="btn" value="Sign up" />
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Mahasiswa Baru?</h3>
          <p>
            Buat akun SIMAK untuk mulai pembelajaranmu bersama UNSRI!
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Daftar
          </button>
        </div>
        <img src="img/log.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>Sudah punya akun?</h3>
          <p>
            Ayo masuk, dan mulai pembelajaranmu bersama kami!
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Masuk
          </button>
        </div>
        <img src="img/register.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="<?= BASEURL; ?>/js/app.js"></script>
</body>
</html>
