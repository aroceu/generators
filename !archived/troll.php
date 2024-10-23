<html>
    
    <head>

<meta name="viewport" content="initial-scale=1.0">


<link rel="shortcut icon" type="image/x-icon" href="/generators/favico.png" />
            <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:200,600|Major+Mono+Display" rel="stylesheet">
            <?php

/** only used for one of DIFFERENT TYPES or just ONE **/
function array_random($arr, $num = 1) {
    shuffle($arr);
    
    $r = array();
    for ($i = 0; $i < $num; $i++) {
        $r[] = $arr[$i];
    }
    return $num == 1 ? $r[0] : $r;
}




?>
            
<?php
$adjective = array("dreadful",
"terrible",
"appalling",
"disgusting",
"pathetic",
"miserable",
"vomit-inducing",
"horrible",
"awful",
"abysmal",
"horrendous",
"abhorrent",
"eye-searing",
"medieval",
"blatant");

$fullof = array("self-important",
"baseless",
"abominable",
"disgusting",
"useless",
"appalling",
"plotless",
"distasteful",
"mischaracterized",
"abohorrent",
"rancid",
"sickening",
"trashy",
"blatant",
"overcooked",
"blasted",
"fickle",
"dusty",
"limpid",
"gross",
"perfinicky",
"defunct",
"irregular",
"uneven",
"musty",
"rusty",
"dried up",
"chalky",
"salty",
"bitter",
"crumbly",
"grubby",
"undusted",
"greasy",
"ungreased",
"foul",
"grimy",
"unwashed",
"mud-covered",
"misinformed");

$noun = array("bullshit",
"flapdoodle",
"bollocks",
"crock",
"gibberish",
"stupidity",
"phooey",
"baloney",
"nonsense",
"tommyrot",
"piffle",
"poppycock",
"malarkey",
"hot air",
"rubbish",
"tripe",
"eyewash",
"balderdash",
"claptrap",
"trash",
"drivel",
"garbage",
"slangcrap",
"corkscrewing",
"looney toons",
"misinformation");

$insult = array("go fuck yourself",
"fuck off and never come back",
"leave society",
"pick up a dictionary",
"go back to school",
"apologize for being a waste of space",
"suck a dick",
"just give up",
"slip in a ditch",
"delete your account",
"stop creating forever",
"be jailed for this",
"toss it into the trash",
"roll some swiss cheese down a mountain",
"slip on ice into a puddle of mud");

$writing = array("writing", "characterization",
"pacing",
"grammar",
"spelling",
"structure",
"formatting",
"flow",
"prose",
"consistency",
"plot",
"story",
"execution",
"ability to write",
"figurative language",
"theme");

$anotheradj = array("wet",
"damp",
"rotten",
"blasted",
"limpid",
"perfinicky",
"defunct",
"irregular",
"rusty",
"dried up",
"chalky",
"crumbly",
"grubby",
"fickle",
"overmoist",
"musty",
"salty",
"slimy",
"greasy",
"crusty",
"dusty",
"undusted",
"mud-covered",
"uneven",
"gross",
"grimy",
"ungreased",
"foul",
"unwashed",
"bitter",
"overcooked",
"salty");

$anothernoun = array("towel",
"muffin",
"cupcake",
"walnut",
"pine tree",
"pine cone",
"chicken pie",
"hot dog",
"torchlight",
"cowpat",
"deer hoof",
"crabcake",
"beef patty",
"swiss roll",
"bog roll",
"gear cog",
"fish cake",
"cheese cake");

?>

        
        <title>Troll Comment Generator</title>
        
        <style type="text/css">
            body{
                font: normal 100% 'Georgia';
                background: #fff;
                margin: 5em;
                padding: 0;
                color: #333;
            }
            
            
        </style>
        
        </head>
        
        <body>
            
<p>This is <?php print_r(array_random($adjective)); ?>. It's full of <?php print_r(array_random($fullof)); ?> <?php print_r(array_random($noun)); ?>.

Your <?php print_r(array_random($writing)); ?> is to the equivalent of a <?php print_r(array_random($anotheradj)); ?> <?php print_r(array_random($anothernoun)); ?>.

You should <?php print_r(array_random($insult)); ?>.</p>

<p><input type="button" onclick="location.reload();" value="Generate another?" /></p>


    

    </body>

