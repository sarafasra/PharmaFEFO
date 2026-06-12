<?php

require_once __DIR__ . "/../Repository/UserRepository.php";

class UserController
{
    private $repo;

    public function __construct()
    {
        $this->repo = new UserRepository();
    }

    public function loginForm()
    {
        require __DIR__ . "/../../templates/auth/login.php";
    }

   public function login()
{
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $user = $this->repo->findByEmail($email);

    if ($user && $user['password'] == $password) {

        $_SESSION['user'] = $user;

        if ($user['role'] == 'ADMIN') {
            header("Location: index.php?dashboard=admin");
            exit;
        }

        if ($user['role'] == 'PHARMACIEN') {
            header("Location: index.php?dashboard=pharmacien");
            exit;
        }

        if ($user['role'] == 'PREPARATEUR') {
            header("Location: index.php?dashboard=preparateur");
            exit;
        }
    }

    echo "Email ou mot de passe incorrect";
}
    public function logout()
    {

        $_SESSION = [];

        session_destroy();

        header("Location: index.php?login=1");
        exit;
    }
}