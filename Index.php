<?php
// index.php – Enterprise LMS Landing Page (Litmos-style with proper page linking)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enterprise LMS | Smart Learning Platform</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        *{margin:0;padding:0;box-sizing:border-box;font-family:'Inter',sans-serif;}
        body{background:#f8fafc;color:#1f2937;line-height:1.6;}
        a{text-decoration:none;color:inherit;}

        /* ===== NAVBAR ===== */
        header{position:fixed;top:0;left:0;width:100%;background:#fff;z-index:1000;box-shadow:0 2px 12px rgba(0,0,0,0.06);}        
        .nav{max-width:1200px;margin:auto;display:flex;align-items:center;justify-content:space-between;padding:18px 24px;}
        .logo{font-size:22px;font-weight:700;color:#2563eb;}
        .nav ul{display:flex;gap:28px;list-style:none;font-size:14px;font-weight:500;}
        .nav ul li a:hover{color:#2563eb;}
        .btn-primary{background:#2563eb;color:#fff;padding:12px 20px;border-radius:6px;font-weight:600;transition:0.3s;}
        .btn-primary:hover{background:#1e40af;}

        .btn-inquiry{
    background:#2563eb;color:#fff;padding:12px 20px;border-radius:6px;font-weight:600;transition:0.3s
}
.btn-inquiry:hover{
    background:#1e40af;
}
.btn-admin{
    padding:10px 18px;
    border-radius:6px;
    font-size:14px;
    font-weight:600;
    color:#cbd5f5;
    border:1px solid rgba(255,255,255,0.3);
    text-decoration:none;
    transition:0.3s ease;
    background:transparent;
}

.btn-admin:hover{
    background:#1e40af;
    color:#fff;
    border-color:#1e40af;
    transform:translateY(-2px);
}



        /* ===== HERO ===== */
        .hero{min-height:100vh;background:linear-gradient(to right,#0f172a,#020617);color:#fff;display:flex;align-items:center;padding-top:100px;}
        .hero-inner{max-width:1200px;margin:auto;padding:0 24px;display:grid;grid-template-columns:1.2fr 1fr;gap:60px;}
        .hero h1{font-size:48px;line-height:1.2;margin-bottom:20px;}
        .hero p{font-size:18px;color:#cbd5f5;margin-bottom:30px;}
        .hero-actions{display:flex;gap:16px;}
        .hero img{width:100%;border-radius:14px;box-shadow:0 30px 80px rgba(0,0,0,0.4);}        

        /* ===== SECTIONS ===== */
        section{padding:120px 24px;}
        .container{max-width:1200px;margin:auto;}
        .section-title{text-align:center;margin-bottom:60px;}
        .section-title h2{font-size:36px;font-weight:700;margin-bottom:12px;}
        .section-title p{color:#64748b;font-size:16px;}

        /* ===== CARDS ===== */
        .grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:30px;}
        .card{background:#fff;padding:42px;border-radius:16px;box-shadow:0 20px 40px rgba(15,23,42,0.08);transition:0.35s;}
        .card:hover{transform:translateY(-10px);box-shadow:0 30px 60px rgba(15,23,42,0.12);}        
        .card i{font-size:30px;color:#2563eb;margin-bottom:18px;}
        .card h3{font-size:20px;margin-bottom:10px;}
        .card p{font-size:14px;color:#64748b;}

        .light{background:#ffffff;}
        .soft{background:#f1f5f9;}

        /* ===== CTA ===== */
        .cta{background:linear-gradient(to right,#2563eb,#1e40af);color:#fff;text-align:center;}
        .cta h2{font-size:40px;margin-bottom:20px;}
        .cta p{font-size:18px;margin-bottom:30px;color:#e0e7ff;}

        /* ===== FOOTER ===== */
        footer{background:#020617;color:#cbd5f5;padding:60px 24px;}
        footer .container{display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:30px;}
        footer h4{color:#fff;margin-bottom:14px;}
        footer ul{list-style:none;font-size:14px;}
        footer ul li{margin-bottom:8px;}
        footer ul li a:hover{color:#fff;}
    </style>
</head>
<body>

<!-- ===== NAVBAR WITH PAGE LINKS ===== -->
<header>
    <div class="nav">
        <div class="logo">SmartLMS</div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="features.php">Features</a></li>
            <li><a href="admin-login.php">Pricing</a></li>
            <li><a href="security.php">Security</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
        <a href="request-demo.php" class="btn-primary">Request Demo</a>
        <a href="inquiry.php" class="btn-inquiry">Inquiry</a>
         <a href="admin-login.php" class="btn-admin">
    <i class="fa-solid fa-lock"></i> Admin Login
</a>

    </div>
</header>

<!-- ===== HERO ===== -->
<section class="hero">
    <div class="hero-inner">
        <div>
            <h1>Enterprise‑Ready Learning Management System</h1>
            <p>Deliver training, education, and certifications at scale with a secure, customizable LMS inspired by Litmos and global leaders.</p>
            <div class="hero-actions">
                <a href="book-demo.php" class="btn-primary">Book a Demo</a>
                <a href="admin-login.php" class="btn-primary">View Pricing</a>
            </div>
        </div>
<img src="https://images.pexels.com/photos/4145190/pexels-photo-4145190.jpeg" alt="Student learning online with laptop">
    </div>
</section>

<!-- ===== WHY CHOOSE ===== -->
<section class="light">
    <div class="container">
        <div class="section-title">
            <h2>Why Choose Our LMS</h2>
            <p>Built for scalability, performance, and enterprise growth</p>
        </div>
        <div class="grid">
            <div class="card"><i class="fa-solid fa-bolt"></i><h3>Rapid Deployment</h3><p>Launch faster with minimal setup.</p></div>
            <div class="card"><i class="fa-solid fa-layer-group"></i><h3>Unified Platform</h3><p>Training, tracking, reporting in one system.</p></div>
            <div class="card"><i class="fa-solid fa-shield"></i><h3>Enterprise Security</h3><p>Secure, compliant, and reliable.</p></div>
        </div>
    </div>
</section>

<!-- ===== WHO IS IT FOR ===== -->
<section class="soft">
    <div class="container">
        <div class="section-title"><h2>Who Is It For</h2></div>
        <div class="grid">
            <div class="card"><i class="fa-solid fa-school"></i><h3>Schools & Colleges</h3></div>
            <div class="card"><i class="fa-solid fa-chalkboard-user"></i><h3>Coaching Institutes</h3></div>
            <div class="card"><i class="fa-solid fa-building"></i><h3>Enterprises</h3></div>
            <div class="card"><i class="fa-solid fa-user-graduate"></i><h3>Training Providers</h3></div>
        </div>
    </div>
</section>

<!-- ===== USE CASES ===== -->
<section class="light">
    <div class="container">
        <div class="section-title"><h2>Key Use Cases</h2></div>
        <div class="grid">
            <div class="card"><i class="fa-solid fa-briefcase"></i><h3>Corporate Training</h3></div>
            <div class="card"><i class="fa-solid fa-book"></i><h3>Academic Learning</h3></div>
            <div class="card"><i class="fa-solid fa-certificate"></i><h3>Certifications</h3></div>
        </div>
    </div>
</section>

<!-- ===== CTA ===== -->
<section class="cta">
    <div class="container">
        <h2>Ready to Transform Learning?</h2>
        <p>Schedule a personalized demo with our experts today.</p>
        <a href="contact.php" class="btn-primary">Request Demo</a>
        <a href="inquiry.php" class="btn-inquiry">Inquiry</a>
    </div>
</section>

<!-- ===== FOOTER ===== -->
<footer>
    <div class="container">
        <div>
            <h4>SmartLMS</h4>
            <p>Enterprise learning made simple.</p>
        </div>
        <div>
            <h4>Product</h4>
            <ul>
                <li><a href="features.php">Features</a></li>
                <li><a href="admin-login.php">Pricing</a></li>
                <li><a href="security.php">Security</a></li>
            </ul>
        </div>
        <div>
            <h4>Company</h4>
            <ul>
                <li><a href="contact.php">Contact</a></li>
                <li>About</li>
            </ul>
        </div>
    </div>
</footer>

</body>
</html>
