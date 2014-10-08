<?php
class JoinAction extends Action{
	public function index(){
		$this->display();
	}

	public function handle(){
		if(IS_POST){
			$user = array(
				'name' => I('name'),
				'sex' => 1,
				'college' => I('college'),
				'grade' => I('grade'),
				'major' => I('major'),
				'tel' => I('tel'),
				'e-mail' => I('e-mail')
				);
			if(I('sex')=='option2'){
				$user['sex'] = 0;
			}
			if(M('user')->data($user)->add()){
				$this->redirect('Index/Member/index');
			}
			else{
				$this->redirect('Index/Join/index');
			}

		}
		else{
			$this->redirect('Index/Join/index');
		}
	}
}
?>