<?php


class AdminRedactorController
{

    public function actionIndex()
    {

        require_once(ROOT . '/views/admin_redactor/index.php');
        return true;
    }

}