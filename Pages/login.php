<?php

// $dompdf = new Dompdf\Dompdf();
//     $dompdf->loadHtml('hello');
//     // $dompdf->set_option('defaultFont', 'Courier');
//     // $dompdf->setPaper('A4', 'landscape');
//     $dompdf->render();
//     $dompdf->stream("sample.pdf");


App::pageAuth([App::ROLE_GUEST]);

if (isset($_POST['email'])) {

    $user = User::login($_POST);

    if ($user) {
        App::redirect('home');
    }
}

// $faker = Faker\Factory::create('nl_NL');

// echo $faker->name;

?>
<div class="container">
    <div class="card card-model card-model-sm">
        <div class="card-header">
            Login
        </div>
        <div class="card-body">
            <?= User::loginForm(); ?>
        </div>
    </div>
</div>
