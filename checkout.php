<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Checkout</title>
  <style>
    body {
      background-color: #fff0f5;
      font-family: Arial, sans-serif;
      text-align: center;
      margin: 0;
    }

    .header {
      background-color: pink;
      padding: 15px;
      color: white;
      font-weight: bold;
    }

    form {
      background-color: white;
      width: 300px;
      margin: 40px auto;
      padding: 20px;
      border-radius: 10px;
      border: 1px solid pink;
    }

    input, textarea {
      width: 90%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid pink;
      border-radius: 5px;
      font-size: 14px;
    }

    .note {
      font-size: 14px;
      color: #555;
      margin-top: 10px;
    }

    .btn {
      background-color: white;
      color: deeppink;
      border: 2px solid deeppink;
      padding: 10px 20px;
      border-radius: 5px;
      font-weight: bold;
      cursor: pointer;
      margin-top: 15px;
    }

    .btn:hover {
      background-color: #ffe6ef;
    }

    .footer {
      margin-top: 50px;
      padding: 15px;
      background-color: #f8f9fa;
      color: #777;
      font-size: 14px;
    }
  </style>
</head>
<body>

  <div class="header">Checkout</div>

  <form onsubmit="return confirmOrder()">
    <input type="text" id="name" placeholder="Full Name" required><br>
    <input type="email" id="email" placeholder="Email" required><br>
    <input type="tel" id="phone" placeholder="Phone Number" required><br>
    <textarea id="address" placeholder="Delivery Address" required></textarea><br>
    <p class="note">💡 Note: Payment will be made upon delivery.</p>
    <button class="btn" type="submit">Confirm Order</button>
  </form>

  <script>
    function confirmOrder() {
      alert("Thank you! Your order has been confirmed.");
      localStorage.removeItem("cart");
      window.location.href = "succes.php";
      return false;
    }
  </script>
<?php include("Footer.php");?>
</body>
</html>
