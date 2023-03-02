<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>กองสาธารณสุข</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="homeheader">
        <h3>กองสาธารณสุข</h3>
    </div>

    <div class="homecontent">
        <!--  notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="success">
                <h3>
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
    
        <!-- logged in user information -->
        <?php if (isset($_SESSION['username'])) : ?>
            <br>
            <p><h2>ยินดีต้อนรับ <strong><?php echo $_SESSION['username']; ?></strong></h2></p>
            <br>
            <p><h3><a href="index.php?logout='1'" style="color: red;">Logout</a></h3></p>
            <br>
        <?php endif ?>
    </div>

</body>
</html>