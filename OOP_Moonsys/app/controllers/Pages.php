<?php
  class Pages extends Controller {

    public function __construct(){

      $this->postModel = $this->model('Post');

    }

    public function index(){

      $data = [
        'title' => 'Welcome'
      ];

      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us'
      ];
      $this->view("pages/about",$data);
    }

    public function how(){
      $this->view("pages/how");
    }

    public function contact(){
      $this->view("pages/contact");
    }

    public function e404(){
      $this->view("pages/e404");
    }

    public function services(){
      $this->view("pages/services");
    }

    public function employer_single(){
      $this->view("pages/employer_single");
    }

    public function admindex(){
      $this->view("pages/admindex");
    }
  }
