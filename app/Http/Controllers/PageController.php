<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
	 public function index(){
		 $title = "welcome to my page!";
	//  return view('pages.index',compact("title"));
	return view('pages.index')->with('title',$title);
	 	 }
		  public function about(){
			$title = "About Us";
	 return view('pages.about')->with('title',$title);
	 	 }
		  public function services()
		{
			$data = array (
				'title' => "services",
				'services'=> ['web desgin','web development','android app','SEO']

			);
			 return view('pages.services')->with($data);
	 	 }
}
