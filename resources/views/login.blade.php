<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - CodePath</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
  <!-- Animated Background -->
  <div class="bg-animation">
    <div class="bg-orb orb1"></div>
    <div class="bg-orb orb2"></div>
    <div class="bg-orb orb3"></div>
  </div>

  <header>
    <div class="container">
      <nav>
        <a href="#" style="text-decoration: none;">
          <div class="logo">Code<span>Path</span></div>
        </a>
        <a href="{{ url('/') }}" class="btn">Back to Home</a>
      </nav>
    </div>
  </header>

  <!-- Login Section -->
  <section class="login-section">
    <div class="container">
      <div class="login-container">
        <div class="login-header">
          <h1>Welcome Back</h1>
          <p>Sign in to continue your coding journey</p>
        </div>
        <div class="login-body">
          <form id="loginForm">
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" id="email" class="form-control" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" id="password" class="form-control" placeholder="Enter your password" required>
              <button type="button" class="password-toggle" id="passwordToggle" onclick="togglePassword()">
                <i class="far fa-eye" id="eyeIcon"></i>
              </button>
            </div>
            <div class="remember-forgot">
              <label class="remember-me">
                <input type="checkbox" id="remember">
                Remember me
              </label>
              <a href="#" class="forgot-password">Forgot Password?</a>
            </div>
            <button type="submit" class="login-btn">Sign In</button>
          </form>

          <div class="divider">
            <span>Or continue with</span>
          </div>

          <div class="social-login">
            <button type="button" class="social-btn google">
              <i class="fab fa-google"></i>
              Google
            </button>
            <button type="button" class="social-btn github">
              <i class="fab fa-github"></i>
              GitHub
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Theme Toggle -->
  <div class="theme-toggle">
    <button id="themeToggle" class="theme-btn">
      <i class="fas fa-moon"></i>
    </button>
  </div>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="footer-content">
        <div class="footer-logo">Code<span>Path</span></div>
      </div>
    </div>
  </footer>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const themeToggle = document.getElementById('themeToggle');

      if (themeToggle) {
        const themeIcon = themeToggle.querySelector('i');

        const currentTheme = localStorage.getItem('theme') || 'dark';

        if (currentTheme === 'light') {
          document.body.classList.add('light-theme');
          themeIcon.className = 'fas fa-sun';
          themeIcon.style.color = '#f59e0b';
        } else {
          document.body.classList.remove('light-theme');
          themeIcon.className = 'fas fa-moon';
          themeIcon.style.color = 'white';
        }

        // Theme toggle click event
        themeToggle.addEventListener('click', function () {
          document.body.classList.toggle('light-theme');

          if (document.body.classList.contains('light-theme')) {
            localStorage.setItem('theme', 'light');
            themeIcon.className = 'fas fa-sun';
            themeIcon.style.color = '#f59e0b';
          } else {
            localStorage.setItem('theme', 'dark');
            themeIcon.className = 'fas fa-moon';
            themeIcon.style.color = 'white';
          }
        });
      }
    });
  </script>
</body>

</html>
