<?php
// --- FORM PROCESSING ---
$messageSent = false;
$errorMsg = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    if (!empty($name) && !empty($email) && !empty($message)) {
        // Example: save to file (you can replace with mail() or DB insert)
        $data = "Name: $name\nEmail: $email\nMessage: $message\n---\n";
        file_put_contents("messages.txt", $data, FILE_APPEND); // stores messages in messages.txt

        // Or send email:
        // mail("info@veloura.com", "New Contact Message", $data);

        $messageSent = true;
    } else {
        $errorMsg = "Please fill in all fields.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us | Veloura</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    /* Header */
    header {
      background: #111;
      color: #fff;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 50px;
    }
    header .logo { font-size: 1.5rem; font-weight: bold; }
    header nav ul { list-style: none; display: flex; margin-bottom: 0; }
    header nav ul li { margin-left: 20px; }
    header nav ul li a {
      color: #fff; text-decoration: none; transition: color 0.3s;
    }
    header nav ul li a:hover,
    header nav ul li a.active { color: #f39c12; }

    /* Contact Section */
    .contact-section {
      max-width: 900px;
      margin: 50px auto;
      padding: 20px;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      text-align: center;
    }
    .contact-section h1 {
      margin-bottom: 20px;
      color: #f39c12;
    }
    .contact-info p { margin: 5px 0; font-size: 1.1rem; }
    form input, form textarea {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border-radius: 8px;
      border: 1px solid #ddd;
    }
    form button {
      background: #f39c12;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 25px;
      cursor: pointer;
      transition: background 0.3s;
    }
    form button:hover { background: #d35400; }

    /* Footer */
    footer {
      background: #111;
      color: #fff;
      text-align: center;
      padding: 40px 20px;
      margin-top: 30px;
      font-size: 14px;
    }
    footer h3 { color: #f39c12; }
    footer a { color: #f39c12; text-decoration: none; }
  </style>
</head>
<body>

  <!-- Header -->
  <header>
    <div class="logo">Veloura</div>
    <nav>
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php" class="active">Contact</a></li>
      </ul>
    </nav>
  </header>

  <!-- Contact Section -->
  <section class="contact-section">
    <h1>Contact Us</h1>

    <?php if ($messageSent): ?>
      <div class="alert alert-success">✅ Your message has been sent successfully!</div>
    <?php elseif (!empty($errorMsg)): ?>
      <div class="alert alert-danger">⚠ <?= $errorMsg ?></div>
    <?php endif; ?>

    <div class="contact-info">
      <p><strong>📍 Address:</strong> 123 Fashion Street, Colombo, Sri Lanka</p>
      <p><strong>📞 Phone:</strong> +94 11 123 4567</p>
      <p><strong>✉ Email:</strong> info@veloura.com</p>
    </div>

    <form action="" method="post">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Your Email" required>
      <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
      <button type="submit">Send Message</button>
    </form>
  </section>

  <!-- Footer -->
  <footer>
    <div style="max-width:1000px; margin:auto; display:flex; flex-wrap:wrap; justify-content:space-between; gap:20px;">
      <div style="flex:1; min-width:200px;">
        <h3>Veloura Store</h3>
        <p>123 Fashion Street,<br>Colombo, Sri Lanka</p>
        <p>Mon - Sat: 9am - 8pm<br>Sun: Closed</p>
      </div>
      <div style="flex:1; min-width:200px;">
        <h3>Contact Us</h3>
        <p>Email: <a href="mailto:info@veloura.com">info@veloura.com</a></p>
        <p>Phone: +94 11 123 4567</p>
        <p>Fax: +94 11 765 4321</p>
      </div>
      <div style="flex:1; min-width:200px;">
        <h3>Follow Us</h3>
        <p>
          <a href="#">Facebook</a> | 
          <a href="#">Instagram</a> | 
          <a href="#">Twitter</a>
        </p>
      </div>
    </div>
    <div style="text-align:center; margin-top:30px; font-size:13px; color:#888;">
      &copy; <?php echo date("Y"); ?> Veloura. All rights reserved.
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
