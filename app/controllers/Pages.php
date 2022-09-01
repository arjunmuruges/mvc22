<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      $data = [
        'title' => 'TraversyMVC',
      ];
     
      $this->view('pages/index', $data);
    }
    public function save()
    {
        $model = $this->model('Books');
        $postData =$_POST;
        $model->binsert($postData); 
       
    }
    public function display()
    {
      $model=$this->model('Books');
      $posts=$model->display();
      $data=[
        'posts'=>$posts
      ];
      $this->view('pages/posts',$data);
    }

    public function about(){
      $data = [
        'title' => 'About Us'
      ];

      $this->view('pages/about', $data);
    }

  }
  