<?php
if (isset($_POST['title'])) {

    $product = Product::update($_POST);
}
?>

<div class="container">
    <div class="card card-model card-model-sm">
        <div class="card-header">
            Register
        </div>
        <div class="card-body">
            <?= Product::editForm($_GET['id']); ?>
        </div>
    </div>
</div>
