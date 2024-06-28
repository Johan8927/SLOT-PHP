<?php
var_dump($_FILES);
exit;
//vérifie si un fichier a été envoyé
if(isset($_FILES["image"]&&$_FILES["image"]["eror"])){
//on a reçu l'image
var_dump ($_FILES)
// on vérifie l'extention et le type MIME
$allowed = [
"hpg"=>"image/jpeg",
"jpeg" => "image/jpeg",
"png" => "image/png"
];
}
$filename =$_FILES["image"]["name"];
$file_type = $_FILES["image"]["type"];
$file_size = $_FILES["image"]["size"];

$extension = pathinfo ($filename,PATHINFO_EXTENSION);
//verif de l'extension si le type de fichier est incorrect
if (!array_key_exists)($extension, $allowed) || !in_array($filetype,$allowed){
//


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout fichier</title>
</head>
<body>
<form method = "post">
    <div>
        <label for ="fichier">Fichier</label>
        <input type="file" name="image" id="fichier">  
    </div>   
    <button type="submit">Envoyer</button>
</body>
</html>