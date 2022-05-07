<?php
    require_once  './../vendor/autoload.php';

    use App\Controllers\RegisterController;
    use Admin\Admin;
    use App\Helpers\Register;

    $register = new Register();
    var_dump($register);
    $admin = new Admin();
    $registerController = new RegisterController();
    $registerController->index();
    sayRoocket();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Page</title>
</head>
<body>
<h2>Register Page</h2>
</body>
</html>