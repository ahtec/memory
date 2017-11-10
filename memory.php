
<html>
    <head>

        <script>
            var vorigeKlik;
            var aantalKlikken = 0;
            var eenden = ["eend1.jpg",
                "eend2.jpg",
                "eend3.jpg",
                "eend4.jpg",
                "eend5.jpg",
                "eend6.jpg",
                "eend7.jpg",
                "eend8.jpg",
                "eend1.jpg",
                "eend2.jpg",
                "eend3.jpg",
                "eend4.jpg",
                "eend5.jpg",
                "eend6.jpg",
                "eend7.jpg",
                "eend8.jpg"]

            var succesvolGrdraaid = [];
            function flip(teller) {

                //                alert(eenden[teller]);
                console.log(teller);
//                console.log(eenden[teller]);
                aantalKlikken = aantalKlikken + 1;
                //                alert(aantalKlikken);
                if (aantalKlikken % 2 == 0) {
                    //                    alert("even");
                    //                    vorgePlaatje = document.getElementById("duck" + vorigeKlik).src;
                    //                    huidigPlaatje = document.getElementById("duck" + teller).src;

                    if (eenden[teller] == eenden[vorigeKlik]) {
                        //    alert("Gevonden!");
                        document.getElementById("duck" + teller).src = eenden[teller];
                        var storenjanee = succesvolGrdraaid.indexOf(teller);
                        console.log(storenjanee);

                        if (succesvolGrdraaid.indexOf(teller) == -1) {
                            succesvolGrdraaid.push(teller);
                        }
                        if (succesvolGrdraaid.indexOf(vorigeKlik) == -1) {
                            succesvolGrdraaid.push(vorigeKlik);
                        }
                        console.log(succesvolGrdraaid);


                    } else {
                        // fout
//                            document.getElementById("duck" + teller).src = eenden[teller];
                        console.log(teller);
                        console.log(vorigeKlik);
//                            document.getElementById("duck" + vorigeKlik).src = eenden[vorigeKlik];

                        alert("fout ");
                        document.getElementById("duck" + vorigeKlik).src = 'zwart.png';


//                        alert("fout ");
                    }

                } else {
                    vorigeKlik = teller;
                    //                    alert(eenden[teller]);
                    document.getElementById("duck" + teller).src = eenden[teller];
                }


                if (succesvolGrdraaid.length >= eenden.length) {
                    if (aantalKlikken - eenden.length   <  10 ) {
                        alert("Gefeliciteerd, u heeft een goed geheugen,   u heeft er " + aantalKlikken + " klikken over gedaan. dat is geweldig goed,\nNu beginnen we overnieuw maar nu moeilijker")
                        for (i = 0; i < eenden.length; i++) {
                            //                        eenden.forEach( zetOpZwart() ze)
                            document.getElementById("duck" + i).src = 'zwart.png';
                            shuffleArray(eenden);
                        }

                    } else {
                        alert("Gefeliciteerd, u bent klaar maaaaar ehh , u heeft er " + aantalKlikken + " klikken over gedaan, veel te veel. Weet u zeker dat u niets mankeert? We beginnen nogmaals met dezezelfde set.")
                        for (i = 0; i < eenden.length; i++) {
                            document.getElementById("duck" + i).src = 'zwart.png';
                        }
                    }
                    succesvolGrdraaid.length = 0;
                    aantalKlikken = 0;
                }



            }


            function shuffleArray(array) {
                for (var i = array.length - 1; i > 0; i--) {
                    var j = Math.floor(Math.random() * (i + 1));
                    var temp = array[i];
                    array[i] = array[j];
                    array[j] = temp;
                }
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

                        echo "\n<td>    <p>  <img onclick = 'flip($i)' src='zwart.png' width=100 height=100 id=duck$i /> </p> </td>";
//                        echo "\n<td>    <p>  <img onclick = 'verander($x$y)' src='".$eenden[$i]."' width=50 height=50 id=duck$x$y /> </p> </td>";
//                        echo "\n<td>    <p>  <img onclick = 'verander($x$y)' src='".$eenden[$i]."' width=50 height=50 id=duck$x$y /> </p> </td>";
                        $i++;
                    }

                    echo " </tr> <tr>";
                }
                ?>
                </td> </tr>


    </body>
</html>