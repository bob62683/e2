<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class HistoryPageCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function pageLoads(AcceptanceTester $I)
    {
        $I->amOnPage('/history');

        # Assert the correct title is set on the page
        $I->seeInTitle('E2 Project 3');

        # Assert the existence of certain text on the page
        $I->see('Game History');

        # Assert the existence of a certain element on the page
        $I->seeElement('.navlink');

        # Assert the existence of a certain element on the page
        $I->see('Home');
    }
}