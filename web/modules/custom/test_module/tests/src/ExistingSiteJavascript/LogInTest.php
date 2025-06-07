<?php

namespace Drupal\Tests\test_module\ExistingSiteJavascript;

use weitzman\DrupalTestTraits\ExistingSiteSelenium2DriverTestBase;

/**
 * Test to log in.
 */
class LogInTest extends ExistingSiteSelenium2DriverTestBase {

  /**
   * Test to log in using the login form.
   */
  public function testLogin() {
    $user = $this->createUser();
    $this->visit('/user/login');
    $page = $this->getSession()->getPage();
    $page->fillField('name', $user->getAccountName());
    $page->fillField('pass', $user->getPassword());
    $page->findButton('Log in')->click();
  }
}
