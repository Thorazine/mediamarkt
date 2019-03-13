<?php

if(@$_GET['action'] == 'delete') {
    Product::destroy($_GET['id']);
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && @$_POST['button'] == 'delete') {
    Product::destroy($_POST['id']);
}

$products = Product::get();
?>

<div class="container">
    <div class="card card-model card-model-sm">
        <div class="card-header">
            Register
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($products as $product) { ?>
                    <tr>
                        <td><?= $product->id; ?></td>
                        <td><?= $product->title; ?></td>
                        <td>
                            <form action="?page=products" method="POST">
                                <input type="hidden" name="id" value="<?= $product->id; ?>">
                                <button type="submit" class="btn btn-danger" name="button" value="delete">Delete</button>
                            </form>

                            <a <?= App::link('products', ['id' => $product->id, 'action' => 'delete']); ?> class="btn btn-danger">Delete</a>

                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
