<?php include ('head.php')?>
    
    <head>
        
        <title>Harry Potter House Shuffler</title>
<link rel="shortcut icon" type="image/x-icon" href="/generators/favico.png" />
            <link rel="stylesheet" href="style.css" type="text/css" media="screen">
        
        </head>
        
        <body>
            
            <div id="houses">

       <div id="container">     
            
            <div id="content">
                
                
                <div id="prompts">
                    
<?php

print_r(array_random($house));
echo " ";
print_r(array_random($character));
?>
                    
</div>

<p><input type="button" onclick="location.reload();" value="Generate another?" /></p>



</div>

<p align="center">The same characters used in the <a href="char">character + prompt</a> generator are here. Yes, including the Founders.</p>

   <?php include ('footer.php') ?>

