<?php

    include '../Core/config.php';
// if(isset($_GET['no-head'])) {
//     include "../Pages/" . $_GET['page'] . ".php";
// }
// else {
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include '../Core/head.php'; ?>
    </head>
    <body>

        <?php include '../Core/header.php'; ?>

        <?php include "../Pages/" . $page . ".php"; ?>

        <div class="errorcontainer">
            <?php echo App::displayErrors(); ?>
        </div>

        <?php include '../Core/footer.php'; ?>

    </body>
</html>
<?php
    DB::close();

?>
