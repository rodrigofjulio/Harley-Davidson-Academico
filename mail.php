<?php
    $dest = "termo.killl@gmail.com";

    $assunto = $_POST['assunto'];
    $corpo = "
        Assunto:" .$_POST['assunto']."
        Nome:" .$_POST['nome']."
        Telefone:" .$_POST['telefone']."
        Email:" .$_POST['email']."
        Mensagem:".$_POST['mensagem']."    
    ";
    mail($dest,$assunto,$corpo)


?>