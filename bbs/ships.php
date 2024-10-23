<?php include ('head.php')?>

            <h1><b>Bad Buddy</b> Prompt Generator</h1>
            <h2>Popular Ships & Multiple Prompts</h2>
            <span class="_4-h8"></span>
                
                <div id="prompts">
                    
<b><?php print_r(array_random($bbs_ships)); ?></b>

<br />
<prompt><?php

$rand_keys = array_rand($bbs_multi, $i=rand(2,3));
echo $bbs_multi[$rand_keys[0]] . " <font color='#b23a4e'>&</font> ";

if($i == 2){
    echo $bbs_multi[$rand_keys[1]];
}
else{
    for($c = 1; $c < $i - 1; ++$c){
        echo $bbs_multi[$rand_keys[$c]] . " <font color='#b23a4e'>&</font> ";
    }
    echo $bbs_multi[$rand_keys[$i - 1]];
}
?></prompt>

</div>

<p align="center"><input type="button" onclick="location.reload();" value="Generate another?" /></p>



                </p>

            
            <div id="bar">
    <div id="info">
    <p>This generator has the popular ships (Pat/Pran, Wai/Korn, Ink/Pa, and a handful of others) as well as a mishmash of multiple prompts that can go together. Feel free to refresh or click to generate new prompts, and to utilize any prompts for creative work, including fanfiction, fanart, or fanvideos.</p>

    </p></div>

<?php include ('foot.php')?>
   