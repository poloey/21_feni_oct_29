<?php 
// $name = $_POST['name'];
// $email = $_POST['email'];
// $password = $_POST['password'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>

  <div class="container p-5">
    <table class="table table-bordered">
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Eamil</th>
        <th>Password</th>
      </tr>
      <tr>
        <td>1</td>
        <td><?php echo $_POST['name']; ?></td>
        <td><?php echo $_POST['email']; ?></td>
        <td><?php echo $_POST['password']; ?></td>
      </tr>
    </table>
    
  </div>
  
</body>
</html>