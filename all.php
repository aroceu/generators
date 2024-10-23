<?php include('darkheader.php');?>
<?php include('php/func.php'); ?>
<?php include('php/all.php'); ?>
        
        <title>All Prompts Generator</title>
        
        </head>
        
       <body>
            

       <div id="container">     
            
            <div id="content">

                <h1>All Prompts Generator</h1>
                
                
                <div id="prompts">
                    
                    <?php print_r(array_random($all)); ?>

</div>

<p><input type="button" onclick="location.reload();" value="Generate another?" /></p>

<p>This contains <i>all</i> the prompts found on this site's generators, including all the kinks - aside from the simplified ones on the multi/set generators.</p>



</div>

<?php include('footer.php');?>
