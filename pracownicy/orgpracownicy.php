<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Marta Kowalik</title>
    <link rel="stylesheet" href="../inne/styles.css" />
  </head>
  <body>
    
  <div class="container0">
      <div class="item banner">
      <?php
        include("../inne/header.php");        
        ?>
      </div>
      <div class="item menu">
        <?php
        include("../inne/menu.php");
    ?>
        
      </div>
      <div class="item tresczad">
          
        <div class="tresc">
          
          <div class="naglowek"> Organizacja i pracownicy </div>
          <?php
require_once("../connect.php");
    echo("<h2>ZADANIE 1: SELECT imie, nazwa_dzial FROM pracownicy, organizacja WHERE dzial = id_org</h2>");
    $result = $conn->query('SELECT imie, nazwa_dzial FROM pracownicy, organizacja WHERE dzial = id_org');
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Zarobki</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
    echo("<h2>ZADANIE 2: SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial = id_org) AND (dzial=1 or dzial=4)</h2>");  
    $result = $conn->query('SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial = id_org) AND (dzial=1 or dzial=4)'); 
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>");  

                echo("</tr>");
            }

        echo("</table>");
    echo("<h2>ZADANIE 3: SELECT imie, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial = id_org) AND (imie like '%a')</h2>");  
    $result = $conn->query('SELECT imie, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial = id_org) and (imie like "%a")'); 
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");

        echo("</table>");
    echo("<h2>ZADANIE 4: SELECT imie, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial = id_org) AND (imie not like '%a')</h2>");  
    $result = $conn->query('SELECT imie, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial = id_org) AND (imie not like "%a")');
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                
                echo("</tr>");
            }

        echo("</table>");

        echo("</table>");
    echo("<h2>ZADANIE 5: SELECT imie, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial = id_org) order by imie desc</h2>");  
    $result = $conn->query('SELECT imie, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial = id_org) order by imie desc'); 
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                  echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");

        echo("</table>");
    echo("<h2>ZADANIE 6: SELECT imie, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial=id_org) AND (dzial=3) order by imie asc</h2>");
    $result = $conn->query('SELECT imie, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial=id_org) AND (dzial=3) order by imie asc'); 
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                 echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                echo("</tr>");
            }

        echo("</table>");

        echo("</table>");
        echo("<h2>ZADANIE 7: SELECT imie, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial=id_org) AND (imie like '%a') order by imie asc</h2>");
        $result = $conn->query('SELECT imie, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial=id_org) AND (imie like "%a") order by imie asc'); 
            echo("<table border=1>");
            echo("<th>Imie</th>");
            echo("<th>Nazwa_Działu</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                        echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                    echo("</tr>");
                }
    
            echo("</table>");

            echo("</table>");
        echo("<h2>ZADANIE 8: SELECT imie, zarobki, nazwa_dzial FROM pracownicy, organizacja where (dzial=id_org) AND (imie like '%a') AND (dzial=1 OR dzial=3) order by zarobki asc</h2>");
        $result = $conn->query('SELECT imie, zarobki, nazwa_dzial FROM pracownicy, organizacja where (dzial=id_org) AND (imie like "%a") AND (dzial=1 OR dzial=3) order by zarobki asc'); 
            echo("<table border=1>");
            echo("<th>Imie</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Nazwa_Działu</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                        echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                    echo("</tr>");
                }
    
            echo("</table>");

            echo("</table>");
        echo("<h2>ZADANIE 9: SELECT imie, zarobki, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial = id_org) AND (imie not like 'a%') order by nazwa_dzial asc, zarobki asc</h2>");
        $result = $conn->query('SELECT imie, zarobki, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial = id_org) AND (imie not like "a%") order by nazwa_dzial asc, zarobki asc'); 
            echo("<table border=1>");
            echo("<th>Imie</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Nazwa_Działu</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                    echo("</tr>");
                }
    
            echo("</table>");
        echo("<h2>ZADANIE 10: SELECT * FROM pracownicy, organizacja WHERE dzial=id_org AND dzial=4 order by zarobki desc limit 2</h2>");
        $result = $conn->query('SELECT * FROM pracownicy, organizacja WHERE dzial=id_org AND dzial=4 order by zarobki desc limit 2'); 
            echo("<table border=1>");
            echo("<th>Id</th>");
            echo("<th>Imie</th>");
            echo("<th>Dział</th>");
            echo("<th>Nazwa_działu</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Data_urodzenia</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>"); 
                    echo("</tr>");
                }
    
            echo("</table>");
        echo("<h2>ZADANIE 11: SELECT * FROM pracownicy, organizacja WHERE dzial=id_org AND (dzial=4 or dzial=2) order by zarobki desc limit 3</h2>");
        $result = $conn->query('SELECT * FROM pracownicy, organizacja WHERE dzial=id_org AND (dzial=4 or dzial=2) order by zarobki desc limit 3'); 
            echo("<table border=1>");
            echo("<th>Id</th>");
            echo("<th>Imie</th>");
            echo("<th>Dział</th>");
            echo("<th>Nazwa_działu</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Data_urodzenia</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>"); 
                    echo("</tr>");
                }
    
            echo("</table>");
        echo("<h2>ZADANIE 12: SELECT * FROM pracownicy, organizacja WHERE dzial=id_org order by data_urodzenia asc limit 1</h2>");
        $result = $conn->query('SELECT * FROM pracownicy, organizacja WHERE dzial=id_org order by data_urodzenia asc limit 1'); 
            echo("<table border=1>");
            echo("<th>Id</th>");
            echo("<th>Imie</th>");
            echo("<th>Dział</th>");
            echo("<th>Nazwa_działu</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Data_urodzenia</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>"); 
                    echo("</tr>");
                }
    
            echo("</table>");
       
      ?>        




        
        </div>





      </div>
      <div class="item zdjecie">






        </div>



    </div>
  </body>
