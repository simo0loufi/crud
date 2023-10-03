<?php
include 'connect.php';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['mobile'];
  $password = $_POST['password'];

  $sql = "INSERT INTO `crud` (Name,email,phone_number,password)values('$name','$email','$phone','$password')";
  $result = mysqli_query($connect,$sql);
  if($result){
    header('locations:index.php');
  }else{
    die(mysqli_error($connect));
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Crud Operation</title>
</head>
<body>
  <div class="container">
      <button class="btn btn-primary my-5"><a href="display.php" class="text-light">Display users</a></button>

    <form action="" method="post">
    <div class="form-floating mb-3">
  <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Ahmed">
  <label for="floatingInput">Name</label>
</div>

<div class="form-floating mb-3">
  <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Email address</label>
</div>

<div class="form-floating mb-3">
  <input type="text" name="mobile" class="form-control" id="floatingPassword" placeholder="Password">
  <label for="floatingPassword">Phone number</label>
</div>
<div class="form-floating mb-3">
  <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
  <label for="floatingPassword">Password</label>
</div>
<button type="submit" class="btn btn-primary" name="submit">
  Submit
</button>
</form>
  </div>

  <style>
    body{
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
  </style>
  
</body>
</html>