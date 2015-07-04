<?php

namespace Werkspot\LightningTalk\AcceptanceTests\Bootstrap;

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\MinkExtension\Context\RawMinkContext;

class FeatureContext extends RawMinkContext implements Context, SnippetAcceptingContext
{
    /**
     * @Then /^(?:|I )should see "(?P<text>(?:[^"]|\\")*)" case sensitive/
     */
    public function assertPageContainsTextCaseSensitive($text)
    {
        $regex  = '/'.preg_quote($text, '/').'/u';
        $this->assertSession()->pageTextMatches($regex);
    }
}