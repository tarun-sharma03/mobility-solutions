<?php
require "../fxn.php";

if (isset($_POST['submit'])) {
    $name = e_d('e', $_POST['name']);
    $phone = e_d('e', $_POST['phone']);
    $email = e_d('e', $_POST['email']);
    $message = e_d('e', $_POST['message']);
    $res = doThis("INSERT INTO `conform`(`name`, `phone`, `email`, `message`,`generatedAt`) VALUES ('$name','$phone','$email','$message',CURRENT_TIMESTAMP())");
    if ($res) {
?>
        <script>
            alert("Your message sent successfully !!");
            window.location = "../index.php";
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("There is some technical error!!");
            window.location = "../index.php";
        </script>
<?php
    }
}
?>