<?php include ('head.php')?>

            <h1><b>Bad Buddy</b> Prompt Generator</h1>
            <h2>ohmnanon characters</h2>
            <span class="_4-h8"></span>
                
                <div id="prompts">
<b><?php

$rand_keys = array_rand($ohmnanon, 2);
echo $ohmnanon[$rand_keys[0]] . "/";
echo $ohmnanon[$rand_keys[1]] . "";
?></b>
<br />
<?php print_r(array_random($bbsprompts)); ?>
</div>

<p align="center"><input type="button" onclick="location.reload();" value="Generate another?" /></p>



                </p>

            
            <div id="bar">
    <div id="info">
    <p>This generator has Ohm, Nanon, and a handful of characters they play (including Pat and Pran) as the only possible generated characters. Feel free to refresh or click to generate new prompts, and to utilize any prompts for creative work, including fanfiction, fanart, or fanvideos.</p></div>

<?php include ('foot.php')?>
   