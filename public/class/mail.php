<?php
  session_start();
  if((htmlspecialchars($_GET["captcha"]))!=""&&$_SESSION["code"]==htmlspecialchars($_GET["captcha"]))
  {
    if(isset(($_GET["name"]))){$name = htmlspecialchars($_GET["name"]);}else{$name = "";}
    if(isset(($_GET["prenom"]))){$prenom = htmlspecialchars($_GET["prenom"]);}else{$prenom = "";}
    if(isset(($_GET["email"]))){$mail = htmlspecialchars($_GET["email"]);}else{$mail = "";}
    if(isset(($_GET["phone"]))){$phone = htmlspecialchars($_GET["phone"]);}else{$phone = "";}
    if(isset(($_GET["message"]))){$message = htmlspecialchars($_GET["message"]);}else{$message = "";}
    if($name==""){
      $status = "Le champ nom est vide.";
    }else{
      if($prenom==""){
        $status = "Le champ prenom est vide.";
      }else{
        if($phone==""){
          $status = "Le champ telephone est vide.";
        }else{
          if(!preg_match("#^[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?@[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?\.[a-z]{2,}$#i",$mail)){
            $status = "L'adresse mail entrée est incorrecte.".$mail;
          }else{
            if($message==""){
                $status = "Le champ message est vide";
            }else{              
              $mail_destination='contact@lecolou.fr';
              $Entetes = "MIME-Version: 1.0\r\n";
              $Entetes .= "Content-type: text/html; charset=UTF-8\r\n";
              $Entetes .= "From: L'ecolou.fr <".$mail.">\r\n";
              //de préférence une adresse avec le même domaine de là où, vous utilisez ce code, cela permet un envoie quasi certain jusqu'au destinataire
              $Entetes .= "Reply-To: lecolou.fr <".$mail.">\r\n";
              $sujet='=?UTF-8?B?'.base64_encode("Contact via le formulaire du site Web").'?=';
              //Cet encodage (base64_encode) est fait pour permettre aux informations binaires d'être manipulées par les systèmes qui ne gèrent pas correctement les 8 bits (=?UTF-8?B? est une norme afin de transmettre correctement les caractères de la chaine)
              
              $msg_formulaire = "Nom: ".stripslashes($name)."\n". "Adresse: " . stripslashes($mail)."\n". "Message:" . stripslashes($message);
              $Message=htmlentities($msg_formulaire,ENT_QUOTES,"UTF-8");
              //htmlentities() converti tous les accents en entités HTML, ENT_QUOTES Convertit en + les guillemets doubles et les guillemets simples, en entités HTML
              //la fonction nl2br permet de conserver les sauts de ligne et la fonction base64_encode de conserver les accents dans le titre
              if(mail($mail_destination,$sujet,nl2br($msg_formulaire), $Entetes/* ,$header */)){
                      $status = "Votre message a été envoyé";
              }else{
                  $status = "Une erreur est survenue, le mail n'a pas été envoyé";
              }
            }
          } 
        }
      }      
    }
  }else{
    $status = "Captcha invalide";
  }
  
  echo $status;
?>