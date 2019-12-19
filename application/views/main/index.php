<p>Главная страница <span style="color: red;">this header from views/main/index.php</span></p>


<?php foreach ($news as ['title' => $title, 'description' => $description]) : ?>
    <h2><?= $title; ?></h2>
    <p><?= $description; ?></p>
    <hr>
<?php endforeach; ?>