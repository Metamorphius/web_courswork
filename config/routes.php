<?php
return array(

    'admin/product/create' => 'adminProduct/create',
    'admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
    'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
    'admin/product' => 'adminProduct/index',
    
    'admin' => 'admin/index',

    'product/([0-9]+)' => 'product/view/$1',
    'catalog' => 'catalog/index',
    'category/([0-9]+)' => 'catalog/category/$1',
    '' => 'site/index', 
);