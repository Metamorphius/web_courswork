<?php

include_once ROOT .'/models/User.php';

class UserController
{

    public function actionLogin()
    {
        $email = false;
        $password = false;
        
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            $userId = User::checkUserData($email, $password);

            if ($userId == false) {
                $errors[] = 'Неправильные данные для входа на сайт';
            } else {
                User::auth($userId);

                header("Location: /admin/index");
            }
        }

        require_once(ROOT . '/views/user/login.php');
        return true;
    }

}