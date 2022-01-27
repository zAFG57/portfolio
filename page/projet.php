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
            <div class="repartion voirlesite" onclick="window.location='http://localhost:8081'">
                <p>
                    Mes-réparation.com est un projet que j'ai cloder
                    avec l'aide d'un ami lui aussi dévellopeur. Ce site internette 
                    permet de mettre en relation plusieur type de personne dans 
                    un but écologique. Ce site permet en effet de donner de la 
                    visibiliter a des profesionelle de la répatation et ainsi
                    leurs trouver de nouveau client près de leurs lieux de travaille.
                    Il permet au personne possédant des compétance de se faire un 
                    peut d'argent en réparant des objects a coté de leurs travaille
                    ou de leurs étude. Et enfin, il permet par la concurence au 
                    uttilisateur de faire réparer leurs objects bien moins cher 
                    qu'en magasin. Invitant ainsi les utilisateur a faire réparer
                    leurs objects cassé plus top que de les jetés et de racheté le 
                    même object neuf.
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
            <div class="repartion voirlesite" onclick="alert('le site n\'est pas encore disponible mais vous pouvez voir le code source sur mon git-hub. Bien cordialement')">
                <p>
                    cady-bite.com est un site de e-comerce sur lequel vous pouvez 
                    commender deux portes clef qui sont imprimer en 3d.
                    Ses portes clefs sont des desingns originaux créer par mes soins.
                    Il sagit d'un cady-bite: un jeton de cady en forme de fallus.
                    completement fonctionelle et compatible avec tout les cady disponible
                    en grande surface. Le deuxième porte clef est un décapsuchatte: il sagit 
                    d'un décapsuleur de bière en forme de vagin. Lui aussi fonctionelle, 
                    résitant et d'une simpliciter d'utilisation infantile.<br/></br>
                    
                    ce site est coder contrairement au précédent en python. J'utilise 
                    flask qui me permet de mettre en place mon serveur et de gérer 
                    tout mes requette affin de pouvoir sécuriser correctement se site.
                    Pour le payment, j'utilise le sdk de paypal. que je sécurise en 
                    générant une url unique pour chaque utilisateur utilisable une seule fois.
                    Ainsi, je suis sûre a 100% que chaque commande s'acompagne d'un payment et 
                    que chaque payment d'un utilisateur est bien une commande pour le produit 
                    qu'il désir.
                </p>
            </div>




            </div>
        </div>
    </div>


    
<?php $projet = ob_get_clean();?>