<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Dostobooks - Cart</title>
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
    }

    .header a {
      color: white;
      text-decoration: none;
      margin: 10px;
      font-weight: bold;
    }

    .cart-item {
      background-color: white;
      border: 1px solid pink;
      border-radius: 8px;
      width: 250px;
      margin: 15px auto;
      padding: 10px;
    }

    .total {
      font-size: 18px;
      font-weight: bold;
      margin-top: 20px;
    }

    .empty {
      margin-top: 60px;
      font-size: 18px;
      color: #777;
    }

    .remove-btn, .order-btn {
      background-color: white;
      color: deeppink;
      border: 1px solid deeppink;
      padding: 6px 12px;
      border-radius: 5px;
      margin-top: 10px;
      cursor: pointer;
      font-weight: bold;
    }

    .remove-btn:hover, .order-btn:hover {
      background-color: #ffe6ef;
    }

    .footer {
      margin-top: 40px;
      padding: 15px;
      background-color: #f8f9fa;
      color: #777;
      font-size: 14px;
    }
  </style>
</head>
<body>

  <div class="header">
    <a href="index.php">Home</a>
    <a href="store.php">Back to Store</a>
  </div>

  <h2>Your Cart</h2>
  <div id="cart-list"></div>
  <div class="total" id="total"></div>
  <div id="place-order-btn"></div>

  <script>
    let cart = JSON.parse(localStorage.getItem("cart")) || [];

    function renderCart() {
      const cartList = document.getElementById("cart-list");
      const totalElement = document.getElementById("total");
      const orderBtn = document.getElementById("place-order-btn");

      cartList.innerHTML = "";
      totalElement.innerText = "";
      orderBtn.innerHTML = "";

      let total = 0;
      let validItems = [];

      cart.forEach((item, index) => {
        if (item.title && item.price) {
          validItems.push({ ...item, index });
        }
      });

      if (validItems.length === 0) {
        cartList.innerHTML = "<p class='empty'>Your cart is empty. Go to the store and add your favorite books!</p>";
        return;
      }

      validItems.forEach(item => {
        const bookDiv = document.createElement("div");
        bookDiv.className = "cart-item";
        bookDiv.innerHTML = `
          <p><strong>${item.title}</strong></p>
          <p>Price: ${item.price} SAR</p>
          <button class="remove-btn" onclick="removeFromCart(${item.index})">Remove</button>
        `;
        cartList.appendChild(bookDiv);
        total += item.price;
      });

      totalElement.innerText = "Total: " + total + " SAR";
      orderBtn.innerHTML = `<button class="order-btn" onclick="placeOrder()">Place Order</button>`;
    }

    function removeFromCart(index) {
      cart.splice(index, 1);
      localStorage.setItem("cart", JSON.stringify(cart));
      renderCart();
    }

    function placeOrder() {
      window.location.href = "checkout.php";
    }
    renderCart();
  </script>
<?php include("Footer.php");?>
</body>
</html>

