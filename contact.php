<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verasic-Contact Us</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="static/css/index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>
<?php include 'menu.php'; ?>
<section class="my-5">
  <div class="py-5">
    <h4 class="text-center">Contact Us</h4>
  </div>
  <div class="w-50 m-auto">
    <form action="connection.php" method="post">
      <div class="form-group">
        <label>FirstName</label>
        <input type="text" name="firstName" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>LastName</label>
        <input type="text" name="lastName" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Mobile no.</label>
        <input type="text" name="mobile_no" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Comment</label>
        <textarea class="form-control" name="comment"></textarea>
      </div>
      <button type="submit" class="btn btn-success">submit</button>
    </form>
  </div>
</section>
<footer>
  <p class="p-3 bg-dark text-white text-center">Verasic Parts & Accessories Limited, &copy Copyright 2020</p>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>