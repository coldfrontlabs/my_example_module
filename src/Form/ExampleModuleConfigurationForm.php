<?php

namespace Drupal\my_example_module\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
/**
 * Defines a form that configures devel settings.
 */
class ExampleModuleConfigurationForm extends ConfigFormBase {

  /**
   * Constructs a new SettingsForm object.
   */
  public function __construct() {
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static();
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'my_example_module_configuration_form';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'my_example_module_configuration.settings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('my_example_module_configuration.settings');


    $form['testing_value'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Testing my boolean config'),
      '#default_value' => $config->get('testing_value'),
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $values = $form_state->getValues();
    $this->config('my_example_module_configuration.settings')
      ->set('testing_value', $values['testing_value'])
      ->save();

    parent::submitForm($form, $form_state);
  }
}
