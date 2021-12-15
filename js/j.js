function load() {
    document.getElementsByClassName("body")[0].scrollTop = 0;
}
a = 1;
function wtf() {
    var home = document.getElementsByClassName("home")[0];
    var contact = document.getElementsByClassName("contact")[0];
    var projet = document.getElementsByClassName("projet")[0];
    if (a === 1) {
        home.style.transform = 'perspective(40vw) translate3d(-50vw, -25vw, -50vw) rotateY(20deg)';
        contact.style.transform = 'perspective(40vw) translate3d(50vw, -25vw, -50vw) rotateY(-20deg)';
        projet.style.transform = 'perspective(40vw) translate3d(0px, 25vw, -50vw) rotateX(50deg) skew(5deg)';
        home.scrollTop = 0;
        contact.scrollTop = 0;
        projet.scrollTop = 0; 
        a = 0;
    } else if (a === 0) {
        home.style.transform = 'perspective(40vw) translate3d(0px, 0px, 0px) rotateY(0deg)';
        contact.style.transform = 'perspective(40vw) translate3d(0px, 0px, 0px) rotateY(0deg)';
        projet.style.transform = 'perspective(40vw) translate3d(0px, 0px, 0px) rotateX(0deg) skew(0deg)';
        home.scrollTop = 0;
        contact.scrollTop = 0;
        projet.scrollTop = 0; 
        a = 1;
        document.getElementsByClassName("burgeur")[0].blur()
    }
                   
}
function homenav() {
    a = 1;
    var home = document.getElementsByClassName("home")[0];
    var contact = document.getElementsByClassName("contact")[0];
    var projet = document.getElementsByClassName("projet")[0];

    home.style.transform = 'perspective(50vw) translate3d(0px, 0px, 0px) rotateY(0deg)';
    home.style.zIndex = 55;
    contact.style.zIndex = 1;
    projet.style.zIndex = 1;
    contact.style.transform = 'perspective(50vw) translate3d(0px, 0px, 0px) rotateY(0deg)';
    projet.style.transform = 'perspective(50vw) translate3d(0px, 0px, 0px) rotateX(0deg) skew(0deg)';
}
function contactnav() {
    a = 1;
    var home = document.getElementsByClassName("home")[0];
    var contact = document.getElementsByClassName("contact")[0];
    var projet = document.getElementsByClassName("projet")[0];
    
    home.style.transform = 'perspective(50vw) translate3d(0px, 0px, 0px) rotateY(0deg)';
    home.style.zIndex = 1;
    contact.style.zIndex = 55;
    projet.style.zIndex = 1;
    contact.style.transform = 'perspective(50vw) translate3d(0px, 0px, 0px) rotateY(0deg)';
    projet.style.transform = 'perspective(50vw) translate3d(0px, 0px, 0px) rotateX(0deg) skew(0deg)';
}
function projetnav() {
    a = 1;
    var home = document.getElementsByClassName("home")[0];
    var contact = document.getElementsByClassName("contact")[0];
    var projet = document.getElementsByClassName("projet")[0];
    
    home.style.transform = 'perspective(50vw) translate3d(0px, 0px, 0px) rotateY(0deg)';
    home.style.zIndex = 1;
    contact.style.zIndex = 1;
    projet.style.zIndex = 55;
    contact.style.transform = 'perspective(50vw) translate3d(0px, 0px, 0px) rotateY(0deg)';
    projet.style.transform = 'perspective(50vw) translate3d(0px, 0px, 0px) rotateX(0deg) skew(0deg)';
}


    document.getElementsByClassName("body")[0].addEventListener('click', function(e){
        
        x = e.pageX;
        y = e.pageY;

        let boule = document.createElement('span');
        boule.style.left = x + 'px';
        boule.style.top = y + 'px';
        boule.style.position = 'fixed';
        if (t) {
            boule.style.background = '#fff';
        }else {
            boule.style.background = '#ffffff55 ';
        }
        boule.style.opacity = '0.5';
        boule.style.borderRadius = '50%';
        boule.style.pointerEvents = 'none';
        boule.style.zIndex = '555555';
        boule.style.transform = 'translate(-50%, -50%)';
        boule.style.animation = 'spana 1s linear';
        this.appendChild(boule);
        setTimeout(() => {
            boule.remove()
        }, 1000)
    })


    document.querySelector('body').addEventListener('mousemove', paralax);
    coucou = document.getElementsByClassName("visage")[0];
function paralax (){
    var eye = document.querySelectorAll('.visage');
            xm = ((event.pageX / 4) + (window.innerWidth / 4)) ;
            ym = ((event.pageY / 4) + (window.innerHeight / 4));
            document.getElementById('a').style.right = 'calc('+ xm + 'px + 5vh)';
            document.getElementById('b').style.right = 'calc('+ xm + 'px + 5vh)';
            document.getElementById('c').style.right = 'calc('+ xm + 'px + 5vh)';
            document.getElementById('a').style.bottom ='calc('+ ym + 'px - 10vh)';
            document.getElementById('b').style.bottom = 'calc('+ ym + 'px - 10vh)';
            document.getElementById('c').style.bottom = 'calc('+ ym + 'px - 10vh)';


        //mouse and mouse with lerp
        document.getElementById('mouse').style.left = event.pageX + 'px';
        document.getElementById('mouselerp').style.left = event.pageX + 'px';
        document.getElementById('mouse').style.top = event.pageY + 'px';
        document.getElementById('mouselerp').style.top = event.pageY + 'px';
        document.getElementById('mouselerp').style.pointerEvents = 'none';
        document.getElementById('mouse').style.pointerEvents = 'none';

        document.querySelectorAll('.h').forEach( eye => {
            eye.addEventListener('mouseover', hover); 
            eye.addEventListener('mouseout', nohover);
        });
        document.querySelectorAll('.oeil').forEach( eye => {
            eye.addEventListener('mouseover', hoeil); 
            eye.addEventListener('mouseout', nohoeil);
        });
        document.querySelectorAll('.voirlesite').forEach( eye => {
            eye.addEventListener('mouseover', voirlesite); 
            eye.addEventListener('mouseout', neplusvoirlesite);
        });

}
    

function nohoeil () {
    document.getElementById('mouse').style.height = 10 + 'px';
    document.getElementById('mouse').style.width = 10 + 'px';
    document.getElementById('mouselerp').style.height = 30 + 'px';
    document.getElementById('mouselerp').style.width = 30 + 'px';
}
function hoeil () {

    document.getElementById('mouse').style.height = 30 + 'px';
    document.getElementById('mouse').style.width = 30 + 'px';
    document.getElementById('mouselerp').style.height = 120 + 'px';
    document.getElementById('mouselerp').style.width = 120 + 'px';
}


function nohover () {
    document.getElementById('mouselerp').style.height = 30 + 'px';
    document.getElementById('mouselerp').style.width = 30 + 'px';
    document.getElementById('mouselerp').style.padding = 0 + 'px';
    document.getElementById('mouselerp').style.border = 3 + 'px solid currentColor';
}
function hover () {
    document.getElementById('mouselerp').style.height = 10 + 'px';
    document.getElementById('mouselerp').style.width = 10 + 'px';
    document.getElementById('mouselerp').style.padding = 50 + 'px';
    document.getElementById('mouselerp').style.border = 1 + 'px solid currentColor';
}
        
ca = 0;
cb = 0;
function oeilclicka () {
    if(ca === 2) {
        oeil = document.getElementById('a');
        oeil.classList.add("oeilmort");
        if (ca === 2 && cb === 2) {
            bouche = document.getElementsByClassName('bouche')[0];
            bouche.style.height= 0 + 'px';
            bouche.style.borderRadius = 0 + 'px';
        }
    } else if (ca !== 2) {
        ca = ca + 1;
    }
}
function oeilclickb () {
    if(cb === 2) {
        oeil = document.getElementById('b');
        oeil.classList.add("oeilmort");
        if (ca === 2 && cb === 2) {
            bouche = document.getElementsByClassName('bouche')[0];
            bouche.style.height= 0 + 'px';
            bouche.style.borderRadius = 0 + 'px';
        }
    } else if (cb !== 2) {
        cb = cb + 1;
    }
}



function thème() {
    if (t) {
        t=false;
        window.location = './?t=n';
    } else {
        window.location = './?t=j';
    }
}
function voirlesite() {
    document.getElementById('mouse').innerHTML = '<h1>voir le site<h1>';
    document.getElementById('mouse').style.height = 'unset';
    document.getElementById('mouse').style.width = 'unset';
    document.getElementById('mouse').style.background = 'transparent';
    document.getElementById('mouselerp').style.height = 200 + 'px';
    document.getElementById('mouselerp').style.width = 200 + 'px';
    document.getElementById('mouselerp').style.border = 1 + 'px solid currentColor';
}
function neplusvoirlesite(){
    document.getElementById('mouse').innerHTML = '';
    document.getElementById('mouse').style.height = 10 +'px';
    document.getElementById('mouse').style.width = 10 +'px';
    document.getElementById('mouse').style.background = 'currentColor';
    document.getElementById('mouselerp').style.height = 30 + 'px';
    document.getElementById('mouselerp').style.width = 30 + 'px';
    document.getElementById('mouselerp').style.border = 3 + 'px solid currentColor';
}
function contactefunction(){
    setTimeout(() => {
        document.getElementsByClassName("contact")[0].click()
    }, 10);
    contact = document.getElementsByClassName("contact")[0].scrollTop = contact = document.getElementsByClassName("contact")[0].scrollHeight;
}
