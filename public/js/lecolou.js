window.addEventListener('load', (event) => {
    initcookie();
    //resizemenu();
    
});
window.addEventListener('resize', (event) => {
    //resizemenu2();
});

/* COOKIES */
function initcookie(){
    var banierre = document.querySelector("#banierecookie");
    if (document.cookie.split(';').some((item) => item.includes('ecolouCookie=ok'))) {
        banierre.classList.add("hidden");
    }
    else{
        banierre.classList.remove("hidden");
        banierre.classList.add("inline-flex");
        document.querySelector("#btnCookieOK").addEventListener('click', function(event){
            //document.cookie = 'ecolouCookie=ok; path=/; max-age=15768000;';
            document.cookie = 'ecolouCookie=ok; path=/; max-age=60;';
            // RGPD La durée de conservation du choix de l’utilisateur est de 6 mois.
            banierre.classList.add("hidden");
            event.preventDefault();
        });
        document.querySelector("#btnCookieRef").addEventListener('click', function(event){
            banierre.classList.add("hidden");
            //desactiver les fonction utilisant les cookies.....
            event.preventDefault();
        });
    }
}
//

function resizemenu(){
    var btnref = document.querySelector("#menuref");
    var tailref = btnref.clientWidth;
    //console.log(tailref);
    if(tailref == 0){
        //tailref = 205;
    }
    newwidth = tailref + 10;
    var btnmenu = document.querySelectorAll(".menuanim");
        btnmenu.forEach((btn) => {
        btn.style.width = newwidth+"px";        
    });
    
};

function resizemenu2(){
    var btnref = document.querySelector("#menuref");
    var tailref = btnref.clientWidth;
    console.log(tailref);
    if(tailref == 10){
        var btnmenu = document.querySelectorAll(".menuanim");
        btnmenu.forEach((btn) => {
        btn.style.width = 225+"px";        
    });
    }
    
    
};