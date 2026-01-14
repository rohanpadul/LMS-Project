<?php
$success = isset($_GET['success']);
$error = isset($_GET['error']) ? $_GET['error'] : "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Inquiry | SmartLMS</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

<style>
body{
    font-family:Inter;
    background:#f8fafc;
    margin:0;
}
section{
    padding:140px 24px;
}
.container{
    max-width:500px;
    margin:auto;
}
.card{
    background:#fff;
    padding:40px;
    border-radius:16px;
    box-shadow:0 20px 40px rgba(0,0,0,0.08);
}
input, textarea, select{
    width:100%;
    padding:12px;
    margin-bottom:15px;
    border:1px solid #ddd;
    border-radius:6px;
}
button{
    width:100%;
    padding:14px;
    background:#2563eb;
    color:#fff;
    border:none;
    border-radius:6px;
    font-size:16px;
    cursor:pointer;
}
button:hover{
    background:#1e40af;
}
.success{color:green;text-align:center;margin-bottom:15px;}
.error{color:red;text-align:center;margin-bottom:15px;}

/* ✅ ADDED: Inquiry Button Style */
.inquiry-btn{
    position:fixed;
    top:20px;
    right:20px;
    background:#2563eb;
    color:#fff;
    padding:10px 18px;
    border-radius:8px;
    font-size:14px;
    font-weight:600;
    text-decoration:none;
    box-shadow:0 10px 25px rgba(37,99,235,0.35);
    z-index:1000;
}
.inquiry-btn:hover{
    background:#1e40af;
}
</style>
</head>

<body>

<!-- ✅ ADDED: Top Right Inquiry Button -->
<a href="allinquiries.php" class="inquiry-btn">All Inquiries</a>

<section id="inquiryForm">
<div class="container">
<div class="card">

<h2 style="text-align:center;margin-bottom:20px;">Send an Inquiry</h2>

<?php if($success): ?>
<p class="success">Inquiry submitted successfully!</p>
<?php endif; ?>

<?php if($error): ?>
<p class="error"><?= htmlspecialchars($error) ?></p>
<?php endif; ?>

<form method="post" action="inquiryconnect.php">

<input name="name" placeholder="Full Name" required>
<input name="email" type="email" placeholder="Email Address" required>
<input name="mobile" placeholder="Mobile Number">
<input name="org" placeholder="Organization / Institute">
<input name="city" placeholder="City">

<select name="plan" required>
<option value="">Select Subscription Plan</option>
<option>Starter Plan</option>
<option>Professional Plan</option>
<option>Enterprise Plan</option>
</select>

<textarea name="message" placeholder="Your Message / Requirement"></textarea>

<button type="submit">Submit Inquiry</button>
</form>

</div>
</div>
</section>

</body>
</html>
