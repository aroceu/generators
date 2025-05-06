<?php include ('head.php')?>

            <h1><span class="pearl">Super Junior</span>
                <br />Prompt Generator</h1>

                <h2>Moresomes</h2>
            
            <prompt><?php

$rand_keys = array_rand($suju_members, $i=rand(3,5));
echo $suju_members[$rand_keys[0]] . " / ";
echo $suju_members[$rand_keys[1]] . " / ";

if($i == 3){
    echo $suju_members[$rand_keys[2]];
}
else{
    for($c = 2; $c < $i - 1; ++$c){
        echo $suju_members[$rand_keys[$c]] . " / ";
    }
    echo $suju_members[$rand_keys[$i - 1]];
}

?>
</prompt>

<input type="button" onclick="location.reload();" value="Generate another?" />


<?php include ('footer.php')?>
   