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
                $titre = 'hight-way-of-living.com';
                for ($y=0; $y < 2; $y++) { 
                    echo '<div>';
                    for ($i=0; $i < 3; $i++) { 
                        echo '<h1>'.$titre.'</h1><h1>|</h1>';
                    }
                    echo '</div>';
                }
                ?>
            </div>
            <div class="repartion voirlesite" onclick="window.location='../marg'">
                <p>
                    hight-way-of-living.com a été ma premiere 
                    experience du code dans le monde du travaile.
                    je l'ai codé seule (front end et back end) et 
                    j'ai mis en place le server. En some je l'ai crée
                    de A à Z. Ce site est le portfolio de Marjorie Genest.
                    Sur ce site les utilisateur peuvent s'inscrire à
                    une news letters affin que Marjorie puisse tenir
                    ces abonné au courant. De sont coté, elle n'a qu'a rédiger 
                    un mail, apuillé sur un bouton et toute les personnes
                    inscrite ressoive le mail. Ce projet m'a permis de 
                    confirmer mes connaisance en html js css et php
                    mais il m'a permis de beaucoup progréser en python.

                </p>
            </div>




            </div>
    </div>


    
<?php $projet = ob_get_clean();?>