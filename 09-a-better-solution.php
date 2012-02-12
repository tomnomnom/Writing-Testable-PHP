# A better solution

  <?php
  class BlogPost {
    /* ... members ...*/

    public function __construct($title, $body){
      $this->title = $title; // No globals here!
      $this->body  = $body;
    }

    public function save(){
      $db = Db::getInstance(); // No globals here either?
      $db->insert('posts', $this->title, $this->body);
    }
  }
  $post = new BlogPost($_POST['title'], $_POST['body']);
  $post->save(); // I can see you, data; I know where you live.
  ?>

* Still using $_POST; isn't that still global state?
* A wild singleton has appeared!

