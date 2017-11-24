<?php
/****************************************************************************
 * For license information see LICENSE.md
 ****************************************************************************/

namespace OcTest\Frontend\Login;

use Behat\Mink\Exception\ElementNotFoundException;
use OcTest\Frontend\AbstractFrontendTest;

class LoginTest extends AbstractFrontendTest
{
    public function testLoginFormOnStartPage()
    {
        $page = $this->session->getPage();
        $page->fillField('email', 'root');
        $page->fillField('password', 'developer');

        $page->pressButton('Login');

        $page->clickLink('root');

        $pageTitle = $page->find('css', '.content2-pagetitle');

        self::assertEquals('Hello root', $pageTitle->getText());
    }
}
