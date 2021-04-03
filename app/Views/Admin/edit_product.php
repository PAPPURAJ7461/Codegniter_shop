<?php 
 echo view('Template/Admin_header');
 $session = \Config\Services::session();
 $validation =  \Config\Services::validation();

?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Update Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Product</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              
              <div class="card-body">
                  <?php if ($session->get('msg')) : ?>
                  <div class="alert alert-success">
                  <?php echo $_SESSION['msg']; ?>
                  </div>
                  <?php endif; ?>
                  
                  <?php if ($session->get('error')) : ?>
                  <div class="alert alert-danger">
                  <?php echo $_SESSION['error']; ?>
                  </div>
                  <?php endif; 
                   print_r($_SESSION['data'])
                  ?>
                <form action="update_product" method="post" enctype="multipart/form-data">
                   <input type="hidden" class="form-control" name="id"  value="<?=$_SESSION['id']?>">
                   <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="product_name">Name<span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="name"  value="<?=$_SESSION['name']?>">
                            <?php if($validation->getError('name')) {?>
                            <p  style="color:red">
                            <?= $error = $validation->getError('name'); ?>
                            </p>
                            <?php }?>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="product_name">Price<span class="text-danger">*</span></label>
                          <input type="number" class="form-control" name="price"  placeholder="Product Price"  value="<?=$_SESSION['price']?>">
                          <?php if($validation->getError('price')) {?>
                            <p  style="color:red">
                            <?= $error = $validation->getError('price'); ?>
                            </p>
                            <?php }?>
                        </div>
                      </div>
                   </div>
                    <div class="row">
                     
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label for="Short Description">Short Description<span class="text-danger">*</span></label>
                          <textarea class="form-control" name="short_description"><?=$_SESSION['short_description']?></textarea>
                            <?php if($validation->getError('short_description')) {?>
                            <p  style="color:red">
                            <?= $error = $validation->getError('short_description'); ?>
                            </p>
                            <?php }?>
                        </div>
                      </div>
                   </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label for="Long Description">Long Description</label>
                          <textarea name="long_description" id="summernote"><?=$_SESSION['long_description']?></textarea>
                        </div>
                      </div>
                      
                   </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <img src="<?=base_url()?>/public/uploads/products/<?=$_SESSION['image']?>" class="img-responsive img-rounded"
                            style="max-height:200px; max-width:200px;">
                         <div class="form-group mt-1">   
                          <input type="file" class="form-control-file" name="image" value="<?=$_SESSION['image']?>">
                         <?php if ($session->get('img')) : ?>
                            <p  style="color:red">
                            <?php echo $_SESSION['img']; ?>
                            </p>    
                         <?php endif; ?>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label for="product_Type">Type<span class="text-danger">*</span></label>
                            <select class="form-control" name="type">
                            <option ><?=$_SESSION['type']?></option>
                            <option>virtual product</option>
                            <option>Electrical</option>
                            </select>
                            <?php if($validation->getError('type')) {?>
                            <p  style="color:red">
                            <?= $error = $validation->getError('type'); ?>
                            </p>
                            <?php }?>
                        </div>
                      </div>
                   </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="Quantity">Quantity<span class="text-danger">*</span></label>
                          <input type="number" class="form-control" name="quantity" value="<?=$_SESSION['quantity']?>">
                           <?php if($validation->getError('quantity')) {?>
                            <p  style="color:red">
                            <?= $error = $validation->getError('quantity'); ?>
                            </p>
                            <?php }?>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="product_name">Cetegory<span class="text-danger">*</span></label>
                          <select class="form-control" name="cetegory">
                            <option ><?=$_SESSION['cetegory']?></option>
                            <option>Electronic</option>
                            </select>
                             <?php if($validation->getError('cetegory')) {?>
                            <p  style="color:red">
                            <?= $error = $validation->getError('cetegory'); ?>
                            </p>
                            <?php }?>
                        </div>
                      </div>
                   </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="stock">Stock Alert<span class="text-danger">*</span></label>
                          <input type="number" class="form-control" name="stock" value="<?=$_SESSION['stock']?>">
                           <?php if($validation->getError('stock')) {?>
                            <p  style="color:red">
                            <?= $error = $validation->getError('stock'); ?>
                            </p>
                            <?php }?>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="product_name">Tag</label>
                          <input type="text" class="form-control" name="tag" placeholder="Product tag"value="<?=$_SESSION['tag']?>">

                        </div>
                      </div>
                   </div>
                    <div class="row">
                      <div class="col-sm-6">
                       <label for="product_name">Colour</label>
                       <div class="row">
                         <div class="col-sm-1">
                            <div id="colorpicker">
                            </div>
                         </div>
                         <div class="col-sm-1">
                            <div  style="height:30px;width:30px; background-color:<?=$_SESSION['colour']?>">
                            </div>
                         </div>

                       </div>
                      
                         
                      <input type="hidden" id="colour" name="colour" >
                      </div>
                     
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="product_name">Size</label>
                            <select class="form-control" name="size">
                            <option value=" ">Product size</option>
                            <option>SML</option>
                            <option>ML</option>
                            <option>XML</option>
                            </select>
                        </div>
                      </div>
                   </div>
                    
                  
                    <a href="product_list" style="float: right;" class="btn btn-success ml-3">All Product</a>
                   <button type="submit" style="float: right;" class="btn btn-primary ">Update</button>
              </form>
              </div>
            </div>
            <!-- /.card -->

          </div>
          </div>
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
echo view('Template/Admin_footer');
?>
