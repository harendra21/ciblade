<?php

defined('BASEPATH') OR exit('No direct script access allowed');
    use Coolpraz\PhpBlade\PhpBlade;
    class MY_Controller extends CI_Controller {

        protected $views = APPPATH . 'views';
        protected $cache = APPPATH . 'cache';
        protected $blade;
        public function __construct(){
            parent::__construct();
            $this->blade = new PhpBlade($this->views, $this->cache);
        }

        public function front_render($view_name,$data,$head){
            
            echo $this->blade->view()->make('_parts/header', $head);
            echo $this->blade->view()->make($view_name, $data);
            echo $this->blade->view()->make('_parts/footer', $head);
            


        }

    }
