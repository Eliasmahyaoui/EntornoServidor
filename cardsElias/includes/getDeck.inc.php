<?php
function getDeck() {
    $deck = [];
    $palos = ["cor", "rom", "tre", "pic"];
    $valores = ["1","2","3","4","5","6","7","8","9","10","J","Q","K"];

    for ($i=0; $i<count($palos); $i++) {
        for ($j=0; $j<count($valores); $j++) {
            $deck[] = [
                "suit" => $palos[$i],
                "value" => $valores[$j],
                "image" => $palos[$i] . "_" . $valores[$j] . ".png"
            ];
        }
    }

    // comodines
    $deck[] = ["suit"=>"comodin", "value"=>"0", "image"=>"jok_1.png"];
    $deck[] = ["suit"=>"comodin", "value"=>"0", "image"=>"jok_2.png"];

    return $deck;
}
?>
