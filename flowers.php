<?php
header("Access-Control-Allow-Origin: *");

$flowers = array(
    "flower1" => array(
        "name" => "Rose",
        "details" => array(
            "color" => "Red, pink, white, yellow, and more",
            "meaning" => "Love, passion, and beauty",
            "country" => "China",
            "scientific_name" => "Rosa",
        ),
    ),
    "flower2" => array(
        "name" => "Tulip",
        "details" => array(
            "color" => "Various",
            "meaning" => "Perfect love",
            "country" => "Turkey",
            "scientific_name" => "Tulipa",
        ),"image" =>
    ),
    "flower3" => array(
        "name" => "Daisy",
        "details" => array(
            "color" => "White with a yellow center, pink, purple",
            "meaning" => "Innocence, purity, and new beginnings",
            "country" => "Europe, North America, and Africa",
            "scientific_name" => "Bellis perennis",
        ),"image" => 
    ),
    "flower4" => array(
        "name" => "Lily",
        "details" => array(
            "color" => "White, yellow, pink, red, orange, and more",
            "meaning" => "Purity, devotion, and rebirth",
            "country" => "Europe, Asia, and North America",
            "scientific_name" => "Lilium",
        ),"image" =>
    ),
    "flower5" => array(
        "name" => "Orchid",
        "details" => array(
            "color" => "Various",
            "meaning" => "Love, beauty, luxury, and strength",
            "country" => "Tropical regions around the world",
            "scientific_name" => "Orchidaceae",
        ),"image" =>
    ),
);

echo json_encode($flowers);
?>
