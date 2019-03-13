<?php

App::pageAuth(['user'], "login");

// // Example to get user
// $user = User::findById(1);

// // same as above, but different
// $product = DB::getInstance()->prepare('
// 	SELECT products.*, category.title
// 	FROM products

// 	INNER JOIN products_categories ON products.id = products_categories.product_id

// 	INNER JOIN category ON category.id = products_categories.category_id

// 	WHERE products.id = :id
// 	');
// $product->execute(['id' => 1]);
// $product->setFetchMode(PDO::FETCH_CLASS, 'Product')
// $product = $product->fetch();

// echo $product->title;

$products = DB::getInstance()->prepare('SELECT * FROM products');
$products->execute([]);
$products = $products->fetchAll(PDO::FETCH_CLASS, 'Product');

// foreach($products as $product) {
// 	echo $product->title;
// }

$products[0]->title


// $products = Product::get();

// forech

// dd($product);

// $user[0]
?>

