<?php include('darkheader.php');?>
<?php include('php/func.php'); ?>
<?php include('php/nsfw.php'); ?>
        
        <title>NSFW Prompt Generator</title>
        
        </head>
        
        <body>
            

       <div id="container">     
            
            <div id="content">

                <h1>PossiblY nSFW GenerAtor</h1>
                
                
                <div id="prompts">
                    
                    <?php

print_r(array_random($nsfw));

?>


</div>

<p><input type="button" onclick="location.reload();" value="Generate another?" /></p>

<p>Prompts in this generator may be potentially NSFW, including more common kinks found in fanfic, and narrative-specific prompts with adult implications. All prompts from the SFW generator are here.</p>



</div>

<?php include('footer.php');?>

