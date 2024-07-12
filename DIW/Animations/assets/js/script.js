function verificationFormulaire(){

    Nom=document.getElementById("Nom").value
    filtre=new RegExp("^[A-Za-z]+$")
    resultat =filtre.test(Nom)
    if(resultat==false){
        alert("Nom erronée");return false
    }
    Prenom=document.getElementById("Prenom").value
    resultat =filtre.test(Prenom)
    if(resultat==false){
        alert("Prenom erroné");return false
    }
    sexe1=document.getElementById("Sexe1")
    sexe2=document.getElementById("Sexe2")
    if(sexe1.checked==false && sexe2.checked==false){
        alert("veuillez selectionner un genre");return false
    }
    date=document.getElementById("date").value
    filtre=new RegExp (/^[0-9]+-[0-9]+-[0-9]+$/)
    resultat=filtre.test(date)
    if(resultat==false){
        alert("veuillez ecrire votre Date de naissance ");return false
    }
    CP=document.getElementById("CP").value
    filtre=new RegExp("^([0-9]{5})+$")
    resultat=filtre.test(CP)
    if(resultat==false){
        alert("veuillez ecrire votre Code Postal");return false
    }
    email=document.getElementById("Email").value
    filtre=new RegExp(/^[_A-Za-z0-9.-]+@[_a-z0-9.-]+.[a-z]{2,4}$/)
    resultat=filtre.test(email)
    if(resultat==false){
        alert("veuillez ecrire votre adresse email");return false
    }
    Sujet=document.getElementById("Sujet")
    if(Sujet.value==""){
        alert("veuillez selectionner votre Sujet");return false
    }
    Demande=document.getElementById("Demande").value   

    filtre=new RegExp("^[A-Za-z0-9]+$")
    resultat=filtre.test(Demande)
    if(resultat==false){
        alert("veuillez ecrire votre demande");return false
    }
    validation=document.getElementById("validation")
    if(validation.checked==false){
        alert("veuillez cocher la case");return false
    }
    }   
   
   
