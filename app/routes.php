<?php
//defined a few routes "url"=>"controller,method"
//User
$this->addRoute('','User,login');


$this->addRoute('User/register','User,register');
$this->addRoute('User/login','User,login');
$this->addRoute('User/logout','User,logout');

// Cake
$this->addRoute('Cake/catalog','Cake,catalog');
$this->addRoute('Cake/details/{product_id}','Cake,details');

//Profile
$this->addRoute('Profile/index','Profile,index');
$this->addRoute('Profile/create','Profile,create');
$this->addRoute('Profile/edit','Profile,edit');
$this->addRoute('Profile/delete','Profile,delete');

//Orders
$this->addRoute('Order/order_list/{user_id}','Order,getAllOrder');
$this->addRoute('Order/seeOrder/{cart_id}','Order,seeOrder');
$this->addRoute('Order/delete/{cart_id}','Order,delete');
$this->addRoute('Order/index','Order,placeOrder');
$this->addRoute('Order/manage','Order,manage');
$this->addRoute('Order/adminView/{order_id}','Order,adminView');
$this->addRoute('Order/adminDelete/{order_id}','Order,adminDelete');

$this->addRoute('Profile/add_payment','Payment,add');
$this->addRoute('Profile/edit_payment','Payment,edit');

//Cart
$this->addRoute('Cart/index', 'Cart,viewCart');
$this->addRoute('Cart/add/{product_id}', 'Cart,addToCart');
$this->addRoute('Cart/delete/{product_id}', 'Cart,removeFromCart');
$this->addRoute('Cart/checkout', 'Cart,checkout');

// Product Management Routes
$this->addRoute('Product/index', 'Product,index'); // User viewable product list
$this->addRoute('Product/adminCreate', 'Product,adminCreate'); // Admin view for creating and listing products
$this->addRoute('Product/create', 'Product,create'); // Actual product creation action
$this->addRoute('Product/delete/{product_id}', 'Product,delete'); // Delete a product
$this->addRoute('Product/adminEdit/{product_id}', 'Product,adminEdit'); // Modify a product
$this->addRoute('Product/modify/{product_id}', 'Product,modify'); // Modify a product
$this->addRoute('Product/adminDelete', 'Product,adminDelete'); // Delete a product
$this->addRoute('Product/adminDelete', 'Product,adminDelete');

// Admin--------------------------------------------------------------------------------------------Start
// Admin Index
$this->addRoute('Admin/dashboard', 'Admin,dashboard');

// -------------------------------------------------------------------------------------------------End

// Review routes
$this->addRoute('Review/save', 'Review,save'); // Combined create and modify
$this->addRoute('Review/delete', 'Review,delete'); // Delete review
