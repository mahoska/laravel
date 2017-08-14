<?php
class HelloController extends BaseController
{
    public function showIndex($name = '%username%')
    {
        //return 'Hello from controller!';
        //return  View::make('hello.index', array('name'=>'user15'));
        return View::make('hello.index',array('username'=>$name));
    }

    public function showForm()
    {
        return View::make('form.index');
    }

    public function postForm()
    {
        //return Redirect::to('blade');
        return Redirect::route('bladepath');
        //return 'Hello, '.Input::get('login','user').'!';
        //return View::make('hello.post', array('name'=>Input::get('login')));
    }

    public function showBlade()
    {
        return View::make('hello.blade', array('list'=>array(1,2,3,4,5),'item'=>'my text','ival'=>100));
    }
}
