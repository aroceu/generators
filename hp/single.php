<?php include ('head.php')?>
    
    <head>
        
        <title>Harry Potter Single Prompt Generator</title>
<link rel="shortcut icon" type="image/x-icon" href="/generators/favico.png" />
            <link rel="stylesheet" href="/generators/hp/style.css" type="text/css" media="screen">
        
        </head>
        
        <body>
            

       <div id="container">     
            
            <div id="content">
                
                
                <div id="prompts">
<?php

print_r(array_random($prompts));

?>

</div>

<p><input type="button" onclick="location.reload();" value="Generate another?" /></p>



</div>

<p>Generates single prompts, much like the <a href="/generators/prompts">generic ones</a>. Harry Potter-specific tropes are included, and comprise of approximately half of the possible prompts.</p>
                </p>

    <?php include ('footer.php') ?>