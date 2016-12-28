<?php
//使用了粘性特征，可以回显用户的输入

define('TITLE','Register');
include ('templates/header.html');

print '<h2>Register Form</h2>
    <p>User who are logged in can take advantages of certain features like this,
    that,and the other thing.</p>';

print '<style type="text/css" media="screen" >
    .error {color: red; }
 </style>';

if ($_SERVER['REQUEST_METHOD'] =='POST') {
    $problem = FALSE;

    if (empty ($_POST['first_name'])) {
        $problem = TRUE;
        print '<p class="error"> Please enter your first name! </p>';
    }

    if (empty($_POST['last_name'])) {
        $problem = TRUE;
        print '<p class="error"> Please enter your last name! </p>';
    }

    if (!$problem) {
        print '<p>   You are now registered !
    <br/> Okay, you are not really registerd but...</p>';
        $_POST = array();
    } else {
        print '<p  class="error" > Please try again! </p> ';
    }
}
?>
<form action="register.php" method="post">
    <p> First Name: <input type="text" name="first_nme" size="20"
            value="<?php if (isset($_POST['first_name'])) {print
            htmlspecialchars($_POST['first_name']);} ?>" /> </p>
    <p> Last Name: <input type="text" name="last_nme" size="20"
           value="<?php if (isset($_POST['last_name'])) {print
               htmlspecialchars($_POST['last_name']);} ?>" /> </p>

    <p> <input type="submit" name="submit" value="Register!"> </p>
</form>
