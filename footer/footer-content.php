<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-footer">
    <div class="container">
        <div class="row">
             <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="panel2">
                    <h3> Contact us</h3>
                    <div class="footer-text">
                        <p> <i class="fa fa-phone"></i> +31 071 3123456</p>
                        <p> <i class="fa fa-envelope-o"></i> info@the restaurant.com</p>
                        <p> <i class="fa fa-map-marker"></i> New York City</p>  
                        <p>Find us on :</p>
                        <p> 
                            <a href="#"><i class=" one fa fa-twitter-square"></i></a>
                            <a href="#"><i class=" one fa fa-facebook-square"></i></a>
                            <a href="#"><i class=" one fa fa-linkedin-square"></i></a>    
                        </p>
                    </div>
                </div>
            </div>
             <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="panel2">
                    <h3> Come visit us</h3>
                    <div id="map-container-google-1" class="embed-responsive embed-responsive-16by9" style="width: 200px; ">
                        <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" class="embed-responsive-item"
    style="border:0" allowfullscreen></iframe>
</div>
                </div>
            </div>
             <div class="col-md-3 col-sm-12 col-xs-6" >
                <div class="panel2">
                    <h3> Open daily!</h3>
                    <div class="footer-text2"> 
                        <p> <strong>Mon.</strong>"17.00-21.00"
                            <br>
                            <strong>Tue.-Wed.</strong>"16.30-21.00"
                            <br>
                            <strong>Thu.-Sat</strong>"16.30-22.00"
                            <br>
                            <strong>Sun.</strong>"11.00-21.00" 
                        </p>
                        <p> <i> Kitchens time may vary </i> </p>
                        <p> <strong> Need help getting home ?</strong>
                            <br> "We will call a lab for you! "
                        </p>
                        <p> <a class="CLGD" href="#"> Get in touch!</a></p>
                    </div>
                </div>
            </div>
             <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="panel2">
                    <h3> Recent tweets</h3>
                    <div class="footer-text3"> 
                        <ul style="list-style: none;" >
                            <li>
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                               <span class="color-text"> RT 
                                    <a class="CLGD" href="#"> @brianleejackson </a> 
                                    : "Kinsta provides us with 
                                    enormous relief in the daily routine of monitoring and 
                                    maintaining a fast and secure "
                                    <a class="CLGD  " href="#">#Wordpress... </a>
                                </span>
                                <a class="nn" href="#">5 days ago </a>
                            </li>
                            <li>
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                <span class="color-text"> RT 
                                    <a class="CLGD" href="#"> @Danielpataki </a> 
                                    :Rolling out Google Cloud's Compute-Optimized (C2) VMs to Everyone
                                    <a class="CLGD  " href="#">https://t.co/G36IBtUN5J</a>
                                    <a class="CLGD  " href="#">#googlecloud</a>
                                    <a class="CLGD  " href="#">#webhosting</a>
                                    <br>
                                    via
                                    <a class="CLGD  " href="#">@k...</a>
                                </span>
                                <a class="nn" href="#">7 days ago </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

