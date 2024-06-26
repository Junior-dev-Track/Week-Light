<?php

namespace controllers;

use models\Search;

class ViewController
{
    public function home()
    {

        include __DIR__ . "/../../public/views/home.php";
    }

    public function forgotPassword()
    {
        include __DIR__ . "/../../public/views/forgot_password.php";
    }

    public function friends()
    {
        include __DIR__ . "/../../public/views/friends.php";
    }

    public function messages()
    {
        include __DIR__ . "/../../public/views/messages.php";
    }

    public function profile($path)
    {
        session_start();
        $search = new Search();
        $_SESSION["search"] = $search->user($path);
        include __DIR__ . "/../../public/views/profile.php";
    }

    public function error404(): void
    {
        include __DIR__ . "/../../public/views/404.php";
    }

    public function error500(): void
    {
        include __DIR__ . "/../../public/views/500.php";
    }
}
