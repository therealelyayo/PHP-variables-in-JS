<html>
    <script src = "script.js"></script>
    <body onload = "getThatVariable()">
        <div>The text on the right was put there using a script : <b id = "text"></b></div> 
    </body>
</html>

<?php
    if(isset($_POST["data"])){
        // this creates a hidden input element on the new Page - after the redirect
        // as soon as the page is loaded we can read the value of this textfield and use it in our script
        echo "<input id = 'hiddeninput' type = 'textarea' style = 'display:none;' value ='".$_POST["data"]."'>";
    }
?>