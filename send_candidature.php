<?php
// To
$to = 'contact@interasys.net';
 
// Subject
$subject = 'Candidature - Test Mail';
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$motivations = $_POST['motivations']; 
// clé aléatoire de limite
$boundary = md5(uniqid(microtime(), TRUE));
 
// Headers
$headers = 'From: Aurel Bertrand'."\r\n";
$headers .= 'Mime-Version: 1.0'."\r\n";
$headers .= 'Content-Type: multipart/mixed;boundary='.$boundary."\r\n";
$headers .= "\r\n";

function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
}
 
// Message
$msg = 'Les informations contenues dans ce mail sont confidentielles.'."\r\n\r\n";
 
//var_dump($_POST);
// Texte
$msg .= '--'.$boundary."\r\n";
$msg .= 'Content-type:text/plain;charset=utf-8'."\r\n";
$msg .= 'Content-transfer-encoding:8bit'."\r\n";
$msg .= 'Name: '.clean_string($name)."\n";
$msg .= 'Email: '.clean_string($email)."\n";
$msg .= 'Téléphone: '.clean_string($phone)."\n";
$msg .= 'Motivations: '.clean_string($motivations)."\n";
//$msg .= 'Un message avec une pièce jointe.'."\r\n";

 
// Pièce jointe
$file_name = $_FILES['cv'];
if (file_exists($file_name))
{
	$file_type = filetype($file_name);
	$file_size = filesize($file_name);
 
	$handle = fopen($file_name, 'r') or die('File '.$file_name.'can t be open');
	$content = fread($handle, $file_size);
	$content = chunk_split(base64_encode($content));
    $f = fclose($handle);
 
	$msg .= '--'.$boundary."\r\n";
	$msg .= 'Content-type:'.$file_type.';name='.$file_name."\r\n";
	$msg .= 'Content-transfer-encoding:base64'."\r\n";
	$msg .= $content."\r\n";
}
 
// Fin
$msg .= '--'.$boundary."\r\n";
 
// Function mail()
mail($to, $subject, $msg, $headers);

header("Location:https://www.interasys.net/candidature.php");