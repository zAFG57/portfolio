<?php
 ob_start();?>
 <link rel="stylesheet" href="css/home.css">
    
    
    <div class="home navlink" onclick="homenav()">
        <section class="header homeh">    
            <h1>Ludovic CASTIGLIA</h1> 
            <div class="oeil visage" id="a" onclick="oeilclicka()"></div>
        </section>
        <section class="content">
            <div class="photo"></div>
            <div class="text">
                <h1>qui suis-je?</h1>
                <p>
                    Bonjour, je m'appelle Ludovic Castiglia. Je suis un étudiant français 
                    de 17 ans qui est passionée par l'informatique. Je pratique également le 
                    handball au niveaux championnat de france.
                </p>
                <h1>mes début dans le code</h1>
                <p>
                    depuis tout petit, j'apprend en autodidaxie. lorsque j'ai découvert le code, 
                    je m'y suis tout de suite passioné car dans se milleux, vous n'avez jamais
                    finit d'pprendre. Il y a toujours un langage, une fonction ou une logique à découvrir.
                    de plus l'aspect créatif du dévellopement me plait beaucoup. je pense également
                    que le code est bien plus qu'une passion dans la messure ou sa permet a 
                    tout le monde de soit recréer une copi de flappy bird ou alors de devenir
                    bill gate. Enfin, le code permet de réduire les inégaliter dans le sense ou 
                    tout se que vous apprendrer lors de vos étude se trouve sur internet.
                </p>
                <h1>mon experience avec l'informatique</h1>
                <p>
                    mon premier vrai projet en informatique à commencer durant le confinement ou un
                    ami à moi m'a inviter à faire un site en collaboration. (mes-réparation.com)
                    Aujourd'hui, le site est encore en dévelloppement car nous fessons sa sur notre 
                    temps libre à coté de nos étude. Cepandant, de nombreuse foncionaliter sont déjà disponible.
                    Ce site est coder en php html css et js ce qui nous permet d'avoir un site sécuriser et qui 
                    peut se modifier lui même en fonction des besoins.</br></br>    
        
                    actuellement, je travail en solo sur un projet d'opptimisation de mon experience 
                    avec l'informatique. Se logiciel que je développe a plusieur usage. Premieremment 
                    cet un gestionaire de mots de passe qui fonctionne avec un systhème de clef physique 
                    (un simple clef usb). Il permet d'écrire automatiquement un mots de passe à la suite 
                    d'un short cut que l'on peut configurer à souhait. Le mots de passe son chiffré avec des clef qui 
                    son stocker a moitier dans la clef physique et dans votre ordinateur se qui permet de ne pas
                    risquer de vous faire voler vos mots de passe si vous perder votre clef physique.
                    De plus, les clef changent à chaque utilisation (comme les signaut envoyer par les clef de voiture) 
                    affin de garantir un sécuriter maximum.
                    la deuxième fonctionaliter est la possibiliter de lancer des programmes en effectant un short cut
                    lui aussi configurable. Ansi, vous pouver presque tout faire depuis votre clevier (comme si vous étier 
                    dans un shell linux mais sous windows). Pour lancer vs code vous n'aurrez qu'a apuier sur #vscode et paf,
                    vscode aparait comme par magie...</br></br>

                    pour plus d'information, je vous invite à aller voir le projet sur mon git-hub disponible plus bas.
                   
                </p>
                
            </div>
        </section>
        <div class="zcontent">


            <div class="orevoir">
                <h1>
                    merci d'avoir visiter ce site internet. 
                
                <div id="h1orevoir">je vous invite a prendre
                    <div class="contactspan h" onclick="contactefunction()">
                        contact 
                        <div class="barre">
                            <!--la barre qui souligne-->
                        </div>
                    </div>
                </div>
                </h1>
            </div>


            <div class="sociallink">
                <div class="social h"><svg onclick="window.location='tel:+330767466001'" version="1.1"  id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 384 384" xml:space="preserve"><g><path class="svg" fill="currentColor" d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z"/></g></svg></div>
                <div class="social h"><svg onclick="window.location='https://www.instagram.com/__lil__dev__/'" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 551.034 551.034"  xml:space="preserve"><g><path class="svg" fill="currentColor" d="M386.878,0H164.156C73.64,0,0,73.64,0,164.156v222.722 c0,90.516,73.64,164.156,164.156,164.156h222.722c90.516,0,164.156-73.64,164.156-164.156V164.156C551.033,73.64,477.393,0,386.878,0z M495.6,386.878c0,60.045-48.677,108.722-108.722,108.722H164.156c-60.045,0-108.722-48.677-108.722-108.722V164.156c0-60.046,48.677-108.722,108.722-108.722h222.722c60.045,0,108.722,48.676,108.722,108.722L495.6,386.878L495.6,386.878z"/><path class="svg" fill="currentColor" d="M275.517,133C196.933,133,133,196.933,133,275.516s63.933,142.517,142.517,142.517S418.034,354.1,418.034,275.516S354.101,133,275.517,133z M275.517,362.6c-48.095,0-87.083-38.988-87.083-87.083s38.989-87.083,87.083-87.083c48.095,0,87.083,38.988,87.083,87.083C362.6,323.611,323.611,362.6,275.517,362.6z"/><circle class="svg" fill="currentColor" cx="418.31" cy="134.07" r="34.15"/></g></svg></div>
                <div class="social h"><svg onclick="window.location='mailto:ludovic.castiglia@outlook.fr'" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 512 512" xml:space="preserve"><g><g><polygon fill="currentColor" class="svg"points="339.392,258.624 512,367.744 512,144.896 		"/></g></g><g><g><polygon fill="currentColor"class="svg" points="0,144.896 0,367.744 172.608,258.624 "/></g></g><g><g><path fill="currentColor"class="svg" d="M480,80H32C16.032,80,3.36,91.904,0.96,107.232L256,275.264l255.04-168.032C508.64,91.904,495.968,80,480,80z"/></g></g><g><g><path fill="currentColor"class="svg" d="M310.08,277.952l-45.28,29.824c-2.688,1.76-5.728,2.624-8.8,2.624c-3.072,0-6.112-0.864-8.8-2.624l-45.28-29.856L1.024,404.992C3.488,420.192,16.096,432,32,432h448c15.904,0,28.512-11.808,30.976-27.008L310.08,277.952z"/></g></g></svg></div>
                <div class="social h"><svg onclick="window.location='https://github.com/zAFG57'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg></div>
            </div>
                



            </div>
        </div>
    </div>


    
<?php $home = ob_get_clean();?>