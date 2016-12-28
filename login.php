<?php
//设页面标题并包含头文件
define('TITLE','Login');
include('templates/header.html');

print '<h2>Login Form</h2>
    <p>User who are logged in can take advantages of certain features like this,
    that,and the other thing.</p>';

if ($_SERVER['REQUEST_METHOD'] =='POST') {

    if ((!empty($_POST['email'])) && (!empty($_POST['password']))) {
        if ((strtolower($_POST['email']) == 'me@example.com')
        && ($_POST['password'] == 'testpass')) {
            print '<p> You are logged in!<br/> Now you can blah,....</p>';
        } else {
            print '<p>The submitted email address and password do not match those on file!<br/>
            Go back and try again.</p>';
        }
    }else{
        print '<P>please make sure you enter both an email address and a password!<br/> Go back and try
    again.</P>';
    }
} else {
    print '<form action="login.php" method="post">
    <p>Email address:<input type="text" name="email" size="20" /> </p>
    <p>Password:<input type="password" name="password" size="20" /> </p>
    <p><input type="submit" name="submit" value="Log In!"> </p>
    </form>';
}
include ('templates/footer.html');
?>
