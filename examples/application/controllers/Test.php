<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use \X\Annotation\Access;
use \X\Util\Logger;
class Test extends AppController {

  //@ToDo $model指定がなくてもAppModelが呼び込まれるようにする
  protected $model = 'TestModel';

  /**
   * @Access(allow_login=true, allow_logoff=true)
   */
  public function testTransaction() {
    $this->TestModel->testTransaction();
  }
}