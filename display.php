<?php
include 'connect.php';
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
  <button class="btn btn-primary my-5"><a href="index.php" class="text-light">Add user</a></button>
  <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">mobile</th>
      <th scope="col">password</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT * from `crud`";
    $result = mysqli_query($connect, $sql);
    if($result){
      while($row=mysqli_fetch_assoc($result)){
        $id = $row['Id'];
        $name = $row['Name'];
        $email = $row['email'];
        $phone_number = $row['phone_number'];
        $password = $row['password'];
        echo '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$phone_number.'</td>
      <td>'.$password.'</td>
      <td><button class="btn btn-primary">
    <a class="text-light" href="update.php?updateid='.$id.'">Update</a>
  </button>
  <button class="btn btn-danger">
    <a class="text-light" href="delete.php?deleteid='.$id.'">Delete</a>
  </button></td>
    </tr>';
      }
    }
    ?>
  </tbody>
</table>
  </div>
   <style>
    body{
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      height: 100vh;
    }
  </style>
</body>
</html>