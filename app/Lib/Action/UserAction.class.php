<?php
class UserAction extends Action{
    function index(){
        $this->display();
    }
    function reg(){
        $this->display();
    }
    function regpost(){
        $User=M('User');
        if($User->create()){
            $r=$User->add();
            if($r){
                $this->success('is OK');
            }else{
                $this->error('insert is error!');
            }
        }else{
            echo 1;//$this->error($User->getError());
        }
    }
    function eidt(){
    }
}
/*
 * 
 * and open the template in the editor.
 */
?>
