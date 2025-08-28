<?php
require_once('DBconnect.php');

if(
    isset($_POST['new_product_id']) && isset($_POST['new_name']) && isset($_POST['new_brand']) &&
    isset($_POST['new_stock']) && isset($_POST['new_price']) && isset($_POST['new_review']) &&
    isset($_POST['new_suserid']) && isset($_POST['new_dofferid'])
){
    $product_id = $_POST['new_product_id'];
    $name = $_POST['new_name'];
    $brand = $_POST['new_brand'];
    $stock = $_POST['new_stock'];
    $price = $_POST['new_price'];
    $review = $_POST['new_review'];
    $suserid = $_POST['new_suserid'];
    $dofferid = $_POST['new_dofferid'];

    $sql = "INSERT INTO product VALUES('$product_id', '$name', '$brand', '$stock', '$price', '$review', '$suserid', '$dofferid')";
    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn)){
        header("Location: show_products.php");
        exit();
    } else {
        echo "<p style='color:red; text-align:center;'>Insertion Failed. Check your data.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
<title>Insert Product</title>
<style>
    .insert_form {
        max-width: 500px;
        margin: 50px auto;
        padding: 20px;
        background: #f2f2f2;
        border-radius: 10px;
        box-shadow: 0 0 10px #ccc;
    }
    .insert_form input, .insert_form select {
        width: 100%;
        padding: 10px;
        margin: 8px 0;
        border-radius: 5px;
        border: 1px solid #ccc;
    }
    .insert_form input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
    }
    .insert_form input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>
<header>
  <nav>
    <div class="nav_logo">
      <h1><a href="index.php">Online Inventory</a></h1>
    </div>
    <ul class="nav_link">
      <li><a href="home.php">Home</a></li>
      <li><a href="show_discounts.php">Discounts</a></li>
      <li><a href="show_products.php">Products</a></li>
    </ul>
  </nav>
</header>
<main>
    <section class="insert_product">
        <div class="insert_form">
            <h2 style="text-align:center;">Insert New Product</h2>
            <form action="" method="post">
                <input type="number" name="new_product_id" placeholder="Product ID" required>
                <input type="text" name="new_name" placeholder="Product Name" required>
                <input type="text" name="new_brand" placeholder="Brand" required>
                <input type="number" name="new_stock" placeholder="Stock Quantity" required>
                <input type="number" name="new_price" placeholder="Price" required>
                <input type="text" name="new_review" placeholder="Review" required>
                <input type="number" name="new_suserid" placeholder="Seller User ID" required>
                <input type="number" name="new_dofferid" placeholder="Discount Offer ID" required>
                <input type="submit" value="Insert Product">
            </form>
        </div>
    </section>
</main>
</body>
</html>
