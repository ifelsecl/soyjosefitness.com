<?php
$name = $_POST['name'];
$body = $_POST['message'];
$phone = $_POST['phone'];
$country = $_POST['country'];

$msg= "
<html>
<head>
<title>HTML email</title>
<style>
.cpo {
    background: none repeat scroll 0 0 #1b1b1b;
    padding-bottom: 25px;
    padding-top: 40px;
    position: relative;
    z-index: 2;
color: white;
font-size:14pt
}
.msg h2{
 color: #ec3642;
}
.msg{
margin-left:20px
}
</style>
</head>
<body>
<div class='cpo'>
<div style='position:relative; float:right;right:40;width:50%'><img width='80%' src='http://www.soyjosefitness.com/images/jfit.jpg'/></div>
<div style='margin-left:10%'><img src='http://www.soyjosefitness.com/images/joselogo.png'/></div>
<div class='msg'>
<h2>Mensaje</h2>
<span> ".$body." </span>
<br>
<h2> Datos de contacto:</h2>
<table>
<tr>
<th>Nombre</th>
<th>Email</th>
<th>País</th>
<th>Teléfono</th>
</tr>
<tr>
<td>".$name."</td>
<td>".$email."</td>
<td>".$country."</td>
<td>".$phone."</td>
</tr>
</table>
</div>
</div>
</body>
</html>
";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// send email
echo mail("contacto@soyjosefitness.com","Contacto desde soyJoseFitness.com",$msg,$headers);
?>