<?php
/**
 * Short description for page.php
 *
 * @package page
 * @author gabbar1947 <gabbar1947@Rathore1947>
 * @version 0.1
 * @copyright (C) 2016 gabbar1947 <gabbar1947@Rathore1947>
 * @license MIT
 */

    namespace page;
    use Codeception\Util\Shared\Asserts;
    use "base class";

    class Dashboard
    {
        public $tobject; 

        public $url = '/administrator';
            
        public function __construct(\AcceptanceTester $I)
        {
            this->tobject = $I;
        }

        public function view()
        {
            $I = this->tobject;

            $I->amOnPage(self::$url);

            return $this;
        }

    }
    
?>
