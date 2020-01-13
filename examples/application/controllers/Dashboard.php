<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use \X\Annotation\Access;
class Dashboard extends AppController {

  /**
   * @Access(allow_login=true, allow_logoff=false)
   */
  public function index() {
    parent::view('dashboard');
  }
}