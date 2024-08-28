<?php
namespace Drupal\name_module\Controller;

use Drupal\Core\Controller\ControllerBase;

class NameFormController extends ControllerBase
{
   public function content() {
   //  $nameForm = \Drupal::formBuilder()->getForm('Drupal\name_module\Form\NameForm');
   //  return $nameForm;
   return [
      '#markup' => $this->t('Form  content'),
  ];
   }
}
