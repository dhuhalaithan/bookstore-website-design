<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Dostobooks - Store</title>
  <style>
    body {
      background-color: #fff0f5;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    h1 {
      text-align: center;
      padding-top: 20px;
      color: #333;
    }

    .books-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      padding: 20px;
    }

    .book {
      background-color: white;
      border: 1px solid pink;
      border-radius: 8px;
      width: 200px;
      margin: 15px;
      padding: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .book img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 5px;
    }

    .book h3 {
      font-size: 16px;
      margin-top: 10px;
      color: #333;
    }

    .footer {
      margin-top: 30px;
      padding: 15px;
      background-color: #f8f9fa;
      color: #777;
      font-size: 14px;
      text-align: center;
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
<?php
  include("connection.php");    
  $sql = "SELECT * FROM books";
  $result = mysqli_query($con, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
      $books[$row["id"]] = array(
          "name"=>$row["Name"],
          "price" => $row["Price"],
          "img" => $row["img"]
      );
  }
?>

<h1>Book Store</h1>

<div class="books-container">
  <?php 
  foreach ($books as $id => $details) {
      echo '
      <div class="book">
        <a href="item.php?id='.$id.'"><img src="'.$details["img"].'" alt="'.$id.'"/></a>
        <h3>'.$details["name"].'</h3>
      </div>';
  }
  ?>
</div>

<?php include("Footer.php"); ?>

</body>
</html>

