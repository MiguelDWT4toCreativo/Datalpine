<?php
$file_path = __DIR__ . '/gráficas/grafico_barras_baños.html';
if (file_exists($file_path)) {
    header('Content-type: text/html');
    readfile($file_path);
} else {
    echo "No se pudo encontrar el archivo.";
}
?>
