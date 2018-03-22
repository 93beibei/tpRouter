<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller
{
    public function index()
    {
        $this->display('Login/login');
    }


    public function welcome()
    {
        $this->display('Login/welcome');
    }



    public function loginIndx(){
        $post = $_POST;
        $User = M("User");
        $where['username'] = $post['username'];
        $data = array();
        $userData = $User->where($where)->field('username,pwd')->select();
        if(is_array($userData) && !empty($userData)){
            if($post['pwd'] != '' && $post['pwd'] == $userData[0]['pwd']){
                session('username' , $post['username']);
                $data['status'] = 1;
                $data['msg'] = '欢迎'.$post['username'].'进入～～～～～';
            }else{
                $data['status'] = -1;
                $data['msg'] = '密码错误，请重新输入';
            }
        }else{
            $data['status'] = -1;
            $data['msg'] = '用户名错误，请重新输入';
        }

        $this->ajaxReturn($data);
    }




}