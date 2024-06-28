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
$nbre= 1;

// boucle while  calcule et affiche les nbres de 1 à 10
while ($nbre<=10){
$nbre++;
echo $nbre . "<br>";
}

//boucle while calcule la somme des nbre de 1 à 10
$somme=0;
while ($somme<=10){
    $somme+= $nbre;
  echo $somme;
}
  $nbre = $nbre++;


//Boucle for pour afficher nbre 1 à 10
for($nbre=1,$nbre<=10, $nbre++){
    echo $nbre . "<br>" ;
}

//multiplie par 5
for($nbre=1,$nbre<= 10,$nbre ++){
    $résultat= $nbre * 5
    echo $nbre;
}

//Boucle foreach
$fruits = $array2 ['Pomme' . 'Bananne' . 'Orange'];
foreach ($fruits as $fruit){
    echo $value ;
}

//Boucle do...while
$nbre = 1;
do {
echo $nbre . "<br>" ;
$nbre++;
} while($nbre <=10);

?>