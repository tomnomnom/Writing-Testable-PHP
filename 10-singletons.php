# Singletons?! But I *love* them!

  <?php
  class BlogPost {
    /* ... __construct etc ...*/

    public function save(){
      $db = Db::getInstance(); // <-- This is a problem
      $db->insert('posts', $this->title, $this->body);
    }
  }

  Db::selectDatabase('production'); // How did that get there?
  $post = new BlogPost(
    'All of our customers are hairy...', 
    '...And they smell bad.'
  );
  $post->save();
  ?>

It's simple; we kill the singleton.


