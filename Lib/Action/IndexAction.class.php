<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    	$Form = M("Form");
    	$list = $Form->order('id desc')->limit(6)->select();
    	$this->assign('list',$list);
    	$this->display();
    }

    public function insert(){
    	$Form = D("Form");
    	if($Form->create()){
    		if(false !== $Form->add()){
    				$this->success('Add Success!');
    			} else {
    				$this->error('Add Error!');
    			}
    		} else {
    			header("Content-Type:text/html; charset=utf-8");
    			exit($Form->getError() . '[ <a href="javascript:history.back()">返 回</a> ]');
    		}
    }
}
?>