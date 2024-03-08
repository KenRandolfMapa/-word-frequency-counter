<?php

function calculateTotalPrice(array $items): float {
    $total = 0;
    foreach ($items as $item) {
        $total += $item['price'];
    }
    return $total;
}


function modifyString(string $string): string {
    $string = str_replace(' ', '', $string);
    return strtolower($string);
}

function checkEvenOdd(int $number): string {
    if ($number % 2 == 0) {
        return "The number $number is even.";
    } else {
        return "The number $number is odd.";
    }
}

$items = [
    ['name' => 'Widget A', 'price' => 10],
    ['name' => 'Widget B', 'price' => 15],
    ['name' => 'Widget C', 'price' => 20],
];


$totalPrice = calculateTotalPrice($items);
echo "Total price: $" . $totalPrice . PHP_EOL;


$string = "This is a poorly written program with little structure and readability.";
$modifiedString = modifyString($string);
echo "Modified string: " . $modifiedString . PHP_EOL;

$number = 42;
echo checkEvenOdd($number) . PHP_EOL;
?>
