
function verifMail(unId)
{
  document.getElementById(unId).value = document.getElementById(unId).value.trim();
  var reg = new RegExp("^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$");
  if(reg.test(document.getElementById(unId).value)==false)
  {
    document.getElementById("groupe-"+unId).className="input-group input-group-lg has-error";
    return false;
  }
  else
  {
    document.getElementById("groupe-"+unId).className="input-group input-group-lg has-success";
    return true;
  }
}

function verifTexte(unId)
{
  document.getElementById(unId).value = document.getElementById(unId).value.trim();
  if (document.getElementById(unId).value.length < 1)
  {
    document.getElementById("groupe-"+unId).className="input-group input-group-lg has-error";
    return false;
  } 
  else
  {
    document.getElementById("groupe-"+unId).className="input-group input-group-lg has-success";
    return true;
  }
}

function trim(chaine)
{
  expreg = new RegExp('(^\s*)|(\s*$)', 'g');
  return chaine.replace(expreg,'');
}

function estEntier(unId)
{
  document.getElementById(unId).value = document.getElementById(unId).value.trim();
  var regex = new RegExp("^[0-9]+$");
  if (regex.test(document.getElementById(unId).value) == false || document.getElementById(unId).value.length != 10)
  {
    document.getElementById("groupe-"+unId).className="input-group input-group-lg has-error";
    return false;
  } 
  else
  {
    document.getElementById("groupe-"+unId).className="input-group input-group-lg has-success";
    return true;
  }
}

function verifInfos()
{
  var tabErr=new Array();
  var indErr=-1;
  if(verifTexte('nom')==false)
  {
    indErr=indErr+1;
    tabErr[indErr]="veuillez saisir votre nom";
    document.getElementById("groupe-nom").className="input-group input-group-lg has-error";
  }
  if(verifTexte('prenom')==false)
  {
    indErr=indErr+1;
    tabErr[indErr]="veuillez saisir votre prénom";
  };
  if(estEntier('tel')==false)
  {
    indErr=indErr+1;
    tabErr[indErr]="veuillez indiquer un numéro de téléphone valide";
  }
  if(verifMail('mail')==false)
  {
    indErr=indErr+1;
    tabErr[indErr]="veuillez indiquer un email valide";
  }
  if(verifTexte('ident')==false)
  {
    indErr=indErr+1;
    tabErr[indErr]="veuillez saisir un identifiant";
  };
  if(verifTexte('mdp')==false)
  {
    indErr=indErr+1;
    tabErr[indErr]="veuillez saisir un mot de passe";
  };
  
  if(indErr==-1)
  {
    return true;
  }
  else
  {
    var i=0;
    msg="";
    for(i=indErr;i>=0;i--)
    {

      msg= msg+tabErr[i]+ "\n";

    }
    alert(msg);
    return false;
  }




}