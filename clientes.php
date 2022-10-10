<?php
$nombre=$_GET['nombre'];
$clave=$_GET['clave'];
$eligio=$_GET['eligio'];
if($eligio==1){
$html = file_get_contents('http://saf.megamedia.com.mx/json.aspx?key=72CDD1E8-DFEA-40A2-AFCD-E58678F92B38&modo=FILTRO&campo=RazonSocial&valor='.urlencode($clave));
echo $html;
}
if($eligio==0){
$html = file_get_contents('http://saf.megamedia.com.mx/json.aspx?key=72CDD1E8-DFEA-40A2-AFCD-E58678F92B38&modo=FILTRO&campo=Clave&valor='.urlencode($clave));
echo $html;
}
if($eligio==2){
$html = file_get_contents('http://saf.megamedia.com.mx/json.aspx?key=72CDD1E8-DFEA-40A2-AFCD-E58678F92B38&modo=FILTRO&campo=rfc&valor='.urlencode($clave));
echo $html;
}
if($eligio==3){
$html = file_get_contents('http://saf.megamedia.com.mx/json.aspx?key=72CDD1E8-DFEA-40A2-AFCD-E58678F92B38&modo=FILTRO&campo=RazonComercial&valor='.urlencode($clave));
echo $html;
}
?>