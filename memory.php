
<html>
    <head>

        <script>
            var vorigeKlik;
            var aantalKlikken = 0;
            function verander(teller) {
                aantalKlikken = aantalKlikken + 1;
//                alert(aantalKlikken);
                if (aantalKlikken % 2 == 0) {
                    alert("even");
                    vorgePlaatje = document.getElementById("duck" + vorigeKlik).src;
                    huidigPlaatje = document.getElementById("duck" + teller).src;
                    if (vorgePlaatje == huidigPlaatje ){
                        alert("zelfde");
                    } else {
//                        alert(vorgePlaatje);
                    }
                } else {
                    vorigeKlik = teller;
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
                for ($x = 1; $x < 5; $x++) {
                    for ($y = 1; $y < 5; $y++) {
                        echo "\n<td>    <p>  <img onclick = 'verander($x$y)' src='zwart.png' width=210 height=210 id=duck$x$y /> </p> </td>";
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