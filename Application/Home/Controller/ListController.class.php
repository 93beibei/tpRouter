<?php
namespace Home\Controller;
use Think\Controller;
class ListController extends Controller
{
    public function indexList()
    {
        $this->display('list/list');
    }
}