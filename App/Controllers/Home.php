<?php

  namespace App\Controllers;

  // home controller
  // inherits from base controller
  class Home extends \Core\Controller {

    // constructor
    public function __construct($routeParams) {
      parent::__construct($routeParams);
    }

    // indexAction
    public function indexAction() {
      echo 'hello from Home index';
    }

    // before action filter
    protected function before() {
      echo '(before) ';
    }

    // after action filter
    protected function after() {
      echo ' (after)';
    }
    
  }