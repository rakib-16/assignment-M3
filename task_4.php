<?php

$studentGrades = array(
    "student_1" => array("Math" => 78, "English" => 80, "Science" => 75),
    "student_2" => array("Math" => 60, "English" => 40, "Science" => 55),
    "student_3" => array("Math" => 83, "English" => 91, "Science" => 78)
);

function calculateAverageGrades($grades) {
    foreach ($grades as $student => $subjects) {
        $total = array_sum($subjects);
        $numSubjects = count($subjects);
        $average = $total / $numSubjects;

        $grade = getGrade($average);

        echo "$student - Average Grade: $grade<br>";
    }
}

function getGrade($average) {
    if ($average >= 80) {
        return 'A+';
    } elseif ($average >= 70) {
        return 'A';
    } elseif ($average >= 60) {
        return 'A-';
    } elseif ($average >= 50) {
        return 'B';
    } elseif ($average >= 40) {
        return 'D';
    } elseif ($average >= 33) {
        return 'C';
    } else {
        return 'Fail Bro';
    }
}

calculateAverageGrades($studentGrades);





