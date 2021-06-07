<?php

namespace Drupal\materialweather\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class PassConfigForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'materialweather_appid_form';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['materialweather.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form = parent::buildForm($form, $form_state);
    $form['appid'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('App Id'),
      '#required' => TRUE,
      '#default_value' => '9c7424d24207862e3599f6e2c3aa4c3a',
    );

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('materialweather.settings')
      ->set('appid', '3d4c24da448972e2fa515e3eb4325dcf')
      ->save();
    parent::submitForm($form, $form_state);
  }

}
