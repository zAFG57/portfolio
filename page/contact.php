<?php
 ob_start();?>
     <link rel="stylesheet" href="css/contact.css">
    
    <div class="contact navlink" onclick="contactnav()">
        <section class="header contacth">
            <h1>Contactez moi</h1>
            <div class="oeil visage" id="b" onclick="oeilclickb()"></div>
        </section>
        <section class="contactsection">
            <form id="form" action="mail.php" method="post">
                <div class="titre">
                    <h1>
                        dites moi bonjour ...
                    </h1>
                </div>

                <div class="txtfield h">
                    <input type="text" name="utilisateur" required autofocus>
                    <span></span>
                    <label>votre mail</label>
                </div>

                <div class="txtfield h">
                    <input type="text" name="message" required autofocus onkeydown="if(event.key === 'Enter'){event.preventDefault();send();}">
                    <span></span>
                    <label>votre message</label>
                </div>

                <button class="sendbtn h" >
                    <p>envoyez moi votre message</p>
                </button>

            </form>
        </section>
    </div>


    
<?php $contact = ob_get_clean();?>