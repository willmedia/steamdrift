<?php

namespace Drupal\webform_ui;

use Drupal\Core\Serialization\Yaml;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\webform\WebformOptionsForm;

/**
 * Base for controller for webform option UI.
 */
class WebformUiOptionsForm extends WebformOptionsForm {

  /**
   * {@inheritdoc}
   */
  public function editForm(array $form, FormStateInterface $form_state) {
    $form['options'] = [
      '#type' => 'webform_options',
      '#mode' => 'yaml',
      '#title' => $this->t('Options'),
      '#title_display' => 'invisible',
      '#empty_options' => 10,
      '#add_more' => 10,
      '#required' => TRUE,
      '#default_value' => $this->getOptions(),
    ];
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function afterBuild(array $element, FormStateInterface $form_state) {
    // Overriding after \Drupal\Core\Entity\EntityForm::afterBuild because
    // it calls ::buildEntity(), which calls ::copyFormValuesToEntity, which
    // attempts to populate the entity even though the 'options' have not been
    // validated and set,.
    // @see \Drupal\Core\Entity\EntityForm::afterBuild
    // @eee \Drupal\webform_ui\WebformUiOptionsForm::copyFormValuesToEntity
    // @see \Drupal\webform\Element\WebformOptions
    return $element;
  }

  /**
   * {@inheritdoc}
   */
  protected function copyFormValuesToEntity(EntityInterface $entity, array $form, FormStateInterface $form_state) {
    $values = $form_state->getValues();
    $values['options'] = Yaml::encode($values['options']);
    foreach ($values as $key => $value) {
      $entity->set($key, $value);
    }
  }

}
