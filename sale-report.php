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
                <div class="container-fluid bg-white">
                  <div class="main-content-area">
                  <div class="d-sm-flex align-items-center justify-content-between mb-2">
                        <h1 class="panel-heading">Sales Report</h1>
                       
                    </div>
                    <form action="" class="sale-form">
                        <div class="form-row">
                            <div class="col form-group">
                                <label for="">Report Type</label>
                                
                                <select name="" id="" class="form-control">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select>
                            </div>    
                            <div class="col form-group">
                                <label for="">Measure</label>
                                <input type="text" name="" id="" class="form-control">
                            </div>
                            <div class="col form-group">
                                <label for="">Date Range</label>
                                <input type="date" name="" id="" class="form-control">
                            </div>
                            <div class="col form-group">
                                <label for="">Comparison</label>
                                <select name="" id="" class="form-control">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select>
                            </div>
                            <div class="col form-group">
                                <label for="">Comparison</label>
                                <button type="submit" name=""  class="btn btn-theme form-control"> Submit  </button>
                            </div>
                            
                        </div>
                    </form>
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-2">
                        <h2 class="panel-heading">Add Representative</h1>
                        <button type="button" class="btn btn-theme mb-3" data-bs-toggle="modal" data-bs-target="#form">
                            Add Representative
                        </button>  
                        <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header border-bottom-0">
                                <h5 class="modal-title" id="exampleModalLabel">Add Representative</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form>
                                <div class="modal-body">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" aria-describedby="representativename" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password2" placeholder="Confirm Password">
                                </div>
                                </div>
                                <div class="modal-footer border-top-0 d-flex justify-content-center">
                                <button type="submit" class="btn btn-theme">Submit</button>
                                </div>
                            </form>
                            </div>
                        </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-md-12">
                        <table class="table table-responsive table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Name</th>
                                            <th>Dealership</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>111</td>
                                            <td>Maruti Baleno</td>
                                            <td>Lorem Ipsum</td>
                                            
                                            <td> <a href="#" class="mr-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#"><i class="fas fa-trash-alt"></i></a></td>
                                        </tr>
                                        <tr>
                                        <td>112</td>
                                            <td>Mahindra Thar</td>
                                            <td>Lorem Ipsum</td>
                                           
                                            <td> <a href="#" class="mr-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#"><i class="fas fa-trash-alt"></i></a></td>
                                        </tr>
                                        <tr>
                                        <td>113</td>
                                            <td>Maruti Swift</td>
                                            <td>Lorem Ipsum</td>
                                            
                                            <td> <a href="#" class="mr-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#"><i class="fas fa-trash-alt"></i></a></td>
                                        </tr>
                                        <tr>
                                        <td>114</td>
                                            <td>Toyota Fortuner</td>
                                            <td>Lorem Ipsum</td>
                                           
                                            <td> <a href="#" class="mr-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#"><i class="fas fa-trash-alt"></i></a></td>
                                        </tr>
                                        <tr>
                                        <td>115</td>
                                            <td>Tata Nexon</td>
                                            <td>Lorem Ipsum</td>
                                            
                                            <td> <a href="#" class="mr-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#"><i class="fas fa-trash-alt"></i></a></td>
                                        </tr>
                                        <tr>
                                        <td>116</td>
                                            <td>Hyundai Creta</td>
                                            <td>Lorem Ipsum</td>
                                            
                                            <td> <a href="#" class="mr-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#"><i class="fas fa-trash-alt"></i></a></td>
                                        </tr>
                                        <tr>
                                        <td>117</td>
                                            <td>Kia Seltos</td>
                                            <td>Lorem Ipsum</td>
                                            
                                            <td> <a href="#" class="mr-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#"><i class="fas fa-trash-alt"></i></a></td>
                                        </tr>
                                        <tr>
                                        <td>118</td>
                                            <td>Hyundai Venue</td>
                                            <td>Lorem Ipsum</td>
                                           
                                            <td> <a href="#" class="mr-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#"><i class="fas fa-trash-alt"></i></a></td>
                                        </tr>
                                        <tr>
                                        <td>119</td>
                                            <td>Maruti Wagon R</td>
                                            <td>Lorem Ipsum</td>
                                            
                                            <td> <a href="#" class="mr-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#"><i class="fas fa-trash-alt"></i></a></td>
                                        </tr>
                                        <tr>
                                        <td>120</td>
                                            <td>Maruti Vitara Brezza</td>
                                            <td>Lorem Ipsum</td>
                                            
                                            <td> <a href="#" class="mr-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#"><i class="fas fa-trash-alt"></i></a></td>
                                        </tr>
                                        <tr>
                                        <td>121</td>
                                            <td>Maruti Alto 800</td>
                                            <td>Lorem Ipsum</td>
                                            
                                            <td> <a href="#" class="mr-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#"><i class="fas fa-trash-alt"></i></a></td>
                                        </tr>
                                        <tr>
                                        <td>122</td>
                                            <td>Hyundai Santro</td>
                                            <td>Lorem Ipsum</td>
                                            
                                            <td> <a href="#" class="mr-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#"><i class="fas fa-trash-alt"></i></a></td>
                                        </tr>
                                        <tr>
                                        <td>123</td>
                                            <td>Renault KWID</td>
                                            <td>Lorem Ipsum</td>
                                            
                                            <td> <a href="#" class="mr-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#"><i class="fas fa-trash-alt"></i></a></td>
                                        </tr>
                                        <tr>
                                        <td>124</td>
                                            <td>Maruti Wagon R</td>
                                            <td>Lorem Ipsum</td>
                                            
                                            <td> <a href="#" class="mr-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#"><i class="fas fa-trash-alt"></i></a></td>
                                        </tr>
                                        <tr>
                                        <td>125</td>
                                            <td>Lexus NX</td>
                                            <td>Lorem Ipsum</td>
                                            
                                            <td> <a href="#" class="mr-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#"><i class="fas fa-trash-alt"></i></a></td>
                                        </tr>
                                        <tr>
                                        <td>126</td>
                                            <td>Hyundai i20</td>
                                            <td>Lorem Ipsum</td>
                                            
                                            <td> <a href="#" class="mr-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#"><i class="fas fa-trash-alt"></i></a></td>
                                        </tr>
                                        <tr>
                                        <td>127</td>
                                            <td>Skoda Slavia</td>
                                            <td>Lorem Ipsum</td>
                                            
                                            <td> <a href="#" class="mr-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#"><i class="fas fa-trash-alt"></i></a></td>
                                        </tr>
                                        <tr>
                                        <td>128</td>
                                            <td>Jeep Compass Trailhawk</td>
                                            <td>Lorem Ipsum</td>
                                            
                                            <td> <a href="#" class="mr-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#"><i class="fas fa-trash-alt"></i></a></td>
                                        </tr>
                                        <tr>
                                        <td>129</td>
                                            <td>Renault Triber</td>
                                            <td>Lorem Ipsum</td>
                                            
                                            <td> <a href="#" class="mr-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#"><i class="fas fa-trash-alt"></i></a></td>
                                        </tr>
                                        <tr>
                                        <td>130</td>
                                            <td>Mini Cooper SE</td>
                                            <td>Lorem Ipsum</td>
                                            
                                            <td> <a href="#" class="mr-2"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#"><i class="fas fa-trash-alt"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                        </div>
                    </div>

                  </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           
 
    <?php

require_once("include/footer.php") ?>