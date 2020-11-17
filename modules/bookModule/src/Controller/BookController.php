<?php
namespace  Drupal\bookModule\Controller;


use Drupal\Core\Controller\ControllerBase;
use Drupal\serialization\Encoder\XmlEncoder;
use Symfony\Component\DependencyInjection\ContainerInterface;
use GuzzleHttp\Client;
use Drupal\node\Entity\Node;

  class BooksController extends ControllerBase
{
  protected $entityManager;
  protected $httpClient;

  public function __construct($entityManager, Client $httpClient)
  {
    $this->entityManager = $entityManager;
    $this->httpClient = $httpClient;
  }
  public static function create(ContainerInterface $container)
  {

      return array (
      $container->get('entity.manager'),
        $container->get('http_client')

    );
  }
  public function isbnExists($isbn) {
    $query = $this->entityManager->getStorage('node');
    $queryResult = $query->getQuery()->condition ('type', 'book')->condition ('field_isbn', $isbn)->execute();
    return Node::loadMultiple($queryResult);
  }
  public function displayBooks(){

    //fetch data from external URL
    $httpRequest = $this->httpClient->request('GET','https://www.chilkatsoft.com/xml-samples/bookstore.xml');
    $contents= $httpRequest->getBody()->getContents();

    $books = new \SimpleXMLElement($contents);
    foreach ($books as $book) {
      if(!$this->isbnExists($book->attributes()->ISBN)) {
        $node= Node::create([
          'type'=>'book',
          'title'=>$book->title,
          'field_title'=> $book->title,
          'field_price'=>$book->price,
          'field_isbn'=>$book->attributes()->ISBN,
        ]);
        $node->enforceIsNew();
        $node->save();

      }
    }
    return array(
      '#theme'=>'book_list',
      '#books'=>$this->getBooks()
    );
  }
  public function getBooks() {
    return $this->entityManager->getStorage('node')->loadByProperties(['type'=>'book']);
  }
}
