<html>
<!-- PHP -->
<?php date_default_timezone_set('Europe/Stockholm'); ?>
<?php include ".\php\movefile.php"; ?>


<form method="POST" enctype="multipart/form-data">
    <!-- Text -->
    <label>Choisissez la traduction voulue:</label>

    <!-- Select to choose the traduction wanted -->
    <select name='tradselect'>
        <option name="fren" value="fren"> Français > Anglais</option>
        <option name="enfr" value="enfr"> Anglais > Français</option>
        <option name="frde" value="frde"> Français > Allemand</option>
        <option name="frit" value="frit"> Français > Italien</option>
    </select>

    <br/>

    <!-- Text -->
    <label for="Ipt-Trad1">Votre fichier Excel:</label><br/>
    <!-- Inputs for the file and the submit -->
    <input type="file" name="file" id="file"><br/>
    <input type="submit" name="submit" id="submit"><br/>
</form>

<br/>

</html>



