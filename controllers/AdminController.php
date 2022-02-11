<?php

include_once ROOT .'/models/User.php';

class AdminController
{
    
    public function actionIndex()
    {
        $userId = User::checkLogged();
        
        require_once(ROOT . '/views/admin/index.php');
        return true;
    }

    public function actionRedactor()
    {
        
    }
}