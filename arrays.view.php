<!doctype html>
<html lang="en">
<head>
    <title>Arrays</title>
</head>
<style>
    body {
        display: grid;
        place-items: center;
        margin: 0;
    }
</style>
<body>
<h1>Student names ?></h1>
<ul>
    <?php foreach($filteredData as $student): ?>
        <li><?= $student['name'] ?>: <?= $student['age'] ?>: <?= $student['school'] ?></li>
    <?php endforeach; ?>
</ul>
</body>
</html>
