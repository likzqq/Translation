<?php
    // Include FPDF library
    include 'fpdf/fpdf.php';
    // Include translation file
    include 'translation.php';

    $translated = urldecode($translated);
    // Clean output buffer
    ob_clean();
    // Create the pdf
    $pdf = new fpdf();
    $pdf->AddPage();
    $pdf->SetFont('Arial');
    $pdf->SetTextColor(0,0,0); // Color: Black
    $pdf->Write(0, $translated); // Write the traduction in the pdf file

    // Output the pdf in download for the user and stock it on the machine
    $pdf->Output('D', 'trad.pdf');
    $pdf->Output('F', 'C:/Users/antunesfi/Desktop/UwAmp/www/php/files/trad.pdf');

    // Include insertion file
    include'insertdb.php';





    // unlink('C:/Users/antunesfi/Desktop/UwAmp/www/php/files/trad.pdf');

?>