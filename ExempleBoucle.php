<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExempleBoucle</title>
</head>
<body>
    
</body>
</html>
<?php

//crée tableau et affiche le deuxiéme éléments du tab
$fruits = $array ['Pomme' . 'Bananne' . 'Orange'];
    echo $fruits [1];

//Ajout d'un élément au tab et affiche avec boucle foreach
$fruits = array_push("Mangue");
foreach ($fruits as $value){
    echo $value;
}

//crée tab associatif
$personne = $array2 ["nom","prenom","age" ];
$nom="Bertrand";
$prenom ="Johan";
$age= 35;
echo $personne; 

//modifie la valeur "âge" et affiche
foreach ($age as $key => 34 ){
    echo $key;
}


?>