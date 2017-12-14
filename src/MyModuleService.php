<?php

namespace Drupal\my_example_module;

/**
 * Service for example module.
 */
class MyModuleService {
  protected $example;

  /**
   * {@inheritdoc}
   */
  public function __construct($param = NULL) {
    $this->example = $param;
  }

  public function getServiceExampleValue() {
    return $this->example;
  }
}


