<?php

require_once("include/header.php") ?>
 
<?php

require_once("include/sidebar.php") ?>

   
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            <?php

require_once("include/navbar.php") ?>
                <!-- Begin Page Content -->
                <div class="container-fluid bg-white">
                  <div class="main-content-area">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-2">
                        <h1 class="panel-heading">Add Inventory / Cars</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row grey-border p-3">
                        <div class="col-lg-8 col-md-12 col-sm-12 col-sx-12">
                            <div class="left-content-wrap">
                                <h2 class="wrap-heading">Add Car</h3>
                                <form action="" method="post" enctype="multipart/form-data" class="grey-input">
	                                <div class="form-row">
                                      <div class="col form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Car Make" required="">
                                      </div> 
                                      <div class="col form-group">
                                        <input type="text" class="form-control" name="" placeholder="Model" required="">
                                      </div> 
                                  </div> 
                                  <div class="form-row">
                                      <div class="col form-group">
                                        <input type="text" class="form-control" name="" placeholder="Color" required="">
                                      </div> 
                                      <div class="col form-group">
                                        <input type="text" class="form-control" name="" placeholder="Mileage" required="">
                                      </div> 
                                  </div> 
                                  <div class="form-row">
                                      <div class="col form-group">
                                        <input type="number" class="form-control" name="" placeholder="Price" required="">
                                      </div> 
                                      <div class="col form-group">
                                        <select name="availabilty" class="form-control">
                                          <option>Availabilty</option>
                                          <option>Availabilty</option>
                                          <option>Availabilty</option>
                                        </select>
                                      </div> 
                                  </div>
                                  <div class="form-row">
                                      <div class="col form-group">
                                        <input type="number" class="form-control" name="" placeholder="Average Credit score" required="">
                                      </div> 
                                      <div class="col form-group">
                                      <input type="text" class="form-control" name="" placeholder="Location" required="">
                                      </div> 
                                  </div>
                                  
                                  <div class="form-group">
                                    <button type="submit" name="reg_submit"  class="btn btn-theme"> Publish  </button>
                                  </div> 
                                </form>
                                <div class="mb-4"></div>
                               
                             
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 col-sx-12">
                            <div class="right-content-wrap">
                            <h2 class="wrap-heading">Add Images of Car</h3>
                            <div class="row gx-2">
                              <div class="col">
                                <a href="#" class="add-image">
                                  <div class="cover-img-box">
                                    <img src="img/add-new.png" alt="">
                                    <h3>Add Image</h3>
                                  </div>
                                </a>
                              </div>
                              <div class="col">
                                <div class="cover-img-box">
                                  <img src="img/cover-img.png" alt="" class="img-fluid">
                                  
                                </div>
                              </div>
                            </div>
                            <div class="row gx-2 mt-2">
                              <div class="col">
                                <div class="cover-img-box">
                                  <img src="img/cover-img.png" alt="" class="img-fluid">
                                  
                                </div>
                              </div>
                              <div class="col">
                                <div class="cover-img-box">
                                  <img src="img/cover-img.png" alt="" class="img-fluid">
                                  
                                </div>
                              </div>
                            </div>
                            </div>
                            <div class="mb-4"></div>
                           
                        </div>    
                    </div>

                  </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           

    <?php

require_once("include/footer.php") ?>