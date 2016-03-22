<?php
namespace Page;

class Article
{

    public tobject;

    public $URL = '/index.php?option=com_content&view=article&layout=edit';
    public $title = 'input from the form';
    public $alias = 'input from the form';
    public $saveClose = 'input from the form';
    public $content = 'input from the form';
   
    public function __construct(\AcceptanceTester $I)
    {
        $this->tobject = $I;
    }

    public function createarticle($head, $aka, $text)
    {
        $I = $this->tobject;

        $I->amOnPage(self::$URL);
        $I->fillField(self::$title, $head);
        $I->fillField(self::$alias, $aka);
        $I->fillField(self::$content, $text);
        $I->click(self::$saveClose);

        return $this;
    }    
}
?>
