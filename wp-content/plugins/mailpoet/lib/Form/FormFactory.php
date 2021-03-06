<?php

namespace MailPoet\Form;

if (!defined('ABSPATH')) exit;


use MailPoet\Models\Form;

class FormFactory {
  /** @return Form */
  public function createEmptyForm() {
    $data = [
      'name' => '',
      'body' => [
        [
          'id' => 'email',
          'name' => __('Email', 'mailpoet'),
          'type' => 'text',
          'params' => [
            'label' => __('Email', 'mailpoet'),
            'required' => true,
            'label_within' => true,
          ],
          'styles' => [
            'full_width' => true,
          ],
        ],
        [
          'id' => 'submit',
          'name' => __('Submit', 'mailpoet'),
          'type' => 'submit',
          'params' => [
            'label' => __('Subscribe!', 'mailpoet'),
          ],
          'styles' => [
            'full_width' => true,
          ],
        ],
      ],
      'settings' => [
        'on_success' => 'message',
        'success_message' => Form::getDefaultSuccessMessage(),
        'segments' => null,
        'segments_selected_by' => 'admin',
      ],
    ];
    return Form::createOrUpdate($data);
  }
}
