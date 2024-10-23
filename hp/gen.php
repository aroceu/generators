<?php include ('head.php')?>
    
    <head>
        
        <title>Harry Potter Gen Generator</title>
<link rel="shortcut icon" type="image/x-icon" href="/generators/favico.png" />
            <link rel="stylesheet" href="/generators/hp/style.css" type="text/css" media="screen">
        
        </head>
        
        <body>
            
        <div id="gen">

       <div id="container">     
            
            <div id="content">
                
                
                <div id="prompts">
                    
<!-- only for combos of the SAME TYPE **/ -->
<?php
$rand_keys = array_rand($friends, $i=rand(2,5));
echo $friends[$rand_keys[0]] . " &<br />";

if($i == 2){
    echo $friends[$rand_keys[1]] . ".";
}
else{
    for($c = 1; $c < $i - 1; ++$c){
        echo $friends[$rand_keys[$c]] . " &<br />";
    }
    echo $friends[$rand_keys[$i - 1]] . ".";
}
?>

</div>

<p><input type="button" onclick="location.reload();" value="Generate another?" /></p>



</div>


                            <p>This generator produces friendship amalgamations between the size of two to five characters. All characters in Harry's year are included, as well as Ginny and Luna.</p>

    <?php include ('footer.php') ?>

