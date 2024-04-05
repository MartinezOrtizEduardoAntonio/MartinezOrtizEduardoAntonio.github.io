<?php
    //we will reading the old value of the visit
    $fileName="data.txt"
    $file=fopen($fileName,"r") or die("Error");
    $total=fread($file,filesize($file));
    fclose($file);

    //we will to creating a new file and save the new total
    $file=fopen($fileName,"w") or die("Error");
    $total+=1;
    $save=fwrite($file,$total);
    fclose($file);

    echo "number is: "
    echo $total;
?>