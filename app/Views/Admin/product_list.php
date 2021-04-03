<?php 
 echo view('Template/Admin_header');
 $session = \Config\Services::session();

?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard v3</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v3</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-2 mr-0">
           
            <form action="">
              <select class="custom-select custom-select-md mb-3">
              <option selected>Bulk action</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
              </select>
           
          </div>
          <div class="col-sm-1">
           <button type="button" class="btn btn-outline-primary" id="apply">Apply</button>
          </div>
           </form>
          <div class="col-sm-2">
             <select class="custom-select custom-select-md mb-3">
              <option selected>Select a Cetegory</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
              </select>
          </div>
          <div class="col-sm-3">
            <select class="custom-select custom-select-md mb-3">
              <option selected>Filter by product type</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
              </select>
          </div>
          <div class="col-sm-3">
             <select class="custom-select custom-select-md mb-3">
              <option selected>Filter by stock Status</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
              </select>
          </div>
            <div class="col-sm-1">
           <button type="submit" class="btn btn-outline-primary">Filter</button>
          </div>
         
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
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
              <div class="card-body">
                <table class="table">
                  <thead>
                  <tr class="bg-dark">
                  <th scope="col">
                      <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="form-check-input" id="header_check">
                      <label class="form-check-label" for="exampleCheck1"></label>
                      </div>
                  </th>
                  <th scope="col">
                      <img src='https://media.sproutsocial.com/uploads/2017/02/10x-featured-social-media-image-size.png'
                   alt="Profile Picture" class="img-responsive img-rounded"
                   style="max-height: 30px; max-width: 30px;">
                  </th>
                   <th class="text-primary"scope="col">Name</th>
                  <th scope="col">Stock</th>
                  <th class="text-primary" scope="col">Price</th>
                  <th scope="col">Cetegory</th>
                  <th scope="col">Date</th>
                   <th class="text-warning" scope="col"><i class="fas fa-star"></i></th>
                  </tr>
                  </thead>
                 <?php if(!empty($products)) {?> 
                <?php foreach($products as $value) { ?>
                   
                  <tr>
                    <td>
                       <div class="custom-control custom-checkbox">
                         <input type="checkbox" class="form-check-input" id="<?php echo $value['id'] ?>" value="<?php echo $value['id'] ?>">
                         <label class="form-check-label" for="exampleCheck1"></label>
                      </div>
                    </td>
                    <td>
                      <a href="product_view?id=<?php echo $value['id'] ?>"><img src="<?=base_url()?>/public/uploads/products/<?=$value['image'] ?>" class="img-responsive img-rounded"
                   style="max-height: 60px; max-width: 60px;"></a> 
                    </td>
                    <td class="text-primary font-weight-bold">
                       <a href="product_view?id=<?php echo $value['id'] ?>"> <?php echo $value['name'] ?></a>
                    </td>
                    <td >
                       <?php
                       if($value['quantity']>= $value['stock'] )
                       {
                         echo"<span class='text-success'>In Stock</span>"; 
                       }
                       else{
                         echo"<span class='text-danger'>Out off Stock</span>";
                       }
                        ?>
                      
                    </td>
                    <td >
                      <i style="font-size: 13px" class="fas fa-rupee-sign"></i>&nbsp; <?php echo $value['price'] ?>
                    </td>
                    <td><?php echo $value['cetegory'] ?></td>
                    <td><?php echo $value['created_at'] ?></td>
                    <td><span class="badge badge-pill badge-secondary">1</span></td>
                  </tr>
                   <?php }
                     }else{
                      echo"<tr><td colspan='8'><h6 class='text-center text-primary'>Product not found.</h6></td></tr>";
                     }
                    ?>
                  </table>
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