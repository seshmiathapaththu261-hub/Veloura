# Veloura – Online Fashion Store

Veloura is a simple web-based application developed for the SE102.3 Web-Based Application Development module.  
It demonstrates a fashion store website with a customer-facing side and an admin panel that supports CRUD (Create, Read, Update, Delete) operations.

---

## 📂 Project Structure

---

## ⚙️ Requirements
- [WAMP Server](https://www.wampserver.com/en/) (Apache + MySQL + PHP)
- Web browser (Chrome/Edge/Firefox)
- Git (optional, for version control)

---

## 🚀 Setup Instructions

1. **Clone or Download Project**
   - Clone from GitHub:
     ```bash
     git clone https://github.com/your-username/Veloura.git
     ```
   - Or download the ZIP and extract it.

2. **Move Project to WAMP**
   - Copy the `Veloura` folder into your `www` directory inside WAMP.  
   - Example: `C:\wamp64\www\Veloura`

3. **Start WAMP**
   - Launch **WAMP Server** (icon should turn green).  
   - This starts Apache and MySQL automatically.

4. **Import Database**
   - Open `http://localhost/phpmyadmin/` in your browser.  
   - Create a new database named `veloura`.  
   - Go to **Import** → Select `Database/veloura.sql` → Click **Go**.  

5. **Run the Website**
   - Open browser and visit:
     ```
     http://localhost/Veloura/home.php
     ```
   - Other pages:
     - Shop: `http://localhost/Veloura/shop.php`
     - About: `http://localhost/Veloura/about.php`
     - Contact: `http://localhost/Veloura/contact.php`
     - Admin Panel: `http://localhost/Veloura/Admin/Admin.php`

---

## 🛠️ Features
- **Public Pages**
  - Home page with featured products
  - Shop page with product listings
  - About page with store details
  - Contact page with inquiry form (stored in DB)

- **Admin Panel**
  - Dashboard to view products and messages
  - Add, edit, and delete products
  - View and delete customer messages

---

## 📌 Notes
- Currently, the **Admin Panel does not require login**.  
- For a production-ready system, a secure login with username and password should be implemented in the future.

---


## 👨‍💻 Author
- Student Name: AMSND Athapaththu
- Student ID: 33767
- Module: SE102.3 – Web-Based Application Development

