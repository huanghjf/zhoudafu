<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 手工分类model
 * 
 * @author huangjialin
 *
 */
class Model_manual_class extends MY_Model {

    private $_table = 't_manual_class';

    public function __construct() {
        parent::__construct($this->_table);
    }
    
    
    
}