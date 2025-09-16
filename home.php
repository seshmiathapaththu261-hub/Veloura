<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "Veloura";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Run query for featured products
$sql = "SELECT id, name, price, image FROM products ORDER BY id ASC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Veloura | Home</title>
  
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>

  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body { font-family: Arial, sans-serif; line-height: 1.6; }

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

    /* Carousel */
    .carousel-item img {
      width: 100%;
      height: auto;
      object-fit: contain;
    }

   /* Hero */
.hero {
  background: url("img/banner.jpg") no-repeat center center/cover;
  color: #000;
  height: 70vh; /* slightly reduced to remove excessive white space */
  display: flex;
  flex-direction: column;
  justify-content: center; /* perfectly center hero content */
  align-items: center;
  text-align: center;
  padding-top: 40px; /* small padding instead of 100px */
  margin-bottom: 0; /* prevent extra space after hero */
}
.hero h1 {
  font-size: 3.2rem;
  margin-bottom: 15px;
}
.hero p {
  font-size: 1.2rem;
  margin-bottom: 25px;
  max-width: 600px;
}

/* Button */
.btn {
  display: inline-block;
  background: #f39c12;
  color: #fff;
  padding: 12px 28px;
  border-radius: 30px;
  font-weight: 600;
  text-decoration: none;
  transition: background 0.3s ease, transform 0.2s ease;
}
.btn:hover {
  background: #d35400;
  transform: scale(1.05);
}

/* Featured Section */
.featured {
  padding: 30px 10px 50px 10px; /* balanced spacing */
  margin-top: -30px; /* pulls up to reduce gap */
  text-align: center;
}
.featured h2 {
  margin-bottom: 25px;
  font-size: 2.4rem;
  font-weight: 700;
  color: #222;
}

/* Product Grid */
.product-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); /* slightly bigger cards */
  gap: 25px;
  justify-content: center;
}

/* Product Cards */
.product-card {
  border: 1px solid #f39c12;
  border-radius: 12px;
  padding: 20px;
  background: #fff;
  box-shadow: 0 4px 8px rgba(0,0,0,0.08);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  text-align: center;
}
.product-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 8px 15px rgba(0,0,0,0.12);
}

/* Product Image */
.product-card img {
  width: 100%;
  height: 270px;
  object-fit: cover;
  border-radius: 10px;
  margin-bottom: 12px;
}

/* Product Title & Price */
.product-card h3 {
  margin-bottom: 5px;
  font-size: 1.35em;
  color: #222;
  font-weight: 600;
}
.price {
  color: #f39c12;
  font-weight: bold;
  margin-bottom: 12px;
  font-size: 1.15rem;
}
.carousel-img {
  width: 100%;
  height: 300px; /* adjust this to your desired height */
  //object-fit: cover; /* crop images while keeping aspect ratio */
}




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

  <!-- Header / Navbar -->
  <header>
    <div class="logo">Veloura</div>
    <nav>
      <ul>
        <li><a href="home.php" class="active">Home</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>

  <!-- Bootstrap Carousel -->
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Front Images/11.jpg" class="d-block carousel-img" alt="Slide 1">
    </div>
    <div class="carousel-item">
      <img src="Front Images/10.jpg" class="d-block carousel-img" alt="Slide 2">
    </div>
    <div class="carousel-item">
      <img src="Front Images/5.jpg" class="d-block carousel-img" alt="Slide 3">
    </div>
    <div class="carousel-item">
      <img src="Front Images/12.jpg" class="d-block carousel-img" alt="Slide 4">
    </div>
    <div class="carousel-item">
      <img src="Front Images/7.jpg" class="d-block carousel-img" alt="Slide 5">
    </div>
    <div class="carousel-item">
      <img src="Front Images/9.jpg" class="d-block carousel-img" alt="Slide 6">
    </div>
    <div class="carousel-item">
      <img src="Front Images/13.jpg" class="d-block carousel-img" alt="Slide 7">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-text">
      <h1>Style That Speaks</h1>
      <p>Discover the latest trends in fashion. Shop your look today!</p>
      <a href="shop.php" class="btn">Shop Now</a>
    </div>
  </section>

 <!-- Featured Products -->
<section class="featured">
  <h2>Featured Products</h2>
  <div class="product-grid">
    <?php
    // Fetch 4 random products
    $sql = "SELECT id, name, price, image FROM products ORDER BY RAND() LIMIT 4";
    $result = $conn->query($sql);

    if (!$result) {
        die("Query failed: " . $conn->error);
    }

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id    = htmlspecialchars($row['id']);
            $name  = htmlspecialchars($row['name'], ENT_QUOTES);
            $price = htmlspecialchars($row['price']);
            $image = htmlspecialchars($row['image'], ENT_QUOTES);

            // Build correct image path (avoid double uploads/)
            $imgSrc = (strpos($image, 'uploads/') === 0) ? "Admin/$image" : "Admin/uploads/$image";

            echo <<<HTML
              <div class="product-card">
                  <img src="$imgSrc" alt="$name" />
                  <p class="price">LKR $price</p>
                  <h3>$name</h3>
                  <a href="shop.php?id=$id" class="btn">Buy Now</a>
              </div>
HTML;
        }
    } else {
        echo "<p>No products found in database.</p>";
    }
    $conn->close();
    ?>
  </div>
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

  <!-- Bootstrap 5 JS (with Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
