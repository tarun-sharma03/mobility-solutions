<?php
require "fxn.php";
if (is_null($_SESSION["username"])) {
?>
    <script>
        // alert("Session Causing error");
        window.location = "superlogin.php";
    </script>
<?php
}

$res = getThis("SELECT `id`, `name`, `phone`, `email`, `message`,`generatedAt` FROM `conform` WHERE `enabled` = '0' ORDER BY `generatedAt` DESC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <h3><a href="logout.php">LOGOUT</a></h3>
    <h3><a href="admin.php">Back To Home</a></h3>
    <div class="container">
        <h2>Messages</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Date</th>

                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i < sizeof($res); $i++) {
                    $temp = $res[$i];
                ?>
                    <tr>
                        <td><?php echo e_d('d', $temp['name']); ?> </td>
                        <td><?php echo e_d('d', $temp['phone']); ?> </td>
                        <td><?php echo e_d('d', $temp['email']); ?> </td>
                        <td><?php echo e_d('d', $temp['message']); ?> </td>
                        <td><?php echo $temp['generatedAt']; ?> </td>

                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>