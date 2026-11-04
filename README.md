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
