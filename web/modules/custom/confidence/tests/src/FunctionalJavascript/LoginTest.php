<?php

declare(strict_types=1);

namespace Drupal\Tests\confidence\FunctionalJavascript;

use Drupal\FunctionalJavascriptTests\WebDriverTestBase;

/**
 * Logs in through the login form, in a freshly installed test site.
 *
 * @group confidence
 */
class LoginTest extends WebDriverTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'confidence',
    'user',
  ];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Tests logging in using the login form.
   */
  public function testLogin(): void {
    $user = $this->drupalCreateUser();
    $this->drupalLogin($user);
  }

}
