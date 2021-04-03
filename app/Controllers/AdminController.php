<?php

namespace App\Controllers;
use App\Models\AdminModel;
 
class AdminController extends BaseController
{
	 function __construct()
	   {
	   	$session = session();	
		 if($session->get('userdata'))
		 {
		 return redirect()->to('dashboard');
		 }
		 else
		 {
		  return redirect()->to('login');
		 }
	}
	public function index()
	{
     //include helper form
     helper(['form']);
	 echo view('Admin/Login'); 	
	}
	public function register()
	{
 	
	 echo view('Admin/register');
	 
	}

	function signup(){
		 //set rules validation form
        $rules = [
            'firstname'  => 'required|min_length[3]|max_length[20]',
            'lastname'   => 'required|min_length[3]|max_length[20]',
            'email'      => 'required|min_length[6]|max_length[50]|valid_email|is_unique[admins.email]',
            'password'   => 'required|min_length[6]|max_length[200]'
            // 'confpassword'=> 'matches[password]'
        ];
            
       if($this->validate($rules)){
       	
        
             $model = new AdminModel();
             $data = [
                'first_name'    => $this->request->getVar('firstname'),
                'last_name'     => $this->request->getVar('lastname'),
                'email'         => $this->request->getVar('email'),
                'password'      => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            return view('Admin/Login');
        }else{
            $data['validation'] = $this->validator;
            echo view('Admin/register', $data);
            
        } 
    }
         
    public function auth()
     {

          $session = session();
          $model = new AdminModel();
          $email = $this->request->getVar('email');
          $password = $this->request->getVar('password');
          $data = $model->where('email', $email)->first();
	        if($data){
	            $pass = $data['password'];
	            $verify_pass = password_verify($password, $pass);
	            if($verify_pass){
	                $ses_data = [
	                    'admin_id'       => $data['id'],
	                    'first_name'     => $data['first_name'],
	                    'last_name'      => $data['last_name'],
	                    'email'          => $data['user_email'],
	                    'logged_in'      => TRUE
	                ];
	                $session->set('userdata',$ses_data);
	                return redirect()->to('dashboard');
	            }else{
	                $session->setFlashdata('msg', 'Wrong Password');
	                return redirect()->to('login');
	            }
	        }else{
	            $session->setFlashdata('msg', 'Email not Found');
	            return redirect()->to('login');
	        }
    }
    function dashboard()
    {
    	 echo view('Template/Admin_header');
    	 echo view('Admin/dashboard');
    	 echo view('Template/Admin_footer');
    }

    function logout()
    {
    	$session = session();
    	$session->remove('userdata');
    	return redirect()->to('login');
    }
	
}
