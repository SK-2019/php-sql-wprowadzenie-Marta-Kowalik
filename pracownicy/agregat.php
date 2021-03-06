<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="shortcut icon" href="../obrazki/favicon.ico">
    
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
          
          <div class="naglowek"> Funkcje agregujące</div>
          <?php

          
require_once("../connect.php");
echo("<h2>ZADANIE 1: SELECT sum(zarobki) as suma_zarobkow FROM pracownicy</h2>");
$result = $conn->query('SELECT sum(zarobki) as sz FROM pracownicy'); 
    echo("<table border=1>");
    echo("<th>Suma_zarobków</th>");
        while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["sz"]."</td>");
            echo("</tr>");
        }

    echo("</table>");

    echo("</table>");
    echo("<h2>ZADANIE 2: SELECT sum(zarobki) as suma_zarobki FROM pracownicy WHERE imie like '%a'</h2>");
    $result = $conn->query('SELECT sum(zarobki) as sz FROM pracownicy WHERE imie like "%a"'); 
        echo("<table border=1>");
        echo("<th>Suma_zarobków</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["sz"]."</td>");
                echo("</tr>");
            }

        echo("</table>");

        echo("</table>");
    echo("<h2>ZADANIE 3: SELECT sum(zarobki) as suma_zarobki FROM pracownicy WHERE (imie not like 'a%') AND (dzial=2 OR dzial=3)</h2>");
    $result = $conn->query('SELECT sum(zarobki) as sz FROM pracownicy WHERE (imie not like "a%") AND (dzial=2 OR dzial=3)'); 
        echo("<table border=1>");
        echo("<th>Suma_zarobków</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["sz"]."</td>");
                echo("</tr>");
            }

        echo("</table>");

        echo("</table>");
    echo("<h2>ZADANIE 4: SELECT avg(zarobki) as srednia_zarobki FROM pracownicy where imie not like '%a'</h2>");
    $result = $conn->query('SELECT avg(zarobki) as az FROM pracownicy where imie not like "%a"'); 
        echo("<table border=1>");
        echo("<th>Średnia_zarobków</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["az"]."</td>");
                echo("</tr>");
            }

        echo("</table>");

        echo("</table>");
    echo("<h2>ZADANIE 5: SELECT avg(zarobki) as srednia_zarobki FROM pracownicy WHERE dzial=4</h2>");
    $result = $conn->query('SELECT avg(zarobki) as az FROM pracownicy WHERE dzial=4'); 
        echo("<table border=1>");
        echo("<th>Średnia_zarobków</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["az"]."</td>");
                echo("</tr>");
            }

        echo("</table>");

        echo("</table>");
        echo("<h2>ZADANIE 6: SELECT avg(zarobki) as srednia_zarobki FROM pracownicy WHERE (imie not like '%a') AND (dzial=1 OR dzial=2)</h2>");
        $result = $conn->query('SELECT avg(zarobki) as az FROM pracownicy WHERE (imie not like "%a") AND (dzial=1 OR dzial=2)'); 
            echo("<table border=1>");
            echo("<th>Średnia_zarobków</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                        echo("<td>".$row["az"]."</td>");
                    echo("</tr>");
                }
    
            echo("</table>");
            echo("<h2>ZADANIE 7: SELECT count(imie) as ilosc_pracownikow FROM pracownicy</h2>");
            $result = $conn->query('SELECT count(imie) as ip FROM pracownicy'); 
            echo("<table border=1>");
            echo("<th>Ilość_pracowników</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                        echo("<td>".$row["ip"]."</td>");
                    echo("</tr>");
                }

            echo("</table>");
            echo("<h2>ZADANIE 8: SELECT count(imie) as ilosc_pracownikow FROM pracownicy where (imie like '%a') AND (dzial=1 OR dzial=3)</h2>");
            $result = $conn->query('SELECT count(imie) as ip FROM pracownicy where (imie like "%a") AND (dzial=1 OR dzial=3)'); 
            echo("<table border=1>");
            echo("<th>Ilość_pracowników</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                        echo("<td>".$row["ip"]."</td>");
                    echo("</tr>");
                }

            echo("</table>");
            echo("<h2>ZADANIE 9: SELECT nazwa_dzial, sum(zarobki) as suma_zarobki FROM pracownicy, organizacja WHERE dzial=id_org group by dzial</h2>");
            $result = $conn->query('SELECT nazwa_dzial, sum(zarobki) as sz FROM pracownicy, organizacja WHERE dzial=id_org group by dzial'); 
            echo("<table border=1>");
            echo("<th>Nazwa_działu</th>");
            echo("<th>Suma_zarobków</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                    echo("<td>".$row["nazwa_dzial"]."</td><td>".$row["sz"]."</td>"); 
                    echo("</tr>");
                }

            echo("</table>");    
            echo("<h2>ZADANIE 10: SELECT count(imie) as ilosc_pracownikow, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org group by dzial</h2>");
            $result = $conn->query('SELECT count(imie) as ip, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org group by dzial'); 
            echo("<table border=1>");
            echo("<th>Nazwa_działu</th>");
            echo("<th>Ilość_pracowników</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                    echo("<td>".$row["nazwa_dzial"]."</td><td>".$row["ip"]."</td>"); 
                    echo("</tr>");
                }

            echo("</table>");    
            echo("<h2>ZADANIE 11: SELECT avg(zarobki) as srednia_zarobki, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org group by dzial</h2>");
            $result = $conn->query('SELECT avg(zarobki) as az, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org group by dzial'); 
            echo("<table border=1>");
            echo("<th>Nazwa_działu</th>");
            echo("<th>Średnia_zarobków</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                    echo("<td>".$row["nazwa_dzial"]."</td><td>".$row["az"]."</td>"); 
                    echo("</tr>");
                }

            echo("</table>");    
            echo("<h2>ZADANIE 12: SELECT sum(zarobki) as sum, if(imie like '%a', 'Kobiety', 'Mężczyźni') as plec FROM pracownicy group by plec</h2>");
            $result = $conn->query('SELECT sum(zarobki) as sum, if(imie like "%a", "Kobiety", "Mężczyźni") as plec FROM pracownicy group by plec'); 
            echo("<table border=1>");
            echo("<th>Suma_zarobków</th>");
            echo("<th>Płeć</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                    echo("<td>".$row["sum"]."</td><td>".$row["plec"]."</td>"); 
                    echo("</tr>");
                }
  ?> 


        
        </div>
      </div>
      

    </div>
  </body>
</html>
