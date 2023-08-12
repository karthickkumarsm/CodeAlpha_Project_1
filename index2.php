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
            <?php
            session_start();
            if (isset($_POST['email'])) {
                if (!empty($_SESSION['post'])) {
                    if (
                        empty($_POST['email']) ||
                        empty($_POST['color'])
                        || empty($_POST['number'])
                        || empty($_POST['vacation'])
                        || empty($_POST['place'])
                    ) {
                        $_SESSION['error_page'] = "Mandatory field(s) are missing, Please fill it again";
                        header("location:index1.php");
                    } else {
                        foreach ($_POST as $key => $value) {
                            $_SESSION['post'][$key] = $value;
                        }
                        extract($_SESSION['post']);
                        if (isset($_POST['submit'])) {
                            $to = "karthickkumarsm47@gmail.com"; // this is your Email address
                            $from = $_POST['email']; // this is the sender's Email address
                            $first_name = $_POST['name'];
                            $last_name = $_POST['last'];
                            $subject = "Form submission";
                            $subject2 = "Copy of your form submission";
                            $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['place'] . $_POST['color'] . $_POST['vacation'];
                            $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['place'] . $_POST['color'] . $_POST['vacation'];

                            $headers = "From:" . $from;
                            $headers2 = "From:" . $to;
                            $res = mail($to, $subject, $message, $headers);
                            mail($from, $subject2, $message2, $headers2); // sends a copy of the message to the sender
                            if ($res == true) {
                                echo "<p>Mail Sent. Thank you " . $name . "  </p>";
                            } else {
                                echo "<p>Mail not sent...</p>";
                            }
                        }
                    }
                } else {
                    header("location:index1.php");
                }
            }


            ?>
        </div>
    </div>
</body>

</html>