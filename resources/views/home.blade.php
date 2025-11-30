<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CodePath - Learn Programming Languages</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  @vite(['resources/css/app.css', 'resources/js/home.js'])
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    /* Enhanced Features CSS */

  </style>
</head>

<body>
  <div class="bg-animation">
    <div class="bg-orb orb1"></div>
    <div class="bg-orb orb2"></div>
    <div class="bg-orb orb3"></div>
  </div>

  <!-- Header -->
  <header>
    <div class="container">
      <nav>
        <div class="logo">Code<span>Path</span></div>
        <a href="{{ route('login') }}" class="btn">Sign In</a>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <h1>Master Programming Languages</h1>
      <p>Learn to code with our comprehensive courses, interactive exercises, and real-world projects. Start your
        journey to becoming a software developer today!</p>
      <div class="hero-btns">
        <a href="#" class="btn">Get Started Free</a>
        <a href="#courses" class="btn">Browse Courses</a>
      </div>
    </div>
  </section>

  <!-- Languages Section -->
  <section class="container">
    <h2 class="section-title">Popular Programming Languages</h2>
    <div class="languages-grid">
      <div class="language-card html-card">
        <div class="card-header">
          <i class="fab fa-html5"></i>
          <h3>HTML</h3>
        </div>
        <div class="card-body">
          <p>The foundation of all web content. Learn to structure web pages with semantic markup.</p>
          <span class="difficulty beginner">Beginner Friendly</span>
        </div>
      </div>

      <div class="language-card css-card">
        <div class="card-header">
          <i class="fab fa-css3-alt"></i>
          <h3>CSS</h3>
        </div>
        <div class="card-body">
          <p>Style and design beautiful websites. Master layouts, animations, and responsive design.</p>
          <span class="difficulty beginner">Beginner Friendly</span>
        </div>
      </div>

      <div class="language-card js-card">
        <div class="card-header">
          <i class="fab fa-js-square"></i>
          <h3>JavaScript</h3>
        </div>
        <div class="card-body">
          <p>The language of the web. Learn to create interactive websites and web applications.</p>
          <span class="difficulty intermediate">Intermediate</span>
        </div>
      </div>

      <div class="language-card java-card">
        <div class="card-header">
          <i class="fab fa-java"></i>
          <h3>Java</h3>
        </div>
        <div class="card-body">
          <p>Enterprise-level language used for building robust, scalable applications.</p>
          <span class="difficulty intermediate">Intermediate</span>
        </div>
      </div>

      <div class="language-card python-card">
        <div class="card-header">
          <i class="fab fa-python"></i>
          <h3>Python</h3>
        </div>
        <div class="card-body">
          <p>Versatile language for web development, data science, AI, and automation.</p>
          <span class="difficulty beginner">Beginner Friendly</span>
        </div>
      </div>

      <div class="language-card csharp-card">
        <div class="card-header">
          <i class="fas fa-code"></i>
          <h3>C#</h3>
        </div>
        <div class="card-body">
          <p>Modern object-oriented language for building Windows applications, games, and web services.</p>
          <span class="difficulty intermediate">Intermediate</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Courses Section -->
  <section id="courses" class="courses-section">
    <div class="container">
      <div class="section-header">
        <h2>Featured Courses</h2>
        <p>Hands-on, interactive courses designed to get you coding from day one</p>
      </div>

      <div class="courses-grid">
        <div class="course-card">
          <div class="course-image" style="background-color: #E34F26;">
            <i class="fab fa-html5"></i>
          </div>
          <div class="course-content">
            <h3>HTML5 Mastery</h3>
            <p>Learn modern HTML5 with semantic elements, forms, multimedia, and accessibility features.</p>
            <div class="course-tags">
              <span class="tag">Web Development</span>
              <span class="tag">Frontend</span>
            </div>
            <div class="course-footer">
              <span class="price">Free</span>
              <a href="#" class="btn">Start Learning</a>
            </div>
          </div>
        </div>

        <div class="course-card">
          <div class="course-image" style="background-color: #1572B6;">
            <i class="fab fa-css3-alt"></i>
          </div>
          <div class="course-content">
            <h3>CSS3 & Flexbox</h3>
            <p>Master modern CSS with Flexbox, Grid, animations, and responsive design techniques.</p>
            <div class="course-tags">
              <span class="tag">Web Design</span>
              <span class="tag">Styling</span>
            </div>
            <div class="course-footer">
              <span class="price">Free</span>
              <a href="#" class="btn">Start Learning</a>
            </div>
          </div>
        </div>

        <div class="course-card">
          <div class="course-image" style="background-color: #F7DF1E;">
            <i class="fab fa-js-square"></i>
          </div>
          <div class="course-content">
            <h3>JavaScript Fundamentals</h3>
            <p>Master the language of the web with interactive coding challenges and real-world projects.</p>
            <div class="course-tags">
              <span class="tag">Web Development</span>
              <span class="tag">Programming</span>
            </div>
            <div class="course-footer">
              <span class="price">Free</span>
              <a href="#" class="btn">Start Learning</a>
            </div>
          </div>
        </div>

        <div class="course-card">
          <div class="course-image" style="background-color: #007396;">
            <i class="fab fa-java"></i>
          </div>
          <div class="course-content">
            <h3>Java Programming</h3>
            <p>Learn object-oriented programming with Java for enterprise applications and Android development.</p>
            <div class="course-tags">
              <span class="tag">Backend</span>
              <span class="tag">OOP</span>
            </div>
            <div class="course-footer">
              <span class="price">Free</span>
              <a href="#" class="btn">Enroll Now</a>
            </div>
          </div>
        </div>

        <div class="course-card">
          <div class="course-image" style="background-color: #3776AB;">
            <i class="fab fa-python"></i>
          </div>
          <div class="course-content">
            <h3>Python for Beginners</h3>
            <p>Learn the fundamentals of Python programming with fun projects and interactive exercises.</p>
            <div class="course-tags">
              <span class="tag">Programming</span>
              <span class="tag">Data Science</span>
            </div>
            <div class="course-footer">
              <span class="price">Free</span>
              <a href="#" class="btn">Start Learning</a>
            </div>
          </div>
        </div>

        <div class="course-card">
          <div class="course-image" style="background-color: #68217A;">
            <i class="fas fa-code"></i>
          </div>
          <div class="course-content">
            <h3>C# & .NET Development</h3>
            <p>Build Windows applications, games with Unity, and web services with C# and .NET framework.</p>
            <div class="course-tags">
              <span class="tag">Game Development</span>
              <span class="tag">Windows</span>
            </div>
            <div class="course-footer">
              <span class="price">Free</span>
              <a href="#" class="btn">Enroll Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="features-section">
    <div class="container">
      <div class="section-header">
        <h2>Learning Features</h2>
        <p>Experience interactive learning with our platform</p>
      </div>

      <div class="features-grid">
        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-code"></i>
          </div>
          <h3>Interactive Editor</h3>
          <p>Practice coding directly in your browser with our built-in code editor</p>
          <div class="feature-demo">
            <div class="code-editor-demo">
              <div class="editor-header">
                <span class="dot red"></span>
                <span class="dot yellow"></span>
                <span class="dot green"></span>
                <span class="file-name">script.js</span>
              </div>
              <div class="code-content">
                <span class="code-line">console.log("Hello, World!");</span>
                <span class="code-line">function learn() {</span>
                <span class="code-line">  return "Coding is fun!";</span>
                <span class="code-line">}</span>
              </div>
            </div>
          </div>
        </div>

        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-trophy"></i>
          </div>
          <h3>Earn Certificates</h3>
          <p>Get recognized for your achievements with verifiable certificates</p>
          <div class="certificate-demo">
            <div class="certificate">
              <div class="certificate-content">
                <h4>Certificate of Completion</h4>
                <p>Awarded to <strong>You</strong> for mastering JavaScript Fundamentals</p>
                <div class="badge">✓ Verified</div>
              </div>
            </div>
          </div>
        </div>

        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-chart-line"></i>
          </div>
          <h3>Track Progress</h3>
          <p>Monitor your learning journey with detailed analytics</p>
          <div class="progress-demo">
            <div class="progress-item">
              <span>HTML Mastery</span>
              <div class="progress-bar">
                <div class="progress-fill" style="width: 85%"></div>
              </div>
              <span>85%</span>
            </div>
            <div class="progress-item">
              <span>CSS Fundamentals</span>
              <div class="progress-bar">
                <div class="progress-fill" style="width: 60%"></div>
              </div>
              <span>60%</span>
            </div>
            <div class="progress-item">
              <span>JavaScript Basics</span>
              <div class="progress-bar">
                <div class="progress-fill" style="width: 45%"></div>
              </div>
              <span>45%</span>
            </div>
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
    </div>
  </footer>
</body>
</html>
