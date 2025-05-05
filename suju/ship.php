<?php include ('head.php')?>

            <h1><span class="pearl">Super Junior</span>
                <br />Prompt Generator</h1>

                <h2>Ships</h2>
            
            <prompt><?php

$rand_keys = array_rand($suju_members, 2);
echo $suju_members[$rand_keys[0]] . "/";
echo $suju_members[$rand_keys[1]] . "";
?>
</prompt>

<input type="button" onclick="location.reload();" value="Generate another?" />


<?php include ('footer.php')?>
   