<!DOCTYPE html>
<html>
    <head>
<title>
    login page
</title>

    </head>
 


    <body style align="center" bgcolor="white">
        <?php
        require('connect.php');
        session_start();
        if(isset($_POST['email'])){
            $email = stripcslashes($_REQUEST['email']);
$email = mysqli_real_escape_string($conn,$email);
$password = stripcslashes($_REQUEST['password']);
$password = mysqli_real_escape_string($conn.$password);
 $query = "SELECT* FROM 'teachername'WHERE email='$email' AND password ='$password';
 $result = mysqli_query($conn,$query)
 $rows = mysqli_num_rows($result);



   
?>
<form method="post" action="">
<h1> Login Page     </h1>
E-mail <input type="email" name="em" placeholder="register email"> <br><br>
Password <input type="password" name="ps" placeholder="enter password"><br><br>
<input type="submit" name="submit" id="ss" value="login">
 <br><br>
 New User? <a href="tregister.php"> <h2>Register</h2></a>
 <button class="custom-btn btn-11"><h2>about us </h2><div class="dot">


</form>

    </body>
    </html>