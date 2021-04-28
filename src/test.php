 <?php

$numbers = [100, 50, 50, 25, 25, 25];
$minNumber = $numbers[0];
foreach ($numbers as $number) {
    if ($number < $minNumber) {
        $minNumber = $number;
    }
}

$numberOfLastNumberOccurrences = 0;

foreach ($numbers as $number) {
    if ($number === $minNumber) {
        ++$numberOfLastNumberOccurrences;
    }
}

if ($numberOfLastNumberOccurrences === 1) {
    $lastPosition = count($numbers);
} else {
    $lastPosition = count($numbers) - $numberOfLastNumberOccurrences;
}

echo $lastPosition;
//
//$pseudoRandomNumber = rand(0, 20);
//
//
//$anotherPsuedoRandomNumber = rand(0, 20);
//
//if ($pseudoRandomNumber === $anotherPsuedoRandomNumber) {
//    echo 'It\'s a match';
//} else {
//    echo 'Sadly, it\'s no match';
//}

