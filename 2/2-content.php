<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-2">
        <div class="container-fluid">
            <div class="swiper-container">                                      
                <div class="swiper-wrapper">
                    <div class="swiper-slide" >
                        
                        <img src="images/2-1.jpg" alt="">
                     
                    </div>
                    <div class="swiper-slide" >
                       
                        <img src="images/2-2.jpg" alt="">
                  
                    </div>
                    <div class="swiper-slide" >
                       
                        <img src="images/2-3.jpg" alt="">
                  
                    </div>
                </div>
                
            </div>
     </div>
   
</div>


