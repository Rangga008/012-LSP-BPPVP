<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Layout</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: #f5f5f5;
    }

    .layout-demo {
        margin-bottom: 30px;
        background: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    }

    .demo-label {
        background: #333;
        color: white;
        padding: 15px 20px;
        font-size: 14px;
        font-weight: 600;
        letter-spacing: 1px;
    }

    /* Layout 1 - Classic Header + Sidebar */
    .layout1 {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    .layout1 .header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 20px 50px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .layout1 .header .logo {
        font-size: 24px;
        font-weight: 700;
    }

    .layout1 .header nav {
        display: flex;
        gap: 30px;
    }

    .layout1 .header nav a {
        color: white;
        text-decoration: none;
        transition: opacity 0.3s;
    }

    .layout1 .header nav a:hover {
        opacity: 0.8;
    }

    .layout1 .main-container {
        display: flex;
        flex: 1;
    }

    .layout1 .sidebar {
        width: 250px;
        background: #f8f9fa;
        padding: 30px 20px;
        border-right: 1px solid #e0e0e0;
    }

    .layout1 .sidebar h3 {
        font-size: 14px;
        color: #666;
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .layout1 .sidebar ul {
        list-style: none;
    }

    .layout1 .sidebar ul li {
        margin-bottom: 15px;
    }

    .layout1 .sidebar ul li a {
        color: #333;
        text-decoration: none;
        display: block;
        padding: 10px 15px;
        border-radius: 5px;
        transition: background 0.3s;
    }

    .layout1 .sidebar ul li a:hover {
        background: #e9ecef;
    }

    .layout1 .content {
        flex: 1;
        padding: 40px;
    }

    .layout1 .content h1 {
        font-size: 32px;
        margin-bottom: 20px;
        color: #333;
    }

    .layout1 .content p {
        color: #666;
        line-height: 1.8;
        margin-bottom: 20px;
    }

    /* Layout 2 - Full Width Hero + Grid */
    .layout2 .header {
        background: #1a1a1a;
        color: white;
        padding: 20px 50px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .layout2 .header .logo {
        font-size: 24px;
        font-weight: 700;
    }

    .layout2 .header nav {
        display: flex;
        gap: 30px;
    }

    .layout2 .header nav a {
        color: #ccc;
        text-decoration: none;
        transition: color 0.3s;
    }

    .layout2 .header nav a:hover {
        color: white;
    }

    .layout2 .hero {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 100px 50px;
        text-align: center;
    }

    .layout2 .hero h1 {
        font-size: 48px;
        margin-bottom: 20px;
        font-weight: 700;
    }

    .layout2 .hero p {
        font-size: 18px;
        opacity: 0.9;
        max-width: 600px;
        margin: 0 auto 30px;
    }

    .layout2 .hero button {
        background: white;
        color: #667eea;
        padding: 15px 40px;
        border: none;
        border-radius: 30px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: transform 0.3s;
    }

    .layout2 .hero button:hover {
        transform: translateY(-2px);
    }

    .layout2 .grid-section {
        padding: 80px 50px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .layout2 .grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }

    .layout2 .card {
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s;
    }

    .layout2 .card:hover {
        transform: translateY(-5px);
    }

    .layout2 .card h3 {
        font-size: 20px;
        margin-bottom: 15px;
        color: #333;
    }

    .layout2 .card p {
        color: #666;
        line-height: 1.6;
    }

    /* Layout 3 - Split Screen */
    .layout3 {
        display: flex;
        min-height: 100vh;
    }

    .layout3 .left-panel {
        width: 40%;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 60px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .layout3 .left-panel h1 {
        font-size: 42px;
        margin-bottom: 20px;
        font-weight: 700;
    }

    .layout3 .left-panel p {
        font-size: 18px;
        line-height: 1.8;
        opacity: 0.9;
    }

    .layout3 .right-panel {
        flex: 1;
        padding: 60px;
        overflow-y: auto;
    }

    .layout3 .right-panel h2 {
        font-size: 28px;
        margin-bottom: 30px;
        color: #333;
    }

    .layout3 .feature {
        margin-bottom: 40px;
        padding-bottom: 40px;
        border-bottom: 1px solid #e0e0e0;
    }

    .layout3 .feature:last-child {
        border-bottom: none;
    }

    .layout3 .feature h3 {
        font-size: 20px;
        margin-bottom: 15px;
        color: #667eea;
    }

    .layout3 .feature p {
        color: #666;
        line-height: 1.7;
    }

    /* Layout 4 - Centered Content */
    .layout4 {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    .layout4 .navbar {
        background: white;
        padding: 20px 0;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        position: sticky;
        top: 0;
        z-index: 100;
    }

    .layout4 .navbar-content {
        max-width: 1000px;
        margin: 0 auto;
        padding: 0 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .layout4 .navbar .logo {
        font-size: 24px;
        font-weight: 700;
        color: #667eea;
    }

    .layout4 .navbar nav {
        display: flex;
        gap: 30px;
    }

    .layout4 .navbar nav a {
        color: #666;
        text-decoration: none;
        transition: color 0.3s;
    }

    .layout4 .navbar nav a:hover {
        color: #667eea;
    }

    .layout4 .main-content {
        max-width: 800px;
        margin: 80px auto;
        padding: 0 40px;
    }

    .layout4 .main-content h1 {
        font-size: 42px;
        margin-bottom: 30px;
        color: #333;
        text-align: center;
    }

    .layout4 .main-content .article {
        background: white;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        margin-bottom: 30px;
    }

    .layout4 .main-content .article h2 {
        font-size: 24px;
        margin-bottom: 20px;
        color: #333;
    }

    .layout4 .main-content .article p {
        color: #666;
        line-height: 1.8;
        margin-bottom: 15px;
    }

    /* Layout 5 - Dashboard Style */
    .layout5 {
        display: flex;
        min-height: 100vh;
    }

    .layout5 .sidebar-nav {
        width: 260px;
        background: #1a1a1a;
        color: white;
        padding: 30px 0;
    }

    .layout5 .sidebar-nav .logo {
        padding: 0 30px;
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 40px;
    }

    .layout5 .sidebar-nav ul {
        list-style: none;
    }

    .layout5 .sidebar-nav ul li {
        margin-bottom: 5px;
    }

    .layout5 .sidebar-nav ul li a {
        color: #999;
        text-decoration: none;
        display: block;
        padding: 15px 30px;
        transition: all 0.3s;
    }

    .layout5 .sidebar-nav ul li a:hover {
        background: #2a2a2a;
        color: white;
    }

    .layout5 .main-area {
        flex: 1;
        background: #f5f5f5;
    }

    .layout5 .top-bar {
        background: white;
        padding: 20px 40px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .layout5 .top-bar h2 {
        font-size: 24px;
        color: #333;
    }

    .layout5 .top-bar .user {
        display: flex;
        align-items: center;
        gap: 10px;
        color: #666;
    }

    .layout5 .dashboard-content {
        padding: 40px;
    }

    .layout5 .stats {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        margin-bottom: 30px;
    }

    .layout5 .stat-card {
        background: white;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }

    .layout5 .stat-card h3 {
        font-size: 14px;
        color: #999;
        margin-bottom: 10px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .layout5 .stat-card .value {
        font-size: 32px;
        font-weight: 700;
        color: #333;
    }

    /* Layout 6 - Magazine Style */
    .layout6 .header-bar {
        background: white;
        padding: 25px 50px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        text-align: center;
    }

    .layout6 .header-bar .logo {
        font-size: 32px;
        font-weight: 700;
        color: #333;
        letter-spacing: 3px;
        font-family: 'Georgia', serif;
    }

    .layout6 .nav-bar {
        background: #f8f9fa;
        padding: 15px 50px;
        text-align: center;
        border-bottom: 1px solid #e0e0e0;
    }

    .layout6 .nav-bar nav {
        display: flex;
        justify-content: center;
        gap: 40px;
    }

    .layout6 .nav-bar nav a {
        color: #666;
        text-decoration: none;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: color 0.3s;
    }

    .layout6 .nav-bar nav a:hover {
        color: #333;
    }

    .layout6 .featured {
        padding: 60px 50px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .layout6 .featured-grid {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 30px;
    }

    .layout6 .main-article {
        background: #f8f9fa;
        padding: 40px;
        border-radius: 10px;
    }

    .layout6 .main-article h2 {
        font-size: 36px;
        margin-bottom: 20px;
        color: #333;
        font-family: 'Georgia', serif;
    }

    .layout6 .main-article p {
        color: #666;
        line-height: 1.8;
        font-size: 16px;
    }

    .layout6 .sidebar-articles {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .layout6 .sidebar-article {
        background: white;
        padding: 20px;
        border-radius: 10px;
        border-left: 4px solid #667eea;
    }

    .layout6 .sidebar-article h3 {
        font-size: 18px;
        margin-bottom: 10px;
        color: #333;
    }

    .layout6 .sidebar-article p {
        color: #666;
        font-size: 14px;
        line-height: 1.6;
    }
    </style>
</head>

<body>

    <!-- Layout 1: Classic Header + Sidebar -->
    <div class="layout-demo">
        <div class="demo-label">Layout 1 - Classic Header + Sidebar</div>
        <div class="layout1">
            <header class="header">
                <div class="logo">BRAND</div>
                <nav>
                    <a href="#">Home</a>
                    <a href="#">About</a>
                    <a href="#">Services</a>
                    <a href="#">Contact</a>
                </nav>
            </header>
            <div class="main-container">
                <aside class="sidebar">
                    <h3>Menu</h3>
                    <ul>
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Orders</a></li>
                        <li><a href="#">Customers</a></li>
                        <li><a href="#">Reports</a></li>
                        <li><a href="#">Settings</a></li>
                    </ul>
                </aside>
                <main class="content">
                    <h1>Welcome to Dashboard</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                </main>
            </div>
        </div>
    </div>

    <!-- Layout 2: Full Width Hero + Grid -->
    <div class="layout-demo">
        <div class="demo-label">Layout 2 - Full Width Hero + Grid</div>
        <div class="layout2">
            <header class="header">
                <div class="logo">STUDIO</div>
                <nav>
                    <a href="#">Work</a>
                    <a href="#">Services</a>
                    <a href="#">About</a>
                    <a href="#">Contact</a>
                </nav>
            </header>
            <section class="hero">
                <h1>Build Something Amazing</h1>
                <p>We create digital experiences that inspire and engage your audience with stunning design and powerful
                    technology.</p>
                <button>Get Started</button>
            </section>
            <section class="grid-section">
                <div class="grid">
                    <div class="card">
                        <h3>Design</h3>
                        <p>Beautiful, modern designs that captivate and convert your audience into loyal customers.</p>
                    </div>
                    <div class="card">
                        <h3>Development</h3>
                        <p>Robust, scalable solutions built with the latest technologies and best practices.</p>
                    </div>
                    <div class="card">
                        <h3>Marketing</h3>
                        <p>Strategic campaigns that drive growth and maximize your return on investment.</p>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Layout 3: Split Screen -->
    <div class="layout-demo">
        <div class="demo-label">Layout 3 - Split Screen</div>
        <div class="layout3">
            <div class="left-panel">
                <h1>Innovative Solutions</h1>
                <p>We combine creativity with technology to deliver exceptional results that exceed expectations and
                    drive real business growth.</p>
            </div>
            <div class="right-panel">
                <h2>Our Features</h2>
                <div class="feature">
                    <h3>Fast Performance</h3>
                    <p>Lightning-fast load times and smooth interactions that keep your users engaged and coming back
                        for more.</p>
                </div>
                <div class="feature">
                    <h3>Responsive Design</h3>
                    <p>Perfectly optimized for all devices, ensuring a seamless experience whether on mobile, tablet, or
                        desktop.</p>
                </div>
                <div class="feature">
                    <h3>Secure & Reliable</h3>
                    <p>Enterprise-grade security and 99.9% uptime guarantee to keep your business running smoothly.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Layout 4: Centered Content -->
    <div class="layout-demo">
        <div class="demo-label">Layout 4 - Centered Content Blog</div>
        <div class="layout4">
            <nav class="navbar">
                <div class="navbar-content">
                    <div class="logo">BLOG</div>
                    <nav>
                        <a href="#">Articles</a>
                        <a href="#">Categories</a>
                        <a href="#">About</a>
                    </nav>
                </div>
            </nav>
            <main class="main-content">
                <h1>Latest Articles</h1>
                <article class="article">
                    <h2>The Future of Web Design</h2>
                    <p>Discover the latest trends and technologies shaping the future of web design and development.</p>
                    <p>From AI-powered design tools to immersive 3D experiences, the web is evolving faster than ever
                        before.</p>
                </article>
                <article class="article">
                    <h2>Building Scalable Applications</h2>
                    <p>Learn how to architect applications that can grow with your business and handle millions of
                        users.</p>
                </article>
            </main>
        </div>
    </div>

    <!-- Layout 5: Dashboard Style -->
    <div class="layout-demo">
        <div class="demo-label">Layout 5 - Dashboard Style</div>
        <div class="layout5">
            <aside class="sidebar-nav">
                <div class="logo">ADMIN</div>
                <ul>
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Analytics</a></li>
                    <li><a href="#">Users</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Orders</a></li>
                    <li><a href="#">Settings</a></li>
                </ul>
            </aside>
            <div class="main-area">
                <div class="top-bar">
                    <h2>Dashboard Overview</h2>
                    <div class="user">
                        <span>Admin User</span>
                    </div>
                </div>
                <div class="dashboard-content">
                    <div class="stats">
                        <div class="stat-card">
                            <h3>Total Users</h3>
                            <div class="value">12,543</div>
                        </div>
                        <div class="stat-card">
                            <h3>Revenue</h3>
                            <div class="value">$45.2K</div>
                        </div>
                        <div class="stat-card">
                            <h3>Orders</h3>
                            <div class="value">1,234</div>
                        </div>
                        <div class="stat-card">
                            <h3>Growth</h3>
                            <div class="value">+23%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Layout 6: Magazine Style -->
    <div class="layout-demo">
        <div class="demo-label">Layout 6 - Magazine Style</div>
        <div class="layout6">
            <header class="header-bar">
                <div class="logo">THE MAGAZINE</div>
            </header>
            <nav class="nav-bar">
                <nav>
                    <a href="#">Culture</a>
                    <a href="#">Technology</a>
                    <a href="#">Business</a>
                    <a href="#">Lifestyle</a>
                    <a href="#">Opinion</a>
                </nav>
            </nav>
            <section class="featured">
                <div class="featured-grid">
                    <article class="main-article">
                        <h2>The Art of Modern Design</h2>
                        <p>In today's digital landscape, design has become more than just aesthetics. It's about
                            creating meaningful experiences that resonate with users on a deeper level. From minimalist
                            interfaces to bold, experimental layouts, designers are pushing boundaries and redefining
                            what's possible.</p>
                    </article>
                    <aside class="sidebar-articles">
                        <article class="sidebar-article">
                            <h3>Tech Trends 2025</h3>
                            <p>Exploring the innovations shaping our future.</p>
                        </article>
                        <article class="sidebar-article">
                            <h3>Creative Workflow</h3>
                            <p>Tools and tips for maximum productivity.</p>
                        </article>
                    </aside>
                </div>
            </section>
        </div>
    </div>

</body>

</html>