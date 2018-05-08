<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>fe-21 login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/6603c9fd94.js"></script>
    <style type="text/css">
   body {
       margin-left: 5%;
       background-image: url("https://www.inspectionsupport.net/wp-content/uploads/2014/07/LoginRed.jpg");
       background-repeat: no-repeat;
       background-size: 40%;
       background-position: center;
   }
   
   form {
            height: 30%;
            width: 30%;
            margin: auto;
            margin-top: 2%;
            border-width: 100%;
            border-style: groove;
            padding-left: 3%;
            

   }
   div {
       margin: 10%;
   }
  input {
      margin-top: 2%;
  }
    </style>
</head>

<body>

<div class=container>
    <form class="form-signin" method="POST" action="login.php">
        <h2 class="form-signin-heading">Please Login:</h2>
    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1"></span>
        <input type="text" name="username" class="form-control" placeholder="Username" required>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
    </div>
        <div><button class="btn btn-lg btn-primary btn-block" type="submit">Login</button></div>
        &copy; <?php echo date("Y"); ?>
    </form>
</div>

</body>

</html>
    