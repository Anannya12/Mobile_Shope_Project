<?php
    $item_id=$_GET['item_id']??1;
    foreach($product->getData() as $item):
        if($item['item_id']==$item_id):
?>
<!--   product  -->
<section id="product" class="py-3">
    <div class="container" style="text-align: center;">
        <img src="<?php echo $item['item_image']?? "assets/mbl.png"; ?>" style="height: 400px;" alt="product" class="img-fluid">
                        <br>
                        <br>
                        <br>
                        <h5 class="font-baloo font-size-20"><?php echo $item['item_name']?? 'Unknown'; ?></h5>
                        <small>by <?php echo $item['item_brand']?? 'Brand'; ?></small><br><br>
                        <div class="d-flex" style="padding-left: 350px;">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                              </div>
                              <a href="#" class="px-2 font-rale font-size-14">20,534 ratings | 1000+ answered questions</a>
                        </div><br>
                        <hr class="m-0">

                        <!---    product price       -->
                            
                                <tr class="font-rale font-size-14">
                                    <td>M.R.P:</td>
                                    <td><strike>$162.00</strike></td>
                                </tr><br>
                                <tr class="font-rale font-size-14">
                                    <td>Deal Price:</td>
                                    <td class="font-size-20 text-danger">$<span><?php echo $item['item_price']??0; ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;Inclusive of all taxes</small></td>
                                </tr><br>
                                <tr class="font-rale font-size-14">
                                    <td>You Save:</td>
                                    <td><span class="font-size-16 text-danger">$152.00</span></td>
                                </tr><br><br>
                            
                        <!---    !product price       -->

                         <!--    #policy -->
                            <div id="policy" style="text-align: center; padding-left: 440px;">
                                <div class="d-flex">
                                    <div class="return text-center mr-5">
                                        <div class="font-size-20 my-2 color-second">
                                            <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                        </div>
                                        <a href="#" class="font-rale font-size-12">10 Days <br> Replacement</a>
                                    </div>
                                    <div class="return text-center mr-5">
                                        <div class="font-size-20 my-2 color-second">
                                            <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                        </div>
                                        <a href="#" class="font-rale font-size-12">1 Year <br>Warranty</a>
                                    </div>
                                </div>
                            </div>
                          <!--    !policy -->
                            <hr>

                        <!-- order-details -->
                            <div id="order-details" class="font-rale d-flex flex-column text-dark">
                                <small>Delivery by : Mar 29  - Apr 1</small>
                                <small>Sold by <a href="#">Daily Electronics </a>(4.5 out of 5 | 18,198 ratings)</small>
                                <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 424201</small>
                            </div>
                         <!-- !order-details -->
                                    <!-- color -->
                                        <div class="color my-3"></div>
                                          <div class="d-flex justify-content-between"></div>
                                            <h6 class="font-baloo">Color:</h6>
                                            <span class="button1"></span>
                                            <span class="button1"></span>
                                            <span class="button1"></span>
                                            <span class="button1"></span>
                                          </div>
                                        </div><br>
                                    <!-- !color --> 

                        <!-- size -->
                            <div class="size my-3">
                                <h6 style="text-align:center;" class="font-baloo">Size :</h6><br>
                                <div class="d-flex justify-content-between w-75" style="padding-left: 250px;">
                                    <div class="font-rubik border p-2">
                                        <button class="btn p-0 font-size-14">4GB RAM</button>
                                    </div>
                                    <div class="font-rubik border p-2">
                                        <button class="btn p-0 font-size-14">6GB RAM</button>
                                    </div>
                                    <div class="font-rubik border p-2">
                                        <button class="btn p-0 font-size-14">8GB RAM</button>
                                    </div>
                                </div>
                            </div><br><br>
                        <!-- !size -->
                        <div>
                            <h6 style="text-align: center;" class="font-rubik">Product Description</h6><br><br>
                        <p style="padding-left: 100px; padding-right: 100px;" class="font-rale font-size-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit, delectus officia ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium eligendi eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus, accusantium velit numquam a aliquam vitae vel?</p>
                        </div><br>
                        
                    
                
    </div>    
</section>
    <!--   !product  -->


<?php
    endif;
    endforeach;
?>    