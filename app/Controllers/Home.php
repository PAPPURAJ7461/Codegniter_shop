<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{

		// echo "string";
	 echo view('Template/header');	
	 echo view('welcome_message');
	 echo view('Template/footer');	
	}
	public function Login()
	{
		// echo "string";
	 echo view('Template/header');	
	 echo view('login');
	 echo view('Template/footer');	
	}
	public function product_details()
	{
		// echo "string";
	 echo view('Template/header');	
	 echo view('product_details');
	 echo view('Template/footer');	
	}
	public function register()
	{
		// echo "string";
	 echo view('Template/header');	
	 echo view('register');
	 echo view('Template/footer');	
	}
	public function contact()
	{
		// echo "string";
	 echo view('Template/header');	
	 echo view('contact');
	 echo view('Template/footer');	
	}
	public function product_summary()
	{
		// echo "string";
	 echo view('Template/header');	
	 echo view('product_summary');
	 echo view('Template/footer');	
	}
}
