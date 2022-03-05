<!DOCTYPE html>
<html>
    <head>
<title>
    Registration Page 
</title>

    </head
    

    <body style align="center" bgcolor="white">
<?php
require('connect.php');
session_start();
if(isset($_REQUEST['email'])){
    $firstname = stripslashes($_REQUEST['fn']);
    $firstname = mysqli_real_escape_string($conn,$firstname);
    $lastname = stripslashes($_REQUEST['ln']);
    $lastname = mysqli_real_escape_string($conn,$lastname);
    $subjectname = stripslashes($_REQUEST['sn']);
    $subjectname = mysqli_real_escape_string($conn,$subjectname);   
    $mobilenumber = stripslashes ($_REQUEST['mn']);
    $mobilenumber = mysqli_real_escape_string($conn,$mobilenumber);
    $email = stripslashes ($_REQUEST['em']);
    $email = mysqli_real_escape_string($conn,$email);
    $password = stripslashes ($_REQUEST['ps']);
    $password = mysqli_real_escape_string($conn,$password);
}
    $query = "INSERT into 'teachername'(id,firstname,lastname,subjectname,mobilenumber,email,password)
                        VALUES ('$firstname','$lastname','$subjectname','$mobilenumber','$email','$password')";
        $result = mysqli_query($conn,$query);
        if($result)
{
    echo "successful register"; 

} else {
    echo "required field missing";

}
?>

 
<form method="post" action="">
<h1>     Registration Page  </h1><div id="pad">
First name<input type="text" name="fn"  placeholder="enter your first name"><br><br>
Last name <input type="text" name="ln" id placeholder="enter your last name"><br><br>
Subject name <input type="text" name="sn" placeholder="enter subject name"><br> <br>
Mobile number <input type="number" name="mn" placeholder="enter your mobile number"><br><br>
E-mail <input type="email" name="em" placeholder="enter your email address"><br><br>
Passord <input type="password" name="ps" placeholder="create strong password"><br><br>
</div>

<input type="submit" name="submit" id="ss" value="Register">
 <br><br>
 already register ? <a href="tlogin.php"> <h2>Login</h2></a>
 <button class="custom-btn btn-11"><h2>about us </h2><div class="dot"></div>
</div>

</form>

    </body>
    </html>
    