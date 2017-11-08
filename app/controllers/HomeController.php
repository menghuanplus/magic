<?php

/**
* \HomeController
*/
class HomeController extends BaseController
{
  
	public function home()
	{	
		$article = Article::first();
		$result = [
			"title" 	  => "M Framework",
			"description" => "轻量级PHP框架"
		];
		$this->display('home/home', ['result' => $result]);
	}
}