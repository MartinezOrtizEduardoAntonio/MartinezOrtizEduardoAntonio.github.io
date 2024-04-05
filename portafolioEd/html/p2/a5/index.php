<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/" ></a>
    <a href="/" ></a>
    <?php
        //we will reading the old value of the visit
        $fileName="data.txt"
        $file=fopen("data.txt","r");
        $total=fread($file,filesize($file));
        fclose($file);

        //we will to creating a new file and save the new total
        $file2=fopen($fileName,"w");
        $total+=1;
        $save=fwrite($file2,$total);
        fclose($file);

        echo "number is: ";
        echo $total;
    ?>
</body>
</html>
