<?php
require_once('DBconnect.php');

// Process form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (
        isset($_POST['userid']) &&
        isset($_POST['username']) && 
        isset($_POST['password']) && 
        isset($_POST['name']) && 
        isset($_POST['contact']) && 
        isset($_POST['street']) && 
        isset($_POST['city']) && 
        isset($_POST['building_no']) && 
        isset($_POST['user_type'])
    ) {
        $userid = $_POST['userid'];
        $username = $_POST['username'];
        $password = $_POST['password']; // can hash for security
        $name = $_POST['name'];
        $contact = $_POST['contact'];
        $street = $_POST['street'];
        $city = $_POST['city'];
        $building_no = $_POST['building_no'];
        $user_type = $_POST['user_type'];

        // Insert into user table
        $sql = "INSERT INTO `user` (UserID, username, Password, Name, Contact, Street, City, Building_No, User_Type)
                VALUES ('$userid', '$username', '$password', '$name', '$contact', '$street', '$city', '$building_no', '$user_type')";

        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_affected_rows($conn) > 0) {
            header("Location: index.php");
            exit();
        } else {
            $error_message = "Registration failed. Please try again.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/style.css" />
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet" />
<title>Register User</title>
<style>
    main { padding: 50px 20px; background-color: #f9f9f9; min-height: 80vh; }
    .register_box { max-width: 500px; margin: auto; background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
    .register_box h2 { text-align: center; margin-bottom: 20px; font-weight: 400; color: #333; }
    .register_box input, .register_box select { width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px; }
    .register_box input[type="submit"] { background-color: #4CAF50; color: white; border: none; cursor: pointer; transition: 0.3s; }
    .register_box input[type="submit"]:hover { background-color: #45a049; }
    .error_message { color: red; text-align: center; margin-bottom: 15px; }
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
    <div class="register_box">
        <h2>Register New User</h2>

        <?php
        if (isset($error_message)) {
            echo "<p class='error_message'>$error_message</p>";
        }
        ?>

        <form action="" method="post">
            <input type="number" name="userid" placeholder="User ID" required>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="number" name="contact" placeholder="Contact Number" required>
            <input type="text" name="street" placeholder="Street" required>
            <input type="text" name="city" placeholder="City" required>
            <input type="number" name="building_no" placeholder="Building No" required>
            <select name="user_type" required>
                <option value="">Select User Type</option>
                <option value="Buyer">Buyer</option>
                <option value="Seller">Seller</option>
            </select>
            <input type="submit" value="Register">
        </form>
    </div>
</main>
</body>
</html>



