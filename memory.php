
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

            var succes = false;
            function wachten() {
                for (i = 0; i < eenden.length; i++) {
                    //                        eenden.forEach( zetOpZwart() ze)

                    document.getElementById("duck" + i).src = eenden[i];

                }

                alert("wachten")
            }

            function loaded() {
//                alert('loaded')
            }

            function flip(teller) {
//
//               if (succes){
//var x = document.getElementById("melding");
//x.innerHTML = "aksjdhfkjahskfj"
//            }
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
                        //   goed , plaatjes zijn gelijk
                        //    alert("Gevonden!");
                        document.getElementById("duck" + teller).src = eenden[teller];
//                        var storenjanee = succesvolGrdraaid.indexOf(teller);
//                        console.log(storenjanee);

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
//                        console.log(teller);
//                        console.log(vorigeKlik);
//                            document.getElementById("duck" + vorigeKlik).src = eenden[vorigeKlik];
                        alert("fout ");
                        document.getElementById("duck" + vorigeKlik).src = 'zwart.png';
                    }

                } else {
                    // hier de ONEVEN
                    vorigeKlik = teller;
                    //                    alert(eenden[teller]);
                    document.getElementById("duck" + teller).src = eenden[teller];
                }
//document.write("HHHHHHHHHHHHHHHHHHH");
                if (succesvolGrdraaid.length >= eenden.length) {
//                    alert("Klaar");
//                    document.getElementById("duck" + teller).src = eenden[teller];
//                    var laatste = document.getElementById("duck" + teller)
//                    setTimeout('wachten()',   3000);

//                    if (laatste.complete) {
//                        loaded()
//                    } else {
//                        laatste.addEventListener('load', loaded)
//                        laatste.addEventListener('error', function () {
//                            alert('error')
//                        })


//                    var tussen = document.getElementById("duck" + teller);

//                    document.write("Gefeliciteerd, u heeft een goed geheugen,   ");

//                    location.reload();
//                   document.reload();



                    console.log(teller);
                    if (aantalKlikken - eenden.length < 20) {


                        var meldingText = "Gefeliciteerd, u heeft een goed geheugen,   u heeft er " + aantalKlikken + " klikken over gedaan. dat is geweldig goed,\nNu beginnen we overnieuw maar nu moeilijker";
                        alert(meldingText);
//                        var x = document.getElementById("melding");
//                        x.innerHTML = meldingText;
                        for (i = 0; i < eenden.length; i++) {
                            //                        eenden.forEach( zetOpZwart() ze)
                            document.getElementById("duck" + i).src = 'zwart.png';
//                            document.getElementById("duck" + i).src = eenden[i];
//                            document.getElementById("newspelButton")   .disabled = FALSE   ;
                        }
                        shuffleArray(eenden);

                    } else {
                        alert("Gefeliciteerd, u bent klaar maaaaar ehh , u heeft er " + aantalKlikken + " klikken over gedaan, VEEL te VEEL. \nWeet u zeker dat u niets mankeert? \nWe beginnen nogmaals met dezelfde set.")
                        for (i = 0; i < eenden.length; i++) {
                            document.getElementById("duck" + i).src = 'zwart.png';
//                            document.getElementById("duck" + i).src = eenden[i];
                        }
                    }
                    succes = true;
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


        <title>Memory</title>
    </head>
    <body>


        <table>
            <?php
//                var_dump($eenden);
            $i = 0;
            for ($x = 1; $x < 5; $x++) {
                echo "<tr>";
                for ($y = 1; $y < 5; $y++) {
                    echo "\n<td>    <p>  <img onclick = 'flip($i)' src='zwart.png' width=120 height=120 id=duck$i /> </p> </td>";
                    //echo "\n<td> $x$y   <p>  <button onclick = 'flip($i)'  id=duck$i /> </p> </td>";
                    $i++;
                }
                echo " </tr> ";
            }
            ?>
            <div id=melding> </div>


<!-----            <button onclick(newSpel() > <input type="submit" value="" name="newspelButton"  />   -->



    </body>
</html>