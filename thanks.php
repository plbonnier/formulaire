<?php $data = array_map('trim', $_POST);
$errors=[];
if (!isset($data['prenom']) || empty($data['prenom'])) {
    $errors[] = 'le prénom est obligatoire';
}
if (!isset($data['user_name']) || empty($data['user_name'])) {
    $errors[] = 'le nom est obligatoire';
}
if (!isset($data['user_email']) || empty($data['user_email'])) {
    $errors[] = 'le courriel est obligatoire';
}
if (!isset($data['telephone']) || empty($data['telephone'])) {
    $errors[] = 'le téléphone est obligatoire';
}
if (!isset($data['subject']) || empty($data['subject'])) {
    $errors[] = 'le sujet du message est obligatoire';
}
if (!isset($data['user_message']) || empty($data['user_message'])) {
    $errors[] = 'le message est obligatoire';
}
if(!filter_var($data['user_email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'le courriel n\'est pas au bon format';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul>
<?php 
if (!empty($errors)) {
    foreach ($errors as $error): ?>
        <li><?= $error ?></li>
    <?php endforeach;
} else {?>
<p>Merci <?= htmlentities($data['prenom']) . htmlentities($data ['user_name'])?> de nous avoir contacté à propos de <?= htmlentities($data['subject'])?></p>
<p>Un de nos conseillers vous contactera soit à l’adresse <?= htmlentities($data['user_email'])?> ou par téléphone au <?= htmlentities($data['telephone'])?> dans les plus brefs délais pour traiter votre demande :</p>
<p><?= htmlentities($data['user_message'])?></p> 
<?php } ?>    

</body>
</html>