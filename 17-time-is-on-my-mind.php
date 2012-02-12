# Time is on my mind

  <?php
  class BlogPost {
    public function isPublished(){
      // Wait... What time is it?
      return ($this->publishTime <= time());
    }
  }
  ?>

  <?php
  class BlogPost {
    public function isPublished($currentTime){
      return ($this->publishTime <= $currentTime);
    }
  }
  ?>





