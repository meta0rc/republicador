<?php
$dir = "public_old/"; // nome do diretorio que será apagado
$di = new RecursiveDirectoryIterator($dir, FilesystemIterator::SKIP_DOTS);
$ri = new RecursiveIteratorIterator($di, RecursiveIteratorIterator::CHILD_FIRST);

foreach ( $ri as $file ) {
    $file->isDir() ?  rmdir($file) : unlink($file);
}
rmdir($dir);

?>