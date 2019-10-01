<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="style7.css">
        <link href="https://fonts.googleapis.com/css?family=Questrial|Varela+Round" rel="stylesheet">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <title>My Website</title>
    </head>
    <body>
        <div class="container">
            <header class="row">
                <div class="header">
                    <H1>MENUISERIE EMERIC LEBON</H1>
                </div>
            </header>
            <div class="row">
                <nav class="navbar navbar-inverse">
                    <div class="container-fluid">
                        <ul class="nav navbar-nav">
                            <li role="presentation" class="inactive"><a href="accueil.html"><span class="glyphicon glyphicon-home" style="color:#BBB;"></span>  Accueil</a></li>
                            <li role="presentation" class="active"><a href="contact.php"><span class="glyphicon glyphicon-phone" style="color:#BBB;"></span>  Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="row">
                <div id="text">
                    <p>
                    Bonjour,
                    Je suis Emeric Lebon.
                    Si vous voulez me contacter, remplissez le formulaire ci-desous.
                    </p>
                </div>
            </div>
            <div class="row">
                <form class="col-lg-5">
                    <H2><span class="label label-primary"><span class="glyphicon glyphicon-envelope" style="color:#FFF;"></span> Contact :</span></H2>
                    <legend>Genre : </legend>
                      <div class="radio">
                          <label for="male" class="radio">
                              <input type="radio" name="gender" value="male" id="male">
                                  Homme
                          </label>
                      </div>
                        <div class="radio">
                            <label for="female" class="radio">
                                <input type="radio" name="gender" value="female" id="female">
                                    Femme
                            </label>
                        </div>
                        <div class="radio">
                            <label for="other" class="radio">
                                <input type="radio" name="gender" value="other" id="other">
                                    Autre
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="texte">Prénom : </label>
                            <input type="text" class="form-control" required name="prenom" placeholder="François"/>
                            <label for="texte">Nom : </label>
                            <input type="text" class="form-control" required name="nom" placeholder="Dupond"/>
                            <label for="texte">Email : </label>
                            <input type="text" class="form-control" required name="email" placeholder="francoisdupond@email.com"/>
                            <label for="texte">Adresse : </label>
                            <input type="text" class="form-control" required name="adresse" placeholder="3 rue Victor Hugo"/>
                            <label for="texte">Code postal : </label>
                            <input type="text" class="form-control" required name="code_postal" placeholder="31000"/>
                            <label for="texte">Ville : </label>
                            <input type="text" class="form-control" required name="ville" placeholder="Toulouse"/>
                            <label for="texte">Téléphone : </label>
                            <input type="text" class="form-control" required name="telephone" placeholder="06 38 40 50 29"/>
                        </div>
                        <div class="form-group">
                            <label for="textarea">Message : </label>
                            <textarea id="textarea" name="message" rows="8" type="textarea" class="form-control" placeholder=""></textarea>
                        </div>
                        <button class="btn btn-info" type="submit"><span class="glyphicon glyphicon-send"></span>  Soumettre</button>
                </form>
                <?php
                if(isset($_POST['message'])){
                     $entete  = 'MIME-Version: 1.0' . "\r\n";
                     $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                     $entete .= 'From: ' . $_POST['email'] . "\r\n";

                     $message = '<h1>Message envoyé depuis la page Contact de menuiserie-lebon.fr</h1>
                     <p><b>Nom : </b>' . $_POST['nom'] . '<br>
                     <b>Prénom : </b>' . $_POST['prenom'] . '<br>
                     <b>Adresse : </b>' . $_POST['adresse'] . '<br>
                     <b>Code postal : </b>' . $_POST['code_postal'] . '<br>
                     <b>Ville : </b>' . $_POST['ville'] . '<br>
                     <b>Email : </b>' . $_POST['email'] . '<br>
                     <b>Téléphone : </b>' . $_POST['telephone'] . '<br>
                     <b>Message : </b>' . $_POST['message'] . '</p>';

                     $retour = mail('benoit.jausseran@gmail.com', 'Envoi depuis page Contact', $message, $entete);
                     if($retour) {
                        ?>

                        <p>Votre message a bien été envoyé.</p>'
                        <?php
                     }
                 }
                 error_reporting(E_ALL);
                 ?>
            </div>


            <div class="clear" style="clear:both">
            </div>

        </div>
        <footer class="footer">
            <div class="container">
                <span class="text-muted">Copyright 2019</span>
            </div>
        </footer>
    </body>

</html>