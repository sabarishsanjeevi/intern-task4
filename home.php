<!DOCTYPE html>
<html lang="en">
<?php include 'config.php';
if(!isset($_SESSION['user'])){
    header("location: index.php");
}else{
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>home</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="transform: translate(0px) skew(0deg);">

<h1>Hello <?php echo $_SESSION['user']['name']; ?></h1>
    <h1>This Page is Under Maintenance</h1><img src="assets/img/pngaaa.com-995150.png" height="500" width="600" style="border-style: initial;transform: skew(-9deg);">
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
<?php } ?>