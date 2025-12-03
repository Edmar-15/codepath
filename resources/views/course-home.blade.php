<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Course - CodePath</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="bg-animation">
        <div class="bg-orb orb1"></div>
        <div class="bg-orb orb2"></div>
        <div class="bg-orb orb3"></div>
    </div>

    <header>
        <div class="container">
            <nav>
                <a href="{{ url('/') }}" style="text-decoration: none;">
                    <div class="logo">Code<span>Path</span></div>
                </a>
                <div class="nav-links">
                    <a href="{{ url('/') }}" class="btn" style="margin-right: 10px;">Home</a>
                    <a href="{{ url('/courses') }}" class="btn">All Courses</a>
                </div>
            </nav>
        </div>
    </header>

    <section class="container" style="padding: 60px 0;">
        <div class="course-header">
            <h1 style="font-size: 3rem; text-align: center; margin-bottom: 20px;">
                <i class="fab fa-html5" style="color: #E34F26; margin-right: 15px;"></i>
                HTML Mastery Course
            </h1>
            <p style="text-align: center; color: var(--text-secondary); max-width: 700px; margin: 0 auto 40px; font-size: 1.2rem;">
                Learn HTML from scratch with interactive exercises and projects. Complete coding challenges to level up!
            </p>
        </div>

        <div class="course-progress">
            <div class="progress-header">
                <div class="progress-title">Your Progress</div>
                <div class="progress-percentage">25% Complete</div>
            </div>
            <div class="progress-bar-container">
                <div class="progress-fill" style="width: 25%;"></div>
            </div>
            <div class="level-indicator">
                <span>Level 1/8</span>
                <span>3 Challenges Completed</span>
            </div>
        </div>

        <!-- Course Stats -->
        <div class="course-stats">
            <div class="stat-card">
                <span class="stat-number">8</span>
                <span class="stat-label">Levels</span>
            </div>
            <div class="stat-card">
                <span class="stat-number">24</span>
                <span class="stat-label">Challenges</span>
            </div>
            <div class="stat-card">
                <span class="stat-number">5</span>
                <span class="stat-label">Projects</span>
            </div>
            <div class="stat-card">
                <span class="stat-number">∞</span>
                <span class="stat-label">Practice</span>
            </div>
        </div>

        <!-- Levels Grid -->
        <h2 style="font-size: 2.2rem; text-align: center; margin: 60px 0 30px; color: var(--text-primary);">
            Course Levels
        </h2>

        <div class="levels-grid">
            <!-- Level 1 - Completed -->
            <a href="{{ url('/html-course/level/1') }}" class="level-card completed">
                <div class="level-icon completed">
                    <i class="fas fa-check"></i>
                </div>
                <div class="level-content">
                    <h3>Level 1: HTML Basics</h3>
                    <p>Learn the fundamental structure of HTML documents</p>
                    <span class="level-badge easy">Easy</span>
                    <span class="badge">3/3 Completed</span>
                </div>
            </a>

            <!-- Level 2 - Completed -->
            <a href="{{ url('/html-course/level/2') }}" class="level-card completed">
                <div class="level-icon completed">
                    <i class="fas fa-check"></i>
                </div>
                <div class="level-content">
                    <h3>Level 2: Text & Headings</h3>
                    <p>Master text formatting and heading hierarchy</p>
                    <span class="level-badge easy">Easy</span>
                    <span class="badge">2/3 Completed</span>
                </div>
            </a>

            <!-- Level 3 - Active -->
            <a href="{{ url('/html-course/level/3') }}" class="level-card active">
                <div class="level-icon active">
                    <span>3</span>
                </div>
                <div class="level-content">
                    <h3>Level 3: Links & Images</h3>
                    <p>Connect pages and add visual content</p>
                    <span class="level-badge easy">Easy</span>
                    <span class="badge">Continue</span>
                </div>
            </a>

            <!-- Level 4 - Locked -->
            <div class="level-card locked">
                <div class="level-icon locked">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="level-content">
                    <h3>Level 4: Lists & Tables</h3>
                    <p>Organize content with lists and tables</p>
                    <span class="level-badge medium">Medium</span>
                </div>
                <i class="fas fa-lock lock-icon"></i>
            </div>

            <!-- Level 5 - Locked -->
            <div class="level-card locked">
                <div class="level-icon locked">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="level-content">
                    <h3>Level 5: Forms & Input</h3>
                    <p>Create interactive forms for user input</p>
                    <span class="level-badge medium">Medium</span>
                </div>
                <i class="fas fa-lock lock-icon"></i>
            </div>

            <!-- Level 6 - Locked -->
            <div class="level-card locked">
                <div class="level-icon locked">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="level-content">
                    <h3>Level 6: Semantic HTML</h3>
                    <p>Use semantic elements for better structure</p>
                    <span class="level-badge medium">Medium</span>
                </div>
                <i class="fas fa-lock lock-icon"></i>
            </div>

            <!-- Level 7 - Locked -->
            <div class="level-card locked">
                <div class="level-icon locked">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="level-content">
                    <h3>Level 7: HTML5 Features</h3>
                    <p>Explore advanced HTML5 elements</p>
                    <span class="level-badge hard">Hard</span>
                </div>
                <i class="fas fa-lock lock-icon"></i>
            </div>

            <!-- Level 8 - Locked -->
            <div class="level-card locked">
                <div class="level-icon locked">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="level-content">
                    <h3>Level 8: Final Project</h3>
                    <p>Build a complete website from scratch</p>
                    <span class="level-badge hard">Hard</span>
                </div>
                <i class="fas fa-lock lock-icon"></i>
            </div>
        </div>

        <a href="{{ url('/html-course/level/3') }}" class="btn continue-btn" style="font-size: 1.1rem; padding: 15px 30px;">
            <i class="fas fa-play" style="margin-right: 10px;"></i>
            Continue Learning
        </a>
    </section>

    <!-- Theme Toggle -->
    <div class="theme-toggle">
        <button id="themeToggle" class="theme-btn">
            <i class="fas fa-moon"></i>
        </button>
    </div>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">Code<span>Path</span></div>
                <p style="color: var(--text-secondary); margin-top: 20px;">Learn to code with interactive challenges</p>
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
                }

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
