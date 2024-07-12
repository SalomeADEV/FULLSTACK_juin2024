
function verificationFormulaire(){

}

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
    
    {
        
    Adresse=document.getElementById(Adresse).value
    resultat=filtre.test(Adresse)
    if(resultat==false){
        alert("Adresse erronee")
    }
    }    
    Téléphone=document.getElementById("Telephone").value
    filtre=new RegExp("^([0-9]{5})+$")
    resultat=filtre.test(CP)
    if(resultat==false){
        alert("veuillez ecrire votre numéro de téléphone");return false
    }
    email=document.getElementById("Email").value
    filtre=new RegExp(/^[_A-Za-z0-9.-]+@[_a-z0-9.-]+.[a-z]{2,4}$/)
    resultat=filtre.test(email)
    if(resultat==false){
        alert("veuillez ecrire votre adresse email");return false
    }
    
    
    Demande=document.getElementById("Demande").value   
    filtre=new RegExp("^[A-Za-z0-9]+$")
    resultat=filtre.test(Demande)
    if(resultat==false){
        alert("veuillez ecrire votre demande");return false
    }
   













                                            
