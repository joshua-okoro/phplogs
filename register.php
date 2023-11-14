<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
       <link rel="stylesheet" href="index.css">
</head>
<body>
     
    <form action="register.inc.php" method="post" id="forms" >
     <?php
    if($num2=1){
        echo"<div id='jos' >user already exist</div>";
       

    }
 
    ?>

        <input type="text" name="name" placeholder="name">
         <input type="text" name="username" placeholder="username" id="username" >
          <input type="text" name="email" placeholder="email">
           <input type="password" name="password" placeholder="password" id="password" >
            <input type="password" name="rpassword" placeholder="rpassword">
            <button name="register" id="register" >register</button>

<a href="login.php">login</a>
    </form>
    <script src="index.js"></script>
</body>
</html>