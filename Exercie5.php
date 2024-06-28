<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
// crée un tab
$nbre=[1,2,3,4,5,6,7,8,9,10];

// boucle while  calcule et affiche la somme des nbbres de 1 à 10
while ($nbre<=10){
$nbre=[$nbre+$nbre++];
}

//Boucle for pour afficher nre 1 à 10
for($nbre=1,$nbre<=10, $nbre++){
    echo $nbre ;
}

//multiplie par 5
for($nbre=1,$nbre<= 10,$nbre * 5){
    echo $nbre;
}

//Boucle foreach
$fruits = $array2 ['Pomme' . 'Bananne' . 'Orange'];
foreach ($fruits as $value){
    echo $value ;
}

//Boucle do...while
do {
$nbre = 1;
echo $nbre;
} while($nbre <=10)

?>