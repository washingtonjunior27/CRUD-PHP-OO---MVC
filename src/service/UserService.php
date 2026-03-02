<?php

require_once __DIR__ . "/../repository/UserRepository.php";

class UserService
{
    public function CreateUserService($name, $username, $password, $email)
    {
        if (!$name || !$username || !$password || !$email) {
            echo "Preencha os campos vazios!!";
        }

        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $userRepository = new UserRepository();
        $userRepository->CreateUserRepository($name, $username, $password_hash, $email);
    }

    public function UpdateUserService($name, $username, $email, $id)
    {
        if (!$name || !$username || !$email) {
            echo "Preencha os campos vazios!!";
        }

        $userRepository = new UserRepository();
        $userRepository->UpdateUserRepository($name, $username, $email, $id);
    }
}
