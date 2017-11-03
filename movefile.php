<?php
// Verif. the form and the file
if(isset($_POST['submit']) && isset($_FILES['file'])){
    // Recup. variables
    $name = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $type = $_FILES['file']['type'];
    // Path
    $doc = 'C:/Users/antunesfi/Desktop/UwAmp/www/php/download/';
    // Properties of the file
    $only = ".xlsx";
    $extension = strrchr($name, '.');
    $var="";

    // Check if the extension is from Excel
    if($extension == $only) {
        // Check if the file exists
        if(!file_exists($doc.$name)) {
            // Put the file in a doc
            move_uploaded_file($tmp_name, $doc . $name);
            $nameFile = $name;
            include 'readfile.php';
        }
        else {
            // This "for" is used to avoid the erasure of files
            for($i = 1; $i < 10000; $i++)
            {
                // Check if the file exists
                if(!file_exists($doc.$i.$name)) {
                    // Put the file in a doc
                    move_uploaded_file($tmp_name, $doc . $i.$name);
                    $var = $i;
                    break;
                }
            }
            $nameFile = $var.$name;
            include 'readfile.php';
        }
    }
    // Display an error
    else echo "Veuillez insérer un fichier Excel";
}
?>




