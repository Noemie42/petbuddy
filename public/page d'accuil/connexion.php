<?php 

include 'inc/header.inc.php';
include 'inc/nav.inc.php';

?>
        <div class="connexion">
            <form action="#">
                
                    <h1>Se connecter</h1>
                    <p></p>
                    <hr>

                    <label for="email">Email</label>
                    <input type="text" placeholder="Enter Email" name="email" id="email" required>

                    <label for="psw">Mot de passe</label>
                    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>   

                    <label>
                     <input type="checkbox" checked="checked" name="checked"> 
                    </label>
                    <br>
                    <br>
                    <hr>

                    <button type="submit" class="connexionbtn">Connexion</button>
                

                   <div class="seConnecter">
                      <a href="#">Mot de passe oublié</a>
                   </div>
            </form>
        </div>


<?php include 'inc/footer.inc.php';
        
        