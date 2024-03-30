<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Utilisateur</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <header>
            <h1>Profil Utilisateur</h1>
        </header>

        <section class="profile-section">
            <h2>Mettre à Jour les Informations</h2>

            <form action="update_profile.php" method="post">
                <div class="form-group">
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom" required>
                </div>

                <div class="form-group">
                    <label for="email">Adresse E-mail :</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="telephone">Numéro de Téléphone :</label>
                    <input type="tel" id="telephone" name="telephone" required>
                </div>

                <button type="submit">Mettre à Jour</button>
            </form>
        </section>

        <section class="message-section">
            <!-- Messages de succès ou d'erreur ici -->
        </section>
    </div>

    <footer>
        <p>&copy; 2024 MonSiteWeb.com - Tous droits réservés.</p>
    </footer>
</body>

</html>
