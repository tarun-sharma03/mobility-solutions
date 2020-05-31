<?php
require "fxn.php";

$id = $_GET['id'];
$id = e_d('d', $id);
$res = doThis("UPDATE `conform` SET `enabled`='0' WHERE `id` = '$id' ");
if ($res) {
?>
    <script>
        alert("Message Marked as read");
        window.location = "admin.php";
    </script>
<?php
} else {
?>
    <script>
        alert("Some Technical Error Occurred!");
        window.location = "admin.php";
    </script>
<?php
}

?>