<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Dostobooks - Home</title>
  <style>
    body {
      background-color: #fff8fa;
      font-family: Arial, sans-serif;
      text-align: center;
      margin: 0;
    }

    .header {
      background-color: #f8a5c2;
      color: white;
      padding: 20px;
    }

    .description {
      padding: 30px 20px;
      color: #444;
    }

    .description p {
      max-width: 500px;
      margin: 10px auto;
      font-size: 16px;
    }

    .btn {
      display: inline-block;
      background-color: white;
      color: #d6336c;
      border: 2px solid #d6336c;
      padding: 10px 20px;
      margin-top: 20px;
      border-radius: 5px;
      text-decoration: none;
      font-weight: bold;
    }

    .btn:hover {
      background-color: #ffe6f0;
    }

    .footer {
      margin-top: 40px;
      padding: 15px;
      background-color: #f8f9fa;
      color: #777;
      font-size: 14px;
    }
    .book {
      background-color: white;
      border: 1px solid pink;
      border-radius: 8px;
      width: 200px;
      display: inline-block;
      margin: 15px;
      padding: 10px;}
    .btn {
      background-color: white;
      color: deeppink;
      border: 2px solid deeppink;
      padding: 5px 10px;
      border-radius: 5px;
      text-decoration: none;
      display: block;
      margin: 10px auto 0;
    }

    .btn:hover {
      background-color: #ffe6ef;
    }

  </style>
</head>
<body>

  <?php include("Header.php");?>

  <div class="description">
    <p>Dostobooks is a small and cozy online bookstore for Dostoevsky's most famous novels.</p>
    <p>Explore deep and emotional stories, and enjoy reading in a soft, simple design.</p>
  
  </div>
    <h2>Best Selling Books</h2>
    <div class="book">
    <img src="images/demons.jpg" alt="Demons">
    <p>Demons</p>
    <p>Price: 38 SAR</p>
    <button class="btn" ><a href="store.php">Buy From Store</a></button>
  </div>

  <div class="book">
    <img src="images/gambler.jpg" alt="The Gambler">
    <p>The Gambler</p>
    <p>Price: 32 SAR</p>
    <button class="btn" ><a href="store.php">Buy From Store</a></button>
  </div>

  <div class="book">
    <img src="images/idiot.jpg" alt="The Idiot">
    <p>The Idiot</p>
    <p>Price: 35 SAR</p>
    <button class="btn" ><a href="store.php">Buy From Store</a></button>
  </div>
    </br>
    </br>
<a href="store.php" class="btn">Enter the Bookstore</a>
  <?php include("Footer.php");?>

</body>
</html>

