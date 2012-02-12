# The Single Responsibility Principle

Do one thing, and do it well

  <?php 
  class BlogPost {
    public function getById($id){
      $result = apc_fetch("post-{$id}");
      if (!$result){
        $result = $this->db->select('posts', 'id', $id);
        apc_store("post-{$id}", $result, 60*60)
      }

      $this->title = $result['title'];
      $this->body  = $result['body'];
    }
  }
  ?>





