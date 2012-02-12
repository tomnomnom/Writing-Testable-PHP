# Mocks

  <?php
  class MockDb extends Db {
    protected $lastInsert;

    public function insert(){
      $this->lastInsert = func_get_args(); 
    }
    public function getLastInsert(){
      return $this->lastInsert;
    }
  }
  $mockDb = new MockDb();
  $title  = 'We can say what we want about our customers here';
  $body   = 'They will never find out, teehee!';

  $post = new BlogPost($mockDb, $title, $body);
  $post->save();

  assert($db->getLastInsert() == array('posts', $title, $body));
  ?>

