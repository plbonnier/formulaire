

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>My test page</title>
    </head>
    <body>
        <p>This is my page</p>
        <form  action="thanks.php"  method="post">
            <div>
                <label  for="prenom">Prénom :</label>
                <input  type="text"  id="prenom"  name="prenom" required>
            </div>
            <div>
                <label  for="nom">Nom :</label>
                <input  type="text"  id="nom"  name="user_name" required>
            </div>
            <div>
                <label  for="courriel">Courriel :</label>
                <input  type="email"  id="courriel"  name="user_email" required>
            </div>
            <div>
                <label for="telephone">Téléphone :</label>
                <input type="tel" name="telephone" id="telephone" required>
            </div>
            <div>
                <label for="subject">Sujet : </label>
                <select name="subject" id="subject" required>
                    <option value="tel">Téléphone</option>
                    <option value="resa">Réservation</option>
                    <option value="classe">Classe</option>
                    <option value="cars">Voiture</option>
                </select>
            </div>
            <div>
                <label  for="message">Message :</label>
                <textarea  id="message"  name="user_message" required></textarea>
            </div>
            <div  class="button">
                <button  type="submit">Envoyer votre message</button>
            </div>
        </form>
    </body>
</html>