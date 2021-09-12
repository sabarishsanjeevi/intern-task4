<!DOCTYPE html>
<html lang="en">

<?php
include "config.php";
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);
    $result = mysqli_query($conn,"SELECT * FROM sabari where email='$username' and password='$password'");
    if(mysqli_num_rows($result)>0){
        $id = mysqli_fetch_assoc($result)['id'];
        $_SESSION['user'] = fetch($id);
        header("location: home.php");
    }else{
        $p = "Wrong Credentials".mysqli_error($conn);
    }
}
function fetch($id){
    global $conn;
    $h = mysqli_query($conn,"SELECT * FROM sabari WHERE id='$id'");
    $t = mysqli_fetch_assoc($h);
    return $t;
}
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>login page</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body><section class="login-clean">
    <form method="post" action="index.php">
        <h2 class="visually-hidden">Login Form</h2>
        <div class="illustration"><i class="icon ion-log-in"></i></div>
        <div style="text-align: center;"><p><?php echo $p ?></p></div>
        <div class="mb-3"><input type="email" class="form-control" name="username" placeholder="Email" /></div>
        <div class="mb-3"><input type="password" class="form-control" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" /></div>
        <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" name="login">Log In</button></div>
        <br>
        <br>
        <br>
        <br>
        <br>
    </form>
</section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>