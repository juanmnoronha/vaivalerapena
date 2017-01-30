<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Nome obrigatório";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "E-mail obrigatório ";
} else {
    $email = $_POST["email"];
}

if (empty($_POST["email_confirmation"])) {
    $errorMSG .= "Confirmação de E-mail obrigatório ";
} else {
    $email_confirmation = $_POST["email_confirmation"];
}

// PHONE
if (empty($_POST["phone"])) {
    $errorMSG .= "Telefone obrigatório ";
} else {
    $phone = $_POST["phone"];
}

// CITY
if (empty($_POST["city"])) {
    $errorMSG .= "Cidade obrigatória";
} else {
    $city = $_POST["city"];
}

// STATE
if (empty($_POST["state"])) {
    $errorMSG .= "Estado obrigatório";
} else {
    $state = $_POST["state"];
}

$EmailTo = "parceiros@livreser.org.br";
$Subject = "[Vai Valer a Pena] Junte-se a nós";

// prepare email body text
$Body = "";
$Body .= "Nome: ";
$Body .= $name;
$Body .= "\n";
$Body .= "E-mail: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Confirmar E-mail: ";
$Body .= $email_confirmation;
$Body .= "\n";
$Body .= "Telefone: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "Cidade: ";
$Body .= $city;
$Body .= "\n";
$Body .= "Estado: ";
$Body .= $state;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "Mensagem Enviada com Sucesso";
}else{
    if($errorMSG == ""){
        echo "ERRO!!!! :(";
    } else {
        echo $errorMSG;
    }
}

?>
