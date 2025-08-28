<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap"
      rel="stylesheet"
    />
    <title>Online Inventory</title>
  </head>
  <body>
    <header>
      <nav>
        <div class="nav_logo">
          <h1><a href="index.php">Online Inventory</a></h1>
        </div>
        <ul class="nav_link">
          <li><a href="home.php">Home</a></li>
          <li><a href="register_form.php">Register</a></li>
          <li><a href="show_discounts.php">Discounts</a></li>
          <li><a href="show_Products.php">Products</a></li> 
        </ul>
      </nav>
    </header>
    <main>
      <section class="login">
        <div class="login_box">
          <h1>Login</h1>
          <form class="login_form" action="login.php" method="post">
            <input
              type="text"
              id="username"
              name="username"
              placeholder="username"
            />
            <input
              type="password"
              id="password"
              name="password"
              placeholder="password"
            />
            <input type="submit" value="Submit" />
          </form>
        </div>
      </section>
    </main>
  </body>
</html>
