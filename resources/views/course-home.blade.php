<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Course - CodePath</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .course-progress {
            background: var(--card-bg);
            border-radius: 15px;
            padding: 30px;
            margin: 40px auto;
            max-width: 800px;
            border: 1px solid rgba(59, 130, 246, 0.2);
        }

        .progress-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .progress-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-primary);
        }

        .progress-percentage {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--secondary);
        }

        .progress-bar-container {
            height: 10px;
            background: rgba(59, 130, 246, 0.2);
            border-radius: 5px;
            overflow: hidden;
            margin-bottom: 15px;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            border-radius: 5px;
            width: 0%;
            transition: width 1s ease;
        }

        .level-indicator {
            display: flex;
            justify-content: space-between;
            font-size: 0.9rem;
            color: var(--text-secondary);
        }

        .levels-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin: 50px 0;
        }

        .level-card {
            background: var(--card-bg);
            border-radius: 15px;
            padding: 25px;
            border: 1px solid rgba(59, 130, 246, 0.1);
            transition: all 0.3s ease;
            position: relative;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .level-card:hover {
            transform: translateY(-5px);
            border-color: rgba(59, 130, 246, 0.3);
            box-shadow: 0 10px 25px rgba(59, 130, 246, 0.2);
        }

        .level-card.completed {
            border-color: var(--success);
            background: rgba(16, 185, 129, 0.05);
        }

        .level-card.locked {
            opacity: 0.6;
            cursor: not-allowed;
        }

        .level-card.active {
            border-color: var(--primary);
            background: rgba(59, 130, 246, 0.05);
        }

        .level-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
        }

        .level-icon.locked {
            background: var(--text-secondary);
        }

        .level-icon.completed {
            background: var(--success);
        }

        .level-icon.active {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
        }

        .level-content {
            flex: 1;
        }

        .level-content h3 {
            font-size: 1.3rem;
            margin-bottom: 5px;
            color: var(--text-primary);
        }

        .level-content p {
            font-size: 0.9rem;
            color: var(--text-secondary);
            margin-bottom: 10px;
        }

        .level-badge {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-top: 5px;
        }

        .level-badge.easy {
            background: rgba(16, 185, 129, 0.15);
            color: var(--success);
            border: 1px solid rgba(16, 185, 129, 0.3);
        }

        .level-badge.medium {
            background: rgba(245, 158, 11, 0.15);
            color: var(--warning);
            border: 1px solid rgba(245, 158, 11, 0.3);
        }

        .level-badge.hard {
            background: rgba(239, 68, 68, 0.15);
            color: #ef4444;
            border: 1px solid rgba(239, 68, 68, 0.3);
        }

        .course-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin: 40px 0;
        }

        .stat-card {
            background: var(--card-bg);
            border-radius: 15px;
            padding: 25px;
            text-align: center;
            border: 1px solid rgba(59, 130, 246, 0.1);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--secondary);
            margin-bottom: 10px;
            display: block;
        }

        .stat-label {
            color: var(--text-secondary);
            font-size: 0.9rem;
        }

        .continue-btn {
            display: block;
            width: 100%;
            max-width: 300px;
            margin: 40px auto;
            text-align: center;
        }

        .lock-icon {
            position: absolute;
            top: 20px;
            right: 20px;
            color: var(--text-secondary);
        }

        .badge {
            position: absolute;
            top: -10px;
            right: -10px;
            background: var(--accent);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            box-shadow: 0 5px 15px rgba(139, 92, 246, 0.3);
        }
    </style>
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

        <!-- Progress Section -->
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
