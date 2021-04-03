<?php

namespace App\Controllers;
use App\Models\ProductModel;

class ProductController extends BaseController
{
 
   function __construct()
	   {
	   	$session = session();	
		 if(!$session->get('userdata'))
		 {
		 return redirect()->to('login');
		 }
		
	}
 
 function index()
 {
   helper(['form']);
   echo "product_list";
 } 
 function add_product()
 { 
     echo view('Admin/add_product'); 	 
 } 

 //Add product in database
 function save_product()
 { 
 	     $session = session();
        //set rules validation form
        $rules = [
            'name'               => 'required|min_length[3]',
            'price'              => 'required|numeric',
            'short_description'  => 'required',
            'type'               => 'required',
            'quantity'           => 'required',
            'cetegory'           => 'required',
            'stock'              => 'required',
            'tag'                => 'required'    
           
        ];
        
			
			
       if($this->validate($rules)){
       	
             if($imagefile = $this->request->getFiles())
			 {	
			   $img = $imagefile['image'];
			   $name = $img->getName();
			  if(!empty($name))
			  {
			  	
			  	$fileExt = pathinfo($name, PATHINFO_EXTENSION);
                 $size= filesize($img);
                 if($fileExt != "jpg" && $fileExt!= "png" && $fileExt != "jpeg")
                 {
                 	$session->setFlashdata('error', 'Please file upload in "png" and "jpg" formate. ');
	                return redirect()->to('add_product');
                 }
                 elseif ( $size>2097152) {
                 	  $session->setFlashdata('error', 'Please upload your file less than 2MB.');
	                  return redirect()->to('add_product');
                 }
                 elseif($img->isValid() && ! $img->hasMoved())
                   {
                     
					$newName = $img->getRandomName(); //This is if you want to change the file name to encrypted name
					$image= $img->move(ROOTPATH.'public/uploads/products',$newName); 
			      }
			  
			  }
			  else
			   {
			   $session->setFlashdata('img', 'Please select file. ');
			   return redirect()->to('add_product');
			   } 
			} 

             $model = new ProductModel();
             $data = [
                'name'                  => $this->request->getVar('name'),
                'short_description'     => $this->request->getVar('short_description'),
                'long_description'      => $this->request->getVar('long_description'),
                'image'                 =>(isset( $image))?$newName:'',
                'type'                  => $this->request->getVar('type'),
                'price'                 => $this->request->getVar('price'),
                'quantity'              => $this->request->getVar('quantity'),
                'stock'                 => $this->request->getVar('stock'),
                'status'                => 1,
                'cetegory'              => $this->request->getVar('cetegory'),
                'tag'                   => $this->request->getVar('tag'),
                'colour'                => $this->request->getVar('colour'),
                'size'                  => $this->request->getVar('size')
               
            ];
           
            $model->save($data);
            $session->setFlashdata('msg', 'Product successfully Added.');
	       return redirect()->to('add_product');
        }else{
            $data['validation'] = $this->validator;
            echo view('Admin/add_product', $data);
            
        }
 } 

 //show product in product list
 function product_list()
 {
   $model = new ProductModel();
   $data['products'] = $model->findAll();
   echo view('Admin/product_list', $data);
 }
 //product view in admin panel
 function product_view()
 {
 	$id= $_GET['id'];
    $model = new ProductModel();
    $data = $model->where('id', $id)->first();
    echo view('Admin/product_view', $data);
 }
 function edit_product()
 {
 	$session = session();
 	$id= $_GET['id'];
    $model = new ProductModel();
    $data1 = $model->where('id', $id)->first();
    $session->set($data1);
    echo view('Admin/edit_product');
 }

 function update()
 {

  $session = session();
        //set rules validation form
        $rules = [
            'name'               => 'required|min_length[3]',
            'price'              => 'required|numeric',
            'short_description'  => 'required',
            'type'               => 'required',
            'quantity'           => 'required',
            'cetegory'           => 'required',
            'stock'              => 'required',
            'tag'                => 'required'    
           
        ];
        
			
			
       if($this->validate($rules)){
       	    
             if($imagefile = $this->request->getFiles())
			 {	
			   $img = $imagefile['image'];
			   $name = $img->getName();
			 
			  	if(!empty($name))
			  	{
			  	$fileExt = pathinfo($name, PATHINFO_EXTENSION);
                 $size= filesize($img);
                 if($fileExt != "jpg" && $fileExt!= "png" && $fileExt != "jpeg")
                 {
                 	$session->setFlashdata('error', 'Please file upload in "png" and "jpg" formate. ');
	                return redirect()->to('edit_product');
                 }
                 elseif ( $size>2097152) {
                 	  $session->setFlashdata('error', 'Please upload your file less than 2MB.');
	                  return redirect()->to('edit_product');
                 }
                 elseif($img->isValid() && ! $img->hasMoved())
                   {
                     
					$newName = $img->getRandomName(); //This is if you want to change the file name to encrypted name
					$image= $img->move(ROOTPATH.'public/uploads/products',$newName); 
			      }
			  
			  } 
			}
             
             $model = new ProductModel();
             $id=$this->request->getVar('id');

             $data = [
                'name'                  => $this->request->getVar('name'),
                'short_description'     => $this->request->getVar('short_description'),
                'long_description'      => $this->request->getVar('long_description'),
                'image'                 =>(isset( $image))?$newName:$_SESSION["image"],
                'type'                  => $this->request->getVar('type'),
                'price'                 => $this->request->getVar('price'),
                'quantity'              => $this->request->getVar('quantity'),
                'stock'                 => $this->request->getVar('stock'),
                'status'                => 1,
                'cetegory'              => $this->request->getVar('cetegory'),
                'tag'                   => $this->request->getVar('tag'),
                'colour'                => $this->request->getVar('colour'),
                'size'                  => $this->request->getVar('size')
               
            ];
             if($model->update($id,$data)) 
             {
             	 $session->setFlashdata('msg', 'Product successfully Updated.');
	            return redirect()->to('edit_product');
             }
             else{
             	$session->setFlashdata('error', 'Something is wrong.');
	            return redirect()->to('edit_product');
             }
           
        }else{
            $data1['validation'] = $this->validator;
            echo view('Admin/edit_product', $data1);
            
        }

 }

//Delete product
function delete()
{
 $session = session();
  $model = new ProductModel();
 // $id=$_GET['id'];
 $id=5;
 if($model->find($id))
     {

      $model->delete($id);
      $session->setFlashdata('msg', 'Product successfully deleted.');
	  return redirect()->to('product_list');
 	}
 	else
 	{
      $session->setFlashdata('error', 'Product not found.');
	  return redirect()->to('product_list');
 	}
}
}//end class