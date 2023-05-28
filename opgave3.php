

<?php
$myArray = ['auto', 'fiets', 'brommer', 'bus', 'vliegtuig', 'trein'];
$myArray[] = 'boot';
$count = count($myArray);
echo "1. Het array heeft $count elementen.\n";
foreach ($myArray as $key => $value)

{
    
 echo ($key+1) . ". " . $value . "<br>";

}

$average = round(array_sum(array_map('strlen', $myArray)) / $count, 1);
echo "1. Het array heeft $count elementen, en het gemiddelde aantal letters is $average.";
?>