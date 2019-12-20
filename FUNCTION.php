<!DOCTYPE html>
<html>
    <head>
        <meta>
        <div style="text-align: center;color:#FFA500"> 
 
    </head>
    <body>

        <h1>Function</h1>
        <?php
        
          function input($Sumbit, $Send) {

            echo "<input type='" . $Sumbit . "' name='" . Send . "'>";
            return;
        }
           
        echo input1('submit', 'send');
    
        
        function input1($type, $name) {

            echo "<input type='" . $type . "' name='" . $name . "'>";
            return;
        }
           
        echo input1('checkbox', 'agree');
        echo 'chechox';
        ?>
      

    </body>
</html>



