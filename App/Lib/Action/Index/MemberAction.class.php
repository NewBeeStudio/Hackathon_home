<?php
class MemberAction extends Action{
	public function index(){
		$this->assign('member',M('user')->select())->display();
	}
}
?>