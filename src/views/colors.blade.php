<?php
//    Build color map
    // var colors = new Array("#9b59b6", "#2980b9", "#e74c3c", "#e67e22");
    // http://flatuicolors.com/

$str=<<<EOT
// Oranges

"orange
"pumpkin"

//Reds:
"alizarin"
"pomegranate"

//Greys:
"clouds: rgba(236, 240, 241,1.0);
"silver"
"concrete"
"asbestos"

// Blues;
"asphalt"
"midnight:rgba(44, 62, 80,1.0);
"belize"
"river"

//Purples:
"amethyst"
"wisteria"

//Greens:
"turquoise"
"greensea"
"emerald"
"nephritis"

//Browns:
chocolate:#4E2E28;

// Oranges
@carrot:#e67e22;
@sunflower:#f1c40f;
@orange:orange;
@pumpkin:#d35400;

//Reds:
@alizarin:#e74c3c;
@pomegranate:#c0392b;

//Greys:
@clouds: rgba(236, 240, 241,1.0);
@silver:#bdc3c7;
@concrete:#95a5a6;
@asbestos:#7f8c8d;

// Blues;
@asphalt:#34495e;
@midnight:rgba(44, 62, 80,1.0);
@belize:#2980b9;
@river:#3498db;

//Purples:
@amethyst:#9b59b6;
@wisteria:#8e44ad;

//Greens:
@turquoise:#1abc9c;
@greensea:#16a085;
@emerald:#2ecc71;
@nephritis:#27ae60;

//Browns:
@chocolate:#4E2E28;

EOT;
?>
<pre><code><?=e($str)?></code></pre>