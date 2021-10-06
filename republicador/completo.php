<?php 

$controlador = new Publish();
$controlador->extract_file();
$controlador->move_files();

class Publish{
    function extract_file(){
        shell_exec("unzip site.zip ; rm site.zip");
    }
    function move_files(){
        shell_exec("cd site ; mkdir assets_old ; mv .htaccess assets_old");
        shell_exec("mv republicador/republicador mv imagens mv js mv css mv font site/assets_old");
        shell_exec("mv .htaccess site ; mv site ../ ; cd ../ ; mv public_html public_old ; mv site public_html ; mv public_old public_html ; cd public_html ; mv assets public_old");
    } 
}

?>