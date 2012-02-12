# Making your own dependencies

  <?php
  class BlogPost {
    /* ... __construct etc ...*/

    public function save(){
      // No singletons here!
      $this->db = new Db();
      $this->db->insert('posts', $this->title, $this->body);
    }
  }

  // This *is* using the test DB now, right?
  $post = new BlogPost(
    'All of our customers are hairy', 
    'And they smell bad.'
  );
  $post->save();
  ?>



