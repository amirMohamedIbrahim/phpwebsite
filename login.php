<?php 

$register = 1;
?>
<head>
<?php 
    //load header information
    include("head.php");
    include("nav.php");
    
?>
</head>
<style>
    body{
    background-color: rgb(201, 76, 76);
}
    button{
        background-color: beige;
        padding: inherit;
        padding-right: 2px;
        align-content: center;
    }
    label{
        background-color: whitesmoke;
        text-align: left;
    }
    input{
        background-color: gainsboro;
    }
    
</style>
<?php if(!$register): ?>
<!--Login section---------------->
<h1 align="center">Login screen</h1>
<form id="login" align="center" padding="25px">
    <div>
        <label id="username">Username:<input type="email"></label>        
    </div>
    <div>
        <label id="password">Password: <input type="password"></label>
    </div>
    <div>
        <button align="left" type="button">Login</button> <button type="button" id="register">Register</button><br>
        <button type="button" id="forgot_credential">Forgot username/password</button>
    </div>
</form>
<?php endif; 


if($register): ?>
<!---Registration form section---------------->
<h1 align="center">Register Here</h1>
<form id="register" class="text-center">
    <div>
        <label>First Name: <input type="text" id="firstName" size="25px"></label>
    </div>
    <div>
        <label>Last Name: <input type="text" id="lastName" size="25px"></label>
    </div>
    <div>
        <label>Email Address: <input type="email" id="email" size="25px"></label>
    </div>
    <div>
        <label>Password: <input type="password" id="password" size="25px"></label>
    </div>
    <div>
        <button>Register</button>
    </div>    
</form>
<?php endif; ?>
<footer>
<?php
//load footer information
include("footer.php");
?>
</footer>