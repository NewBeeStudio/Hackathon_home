<?php
class JoinAction extends Action{
	public function index(){
		$this->display();
	}

	public function handle(){
		if(IS_POST){
			p($_POST);	
		}
		else{
			$this->redirect('Index/Join/index');
		}
	}
}
?>