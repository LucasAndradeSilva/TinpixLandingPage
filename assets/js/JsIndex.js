//FUNÇÃO QUE VALIDA E ENVIA O EMAIL
function SendEmail()
{
    var f_nome = document.getElementById('UserName');
    var f_email = document.getElementById('UserMail');
    var f_tel = document.getElementById('UserTel');
    const alert_Succes = document.getElementById('AlertSuccess');
    const alert_Error = document.getElementById('AlertError');
    
    if (f_nome.value != "" && f_email.value != "" && f_tel.value != "") {                               
       alert_Succes.classList.add("show");//Exibe a messagem de Sucesso
       document.getElementById('formEnviar').submit();
    }
    else{        
        alert("Preencha todos os campos!");                
        alert_Error.classList.add("show");//Exibe a messagem de Erro
    }    
}
