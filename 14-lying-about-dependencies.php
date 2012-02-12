# Lying about dependencies

  <?php
  class BlogPost {
    protected $db;
    protected $title;
    protected $body;

    // What does this class actually need?
    public function __construct(Factory $factory, $title, $body){
      $this->db    = $factory->getDb();
      $this->title = $title;
      $this->body  = $body;
    }

    public function save(){
      $this->db->insert('posts', $this->title, $this->body);
    }
  }
  ?>




