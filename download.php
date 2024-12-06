<?php
$cvPath = 'Salsabil Boujenfa (8).pdf';
if (file_exists($cvPath)) {
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="Salsabil_Boujenfa_CV.pdf"');
    readfile($cvPath);
    exit;
} else {
    echo "Le fichier CV n'existe pas.";
}
?>
