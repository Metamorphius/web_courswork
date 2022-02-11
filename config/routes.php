<?php
return array(
    'product/([0-9]+)' => 'product/view/$1',

    'catalog' => 'catalog/index',
    'category/([0-9]+)' => 'catalog/category/$1',

    'about' => 'about/index',
    'author' => 'author/index',
    
    'user/login' => 'user/login',

    'admin/product/create' => 'adminProduct/create',
    'admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
    'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
    'admin/product' => 'adminProduct/index',

    'admin/redactor/main' => 'adminRedactorMain/main',
    'admin/redactor/about' => 'adminRedactorAbout/about',
    'admin/redactor/author' => 'adminRedactorAuthor/author',
    'admin/redactor' => 'adminRedactor/index',

    'admin' => 'admin/index',

    '' => 'site/index', 
);