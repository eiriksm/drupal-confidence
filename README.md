# drupal-confidence

[![Test](https://github.com/eiriksm/drupal-confidence/actions/workflows/test.yml/badge.svg)](https://github.com/eiriksm/drupal-confidence/actions/workflows/test.yml)

Growing confidence in your Drupal project

## Checks

Run on GitHub Actions, GitLab CI and Bitbucket Pipelines:

- `composer ci:validate` – `composer.json` and `composer.lock` are valid and in sync.
- `composer install` – dependencies can actually be installed.
- `composer phpcs` – custom code in `web/modules/custom` and `web/themes/custom`
  follows the Drupal coding standards (see `phpcs.xml.dist`).
  Run `composer phpcbf` to fix most violations automatically.
- `composer phpstan` – static analysis of the same custom code with PHPStan
  (level 6, with the Drupal extension and deprecation rules; see `phpstan.neon.dist`).
- `composer site-install` then `composer phpunit` – installs the site from
  `config/sync` and runs the PHPUnit tests in custom modules: core test base
  classes (like `WebDriverTestBase`) and Drupal Test Traits tests against the
  installed site, both in a real browser.
- `composer behat` – Behat scenarios in `tests/features`, run against the
  installed site with the Drupal Extension, including one in a real browser
  (see `behat.yml`).

The site reads its database and hash salt from the `DRUPAL_DATABASE_URL` and
`DRUPAL_HASH_SALT` environment variables (see `web/sites/default/settings.php`).
