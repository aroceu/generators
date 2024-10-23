<?php include ('head.php')?>
    
    <head>
        
        <title>Harry Potter Multi Prompt Generator</title>
<link rel="shortcut icon" type="image/x-icon" href="/generators/favico.png" />
            <link rel="stylesheet" href="/generators/hp/style.css" type="text/css" media="screen">
        
        </head>
        
        <body>
            
        <div id="multi">

       <div id="container">     
            
            <div id="content">
                
                
                <div id="prompts">
                <?php

$rand_keys = array_rand($multi, $i=rand(2,4));
echo $multi[$rand_keys[0]] . " & <br />";

if($i == 2){
    echo $multi[$rand_keys[1]];
}
else{
    for($c = 1; $c < $i - 1; ++$c){
        echo $multi[$rand_keys[$c]] . " & <br />";
    }
    echo $multi[$rand_keys[$i - 1]];
}
?></div>

<p><input type="button" onclick="location.reload();" value="Generate another?" /></p>



</div>

<p>Generates multiple prompts to be combined, much like the <a href="/generators/multi">generic one</a>. Harry Potter-specific tropes are included, and comprise of approximately half of the possible prompts. Some tropes may possibly contradict each other, so don't hesitate to generate another set - though kudos if you manage to put in contradicting prompts into one fanwork.</p>
                </p>

                </p>

    <?php include ('footer.php') ?>



