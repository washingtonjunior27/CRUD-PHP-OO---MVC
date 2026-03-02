<?php

require __DIR__ . "../../repository/UserRepository.php";

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
}
