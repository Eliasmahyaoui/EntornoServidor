
<?php
function generateFrenchDeck() {
    $suits = ['corazones' => 'cor', 'diamantes' => 'dia','picas' => 'pic','treboles' => 'tre' ];

    $values = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'];

    $deck = [];

    // Generar cartas normales
    foreach ($suits as $suitName => $prefix) {
        foreach ($values as $value) {
            $image = strtolower($prefix . '_' . strtolower($value) . '.png');
            $deck[] = [
                'suit' => $suitName,
                'value' => $value,
                'image' => $image
            ];
        }
    }

    // Agregar comodines
    $deck[] = ['suit' => 'comodin', 'value' => '0', 'image' => 'jok_1.png'];
    $deck[] = ['suit' => 'comodin', 'value' => '0', 'image' => 'jok_2.png'];
    return $deck;
}


