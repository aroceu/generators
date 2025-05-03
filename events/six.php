<?php include ('gensix.php')?>
<?php include ('header.php')?> &bull; six prompts</h1>

<main>

    <div id="prompt">

    <?php generateSix(); ?>
    <input type="button" onclick="location.reload();" value="Generate another?" />
       
    </div>

    <div id="blurb">
        <details><summary>What are these six prompts?</summary>

        <p>These prompts are generated specifically for <a href="https://fanlore.org/wiki/Fanweek">fan week events</a>, with a set of prompts that are generic enough for unique and diverse interpretation across different types of fanworks, and specific enough to still maintain a sense of uniformity between all works for a prompt.</p> 
        
        <p>Six are generated so you can either cut out one that you don't like for a five-day event, or you can add a "free space" (as is typical for fanweeks) for a seven-day event.</p>

        <p>If you'd like to provide participants with more options, you can refresh the page to generate another set.</p>
                </details>
    </div>
<?php include('footer.php') ?>