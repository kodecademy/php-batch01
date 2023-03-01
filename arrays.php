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

require_once 'arrays.view.php';

