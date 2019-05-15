<?php
$error = "";
if(isset($_POST['submit'])) {
    if(!empty($_POST['username']) && !empty($_POST['password'])) {
        require("formdb.php");
        $username = trim($_POST['username']);
        $password = md5($_POST['password']);
      
        $sql = "SELECT * FROM gebruikers WHERE username = '". $username."'";
        
        
        if($result = $conn->query($sql)) {
            $aantal = $result->num_rows;
            if($aantal == 1) {
                $user = $result->fetch_row();
                session_start();
                $_SESSION['user'] = $user[1];
                $_SESSION['ingelogd'] = true;
                header("Location: ingelogddb.php");
            } else {
                $error = "Username or password incorrect.";
            }
        }
    } else {
        $error = "Username en password zijn verplicht.";
    } 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Login form</h1>
    <form method="POST">
        <label>Username:</label><br><input type="text" name="username" /><br>
        <label>Password:</label><br><input type="password" name="password" /><br><br>
        <input type="submit" name="submit" value="inloggen" /><br><br>
        <?php echo $error; ?>
    </form>
</body>
</html>