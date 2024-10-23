<?php include('darkheader.php');?>
<?php include('php/func.php'); ?>
<?php include('php/kinks.php'); ?>
        
        <title>Kink Generator</title>
        
        </head>
        
       <body>
            

       <div id="container">     
            
            <div id="content">

                <h1>Kink Generator</h1>
                
                
                <div id="prompts">
<?php

print_r(array_random($kinks));

?>

</div>

<p><input type="button" onclick="location.reload();" value="Generate another?" /></p>



</div>

<?php include('footer.php');?>
