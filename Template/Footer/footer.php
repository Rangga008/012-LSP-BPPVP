<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Footer</title>
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

    .footer-container {
        margin-bottom: 40px;
    }

    h3 {
        margin-bottom: 15px;
        color: #333;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* Footer 1 - Modern Gradient */
    .footer1 {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 60px 50px 30px;
    }

    .footer1 .content {
        display: grid;
        grid-template-columns: 2fr 1fr 1fr 1fr;
        gap: 40px;
        margin-bottom: 40px;
    }

    .footer1 .brand h2 {
        font-size: 28px;
        margin-bottom: 15px;
        letter-spacing: 2px;
    }

    .footer1 .brand p {
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.6;
    }

    .footer1 .column h4 {
        font-size: 16px;
        margin-bottom: 20px;
        font-weight: 600;
    }

    .footer1 .column ul {
        list-style: none;
    }

    .footer1 .column ul li {
        margin-bottom: 12px;
    }

    .footer1 .column ul li a {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        transition: color 0.3s;
    }

    .footer1 .column ul li a:hover {
        color: white;
    }

    .footer1 .bottom {
        border-top: 1px solid rgba(255, 255, 255, 0.2);
        padding-top: 25px;
        text-align: center;
        color: rgba(255, 255, 255, 0.7);
    }

    /* Footer 2 - Dark Minimalist */
    .footer2 {
        background: #1a1a1a;
        color: white;
        padding: 70px 50px 30px;
    }

    .footer2 .content {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 50px;
        margin-bottom: 50px;
    }

    .footer2 .column h4 {
        font-size: 14px;
        margin-bottom: 25px;
        text-transform: uppercase;
        letter-spacing: 3px;
        font-weight: 400;
        color: #999;
    }

    .footer2 .column ul {
        list-style: none;
    }

    .footer2 .column ul li {
        margin-bottom: 15px;
    }

    .footer2 .column ul li a {
        color: #ccc;
        text-decoration: none;
        font-size: 15px;
        transition: color 0.3s;
    }

    .footer2 .column ul li a:hover {
        color: white;
    }

    .footer2 .bottom {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-top: 1px solid #333;
        padding-top: 30px;
        color: #666;
        font-size: 14px;
    }

    .footer2 .social {
        display: flex;
        gap: 20px;
    }

    .footer2 .social a {
        color: #666;
        text-decoration: none;
        transition: color 0.3s;
    }

    .footer2 .social a:hover {
        color: white;
    }

    /* Footer 3 - Clean & Light */
    .footer3 {
        background: white;
        padding: 60px 50px 30px;
        box-shadow: 0 -5px 20px rgba(0, 0, 0, 0.05);
    }

    .footer3 .content {
        display: grid;
        grid-template-columns: 2fr 1fr 1fr 1.5fr;
        gap: 40px;
        margin-bottom: 40px;
    }

    .footer3 .brand h2 {
        font-size: 24px;
        margin-bottom: 15px;
        color: #667eea;
        font-weight: 700;
    }

    .footer3 .brand p {
        color: #666;
        line-height: 1.7;
    }

    .footer3 .column h4 {
        font-size: 16px;
        margin-bottom: 20px;
        color: #333;
        font-weight: 600;
    }

    .footer3 .column ul {
        list-style: none;
    }

    .footer3 .column ul li {
        margin-bottom: 12px;
    }

    .footer3 .column ul li a {
        color: #666;
        text-decoration: none;
        transition: color 0.3s;
    }

    .footer3 .column ul li a:hover {
        color: #667eea;
    }

    .footer3 .newsletter input {
        width: 100%;
        padding: 12px;
        border: 2px solid #e0e0e0;
        border-radius: 5px;
        margin-bottom: 10px;
        font-size: 14px;
    }

    .footer3 .newsletter button {
        width: 100%;
        padding: 12px;
        background: #667eea;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: 600;
        transition: background 0.3s;
    }

    .footer3 .newsletter button:hover {
        background: #5568d3;
    }

    .footer3 .bottom {
        border-top: 1px solid #e0e0e0;
        padding-top: 25px;
        text-align: center;
        color: #999;
        font-size: 14px;
    }

    /* Footer 4 - Colorful Modern */
    .footer4 {
        background: linear-gradient(45deg, #ff6b6b, #4ecdc4);
        color: white;
        padding: 60px 50px 30px;
    }

    .footer4 .content {
        display: flex;
        justify-content: space-between;
        margin-bottom: 40px;
    }

    .footer4 .brand {
        flex: 1.5;
    }

    .footer4 .brand h2 {
        font-size: 32px;
        margin-bottom: 15px;
        font-weight: 800;
    }

    .footer4 .brand p {
        color: rgba(255, 255, 255, 0.9);
        line-height: 1.6;
        font-size: 15px;
    }

    .footer4 .links {
        display: flex;
        gap: 60px;
    }

    .footer4 .column h4 {
        font-size: 16px;
        margin-bottom: 20px;
        font-weight: 700;
    }

    .footer4 .column ul {
        list-style: none;
    }

    .footer4 .column ul li {
        margin-bottom: 12px;
    }

    .footer4 .column ul li a {
        color: rgba(255, 255, 255, 0.85);
        text-decoration: none;
        transition: all 0.3s;
    }

    .footer4 .column ul li a:hover {
        color: white;
        padding-left: 5px;
    }

    .footer4 .bottom {
        text-align: center;
        color: rgba(255, 255, 255, 0.8);
        border-top: 1px solid rgba(255, 255, 255, 0.2);
        padding-top: 25px;
    }

    /* Footer 5 - Luxury Gold */
    .footer5 {
        background: #f8f8f8;
        padding: 70px 50px 30px;
        border-top: 3px solid #c9a961;
    }

    .footer5 .content {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 50px;
        margin-bottom: 50px;
    }

    .footer5 .column h4 {
        font-size: 13px;
        margin-bottom: 25px;
        color: #c9a961;
        text-transform: uppercase;
        letter-spacing: 3px;
        font-weight: 500;
        font-family: 'Georgia', serif;
    }

    .footer5 .column ul {
        list-style: none;
    }

    .footer5 .column ul li {
        margin-bottom: 15px;
    }

    .footer5 .column ul li a {
        color: #666;
        text-decoration: none;
        font-size: 14px;
        letter-spacing: 1px;
        transition: color 0.3s;
    }

    .footer5 .column ul li a:hover {
        color: #c9a961;
    }

    .footer5 .bottom {
        text-align: center;
        color: #999;
        font-size: 13px;
        border-top: 1px solid #ddd;
        padding-top: 30px;
        letter-spacing: 1px;
    }

    /* Footer 6 - Tech Style */
    .footer6 {
        background: #0f0f0f;
        color: white;
        padding: 60px 50px 30px;
        position: relative;
        overflow: hidden;
    }

    .footer6::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 2px;
        background: linear-gradient(90deg, #667eea, #764ba2, #f093fb);
    }

    .footer6 .content {
        display: grid;
        grid-template-columns: 1.5fr 1fr 1fr 1fr;
        gap: 40px;
        margin-bottom: 40px;
    }

    .footer6 .brand h2 {
        font-size: 26px;
        margin-bottom: 15px;
        background: linear-gradient(90deg, #667eea, #764ba2);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .footer6 .brand p {
        color: #aaa;
        line-height: 1.7;
    }

    .footer6 .column h4 {
        font-size: 15px;
        margin-bottom: 20px;
        color: #fff;
        font-weight: 600;
    }

    .footer6 .column ul {
        list-style: none;
    }

    .footer6 .column ul li {
        margin-bottom: 12px;
    }

    .footer6 .column ul li a {
        color: #888;
        text-decoration: none;
        transition: color 0.3s;
        font-size: 14px;
    }

    .footer6 .column ul li a:hover {
        color: #667eea;
    }

    .footer6 .bottom {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-top: 1px solid #222;
        padding-top: 25px;
        color: #666;
        font-size: 14px;
    }
    </style>
</head>

<body>

    <div class="footer-container">
        <h3>1. Modern Gradient Footer</h3>
        <footer class="footer1">
            <div class="content">
                <div class="brand">
                    <h2>BRAND</h2>
                    <p>Kami menyediakan solusi terbaik untuk bisnis Anda dengan teknologi terkini dan pelayanan prima.
                    </p>
                </div>
                <div class="column">
                    <h4>Produk</h4>
                    <ul>
                        <li><a href="#">Fitur</a></li>
                        <li><a href="#">Harga</a></li>
                        <li><a href="#">Demo</a></li>
                        <li><a href="#">Update</a></li>
                    </ul>
                </div>
                <div class="column">
                    <h4>Perusahaan</h4>
                    <ul>
                        <li><a href="#">Tentang</a></li>
                        <li><a href="#">Tim</a></li>
                        <li><a href="#">Karir</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
                <div class="column">
                    <h4>Dukungan</h4>
                    <ul>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Kontak</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Status</a></li>
                    </ul>
                </div>
            </div>
            <div class="bottom">
                <p>&copy; 2025 Brand. Semua hak dilindungi.</p>
            </div>
        </footer>
    </div>

    <div class="footer-container">
        <h3>2. Dark Minimalist Footer</h3>
        <footer class="footer2">
            <div class="content">
                <div class="column">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">Partners</a></li>
                    </ul>
                </div>
                <div class="column">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">Documentation</a></li>
                        <li><a href="#">Tutorials</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Community</a></li>
                    </ul>
                </div>
                <div class="column">
                    <h4>Legal</h4>
                    <ul>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Security</a></li>
                        <li><a href="#">Cookies</a></li>
                    </ul>
                </div>
                <div class="column">
                    <h4>Connect</h4>
                    <ul>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">LinkedIn</a></li>
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">Discord</a></li>
                    </ul>
                </div>
            </div>
            <div class="bottom">
                <p>&copy; 2025 Company. All rights reserved.</p>
                <div class="social">
                    <a href="#">TW</a>
                    <a href="#">LI</a>
                    <a href="#">GH</a>
                    <a href="#">IG</a>
                </div>
            </div>
        </footer>
    </div>

    <div class="footer-container">
        <h3>3. Clean & Light Footer</h3>
        <footer class="footer3">
            <div class="content">
                <div class="brand">
                    <h2>MODERN</h2>
                    <p>Platform terpercaya untuk mengembangkan bisnis Anda dengan solusi digital yang inovatif dan
                        efektif.</p>
                </div>
                <div class="column">
                    <h4>Layanan</h4>
                    <ul>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Consulting</a></li>
                    </ul>
                </div>
                <div class="column">
                    <h4>Bantuan</h4>
                    <ul>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Live Chat</a></li>
                    </ul>
                </div>
                <div class="column newsletter">
                    <h4>Newsletter</h4>
                    <input type="email" placeholder="Email Anda">
                    <button>Subscribe</button>
                </div>
            </div>
            <div class="bottom">
                <p>&copy; 2025 Modern. Dibuat dengan ❤️ di Indonesia</p>
            </div>
        </footer>
    </div>

    <div class="footer-container">
        <h3>4. Colorful Modern Footer</h3>
        <footer class="footer4">
            <div class="content">
                <div class="brand">
                    <h2>VIVID</h2>
                    <p>Wujudkan ide kreatif Anda menjadi kenyataan dengan platform yang powerfull dan mudah digunakan.
                    </p>
                </div>
                <div class="links">
                    <div class="column">
                        <h4>Platform</h4>
                        <ul>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">Enterprise</a></li>
                            <li><a href="#">Customers</a></li>
                        </ul>
                    </div>
                    <div class="column">
                        <h4>Resources</h4>
                        <ul>
                            <li><a href="#">Docs</a></li>
                            <li><a href="#">API</a></li>
                            <li><a href="#">Templates</a></li>
                            <li><a href="#">Guides</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <p>&copy; 2025 Vivid. Creating amazing experiences.</p>
            </div>
        </footer>
    </div>

    <div class="footer-container">
        <h3>5. Luxury Gold Footer</h3>
        <footer class="footer5">
            <div class="content">
                <div class="column">
                    <h4>Collections</h4>
                    <ul>
                        <li><a href="#">New Arrivals</a></li>
                        <li><a href="#">Best Sellers</a></li>
                        <li><a href="#">Limited Edition</a></li>
                        <li><a href="#">Sale</a></li>
                    </ul>
                </div>
                <div class="column">
                    <h4>About</h4>
                    <ul>
                        <li><a href="#">Our Story</a></li>
                        <li><a href="#">Craftsmanship</a></li>
                        <li><a href="#">Sustainability</a></li>
                        <li><a href="#">Heritage</a></li>
                    </ul>
                </div>
                <div class="column">
                    <h4>Service</h4>
                    <ul>
                        <li><a href="#">Customer Care</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Returns</a></li>
                        <li><a href="#">Gift Cards</a></li>
                    </ul>
                </div>
                <div class="column">
                    <h4>Connect</h4>
                    <ul>
                        <li><a href="#">Boutiques</a></li>
                        <li><a href="#">Appointments</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Newsletter</a></li>
                    </ul>
                </div>
            </div>
            <div class="bottom">
                <p>PRESTIGE &copy; 2025 · CRAFTED WITH EXCELLENCE</p>
            </div>
        </footer>
    </div>

    <div class="footer-container">
        <h3>6. Tech Style Footer</h3>
        <footer class="footer6">
            <div class="content">
                <div class="brand">
                    <h2>TECHCO</h2>
                    <p>Building the future of technology with innovative solutions and cutting-edge development.</p>
                </div>
                <div class="column">
                    <h4>Products</h4>
                    <ul>
                        <li><a href="#">Platform</a></li>
                        <li><a href="#">Solutions</a></li>
                        <li><a href="#">Integrations</a></li>
                        <li><a href="#">API</a></li>
                    </ul>
                </div>
                <div class="column">
                    <h4>Developers</h4>
                    <ul>
                        <li><a href="#">Documentation</a></li>
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">API Reference</a></li>
                        <li><a href="#">Open Source</a></li>
                    </ul>
                </div>
                <div class="column">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="bottom">
                <p>&copy; 2025 TechCo. Powered by innovation.</p>
                <p>Made with 💜 by developers</p>
            </div>
        </footer>
    </div>

</body>

</html>