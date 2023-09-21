window.addEventListener('load', (event) => {
    initcookie();
    formSubmit();
    resizeBloc();
    if(window.matchMedia("(min-width: 768px)").matches){
    initbtncontact();}
    //resizemenu();
    
});
window.addEventListener('resize', (event) => {
    //resizemenu2();
    resizeBloc();
    if(window.matchMedia("(max-width: 767px)").matches){
        removebtncontact();}
    if(window.matchMedia("(min-width: 768px)").matches){
        initbtncontact();}
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
            document.cookie = 'ecolouCookie=ok; path=/; max-age=15768000;';
            //document.cookie = 'ecolouCookie=ok; path=/; max-age=60;';
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


//formulaire
function formSubmit(){
    var btn = document.querySelector("#BtnSubmitCnt");
    if (!btn) {return;}
    btn.addEventListener('click', function(event){
      event.preventDefault();
      var name = event.target.form[0].value;
      var prenom = event.target.form[1].value;
      var email = event.target.form[2].value;
      var phone = event.target.form[3].value;
      var message = event.target.form[4].value;
      var captcha = event.target.form[5].value;
      if (name == "r" ||prenom == "r" || email == "r" ||phone == "r" || message == "r" || captcha == "r"){
        alert("Veuillez compléter tous les champs.");
      }else{
        fetch("class/mail.php?"+"name="+name+"&"+"prenom="+prenom+"&"+"email="+email+"&"+"phone="+phone+"&"+"message="+message+"&"+"captcha="+captcha)
        .then(response => response.text())
        .then(response => {
          alert(response);
          if(response === "Votre message a été envoyé")
          document.location.href="index.html";
        })
        .catch(error => alert("Erreur : " + error));
      }
    })
  }

//fixe taille bloc
function resizeBloc(){
    var conteneur = document.querySelectorAll(".jsbloc");
    if (!conteneur) {return;}
    conteneur.forEach((bloc) => {
        bloc.style.height = "auto";
    });
    var taillemax = getTallestElement(conteneur);    
    if (taillemax != 0) {
        conteneur.forEach((bloc) => {
            bloc.style.height = taillemax+"px";
        });
    }        
};

//renvoi le plus grand
function getTallestElement(e) {
    var tallest = 0;
    e.forEach((logo) => {
      
      if (logo.clientHeight > tallest) {
        tallest = logo.clientHeight;
      }
    });
    return tallest;
  }


//modal
function initbtncontact(){
    if(document.querySelectorAll('.jsatelier')){
        const btn_contacts = document.querySelectorAll('.jsatelier')
        btn_contacts.forEach((btn_contact) => {
            btn_contact.addEventListener('click', btnactmodal)
        })
    }
}
function btnactmodal(event){
    if(testid(event.target) != ""){
        openModal(true,testid(event.target));
    }
    event.preventDefault();
}
function removebtncontact(){
    if(document.querySelectorAll('.jsatelier')){
        const btn_contacts = document.querySelectorAll('.jsatelier')
        btn_contacts.forEach((btn_contact) => {
            btn_contact.removeEventListener('click', btnactmodal);
        })
    }
}

function testid(target){
    var name= "";
    if(("name" in target.dataset)){
        name = target.id;
    }
    if(("name" in target.parentElement.dataset)){
        name = target.parentElement.id;
    }
    if(("name" in target.parentElement.parentElement.dataset)){
        name = target.parentElement.parentElement.id;
    }
    if(("name" in target.parentElement.parentElement.parentElement.dataset)){
        name = target.parentElement.parentElement.parentElement.id;
    }
    return name;
}

function openModal(value,id){
    
    const overlayCl = document.querySelector('#modal_overlay_'+id);
    const modal = document.querySelector('#modal'+id);
    const modalCl = modal.classList
    const body = document.querySelector('body');
    //const menuburger = document.querySelector('#menu-toggle');

    if(value){
    //if(menuburger){
        //menuburger.checked = false;
    //}
    overlayCl.classList.remove('hidden')
    overlayCl.classList.add('flex')
    body.classList.add('sm:overflow-hidden', 'overflow-auto')
    //overlayCl.addEventListener('click', closeModal);
    //activebtnmodal();
    setTimeout(() => {
        modalCl.remove('opacity-0')
        modalCl.remove('-translate-y-full')
        modalCl.remove('scale-150')        
        
    }, 100);
    } else {
        //desactivemodal();
        //overlayCl.removeEventListener('click', closeModal);
        body.classList.remove('sm:overflow-hidden')
        //modalCl.add('-translate-y-full');
        
        setTimeout(() => {
            //.remove('open_modal')
            modalCl.add('opacity-0')
            modalCl.add('scale-0')
            
        }, 100);
        setTimeout(() => {
            overlayCl.classList.add('hidden')
            modalCl.remove('scale-0') 
            modalCl.add('scale-150')
    }, 300);
    }
}
//function closeModal(event){
    //if(event.target.id == 'modal_overlay'){
       // console.log(testid(event.target));
       // openModal(false,testid(event.target));
    //}
    
//}