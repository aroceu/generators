<?php include ('head.php')?>
    
    <head>
        
        <title>Harry Potter Character & Prompt Generator</title>
<link rel="shortcut icon" type="image/x-icon" href="../favico.png" />
            <link rel="stylesheet" href="style.css" type="text/css" media="screen">
        
        </head>
        
        <body>
            
            <div id="char">

       <div id="container">     
            
            <div id="content">
                
                
                <div id="prompts">
                    
<?php

print_r(array_random($character));
echo " & <span class='prompt'>";
print_r(array_random($prompts));

?></span>

</div>

<p><input type="button" onclick="location.reload();" value="Generate another?" /></p>



</div>

<p>This generator selects one character from Harry Potter and one prompt (the same ones as the <a href="single">single generator</a>) with the challenge for you to combine the two into one body of work. If the prompt is romantic, you may have the character as one half of the ship, or a bystander to the trope occurring with another relationship.</p>
<p>Not <i>all</i> characters are listed; and by my discretion, more interesting characters are selected over less interesting ones. (For example, both Petunia and Dudley are in this generator, but Vernon is not.) Additionally, characters from different generations of the series are here, including the Founders and the epilogue children. Fantastic Beasts characters are here as well. Because of this, some character + prompt combinations <i>may</i> be plausibly impossible, but I do encourage you to get as creative as you can with your interpretation. Of course, if you have no interest in your generated character or prompt, you are free to generate another combination. However, I can guarantee that at least half of the possible characters are featured as Hogwarts students in the main book series.</p>
<p>This is not a challenge - you can interpret the combined prompts however you want, to make it either easier or more challenging for you.</p>
                </p>

   <?php include ('footer.php') ?>

