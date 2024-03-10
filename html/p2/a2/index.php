<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?PHP
        //we will creating variables
        echo "Array in php";
        $days[0]="Domingo";
        $days[1]="Monday";
        $days[2]="Tuesday";
        $days[3]="Wenday";
        echo "Day: ".$days[0]."<br>";
        echo "Day: ".$days[1]."<br>";
        echo "Day: ".$days[2]."<br>";
        echo "Day: ".$days[3]."<br>";

        $daysArray=array("Domingo","Monday","Tuesday","Wenday");
        echo "Day: ".$daysArray[0]."<br>";
        echo "Day: ".$daysArray[1]."<br>";
        echo "Day: ".$daysArray[2]."<br>";
        echo "Day: ".$daysArray[3]."<br>";
        
        for($i=0;$i<3;$i++){
            echo "Day: ".$daysArray[$i]."<br>";
        }
    ?>
</body>
</html>