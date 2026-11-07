<?php

declare(strict_types=1);

namespace Drupal\Tests\confidence\ExistingSiteJavascript;

use weitzman\DrupalTestTraits\ExistingSiteSelenium2DriverTestBase;

/**
 * Logs in through the login form, on the already installed site.
 *
 * @group confidence
 */
class LoginTest extends ExistingSiteSelenium2DriverTestBase {

  /**
   * Tests logging in using the login form.
   */
  public function testLogin(): void {
    $user = $this->createUser();
    $this->drupalLogin($user);
  }

}
