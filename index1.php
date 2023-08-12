<?php
session_start();
if (isset($_POST['name'])) {
    if (
        empty($_POST['name']) ||
        empty($_POST['last']) || empty($_POST['dob']) || empty($_POST['city'])
        || empty($_POST['gender'])
    ) {
        $_SESSION['error'] = "Mandatory field(s) are missing,please fill it again";
        header("location:index.php");
    } else {
        foreach ($_POST as $key => $value) {
            $_SESSION['post'][$key] = $value;
        }
    }
} else {
    if (empty($_SESSION['error_page'])) {
        header("location:index.php"); //redirecting to first page
    }
}
?>
<html>

<head>
    <title>FORM</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="main">
            <h2>SURVEY FORM</h2>
            <span id="error">
                <?php
                if (!empty($_SESSION['error_page'])) {
                    echo $_SESSION['error_page'];
                    unset($_SESSION['error_page']);
                }
                ?>
            </span>
            <form action="index2.php" method="post">
                <label>Email<span>*</span></label>
                <input name="email" type="email" placeholder="email" required>
                <select name="qualification">
                    <option value="">----Select----</options>
                    <option value="graduation" value="">Graduation </options>
                    <option value="postgraduation" value="">Post Graduation </options>
                    <option value="other" value="">Other </options>
                </select>
                <label>FAVOURITE COLOR YOU LIKE TO DRESS?<span>*</span></label>
                <input type="text" input name="color">
                <label>FAVOURITE NUMBER?<span>*</span></label>
                <input type="text" input name="number">
                <label>FAVOURITE SPOT TO ENJOY VACATION?<span>*</span></label>
                <input type="text" input name="vacation">
                <label>A PLACE YOU LIKE TO VISIT ONCE IN YOUR LIFE?<span>*</span></label>
                <input type="text" input name="place">
                <input type="reset" value="Reset" />
                <input name="submit" type="submit" value="Submit" />
        </div>
    </div>
</body>

</html>