<?php

namespace Drupal\advertiser\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class AdvertiserSettingsForm extends FormBase {
  
  public function getFormId() {
    return 'advertiser_settings';
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['contact_settings']['#markup'] = 'Settings form for Advertiser Content Entity. Manage field settings here.';
    return $form;
  }
}
