<?php
namespace Drupal\custom\Controller;

use Drupal;
use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;

/**
* An example controller.
*/
class CustomController extends ControllerBase
{

  /**
   * Returns a render-able array for a test page.
   */


  public function content()
  {
    $number = Drupal::config('simple.settings')->get('simple.number');

    $nids = Drupal::entityQuery('node')->condition('type', 'movie_content_type')
      ->condition('status', 1)
      ->sort('created', 'DESC')
      ->pager($number)
      ->execute();
    $nodes = Node::loadMultiple($nids);
    $vid = 'movie_type';
    $terms = Drupal::entityTypeManager()->getStorage('taxonomy_term')->loadTree($vid);
    foreach ($terms as $term) {
      $term_data[] = array(
        'id' => $term->tid,
        'name' => $term->name
      );


      }


      return array(
        'result' => [
          '#theme' => 'article_list',
          '#nodes' => $nodes,
          '#terms' => $terms,
          '#title' => 'Movies listing page',
        ],
        'pager' => [
          '#type' => 'pager'
        ]
      );


    }

}

