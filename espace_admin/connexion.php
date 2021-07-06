<?php
session_start();
if(isset($_POST['envoyer'])){

    if(!empty($_POST['login']) && !empty($_POST['mdp'])){

    }else{
        echo "Veuillez remplir tous les champs!";
}
$bdd = new PDO('mysql:host=localhost;dbname=clinique_veterinaire_dr_vigneron;','root','');
$login_admin = $bdd->query('SELECT Login FROM administrateur');
$mdp_admin = $bdd->query('SELECT MDP FROM administrateur');

while ($admin = $login_admin->fetch()){
    $Recup_login_admin = $admin['Login']; 
}

while ($mdp = $mdp_admin->fetch()){
    $Recup_mdp_admin = $mdp['MDP'];
}

$user_utilisateur = $_POST['login'];
$mdp_utilisateur = $_POST['mdp'];

if ($user_utilisateur != $Recup_login_admin){
    echo "Login Incorrect";
}else{
    echo "Login Correct";
}

if (md5($mdp_utilisateur) === $Recup_mdp_admin){
    echo "Mot de passe Correct";
}else{
    echo "Mot de passe incorrect";
}
if($user_utilisateur == $Recup_login_admin && md5($mdp_utilisateur) == $Recup_mdp_admin){
    $_SESSION['mdp'] = $mdp_utilisateur;
    header('location: parametre.php');
}

}
?>
<!DOCTYPE html>
<html>
        <head>
            <title>Espace Administrateur</title>
            <meta charset="utf-8">
            <link href="../css/style.css" rel="stylesheet" type="text/css">
            <link href="parametre.php">
        </head>
    <body>
        <div class="container-admin">
            <div class="title-admin">
                <h1>Espace de connexion administrateur</h1>
            </div>
            <div class="form-connexion">

                <form method="POST" action="">

                <label for="login">Login :</label>
                <input type="text" name="login" required>

                <label for="mdp">Mot de Passe :</label>
                <input type="password" name="mdp" required>
                <br>

                <input type="submit" name="envoyer" value="Envoyer">
                <input type="reset" name="annuler" value="Annuler">
                </form>



            </div>
        </div>
    </body>
</html>