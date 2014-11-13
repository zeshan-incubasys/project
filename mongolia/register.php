<?php include('header.php') ?>
<!-- Hero Section -->
<section id="reg-bg">
    <div class="container">
        <div class="home-bg">
            <div class="hero-content text-center form-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 style="color: #ffffff !important;">Register Your Interest</h2>
                            <div class="sub-title">Welcome to the registration form for the Mongolia Business Congress Dubai 24th November 2014.

                                The Congress entry is free of charge. However, the entry will be granted only to guests holding an invitation.

                                Whether you are not yet in our guest list and would like to receive an invitation, please fill out this form.</div>
                            <br/>
                            <br/>
                        </div>
                        <div class="col-lg-12 col-md-8 col-sm-10 col-xs-12">
                            <form class="form form-register" method="post" action="http://staging.incubasys.com/mail.php" novalidate>
                                <!--<div class="form-group">
                                 <label for="ticket" class="col-sm-3 col-xs-12 control-label">Ticket type</label>
                                 <div class="col-sm-9 col-xs-12">
                                  <select class="form-control required" name="ticket" id="ticket" placeholder="Select your ticket type">
                                   <option value="1 day - 100$">1 day - 100$</option>
                                   <option value="2 days - 200$">2 days - 200$</option>
                                   <option value="3 days - 150$" selected>3 days - 150$ <span class="highlight">(best value)</span></option>
                                  </select>
                                 </div>
                                </div>-->
                                <div class="row-wrap">
                                    <div class="form-group col-lg-6 ">
                                        <label for="fullname" class="col-sm-3 col-xs-12 control-label">First name</label>
                                        <div class="col-sm-9 col-xs-12">
                                            <input type="text" class="form-control required" name="fname" id="fullname" placeholder="First name">
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6 ">
                                        <label for="surname" class="col-sm-3 col-xs-12 control-label">Surname</label>
                                        <div class="col-sm-9 col-xs-12">
                                            <input type="text" class="form-control required" name="sname" id="surname" placeholder="Surname">
                                        </div>
                                    </div>
                                </div>

                                <div class="row-wrap">
                                    <div class="form-group col-lg-6 ">
                                        <label for="company" class="col-sm-3 col-xs-12 control-label">Company</label>
                                        <div class="col-sm-9 col-xs-12">
                                            <input type="text" class="form-control" name="company" id="company" placeholder="Your Company">
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="position" class="col-sm-3 col-xs-12 control-label">Position</label>
                                        <div class="col-sm-9 col-xs-12">
                                            <input type="text" class="form-control" name="position" id="position" placeholder="Your position">
                                        </div>
                                    </div>
                                </div>

                                <div class="row-wrap">
                                    <div class="form-group col-lg-6">
                                        <label for="email" class="col-sm-3 col-xs-12 control-label">Email</label>
                                        <div class="col-sm-9 col-xs-12">
                                            <input type="email" class="form-control required email" name="email" id="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="phone" class="col-sm-3 col-xs-12 control-label">Phone</label>
                                        <div class="col-sm-9 col-xs-12">
                                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="phone" class="col-sm-2 col-xs-12 control-label" style="text-align:center;">Message</label>
                                    <div class="col-sm-10 col-xs-12">
                                        <textarea class="form-control textarea" style="height:150px;" placeholder="Interest in the Conference" name="message"></textarea>
                                    </div>
                                </div>



                                <button type="submit" class="btn btn-primary btn-sm btn-block">Get started</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php') ?>
