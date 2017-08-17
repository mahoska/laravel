<?php 

use TinyURL\Repository\LinkRepository;

class IndexController extends BaseController
{
    protected $linkRepo;

    public function __construct(LinkRepository $linkRepo)
    {
        $this->linkRepo = $linkRepo;
    }

    public function showIndex()
    {
        return View::make('index.index');

    }

    public function postUrl()
    {
        $url = Input::get('url');
        $rules = array('url'=>'required|url');
        $validator = Validator::make(array('url'=>$url), $rules);
        if($validator->fails())
        {
            return Redirect::to('/')->withErrors($validator);
        }
        $id = $this->linkRepo->create($url);
        $shortUrl = URL::to('/', array($id));
        return View::make('index.link',['link'=>$shortUrl]);
    }

    public function getRedirect($id)
    {
        $url = $this->linkRepo->find($id);
        if(!$url)
        {
            $url = '/';
        }
        return Redirect::to($url);
    }




}
