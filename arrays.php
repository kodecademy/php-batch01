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
        function filterByAge(array $allStudents, $thresholdAge = 20): array
        {
            $filteredStudents = [];
            foreach ($allStudents as $student) {
                if($student['age'] > $thresholdAge) {
                    $filteredStudents[] = $student;
                }
            }

            return $filteredStudents;
        }

        $filteredData = filterByAge($students, 20);

    ?>



    <h1>Student names</h1>
    <ul>
        <?php foreach($filteredData as $student): ?>
            <li><?= $student['name'] ?>: <?= $student['age'] ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
