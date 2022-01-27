<?php

include_once ROOT.'/models/Product.php';
include_once ROOT.'/models/Category.php';

class AdminProductController
{
    public function actionCreate()
    {
        $categoriesList = Category::getCategoriesListAdmin();

        if (isset($_POST['submit'])) {
            $options['name'] = $_POST['name'];
            $options['category_id'] = $_POST['category_id'];
            $options['code'] = $_POST['code'];
            $options['price'] = $_POST['price'];
            $options['avaliabillity'] = $_POST['avaliabillity'];
            $options['brand'] = $_POST['brand'];
            $options['image'] = "/upload/images/products/{$id}.jpg";
            $options['description'] = $_POST['description'];
            $options['is_new'] = $_POST['is_new'];
            $options['is_recommended'] = $_POST['is_recommended'];
            $options['status'] = $_POST['status'];

            $errors = false;

            if (!isset($options['name']) || empty($options['name'])) {
                $errors[] = 'Заполните поля';
            }

            if ($errors == false) {
                                
                $id = Product::createProduct($options);

                if ($id) {
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/products/{$id}.jpg");
                    }
                };

                
            }
        }

        require_once(ROOT . '/views/admin_product/create.php');
        return true;
    }


    public function actionIndex()
    {
        $productsList = Product::getProductsList();

        
        require_once(ROOT. '/views/admin_product/index.php');
        return true;
    }


    public function actionDelete($id)
    {
        
        if (isset($_POST['submit'])) {

            Product::deleteProductById($id);

            header("Location: /admin/product");
        }

        require_once(ROOT. '/views/admin_product/delete.php');
        return true;
    }

}