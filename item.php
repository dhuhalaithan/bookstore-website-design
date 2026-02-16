<?php $title = "item"; ?>
<?php 
  include("connection.php");
  if(isset($_GET["id"]))
  {$sql = "SELECT * FROM books WHERE id=" . $_GET["id"];
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($result);}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Dostobooks - Item</title>
  <style>
    body {
      background-color: #fff0f5;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    .footer {
      margin-top: 40px;
      padding: 15px;
      background-color: #f8f9fa;
      color: #777;
      font-size: 14px;
    }
    .header {
      background-color: #f8a5c2;
      color: white;
      padding: 20px;
    }
    .item-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: flex-start;
      background-color: #ffffff;
      padding: 20px;
      margin: 30px auto;
      max-width: 900px;
      border: 1px solid pink;
      border-radius: 10px;
    }

    .item-container img {
      width: 250px;
      height: auto;
      border-radius: 8px;
      border: 2px solid pink;
      margin-right: 30px;
    }

    .item-details {
      max-width: 500px;
    }

    .item-details h1 {
      color: #d63384;
      font-size: 24px;
      margin-bottom: 10px;
    }

    .item-details form {
      margin-top: 20px;
    }

    input[type="submit"] {
      background-color: #ff69b4;
      color: white;
      border: none;
      padding: 10px 16px;
      border-radius: 5px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #ff85c1;
    }
        .header {
  background-color: pink;
  text-align: center;
  padding: 15px 0;
}

.header a {
  color: white;
  text-decoration: none;
  font-weight: bold;
  margin: 0 20px;
  font-size: 18px;
}

.header a:hover {
  text-decoration: underline;
}
  </style>
</head>
<body>
<?php include("header2.php");?>
<div class="item-container">
  <div>
    <span>
      <img src="<?php echo $row["img"]; ?>" alt="">
    </span>
  </div>
  <div class="item-details">
    <h1><?php echo $row["Name"]; ?></h1>
    <h1><?php echo $row["Price"]; ?> SAR</h1>
    <form onsubmit="addToCart(event)">
      <input type="hidden" id="book-name" value="<?php echo $row["Name"]; ?>"/>
      <input type="hidden" id="book-price" value="<?php echo $row["Price"]; ?>"/>
      <input type="submit" value="Add to Cart" name="submit"/>
    </form>
  </div>
</div>

<script>
  function addToCart(e) {
    e.preventDefault();

    const title = document.getElementById("book-name").value;
    const price = parseFloat(document.getElementById("book-price").value);

    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    cart.push({ title, price });
    localStorage.setItem("cart", JSON.stringify(cart));

    alert("Book added to cart!");
  }
</script>

</body>
<?php include("Footer.php")?>
</html>
