<html>

<head>
<link rel="stylesheet" href="css/bootstrap.min.css" />
    <title>Add Customer</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
    <div class="global-container">
      <div class="login-form">
    <form action="add_process.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr> 
                <td>Phone</td>
                <td><input type="text" name="phone"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
</div>
</div>
    </form>
    
    
</body>
</html>