<!DOCTYPE html>    
<html>    
<head>    
    <title>Employee Login Form</title>    
    <link rel="stylesheet" type="text/css" href="css/logIn.css">    
</head>    
<body>    
    <h2>Employee Login Page</h2><br>    
    <div class="login">    
    <form id="login" method="POST" action="checkLogInE">
        @csrf    
        <label><b>User Email    
        </b>    
        </label>    
        <input type="text" name="email" id="email" placeholder="UserEmail">    
        <br><br>    
        <label><b>Password     
        </b>    
        </label>    
        <input type="Password" name="password" id="Pass" placeholder="Password">    
        <br><br>    
        <input type="submit" name="log" id="log" value="Log In Here">  
    </form>       
        <br><br>    
        <a href="RegistrationPage">Registration</a>      
        <br><br>    
        
       
</div>    
</body>    
</html> 