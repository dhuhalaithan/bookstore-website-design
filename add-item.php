<?php $title = "Add Item"; ?>
<?php include("header2.php"); ?>
<?php include("connection.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Dostobooks - Add Item</title>
  <style>
    body {
      background-color: #fff0f5;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
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

    #content {
      max-width: 600px;
      margin: 40px auto;
      background-color: white;
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border: 1px solid pink;
    }

    h1 {
      text-align: center;
      color: #d63384;
      margin-bottom: 30px;
    }

    form table {
      width: 100%;
    }

    table th {
      text-align: left;
      padding: 12px 10px;
      width: 30%;
      color: #333;
    }

    table td {
      padding: 10px;
      width: 70%;
    }

    input[type="text"],
    input[type="file"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ffc0cb;
      border-radius: 5px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      background-color: #ff69b4;
      color: white;
      border: none;
      padding: 12px 20px;
      border-radius: 5px;
      font-weight: bold;
      cursor: pointer;
      margin-top: 20px;
      width: 100%;
    }

    input[type="submit"]:hover {
      background-color: #ff85c1;
    }

    p.success {
      color: #28a745;
      text-align: center;
      font-weight: bold;
    }

    p.error {
      color: red;
      text-align: center;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div id="content">
    <h1>Add Item</h1>
    <?php
      if (isset($_POST["add"])) {
        $id = $_POST["pid"];
        $name = $_POST["name"];
        $price = $_POST["price"];

        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

        if ($uploadOk) {
          $img_path = $target_file;

          $sql = "INSERT INTO books (id, Name, Price, img) VALUES ($id, '$name', $price, '$img_path')";
          $result = mysqli_query($con, $sql);

          if ($result) {
            echo "<p class='success'>Item Added Successfully!</p>";
          } else {
            echo "<p class='error'>Item Cannot be Added</p>";
          }
        } else {
          echo "<p class='error'>Item Cannot be Added (Image upload failed)</p>";
        }
      } else {
    ?>
    <form method="POST" action="add-item.php" enctype="multipart/form-data">
      <table>
        <tr>
          <th><label for="pid">Book-ID*</label></th>
          <td><input type="text" name="pid" id="pid" required></td>
        </tr>
        <tr>
          <th><label for="name">Book Name*</label></th>
          <td><input type="text" name="name" id="name" required></td>
        </tr>
        <tr>
          <th><label for="image">Upload Image</label></th>
          <td><input type="file" name="image" id="image" required></td>
        </tr>
        <tr>
          <th><label for="price">Price*</label></th>
          <td><input type="text" name="price" id="price" required></td>
        </tr>
      </table>
      <input type="submit" name="add" value="Add Book">
    </form>
    <?php } ?>
  </div>
<?php include("Footer.php"); ?>
</body>
</html>