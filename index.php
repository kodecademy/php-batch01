<?php

$dsn = 'mysql:host=localhost;user=root;dbname=phpclass;';
$pdo = new PDO($dsn);

$statement = $pdo->prepare('select * from posts limit 1;');
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

echo '<ul>';
foreach ($posts as $post) {
    echo "<li>{$post['id']}: {$post['title']}: {$post['description']}</li>";
}
echo '</ul>';
exit;
?>


<?php $title = 'Home'; ?>
<?php require('partials/header.view.php'); ?>
<?php require('partials/nav.view.php'); ?>

<h1>Home page</h1>

<?php require('partials/footer.view.php'); ?>

