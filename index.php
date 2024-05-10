<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $fajl=readfile("kedvenc2.json");
        echo("$fajl<br>");
        $eroforras=fopen("kedvenc2.json","r") or die("Unable to open the file");
        $fajl=fread($eroforras, filesize("kedvenc2.json"));
        fclose($eroforras);
        echo $fajl;

        $tomb=json_decode($fajl);
        echo '<pre>' . var_export($tomb, true) . '<pre>'
        ?>
        <div>
            <table class="table-bordered">
                <tr>
                    <?php
                        
                            foreach($tomb[0] as $kulcs =>$ertek){
                                echo("<th>");
                                echo $kulcs;
                                echo("</th>");
                            }
                            echo "</tr>";
                            echo"<tr>";
                            
                            for ($i=0; $i < count($tomb); $i++) { 
                                foreach($tomb[$i] as $kulcs =>$ertek){
                                    if ($kulcs=='kép') {
                                        echo("<td>");
                                        echo "<img src='kepek/$ertek'>";
                                        echo("</td>");
                                    }else{
                                        echo("<td>");
                                        echo $ertek;
                                        echo("</td>");
                                    }
                                }
                                echo "</tr>";
                            }
                            
                        
                    ?>


                
            </table>




        </div>
</body>
</html>