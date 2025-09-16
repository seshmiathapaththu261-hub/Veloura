<?php
// shop.php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "Veloura";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

// Fetch all products
$sql = "SELECT id, name, price, image FROM products ORDER BY id ASC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Veloura | Shop</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>

  <style>
    body { font-family: Arial, sans-serif; background: #f8f8f8; }

    header {
      background: #111;
      color: #fff;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 50px;
    }
    header .logo { font-size: 1.8rem; font-weight: bold; }
    header nav ul { list-style: none; display: flex; margin-bottom: 0; }
    header nav ul li { margin-left: 25px; }
    header nav ul li a { font-size: 1.1rem; color: #fff; text-decoration: none; }
    header nav ul li a:hover,
    header nav ul li a.active { color: #f39c12; }

    .shop-container {
      max-width: 1300px;
      margin: 50px auto;
      padding: 0 20px;
    }
    h2 {
      text-align: center;
      font-size: 2.5rem;
      margin-bottom: 40px;
    }
    .product-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 30px;
    }
    .product-card {
      background: #fff;
      border: 1px solid #ddd;
      border-radius: 15px;
      padding: 20px;
      box-shadow: 0 3px 8px rgba(0,0,0,0.1);
      text-align: center;
      transition: transform 0.3s, box-shadow 0.3s;
    }
    .product-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 6px 15px rgba(0,0,0,0.15);
    }
    .product-card img {
      width: 100%;
      height: 320px; /* BIGGER IMAGES */
      object-fit: cover;
      border-radius: 12px;
      margin-bottom: 15px;
    }
    .product-card h3 {
      font-size: 1.3rem; /* Bigger Name */
      font-weight: bold;
      margin-bottom: 8px;
      color: #222;
    }
    .price {
      color: #f39c12;
      font-weight: bold;
      font-size: 1.2rem; /* Bigger Price */
      margin-bottom: 12px;
    }
    .btn {
      background: #f39c12;
      color: #fff;
      padding: 10px 20px;
      border-radius: 25px;
      font-size: 1.1rem;
      text-decoration: none;
      transition: background 0.3s;
    }
    .btn:hover { background: #d35400; }

    footer {
      background: #111;
      color: #fff;
      text-align: center;
      padding: 30px 20px;
      margin-top: 50px;
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
      <li><a href="shop.php" class="active">Shop</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </nav>
</header>

<!-- Shop Section -->
<div class="shop-container">
  <h2>Shop All Products</h2>
  <div class="product-grid">
    <?php
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id    = htmlspecialchars($row['id']);
            $name  = htmlspecialchars($row['name'], ENT_QUOTES);
            $price = htmlspecialchars($row['price']);
            $image = htmlspecialchars($row['image'], ENT_QUOTES);

            // Ensure correct image path
            $imgSrc = (strpos($image, 'uploads/') === 0) ? "Admin/$image" : "Admin/uploads/$image";

            echo <<<HTML
            <div class="product-card">
                <img src="$imgSrc" alt="$name" />
                <p class="price">LKR $price</p>
                <h3>$name</h3>
                <a href="product.php?id=$id" class="btn">View Details</a>
            </div>
HTML;
        }
    } else {
        echo "<p style='text-align:center;'>No products available.</p>";
    }
    $conn->close();
    ?>
  </div>
</div>

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
