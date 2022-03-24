<?php

require_once("include/header.php") ?>
  <?php

require_once("include/navbar-one.php") ?>
                    <section id="chatroom-section" class="main-content-area">
                    <div class="container">
                    <div class="row grey-border p-4">
                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                            <div class="row left-content-wrap">
                                <div class="col-md-8">
                                    <div class="contract-profile">
                                        <img src="img/contract-user.png">
                                        <div class="contract-info">
                                            <div class="name"><span>Name of the Project</span></div>
                                            <div class="contract-info">
                                                <img src="img/verified.png">Completed Feb 05, 2022
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex justify-content-end complete-check">
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="inlineCheckbox3">Mark as Complete</label>
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                    </div>
                                </div>
                            </div>
                            <div class="row contract-tabs">
                                <div class="col-md-12">                                 
                                    <nav>
                                        <div class="nav nav-tabs contract-tabs" id="nav-tab" role="tablist">
                                            <button class="nav-link active" id="nav-messages-tab" data-bs-toggle="tab" data-bs-target="#nav-messages" type="button" role="tab" aria-controls="nav-messages" aria-selected="true">Messages & Files</button>
                                            <button class="nav-link" id="nav-terms-tab" data-bs-toggle="tab" data-bs-target="#nav-terms" type="button" role="tab" aria-controls="nav-terms" aria-selected="false">Terms & Settings</button>
                                            <button class="nav-link" id="nav-feedback-tab" data-bs-toggle="tab" data-bs-target="#nav-feedback" type="button" role="tab" aria-controls="nav-feedback" aria-selected="false">Feedback</button>
                                        </div>
                                    </nav>
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-messages" role="tabpanel" aria-labelledby="nav-messages-tab">
                                            <div class="contracts-tabs">
                                                <h2>Party A</h2>
                                                <div class="contract-tab-content d-flex justify-content-between">
                                                    <div>
                                                        <p>Name</p>
                                                        <p>Email</p>
                                                        <p>Address</p>
                                                        <p>Deal Amount</p>
                                                    </div>
                                                    <div class="text-right">
                                                        <p>Michael Stark</p>
                                                        <p>stark22@mail.com</p>
                                                        <p>617 Munroe St, Sacramento, CA</p>
                                                        <p>$499.99</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-terms" role="tabpanel" aria-labelledby="nav-terms-tab">
                                            <div class="contracts-tabs">
                                                <h2>Party B</h2>
                                                <div class="contract-tab-content d-flex justify-content-between">
                                                    <div>
                                                        <p>Name</p>
                                                        <p>Email</p>
                                                        <p>Address</p>
                                                        <p>Deal Amount</p>
                                                    </div>
                                                    <div class="text-right">
                                                        <p>Michael Stark</p>
                                                        <p>stark22@mail.com</p>
                                                        <p>617 Munroe St, Sacramento, CA</p>
                                                        <p>$499.99</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-feedback" role="tabpanel" aria-labelledby="nav-feedback-tab">
                                            <div class="contracts-tabs">
                                                <h2>Party C</h2>
                                                <div class="contract-tab-content d-flex justify-content-between">
                                                    <div>
                                                        <p>Name</p>
                                                        <p>Email</p>
                                                        <p>Address</p>
                                                        <p>Deal Amount</p>
                                                    </div>
                                                    <div class="text-right">
                                                        <p>Michael Stark</p>
                                                        <p>stark22@mail.com</p>
                                                        <p>617 Munroe St, Sacramento, CA</p>
                                                        <p>$499.99</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="right-content-wrap contract-right">
                                <h2>Agency</h2>
                                <div class="contract-info-right">
                                    <img src="img/client-img.png">
                                    <h3>Name</h3>
                                    <p>02:30 pm Mon in Germany</p>
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <strong>Listing</strong>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Listing</p>
                                                <p>Listing</p>
                                                <p>Listing</p>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>
                    </div>
                    </section>


 <?php

require_once("include/footer.php") ?>