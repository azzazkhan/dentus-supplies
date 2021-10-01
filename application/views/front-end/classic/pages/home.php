<section class="mt-2">
    <div class="main-content">
        <div class=''>
            <!-- Swiper -->
            <div class="swiper-container banner-swiper">
                <div class="swiper-wrapper">
                    <?php if (isset($sliders) && !empty($sliders)) { ?>
                        <?php foreach ($sliders as $row) { ?>
                            <div class="swiper-slide center-swiper-slide">
                                <a href="<?= $row['link'] ?>" style="width: 100% !important; display: block;">
                                    <img src="<?= base_url($row['image']) ?>" style="width: 100% !important; height: 350px; object-fit: cover;">
                                </a>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination swiper1-pagination"></div>
                <!-- Add Pagination -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</section>

<section class="main-content mt-md-2 mt-sm-0">
    <div class="category-section container-fluid text-center dark-category-section icon-dark-sec">
        <div class="text-center text-white">
            <h1 class="h2"><?= !empty($this->lang->line('category')) ? $this->lang->line('category') : 'Browse Categories' ?></h1>
        </div>
        <!-- Swiper -->
        <div class="swiper-container category-swiper swiper-container-initialized swiper-container-horizontal icon-swiper">
            <div class="swiper-wrapper categgory-bg">
                <?php foreach ($categories as $key => $row) { ?>
                    <div class="swiper-slide">
                        <div class="category-grid">
                            <div class="category-image">
                                <div class="category-image-container">
                                    <a href="<?= base_url('products/category/' . html_escape($row['slug'])) ?>">
                                        <img src="<?= $row['image'] ?>">
                                    </a>
                                    <div class="cat-font-color">
                                        <span><?= html_escape($row['name']) ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination category-swiper-pagination swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
    </div>

    <?php $offer_counter = 0;
    $offers =  get_offers();
    foreach ($sections as $count_key => $row) {
        if (!empty($row['product_details'])) {
            if ($row['style'] == 'default') {
                if ($count_key != 0) {
                    $offer_counter++;
                    if (!empty($offers) && !empty($offers[$count_key - 1])) { ?>
                        <a href="<?= $offers[$count_key - 1]['link'] ?>">
                            <img class="img-fluid lazy" style="width: 100% !important; height: 350px; object-fit: cover;" data-src="<?= base_url($offers[$count_key - 1]['image']) ?>">
                        </a>
                <?php }
                } ?>
                <!-- Default Style Design-->
                <div class="product-style-default product-section py-2 bg-white mt-2 mb-2">
                    <div class="swiper-container product-image-swiper">
                        <div class="my-4 featured-section-title">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="section-title"><?= ucfirst($row['title']) ?></h3>
                                </div>
                                <div class="text-left my-auto title-sm col-6"><?= strip_tags($row['short_description']) ?></div>
                                <div class="col-6 text-right"><a href="<?= base_url('products/section/' . $row['id'] . '/' . $row['slug']) ?>" class="featured-section-view-more"><?= !empty($this->lang->line('view_more')) ? $this->lang->line('view_more') : 'View More' ?></a>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div <?= ($is_rtl == true) ? "dir='rtl'" : ""; ?> class="swiper-wrapper">
                            <?php foreach ($row['product_details'] as $product_row) { ?>
                                <div class="swiper-slide">
                                    <div class="product-grid">
                                        <aside class="add-fav">
                                            <button type="button" class="btn <?= ($product_row['is_favorite'] == 1) ? '' : 'far' ?> fa-heart add-to-fav-btn <?= ($product_row['is_favorite'] == 1) ? 'fa text-danger' : '' ?>" data-product-id="<?= $product_row['id'] ?>"></button>
                                        </aside>
                                        <div class="product-image">
                                            <div class="product-image-container">
                                                <a href="<?= base_url('products/details/' . $product_row['slug']) ?>">
                                                    <img class="pic-1" src="<?= $product_row['image_sm'] ?>">
                                                </a>
                                            </div>
                                            <ul class="social">
                                                <li>
                                                    <a href="#" class="quick-view-btn" data-tip="Quick View" data-product-id="<?= $product_row['id'] ?>" data-product-variant-id="<?= $product_row['variants'][0]['id'] ?>" data-izimodal-open="#quick-view">
                                                        <i class="fa fa-search"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <?php
                                                    if (count($product_row['variants']) <= 1) {
                                                        $variant_id = $product_row['variants'][0]['id'];
                                                        $modal = "";
                                                    } else {
                                                        $variant_id = "";
                                                        $modal = "#quick-view";
                                                    }
                                                    ?>
                                                    <a href="#" data-tip="Add to Cart" class="add_to_cart" data-product-id="<?= $product_row['id'] ?>" data-product-variant-id="<?= $variant_id ?>" data-izimodal-open="<?= $modal ?>">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                            <?php if (isset($product_row['min_max_price']['special_price']) && $product_row['min_max_price']['special_price'] != '' && $product_row['min_max_price']['special_price'] != 0 && $product_row['min_max_price']['special_price'] < $product_row['min_max_price']['min_price']) { ?>
                                                <span class="product-new-label"><?= !empty($this->lang->line('sale')) ? $this->lang->line('sale') : 'Sale' ?></span>
                                                <span class="product-discount-label"><?= $product_row['min_max_price']['discount_in_percentage'] ?>%</span>
                                            <?php } ?>
                                        </div>
                                        <div class="col-md-12 mb-3 product-rating-small" dir="ltr">
                                            <input type="text" class="kv-fa rating-loading" value="<?= $product_row['rating'] ?>" data-size="sm" title="" readonly>
                                        </div>
                                        <div class="product-content">
                                            <h3 class="title" title="<?= $product_row['name'] ?>">
                                                <a href="<?= base_url('products/details/' . $product_row['slug']) ?>"><?= $product_row['name'] ?></a>
                                            </h3>
                                            <div class="price">
                                                <?php $price = get_price_range_of_product($product_row['id']);
                                                echo $price['range'];
                                                ?>
                                            </div>
                                            <a href="#" class="add-to-cart add_to_cart" data-product-id="<?= $product_row['id'] ?>" data-product-variant-id="<?= $variant_id ?>" data-izimodal-open="<?= $modal ?>"><i class="fas fa-cart-plus"></i> <?= !empty($this->lang->line('add_to_cart')) ? $this->lang->line('add_to_cart') : 'Add To Cart' ?></a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="swiper-button-next product-image-swiper-next"></div>
                    <div class="swiper-button-prev product-image-swiper-prev"></div>
                </div>
                <?php } else if ($row['style'] == 'style_1') {
                if ($count_key != 0) {
                    if (!empty($offers) && !empty($offers[$count_key - 1])) { ?>
                        <a href="<?= $offers[$count_key - 1]['link'] ?>">
                            <img class="img-fluid lazy" style="width: 100% !important; height: 350px; object-fit: cover;" data-src="<?= base_url($offers[$count_key - 1]['image']) ?>">
                        </a>
                <?php }
                }
                ?>
                <!-- Style 1 Design-->
                <div class="product-style-1 product-style-1-right product-section pt-4 pb-4 bg-white mt-2 mb-2 row ">
                    <div class="col-12 col-md-8 row products-list mx-auto">
                        <div class="col-12 my-4 featured-section-title pl-4 mx-0">
                            <div class="row">
                                <div class="col-md-12 px-0">
                                    <h3 class="section-title"><?= ucfirst($row['title']) ?></h3>
                                </div>
                                <div class="text-left my-auto title-sm col-6"><?= strip_tags($row['short_description']) ?></div>
                                <div class="col-6 text-right"><a href="<?= base_url('products/section/' . $row['id'] . '/' . $row['slug']) ?>" class="featured-section-view-more"><?= !empty($this->lang->line('view_more')) ? $this->lang->line('view_more') : 'View More' ?></a>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <?php $product_count = count($row['product_details']) - 1; ?>
                        <?php $last_product = $row['product_details'][$product_count]; ?>
                        <?php foreach ($row['product_details'] as $key => $product_row) { ?>
                            <?php if ($key != $product_count) { ?>
                                <div class="col-md-4 col-6">
                                    <div class="product-grid">
                                        <aside class="add-fav"> <button type="button" class="btn <?= ($product_row['is_favorite'] == 1) ? '' : 'far' ?> fa-heart add-to-fav-btn <?= ($product_row['is_favorite'] == 1) ? 'fa text-danger' : '' ?>" data-product-id="<?= $product_row['id'] ?>"></button>
                                        </aside>
                                        <div class="product-image">
                                            <div class="product-image-container">
                                                <a href="<?= base_url('products/details/' . $product_row['slug']) ?>">
                                                    <img class="pic-1 lazy" data-src="<?= $product_row['image_sm'] ?>">
                                                </a>
                                            </div>
                                            <ul class="social">
                                                <li>
                                                    <a href="#" class="quick-view-btn" data-tip="Quick View" data-product-id="<?= $product_row['id'] ?>" data-product-variant-id="<?= $product_row['variants'][0]['id'] ?>" data-izimodal-open="#quick-view">
                                                        <i class="fa fa-search"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <?php
                                                    if (count($product_row['variants']) <= 1) {
                                                        $variant_id = $product_row['variants'][0]['id'];
                                                        $modal = "";
                                                    } else {
                                                        $variant_id = "";
                                                        $modal = "#quick-view";
                                                    }
                                                    ?>
                                                    <a href="#" data-tip="Add to Cart" class="add_to_cart" data-product-id="<?= $product_row['id'] ?>" data-product-variant-id="<?= $variant_id ?>" data-izimodal-open="<?= $modal ?>">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                            <?php if (isset($product_row['min_max_price']['special_price']) && $product_row['min_max_price']['special_price'] != '' && $product_row['min_max_price']['special_price'] != 0 && $product_row['min_max_price']['special_price'] < $product_row['min_max_price']['min_price']) { ?>
                                                <span class="product-new-label"><?= !empty($this->lang->line('sale')) ? $this->lang->line('sale') : 'Sale' ?></span>
                                                <span class="product-discount-label"><?= $product_row['min_max_price']['discount_in_percentage'] ?>%</span>
                                            <?php } ?>
                                        </div>
                                        <div class="col-md-12 mb-3 product-rating-small" dir="ltr">
                                            <input type="text" class="kv-fa rating-loading" value="<?= $product_row['rating'] ?>" data-size="sm" title="" readonly>
                                        </div>
                                        <div class="product-content">
                                            <h3 class="title" title="<?= $product_row['name'] ?>">
                                                <a href="<?= base_url('products/details/' . $product_row['slug']) ?>"><?= $product_row['name'] ?></a>
                                            </h3>
                                            <div class="price">
                                                <?php $price = get_price_range_of_product($product_row['id']);
                                                echo $price['range'];
                                                ?>
                                            </div>
                                            <a href="#" class="add-to-cart add_to_cart" data-product-id="<?= $product_row['id'] ?>" data-product-variant-id="<?= $variant_id ?>" data-izimodal-open="<?= $modal ?>"><i class="fas fa-cart-plus"></i> <?= !empty($this->lang->line('add_to_cart')) ? $this->lang->line('add_to_cart') : 'Add To Cart' ?></a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <!-- Last Product -->
                    <div class="col-md-4 col-12 style-3-product-right-lg">
                        <div class="product-grid">
                            <aside class="add-fav"> <button type="button" class="btn <?= ($product_row['is_favorite'] == 1) ? '' : 'far' ?> fa-heart add-to-fav-btn <?= ($product_row['is_favorite'] == 1) ? 'fa text-danger' : '' ?>" data-product-id=<?= $last_product['id'] ?>></button>
                            </aside>
                            <div class="product-image">
                                <div class="product-image-container d-flex align-items-center justify-content-center">
                                    <div>
                                        <a href="<?= base_url('products/details/' . $last_product['slug']) ?>">
                                            <img class="pic-1 lazy" data-src="<?= $last_product['image_sm'] ?>">
                                        </a>
                                    </div>
                                </div>
                                <ul class="social">
                                    <li>
                                        <a href="#" class="quick-view-btn" data-tip="Quick View" data-product-id="<?= $last_product['id'] ?>" data-product-variant-id="<?= $last_product['variants'][0]['id'] ?>" data-izimodal-open="#quick-view">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <?php
                                        if (count($last_product['variants']) <= 1) {
                                            $variant_id = $last_product['variants'][0]['id'];
                                            $modal = "";
                                        } else {
                                            $variant_id = "";
                                            $modal = "#quick-view";
                                        }
                                        ?>
                                        <a href="#" data-tip="Add to Cart" class="add_to_cart" data-product-id="<?= $last_product['id'] ?>" data-product-variant-id="<?= $variant_id ?>" data-izimodal-open="<?= $modal ?>">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                    </li>
                                </ul>
                                <?php if (isset($last_product['min_max_price']['special_price']) && $last_product['min_max_price']['special_price'] != '' && $last_product['min_max_price']['special_price'] != 0 && $last_product['min_max_price']['special_price'] < $last_product['min_max_price']['min_price']) { ?>
                                    <div class="home-badge"><span class="badge badge-pill badge-primary">Sale</span></div>
                                <?php } ?>
                            </div>
                            <div class="col-md-12 mb-3 product-rating-small" dir="ltr">
                                <input type="text" class="kv-fa rating-loading" value="<?= $last_product['rating'] ?>" data-size="sm" title="" readonly>
                            </div>
                            <div class="product-content">
                                <h3 class="title" title="<?= $last_product['name'] ?>">
                                    <a href="<?= base_url('products/details/' . $last_product['slug']) ?>"><?= $last_product['name'] ?></a>
                                </h3>
                                <div class="price">
                                    <?php $price = get_price_range_of_product($last_product['id']);
                                    echo $price['range'];
                                    ?>
                                </div>
                                <a href="#" class="add-to-cart add_to_cart" data-product-id="<?= $last_product['id'] ?>" data-product-variant-id="<?= $variant_id ?>" data-izimodal-open="<?= $modal ?>"><i class="fas fa-cart-plus"></i> <?= !empty($this->lang->line('add_to_cart')) ? $this->lang->line('add_to_cart') : 'Add To Cart' ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } else if ($row['style'] == 'style_2') {
                if ($count_key != 0) {
                    if (!empty($offers) && !empty($offers[$count_key - 1])) { ?>
                        <a href="<?= $offers[$count_key - 1]['link'] ?>">
                            <img class="img-fluid lazy" style="width: 100% !important; height: 350px; object-fit: cover;" data-src="<?= base_url($offers[$count_key - 1]['image']) ?>">
                        </a>
                <?php }
                }
                ?>
                <!-- Style 2 Design -->
                <!-- First Product -->
                <?php $first_product = $row['product_details'][0]; ?>
                <div class="product-style-1 product-style-1-left product-section pt-4 pb-4 bg-white mt-2 mb-2 row">
                    <div class="col-md-4 col-12 style-3-product-right-lg">
                        <div class="product-grid">
                            <aside class="add-fav">
                                <button type="button" class="btn <?= ($first_product['is_favorite'] == 1) ? '' : 'far' ?> fa-heart add-to-fav-btn <?= ($first_product['is_favorite'] == 1) ? 'fa text-danger' : '' ?>" data-product-id="<?= $first_product['id'] ?>"></button>
                            </aside>
                            <?php if (isset($first_product['min_max_price']['special_price']) && $first_product['min_max_price']['special_price'] != '' && $first_product['min_max_price']['special_price'] != 0 && $first_product['min_max_price']['special_price'] < $first_product['min_max_price']['min_price']) { ?>
                                <div class="home-badge"><span class="badge badge-pill badge-primary">Sale</span></div>
                            <?php } ?>
                            <div class="product-image">
                                <div class="product-image-container d-flex align-items-center justify-content-center">
                                    <div>
                                        <a href="<?= base_url('products/details/' . $first_product['slug']) ?>">
                                            <img class="pic-1 lazy" data-src="<?= $first_product['image_sm'] ?>">
                                        </a>
                                    </div>
                                </div>
                                <ul class="social">
                                    <li>
                                        <a href="#" class="quick-view-btn" data-tip="Quick View" data-product-id="<?= $first_product['id'] ?>" data-product-variant-id="<?= $first_product['variants'][0]['id'] ?>" data-izimodal-open="#quick-view">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <?php
                                        if (count($first_product['variants']) <= 1) {
                                            $variant_id = $first_product['variants'][0]['id'];
                                            $modal = "";
                                        } else {
                                            $variant_id = "";
                                            $modal = "#quick-view";
                                        }
                                        ?>
                                        <a href="#" data-tip="Add to Cart" class="add_to_cart" data-product-id="<?= $first_product['id'] ?>" data-product-variant-id="<?= $variant_id ?>" data-izimodal-open="<?= $modal ?>">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-12 mb-3 product-rating-small" dir="ltr">
                                <input type="text" class="kv-fa rating-loading" value="<?= $first_product['rating'] ?>" data-size="sm" title="" readonly>
                            </div>
                            <div class="product-content">
                                <h3 class="title" title="<?= $first_product['name'] ?>">
                                    <a href="<?= base_url('products/details/' . $first_product['slug']) ?>"><?= $first_product['name'] ?></a>
                                </h3>
                                <div class="price">
                                    <?php $price = get_price_range_of_product($first_product['id']);
                                    echo $price['range'];
                                    ?>
                                </div>
                                <a href="#" class="add-to-cart add_to_cart" data-product-id="<?= $first_product['id'] ?>" data-product-variant-id="<?= $variant_id ?>" data-izimodal-open="<?= $modal ?>"><i class="fas fa-cart-plus"></i> <?= !empty($this->lang->line('add_to_cart')) ? $this->lang->line('add_to_cart') : 'Add To Cart' ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 row products-list mx-auto">
                        <div class="col-12 my-4 featured-section-title pl-4 mx-0">
                            <div class="row">
                                <div class="col-md-12 px-0">
                                    <h3 class="section-title"><?= ucfirst($row['title']) ?></h3>
                                </div>
                                <div class="text-left my-auto title-sm col-6"><?= strip_tags($row['short_description']) ?></div>
                                <div class="col-6 text-right"><a href="<?= base_url('products/section/' . $row['id'] . '/' . $row['slug']) ?>" class="featured-section-view-more"><?= !empty($this->lang->line('view_more')) ? $this->lang->line('view_more') : 'View More' ?></a>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <?php $product_count = count($row['product_details']) - 1; ?>
                        <?php foreach ($row['product_details'] as $key => $product_row) { ?>
                            <?php if ($key != 0) { ?>
                                <div class="col-md-4 col-6">
                                    <div class="product-grid">
                                        <aside class="add-fav">
                                            <button type="button" class="btn far fa-heart add-to-fav-btn <?= ($product_row['is_favorite'] == 1) ? 'fa text-danger' : '' ?>" data-product-id="<?= $product_row['id'] ?>"></button>
                                        </aside>
                                        <div class="product-image">
                                            <div class="product-image-container">
                                                <a href="<?= base_url('products/details/' . $product_row['slug']) ?>">
                                                    <img class="pic-1 lazy" data-src="<?= $product_row['image_sm'] ?>">
                                                </a>
                                            </div>
                                            <ul class="social">
                                                <li>
                                                    <a href="#" class="quick-view-btn" data-tip="Quick View" data-product-id="<?= $product_row['id'] ?>" data-product-variant-id="<?= $product_row['variants'][0]['id'] ?>" data-izimodal-open="#quick-view">
                                                        <i class="fa fa-search"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <?php
                                                    if (count($product_row['variants']) <= 1) {
                                                        $variant_id = $product_row['variants'][0]['id'];
                                                        $modal = "";
                                                    } else {
                                                        $variant_id = "";
                                                        $modal = "#quick-view";
                                                    }
                                                    ?>
                                                    <a href="#" data-tip="Add to Cart" class="add_to_cart" data-product-id="<?= $product_row['id'] ?>" data-product-variant-id="<?= $variant_id ?>" data-izimodal-open="<?= $modal ?>">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                            <?php if (isset($product_row['min_max_price']['special_price']) && $product_row['min_max_price']['special_price'] != '' && $product_row['min_max_price']['special_price'] != 0 && $product_row['min_max_price']['special_price'] < $product_row['min_max_price']['min_price']) { ?>
                                                <span class="product-new-label"><?= !empty($this->lang->line('sale')) ? $this->lang->line('sale') : 'Sale' ?></span>
                                                <span class="product-discount-label"><?= $product_row['min_max_price']['discount_in_percentage'] ?>%</span>
                                            <?php } ?>
                                        </div>
                                        <div class="col-md-12 mb-3 product-rating-small" dir="ltr">
                                            <input type="text" class="kv-fa rating-loading" value="<?= $product_row['rating'] ?>" data-size="sm" title="" readonly>
                                        </div>
                                        <div class="product-content">
                                            <h3 class="title" title="<?= $product_row['name'] ?>">
                                                <a href="<?= base_url('products/details/' . $product_row['slug']) ?>"><?= $product_row['name'] ?></a>
                                            </h3>
                                            <div class="price">
                                                <?php $price = get_price_range_of_product($product_row['id']);
                                                echo $price['range'];
                                                ?>
                                            </div>
                                            <a href="#" class="add-to-cart add_to_cart" data-product-id="<?= $product_row['id'] ?>" data-product-variant-id="<?= $variant_id ?>" data-izimodal-open="<?= $modal ?>"><i class="fas fa-cart-plus"></i> <?= !empty($this->lang->line('add_to_cart')) ? $this->lang->line('add_to_cart') : 'Add To Cart' ?></a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
                <?php } else if ($row['style'] == 'style_3') {
                if ($count_key != 0) {
                    if (!empty($offers) && !empty($offers[$count_key - 1])) { ?>
                        <a href="<?= $offers[$count_key - 1]['link'] ?>">
                            <img class="img-fluid lazy" style="width: 100% !important; height: 350px; object-fit: cover;" data-src="<?= base_url($offers[$count_key - 1]['image']) ?>">
                        </a>
                <?php }
                }
                ?>
                <!-- Style 3 Design -->
                <div class="product-style-2 product-style-2-left product-section py-2 bg-white mt-2 ">
                    <div class="col-12 col-md-12 row products-list mx-auto">
                        <?php foreach ($row['product_details'] as $product_row) { ?>
                            <div class="col-md-2 col-6">
                                <div class="product-grid">
                                    <aside class="add-fav">
                                        <button type="button" class="btn far fa-heart add-to-fav-btn <?= ($product_row['is_favorite'] == 1) ? 'fa text-danger' : '' ?>" data-product-id="<?= $product_row['id'] ?>"></button>
                                    </aside>
                                    <div class="product-image">
                                        <div class="product-image-container">
                                            <a href="<?= base_url('products/details/' . $product_row['slug']) ?>">
                                                <img class="pic-1 lazy" data-src="<?= $product_row['image_sm'] ?>">
                                            </a>
                                        </div>
                                        <ul class="social">
                                            <li>
                                                <a href="#" class="quick-view-btn" data-tip="Quick View" data-product-id="<?= $product_row['id'] ?>" data-product-variant-id="<?= $product_row['variants'][0]['id'] ?>" data-izimodal-open="#quick-view">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <?php
                                                if (count($product_row['variants']) <= 1) {
                                                    $variant_id = $product_row['variants'][0]['id'];
                                                    $modal = "";
                                                } else {
                                                    $variant_id = "";
                                                    $modal = "#quick-view";
                                                }
                                                ?>
                                                <a href="#" data-tip="Add to Cart" class="add_to_cart" data-product-id="<?= $product_row['id'] ?>" data-product-variant-id="<?= $variant_id ?>" data-izimodal-open="<?= $modal ?>">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <?php if (isset($product_row['min_max_price']['special_price']) && $product_row['min_max_price']['special_price'] != '' && $product_row['min_max_price']['special_price'] != 0 && $product_row['min_max_price']['special_price'] < $product_row['min_max_price']['min_price']) { ?>
                                            <span class="product-new-label"><?= !empty($this->lang->line('sale')) ? $this->lang->line('sale') : 'Sale' ?></span>
                                            <span class="product-discount-label"><?= $product_row['min_max_price']['discount_in_percentage'] ?>%</span>
                                        <?php } ?>
                                    </div>
                                    <div class="col-md-12 mb-3 product-rating-small" dir="ltr">
                                        <input type="text" class="kv-fa rating-loading" value="<?= $product_row['rating'] ?>" data-size="sm" title="" readonly>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="title" title="<?= $product_row['name'] ?>">
                                            <a href="<?= base_url('products/details/' . $product_row['slug']) ?>"><?= $product_row['name'] ?></a>
                                        </h3>
                                        <div class="price">
                                            <?php $price = get_price_range_of_product($product_row['id']);
                                            echo $price['range'];
                                            ?>
                                        </div>
                                        <a href="#" class="add-to-cart add_to_cart" data-product-id="<?= $product_row['id'] ?>" data-product-variant-id="<?= $variant_id ?>" data-izimodal-open="<?= $modal ?>"><i class="fas fa-cart-plus"></i> <?= !empty($this->lang->line('add_to_cart')) ? $this->lang->line('add_to_cart') : 'Add To Cart' ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <div class="col-md-2 col-6">
                            <div class="product-grid">
                                <div class="product-image featured-section">
                                    <div class="product-image-container">
                                        <div class="featured-section-title">
                                            <div class="col-md-12 text-left">
                                                <h3 class="section-title "><?= ucfirst($row['title']) ?></h3>
                                                <div class="title-sm"><?= strip_tags($row['short_description']) ?></div>
                                                <div class="col-6"><a href="<?= base_url('products/section/' . $row['id'] . '/' . $row['slug']) ?>" class="featured-section-view-more"><?= !empty($this->lang->line('view_more')) ? $this->lang->line('view_more') : 'View More' ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } else if ($row['style'] == 'style_4') {
                if ($count_key != 0) {
                    if (!empty($offers) && !empty($offers[$count_key - 1])) { ?>
                        <a href="<?= $offers[$count_key - 1]['link'] ?>">
                            <img class="img-fluid lazy" style="width: 100% !important; height: 350px; object-fit: cover;" data-src="<?= base_url($offers[$count_key - 1]['image']) ?>">
                        </a>
                <?php }
                }
                ?>
                <!-- Style 4 Design -->
                <div class="product-style-2 product-style-2-left product-section py-2 bg-white mt-2 ">
                    <div class="col-12 col-md-12 row products-list mx-auto">
                        <div class="col-md-2 col-6">
                            <div class="product-grid">
                                <div class="product-image featured-section">
                                    <div class="product-image-container">
                                        <div class="featured-section-title">
                                            <div class="col-md-12 text-left">
                                                <h3 class="section-title "><?= ucfirst($row['title']) ?></h3>
                                                <div class="title-sm"><?= strip_tags($row['short_description']) ?></div>
                                                <div class="col-6"><a href="<?= base_url('products/section/' . $row['id'] . '/' . $row['slug']) ?>" class="featured-section-view-more"><?= !empty($this->lang->line('view_more')) ? $this->lang->line('view_more') : 'View More' ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php foreach ($row['product_details'] as $product_row) { ?>
                            <div class="col-md-2 col-6">
                                <div class="product-grid">
                                    <aside class="add-fav">
                                        <button type="button" class="btn far fa-heart add-to-fav-btn <?= ($product_row['is_favorite'] == 1) ? 'fa text-danger' : '' ?>" data-product-id="<?= $product_row['id'] ?>"></button>
                                    </aside>
                                    <div class="product-image">
                                        <div class="product-image-container">
                                            <a href="<?= base_url('products/details/' . $product_row['slug']) ?>">
                                                <img class="pic-1 lazy" data-src="<?= $product_row['image_sm'] ?>">
                                            </a>
                                        </div>
                                        <ul class="social">
                                            <li>
                                                <a href="#" class="quick-view-btn" data-tip="Quick View" data-product-id="<?= $product_row['id'] ?>" data-product-variant-id="<?= $product_row['variants'][0]['id'] ?>" data-izimodal-open="#quick-view">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <?php
                                                if (count($product_row['variants']) <= 1) {
                                                    $variant_id = $product_row['variants'][0]['id'];
                                                    $modal = "";
                                                } else {
                                                    $variant_id = "";
                                                    $modal = "#quick-view";
                                                }
                                                ?>
                                                <a href="#" data-tip="Add to Cart" class="add_to_cart" data-product-id="<?= $product_row['id'] ?>" data-product-variant-id="<?= $variant_id ?>" data-izimodal-open="<?= $modal ?>">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <?php if (isset($product_row['min_max_price']['special_price']) && $product_row['min_max_price']['special_price'] != '' && $product_row['min_max_price']['special_price'] != 0 && $product_row['min_max_price']['special_price'] < $product_row['min_max_price']['min_price']) { ?>
                                            <span class="product-new-label"><?= !empty($this->lang->line('sale')) ? $this->lang->line('sale') : 'Sale' ?></span>
                                            <span class="product-discount-label"><?= $product_row['min_max_price']['discount_in_percentage'] ?>%</span>
                                        <?php } ?>
                                    </div>
                                    <div class="col-md-12 mb-3 product-rating-small" dir="ltr">
                                        <input type="text" class="kv-fa rating-loading" value="<?= $product_row['rating'] ?>" data-size="sm" title="" readonly>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="title" title="<?= $product_row['name'] ?>">
                                            <a href="<?= base_url('products/details/' . $product_row['slug']) ?>"><?= $product_row['name'] ?></a>
                                        </h3>
                                        <div class="price">
                                            <?php $price = get_price_range_of_product($product_row['id']);
                                            echo $price['range'];
                                            ?>
                                        </div>
                                        <a href="#" class="add-to-cart add_to_cart" data-product-id="<?= $product_row['id'] ?>" data-product-variant-id="<?= $variant_id ?>" data-izimodal-open="<?= $modal ?>"><i class="fas fa-cart-plus"></i> <?= !empty($this->lang->line('add_to_cart')) ? $this->lang->line('add_to_cart') : 'Add To Cart' ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
    <?php }
        $offer_counter++;
    } ?>

    <?php $web_settings = get_settings('web_settings', true); ?>
    <?php if (isset($web_settings['app_download_section']) && $web_settings['app_download_section'] == 1) { ?>
        <div class="container-fluid mobile-app call-to-action-section product-section pt-4 pb-4 bg-white mt-2 mb-2">
            <div class="row">
                <div class="col-md-6 col-lg-4 offset-lg-1">

                    <div class="mobile-app-wrapper">
                        <img src="<?= THEME_ASSETS_URL . 'demo/avtars/4861083.jpg' ?>" alt="">
                    </div>

                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="text-area">
                        <h1 class="header-h1">
                            <p class="mobile-app-text"><?= $web_settings['app_download_section_title'] ?></p>
                            <p><?= $web_settings['app_download_section_tagline'] ?></p>
                        </h1>
                        <p class="header-p"><?= $web_settings['app_download_section_short_description'] ?></p>
                        <a href="<?= $web_settings['app_download_section_appstore_url'] ?>" target="_blank"><img src="<?= THEME_ASSETS_URL . 'demo/app-store/app-store.png' ?>" alt="" class="download_section" width="200"></a>
                        <a href="<?= $web_settings['app_download_section_playstore_url'] ?>" target="_blank"><img src="<?= THEME_ASSETS_URL . 'demo/app-store/google-play-store.png' ?>" alt="" class="download_section" width="200"></a>
                    </div>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    <?php } ?>
</section>

<!-- 5 Simple steps of ordering -->
<?php
$custom_steps = [
    // Step 1
    [
        'en' => [
            'title' => 'Create a username and password',
            'description' => 'Configure your username, shipping address, email and phone'
        ],
        'es' => [
            'title' => 'Cree su usuario y contraseña',
            'description' => 'Configure su usuario, dirección de envío, correo electrónico y teléfono'
        ],
    ],
    // Step 2
    [
        'en' => [
            'title' => 'Select your products',
            'description' => 'Add them to your cart'
        ],
        'es' => [
            'title' => 'Seleccione sus productos',
            'description' => 'Agréguelos a su carrito'
        ],
    ],
    // Step 3
    [
        'en' => [
            'title' => 'Place your order',
            'description' => 'We will confirm your order by email'
        ],
        'es' => [
            'title' => 'Realice su pedido',
            'description' => 'Le confirmaremos su orden por correo electrónico'
        ],
    ],
    // Step 4
    [
        'en' => [
            'title' => 'Make your payment',
            'description' => 'Know the status of your order'
        ],
        'es' => [
            'title' => 'Realice su pago',
            'description' => 'Conozca el estatus de su pedido'
        ],
    ],
    // Step 5
    [
        'en' => [
            'title' => 'Receive your products',
        ],
        'es' => [
            'title' => 'Reciba sus productos',
        ],
    ],
];
?>
<div class="steps-wrapper" id="howDoesItWorks">
    <?php
    for ($i = 0; $i < count($custom_steps); $i++) :
        $step = $custom_steps[$i];
        $step_number = $i + 1;
        // Default values
        $step_title = $step['en']['title'];
        $step_description = isset($step['en']['description']) ? $step['en']['description'] : null;
        $step_image = base_url("/uploads/media/2021/step-$step_number.png");
        // Spanish language check
        if ($this->lang->is_loaded["web_labels_lang.php"] == 'spanish') {
            $step_title = $step['es']['title'];
            $step_description = isset($step['es']['description']) ? $step['es']['description'] : $step_description;
        }
    ?>
        <div class="step">
            <div class="icon-wrapper">
                <img src="<?= $step_image; ?>" alt="Step <?= $step_number; ?>" />
            </div>
            <div class="content-wrapper">
                <p class="content"><?= $step_number; ?>. <?= $step_title; ?></p>
                <?php if (is_string($step_description) && strlen($step_description) > 0) : ?>
                    <p class="overlay"><?= $step_description; ?></p>
                <?php endif; ?>
            </div>
        </div>
    <?php endfor; ?>
</div>