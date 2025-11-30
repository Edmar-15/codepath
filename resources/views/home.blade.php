<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CodePath - Learn Programming Languages</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>

<body>
  <!-- Header -->
  <header>
    <div class="container">
      <nav>
        <div class="logo">Code<span>Path</span></div>
        <a href="{{ route('login') }}" class="btn">Sign In</a>
      </nav>
    </div>
  </header>

  <section class="hero">
    <div class="container">
      <h1>Master Programming Languages</h1>
      <p>Learn to code with our comprehensive courses, interactive exercises, and real-world projects. Start your
        journey to becoming a software developer today!</p>
      <div class="hero-btns">
        <a href="#" class="btn">Get Started Free</a>
        <a href="#" class="btn">Browse Courses</a>
      </div>
    </div>
  </section>

  <!-- Languages Section -->
  <section class="container">
    <h2 class="section-title">Popular Programming Languages</h2>
    <div class="languages-grid">
      <!-- HTML -->
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

      <!-- CSS -->
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

      <!-- JavaScript -->
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

      <!-- Java -->
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

      <!-- Python -->
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

      <!-- C# -->
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
        <!-- HTML Course -->
        <div class="course-card">
          <div class="course-image" style="background-color: #E34F26;">
            <i class="fab fa-html5" style="font-size: 4rem; z-index: 2; position: relative;"></i>
          </div>
          <div class="course-content">
            <h3>HTML5 Mastery</h3>
            <p>Learn modern HTML5 with semantic elements, forms, multimedia, and accessibility features.</p>
            <div class="course-meta">
              <span>🕒 15 hours</span>
              <span>📚 80 lessons</span>
            </div>
            <div class="course-tags">
              <span class="tag">Beginner</span>
              <span class="tag">Web Development</span>
              <span class="tag">Frontend</span>
            </div>
            <div class="course-footer">
              <span class="price free">Free</span>
              <a href="#" class="btn btn-primary">Start Learning</a>
            </div>
          </div>
        </div>

        <!-- CSS Course -->
        <div class="course-card">
          <div class="course-image" style="background-color: #1572B6;">
            <i class="fab fa-css3-alt" style="font-size: 4rem; z-index: 2; position: relative;"></i>
          </div>
          <div class="course-content">
            <h3>CSS3 & Flexbox</h3>
            <p>Master modern CSS with Flexbox, Grid, animations, and responsive design techniques.</p>
            <div class="course-meta">
              <span>🕒 20 hours</span>
              <span>📚 100 lessons</span>
            </div>
            <div class="course-tags">
              <span class="tag">Beginner</span>
              <span class="tag">Web Design</span>
              <span class="tag">Styling</span>
            </div>
            <div class="course-footer">
              <span class="price free">Free</span>
              <a href="#" class="btn btn-primary">Start Learning</a>
            </div>
          </div>
        </div>

        <!-- JavaScript Course -->
        <div class="course-card">
          <div class="course-image" style="background-color: #F7DF1E;">
            <i class="fab fa-js-square" style="font-size: 4rem; z-index: 2; position: relative;"></i>
          </div>
          <div class="course-content">
            <h3>JavaScript Fundamentals</h3>
            <p>Master the language of the web with interactive coding challenges and real-world projects.</p>
            <div class="course-meta">
              <span>🕒 30 hours</span>
              <span>📚 150 lessons</span>
            </div>
            <div class="course-tags">
              <span class="tag">Intermediate</span>
              <span class="tag">Web Development</span>
              <span class="tag">Programming</span>
            </div>
            <div class="course-footer">
              <span class="price free">Free</span>
              <a href="#" class="btn btn-primary">Start Learning</a>
            </div>
          </div>
        </div>

        <!-- Java Course -->
        <div class="course-card">
          <div class="course-image" style="background-color: #007396;">
            <i class="fab fa-java" style="font-size: 4rem; z-index: 2; position: relative;"></i>
          </div>
          <div class="course-content">
            <h3>Java Programming</h3>
            <p>Learn object-oriented programming with Java for enterprise applications and Android development.</p>
            <div class="course-meta">
              <span>🕒 40 hours</span>
              <span>📚 200 lessons</span>
            </div>
            <div class="course-tags">
              <span class="tag">Intermediate</span>
              <span class="tag">Backend</span>
              <span class="tag">OOP</span>
            </div>
            <div class="course-footer">
              <span class="price free">Free</span>
              <a href="#" class="btn btn-primary">Enroll Now</a>
            </div>
          </div>
        </div>

        <!-- Python Course -->
        <div class="course-card">
          <div class="course-image" style="background-color: #3776AB;">
            <i class="fab fa-python" style="font-size: 4rem; z-index: 2; position: relative;"></i>
          </div>
          <div class="course-content">
            <h3>Python for Beginners</h3>
            <p>Learn the fundamentals of Python programming with fun projects and interactive exercises.</p>
            <div class="course-meta">
              <span>🕒 25 hours</span>
              <span>📚 120 lessons</span>
            </div>
            <div class="course-tags">
              <span class="tag">Beginner</span>
              <span class="tag">Programming</span>
              <span class="tag">Data Science</span>
            </div>
            <div class="course-footer">
              <span class="price free">Free</span>
              <a href="#" class="btn btn-primary">Start Learning</a>
            </div>
          </div>
        </div>

        <!-- C# Course -->
        <div class="course-card">
          <div class="course-image" style="background-color: #68217A;">
            <i class="fas fa-code" style="font-size: 4rem; z-index: 2; position: relative;"></i>
          </div>
          <div class="course-content">
            <h3>C# & .NET Development</h3>
            <p>Build Windows applications, games with Unity, and web services with C# and .NET framework.</p>
            <div class="course-meta">
              <span>🕒 35 hours</span>
              <span>📚 180 lessons</span>
            </div>
            <div class="course-tags">
              <span class="tag">Intermediate</span>
              <span class="tag">Game Development</span>
              <span class="tag">Windows</span>
            </div>
            <div class="course-footer">
              <span class="price free">Free</span>
              <a href="#" class="btn btn-primary">Enroll Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="footer-content">
      </div>
    </div>
  </footer>
</body>

</html>
