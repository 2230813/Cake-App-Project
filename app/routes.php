<?php
//defined a few routes "url"=>"controller,method"
$this->addRoute('User/register','User,register');
$this->addRoute('User/login','User,login');
$this->addRoute('User/logout','User,logout');

$this->addRoute('Cake/catalog','Cake,catalog');
$this->addRoute('Cake/details/{product_id}','Cake,details');

$this->addRoute('Profile/index','Profile,index');
$this->addRoute('Profile/create','Profile,create');
$this->addRoute('Profile/edit','Profile,edit');
$this->addRoute('Profile/delete','Profile,delete');

$this->addRoute('Profile/Order','Profile,getAllOrder');