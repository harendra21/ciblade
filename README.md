 # Codeigniter 3.1.9 + Blade Templating Engine + Bootstrap 3

This library used Laravel`s blade templating engine to provide the clean php code

### Introduction to Blade Templating Engine

lade is the simple, yet powerful templating engine provided with Laravel. Unlike other popular PHP templating engines, Blade does not restrict you from using plain PHP code in your views. In fact, all Blade views are compiled into plain PHP code and cached until they are modified, meaning Blade adds essentially zero overhead to your application.

To read more please refer to the following link - https://laravel.com/docs/5.7/blade

### Introduction to Codeigniter

CodeIgniter is a powerful PHP framework with a very small footprint, built for developers who need a simple and elegant toolkit to create full-featured web applications.

Read more about codeigniter - https://www.codeigniter.com/

### Introduction to Bootstrap

Bootstrap is a free and open-source front-end Web framework. It contains HTML and CSS-based design templates for typography, forms, buttons, navigation and other interface components, as well as optional JavaScript extensions. Unlike many earlier web frameworks, it concerns itself with front-end development only.

Read more about bootstrap - https://getbootstrap.com/

### Installation Process

 1. Clone this repository to your local server by "git clone https://github.com/harendra21/ciblade.git"
 2. Hit the url by browser "http://localhost/ciblade"
 
 ### Usage

  ```html
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <title>{{$page_title}} - CodeIgniter</title>	
    </head>
    <body>
    <h1>Welcome {{$person_name}}!</h1>
    </body>
    </html>
```

### .htaccess file to remove the index.php form urls
 ``` 
    <IfModule mod_rewrite.c>
       RewriteEngine On
       RewriteCond %{REQUEST_FILENAME} !-f
       RewriteCond %{REQUEST_FILENAME} !-d
       RewriteRule ^(.*)$ index.php/$1 [L]
     </IfModule>
```
### My_Controller.php in application/core
 ```
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
```
### Welcome.php in application/controllers
```
  class Welcome extends MY_Controller {
   public function index(){
    $head = array();
    $data = array();
    $this->front_render('home',$data,$head);
   }
  }
```
Now create your views with view_name.blade.php

For any query please contact at harendraverma21@gmail.com
