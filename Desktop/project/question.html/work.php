<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    

    
</head>
<body>
    <table align="center" style="width:500px" style="height:400px"; >
        <tr><td bgcolor="aaaaaa">
    <b><p align="center">Membership Registration form</p></b><hr>
    <form action="request.php"method="post">
        First Name: <input type="text" name="firstname"/><br><br>
        Last Name: <input type="text" name="last name"/><br><br>
        username:  <input type="email" name="username"/><br><br>
        Password: <input type="password" name="password"/><br><br>
        
        
        Gender: 
                <input type="radio" name="gender" value="female">Female

                <input type="radio" name="gender" value="female">Male
                
        sector:
              <input type="checkbox" name="sector" value="Education"/>Education
              <input type="checkbox" name="sector" value="Tourism"/>Tourism
              <input type="checkbox" name="sector" value="Energy"/>Energy
              <input type="checkbox" name="sector" value="ICT"/>ICT <br><br>                
        Category:
        <select name="category">
            <option value="select category">select language</option>
            <option value="LEAST">LEAST</option>
            <option value="VIP">VIP</option>
            <option value="VVIP">VVIP</option>
</select><br><br>

 <input type="submit" value="print priview">
 <input type="reset"  value="Reset">
 <hr>
 <form/>
</tr>
</td>

<tr><td bgcolor="#8aaaaa">
    <b><p align="centre"> Generated  Report<b></p>
    <form action="" method="post">
    search:<input type="search" name="search"/<br><br>
    <form/>

    <form/>
    First Name:<?php  echo $_post["first Name"]; ?><br><br>
    Last Name: <?php echo $_post["last name"]; ?><br>
    Email: <?php echo $_post["email"]; ?><br>
    Password: <?php echo $_post["password"]; ?><br>
    Gender: <?php echo $_post["gender"] ?><br>
    Sector:<?php echo $_post["Sector"]  ?><br>
    Category: <?php echo $_post["category"] ?><br>
    

 <form>
     <input type="submit" name="submit" value="Register">
</form>
</td>
</tr>
</table>
</body>
</html>
 





    