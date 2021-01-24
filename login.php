<html>
<head>
  <title>LOGIN</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body style="background-color: #ADD8E6">
  <br>
  <center><h2 class="display-2">LOGGIN</center>
    <br>
    <div class="container">
      <form action="" method="POST" name="form1" enctype="multipart/form-data">
            <table class="table table-dark table-hover">
                <tr> 
                    <td>Username</td><td><input type="text" name="username" size="50" required class="form-control" placeholder="Username"></td>
                </tr>
                <tr> 
                    <td>Password</td><td><input type="password" name="pass" size="50" required class="form-control" placeholder="password"></td>
                </tr>
                <tr> 
                    <td></td>
                    <td><input type="Submit" name="Login" value="Login" class="btn btn-primary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <?php 

      function alert($msg) {
        echo "<script type='text/javascript'>alert('$msg');</script>";
      }

      if (isset($_POST['Login'])) {        
        $user = $_POST['username'];
        $pass = $_POST['pass'];

        
        
          if ($user == "admin"&&$pass=="admin") {
            header("location: index2.html");
          }else{
          	alert("username or password does not match");
          }
        
      }
      
    ?>   
</body>
</html>