<?php include ('head.php')?>

            <h1><b>Bad Buddy</b> Prompt Generator</h1>
            <h2>all students</h2>
            <span class="_4-h8"></span>
                
                <div id="prompts">
<b><?php

$rand_keys = array_rand($bbs_students, 2);
echo $bbs_students[$rand_keys[0]] . "/";
echo $bbs_students[$rand_keys[1]] . "";
?></b>
<br />
<?php print_r(array_random($bbsprompts)); ?>
</div>

<p align="center"><input type="button" onclick="location.reload();" value="Generate another?" /></p>



                </p>

            
            <div id="bar">
    <div id="info">
    <p>This generator has all named student characters in Bad Buddy. Feel free to refresh or click to generate new prompts, and to utilize any prompts for creative work, including fanfiction, fanart, or fanvideos.</p>

    <p>Warning for possible incest combinations. 
    </p></div>

<?php include ('foot.php')?>
   