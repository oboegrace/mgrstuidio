<?php 

include_once( 'admin/model/adminModel.php' );

class newsModel extends adminModel {

	function __construct() {
		parent::__construct();

		// Var
		$this->pageName = 'news';
	}
	
}

?>