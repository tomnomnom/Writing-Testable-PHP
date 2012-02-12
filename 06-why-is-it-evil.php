# Why is it evil?

  <?php
  class HttpClient {
    public function request($url){
      $GLOBALS['requestData'] = file_get_contents($url);
    }
    public function getData(){
      return $GLOBALS['requestData'];
    }
  }

  $a = new HttpClient();
  $b = new HttpClient();

  $a->request('http://twitter.com');
  $b->request('http://google.com');

  assert($a->getData() == $b->getData()); // WHAT?!
  ?>



