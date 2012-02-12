# Delegate where possible

  <?php 
  class BlogPost {
    protected $cache;
    public function __construct(Cache $cache, /* ... */){
      $this->cache = $cache;
      /* ... */
    }

    public function getById($id){
      $result = $this->cache->get("post-{$id}");
      if (!$result){
        $result = $this->db->select('posts', 'id', $id);
        $this->cache->set("post-{$id}", $result, 60*60)
      }

      $this->title = $result['title'];
      $this->body  = $result['body'];
    }
  }
  ?>

