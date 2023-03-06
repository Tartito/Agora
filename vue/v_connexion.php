<div id="login-page">
    <div class="container connexion">
        <form class="form-login" method="post" action="index.php?uc=connexion">
            <h2 class="form-login-heading">Identification utilisateur</h2>
            <div class="login-wrap">
                <?php
                    if (isset($erreur)) {
                        echo '<div class = "erreurCnx"><p>'.$erreur.'</p></div>';
                    }
                ?>
                <input type="text" class="form-control" name="txtLogin" id="txtLogin" placeholder="Login" required autofocus />
                <br>
                <input type="password" class="form-control" name="txtMdp" id="txtMdp" placeholder="Mot de passe" required />
                <div class="pull-right login-social-link">
                    <a data-toggle="modal" href="v_connexion.php#myModal"> Mot de passe oublié ?</a>
                </div>
                <button class="btn btn-theme btn-block" type="submit" name="cmdAction" value="validerConnexion" title="Se connecter" onclick="document.getElementById('hdMdp').value = hex_sha512(document.getElementById('txtMdp').value);document.getElementById('txtMdp').value = ' ';">
                    <i class="fa fa-lock"></i> Se connecter
                </button>

 <!-- champ caché pour le mot de passe haché -->
 <input type="hidden" name="hdMdp" id="hdMdp" />
                <hr>
            </div>

            <!-- la fenêtre modale -->
            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> <!-- data-dismiss ferme les fenêtres modales-->
                            <h4 class="modal-title">Mot de passe oublié ?</h4>
                        </div>
                        <div class="modal-body">
                            <p>Entrez votre adresse mail pour réinitialiser votre mot de passe.</p>
                            <input type="text" name="txtEmail" id="txtEmail" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix" />
                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                            <button class="btn btn-theme" type="button">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal -->
        </form>
    </div>
</div>
    