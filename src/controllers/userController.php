<?php

require_once __DIR__ . "/../service/UserService.php";
require_once __DIR__ . "/../repository/UserRepository.php";

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

        header("location: /crud/index.php");
        exit;
    }

    public function ReadUserController()
    {
        $userRepository = new UserRepository();
        $users = $userRepository->ReadUserRepository();

        require __DIR__ . "/../views/body.php";
    }

    public function TrackUserController($id)
    {
        $userRepository = new UserRepository();
        $user = $userRepository->TrackUserRepository($id);

        require __DIR__ . "/../views/updateUser.php";
    }

    public function UpdateUserController()
    {
        $id = $_POST['id'];
        $name = trim($_POST['name'] ?? '');
        $username = trim($_POST['username'] ?? '');
        $email = trim($_POST['email'] ?? '');

        $userService = new UserService();
        $userService->UpdateUserService($name, $username, $email, $id);

        header("location: /crud/index.php");
        exit;
    }

    public function DeleteUserController()
    {
        $id = $_POST['id'];

        $userRepository = new UserRepository();
        $userRepository->DeleteUserRepository($id);

        header("location: /crud/index.php");
        exit;
    }

    public function SearchUserController()
    {
        $search = trim($_POST['search'] ?? "");
        $userRepository = new UserRepository();
        $users = $userRepository->SearchUserRepository($search);

        require __DIR__ . "/../views/body.php";
    }
}
