
<?php
var_dump(5 == "5");
var_dump(5 === "5");
var_dump(0 == "");
var_dump("abc" == 0);
var_dump(null == false);

$sat=18;
$dan=5;
var_dump(($sat >= 8 && $sat <= 15) && ($dan >= 1 && $dan <= 5));

$godina=2022;
if($godina<2023)
    {
        echo "301,38 kn";
    }
    elseif($godina==2023)
    {
        echo "40,00 € (301,38 kn)";
    }
    else
    {
        echo "40,00 €";
    }

$dan = (int) date("N");

$nazivDana = match ($dan) {
    1 => "Ponedjeljak",
    2 => "Utorak",
    3 => "Srijeda",
    4 => "Četvrtak",
    5 => "Petak",
    6 => "Subota",
    7 => "Nedjelja",
    default => "Nepoznat dan"
};

echo "Danas je: " . $nazivDana;
echo "<br>";

$imena = ["Karlo", "zdenko", "ana"];

foreach ($imena as $ime) {
    // Uzimamo prvo slovo i pretvaramo ga u malo slovo
    $prvoSlovo = strtoupper($ime[0]);

    echo "$ime: ";

    switch ($prvoSlovo) {
        case 'A':
        case 'E':
        case 'I':
        case 'O':
        case 'U':
            echo "Ime počinje samoglasnikom.<br>";
            break;
        default:
            echo "Ime počinje suglasnikom.<br>";
            break;
    }
}
?>