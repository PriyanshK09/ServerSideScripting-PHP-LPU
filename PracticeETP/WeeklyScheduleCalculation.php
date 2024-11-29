<?php

$employees = [
    [
        'name' => 'John',
        'shift' => 'morning',
        'hoursOfWork' => [8, 8, 8, 8, 8, 0, 0]
    ],
    [
        'name' => 'Jane',
        'shift' => 'morning',
        'hoursOfWork' => [8, 8, 8, 0, 8, 0, 0]
    ],
    [
        'name' => 'Bob',
        'shift' => 'morning',
        'hoursOfWork' => [8, 0, 8, 8, 0, 0, 0]
    ]
];

foreach($employees as $employee) {
    $totalHours = array_sum($employee['hoursOfWork']);
    echo $employee['name'] . ' worked ' . $totalHours . ' hours this week' . PHP_EOL;
}

?>