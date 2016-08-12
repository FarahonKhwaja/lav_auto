<html>
    <head>
    <?php include("includes/header.php"); ?>
    </head>
    <body>
        <?php
        include("includes/connexion.php");
        $sql = "select * from station";
        $data = $db->query($sql);
        $stations = $data->fetchAll();
        ?>
        <table>
            <tr>
                <th>id</th>
                <th>num</th>
                <th>rue</th>
                <th>ville</th>
            </tr>
            <?php foreach($stations as $unestation) { ?>
            <tr>
                <td> <?php echo $unestation["id"]; ?> </td>
                <td> <?php echo $unestation["num"]; ?> </td>
                <td> <?php echo $unestation["rue"]; ?> </td>
                <td> <?php echo $unestation["ville"]; ?> </td>
            </tr>
            <?php } ?>
        </table>
        <?php
        /*
        }*/
        ?>


    </body>

</html>