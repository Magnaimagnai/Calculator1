
<?php //engiin bichiglel
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
<div>

<?php //function turshilt

function hooson_eseh ($variable) {
         if($variable !=""){
                 return true; // 1
        }
        return false;   //o
    }
        if(hooson_eseh($_POST["too1"]) && hooson_eseh($_POST["too2"]) && hooson_eseh($_POST["uildel"])){
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
</div>
<div>
<?php //olon nuhtsuliig hsalgah

    switch($uildel) {
        case "Novsh": 
        case "Baas":  
        case "Teneg":  
        case "Huts": 
             $Yoszui = "Haraal bichihee bolino uu!!!";
        default:
        $Yoszui="Yos zuitei bsnd bayarlalaa";
    }
    echo $Yoszui;

?>
</div>
<?php //function hereglee 2 
function calculate($too1,$too2, $uildel // $uildel = null, $uildel = '-' gj baij bolno
){
    switch($uildel) {
        case "+": return $too1+$too2;
        case "-": return $too1-$too2;
        case "*": return $too1*$too2;
        case "/": return $too1/$too2;
        default;
        echo "Aldaa garlaa";
    }
    return "Medeelel buren bish";
}

$hariu = calculate($_POST['too1'], $_POST['too2'], $_POST['uildel']);
if(hooson_eseh($hariu)){
    echo $hariu;
}
?>    
