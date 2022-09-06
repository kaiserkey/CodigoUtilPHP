<?php
echo "Hola Mundo!";
goto mi_etiqueta;
echo "Esto no se mostrará, ya que goto lo saltará";
mi_etiqueta:
echo chr(10) . "Esto sí será mostrado" . chr(10);
goto ya_basta_de_ejecutarse;
otra_etiqueta:
echo "Ahora ya no voy a imprimirme!" . chr(10);
ya_basta_de_ejecutarse:
exit();
?>