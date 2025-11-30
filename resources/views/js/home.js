
document.addEventListener('DOMContentLoaded', function () {
    // Theme Toggle
    const themeToggle = document.getElementById('themeToggle');
    if (themeToggle) {
        const themeIcon = themeToggle.querySelector('i');
        themeToggle.addEventListener('click', () => {
            document.body.classList.toggle('light-theme');
            if (document.body.classList.contains('light-theme')) {
                themeIcon.className = 'fas fa-sun';
                themeIcon.style.color = '#f59e0b';
            } else {
                themeIcon.className = 'fas fa-moon';
                themeIcon.style.color = 'white';
            }
        });
    }

    // Progress bars animation
    const observerOptions = {
        threshold: 0.5,
        rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const progressBars = entry.target.querySelectorAll('.progress-fill');
                progressBars.forEach(bar => {
                    const width = bar.style.width;
                    bar.style.width = '0';
                    setTimeout(() => {
                        bar.style.width = width;
                    }, 300);
                });
            }
        });
    }, observerOptions);

    const featuresSection = document.querySelector('.features-section');
    if (featuresSection) {
        observer.observe(featuresSection);
    }

    // Card hover effects
    document.querySelectorAll('.course-card, .language-card, .feature-card, .project-card').forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.style.transform = 'translateY(-10px) scale(1.02)';
        });

        card.addEventListener('mouseleave', () => {
            card.style.transform = 'translateY(0) scale(1)';
        });
    });
});
