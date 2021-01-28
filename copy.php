<?php

   $fichero = 'Url del archivo a copiar';
   $nuevo_fichero = 'archivo.zip';
    
    if (!copy($fichero, $nuevo_fichero)) {
        echo "Error al copiar $fichero...\n";
    }else{
        echo "Copiado con exito";
    }

?>
