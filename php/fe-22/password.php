<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>fe-22 password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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
            height: 40%;
            width: 40%;
            margin: auto;
            margin-top: 2%;
            border-width: 100%;
            border-style: groove;
            padding-left: 3%;
            

   }
   div {
       margin: 5%;
   }
   input {
      margin-top: 4%;
  }
   </style>
</head>
<body>
<h2>Yours info:</h2>
Welcome <?php echo $_POST["username"]; ?><br>
Your old password is: <?php echo $_POST["oldpassword"]; ?><br>
Your new password is: <?php echo $_POST["newpassword"]; ?>
<div class=container>
<form  method="POST">
<h2 class="form-signin-heading">Please change your password:</h2>
<input type="text" name="oldpassword" id="oldpassword" placeholder="Enter Your Old Password"><br>
<input type="text" name="newpassword" id="newpassword" placeholder="Enter Your New Password"><br>
<input type="text" name="confirmpassword" id="confirmpassword" placeholder="Enter Confirm Password"><br>
<button type="submit" value="submit" name="submit">Submit</button>
<button onclick="login()">Login AJAX</button>
<div> &copy; <?php echo date("Y"); ?></div>
</form>

   
<script>
$('#newpassword, #confirmpassword').on('click', function () {
if ($('#newpassword').val() == $('#confirmpassword').val()) {
$('#message').html('Matching').css('color', 'green');
} else 
$('#message').html('Not Matching').css('color', 'red');
});
</script>
            

</body>
</html>

