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
            <h1 class="m-0">Product View</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product View</li>
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

                <div class="row">
                <img src="<?=base_url()?>/public/uploads/products/<?=$image ?>" class="img-responsive img-rounded"
                style="max-height:200px; max-width:200px;"></a>  

                </div>
                      
 
                <form action="save_product" method="post" enctype="multipart/form-data">
                 
                   <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="product_name">Name</label>
                          <input type="text" class="form-control" name="name" value="<?=$name?>">
                           
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="product_name">Price</label>
                          <input type="number" class="form-control" name="price"  placeholder="Product Price" value="<?=$price?>">
                         
                        </div>
                      </div>
                   </div>
                    <div class="row">
                     
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label for="Short Description">Short Description</label>
                          <textarea class="form-control" name="short_description"><?=$short_description?>
                          </textarea>
                           
                        </div>
                      </div>
                   </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label for="Long Description">Long Description</label>
                          <textarea name="long_description" id="summernote"><?=$long_description?></textarea>
                        </div>
                      </div>
                      
                   </div>
                     
                      <div class="row">
                        <div class="col-sm-12">
                        <div class="form-group">
                          <label for="product_Type">Type</label>
                           <input type="text" class="form-control" name="type" value="<?=$type?>">
                        </div>
                        </div>
                      </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="Quantity">Quantity</label>
                          <input type="number" class="form-control" name="quantity" value="<?=$quantity?>">
                           
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="product_name">Cetegory</label>
                           <input type="text" class="form-control" name="cetegory" value="<?=$cetegory?>">
                        </div>
                      </div>
                   </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="stock">Stock Alert</label>
                          <input type="number" class="form-control" name="stock"  value="<?=$stock?>">
                          
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="product_name">Tag</label>
                          <input type="text" class="form-control" name="tag"  value="<?=$tag?>">
                        </div>
                      </div>
                   </div>
                    <div class="row">
                      <div class="col-sm-6">
                       <label for="product_name">Colour</label>
                       <div style="width:30px;height: 30px; background-color:<?=$colour?>" >
                      </div>
                     <!--  <input type="text" id="colour" name="colour" value="<?=$colour?>" > -->
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="product_name">Size</label>
                            <input type="text" class="form-control" name="tag"  value="<?=$size?>">
                        </div>
                      </div>
                   </div>
                    
                    <a href="product_list" class="btn btn-primary">All Product</a>
                    <a href="edit_product?id=<?=$id?>" class="btn btn-dark">Edit</a>
                    <a href="#" onclick="myFunction()" class="btn btn-danger">Delete</a>
                         <script>
                          function myFunction() {
                           
                          if (confirm("Are You sure want to delete?") == true) 
                             {
                             window.location="delete?id=<?=$id?>"; 
                             } 
                             else 
                             {
                             window.location="product_view?id=<?=$id?>";
                             }
                          
                          }
                          </script>
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
