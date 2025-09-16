<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us | Veloura</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: #fafafa;
      color: #333;
    }

    /* --- HEADER (Same as Home Page) --- */
    header {
      background: #111;
      color: #fff;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 50px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.2);
    }

    header .logo {
      font-size: 1.5rem;
      font-weight: bold;
    }

    header nav ul {
      list-style: none;
      display: flex;
      margin-bottom: 0;
    }

    header nav ul li {
      margin-left: 20px;
    }

    header nav ul li a {
      color: #fff;
      text-decoration: none;
      transition: color 0.3s;
    }

    header nav ul li a:hover,
    header nav ul li a.active {
      color: #f39c12;
    }

    /* --- ABOUT PAGE CONTENT --- */
    .about-us {
      padding: 50px 20px;
      text-align: center;
      max-width: 1000px;
      margin: auto;
    }

    .about-us h1 {
      font-size: 2.5rem;
      margin-bottom: 20px;
      color: #222;
    }

    .about-us h2 {
      font-size: 2rem;
      margin-top: 30px;
      color: #444;
    }

    .about-us p {
      font-size: 1.2rem;
      line-height: 1.8;
      max-width: 800px;
      margin: 10px auto;
      color: #555;
    }

    .about-us ul {
      list-style: none;
      padding: 0;
      margin-top: 20px;
    }

    .about-us li {
      font-size: 1.2rem;
      margin: 8px 0;
    }

    /* --- FOOTER (Same as Home Page) --- */
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

  <!-- HEADER (Matches Home Page) -->
  <header>
    <div class="logo">Veloura</div>
    <nav>
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="about.php" class="active">About</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>

  <!-- ABOUT SECTION -->
<section class="about-us">
  <div class="about-container">
    <h1>About Us</h1>
    <p class="intro">
      Welcome to <strong>Veloura</strong> – your trusted destination for timeless fashion and elegant designs.
      Our mission is to bring you high-quality, stylish apparel that makes you feel confident and unique.
    </p>

    <div class="about-grid">
      <!-- Column 1 (Text) -->
      <div class="about-text">
        <h2>Our Story</h2>
        <p>
          Veloura started with a simple idea – fashion should be affordable yet sophisticated.
          From humble beginnings, we’ve grown into a brand loved by fashion enthusiasts across the country.
        </p>

        <h2>Our Vision</h2>
        <p>
          To become a leading fashion retailer in Sri Lanka by offering unique designs,
          premium quality materials, and excellent customer service.
        </p>

        <h2>Why Choose Us</h2>
        <ul>
          <li> Carefully curated collections</li>
          <li> Affordable prices without compromising quality</li>
          <li> Friendly and reliable customer support</li>
          <li> Fast and secure delivery</li>
        </ul>
      </div>

      <!-- Column 2 (Image) -->
      <div class="about-image">
        <img src="abc.png" alt="Veloura Clothing Store"
     style="max-width: 90%; height: auto; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.2);">

      </div>
    </div>
  </div>
</section>

<style>
  .about-us {
    background: linear-gradient(to right, #fefefe, #f4f4f4);
    padding: 60px 20px;
  }

  .about-container {
    max-width: 1100px;
    margin: auto;
  }

  .about-us h1 {
    font-size: 2.8rem;
    text-align: center;
    margin-bottom: 20px;
    color: #222;
    letter-spacing: 1px;
  }

  .about-us .intro {
    font-size: 1.3rem;
    color: #555;
    max-width: 850px;
    margin: auto;
    margin-bottom: 40px;
    text-align: center;
    line-height: 1.8;
  }

  .about-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    gap: 40px;
    align-items: center;
  }

  .about-text h2 {
    color: #f39c12;
    font-size: 1.8rem;
    margin-bottom: 10px;
  }

  .about-text p {
    font-size: 1.15rem;
    line-height: 1.8;
    margin-bottom: 25px;
    color: #444;
  }

  .about-text ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .about-text li {
    background: #fff;
    border-left: 5px solid #f39c12;
    margin: 10px 0;
    padding: 12px 15px;
    font-size: 1.1rem;
    border-radius: 6px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.05);
    transition: transform 0.2s ease;
  }

  .about-text li:hover {
    transform: translateX(5px);
    background: #fef8f1;
  }

  .about-text li span {
    margin-right: 8px;
    color: #27ae60;
    font-weight: bold;
  }

  .about-image img {
    width: 100%;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
  }

  .about-image img:hover {
    transform: scale(1.03);
  }
</style>


  <!-- FOOTER (Matches Home Page) -->
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

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
