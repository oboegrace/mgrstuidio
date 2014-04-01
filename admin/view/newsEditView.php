<?php 

include_once( 'admin/view/adminView.php' );

class newsEditView extends adminView {
	public function iniPage(&$wrapper){
		$styleFolder = $this->getStyleFolder();
		$wrapper-> addCss($styleFolder.'bootstrap.min.css');
	}
	public function displayContent() {
		
		// Get Data from Model
		$templateFolder = $this->getTemplateFolder();
		// $newsList = $this->model->getNewsList();//在newsModel implement
		$newsData = $this->model->getNewsData();
		// DisplayContent
		require( $templateFolder.'newsEdit.php' );
	}
}
?>