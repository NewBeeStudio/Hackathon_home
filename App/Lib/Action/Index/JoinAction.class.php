<?php
class JoinAction extends Action{
	public function index(){
		$this->display();
	}

	public function handle(){
		if(IS_POST){
			$user = array(
				'name' => I('name'),
				'sex' => I('sex'),
				'college' => I('college'),
				'grade' => I('grade'),
				'major' => I('major'),
				'tel' => I('tel'),
				'e-mail' => I('e-mail')
				);
			M('user')->data($user)->add();

		}
		else{
			$this->redirect('Index/Join/index');
		}
	}
}
?>