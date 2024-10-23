<?php include('darkheader.php');?>
<?php include('php/func.php'); ?>
<?php include('php/risky.php'); ?>

 <title>Risky Prompt Generator</title>
        
        </head>
        
        <body>
            

       <div id="container">     
            
            <div id="content">

                <h1>Risky proMpt GenerAtor</h1>
                
                
                <div id="prompts">
<?php

print_r(array_random($risky));

?>

</div>

<p><input type="button" onclick="location.reload();" value="Generate another?" /></p>

<p>Prompts in this generator may be potentially triggering and/or "problematic." (Some of these triggering/problematic prompts may also be NSFW.) All prompts from the SFW generator are here.</p>



</div>

<?php include('footer.php');?>

