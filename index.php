<?php
require_once 'models/Category.php';
require_once 'models/Product.php';
require_once 'models/User.php';
require_once 'models/Cart.php';


/**
 * creation d'un produit
 */

$product = new Product();
$product->setName('iphone 12');
$product->setDescription('super nouveau telephone plein de fonctionnalité');
$product->setImage('iphone12.jpg');
$product->setPrice(1000);
$product->setStock(30);
$product->setStatus('available');

$product1 = new Product();
$product1->setName('iphone 1°');
$product1->setDescription('ancien modele iphone');
$product1->setImage('iphone12.jpg');
$product1->setPrice(600);
$product1->setStock(10);
$product1->setStatus('available');

/**
 * creation d'une categorie
 */

$category = new Category();
$category->setName('Telephone');
  $category->setDescription('Une Gamme de Telephone à découvrir...');
  $category->setImage('gamme-tel.jpg');

/**
 * creation d'un user
 */

$user = new User();
$user->setFirstname("julie");
$user->setLastName('ly');
$user->setEmail('juju@juju.fr');
$user->setPassword('pwd');
$user->setDescription('test');

$cart = new Cart();
$cart->setproducts([$product]);

echo '<pre>';
print_r($user);
print_r($cart);
echo '</pre>';