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
            <h1 class="m-0">Add Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Product</li>
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
                  <?php endif; ?>
                <form action="save_product" method="post" enctype="multipart/form-data">
                   <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="product_name">Name<span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="name" >
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
                          <input type="number" class="form-control" name="price"  placeholder="Product Price">
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
                          <textarea class="form-control" name="short_description"></textarea>
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
                          <textarea name="long_description" id="summernote"></textarea>
                        </div>
                      </div>
                      
                   </div>
                    <div class="row">
                      <div class="col-sm-6">
                         <div class="form-group">
                          <label for="Image">Image<span class="text-danger">*</span></label>
                          <input type="file" class="form-control-file" name="image">
                         <?php if ($session->get('img')) : ?>
                            <p  style="color:red">
                            <?php echo $_SESSION['img']; ?>
                            </p>    
                         <?php endif; ?>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="product_Type">Type<span class="text-danger">*</span></label>
                            <select class="form-control" name="type">
                            <option value=" ">Product type</option>
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
                          <input type="number" class="form-control" name="quantity">
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
                            <option value=" ">Product cetegory</option>
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
                          <input type="number" class="form-control" name="stock">
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
                          <input type="text" class="form-control" name="tag" placeholder="Product tag">

                        </div>
                      </div>
                   </div>
                    <div class="row">
                      <div class="col-sm-6">
                       <label for="product_name">Colour</label>
                       <div id="colorpicker">
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
                    
                    <button type="submit" class="btn btn-primary">Add Product</button>
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
