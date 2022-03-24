<?php

require_once("include/header.php") ?>
 
<?php

require_once("include/sidebar.php") ?>
<!-- <body id="page-top"> -->

    <!-- Page Wrapper -->
   

      

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">


            <?php

require_once("include/navbar.php") ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
                      <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="heading h4 mb-0">New Client</h1>
                      </div>
                      <div class="card">
                      <div class="card-body">
                      <div class="row justify-content-center" id=#wrapper>

                <form method="post" action="include/function.php" enctype="multipart/form-data">

                 <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                    <input type="file" class= "form-control" accept="image/*" name="image" id="focus"  placeholder="select photo" required/>
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <input type="text" class= "form-control" id="focus" name="firstname" placeholder="Firstname" required/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <input type="text" class="form-control" id="focus" name="lastname"  placeholder="Lastname" required/>
                    </div> 
                </div>
                </div>

                <div class="row">
                <div class="col-md-6">
                    <div class="form=group">
                    <input type="email" class= "form-control" id="focus" name="email" placeholder="Email" required/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <input type="number" class="form-control" id="focus" pattern="/^-?\d+\.?\d*$/" onkeypress="if(this.value.length==10) return false;" name="phone" placeholder="Phone-Number" required/>
                    </div> 
                </div>
                </div>

                <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                    <input type="text" class= "form-control" id="focus" name="address" placeholder="Address" required/>
                    </div>
                </div>
                </div>
                
                

                

                <div class="text-center">
                <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                    <button type="submit" name="add_client"  class="btn btn-primary">submit</button>
                    </div>
                    </div>
                </div>
                </div>

                </div>
                                    </form>
                      <?php

require_once("include/footer.php") ?>
 

