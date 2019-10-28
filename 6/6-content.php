<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-6">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="panel">
                    <div class="title-1">
                        <div class="hinh" ></div>
                        <h3>
                            <a href="#" class="txt"> We're Open ! </a>
                        </h3>
                        <div class="post">
                            <p> We are so excited to announce that after rebranding,
                                we are officially open! To celebrate, 
                                we had like to offer all of our loyal and 
                                regular visitors with a 15 discount! If
                                you visited us twice within the last year, 
                                and signed up to our newsletter, your discount voucher
                                will be shooting into your shortly! Thank you
                            </p>
                        </div>
                        <div class="meta">
                            <span>
                                By:
                                <a href="#" class="tt"> james </a> 
                            </span>
                            <span>
                                March 15, 2017
                            </span>
                            <span>
                                <a href="#" class="tt"> 3 comments </a> 
                            </span>
                            <span>
                                <a href="#" class="tt"> News </a> 
                            </span>
                        </div>
                    </div>
                </div>

                <div class="panel">
                    <div class="title-1">
                        <h3>
                            <a href="#" class="txt">The food was amazing at the restaurant</a>
                        </h3>
                        <div class="post">
                            <p> Cum sociis natoque penatibus et magnis dis parturient montes,
                                nascetur ridiculus mus. Maecenas sed diam eget risus varius blandit
                                sit amet non magna. Duis mollis, est non commodo luctus, nisi erat
                                porttitor ligula, eget lacinia odio sem nec elit. Curabitur blandit tempus porttitor. Donec sed odio dui. Curabitur blandit tempus porttitor. Expect the best and
                            </p>
                        </div>
                        <div class="meta">
                            <span>
                                By:
                                <a href="#" class="tt"> Lars</a> 
                            </span>
                            <span>
                                February 15, 2017
                            </span>
                            <span>
                                <a href="#" class="tt"> 1  comments </a> 
                            </span>
                            <span>
                                <a href="#" class="tt"> News </a> 
                            </span>
                        </div>
                    </div>
                </div>
                <div class="panel">
                    <div class="title-1">
                        <h3>
                            <a href="#" class="txt">Content demo</a>
                        </h3>
                        <div class="post">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Sed fermentum eros ac ipsum lobortis, a ultrices velit tempus. 
                                Morbi at tortor nec tortor facilisis feugiat id sit amet arcu. 
                                Suspendisse lobortis neque urna, non lobortis ligula condimentum quis.
                                Suspendisse suscipit tempor justo, a blandit magna. Suspendisse id neque ut
                                quam rutrum pulvinar nec sed justo.
                            </p>
                        </div>
                        <div class="meta">
                            <span>
                                By:
                                <a href="#" class="tt"> Lars</a> 
                            </span>
                            <span>
                                March 4, 2016
                            </span>
                            <span>
                                <a href="#" class="tt"> Post Comment </a> 
                            </span>
                            <span>
                                <a href="#" class="tt"> News </a> 
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel">
                    <h3 class="px"> Your Order</h3>
                    <div class="ntn">
                        <p> No products in the cart. </p>
                    </div>
                </div>
                <div class="panel">
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search product...">
                            <button  class="btn" type="submit" value="Search"> Search</button>
                        </div>
                    </form>
                </div>
                <div class="panel">
                    <h3 class="px"> Top Rated Products</h3>
                    <ul>
                        <li>
                            <a class="name" href="#"> Chicken </a>
                            <span class="price"> $5.95 </span>
                        </li>
                         <li>
                            <a class="name" href="#"> Chocolate Moose Cake</a>
                            <span class="price"> $2.50 </span>
                        </li>
                         <li>
                            <a class="name" href="#"> Colossal Cheesecake with Raspberry Sauce </a>
                            <span class="price"> $4.00 </span>
                        </li>
                         <li>
                            <a class="name" href="#"> Flat </a>
                            <span class="price"> $5.95 </span>
                        </li>
                         <li>
                            <a class="name" href="#"> Key Lime Pie </a>
                            <span class="price"> $3.00 </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

