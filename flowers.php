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
        ),"image" => "https://images.pexels.com/photos/2300713/pexels-photo-2300713.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
    ),
    "flower2" => array(
        "name" => "Tulip",
        "details" => array(
            "color" => "Various",
            "meaning" => "Perfect love",
            "country" => "Turkey",
            "scientific_name" => "Tulipa",
        ),"image" => "https://images.pexels.com/photos/7175579/pexels-photo-7175579.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
    ),
    "flower3" => array(
        "name" => "Daisy",
        "details" => array(
            "color" => "White with a yellow center, pink, purple",
            "meaning" => "Innocence, purity, and new beginnings",
            "country" => "Europe, North America, and Africa",
            "scientific_name" => "Bellis perennis",
        ),"image" => "https://images.pexels.com/photos/8981015/pexels-photo-8981015.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
    ),
    "flower4" => array(
        "name" => "Lily",
        "details" => array(
            "color" => "White, yellow, pink, red, orange, and more",
            "meaning" => "Purity, devotion, and rebirth",
            "country" => "Europe, Asia, and North America",
            "scientific_name" => "Lilium",
        ),"image" => "https://images.pexels.com/photos/132466/pexels-photo-132466.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
    ),
    "flower5" => array(
        "name" => "Orchid",
        "details" => array(
            "color" => "Various",
            "meaning" => "Love, beauty, luxury, and strength",
            "country" => "Tropical regions around the world",
            "scientific_name" => "Orchidaceae",
        ),"image" => "https://images.pexels.com/photos/3699859/pexels-photo-3699859.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
    ),
);

echo json_encode($flowers);
?>
