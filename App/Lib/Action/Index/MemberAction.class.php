<?php
class MemberAction extends Action{
	public function index(){
		$user = M('user');
		$this->assign(
			array(
				'member' => $user->order('id desc')->select(),
				'count' => $user->count()
			))->display();
	}
}
?>