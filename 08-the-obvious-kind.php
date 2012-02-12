# The obvious kind

  <?php
  class BlogPost {
    protected $title;
    protected $body;

    public function __construct(){
      $this->title = $_POST['title'];
      $this->body  = $_POST['body'];
    }

    public function save(){
      $GLOBALS['db']->insert( // $GLOBALS? Really?
        'posts', $this->title, $this->body
      );
    }
  }

  $post = new BlogPost();
  $post->save(); // Wait... Where did the data come from?
  ?>

