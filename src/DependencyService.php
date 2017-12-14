<?php

namespace Drupal\my_example_module;

use Drupal\Core\Language\LanguageDefault;

/**
 * Service for example module.
 */
class DependencyService {
  protected $language;

  /**
   * {@inheritdoc}
   */
  public function __construct(LanguageDefault $default_language) {
    $this->language = $default_language;
  }

  public function getLanguageName() {
    return $this->language->get()->getName();
  }
}


