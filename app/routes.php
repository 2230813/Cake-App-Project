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

$this->addRoute('Order/order_list/{user_id}','Order,getAllOrder');
$this->addRoute('Order/seeOrder/{order_id}','Order,seeOrder');

//This is for the shopping cart
$this->addRoute('Cart/index', 'Cart,viewCart');
$this->addRoute('Cart/add/{product_id}', 'Cart,addToCart');
$this->addRoute('Cart/delete/{product_id}', 'Cart,removeFromCart');

// Product Management Routes------------------------------------------------------------------------Start
$this->addRoute('Product/index', 'Product,index'); // User viewable product list
$this->addRoute('Product/adminCreate', 'Product,adminCreate'); // Admin view for creating and listing products
$this->addRoute('Product/adminCreate', 'Product,adminCreate'); // Admin view for creating and listing products
$this->addRoute('Product/create', 'Product,create'); // Actual product creation action
$this->addRoute('Product/delete/{product_id}', 'Product,delete'); // Delete a product

// Test
$this->addRoute('Product/adminEdit/{product_id}', 'Product,adminEdit'); // Modify a product
$this->addRoute('Product/modify/{product_id}', 'Product,modify'); // Modify a product
$this->addRoute('Product/adminDelete', 'Product,adminDelete'); // Delete a product

// -------------------------------------------------------------------------------------------------End

// Admin--------------------------------------------------------------------------------------------Start

$this->addRoute('Admin/dashboard', 'Admin,dashboard');

// -------------------------------------------------------------------------------------------------End
