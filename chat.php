<?php

require_once("include/header.php") ?>
  <?php

require_once("include/navbar-one.php") ?>
<section id="chatroom-section">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div id="messages-tabs">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="true">Messages</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contacts-tab" data-bs-toggle="tab" data-bs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">Contacts</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                        <div class="row">
                            <div class="col-sm-3 col-xs-12 ">
                                <div id="plist" class="people-list">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-search"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Search...">
                                    </div>
                                    <ul class="list-unstyled chat-list mt-0 mb-0 p-2">
                                        <li class="active">
                                            <img src="img/chat-user.png" alt="avatar">
                                            <div class="about">
                                                <div class="name">Vincent Porter</div>
                                                <div class="status"> <i class="fa fa-circle offline"></i> left 7 mins ago </div>                                            
                                            </div>
                                        </li>
                                        <li class="">
                                            <img src="img/chat-user.png" alt="avatar">
                                            <div class="about">
                                                <div class="name">Aiden Chavez</div>
                                                <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                            </div>
                                        </li>
                                        <li class="">
                                            <img src="img/chat-user.png" alt="avatar">
                                            <div class="about">
                                                <div class="name">Mike Thomas</div>
                                                <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                            </div>
                                        </li>                                    
                                        <li class="">
                                            <img src="img/chat-user.png" alt="avatar">
                                            <div class="about">
                                                <div class="name">Christian Kelly</div>
                                                <div class="status"> <i class="fa fa-circle offline"></i> left 10 hours ago </div>
                                            </div>
                                        </li>
                                        <li class="">
                                            <img src="img/chat-user.png" alt="avatar">
                                            <div class="about">
                                                <div class="name">Monica Ward</div>
                                                <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                            </div>
                                        </li>
                                        <li class="">
                                            <img src="img/chat-user.png" alt="avatar">
                                            <div class="about">
                                                <div class="name">Dean Henry</div>
                                                <div class="status"> <i class="fa fa-circle offline"></i> left 10 hours ago </div>
                                            </div>
                                        </li>
                                        <li class="">
                                            <img src="img/chat-user.png" alt="avatar">
                                            <div class="about">
                                                <div class="name">Dean Henry</div>
                                                <div class="status"> <i class="fa fa-circle offline"></i> left 10 hours ago </div>
                                            </div>
                                        </li>
                                        <li class="">
                                            <img src="img/chat-user.png" alt="avatar">
                                            <div class="about">
                                                <div class="name">Dean Henry</div>
                                                <div class="status"> <i class="fa fa-circle offline"></i> left 10 hours ago </div>
                                            </div>
                                        </li>
                                        <li class="">
                                            <img src="img/chat-user.png" alt="avatar">
                                            <div class="about">
                                                <div class="name">Dean Henry</div>
                                                <div class="status"> <i class="fa fa-circle offline"></i> left 10 hours ago </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="chat chat-box col-sm-9 col-xs-12">
                                <div class="chat-header clearfix">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                                            </a>
                                            <div class="chat-about">
                                                <h6 class="m-b-0">Aiden Chavez</h6>
                                                <small>Last seen: 2 hours ago</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-history">
                                    <ul class="m-b-0">
                                        <li class="clearfix">
                                            <div class="message-data text-right">
                                                <span class="message-data-time">10:10 AM, Today</span>
                                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">
                                            </div>
                                            <div class="message other-message float-right"> Aenean euismod purus odio </div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="message-data">
                                                <span class="message-data-time">10:12 AM, Today</span>
                                            </div>
                                            <div class="message my-message">Sausd Phasellus venenatis quam eu lobortis</div>                                    
                                        </li>                               
                                        <li class="clearfix">
                                            <div class="message-data">
                                                <span class="message-data-time">10:15 AM, Today</span>
                                            </div>
                                            <div class="message my-message">Sausd Phasellus venenatis quam eu lobortis</div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="row chat-message clearfix">
                                    <div class="col-md-11 mb-0">
                                        <div class="input-group-prepend">
                                            <a href="#" class="input-group-text"><img src="img/send.png"></a>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Write Something">                                   
                                    </div>
                                    <div class="col-md-1">
                                        <div class="cover-img-box">
                                            <a href="#" class="add-image">
                                                <img src="img/add-new.png" alt="">
                                                <h3>Add Image</h3>
                                            </a>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                        <div class="row">
                            <div class="col-sm-3 col-xs-12 ">
                                <div id="plist" class="people-list">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-search"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Search...">
                                    </div>
                                    <div class="contacts">
                                        <h2 class="contacts__title">My contacts</h2>
                                        <section class="contacts__section">
                                            <h2 class="contacts__subtitle">A</h2>
                                            <ul class="contacts__list">
                                            <li class="contacts__item">Ty Adamson</li>
                                            <li class="contacts__item">Elyse Andrews</li>
                                            <li class="contacts__item">Judith Aronson</li>
                                            <li class="contacts__item">Liv Assimos</li>
                                            </ul>
                                        </section>
                                        <section class="contacts__section">
                                            <h2 class="contacts__subtitle">B</h2>
                                            <ul class="contacts__list">
                                            <li class="contacts__item">Aaron Bacon</li>
                                            <li class="contacts__item">Eric Bailey</li>
                                            <li class="contacts__item">Jordan Beyer</li>
                                            <li class="contacts__item">Aditi Bhandari</li>
                                            <li class="contacts__item">Judy Blomquist</li>
                                            <li class="contacts__item">Mike Borsare</li>
                                            </ul>
                                        </section>
                                        <section class="contacts__section">
                                            <h2 class="contacts__subtitle">C</h2>
                                            <ul class="contacts__list">
                                            <li class="contacts__item">Lindsay Cardinale</li>
                                            <li class="contacts__item">Alvin Chang</li>
                                            <li class="contacts__item">Marlene Chow</li>
                                            <li class="contacts__item">Lindsey Christensen</li>
                                            <li class="contacts__item">Tiffany Chu</li>
                                            <li class="contacts__item">Chris Ciocca</li>
                                            </ul>
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <div class="chat chat-box col-sm-9 col-xs-12">

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