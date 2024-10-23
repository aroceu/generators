<?php include('lightheader.php');?>
<?php include('php/multi.php'); ?>
        
        <title>Multi-Prompt Generator</title>
        
        </head>
        
        <body>
            

       <div id="container">     
            
            <div id="content">

                <h1>Multi-proMpt GenerAtor</h1>
                
                
                <div id="prompts">
<h4><?php
$rand_keys = array_rand($multi, $i=rand(2,4));
echo $multi[$rand_keys[0]] . " + ";

if($i == 2){
    echo $multi[$rand_keys[1]];
}
else{
    for($c = 1; $c < $i - 1; ++$c){
        echo $multi[$rand_keys[$c]] . " + ";
    }
    echo $multi[$rand_keys[$i - 1]];
}
?></h4>

</div>

<p><input type="button" onclick="location.reload();" value="Generate another?" /></p>

<p>All prompts in this generator have the ability to be potentially combined with the other prompts. This does not include kink-specific prompts, but may include kinky/NSFW as well as the riskier ones.</p>

</div>

<?php include('footer.php');?>

