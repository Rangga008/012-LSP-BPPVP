<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Navbar</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: #f5f5f5;
        padding: 20px;
    }

    .navbar-container {
        margin-bottom: 40px;
    }

    h3 {
        margin-bottom: 15px;
        color: #333;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* Navbar 1 - Minimalist Elegant */
    .nav1 {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        padding: 20px 50px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .nav1 .logo {
        font-size: 26px;
        font-weight: 700;
        color: white;
        letter-spacing: 2px;
    }

    .nav1 .menu {
        display: flex;
        gap: 40px;
        list-style: none;
    }

    .nav1 .menu a {
        color: white;
        text-decoration: none;
        font-size: 15px;
        font-weight: 500;
        transition: all 0.3s;
        position: relative;
    }

    .nav1 .menu a::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 0;
        height: 2px;
        background: white;
        transition: width 0.3s;
    }

    .nav1 .menu a:hover::after {
        width: 100%;
    }

    /* Navbar 2 - Glass Morphism */
    .nav2 {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        padding: 18px 50px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-radius: 15px;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    }

    .nav2 .logo {
        font-size: 24px;
        font-weight: 700;
        color: #333;
        letter-spacing: 1px;
    }

    .nav2 .menu {
        display: flex;
        gap: 35px;
        list-style: none;
    }

    .nav2 .menu a {
        color: #333;
        text-decoration: none;
        font-size: 15px;
        font-weight: 500;
        padding: 8px 20px;
        border-radius: 25px;
        transition: all 0.3s;
    }

    .nav2 .menu a:hover {
        background: rgba(255, 255, 255, 0.3);
        transform: translateY(-2px);
    }

    /* Navbar 3 - Dark Elegant */
    .nav3 {
        background: #1a1a1a;
        padding: 25px 50px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #333;
    }

    .nav3 .logo {
        font-size: 28px;
        font-weight: 300;
        color: #fff;
        letter-spacing: 3px;
        font-family: 'Georgia', serif;
    }

    .nav3 .menu {
        display: flex;
        gap: 45px;
        list-style: none;
    }

    .nav3 .menu a {
        color: #999;
        text-decoration: none;
        font-size: 14px;
        font-weight: 400;
        text-transform: uppercase;
        letter-spacing: 2px;
        transition: color 0.3s;
    }

    .nav3 .menu a:hover {
        color: #fff;
    }

    /* Navbar 4 - Modern Colorful */
    .nav4 {
        background: white;
        padding: 20px 50px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        border-left: 5px solid #ff6b6b;
    }

    .nav4 .logo {
        font-size: 24px;
        font-weight: 800;
        background: linear-gradient(45deg, #ff6b6b, #4ecdc4);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .nav4 .menu {
        display: flex;
        gap: 30px;
        list-style: none;
    }

    .nav4 .menu a {
        color: #333;
        text-decoration: none;
        font-size: 15px;
        font-weight: 600;
        padding: 10px 20px;
        border-radius: 8px;
        transition: all 0.3s;
    }

    .nav4 .menu a:hover {
        background: linear-gradient(45deg, #ff6b6b, #4ecdc4);
        color: white;
        transform: scale(1.05);
    }

    /* Navbar 5 - Luxury Minimal */
    .nav5 {
        background: #f8f8f8;
        padding: 30px 60px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-top: 3px solid #c9a961;
        border-bottom: 3px solid #c9a961;
    }

    .nav5 .logo {
        font-size: 22px;
        font-weight: 400;
        color: #333;
        letter-spacing: 5px;
        font-family: 'Georgia', serif;
    }

    .nav5 .menu {
        display: flex;
        gap: 50px;
        list-style: none;
    }

    .nav5 .menu a {
        color: #666;
        text-decoration: none;
        font-size: 13px;
        font-weight: 500;
        letter-spacing: 2px;
        text-transform: uppercase;
        position: relative;
        transition: color 0.3s;
    }

    .nav5 .menu a::before {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 50%;
        transform: translateX(-50%);
        width: 4px;
        height: 4px;
        background: #c9a961;
        border-radius: 50%;
        opacity: 0;
        transition: opacity 0.3s;
    }

    .nav5 .menu a:hover {
        color: #c9a961;
    }

    .nav5 .menu a:hover::before {
        opacity: 1;
    }

    /* Navbar 6 - Gradient Border */
    .nav6 {
        background: white;
        padding: 22px 50px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: relative;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
    }

    .nav6::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: linear-gradient(90deg, #667eea, #764ba2, #f093fb);
    }

    .nav6 .logo {
        font-size: 26px;
        font-weight: 700;
        color: #667eea;
    }

    .nav6 .menu {
        display: flex;
        gap: 35px;
        list-style: none;
    }

    .nav6 .menu a {
        color: #555;
        text-decoration: none;
        font-size: 15px;
        font-weight: 500;
        transition: color 0.3s;
    }

    .nav6 .menu a:hover {
        color: #667eea;
    }
    </style>
</head>

<body>

    <div class="navbar-container">
        <h3>1. Minimalist Elegant (Gradient Purple)</h3>
        <nav class="nav1">
            <div class="logo">BRAND</div>
            <ul class="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </div>

    <div class="navbar-container">
        <h3>2. Glass Morphism</h3>
        <nav class="nav2">
            <div class="logo">STUDIO</div>
            <ul class="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Work</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </div>

    <div class="navbar-container">
        <h3>3. Dark Elegant</h3>
        <nav class="nav3">
            <div class="logo">ELEGANCE</div>
            <ul class="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Collections</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Journal</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </div>

    <div class="navbar-container">
        <h3>4. Modern Colorful</h3>
        <nav class="nav4">
            <div class="logo">VIVID</div>
            <ul class="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Pricing</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </div>

    <div class="navbar-container">
        <h3>5. Luxury Minimal</h3>
        <nav class="nav5">
            <div class="logo">PRESTIGE</div>
            <ul class="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Collection</a></li>
                <li><a href="#">Story</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </div>

    <div class="navbar-container">
        <h3>6. Gradient Border</h3>
        <nav class="nav6">
            <div class="logo">MODERN</div>
            <ul class="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </div>

</body>

</html>