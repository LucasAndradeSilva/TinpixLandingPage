<?php
    //FUNÇÃO QUE ENVIA O EMAIL    
     $TO = $_REQUEST["CadEmail"];          
     $NAME = $_REQUEST['CadNome'];
     $PHONE = $_REQUEST['CadTel']; 

     //EMAIL MARKETING
     $MESSAGE = '
     <html>
     <head>
       <title>CONFIRMAÇÃO INSCRIÇÃO</title>    
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
       <!--  CSS -->
       <style>
            html{    
                margin: 20px;
            }
 
            #DadosUser{
                margin-top: 60px;
                width: 300px;
            }
 
            .lbl{
                font-weight: bold;
            }

            .form-group{
                margin-left: 20%;
              }
     </style>
   
       <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     </head>
     <body>
       <nav class="nav justify-content-center">      
         <Img src="../img/logoTinpix.svg" width="150px" ></Img>      
       </nav>
           
       <div>
         <h1 class="text-center font-weight-bold" id="txtTanks">Obrigado pela inscrição!</h1>
         <p class="text-center">Caro candidato em breve enviaremos outro email contendo a data e os horários do Hackathon.</p>
       </div>      
       <div class="mx-auto" id="DadosUser">        
         <div class="form-group">
             <label class="lbl"> NOME: </label>
             <label>'.$NAME .'</label>              
         </div>
         <div class="form-group">
           <label class="lbl">EMAIL: </label>
           <label>'.$TO .'</label>            
         </div>
         <div class="form-group">
           <label class="lbl">TELEFONE:</label>
           <label>'.$PHONE .'</label> 
         </div>          
         <a class="btn btn-primary btn-block" href="../../index.html">VOLTAR AO SITE</a>  
       </div>       
     </body>
   </html>
     ';
     
     $headers = 'MIME-Version: 1.0'. "\r\n";
     $headers .= 'Content-type: text/html; charset = charset=iso-8859-1' . "\r\n";
     $headers .= 'To: TINPIX <rh@tinpix.com.br>' ."\r\n";
     $headers .= 'From: PHP Lucas <lucasandradesilva2019@gmail.com>' ."\r\n";
     $headers .= 'CCo: Candidato <'.$TO.'>' ."\r\n";

     if (mail($TO, "HACKATHON TINPIX","INSCRIÇÃO CONFIRMADA") == true)
     {
         echo "Email Enviado!";
     }
     else
     {     
       //COMO A FUNÇÃO MAIL NO ENVIA NO SERVIDOR LOCALHOST, UMA SIMULAÇÃO FOI CRIADA A BAIXO   
        echo "<h2> Falha ao Enviar o email! Simulando Envio... </h2>";        
        $btnSimulacao = '
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <a class="btn btn-success" href="../../Pages/EmailMarkting.html">Simular Envio</a>';
        echo $btnSimulacao;
        echo "<br/><br/>";
        print $MESSAGE;   
     }    
?>