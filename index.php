<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="main">
            <h2>SURVEY FORM</h2>
            <span id="error">
                <?php
                if (!empty($_SESSION['error'])) {
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                } ?>
            </span>
            <form action="index1.php" method="post">
                <label>First Name<span>*</span></label>
                <input type="text" input name="name">
                <label>Middle Name</label>
                <input name="middle" input type="text">
                <label>Last Name<span>*</span></label>
                <input name="last" input type="text">
                <label>DOB<span>*</span></label>
                <input name="dob" input type="date"><br>
                <label>city<span>*</span> </label>
                <input name="city" input type="text">
                <label>GENDER<span>*</span></label>
                <input type="radio" name="gender" value="male">male
                <input type="radio" name="gender" value="female">female
                <input type="reset" value="Reset" />
                <input type="submit" value="Next" />
            </form>
        </div>
    </div>
</body>

</html>