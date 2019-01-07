<!DOCTYPE>
<html>
<head>
    <title>Ma première page avec du style</title>
</head>

<body>

<!-- Menu de navigation du site -->
<ul class="navbar">
    <li><a href="index.php?page=home">Home page</a>
    <li><a href="index.php?page=actu">Actu</a>
    <li><a href="index.php?page=blog">Blog</a>
    <li><a href="index.php?page=connect">Connexion</a>
</ul>

<!-- Contenu principal -->
<h1>Page de connection</h1>

<h2>Veuillez inscrire vos données de compte</h2>

<form method="post" action="index.php?page=connect">
    <label for="login">Login</label><input type="text" placeholder="login" name="login"><br>
    <label for="mdp">Mot de passe</label><input type="password" name="mdp"><br>
    <input type="submit" value="Valider"><br>
</form>


<address>Fait le 5 avril 2004<br>
    par moi.</address>

</body>
</html>