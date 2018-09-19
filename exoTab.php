<!doctype>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
echo "UTILISATION DU BOUCLE FOR pour tab1 <br>";
$arr = [
    "coucou72",
    "vie_oiseau",
    "test_value50",
    "bonjour",
    "arbitraire",
];
for ($i = 0; $i < 5; $i++) {
   echo "la valeur ".$i."  egal a ".$arr[$i]."<br>";
}
echo "<br>";
echo "UTILISATION DU BOUCLE FOREACH pour tab1 <br>";
echo "<br>";
foreach ($arr as $i) {
    echo "la valeur ".$i."<br>";
}

echo "<br>";
echo "UTILISATION DU BOUCLE while POUR TAB1 <br>";
echo "<br>";
$i=1;
while ($i<=5) {
    echo "la valeur ".$i." est egal a ".$arr[$i]."<br>";
    $i++;
}


echo "<br>";
/* pour deuxiem tableau*/
echo "UTILISATION DU BOUCLE FOR POUR TAB2 <br>";
$cars = array
(
    array("coucou72",10),
    array("vie_oiseau",15),
    array("test_value50",25),
    array("bonjour",20),
    array("arbitraire",5)
);

for ($i = 0; $i < 1; $i++){
    echo "la valeur ".$cars[0][0]." ou la valeur est egal a ".$cars[0][1]."<br>";
    echo "la valeur ".$cars[1][0]."ou la valeur est egal a ".$cars[1][1]."<br>";
    echo "la valeur ".$cars[2][0]."ou la valeur est egal a ".$cars[2][1]."<br>";
    echo "la valeur ".$cars[3][0]."ou la valeur est egal a ".$cars[3][1]."<br>";
}

echo "<br>";

echo "RESOLUTION DE L'EXERCICE 2 <br>";

/* pour 3em tableau*/
$arr2 = [
    "coucou72" => 10,
    "vie_oiseau" => 15,
    "test_value50" => [
        "in_tab" => "in tab",
        "in_tab1" => "dans tableau 1",
    ],
    "bonjour" => 20,
    "arbitraire" => 5,
];

foreach ($arr2 as $indice =>$value) {
    if($indice !="test_value50")
    {
      echo "la cle d'indice ".$indice." est la valeur ".$value."<br>";
    }
   else{
        foreach ($value as $indice2 =>$value2){
            echo "la cle d'indice ".$indice2." est la valeur ".$value2."<br>";
        }
    }

}


?>
</body>
</html>
