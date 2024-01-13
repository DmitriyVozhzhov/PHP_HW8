<?php

declare(strict_types=1);

// виводимо на экран числа від 1 до 10 завдяки циклу while

$i = 0;
while ($i <= 10) {
    echo $i++ . PHP_EOL;
}


// Обчислюємо факторіал числа 5 використовуючи цикл while.

$factorial = 1;

$i = 5;

while ($i > 0) {
    $factorial *= $i;
    $i--;
}

echo "Факторіал числа 5! = $factorial" . PHP_EOL;


// Виводимо на екран всі парні числа від 1 до 20 використовуючи цикл while.

$i = 1;

while ($i <= 20) {
    if ($i % 2 === 0){
        echo $i . PHP_EOL;
    }
    $i++;
}