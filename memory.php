
<html>
    <head>

        <script>
            var vorigeKlik;
            var aantalKlikken = 0;
            var eenden = [  "eend1.jpg",
                "eend2.jpg",
                "eend3.jpg",
                "eend4.jpg",
                "eend5.jpg",
                "eend6.jpg",
                "eend7.jpg",
                "eend8.jpg",
                "eend9.jpg",
                "eend1.jpg",
                "eend2.jpg",
                "eend3.jpg",
                "eend4.jpg",
                "eend5.jpg",
                "eend6.jpg",
                "eend7.jpg",
                "eend8.jpg",
                "eend9.jpg"]
                
                
               
                
            
            function verander(teller) {
                aantalKlikken = aantalKlikken + 1;
//                alert(aantalKlikken);
                if (aantalKlikken % 2 == 0) {
//                    alert("even");
                    vorgePlaatje  = document.getElementById("duck" + vorigeKlik).src;
                    huidigPlaatje = document.getElementById("duck" + teller).src;
                    if (vorgePlaatje == huidigPlaatje) {
                        alert("zelfde plaatje");
                    } else {
                        alert("fout ");
                    }
                } else {
                    vorigeKlik = teller;
                    // dit plaatje moet zichtbaar worden
                    
                }
//                if (teller === 11) {
//                    document.getElementById("duck11").src = "eend1.jpg";
//                } else {
////                    alert(teller);
//                    document.getElementById("duck22").src = "eend2.png";
//                }
//                style.color = "red";
            }
        </script>


        <title>memory</title>
    </head>
    <body>
        <table> <tr>
                <?php
                
//                var_dump($eenden);
                $i = 0;
                for ($x = 1; $x < 5; $x++) {
                    for ($y = 1; $y < 5; $y++) {
                        
                        echo "\n<td>    <p>  <img onclick = 'verander($x$y)' src='zwart.png' width=50 height=50 id=duck$x$y /> </p> </td>";
//                        echo "\n<td>    <p>  <img onclick = 'verander($x$y)' src='".$eenden[$i]."' width=50 height=50 id=duck$x$y /> </p> </td>";
//                        echo "\n<td>    <p>  <img onclick = 'verander($x$y)' src='".$eenden[$i]."' width=50 height=50 id=duck$x$y /> </p> </td>";
                    $i++;
                        
                    }
                    
                    echo " </tr> <tr>";
                }
                ?>
                    <!--<p>  <img onclick = "verander(2)" src="zwart.png" width="210" height="210" id="duck2" /> </p>-->
                </td> </tr>

<!----        <img onclick="verander()" src="eend.png" id=duck width="210" height="210" alt="eend"  loll/>
            <?php
            // put your code here
            ?>
</body>
</html>