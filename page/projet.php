<?php
 ob_start();?>
 
        <link rel="stylesheet" href="css/projet.css">
    
    <div class="projet navlink" onclick="projetnav()">
        <section class="header projeth">
                <h1>mes projets</h1>
            <div class="bouche visage" id="c"></div>
        </section>
        <div class="sujetdavenir">
            
            <div class="caroselle">
                <?php
                $titre = 'mes-réparation.com';
                for ($y=0; $y < 2; $y++) { 
                    echo '<div>';
                    for ($i=0; $i < 3; $i++) { 
                        echo '<h1>'.$titre.'</h1><h1>|</h1>';
                    }
                    echo '</div>';
                }
                ?>
            </div>
            <div class="repartion voirlesite" onclick="window.location='https://ludovic.go.yj.fr'">
                <p>
                    Mes-reparations.com est un projet que j'ai clodé
                    avec l'aide d'un ami lui aussi dévellopeur. Ce site internet 
                    permet de mettre en relation plusieurs types de personnes dans 
                    un but écologique. Ce site permet en effet de donner de la 
                    visibilité à des profesionels de la répatation et ainsi
                    leur trouver de nouveaux clients près de leur lieu de travail.
                    Il permet aux personnes possédant des compétances de se faire un 
                    peu d'argent en réparant des objets à coté de leur travail
                    ou de leurs études. Et enfin, il permet par la concurrence aux 
                    uttilisateurs de faire réparer leurs objets bien moins cher 
                    qu'en magasin. Invitant ainsi les utilisateurs à faire réparer
                    leurs objets cassés plutôt que de les jeter et de racheter le 
                    même objet neuf.
                </p>
            </div>
            <div class="caroselle">
                <?php
                $titre = 'snake-3D';
                for ($y=0; $y < 2; $y++) { 
                    echo '<div>';
                    for ($i=0; $i < 3; $i++) { 
                        echo '<h1>'.$titre.'</h1><h1>|</h1>';
                    }
                    echo '</div>';
                }
                ?>
            </div>
            <div class="repartion" id="snake_3D" onclick="alert('téléchargement du jeux')">
                <p class="le_point_exe">
                    c'est un jeu de snake 3D coder en java en uttilisant la librerie processing pour le rendu 3D.
                    pour controller le snake, vous pouvez utiliser les touches classiques ZQSD pour aller devant 
                    derrière, à gauche et à droite. Mais vous pouvez aussi uttiliser la touche A pour montez et 
                    la touche E pour décendre. Pour mieux comprendre les perspectives et le déplacement du serpend,
                    vous pouvez utiliser la souri changer la perspective et tourner autour du volume de jeux.</br></br>

                    pour plus d'information, vous pouvez consulter le code source sur <a class="git_hub h" href="https://github.com/zAFG57">mon git-hub</a>
                    . ou bien clicker sur ce text pour pouvoir télécharger le .exe du jeu.
                </p>
            </div>
            <div class="caroselle">
                <?php
                $titre = 'cady-bite.com';
                for ($y=0; $y < 2; $y++) { 
                    echo '<div>';
                    for ($i=0; $i < 3; $i++) { 
                        echo '<h1>'.$titre.'</h1><h1>|</h1>';
                    }
                    echo '</div>';
                }
                ?>
            </div>
            <div class="repartion voirlesite" onclick="window.location='https://github.com/zAFG57/3d_shop'">
                <p>
                    cady-bite.com est un site de e-commerce sur lequel vous pouvez 
                    commander deux portes clef qui sont imprimés en 3d.
                    Ces portes clefs sont des desingns originaux créés par mes soins.
                    Il sagit d'un cady-bite: un jeton de cady en forme de fallus.
                    completement fonctionel et compatible avec tout les caddys disponibles
                    en grande surface. Le deuxième porte clef est un décapsuchatte: il sagit 
                    d'un décapsuleur de bière en forme de vagin. Lui aussi fonctionel, 
                    résistant et d'une simplicité d'utilisation infantile.<br/></br>
                    
                    ce site est codé contrairement au précédant en python. J'utilise 
                    flask qui me permet de mettre en place mon serveur et de gérer 
                    toutes mes requêtes affin de pouvoir sécuriser correctement se site.
                    Pour le paiement, j'utilise le sdk de paypal. que je sécurise en 
                    générant une url unique pour chaque utilisateur utilisable une seule fois.
                    Ainsi, je suis sûr à 100% que chaque commande s'accompagne d'un paiement et 
                    que chaque paiement d'un utilisateur est bien une commande pour le produit 
                    qu'il désire.
                </p>
            </div>




            </div>
        </div>
    </div>


    
<?php $projet = ob_get_clean();?>