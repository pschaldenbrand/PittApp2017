<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "<h2>wow</h2>";
        //In Javascript you may need to use ip address instead of localhost to connect, here it is: 107.180.41.47
        $conn = mysql_connect("localhost", "Petes", "pittsburgh") or die (mysql_error());
        echo "<h1>wowzers</h1>";
        mysql_select_db("MobileAppChallenge",$conn);
        $query = "CREATE TABLE IF NOT EXISTS VERIFIED(
                  Email VARCHAR (20)     NOT NULL,
                  Verified  INT          NOT NULL,
                  VerificationId INT     NOT NULL,       
                  PRIMARY KEY (Email)
                  );";
        $result = mysql_query($query);
        $query1 = "SELECT * FROM VERIFIED;";
        $res1 = mysql_query($query1);
        if($res1){
            while($row = mysql_fetch_array($res1)){
                $Email = $row["Email"];
                echo $Email;
            }
        }
        /*$query3 = "INSERT INTO `MobileAppChallenge`.`VERIFIED` (`Email`, `Verified`, `VerificationId`) VALUES ('ish', '2', '2');";
        $res2 = mysql_query($query3);
        echo $res2;*/
        ?>
    </body>
</html>
