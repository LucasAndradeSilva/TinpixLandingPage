<?php
    //FUNÇÃO QUE ENVIA O EMAIL    
     $TO = $_REQUEST["CadEmail"];          
     $NAME = $_REQUEST['CadNome'];
     $PHONE = $_REQUEST['CadTel']; 
     $MESSAGE = '
     <html> 
     <head>
      <title>Birthday Reminders for August</title>
     </head>
     <body>
     <p>Here are the birthdays upcoming in August!</p>
     <table>
      <tr>
       <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
      </tr>
      <tr>
       <td>Joe</td><td>3rd</td><td>August</td><td>1970</td>
      </tr>
      <tr>
       <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
      </tr>
     </table>
     </body>
     </html>
     ';
     
     $headers = 'MIME-Version: 1.0'. "\r\n";
     $headers .= 'Content-type: text/html; charset = charset=iso-8859-1' . "\r\n";
     $headers .= 'To: Lucas <lucas9.la2@gmail.com>' ."\r\n";
     $headers .= 'From: PHP Lucas <lalanasa9@gmail.com>' ."\r\n";

     if (mail($TO, "HACKATHON TINPIX","INSCRIÇÃO CONFIRMADA") == true)
     {
         echo "Email Enviado!";
     }
     else
     {
        echo "Falha ao Enviar o email!";
     }    

?>