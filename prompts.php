<?php include('lightheader.php');?>
<?php include('php/sfw.php'); ?>
<?php include('php/func.php'); ?>
        
        <title>Prompt Generator</title>
        
        </head>
        
        <body>
            

       <div id="container">     
            
            <div id="content">

                <h1>proMpt GenerAtor</h1>
                
                <div id="prompts">
<?php

print_r(array_random($sfw));

?>

</div>

<p><input type="button" onclick="location.reload();" value="Generate another?" /></p>



</div>

<?php include('footer.php');?>

