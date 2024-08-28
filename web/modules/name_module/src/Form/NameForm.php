<?php

namespace Drupal\name_module\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class NameForm extends FormBase
{
    public function getFormId()
    {
        return 'hello name form';
    }
    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $form['name'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Enter your name'),
            '#required' => true,
        ];
        $form['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('Submit'),
        ];
        return $form;
    }
    // public function validateForm(array $form, FormStateInterface $form_state)
    // {
    //     if (strlen($form_state->getValue('name')) < 3) {
    //         $form_state->setErrorByName('name', $this->t('Name must be at least
    //         3 characters long'));
    //     }
    // }

    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        $name = $form_state->getValue('name');
        \Drupal::messenger()->addMessage($this->t('Hello, @name!', ['@name' => $name]));
    }
}
