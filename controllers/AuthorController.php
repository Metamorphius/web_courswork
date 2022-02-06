<?php 


class AuthorController
{

    public function actionIndex() 
    {
        require_once(ROOT .'/views/author/index.php');

        return true;
    }

}