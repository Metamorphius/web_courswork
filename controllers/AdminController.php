<?php

include_once ROOT.'/models/Product.php';

class AdminController
{

    public function actionIndex()
    {
        
        require_once(ROOT. '/views/admin/index.php');
        return true;
    }

}