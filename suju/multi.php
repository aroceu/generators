<?php include ('head.php')?>

            <h1><span class="pearl">Super Junior</span>
                <br />Prompt Generator</h1>

                <h2>Multiple Prompts</h2>
            
            <prompt><?php

$rand_keys = array_rand($suju_members, 2);
echo $suju_members[$rand_keys[0]] . "/";
echo $suju_members[$rand_keys[1]] . "";
?>

<div class="prompt"><?php

$rand_keys = array_rand($suju_multi, $i=rand(2,3));
echo $suju_multi[$rand_keys[0]] . " <span class='and'>&</span> ";

if($i == 2){
    echo $suju_multi[$rand_keys[1]];
}
else{
    for($c = 1; $c < $i - 1; ++$c){
        echo $suju_multi[$rand_keys[$c]] . " <span class='and'>&</span> ";
    }
    echo $suju_multi[$rand_keys[$i - 1]];
}
?></div>

</prompt>

<input type="button" onclick="location.reload();" value="Generate another?" />


<?php include ('footer.php')?>
   