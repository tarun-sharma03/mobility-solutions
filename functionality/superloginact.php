<?php
require "../fxn.php";
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin' and $password == 'admin') {
        $_SESSION["username"] = $username;
?>
        <script>
            alert("Login Done!!");
            window.location = "../admin.php";
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Login Failed !!");
            window.location = "../superlogin.php";
        </script>
<?php
    }
}


?>