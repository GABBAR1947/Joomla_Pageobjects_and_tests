<?php
/**
 * Short description for test.php
 *
 * @package test
 * @author gabbar1947 <gabbar1947@Rathore1947>
 * @version 0.1
 * @copyright (C) 2016 gabbar1947 <gabbar1947@Rathore1947>
 * @license MIT
 */
    
class UserCest
{
    public function error404check(AcceptanceTester $I, page\Dashboard $dashpage)
    {
        $dashpage->view();
        $I->wantTo('check 404 error');
        $I->amOnPage('/dummy');
        $I->see('404 error not found');
    }
}
?>
