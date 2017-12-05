<?php


class testCest
{
    public static $paths = "Paths";
    public static $message = "Your new career";
    public static $cssElement = ".searchPathMenu__item--1465";

    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    public function canSeePath(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->click(self::$paths);
        $I->waitForText(self::$message);
        $I->waitForElementVisible(self::$cssElement);
        $I->click(self::$cssElement);
        $I->makeScreenshot();
    }
}
