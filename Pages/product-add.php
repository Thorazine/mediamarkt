<?php
if (isset($_POST['title'])) {

    $product = Product::store($_POST);

    if ($product) {
        App::redirect('product-edit&id='.$product->id);
    }
}
?>

<div class="container">
    <div class="card card-model card-model-sm">
        <div class="card-header">
            Register
        </div>
        <div class="card-body">
            <?= Product::addForm(); ?>
        </div>
    </div>
</div>
