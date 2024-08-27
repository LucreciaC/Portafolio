<?php
// Ruta al archivo CV
$file = '../Files/CV-LC.pdf';

// Verifica si el archivo existe
if (file_exists($file)) {
    // Envía los encabezados al navegador para forzar la descarga
    header('Content-Description: File Transfer');
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    flush(); // Limpia el búfer del sistema
    readfile($file); // Lee el archivo y lo envía al navegador
    exit;
} else {
    // Si el archivo no existe, muestra un error
    echo "El archivo no se encontró.";
}
?>
