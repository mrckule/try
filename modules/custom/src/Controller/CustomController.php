<?php
namespace Drupal\custom\Controller;

use Drupal;
use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;
use Drupal\node\Entity\NodeType;

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

    $nids = Drupal::entityQuery('node')->condition('type', 'movie_content_type')->execute();
    $nodes = Node::loadMultiple($nids);
    $vid = 'movie_type';
    $terms =\Drupal::entityTypeManager()->getStorage('taxonomy_term')->loadTree($vid);
    foreach ($terms as $term) {
      $term_data[] = array(
        'id' => $term->tid,
        'name' => $term->name
      );
    }

    return array(
      '#theme' => 'article_list',
      '#nodes' => $nodes,
      '#terms' => $terms,
      '#title' => 'Movies listing page'
    );
  }
}

