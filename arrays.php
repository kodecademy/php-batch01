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
    <?php
        $students = [
            [
                'name' => 'Ali',
                'age' => 20,
            ],
            [
                'name' => 'Asad',
                'age' => 22,
            ],
            [
                'name' => 'Abid',
                'age' => 25,
            ]
        ];

        $movies = [
                [
                    'name' => 'Movie 1',
                    'producer' => 'Xyz',
                ],
                [
                    'name' => 'Movie 2',
                    'producer' => 'Abc',
                ]
        ];
    ?>



    <h1>Student names</h1>
    <ul>
        <?php foreach($students as $student): ?>
            <li><?= $student['name'] ?>: <?= $student['age'] ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
