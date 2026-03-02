<?php

require __DIR__ . "../../service/UserService.php";

class UserController
{
    public function CreateUserController()
    {
        $name = trim($_POST['name'] ?? '');
        $username = trim($_POST['username'] ?? '');
        $password = $_POST['password'] ?? '';
        $email = trim($_POST['email'] ?? '');

        $userService = new UserService();
        $userService->CreateUserService($name, $username, $password, $email);

        header("location: ../../index.php");
    }
}

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    (new UserController)->CreateUserController();
}
