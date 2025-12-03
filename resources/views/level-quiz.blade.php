<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level {{ $level }} - CodePath</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* All the previous CSS styles remain the same */
        .level-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .level-header {
            text-align: center;
            margin-bottom: 40px;
            padding: 30px;
            background: var(--card-bg);
            border-radius: 20px;
            border: 1px solid rgba(59, 130, 246, 0.2);
        }

        .level-title {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: var(--text-primary);
        }

        .level-subtitle {
            color: var(--text-secondary);
            font-size: 1.2rem;
            margin-bottom: 25px;
        }

        .level-info {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .info-item {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--text-secondary);
        }

        .info-item i {
            color: var(--secondary);
        }

        .quiz-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-bottom: 50px;
        }

        @media (max-width: 768px) {
            .quiz-container {
                grid-template-columns: 1fr;
            }
        }

        .instructions-panel {
            background: var(--card-bg);
            border-radius: 15px;
            padding: 30px;
            border: 1px solid rgba(59, 130, 246, 0.2);
        }

        .instructions-panel h3 {
            color: var(--text-primary);
            margin-bottom: 20px;
            font-size: 1.5rem;
        }

        .instructions-list {
            list-style: none;
            padding: 0;
        }

        .instructions-list li {
            padding: 10px 0;
            color: var(--text-secondary);
            border-bottom: 1px solid rgba(59, 130, 246, 0.1);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .instructions-list li:last-child {
            border-bottom: none;
        }

        .instructions-list li i {
            color: var(--success);
        }

        .editor-panel {
            background: var(--card-bg);
            border-radius: 15px;
            overflow: hidden;
            border: 1px solid rgba(59, 130, 246, 0.2);
        }

        .editor-header {
            background: rgba(15, 23, 42, 0.8);
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid rgba(59, 130, 246, 0.2);
        }

        .editor-title {
            color: var(--text-primary);
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .editor-actions {
            display: flex;
            gap: 10px;
        }

        .code-editor {
            background: #1e1e1e;
            min-height: 400px;
            font-family: 'Monaco', 'Consolas', monospace;
            padding: 20px;
            color: #d4d4d4;
            line-height: 1.5;
            white-space: pre-wrap;
            tab-size: 2;
        }

        .line-numbers {
            background: #252526;
            color: #858585;
            padding: 20px 15px;
            text-align: right;
            border-right: 1px solid #404040;
            user-select: none;
            min-width: 40px;
        }

        .editor-content {
            display: flex;
        }

        .code-input {
            background: transparent;
            border: none;
            color: #d4d4d4;
            font-family: 'Monaco', 'Consolas', monospace;
            font-size: 14px;
            line-height: 1.5;
            width: 100%;
            min-height: 400px;
            padding: 20px;
            resize: vertical;
            outline: none;
            tab-size: 2;
        }

        .hint {
            background: rgba(59, 130, 246, 0.1);
            border-left: 4px solid var(--secondary);
            padding: 15px;
            margin-top: 20px;
            border-radius: 0 8px 8px 0;
        }

        .hint-title {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--secondary);
            font-weight: 600;
            margin-bottom: 10px;
        }

        .hint-content {
            color: var(--text-secondary);
            font-size: 0.9rem;
        }

        .challenge-container {
            margin-top: 40px;
            background: var(--card-bg);
            border-radius: 15px;
            padding: 30px;
            border: 1px solid rgba(59, 130, 246, 0.2);
        }

        .challenge-title {
            color: var(--text-primary);
            font-size: 1.5rem;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .challenge-description {
            color: var(--text-secondary);
            margin-bottom: 25px;
            line-height: 1.6;
        }

        .requirements {
            background: rgba(15, 23, 42, 0.5);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 25px;
        }

        .requirements h4 {
            color: var(--text-primary);
            margin-bottom: 15px;
        }

        .requirements-list {
            list-style: none;
            padding: 0;
        }

        .requirements-list li {
            padding: 8px 0;
            color: var(--text-secondary);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .requirements-list li i {
            color: var(--success);
        }

        .output-preview {
            background: white;
            border-radius: 10px;
            padding: 20px;
            margin-top: 25px;
            min-height: 200px;
            color: #1e293b;
            border: 1px solid #e2e8f0;
        }

        .output-title {
            color: #475569;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .action-buttons {
            display: flex;
            gap: 15px;
            margin-top: 30px;
            flex-wrap: wrap;
        }

        .btn-run {
            background: linear-gradient(135deg, var(--success), #059669);
        }

        .btn-submit {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
        }

        .btn-hint {
            background: transparent;
            border: 2px solid rgba(245, 158, 11, 0.4);
            color: var(--warning);
        }

        .btn-reset {
            background: transparent;
            border: 2px solid rgba(239, 68, 68, 0.4);
            color: #ef4444;
        }

        .feedback {
            margin-top: 25px;
            padding: 20px;
            border-radius: 10px;
            display: none;
        }

        .feedback.success {
            background: rgba(16, 185, 129, 0.15);
            border: 1px solid rgba(16, 185, 129, 0.3);
            color: var(--success);
        }

        .feedback.error {
            background: rgba(239, 68, 68, 0.15);
            border: 1px solid rgba(239, 68, 68, 0.3);
            color: #ef4444;
        }

        .navigation-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 50px;
            padding-top: 30px;
            border-top: 1px solid rgba(59, 130, 246, 0.2);
        }

        .xp-reward {
            background: linear-gradient(135deg, var(--accent), var(--primary));
            color: white;
            padding: 15px 25px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 20px 0;
        }

        .xp-amount {
            font-size: 1.5rem;
            font-weight: 800;
        }

        .code-line {
            margin-bottom: 5px;
        }

        .fill-in {
            background: rgba(245, 158, 11, 0.2);
            border: 1px dashed var(--warning);
            padding: 2px 5px;
            border-radius: 3px;
            min-width: 100px;
            display: inline-block;
        }

        .fill-in input {
            background: transparent;
            border: none;
            color: #f59e0b;
            font-family: 'Monaco', 'Consolas', monospace;
            font-size: 14px;
            width: 100px;
            outline: none;
            text-align: center;
        }

        .level-progress {
            display: flex;
            gap: 10px;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }

        .level-btn {
            padding: 10px 20px;
            border-radius: 10px;
            background: rgba(59, 130, 246, 0.1);
            border: 1px solid rgba(59, 130, 246, 0.2);
            color: var(--text-secondary);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .level-btn.active {
            background: rgba(59, 130, 246, 0.2);
            border-color: var(--primary);
            color: var(--primary);
        }

        .level-btn.completed {
            background: rgba(16, 185, 129, 0.1);
            border-color: rgba(16, 185, 129, 0.3);
            color: var(--success);
        }

        .level-btn.locked {
            background: rgba(100, 116, 139, 0.1);
            border-color: rgba(100, 116, 139, 0.2);
            color: #64748b;
            cursor: not-allowed;
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
                <a href="{{ route('course-home') }}" style="text-decoration: none;">
                    <div class="logo">Code<span>Path</span></div>
                </a>
                <div style="display: flex; align-items: center; gap: 15px;">
                    <span style="color: var(--text-secondary);">
                        <i class="fas fa-star" style="color: var(--warning); margin-right: 5px;"></i>
                        <span id="xpCount">{{ session('xp', 125) }}</span> XP
                    </span>
                    <a href="{{ route('course-home') }}" class="btn">Course Home</a>
                </div>
            </nav>
        </div>
    </header>

    <div class="level-container">
        <!-- Level Header -->
        <div class="level-header">
            <h1 class="level-title" id="levelTitle">Level {{ $level }}: Loading...</h1>
            <p class="level-subtitle" id="levelSubtitle"></p>
            <div class="level-info">
                <div class="info-item">
                    <i class="fas fa-clock"></i>
                    <span id="levelTime">15-20 minutes</span>
                </div>
                <div class="info-item">
                    <i class="fas fa-tasks"></i>
                    <span id="levelChallenges">3 Challenges</span>
                </div>
                <div class="info-item">
                    <i class="fas fa-graduation-cap"></i>
                    <span id="levelDifficulty">Beginner Level</span>
                </div>
            </div>
        </div>

        <!-- Level Progress Navigation -->
        <div class="level-progress">
            @for($i = 1; $i <= 8; $i++)
                @php
                    $completed = session('completed_levels', []);
                    $isCompleted = in_array($i, $completed);
                    $isActive = $i == $level;
                    $isLocked = $i > 1 && !in_array($i-1, $completed);
                @endphp
                <a href="{{ !$isLocked ? route('course.level', ['level' => $i]) : '#' }}"
                   class="level-btn {{ $isActive ? 'active' : '' }} {{ $isCompleted ? 'completed' : '' }} {{ $isLocked ? 'locked' : '' }}"
                   {{ $isLocked ? 'onclick="return false;"' : '' }}>
                    Level {{ $i }}
                    @if($isCompleted)
                        <i class="fas fa-check" style="margin-left: 5px;"></i>
                    @endif
                </a>
            @endfor
        </div>

        <!-- XP Reward -->
        <div class="xp-reward">
            <i class="fas fa-trophy"></i>
            <div>
                <div style="font-size: 0.9rem;">Complete this level to earn:</div>
                <div class="xp-amount" id="levelXP">+50 XP</div>
            </div>
        </div>

        <!-- Quiz Container -->
        <div class="quiz-container">
            <!-- Instructions Panel -->
            <div class="instructions-panel">
                <h3><i class="fas fa-info-circle"></i> Instructions</h3>
                <ul class="instructions-list">
                    <li><i class="fas fa-check-circle"></i> Complete the code in the editor</li>
                    <li><i class="fas fa-check-circle"></i> Fill in the missing parts marked with ___</li>
                    <li><i class="fas fa-check-circle"></i> Click "Run Code" to test your solution</li>
                    <li><i class="fas fa-check-circle"></i> Submit when you're ready to check</li>
                    <li><i class="fas fa-check-circle"></i> Use hints if you get stuck</li>
                </ul>

                <div class="hint">
                    <div class="hint-title">
                        <i class="fas fa-lightbulb"></i>
                        <span>Pro Tip</span>
                    </div>
                    <div class="hint-content" id="generalHint">
                        Fill in the missing code to complete the HTML document.
                    </div>
                </div>
            </div>

            <!-- Editor Panel -->
            <div class="editor-panel">
                <div class="editor-header">
                    <div class="editor-title">
                        <i class="fas fa-code"></i>
                        <span id="challengeTitle">Challenge 1/3: Loading...</span>
                    </div>
                    <div class="editor-actions">
                        <span style="color: var(--text-secondary); font-size: 0.9rem;">
                            HTML
                        </span>
                    </div>
                </div>
                <div class="editor-content">
                    <div class="line-numbers" id="lineNumbers">
                        1<br>2<br>3<br>4<br>5<br>6<br>7<br>8<br>9<br>10
                    </div>
                    <div class="code-editor" id="codeEditor">
                        <!-- Code will be loaded here by JavaScript -->
                        <div class="code-line">Loading challenge...</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Challenge Description -->
        <div class="challenge-container">
            <h3 class="challenge-title" id="challengeTitleMain">
                <i class="fas fa-puzzle-piece"></i>
                <span>Loading Challenge...</span>
            </h3>
            <div class="challenge-description" id="challengeDescription">
                Loading challenge description...
            </div>

            <div class="requirements">
                <h4>Requirements:</h4>
                <ul class="requirements-list" id="requirementsList">
                    <li><i class="fas fa-check"></i> Loading...</li>
                </ul>
            </div>

            <!-- Action Buttons -->
            <div class="action-buttons">
                <button class="btn btn-run" onclick="runCode()">
                    <i class="fas fa-play"></i> Run Code
                </button>
                <button class="btn btn-submit" onclick="submitCode()">
                    <i class="fas fa-paper-plane"></i> Submit Solution
                </button>
                <button class="btn btn-hint" onclick="showHint()">
                    <i class="fas fa-lightbulb"></i> Show Hint
                </button>
                <button class="btn btn-reset" onclick="resetCode()">
                    <i class="fas fa-redo"></i> Reset
                </button>
            </div>

            <!-- Feedback -->
            <div id="feedback" class="feedback"></div>

            <!-- Output Preview -->
            <div class="output-preview">
                <div class="output-title">Preview:</div>
                <div id="outputContent">
                    <!-- Output will be displayed here -->
                </div>
            </div>

            <!-- Navigation -->
            <div class="navigation-buttons">
                @if($level > 1)
                    <a href="{{ route('course.level', ['level' => $level - 1]) }}" class="btn">
                        <i class="fas fa-arrow-left"></i> Previous Level
                    </a>
                @else
                    <a href="{{ route('course-home') }}" class="btn">
                        <i class="fas fa-home"></i> Course Home
                    </a>
                @endif

                <div style="display: flex; gap: 10px;" id="challengeNav">
                    <!-- Challenge buttons will be loaded here -->
                </div>

                @if($level < 8)
                    <a href="{{ route('course.level', ['level' => $level + 1]) }}" class="btn" id="nextLevelBtn" style="display: none;">
                        Next Level <i class="fas fa-arrow-right"></i>
                    </a>
                @else
                    <a href="{{ route('course-home') }}" class="btn" id="finishCourseBtn" style="display: none;">
                        Finish Course <i class="fas fa-trophy"></i>
                    </a>
                @endif
            </div>
        </div>
    </div>

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
                <p style="color: var(--text-secondary); margin-top: 20px;">HTML Course - Level {{ $level }}</p>
            </div>
        </div>
    </footer>

    <script>
        // Level data for all 8 levels
        const levelData = {
            1: {
                title: "HTML Basics",
                subtitle: "Learn the fundamental structure of HTML documents",
                time: "10-15 minutes",
                challenges: 3,
                difficulty: "Beginner",
                xp: 50,
                challenges: [
                    {
                        title: "HTML Document Structure",
                        description: "Create a basic HTML5 document with the correct structure. Fill in the missing doctype and tags.",
                        code: `<!DOCTYPE <input type="text" id="input1" placeholder="html">>
<<input type="text" id="input2" placeholder="html">>
<<input type="text" id="input3" placeholder="head">>
  <title>My First Page</title>
</<input type="text" id="input4" placeholder="head">>
<<input type="text" id="input5" placeholder="body">>
  <h1>Hello World!</h1>
</<input type="text" id="input6" placeholder="body">>
</<input type="text" id="input7" placeholder="html">>`,
                        solution: ["html", "html", "head", "head", "body", "body", "html"],
                        hint: "HTML5 starts with <!DOCTYPE html>. The main structure includes html, head, and body tags.",
                        requirements: [
                            "Use the correct HTML5 doctype",
                            "Include html, head, and body tags",
                            "Add a title in the head section",
                            "Add an h1 heading in the body"
                        ]
                    },
                    {
                        title: "Paragraphs and Headings",
                        description: "Create proper headings and paragraphs with the correct hierarchy.",
                        code: `<h1>Main Title</h1>
<h<input type="text" id="input1" placeholder="2">>Section Title</h<input type="text" id="input2" placeholder="2">>
<<input type="text" id="input3" placeholder="p">>This is a paragraph with <strong>bold text</strong>.</<input type="text" id="input4" placeholder="p">>
<h<input type="text" id="input5" placeholder="3">>Subsection</h<input type="text" id="input6" placeholder="3">>`,
                        solution: ["2", "2", "p", "p", "3", "3"],
                        hint: "Use h1 for main title, h2 for sections, h3 for subsections. Paragraphs use the p tag.",
                        requirements: [
                            "Use h1 for main title",
                            "Use h2 for section titles",
                            "Use h3 for subsections",
                            "Wrap text in paragraph tags"
                        ]
                    },
                    {
                        title: "Basic Text Formatting",
                        description: "Add text formatting using strong, em, and br tags.",
                        code: `<p>This is <input type="text" id="input1" placeholder="strong">>important</<input type="text" id="input2" placeholder="strong">> text.</p>
<p>This is <input type="text" id="input3" placeholder="em">>emphasized</<input type="text" id="input4" placeholder="em">> text.</p>
<p>First line<br<input type="text" id="input5" placeholder="">>Second line</p>`,
                        solution: ["strong", "strong", "em", "em", "/"],
                        hint: "Use <strong> for bold/important text, <em> for italic/emphasized text, and <br> for line breaks.",
                        requirements: [
                            "Make 'important' bold using strong tags",
                            "Make 'emphasized' italic using em tags",
                            "Add a line break between the two lines"
                        ]
                    }
                ]
            },
            2: {
                title: "Text & Headings",
                subtitle: "Master text formatting and heading hierarchy",
                time: "15-20 minutes",
                challenges: 3,
                difficulty: "Beginner",
                xp: 50,
                challenges: [
                    {
                        title: "Heading Hierarchy",
                        description: "Create a proper heading hierarchy from h1 to h4.",
                        code: `<h1>Document Title</h1>
<h<input type="text" id="input1" placeholder="2">>Chapter 1</h<input type="text" id="input2" placeholder="2">>
<h<input type="text" id="input3" placeholder="3">>Section 1.1</h<input type="text" id="input4" placeholder="3">>
<h<input type="text" id="input5" placeholder="4">>Subsection 1.1.1</h<input type="text" id="input6" placeholder="4">>`,
                        solution: ["2", "2", "3", "3", "4", "4"],
                        hint: "Headings go from h1 (most important) to h6 (least important). Maintain proper hierarchy.",
                        requirements: [
                            "Use h1 for document title",
                            "Use h2 for chapter headings",
                            "Use h3 for section headings",
                            "Use h4 for subsection headings"
                        ]
                    },
                    {
                        title: "Text Formatting Tags",
                        description: "Use different text formatting tags: small, mark, del, and ins.",
                        code: `<p>Regular text <input type="text" id="input1" placeholder="small">>small text</<input type="text" id="input2" placeholder="small">></p>
<p>This is <input type="text" id="input3" placeholder="mark">>highlighted</<input type="text" id="input4" placeholder="mark">> text.</p>
<p><input type="text" id="input5" placeholder="del">>Old price: $100</<input type="text" id="input6" placeholder="del">> <input type="text" id="input7" placeholder="ins">>New price: $80</<input type="text" id="input8" placeholder="ins">></p>`,
                        solution: ["small", "small", "mark", "mark", "del", "del", "ins", "ins"],
                        hint: "<small> for smaller text, <mark> for highlighted text, <del> for deleted text, <ins> for inserted text.",
                        requirements: [
                            "Make 'small text' smaller",
                            "Highlight 'highlighted' text",
                            "Show old price as deleted",
                            "Show new price as inserted"
                        ]
                    },
                    {
                        title: "Special Characters",
                        description: "Use HTML entities for special characters and symbols.",
                        code: `<p>Copyright symbol: &<input type="text" id="input1" placeholder="copy">;</p>
<p>Registered trademark: &<input type="text" id="input2" placeholder="reg">;</p>
<p>Less than: &<input type="text" id="input3" placeholder="lt">; Greater than: &<input type="text" id="input4" placeholder="gt">;</p>
<p>Ampersand: &<input type="text" id="input5" placeholder="amp">;</p>`,
                        solution: ["copy", "reg", "lt", "gt", "amp"],
                        hint: "&copy; for ©, &reg; for ®, &lt; for <, &gt; for >, &amp; for &.",
                        requirements: [
                            "Add copyright symbol (©)",
                            "Add registered trademark symbol (®)",
                            "Add less than and greater than symbols",
                            "Add ampersand symbol"
                        ]
                    }
                ]
            },
            3: {
                title: "Links & Images",
                subtitle: "Connect pages and add visual content",
                time: "20-25 minutes",
                challenges: 3,
                difficulty: "Beginner",
                xp: 75,
                challenges: [
                    {
                        title: "Create a Hyperlink",
                        description: "Create a link to Google that opens in a new tab.",
                        code: `<p>Visit <a <input type="text" id="input1" placeholder="href">="https://google.com" <input type="text" id="input2" placeholder="target">="_blank">Google</<input type="text" id="input3" placeholder="a">></p>`,
                        solution: ["href", "target", "a"],
                        hint: "Links use <a> tag with href attribute. Use target='_blank' to open in new tab.",
                        requirements: [
                            "Link to https://google.com",
                            "Make it open in a new tab",
                            "Use the correct closing tag"
                        ]
                    },
                    {
                        title: "Add an Image",
                        description: "Add an image with proper attributes including alt text.",
                        code: `<img <input type="text" id="input1" placeholder="src">="kitten.jpg" <input type="text" id="input2" placeholder="alt">="Cute kitten" <input type="text" id="input3" placeholder="width">="300" <input type="text" id="input4" placeholder="height">="200">`,
                        solution: ["src", "alt", "width", "height"],
                        hint: "Images use <img> tag with src, alt, width, and height attributes. Alt text is important for accessibility.",
                        requirements: [
                            "Set image source to kitten.jpg",
                            "Add descriptive alt text",
                            "Set width to 300px",
                            "Set height to 200px"
                        ]
                    },
                    {
                        title: "Image as Link",
                        description: "Make an image clickable by wrapping it in a link.",
                        code: `<a <input type="text" id="input1" placeholder="href">="gallery.html">
  <img src="photo.jpg" alt="My photo" <input type="text" id="input2" placeholder="title">="Click to enlarge">
</<input type="text" id="input3" placeholder="a">>`,
                        solution: ["href", "title", "a"],
                        hint: "Wrap the img tag inside an a tag. The title attribute provides tooltip text.",
                        requirements: [
                            "Link to gallery.html",
                            "Add title attribute to image",
                            "Close the link properly"
                        ]
                    }
                ]
            },
            4: {
                title: "Lists & Tables",
                subtitle: "Organize content with lists and tables",
                time: "25-30 minutes",
                challenges: 3,
                difficulty: "Intermediate",
                xp: 75,
                challenges: [
                    {
                        title: "Unordered List",
                        description: "Create an unordered list (bulleted list) with three items.",
                        code: `<ul>
  <<input type="text" id="input1" placeholder="li">>First item</<input type="text" id="input2" placeholder="li">>
  <<input type="text" id="input3" placeholder="li">>Second item</<input type="text" id="input4" placeholder="li">>
  <<input type="text" id="input5" placeholder="li">>Third item</<input type="text" id="input6" placeholder="li">>
</ul>`,
                        solution: ["li", "li", "li", "li", "li", "li"],
                        hint: "Unordered lists use <ul> tag, list items use <li> tag.",
                        requirements: [
                            "Create an unordered list",
                            "Add three list items",
                            "Close all tags properly"
                        ]
                    },
                    {
                        title: "Ordered List",
                        description: "Create a numbered list starting from 5.",
                        code: `<ol <input type="text" id="input1" placeholder="start">="5">
  <li>Item 5</li>
  <li>Item 6</li>
  <li>Item <input type="text" id="input2" placeholder="7"></li>
</ol>`,
                        solution: ["start", "7"],
                        hint: "Ordered lists use <ol> tag. Use start attribute to specify starting number.",
                        requirements: [
                            "Start the list from number 5",
                            "Add the correct item number"
                        ]
                    },
                    {
                        title: "Basic Table",
                        description: "Create a simple table with headers and two rows of data.",
                        code: `<table>
  <tr>
    <<input type="text" id="input1" placeholder="th">>Name</<input type="text" id="input2" placeholder="th">>
    <<input type="text" id="input3" placeholder="th">>Age</th>
  </tr>
  <tr>
    <<input type="text" id="input4" placeholder="td">>John</td>
    <<input type="text" id="input5" placeholder="td">>25</td>
  </tr>
</table>`,
                        solution: ["th", "th", "th", "td", "td"],
                        hint: "Tables use <table>, <tr> for rows, <th> for headers, <td> for data cells.",
                        requirements: [
                            "Use th for header cells",
                            "Use td for data cells",
                            "Create proper table structure"
                        ]
                    }
                ]
            },
            5: {
                title: "Forms & Input",
                subtitle: "Create interactive forms for user input",
                time: "30-35 minutes",
                challenges: 3,
                difficulty: "Intermediate",
                xp: 100,
                challenges: [
                    {
                        title: "Text Input Form",
                        description: "Create a form with text input, email, and password fields.",
                        code: `<form>
  <label for="name">Name:</label>
  <input type="<input type="text" id="input1" placeholder="text">" id="name"><br>

  <label for="email">Email:</label>
  <input type="<input type="text" id="input2" placeholder="email">" id="email"><br>

  <label for="password">Password:</label>
  <input type="<input type="text" id="input3" placeholder="password">" id="password">
</form>`,
                        solution: ["text", "email", "password"],
                        hint: "Input types: text, email, password. Email type validates email format.",
                        requirements: [
                            "Create text input for name",
                            "Create email input for email",
                            "Create password input"
                        ]
                    },
                    {
                        title: "Radio Buttons & Checkboxes",
                        description: "Create radio buttons for single choice and checkboxes for multiple choices.",
                        code: `<p>Choose your gender:</p>
<input type="<input type="text" id="input1" placeholder="radio">" id="male" name="gender">
<label for="male">Male</label>

<input type="<input type="text" id="input2" placeholder="radio">" id="female" name="gender">
<label for="female">Female</label>

<p>Select your hobbies:</p>
<input type="<input type="text" id="input3" placeholder="checkbox">" id="reading">
<label for="reading">Reading</label>`,
                        solution: ["radio", "radio", "checkbox"],
                        hint: "Radio buttons for single selection (same name), checkboxes for multiple selection.",
                        requirements: [
                            "Create radio buttons for gender",
                            "Use same name for radio buttons",
                            "Create checkbox for hobby"
                        ]
                    },
                    {
                        title: "Dropdown & Textarea",
                        description: "Create a dropdown select and a textarea for comments.",
                        code: `<label for="country">Country:</label>
<select id="country">
  <option value="us">USA</option>
  <option value="uk">UK</option>
</<input type="text" id="input1" placeholder="select">>

<label for="comments">Comments:</label>
<<input type="text" id="input2" placeholder="textarea"> id="comments" rows="4"></textarea>`,
                        solution: ["select", "textarea"],
                        hint: "Dropdowns use <select> with <option> tags. Textareas use <textarea> tag.",
                        requirements: [
                            "Close the select tag",
                            "Create a textarea for comments"
                        ]
                    }
                ]
            }
            // Note: Levels 6-8 would follow similar pattern with more advanced topics
        };

        let currentLevel = {{ $level }};
        let currentChallengeIndex = 0;
        let currentLevelData = levelData[currentLevel] || levelData[1];
        let xp = parseInt(document.getElementById('xpCount').textContent) || 125;
        let completedChallenges = JSON.parse(localStorage.getItem(`level_${currentLevel}_completed`) || '[]');

        document.addEventListener('DOMContentLoaded', function () {
            // Initialize level
            initializeLevel();

            // Theme Toggle
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

        function initializeLevel() {
            // Update level info
            document.getElementById('levelTitle').textContent = `Level ${currentLevel}: ${currentLevelData.title}`;
            document.getElementById('levelSubtitle').textContent = currentLevelData.subtitle;
            document.getElementById('levelTime').textContent = currentLevelData.time;
            document.getElementById('levelChallenges').textContent = `${currentLevelData.challenges.length} Challenges`;
            document.getElementById('levelDifficulty').textContent = currentLevelData.difficulty;
            document.getElementById('levelXP').textContent = `+${currentLevelData.xp} XP`;

            // Load first challenge
            loadChallenge(0);

            // Update challenge navigation
            updateChallengeNav();

            // Check if level is already completed
            if (completedChallenges.length === currentLevelData.challenges.length) {
                markLevelAsCompleted();
            }
        }

        function loadChallenge(challengeIndex) {
            currentChallengeIndex = challengeIndex;
            const challenge = currentLevelData.challenges[challengeIndex];

            // Update challenge info
            document.getElementById('challengeTitle').textContent = `Challenge ${challengeIndex + 1}/${currentLevelData.challenges.length}: ${challenge.title}`;
            document.getElementById('challengeTitleMain').innerHTML = `<i class="fas fa-puzzle-piece"></i> ${challenge.title}`;
            document.getElementById('challengeDescription').textContent = challenge.description;

            // Update requirements list
            const requirementsList = document.getElementById('requirementsList');
            requirementsList.innerHTML = '';
            challenge.requirements.forEach(req => {
                requirementsList.innerHTML += `<li><i class="fas fa-check"></i> ${req}</li>`;
            });

            // Update code editor
            document.getElementById('codeEditor').innerHTML = challenge.code;

            // Update line numbers
            const lines = challenge.code.split('\n').length;
            let lineNumbers = '';
            for (let i = 1; i <= lines; i++) {
                lineNumbers += `${i}<br>`;
            }
            document.getElementById('lineNumbers').innerHTML = lineNumbers;

            // Update general hint
            document.getElementById('generalHint').textContent = challenge.hint;

            // Update challenge navigation
            updateChallengeNav();

            // Reset feedback
            document.getElementById('feedback').style.display = 'none';
            document.getElementById('outputContent').innerHTML = '';

            // Check if challenge is already completed
            if (completedChallenges.includes(challengeIndex)) {
                markChallengeAsCompleted(challengeIndex);
            } else {
                // Reset submit button
                const submitBtn = document.querySelector('.btn-submit');
                submitBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Submit Solution';
                submitBtn.style.background = 'linear-gradient(135deg, var(--primary), var(--primary-dark))';
                submitBtn.style.color = 'white';
                submitBtn.disabled = false;
            }
        }

        function updateChallengeNav() {
            const challengeNav = document.getElementById('challengeNav');
            challengeNav.innerHTML = '';

            currentLevelData.challenges.forEach((challenge, index) => {
                const isCompleted = completedChallenges.includes(index);
                const isActive = index === currentChallengeIndex;

                const btn = document.createElement('button');
                btn.className = `btn ${isActive ? 'active' : ''}`;
                btn.style.background = isCompleted ? 'rgba(16, 185, 129, 0.15)' : 'rgba(59, 130, 246, 0.1)';
                btn.style.color = isCompleted ? 'var(--success)' : (isActive ? 'var(--primary)' : 'var(--secondary)');
                btn.style.border = isCompleted ? '1px solid rgba(16, 185, 129, 0.3)' : '1px solid rgba(59, 130, 246, 0.2)';
                btn.textContent = `Challenge ${index + 1}`;
                btn.onclick = () => loadChallenge(index);

                challengeNav.appendChild(btn);
            });
        }

        function runCode() {
            const feedback = document.getElementById('feedback');
            const outputContent = document.getElementById('outputContent');

            try {
                // Get user's inputs
                const inputs = [];
                for (let i = 1; i <= 10; i++) {
                    const input = document.getElementById(`input${i}`);
                    if (input) {
                        inputs.push(input.value || '');
                    }
                }

                // Get the challenge template
                const challenge = currentLevelData.challenges[currentChallengeIndex];
                let userCode = challenge.code;

                // Replace inputs in the code
                inputs.forEach((value, index) => {
                    const placeholder = `<input type="text" id="input${index + 1}"`;
                    const replacement = value || `input${index + 1}`;
                    userCode = userCode.replace(new RegExp(`${placeholder}[^>]*>`, 'g'), replacement);
                });

                // Clean up any remaining input tags
                userCode = userCode.replace(/<input[^>]*>/g, '___');

                // Display the rendered HTML
                const iframe = document.createElement('iframe');
                iframe.style.width = '100%';
                iframe.style.height = '300px';
                iframe.style.border = 'none';
                iframe.style.borderRadius = '8px';
                iframe.style.background = 'white';

                outputContent.innerHTML = '';
                outputContent.appendChild(iframe);

                // Write the HTML to the iframe
                const iframeDoc = iframe.contentDocument || iframe.contentWindow.document;
                iframeDoc.open();
                iframeDoc.write(userCode);
                iframeDoc.close();

                feedback.textContent = 'Code executed successfully! Check the preview above.';
                feedback.className = 'feedback success';
                feedback.style.display = 'block';

            } catch (error) {
                feedback.textContent = 'Error: ' + error.message;
                feedback.className = 'feedback error';
                feedback.style.display = 'block';
            }
        }

        function submitCode() {
            const feedback = document.getElementById('feedback');
            const challenge = currentLevelData.challenges[currentChallengeIndex];

            // Get user's inputs
            const userInputs = [];
            for (let i = 1; i <= challenge.solution.length; i++) {
                const input = document.getElementById(`input${i}`);
                if (input) {
                    userInputs.push(input.value.toLowerCase().trim());
                }
            }

            // Check solution
            let isCorrect = true;
            for (let i = 0; i < challenge.solution.length; i++) {
                if (userInputs[i] !== challenge.solution[i]) {
                    isCorrect = false;
                    break;
                }
            }

            if (isCorrect) {
                // Mark challenge as completed
                if (!completedChallenges.includes(currentChallengeIndex)) {
                    completedChallenges.push(currentChallengeIndex);
                    localStorage.setItem(`level_${currentLevel}_completed`, JSON.stringify(completedChallenges));

                    // Award XP
                    xp += 10;
                    document.getElementById('xpCount').textContent = xp;
                    localStorage.setItem('user_xp', xp);

                    // Show success message
                    feedback.innerHTML = `
                        <div style="display: flex; align-items: center; gap: 10px;">
                            <i class="fas fa-check-circle" style="font-size: 1.2rem;"></i>
                            <div>
                                <strong style="font-size: 1.1rem;">Perfect! Challenge ${currentChallengeIndex + 1} completed!</strong>
                                <div style="margin-top: 5px;">+10 XP earned! You now have ${xp} XP.</div>
                            </div>
                        </div>
                    `;
                } else {
                    feedback.innerHTML = `
                        <div style="display: flex; align-items: center; gap: 10px;">
                            <i class="fas fa-check-circle" style="font-size: 1.2rem;"></i>
                            <div>
                                <strong style="font-size: 1.1rem;">Challenge already completed!</strong>
                                <div style="margin-top: 5px;">Great job! Move to the next challenge.</div>
                            </div>
                        </div>
                    `;
                }

                feedback.className = 'feedback success';
                feedback.style.display = 'block';

                // Mark challenge as completed in UI
                markChallengeAsCompleted(currentChallengeIndex);

                // Update challenge navigation
                updateChallengeNav();

                // Check if all challenges are completed
                if (completedChallenges.length === currentLevelData.challenges.length) {
                    markLevelAsCompleted();
                }

            } else {
                feedback.innerHTML = `
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <i class="fas fa-times-circle" style="font-size: 1.2rem;"></i>
                        <div>
                            <strong style="font-size: 1.1rem;">Not quite right.</strong>
                            <div style="margin-top: 5px;">${challenge.hint}</div>
                        </div>
                    </div>
                `;
                feedback.className = 'feedback error';
                feedback.style.display = 'block';
            }
        }

        function markChallengeAsCompleted(challengeIndex) {
            // Disable inputs for this challenge
            for (let i = 1; i <= 10; i++) {
                const input = document.getElementById(`input${i}`);
                if (input) input.disabled = true;
            }

            // Update submit button
            const submitBtn = document.querySelector('.btn-submit');
            submitBtn.innerHTML = '<i class="fas fa-check"></i> Completed';
            submitBtn.style.background = 'rgba(16, 185, 129, 0.15)';
            submitBtn.style.color = 'var(--success)';
            submitBtn.style.border = '1px solid rgba(16, 185, 129, 0.3)';
            submitBtn.disabled = true;
        }

        function markLevelAsCompleted() {
            // Show completion message
            const feedback = document.getElementById('feedback');
            feedback.innerHTML = `
                <div style="display: flex; align-items: center; gap: 10px;">
                    <i class="fas fa-trophy" style="font-size: 1.2rem; color: var(--warning);"></i>
                    <div>
                        <strong style="font-size: 1.1rem;">Level ${currentLevel} Completed!</strong>
                        <div style="margin-top: 5px;">Congratulations! You've earned +${currentLevelData.xp} XP for completing this level.</div>
                    </div>
                </div>
            `;
            feedback.className = 'feedback success';
            feedback.style.display = 'block';

            // Award level completion XP
            xp += currentLevelData.xp;
            document.getElementById('xpCount').textContent = xp;
            localStorage.setItem('user_xp', xp);

            // Show next level button
            if (currentLevel < 8) {
                document.getElementById('nextLevelBtn').style.display = 'inline-flex';
            } else {
                document.getElementById('finishCourseBtn').style.display = 'inline-flex';
            }

            // Save level completion to localStorage
            const completedLevels = JSON.parse(localStorage.getItem('completed_levels') || '[]');
            if (!completedLevels.includes(currentLevel)) {
                completedLevels.push(currentLevel);
                localStorage.setItem('completed_levels', JSON.stringify(completedLevels));
            }
        }

        function showHint() {
            const feedback = document.getElementById('feedback');
            const challenge = currentLevelData.challenges[currentChallengeIndex];

            feedback.innerHTML = `
                <div style="display: flex; align-items: flex-start; gap: 10px;">
                    <i class="fas fa-lightbulb" style="font-size: 1.2rem; color: var(--warning); margin-top: 2px;"></i>
                    <div>
                        <strong style="font-size: 1.1rem; color: var(--warning);">Hint:</strong>
                        <div style="margin-top: 5px;">${challenge.hint}</div>
                    </div>
                </div>
            `;
            feedback.className = 'feedback';
            feedback.style.backgroundColor = 'rgba(245, 158, 11, 0.1)';
            feedback.style.border = '1px solid rgba(245, 158, 11, 0.3)';
            feedback.style.display = 'block';
        }

        function resetCode() {
            if (confirm('Are you sure you want to reset this challenge? Your progress will be lost.')) {
                loadChallenge(currentChallengeIndex);
                document.getElementById('outputContent').innerHTML = '';
                document.getElementById('feedback').style.display = 'none';
            }
        }
    </script>
</body>
</html>
