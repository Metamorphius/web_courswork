<?php


class AdminRedactorMainController
{

    public function loadFromData($file) 
    {
        if (!file_exists($file)) {
            throw new Exception("Error: file doesn't exist");
        }

        if (!filesize($file)) {
            throw new Exception("File is empty");
        }

        $f = fopen($file, "r");

        $content = fread($f, filesize($file));

        fclose($f);

        return $content;
    }


    public function actionMain()
    {
        $file = ROOT .'/views/site/index.php';

        if (isset($_POST['change_main_page'])) {
            $content = $_POST['main_page'];
            file_put_contents($file, $content);            
            
            header("Location: /admin/redactor");
        }
        else {
            $content = $this->loadFromData($file);
        }


        require_once(ROOT . '/views/admin_redactor/main_page.php');
        return true;
    }

}