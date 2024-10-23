<?php include ('head.php')?>

            <h1><b>Bad Buddy</b> Prompt Generator</h1>
            <h2>all characters</h2>
            <span class="_4-h8"></span>
                
                <div id="prompts">
<b><?php

$rand_keys = array_rand($bbschars, 2);
echo $bbschars[$rand_keys[0]] . " &/ ";
echo $bbschars[$rand_keys[1]] . "";
?></b>
<br />
<?php print_r(array_random($bbsprompts)); ?>
</div>

<p align="center"><input type="button" onclick="location.reload();" value="Generate another?" /></p>



                </p>

            
            <div id="bar">
    <div id="info">
    <p>This generator has all named characters in Bad Buddy (plus Pat's mom and Pran's dad.) (And except for Junior, who is not in this generator.) Feel free to refresh or click to generate new prompts, and to utilize any prompts for creative work, including fanfiction, fanart, or fanvideos.</p>
    
    <p>If some of these side characters are unfamiliar to you:</p>
    <ul><li>Ham is the guy who shot Pat (credited on <a href="https://en.wikipedia.org/wiki/Bad_Buddy">Wikipedia</a>)</li>
    <li>Ice is the girl who gave Pran his drink in the beginning of episode 7</li>
    <li>Gigie and Noey are Paa's friends</li>
    <li>Boss is the guy who bothered Pa and her friends for their LINE IDs before Ink interfered</li>
    <li>Bie is the guy from the sound booth (also showed up during the Architecture camp)</li>
    <li>and Au is the unseen senior guy member in the Photography club who skipped out on hotpot with Ink and Pa.</li></ul>

    <p>Warning for possible incest combinations. 
    </p></div>

<?php include ('foot.php')?>
   