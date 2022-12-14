<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class IndexPageCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function pageLoads(AcceptanceTester $I)
    {
        $I->amOnPage('/');

        # Assert the correct title is set on the page
        $I->seeInTitle('E2 Project 3');

        # Assert the existence of certain text on the page
        $I->see('Instructions');

        # Assert the existence of a certain element on the page
        $I->seeElement('.navlink');

        # Assert the existence of text within a specific element on the page
        $I->see('Rock');

        # Assert the existence of text within a specific element on the page
        $I->see('Paper');

        # Assert the existence of text within a specific element on the page
        $I->see('Scissors');

        # Assert the existence of text within a specific element on the page
        $I->see('Spock');

        # Assert the existence of text within a specific element on the page
        $I->see('Lizard');

        # Assert the existence of a certain element on the page
        $I->see('Fight', '[test=submit]');
    }

    public function gamePlayer(AcceptanceTester $I)
    {
        $I->amOnPage('/');

        $I->fillField('[test=player-name-input]', 'Bob T');

        $I->click('[test=submit]');
    }
}