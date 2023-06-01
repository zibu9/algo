<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifie si un fichier a été téléchargé avec succès
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == UPLOAD_ERR_OK) {
        // Spécifie le dossier de destination pour enregistrer l'image
        $uploadDir = "uploads/";
        $fileName = $_FILES["image"]["name"];
        $filePath = $uploadDir . $fileName;
        
        // Déplace le fichier téléchargé vers le dossier de destination
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $filePath)) {
            echo "L'image a été importée avec succès.";
        } else {
            echo "Une erreur s'est produite lors de l'importation de l'image.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Importation d'image en PHP</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit" value="Importer">
    </form>
</body>
</html>
