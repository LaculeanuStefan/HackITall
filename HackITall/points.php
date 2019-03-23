<?php
$option = array(0, 0, 0, 0, 0)

function IncrementPoints($id_emotion) {
    if($id_emotion == 1){
        $option[0]++;
    } elseif($id_emotion == 2){
        $option[1]++;
    } elseif($id_emotion == 3){
        $option[2]++;
    } elseif($id_emotion == 4){
        $option[3]++;
    } elseif($id_emotion == 5){
        $option[4]++;
    }
}
?>