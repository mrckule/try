<?php

/**

 * @file

 * Contains \Drupal\simple\Form\SimpleConfigForm.

 */

namespace Drupal\simple\Form;

use Drupal\Core\Form\ConfigFormBase as parentAlias;

use Drupal\Core\Form\FormStateInterface;


class SimpleConfigForm extends parentAlias
{

  /**

   * {@inheritdoc}

   */

  public function getFormId() {

    return 'simple_config_form';

  }

  /**

   * {@inheritdoc}

   */

  public function buildForm(array $form, FormStateInterface $form_state) {


    $config = $this->config('simple.settings');

    $form['number'] = array(

      '#type' => 'textfield',

      '#title' => $this->t('Number of results per page'),

      '#default_value' => $config->get('simple.number'),

      '#required' => TRUE,

    );

    $node_types = \Drupal\node\Entity\NodeType::loadMultiple();

    $node_type_titles = array();

    foreach ($node_types as $machine_name => $val) {

      $node_type_titles[$machine_name] = $val->label();

    }

    $form['node_types'] = array(

      '#type' => 'select',

      '#title' => $this->t('Node Types'),

      '#options' => $node_type_titles,

      '#default_value' => $config->get('simple.node_types'),

    );

    return $form;

  }

  /**

   * {@inheritdoc}

   */

  public function submitForm(array &$form, FormStateInterface $form_state) {

    $config = $this->config('simple.settings');

    $config->set('simple.number', $form_state->getValue('number'))->save();

    $config->set('simple.node_types', $form_state->getValue('node_types'))->save();



    parent::submitForm($form, $form_state);

  }

  /**

   * {@inheritdoc}

   */

  protected function getEditableConfigNames() {

    return [

      'simple.settings',

    ];

  }


}
