
<?php
if(isset($_POST['too1']) && $_POST["too1"] !="" && 
isset($_POST['too2']) || $_POST["too2"] !="" && 
isset($_POST["uildel"]) || $_POST["uildel"] !=""){
    $uildel=($_POST['uildel']);
    switch($uildel) {
        case "+":  $hariu = $_POST['too1'] + $_POST['too2'];
        break;
        case "-":  $hariu = $_POST['too1'] - $_POST['too2'];
        break;
        case "/":  $hariu = $_POST['too1'] / $_POST['too2'];
        break;
        case "*":  $hariu = $_POST['too1'] * $_POST['too2'];
        break;
        default:
        $hariu="aldaa garlaa";
    }
    echo $hariu;
}
?>