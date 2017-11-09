<html>
    
    <head>
        <script>
            function gogo(){
                    var tempGerard = document.getElementById("pizza").value;
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
    			if(this.readyState == 4 && this.status == 200) {
                            document.getElementById("demo").innerHTML = this.responseText;
    			}
                    };
                    xhttp.open("GET", "http://localhost/oefening1/test.php?pizza="+tempGerard, true);
		    xhttp.setRequestHeader("Content-type", "application/json");
		    xhttp.send();

            }
            
            
            var rows = 10;
var cols = 10;
var squareSize = 50;

var gameBoardContainer = document.getElementById("gameboard");
        </script>
        
    </head>

    
    <body>



        <div id="demo">jojo</div>
        <input type="text" id="pizza">
        <button  onclick="gogo()">jojo</button>
    </body>
</html>



























1. What is printed on the screen
<?php

$doc = new Document();

compressContent($doc);
echo "<br>";
echo $doc->content;

function compressContent(Document $theDoc){
    echo substr($theDoc->content,0,2);
}

class Document{
    public $content = "zin1";    
}

?>


2. What is printed on the screen

<?php

$doc = new Document();

compressContent($doc);
echo "<br>";
echo $doc->content;

function compressContent(Document $theDoc){
    return substr($theDoc->content,0,2);
}

class Document{
    public $content = "zin1";    
}

?>

3. What is printed on the screen

<?php

$doc = new Document();

echo $doc->compressContent();
echo $doc->content;

function compressContent(Document $theDoc){
    return substr($theDoc->content,0,2);
}

class Document{
    public $content = "zin1"; 
    public function compressContent(){
        substr($this->content,0,2);
    }
}

?>

4. What is printed on the screen

//////////////////////GEGEVEN CODE
<html>
    <head>
        <script>
            function abc(a){
                alert(a);
            }
            function ghi(q){
                for(x=0 ; x<9; x += 2){
                    alert(x);
                }
            }
            function mno(){
                abc(4);
            }
            function stu(){
                alert();
                stu();
            }
        </script>
    </head>
    <body>
        <input type="button" id="abc" value="def" onclick="abc(5)"> <!--  KNOP 1 -->
        <input type="button" id="ghi" value="jkl" onclick="abc(7)"> <!--  KNOP 2 -->
        <input type="button" id="mno" value="pqr" onclick="def(8)"> <!--  KNOP 3 -->
        <input type="button" id="stu" value="uvw" onclick="ghi(9)"> <!--  KNOP 4 -->
    </body>   
</html>
