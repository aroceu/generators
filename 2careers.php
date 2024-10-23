<?php include('lightheader.php');?>
<?php include('php/func.php'); ?>
<?php include('php/careers.php');?>
        
        <title>Career x Career Generator</title>
        
        </head>
        
        <body>
            

       <div id="container">     
            
            <div id="content">

                <h1>cAreerXcareer GenerAtor</h1>
                
                
                <div id="prompts">
<?php
print_r(array_random($careers));
echo " X ";
print_r(array_random($careers));

?>

</div>

<p><input type="button" onclick="location.reload();" value="Generate another?" /></p>



</div>

<?php include('footer.php');?>

