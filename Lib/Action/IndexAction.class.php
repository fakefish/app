<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    	  $Form = M('Form');
        import("@.ORG.Page");       //导入分页类
        $count = $Form->count();    //计算总数
        $p = new Page($count, 5);
        $list = $Form->limit($p->firstRow . ',' . $p->listRows)->order('id desc')->select();
        $p->setConfig('header', '条数据');
        $p->setConfig('prev', "前");
        $p->setConfig('next', '后');
        $p->setConfig('first', '最前');
        $p->setConfig('last', '最后');
        $page = $p->show();            //分页的导航条的输出变量
        $this->assign("page", $page);
        $this->assign("list", $list); //数据循环变量
        $this->display();
    }

    public function checkTitle(){
        if(!empty($_POST['title'])){
            $Form = M("Form");
            if($Form->getByTitle($_POST['title'])){
                $this->error('标题已经存在');
            } else {
                $this -> success('标题可以使用!');
            }
        } else {
            $this->error('标题必须！');
        }
    }
    public function insert(){
    	$Form = D("Form");

    	if($vo = $Form->create()){
    		if(false !== $Form->add()){
    				$vo['create_time'] = date('Y-m-d H:i:s', $vo['create_time']);
                    $vo['content'] = nl2br($vo['content']);
                    $this->ajaxReturn($vo, '表单保存成功！',1);
    			} else {
    				$this->error('添加失败');
    			}
    		} else {
    			header("Content-Type:text/html; charset=utf-8");
    			exit($Form->getError() . '[ <a href="javascript:history.back()">返 回</a> ]');
    		}
    }
    public function update(){
        $Form = D("Form");
        if($vo = $Form->create()){
            $list = $Form->save();
            if($list !== false){
                $this->success('数据更新成功!');
            } else {
                $this->error('没有更新任何数据！');
            }
        } else {
            $this->error($Form->getError());
        }
    }
    public function delete(){
        if(!empty($_POST['id'])){
            $Form = M("Form");
            $result = $Form->delete($_POST['id']);

            if(false !== $result){
                $this->ajaxReturn($_POST['id'],'删除成功',1);
            } else {
                $this->error('删除出错！');
            }
        } else {
            $this->error('删除项不存在！');
        }
    }
    public function edit(){
        if(!empty($_GET['id'])){
            $Form = M("Form");
            $vo = $Form->getById($_GET['id']);
            if($vo){
                $this->assign('vo',$vo);
                $this->display();
            }else{
                exit('编辑项不存在！');
            }
        }else{
            exit('编辑项不存在！');
        }
    }

}
?>