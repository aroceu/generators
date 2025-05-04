<?php include ('generate.php')?>
<?php include ('header.php')?></h1>

<main>

    <div id="prompt">
        A<?php print_r(getAnonymous()); ?><?php print_r(array_random($medium)); ?><?php print_r(array_random($event)); ?> </strong>
        <br />centered around <em><underline><?php print_r(array_random($adjective)); ?> <?php print_r(array_random($subject)); ?></underline></em>
        <?php print_r(getExtra()); ?></span>
        <br />
        <input type="button" onclick="location.reload();" value="Generate another?" />
    </div>

    <div id="blurb">
        <details><summary>What is this?</summary>
        <p>This generator gives you the skeleton of an idea for a fandom event or challenge. Though it is built for and with the fandom community specifically in mind, feel free to modify the results to your own liking - these are only suggestions..</p> 
        
        <p>Some may not make sense together, so feel free to adjust as you see fit. As usual, these are not assignments or rules by any means, and do not have to be followed to a T. </p>

        <p>"Anonymous" means that there is an anonymity period for all works, which is common in fandom as a way to view works from fans indiscriminately.</p>

        <p>Each prompt provides the general idea of an event rather than anything more specific, such as "a rare ship," "a character," "a well-known fandom." The specifics are up to you to decide and interpret, or you can choose to host multi-fandom events where the broad categorization is the center of it. Whether or not you choose to follow the prompt as-is or make your own adjustments to it is up to you.</p> 
        
        <p>For example, the well-known AO3 exchange <a href="https://fanlore.org/wiki/Yuletide">Yuletide</a> would yield the following result:</p> 
        <blockquote>An anonymous fanfiction exchange centered [around] underrated fandoms</blockquote></p>

        <p>The only specific aspect of this generator is if tropes are generated, in which case it will also give you a specific trope to add to the theme of the event, if you wish. Tropes, as well as other prompt additions, are not always generated in the third line, for a wider range of broad to specific results.</p>

        <p>"Your" in this generator applies to you (the one who is using it with the possible intention of running the event) - as in your current fandom or a character/ship of your choosing. "Any" can functionally operate the same way, but also gives room to plurality in allowing participants to make that decision instead, if you prefer those types of events.</p>

        <p>For more information, see the <a href="explanation.php">explanation</a>.</p>
        </details>
    </div>
    <?php include('footer.php') ?>