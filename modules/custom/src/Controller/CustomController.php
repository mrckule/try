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
    $node_types = NodeType::loadMultiple($nodes);

    return array(
      '#theme' => 'article_list',
      '#nodes' => $nodes,
      '#node_type' => $node_types,
      '#title' => 'Our node list'
    );
  }
}

