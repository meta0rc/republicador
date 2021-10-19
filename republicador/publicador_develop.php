<?php
// maximum execution time in seconds
//set_time_limit (24 * 60 * 60);

header('Content-Type: application/json');
if (!isset($_POST['id'])) die();
$id = $_POST['id'];
$_SESSION['id'] = $id; 
$url = "http://painel.buscacliente.com.br/app/webroot/renders/".$id."/site.zip";
$newFname = basename($url);

$control = new Publish();
$control->downloadFile($id, $url, $newFname);



class Publish
{
  function downloadFile($id, $url, $newFname){
    
    $file = fopen ($url, "rb");

    if ($file) {
      $newf = fopen ($newFname, "wb");
    
      if ($newf)
      while(!feof($file)) {
        fwrite($newf, fread($file, 1024 * 8 ), 1024 * 8 );
      }
    }
    
    if ($file) {
      fclose($file);
    }
    
    if ($newf) {
      fclose($newf);
    }
    
  } 
}
