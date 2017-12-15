<?php

namespace Drupal\my_example_module\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Configure cron settings for this site.
 */
class ExampleModuleForm extends FormBase {

  /**
   * Class constructor.
   */
  public function __construct() {}

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'my_example_module_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['my_example'] = [
      '#prefix' => '<div>',
      '#markup' => t('Hello Example module'),
      '#suffix' => '</div>',
    ];

    $form['actions']['preview'] = [
      '#type' => 'submit',
      '#value' => t('Test'),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Do something.
  }
}
