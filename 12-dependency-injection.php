# Dependency injection

  <?php
  class BlogPost {
    /* ... Other members ... */
    protected $db;

    public function __construct(Db $db, $title, $body){
      $this->db = $db; 
      /* ... Other assignments ... */
    }
    public function save(){
      $this->db->insert('posts', $this->title, $this->body);
    }
  }

  $post = new BlogPost( 
    new Db('test_Db'), 'Our customers suck', 'A lot.'
  );
  $post->save();
  ?>
But we still have to use a database...
And how do we know it worked?
