<?php include('lightheader.php');?>
<?php include('php/func.php'); ?>
<?php include('php/verse.php'); ?>
<?php include('php/situation.php'); ?>
<?php include('php/careers.php'); ?>

        <title>Full Set Prompt Generator</title>
        
        </head>
        
        <body>
            

       <div id="container">     
            
            <div id="content">

                <h1>Full Set GenerAtor</h1>
        
                <div id="prompts">
                    

<h2>Universe/Backdrop:</h2>
    <h3><?php print_r(array_random($verse)); ?></h3>
<br /><h2>Situation or Format:</h2>
<h3><?php print_r(array_random($situation)); ?></h3>
<br /><h2>Career:</h2>
<h3><?php print_r(array_random($careers)); ?></h3>
</div>

<p><input type="button" onclick="location.reload();" value="Generate another?" /></p>

<p>This generates a combination of prompts that can be fit together in a single fanwork as a setting/plot/career if necessary. You may also pick two of a set if the third doesn't fit in quite as nicely. Some tropes may overlap in categories (e.g. "soulmates" as both a universe and a situation). More popular "risky" and NSFW tropes are included.</p>



</div>

<?php include('footer.php');?>