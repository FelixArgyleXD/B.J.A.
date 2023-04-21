<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>replit</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<div id="navbar">
  <a href="index.php">Home</a>
  <a href="about.php">About</a>
  <a href="menu.php">Menu</a>
  <a href="orders.php">Orders</a>

</div>
<br>
<br>
<br>
  <br>
  
<h1>
  <form>
    <div class="mb-3 row">
      <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="text" class="form-control-plaintext" id="staticEmail" value=<?php $Email=readline('Enter email
          here') ?>>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword" value=<?php $Password=readline('Enter password
          here') ?>>
      </div>
      <div class="mb-3 row">
        <label for="phoneNumber" class="col-sm-2 col-form-label">phoneNumber</label>
        <div class="col-sm-10">
          <input type="text" class="form-control-plaintext" id="phoneNumber" value=<?php $phoneNumber=readline('Enter phone number here') ?>>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="creditCard" class="col-sm-2 col-form-label">creditCard</label>
        <div class="col-sm-10">
          <input type="creditCard" class="form-control" id="creditCard"value=<?php $creditCard=readline('Enter Credit card number here') ?>>
        </div>
        <div class="col-auto">
          <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </div>
      </div>
  </form>

</h1>

</html>