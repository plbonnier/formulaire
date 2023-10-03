<?php $data = array_map('trim', $_POST);?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Merci <?= $data['prenom'] . $data ['user_name']?> de nous avoir contacté à propos de <?= $data['subject']?></p>
<p>Un de nos conseillers vous contactera soit à l’adresse <?= $data['user_email']?> ou par téléphone au <?= $data['telephone']?> dans les plus brefs délais pour traiter votre demande :</p>
<p><?= $data['user_message']?></p> 

</body>
</html>