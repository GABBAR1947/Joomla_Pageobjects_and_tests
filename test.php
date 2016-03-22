<?php
class ArtCest
{    
    function articletest(AcceptanceTester $I, \Page\Article $artpage)
    {
        $h1 = "first article"; 
        $sub = "firstart";
        $matter = "this is my first joomla article";

        $artpage->createarticle($h1, $sub, $matter);
        $I->amOnPage('/index.php?option=com_content&view=articles');
        $I->see('Article successfully saved', 'h1');        
    }
}
?>
