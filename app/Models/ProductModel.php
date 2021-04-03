<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class ProductModel extends Model{
    protected $table = 'products';
    protected $allowedFields = ['name','short_description','long_description','image','type','price','quantity','stock','status','cetegory','tag','colour','size'];
}