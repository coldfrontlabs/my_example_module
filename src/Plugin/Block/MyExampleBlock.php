<?php

namespace Drupal\my_example_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Example' Block.
 *
 * @Block(
 *   id = "my_example_block",
 *   admin_label = @Translation("My Example block"),
 *   category = @Translation("Example"),
 * )
 */
class MyExampleBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#markup' => $this->t('Hello, World!'),
    );
  }
}
