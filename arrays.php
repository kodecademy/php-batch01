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
                'name' => 'Ali Jaber',
                'age' => 20,
                'school' => 'School A',
            ],
            [
                'name' => 'Asad Khan',
                'age' => 22,
                'school' => 'School A',
            ],
            [
                'name' => 'Abid Rehman',
                'age' => 25,
                'school' => 'School B',
            ],
            [
                'name' => 'Zahid Ullah',
                'age' => 15,
                'school' => 'School C',
            ]
        ];

        $filteredData = array_filter($students, function ($item) {
            return $item['age'] < 18;
        });

    ?>



    <h1>Student names</h1>
    <ul>
        <?php foreach($filteredData as $student): ?>
            <li><?= $student['name'] ?>: <?= $student['age'] ?>: <?= $student['school'] ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
