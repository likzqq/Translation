<?php
    // Properties (Declare variables and the db)
    $user="root";
    $bd = new PDO('mysql:host=localhost;dbname=trad;charset=utf8', $user, $user);
    $date = date('Y-m-d H:i:s');

    // Prepare the db to be written on
    $request = $bd->prepare('INSERT INTO t_files(fil_Name, fil_Date, fil_Content) VALUES (:name, :date, :content)');
    // Write on the db
    $request->execute(array(
        ':name'=>$nameFile,
        ':date'=>$date,
        ':content'=>$translated
    ));
?>








