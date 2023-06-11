<?php
$tijd = date("H:i");

if ($tijd < "12:00") {
    echo "Goedemorgen";
} elseif ($tijd < "18:00") {
    echo "Goedemiddag";
} else {
    echo "Goedenavond";
}
?>

<?php
function berekenGemiddelde($getal1, $getal2) {
    $gemiddelde = ($getal1 + $getal2) / 2;
    echo "Het gemiddelde van $getal1 en $getal2 is: $gemiddelde";
}

berekenGemiddelde(4, 7);
?>

<?php
function dagenTotEindeJaar() {
    $huidigeDatum = date_create();
    $eindeJaar = date_create(date("Y") . "-12-31");
    $resterendeDagen = date_diff($huidigeDatum, $eindeJaar)->format("%a");

    echo "Aantal dagen tot het einde van het jaar: $resterendeDagen";
}

dagenTotEindeJaar();
?>


<?php
function berekenTotaleLengte($strings) {
    $totaleLengte = 0;

    foreach ($strings as $string) {
        $totaleLengte += strlen($string);
    }

    return $totaleLengte;
}

$array = array("Hallo", "Wereld", "Dit", "is", "een", "test");
$totaleLengte = berekenTotaleLengte($array);

echo "Totale lengte van de strings: $totaleLengte";
?>
