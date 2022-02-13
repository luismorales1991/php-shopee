<?php 
    $item_id = $_GET["item_id"];
    foreach($product->getData() as $item):
        if($item["item_id"] == $item_id):
?>

<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $item["item_image"] ?>" alt="product" class="img-fluid">
                <div class="row pt-4 font-size-16 font-baloo">
                    <div class="col">
                        <button class="btn btn-danger form-control">Proceed to Buy</button>
                    </div>
                    <div class="col">
                    <?php 
                        if(in_array($item["item_id"],$Cart->getCartId($product->getData("cart")))){
                            echo '<button type="submit" disabled class="btn btn-success font-size-16 form-control">In the Cart</button>';
                        }else{
                            echo '<button type="submit" name="top_sale_submit" class="btn btn-warning form-control font-size-16">Add to Cart</button>';
                        }
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-baloo font-size-20"><?php echo $item["item_name"] ?></h5>
                <small>by <?php echo $item["item_brand"] ?></small>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <a href="#" class="px-2 font-rale font-size-14">
                        20,534 rating | 1000+ answered questions
                    </a>
                </div>
                <hr class="m-0">
                <table class="my-3">
                    <tr class="font-rale font-size-14">
                        <td>M.R.P</td>
                        <td><strike>$162.00</strike></td>
                    </tr>
                    <tr class="font-rale font-size-16">
                        <td>Deal Price</td>
                        <td class="font-size-14">
                            <span class="text-danger font-size-20">$<?php echo $item["item_price"] ?></span>
                            <small>&nbsp;&nbsp; Include off all taxes</small>
                        </td>
                    </tr>
                    <tr class="font-rale font-size-16">
                        <td>Your Save</td>
                        <td>
                            <span class="font-size-16 text-danger">$10.00</span>
                        </td>
                    </tr>
                </table>

                <div id="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-retweet border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">10 Days <br>Replacement</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-truck border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">Daily Tuition <br>Delivered</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-check-double border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">1 Year <br>Warranty</a>
                        </div>
                    </div>
                </div>
                <hr>
                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                    <small>Delivery by: Mar 29 - Apr 1</small>
                    <small>Sold by <a href="#">Daily Electronics</a>(4.5 out of 5 | 18,198 ratings)</small>
                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Delivery to Customer - 42020</small>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="color my-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-baloo">Color:</h6>
                                <div class="p-2 color-yellow-bg rounded-circle">
                                    <button class="btn font-size-14"></button>
                                </div>
                                <div class="p-2 color-primary-bg rounded-circle">
                                    <button class="btn font-size-14"></button>
                                </div>
                                <div class="p-2 color-second-bg rounded-circle">
                                    <button class="btn font-size-14"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="qty d-flex">
                            <h6 class="font-baloo">Qty:</h6>
                            <div class="px-4 d-flex font-rale">
                                <button data-id="pro1" class="qty-down border bg-light">
                                    <i class="fas fa-angle-down"></i>
                                </button>
                                <input data-id="pro1" type="text" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                <button data-id="pro1" class="qty-up border bg-light">
                                    <i class="fas fa-angle-up"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="size my-3">
                    <h6 class="font-baloo">Size: </h6>
                    <div class="d-flex justify-content-between w-75">
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
                </div>
            </div>

            <div class="pt-5 col-12">
                <h6 class="font-rubik">Product Description</h6>
                <hr>
                <p class="font-rale font-size-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo fugit consequuntur sequi tempora saepe eaque cupiditate accusantium animi omnis, ipsum asperiores quaerat libero eius eos repellendus voluptate ut sit ea? Lorem
                    ipsum dolor sit amet consectetur adipisicing elit. Veritatis vel alias quaerat eum, repellendus aperiam necessitatibus. Corrupti eius atque eaque aliquid vel officiis optio quae mollitia dolor ducimus at, ullam, alias odio
                    maiores veniam doloremque deleniti repellat vitae! Saepe maiores nobis qui vero, illum consequatur hic soluta, architecto sint nulla repudiandae! Dolorum molestiae rerum natus similique sunt quos eveniet reprehenderit.</p>
                <p class="font-rale font-size-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo fugit consequuntur sequi tempora saepe eaque cupiditate accusantium animi omnis, ipsum asperiores quaerat libero eius eos repellendus voluptate ut sit ea? Lorem
                    ipsum dolor sit amet consectetur adipisicing elit. Veritatis vel alias quaerat eum, repellendus aperiam necessitatibus. Corrupti eius atque eaque aliquid vel officiis optio quae mollitia dolor ducimus at, ullam, alias odio
                    maiores veniam doloremque deleniti repellat vitae! Saepe maiores nobis qui vero, illum consequatur hic soluta, architecto sint nulla repudiandae! Dolorum molestiae rerum natus similique sunt quos eveniet reprehenderit.</p>

            </div>
        </div>
    </div>
</section>

<?php 
endif;
endforeach;
?>