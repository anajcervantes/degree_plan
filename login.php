<?php
require_once 'header.php';
echo "<div class='main'><h3>Please enter your details to log in</h3>";
$error = $user = $pass = "";

if(isset($_POST['user'])){
    $user = sanitizeString($_POST['user']);
    $pass = sanitizeString($_POST['pass']);
    
    
    if($user == "" || $pass == "")
        echo "Not all fields were entered<br>";
   else{
        $result = queryMysql("SELECT user,pass FROM students WHERE user='$user' AND pass='$pass'");
        if($result->num_rows == 0){
            $error = "<span class='error'>Username/Password invalid</span><br><br>";
        }
        else{
            $_SESSION['user'] = $user;
            $_SESSION['pass'] = $pass;
            die("You are now logged in. Please <a href='degreeplan.php?view=$user'>" . 
                "click here</a> to continue.<br><br>");
        }
   }
}

echo <<<_END
    <form method='post' action='login.php'>$error
    <span class='fieldname'>Username</span><input type='text'
      maxlength='16' name='user' value='$user' placeholder='Your UTEP ID'><br>
    <span class='fieldname'>Password</span><input type='password'
      maxlength='16' name='pass' value='$pass' placeholder='Last 4 digits of UTEP ID'>
_END;
?>

<br>
<span class='fieldname'>&nbsp;</span>
<input type='submit' value='Login'>
</form><br></div>
</body>
</html>