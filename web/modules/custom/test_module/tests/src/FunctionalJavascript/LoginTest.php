<?php

declare(strict_types=1);

namespace Drupal\Tests\test_module\FunctionalJavascript;

use Drupal\FunctionalJavascriptTests\WebDriverTestBase;

/**
 * Test login using a webdriver test base.
 *
 * @group test_module
 */
class LoginTest extends WebDriverTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'user',
  ];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Test to log in using the login form.
   */
  public function testLogin() {
    $user = $this->createUser();
    $this->drupalGet('/user/login');
    $page = $this->getSession()->getPage();
    $page->fillField('name', $user->getAccountName());
    $page->fillField('pass', $user->pass_raw);
    $page->findButton('Log in')->click();
    self::assertTrue($this->drupalUserIsLoggedIn($user));
  }

}
