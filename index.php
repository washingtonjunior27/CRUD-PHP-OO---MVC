<?php

require_once "src/views/header.php";

require_once "src/controllers/userController.php";

$userController = new UserController();
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $action = $_POST['action'] ?? "";

    if ($action === "register") {
        $userController->CreateUserController();
    }
    if ($action === "trackUser") {
        $userController->TrackUserController($_POST['id']);
    }
    if ($action === "update") {
        $userController->UpdateUserController();
    }
    if ($action === "delete") {
        $userController->DeleteUserController($_POST['id']);
    }
    if ($action === "search") {
        $userController->SearchUserController();
    }
} else {
    $userController->ReadUserController();
}

require_once "src/views/footer.php";
