<?php

try{
    $dbh = new PDO('mysql:host=127.0.0.1;dbname=epitech_tp', 'root', 'root');
}

catch(PDOException $error){
    echo $error->getCode().' '.$error->getMessage();
}

$sql = "SELECT * FROM genre";
$result->prepare($sql);
$sql->execute();

?>
<p>
<select name="genre">
    <option value="default">Default</option>
    <?php
        while($data = $sql->fetch()){
            echo $data['nom'] . '<br>';
        }
    ?>
</select>
</p>
