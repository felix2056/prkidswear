<?php include_once('../includes/header.php'); ?>

<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
    <div class="gf-menu-device-wrapper">
        <div class="close-menu">x</div>
        <div class="gf-menu-device-container"></div>
    </div>
</nav>

<body id="pr-kidswear" class="template-index">
    <div class="wrapper-container">
        <?php include_once('../includes/nav.php'); ?>

        <nav class="breadcrumb" aria-label="breadcrumbs">
            <div class="bread-left">
                <a href="/" title="Back to the frontpage">Home</a>

                <span aria-hidden="true" class="breadcrumb__sep">/</span>

                <span>Boys Tops &amp; T-shirt</span>
            </div>
        </nav>


        <div class="dt-sc-hr-invisible-large"></div>


        <main class="main-content">
            <div class="wrapper">
                <div class="grid__item">
                    <div class="grid__item">
                        <div class="collection-products">

                            <div class="grid__item sidebar-hidden">
                                <div class="collection-list">
                                    <div class="grid-uniform grid-link__container col-main">


                                        <header class="section-header section-header--large">
                                            <div class="toolbar">

                                                <div
                                                    class="view-mode grid__item wide--one-third post-large--two-tenths large--two-tenths">

                                                    <div class="tags-filter">
                                                        <button id="showTagsFilter" class="btn tag-fillter">Filter <i
                                                                class="fa fa-angle-up"></i></button>
                                                    </div>

                                                    <a class="grid btn active" href="grid" title="Grid view"><span
                                                            class="fa fa-th-large" aria-hidden="true"></span></a>
                                                    <a class="list btn" href="list" title="List view"><span
                                                            class="fa fa-th-list" aria-hidden="true"></span></a>
                                                </div>

                                                <div
                                                    class="grid__item wide--five-tenths post-large--eight-tenths large--eight-tenths right">

                                                    <div class="filter-sortby grid__item ">
                                                        <label for="sort-by">Sort by</label>
                                                        <input type="text" id="sort-by">
                                                        <div class="sorting-section">
                                                            <button class="btn dropdown-toggle" data-toggle="dropdown">
                                                                <i class="icon-exchange"></i>
                                                                <span>Featured</span>
                                                                <i class="icon-chevron-down"></i>
                                                            </button>

                                                            <ul class="dropdown-menu" role="menu">
                                                                <li class="active"><a href="manual">Featured</a></li>
                                                                <li><a href="price-ascending">Price, low to high</a>
                                                                </li>
                                                                <li><a href="price-descending">Price, high to low</a>
                                                                </li>
                                                                <li><a href="title-ascending"> A-Z</a></li>
                                                                <li><a href="title-descending">Z-A</a></li>
                                                                <li><a href="created-ascending">Date, old to new</a>
                                                                </li>
                                                                <li><a href="created-descending">Date, new to old</a>
                                                                </li>
                                                                <li><a href="best-selling">Best Selling</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>


                                                </div>

                                            </div>
                                        </header>

                                        <!-- /snippets/collection-sidebar.liquid -->

                                        <script type="text/javascript">
                                        $(window).ready(function($) {
                                            var tagsbutton = document.getElementById('showTagsFilter'),
                                                tagscontent = document.getElementById('tags-filter-content');
                                            if (window.innerWidth >= 768) {
                                                if (tagsbutton != null) {
                                                    tagsbutton.onclick = function() {
                                                        classie.toggle(this, 'closed');
                                                        classie.toggle(tagscontent, 'tags-closed');
                                                        if (classie.has(this, 'closed'))
                                                            $('#showTagsFilter').html(
                                                                "Filter <i class='fa fa-angle-down'></i>");
                                                        else $('#showTagsFilter').html(
                                                            "Filter <i class='fa fa-angle-up'></i>");
                                                    };
                                                }
                                            }
                                            classie.toggle(tagscontent, 'tags-closed');
                                        });
                                        </script>


                                        <div id="tags-filter-content" class="tags-closed">


                                            <div class="collection_sidebar">



                                                <div class="refined-widgets">
                                                    <a href="javascript:void(0)" class="clear-all" style="display:none">
                                                        Clear All
                                                    </a>
                                                </div>
                                                <div class="sidebar-block">
                                                    <div id="shopify-section-sidebar-colors" class="shopify-section">


                                                        <aside class="sidebar-tag color filter tags">
                                                            <div class="widget">
                                                                <h4>
                                                                    <span>Shop By Color</span>
                                                                    <a href="javascript:void(0)" class="clear"
                                                                        style="display:none">
                                                                        <i class="zmdi zmdi-close"></i>
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div class="widget-content">
                                                                <ul>





                                                                    <li class="brown">

                                                                        <input type="checkbox" value="brown">
                                                                        <a href="javascript:void(0)" title="Brown">
                                                                            <img src="//cdn.shopify.com/s/assets/no-image-50-3d8cc48bd078edcd544c8d60f929ed2d8800a3fc52e0f602e84b1767e392bfcd_50x.gif"
                                                                                alt="Brown">
                                                                            <span>Brown</span>
                                                                        </a>
                                                                    </li>







                                                                    <li class="white">

                                                                        <input type="checkbox" value="white">
                                                                        <a href="javascript:void(0)" title="White">
                                                                            <img src="//cdn.shopify.com/s/assets/no-image-50-3d8cc48bd078edcd544c8d60f929ed2d8800a3fc52e0f602e84b1767e392bfcd_50x.gif"
                                                                                alt="White">
                                                                            <span>White</span>
                                                                        </a>
                                                                    </li>







                                                                    <li class="sandal">

                                                                        <input type="checkbox" value="sandal">
                                                                        <a href="javascript:void(0)" title="Sandal">
                                                                            <img src="//cdn.shopify.com/s/assets/no-image-50-3d8cc48bd078edcd544c8d60f929ed2d8800a3fc52e0f602e84b1767e392bfcd_50x.gif"
                                                                                alt="Sandal">
                                                                            <span>Sandal</span>
                                                                        </a>
                                                                    </li>







                                                                    <li class="pink">

                                                                        <input type="checkbox" value="pink">
                                                                        <a href="javascript:void(0)" title="Pink">
                                                                            <img src="//cdn.shopify.com/s/assets/no-image-50-3d8cc48bd078edcd544c8d60f929ed2d8800a3fc52e0f602e84b1767e392bfcd_50x.gif"
                                                                                alt="Pink">
                                                                            <span>Pink</span>
                                                                        </a>
                                                                    </li>







                                                                    <li class="gold">

                                                                        <input type="checkbox" value="gold">
                                                                        <a href="javascript:void(0)" title="Gold">
                                                                            <img src="//cdn.shopify.com/s/assets/no-image-50-3d8cc48bd078edcd544c8d60f929ed2d8800a3fc52e0f602e84b1767e392bfcd_50x.gif"
                                                                                alt="Gold">
                                                                            <span>Gold</span>
                                                                        </a>
                                                                    </li>







                                                                    <li class="green">

                                                                        <input type="checkbox" value="green">
                                                                        <a href="javascript:void(0)" title="Green">
                                                                            <img src="//cdn.shopify.com/s/assets/no-image-50-3d8cc48bd078edcd544c8d60f929ed2d8800a3fc52e0f602e84b1767e392bfcd_50x.gif"
                                                                                alt="Green">
                                                                            <span>Green</span>
                                                                        </a>
                                                                    </li>







                                                                    <li class="almond">

                                                                        <input type="checkbox" value="almond">
                                                                        <a href="javascript:void(0)" title="Almond">
                                                                            <img src="//cdn.shopify.com/s/assets/no-image-50-3d8cc48bd078edcd544c8d60f929ed2d8800a3fc52e0f602e84b1767e392bfcd_50x.gif"
                                                                                alt="Almond">
                                                                            <span>Almond</span>
                                                                        </a>
                                                                    </li>





                                                                </ul>
                                                            </div>
                                                        </aside>









                                                    </div>
                                                    <div id="shopify-section-sidebar-tag-filters"
                                                        class="shopify-section">



                                                        <aside class="sidebar-tag filter tags shop by size 1">

                                                            <div class="widget">
                                                                <h4>
                                                                    <span>Shop By Size </span>
                                                                    <a href="javascript:void(0)" class="clear"
                                                                        style="display:none">
                                                                        <i class="zmdi zmdi-close"></i>
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div class="widget-content">
                                                                <ul>





                                                                    <li>
                                                                        <i></i>
                                                                        <input type="checkbox" value="s">
                                                                        <label>S</label>
                                                                    </li>






                                                                    <li>
                                                                        <i></i>
                                                                        <input type="checkbox" value="m">
                                                                        <label>M</label>
                                                                    </li>






                                                                    <li>
                                                                        <i></i>
                                                                        <input type="checkbox" value="l">
                                                                        <label>L</label>
                                                                    </li>




                                                                </ul>
                                                            </div>
                                                        </aside>





                                                        <aside class="sidebar-tag filter tags shop by brand 2">

                                                            <div class="widget">
                                                                <h4>
                                                                    <span>Shop By Brand </span>
                                                                    <a href="javascript:void(0)" class="clear"
                                                                        style="display:none">
                                                                        <i class="zmdi zmdi-close"></i>
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div class="widget-content">
                                                                <ul>





                                                                    <li>
                                                                        <i></i>
                                                                        <input type="checkbox" value="oskino">
                                                                        <label>Oskino</label>
                                                                    </li>






                                                                    <li>
                                                                        <i></i>
                                                                        <input type="checkbox" value="oreo">
                                                                        <label>Oreo</label>
                                                                    </li>






                                                                    <li>
                                                                        <i></i>
                                                                        <input type="checkbox" value="tastilo">
                                                                        <label>Tastilo</label>
                                                                    </li>






                                                                    <li>
                                                                        <i></i>
                                                                        <input type="checkbox" value="biscoff">
                                                                        <label>Biscoff</label>
                                                                    </li>




                                                                </ul>
                                                            </div>
                                                        </aside>





                                                        <aside class="sidebar-tag filter tags shop by price 3">

                                                            <div class="widget">
                                                                <h4>
                                                                    <span>Shop By Price </span>
                                                                    <a href="javascript:void(0)" class="clear"
                                                                        style="display:none">
                                                                        <i class="zmdi zmdi-close"></i>
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div class="widget-content">
                                                                <ul>





                                                                    <li>
                                                                        <i></i>
                                                                        <input type="checkbox" value="100-200">
                                                                        <label>$100 - $200</label>
                                                                    </li>






                                                                    <li>
                                                                        <i></i>
                                                                        <input type="checkbox" value="200-300">
                                                                        <label>$200 - $300</label>
                                                                    </li>






                                                                    <li>
                                                                        <i></i>
                                                                        <input type="checkbox" value="300-500">
                                                                        <label>$300 - $500</label>
                                                                    </li>






                                                                    <li>
                                                                        <i></i>
                                                                        <input type="checkbox" value="500-700">
                                                                        <label>$500 - $700</label>
                                                                    </li>






                                                                    <li>
                                                                        <i></i>
                                                                        <input type="checkbox" value="700-1000">
                                                                        <label>$700 - $1000</label>
                                                                    </li>




                                                                </ul>
                                                            </div>
                                                        </aside>





                                                    </div>
                                                </div>


                                            </div>

                                        </div>






                                        <div class="products-grid-view">

                                            <ul>












                                                <li class="grid__item item-row  wide--one-quarter post-large--one-third large--one-half medium--one-half small-grid__item"
                                                    id="product-4663262347350">
                                                    <div class="products product-hover-3">
                                                        <div class="product-container">









                                                            <a href="/collections/boys-tops-t-shirt/products/wild-boy-kids-t-shirt"
                                                                class="grid-link">




                                                                <div class="ImageOverlayCa"></div>

                                                                <img src="//cdn.shopify.com/s/files/1/0048/7040/6230/products/Wild-Things-boy-toddler_45ccdc58-3813-4c89-88f5-79d0599a98d9_grande.jpg?v=1588090057"
                                                                    class="featured-image"
                                                                    alt="Wild Boy - Kids T-Shirt">

                                                            </a>
                                                            <div class="product_right_tag  ">


                                                            </div>
                                                            <div class="ImageWrapper">


                                                                <div class="img-whole-btn">
                                                                    <div class="product-button">




                                                                        <a href="javascript:void(0)"
                                                                            id="wild-boy-kids-t-shirt"
                                                                            class="quick-view-text">
                                                                            <i class="icon-eye" aria-hidden="true"></i>
                                                                        </a>



                                                                        <div class="add-to-wishlist">
                                                                            <div class="show">
                                                                                <div
                                                                                    class="default-wishbutton-wild-boy-kids-t-shirt loading">
                                                                                    <a class="add-in-wishlist-js"
                                                                                        href="wild-boy-kids-t-shirt"><i
                                                                                            class="icon-heart"></i><span
                                                                                            class="tooltip-label">Add to
                                                                                            wishlist</span></a></div>
                                                                                <div class="loadding-wishbutton-wild-boy-kids-t-shirt loading"
                                                                                    style="display: none; pointer-events: none">
                                                                                    <a class="add_to_wishlist"
                                                                                        href="wild-boy-kids-t-shirt"><i
                                                                                            class="fa fa-circle-o-notch fa-spin"></i></a>
                                                                                </div>
                                                                                <div class="added-wishbutton-wild-boy-kids-t-shirt loading"
                                                                                    style="display: none;"><a
                                                                                        class="added-wishlist add_to_wishlist"
                                                                                        href="/pages/wishlist"><i
                                                                                            class="icon-heart"></i><span
                                                                                            class="tooltip-label">View
                                                                                            Wishlist</span></a></div>
                                                                            </div>
                                                                        </div>



                                                                        <a href="#" class="compare action-home4"
                                                                            data-pid="wild-boy-kids-t-shirt" title=""
                                                                            data-original-title="Compare product"> <i
                                                                                class="icon-chart"></i></a>

                                                                    </div>



                                                                    <form action="/cart/add" method="post"
                                                                        class="variants clearfix"
                                                                        id="cart-form-4663262347350">
                                                                        <input type="hidden" name="id"
                                                                            value="32352572014678">
                                                                        <a class="add-cart-btn btn">
                                                                            Add to Cart
                                                                        </a>
                                                                    </form>




                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-detail">

                                                            <a href="/collections/boys-tops-t-shirt/products/wild-boy-kids-t-shirt"
                                                                class="grid-link__title">Wild Boy - Kids T-Shirt</a>
                                                            <div class="grid-link__meta">
                                                                <div class="product_price">


                                                                    <div class="grid-link__org_price">
                                                                        $34.00
                                                                    </div>


                                                                </div>
                                                                <span class="shopify-product-reviews-badge"
                                                                    data-id="4663262347350"></span>
                                                            </div>



                                                        </div>
                                                    </div>
                                                </li>












                                                <li class="grid__item item-row  wide--one-quarter post-large--one-third large--one-half medium--one-half small-grid__item"
                                                    id="product-4663262216278">
                                                    <div class="products product-hover-3">
                                                        <div class="product-container">









                                                            <a href="/collections/boys-tops-t-shirt/products/kids-t-shirt-mexican-dancing-dinosaur-with"
                                                                class="grid-link">




                                                                <div class="ImageOverlayCa"></div>

                                                                <img src="//cdn.shopify.com/s/files/1/0048/7040/6230/products/Mexican-Dino-Toddler_grande.jpg?v=1588090054"
                                                                    class="featured-image"
                                                                    alt="Kids T-shirt - Mexican Dancing Dinosaur with">

                                                            </a>
                                                            <div class="product_right_tag  ">


                                                            </div>
                                                            <div class="ImageWrapper">


                                                                <div class="img-whole-btn">
                                                                    <div class="product-button">




                                                                        <a href="javascript:void(0)"
                                                                            id="kids-t-shirt-mexican-dancing-dinosaur-with"
                                                                            class="quick-view-text">
                                                                            <i class="icon-eye" aria-hidden="true"></i>
                                                                        </a>



                                                                        <div class="add-to-wishlist">
                                                                            <div class="show">
                                                                                <div
                                                                                    class="default-wishbutton-kids-t-shirt-mexican-dancing-dinosaur-with loading">
                                                                                    <a class="add-in-wishlist-js"
                                                                                        href="kids-t-shirt-mexican-dancing-dinosaur-with"><i
                                                                                            class="icon-heart"></i><span
                                                                                            class="tooltip-label">Add to
                                                                                            wishlist</span></a></div>
                                                                                <div class="loadding-wishbutton-kids-t-shirt-mexican-dancing-dinosaur-with loading"
                                                                                    style="display: none; pointer-events: none">
                                                                                    <a class="add_to_wishlist"
                                                                                        href="kids-t-shirt-mexican-dancing-dinosaur-with"><i
                                                                                            class="fa fa-circle-o-notch fa-spin"></i></a>
                                                                                </div>
                                                                                <div class="added-wishbutton-kids-t-shirt-mexican-dancing-dinosaur-with loading"
                                                                                    style="display: none;"><a
                                                                                        class="added-wishlist add_to_wishlist"
                                                                                        href="/pages/wishlist"><i
                                                                                            class="icon-heart"></i><span
                                                                                            class="tooltip-label">View
                                                                                            Wishlist</span></a></div>
                                                                            </div>
                                                                        </div>



                                                                        <a href="#" class="compare action-home4"
                                                                            data-pid="kids-t-shirt-mexican-dancing-dinosaur-with"
                                                                            title=""
                                                                            data-original-title="Compare product"> <i
                                                                                class="icon-chart"></i></a>

                                                                    </div>



                                                                    <form action="/cart/add" method="post"
                                                                        class="variants clearfix"
                                                                        id="cart-form-4663262216278">
                                                                        <input type="hidden" name="id"
                                                                            value="32352571785302">
                                                                        <a class="add-cart-btn btn">
                                                                            Add to Cart
                                                                        </a>
                                                                    </form>




                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-detail">

                                                            <a href="/collections/boys-tops-t-shirt/products/kids-t-shirt-mexican-dancing-dinosaur-with"
                                                                class="grid-link__title">Kids T-shirt - Mexican Dancing
                                                                Dinosaur with</a>
                                                            <div class="grid-link__meta">
                                                                <div class="product_price">


                                                                    <div class="grid-link__org_price">
                                                                        $34.00
                                                                    </div>


                                                                </div>
                                                                <span class="shopify-product-reviews-badge"
                                                                    data-id="4663262216278"></span>
                                                            </div>



                                                        </div>
                                                    </div>
                                                </li>












                                                <li class="grid__item item-row  wide--one-quarter post-large--one-third large--one-half medium--one-half small-grid__item"
                                                    id="product-4663261790294">
                                                    <div class="products product-hover-3">
                                                        <div class="product-container">









                                                            <a href="/collections/boys-tops-t-shirt/products/looks-like-mr-tee-kids-t-shirt"
                                                                class="grid-link">




                                                                <div class="ImageOverlayCa"></div>

                                                                <div class="reveal">
                                                                    <span class="product-additional">
                                                                        <img src="//cdn.shopify.com/s/files/1/0048/7040/6230/products/MR.T-toddler_grande.png?v=1588090050"
                                                                            class="featured-image"
                                                                            alt="Looks Like Mr. Tee - Kids T-Shirt">
                                                                    </span>
                                                                    <img src="//cdn.shopify.com/s/files/1/0048/7040/6230/products/MR.T-toddler-pink_grande.jpg?v=1588090050"
                                                                        class="hidden-feature_img"
                                                                        alt="Looks Like Mr. Tee - Kids T-Shirt">
                                                                </div>

                                                            </a>
                                                            <div class="product_right_tag  ">


                                                            </div>
                                                            <div class="ImageWrapper">


                                                                <div class="img-whole-btn">
                                                                    <div class="product-button">




                                                                        <a href="javascript:void(0)"
                                                                            id="looks-like-mr-tee-kids-t-shirt"
                                                                            class="quick-view-text">
                                                                            <i class="icon-eye" aria-hidden="true"></i>
                                                                        </a>



                                                                        <div class="add-to-wishlist">
                                                                            <div class="show">
                                                                                <div
                                                                                    class="default-wishbutton-looks-like-mr-tee-kids-t-shirt loading">
                                                                                    <a class="add-in-wishlist-js"
                                                                                        href="looks-like-mr-tee-kids-t-shirt"><i
                                                                                            class="icon-heart"></i><span
                                                                                            class="tooltip-label">Add to
                                                                                            wishlist</span></a></div>
                                                                                <div class="loadding-wishbutton-looks-like-mr-tee-kids-t-shirt loading"
                                                                                    style="display: none; pointer-events: none">
                                                                                    <a class="add_to_wishlist"
                                                                                        href="looks-like-mr-tee-kids-t-shirt"><i
                                                                                            class="fa fa-circle-o-notch fa-spin"></i></a>
                                                                                </div>
                                                                                <div class="added-wishbutton-looks-like-mr-tee-kids-t-shirt loading"
                                                                                    style="display: none;"><a
                                                                                        class="added-wishlist add_to_wishlist"
                                                                                        href="/pages/wishlist"><i
                                                                                            class="icon-heart"></i><span
                                                                                            class="tooltip-label">View
                                                                                            Wishlist</span></a></div>
                                                                            </div>
                                                                        </div>



                                                                        <a href="#" class="compare action-home4"
                                                                            data-pid="looks-like-mr-tee-kids-t-shirt"
                                                                            title=""
                                                                            data-original-title="Compare product"> <i
                                                                                class="icon-chart"></i></a>

                                                                    </div>



                                                                    <form action="/cart/add" method="post"
                                                                        class="variants clearfix"
                                                                        id="cart-form-4663261790294">
                                                                        <input type="hidden" name="id"
                                                                            value="32352570998870">
                                                                        <a class="add-cart-btn btn">
                                                                            Add to Cart
                                                                        </a>
                                                                    </form>




                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-detail">

                                                            <a href="/collections/boys-tops-t-shirt/products/looks-like-mr-tee-kids-t-shirt"
                                                                class="grid-link__title">Looks Like Mr. Tee - Kids
                                                                T-Shirt</a>
                                                            <div class="grid-link__meta">
                                                                <div class="product_price">


                                                                    <div class="grid-link__org_price">
                                                                        $34.00
                                                                    </div>


                                                                </div>
                                                                <span class="shopify-product-reviews-badge"
                                                                    data-id="4663261790294"></span>
                                                            </div>



                                                        </div>
                                                    </div>
                                                </li>












                                                <li class="grid__item item-row  wide--one-quarter post-large--one-third large--one-half medium--one-half small-grid__item"
                                                    id="product-4663261200470">
                                                    <div class="products product-hover-3">
                                                        <div class="product-container">









                                                            <a href="/collections/boys-tops-t-shirt/products/boys-grey-character-t-shirt"
                                                                class="grid-link">




                                                                <div class="ImageOverlayCa"></div>

                                                                <div class="reveal">
                                                                    <span class="product-additional">
                                                                        <img src="//cdn.shopify.com/s/files/1/0048/7040/6230/products/366204_163467245_product_grande.jpg?v=1588090045"
                                                                            class="featured-image"
                                                                            alt="Boys Grey Character T-Shirt">
                                                                    </span>
                                                                    <img src="//cdn.shopify.com/s/files/1/0048/7040/6230/products/97485228-womens_grande.jpg?v=1588090045"
                                                                        class="hidden-feature_img"
                                                                        alt="Boys Grey Character T-Shirt">
                                                                </div>

                                                            </a>
                                                            <div class="product_right_tag  ">


                                                            </div>
                                                            <div class="ImageWrapper">


                                                                <div class="img-whole-btn">
                                                                    <div class="product-button">




                                                                        <a href="javascript:void(0)"
                                                                            id="boys-grey-character-t-shirt"
                                                                            class="quick-view-text">
                                                                            <i class="icon-eye" aria-hidden="true"></i>
                                                                        </a>



                                                                        <div class="add-to-wishlist">
                                                                            <div class="show">
                                                                                <div
                                                                                    class="default-wishbutton-boys-grey-character-t-shirt loading">
                                                                                    <a class="add-in-wishlist-js"
                                                                                        href="boys-grey-character-t-shirt"><i
                                                                                            class="icon-heart"></i><span
                                                                                            class="tooltip-label">Add to
                                                                                            wishlist</span></a></div>
                                                                                <div class="loadding-wishbutton-boys-grey-character-t-shirt loading"
                                                                                    style="display: none; pointer-events: none">
                                                                                    <a class="add_to_wishlist"
                                                                                        href="boys-grey-character-t-shirt"><i
                                                                                            class="fa fa-circle-o-notch fa-spin"></i></a>
                                                                                </div>
                                                                                <div class="added-wishbutton-boys-grey-character-t-shirt loading"
                                                                                    style="display: none;"><a
                                                                                        class="added-wishlist add_to_wishlist"
                                                                                        href="/pages/wishlist"><i
                                                                                            class="icon-heart"></i><span
                                                                                            class="tooltip-label">View
                                                                                            Wishlist</span></a></div>
                                                                            </div>
                                                                        </div>



                                                                        <a href="#" class="compare action-home4"
                                                                            data-pid="boys-grey-character-t-shirt"
                                                                            title=""
                                                                            data-original-title="Compare product"> <i
                                                                                class="icon-chart"></i></a>

                                                                    </div>



                                                                    <form action="/cart/add" method="post"
                                                                        class="variants clearfix"
                                                                        id="cart-form-4663261200470">
                                                                        <input type="hidden" name="id"
                                                                            value="32352570441814">
                                                                        <a class="add-cart-btn btn">
                                                                            Add to Cart
                                                                        </a>
                                                                    </form>




                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-detail">

                                                            <a href="/collections/boys-tops-t-shirt/products/boys-grey-character-t-shirt"
                                                                class="grid-link__title">Boys Grey Character T-Shirt</a>
                                                            <div class="grid-link__meta">
                                                                <div class="product_price">


                                                                    <div class="grid-link__org_price">
                                                                        $22.50
                                                                    </div>


                                                                </div>
                                                                <span class="shopify-product-reviews-badge"
                                                                    data-id="4663261200470"></span>
                                                            </div>



                                                        </div>
                                                    </div>
                                                </li>












                                                <li class="grid__item item-row  wide--one-quarter post-large--one-third large--one-half medium--one-half small-grid__item"
                                                    id="product-4663260872790">
                                                    <div class="products product-hover-3">
                                                        <div class="product-container">









                                                            <a href="/collections/boys-tops-t-shirt/products/kids-t-shirt-hungry-kids-chocolate-chip-muffin"
                                                                class="grid-link">




                                                                <div class="ImageOverlayCa"></div>

                                                                <img src="//cdn.shopify.com/s/files/1/0048/7040/6230/products/Muffin-1000x1000_grande.jpg?v=1588090040"
                                                                    class="featured-image"
                                                                    alt="Kids T-shirt - Hungry Kids - Chocolate Chip Muffin">

                                                            </a>
                                                            <div class="product_right_tag  ">


                                                            </div>
                                                            <div class="ImageWrapper">


                                                                <div class="img-whole-btn">
                                                                    <div class="product-button">




                                                                        <a href="javascript:void(0)"
                                                                            id="kids-t-shirt-hungry-kids-chocolate-chip-muffin"
                                                                            class="quick-view-text">
                                                                            <i class="icon-eye" aria-hidden="true"></i>
                                                                        </a>



                                                                        <div class="add-to-wishlist">
                                                                            <div class="show">
                                                                                <div
                                                                                    class="default-wishbutton-kids-t-shirt-hungry-kids-chocolate-chip-muffin loading">
                                                                                    <a class="add-in-wishlist-js"
                                                                                        href="kids-t-shirt-hungry-kids-chocolate-chip-muffin"><i
                                                                                            class="icon-heart"></i><span
                                                                                            class="tooltip-label">Add to
                                                                                            wishlist</span></a></div>
                                                                                <div class="loadding-wishbutton-kids-t-shirt-hungry-kids-chocolate-chip-muffin loading"
                                                                                    style="display: none; pointer-events: none">
                                                                                    <a class="add_to_wishlist"
                                                                                        href="kids-t-shirt-hungry-kids-chocolate-chip-muffin"><i
                                                                                            class="fa fa-circle-o-notch fa-spin"></i></a>
                                                                                </div>
                                                                                <div class="added-wishbutton-kids-t-shirt-hungry-kids-chocolate-chip-muffin loading"
                                                                                    style="display: none;"><a
                                                                                        class="added-wishlist add_to_wishlist"
                                                                                        href="/pages/wishlist"><i
                                                                                            class="icon-heart"></i><span
                                                                                            class="tooltip-label">View
                                                                                            Wishlist</span></a></div>
                                                                            </div>
                                                                        </div>



                                                                        <a href="#" class="compare action-home4"
                                                                            data-pid="kids-t-shirt-hungry-kids-chocolate-chip-muffin"
                                                                            title=""
                                                                            data-original-title="Compare product"> <i
                                                                                class="icon-chart"></i></a>

                                                                    </div>



                                                                    <form action="/cart/add" method="post"
                                                                        class="variants clearfix"
                                                                        id="cart-form-4663260872790">
                                                                        <input type="hidden" name="id"
                                                                            value="32352569884758">
                                                                        <a class="add-cart-btn btn">
                                                                            Add to Cart
                                                                        </a>
                                                                    </form>




                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-detail">

                                                            <a href="/collections/boys-tops-t-shirt/products/kids-t-shirt-hungry-kids-chocolate-chip-muffin"
                                                                class="grid-link__title">Kids T-shirt - Hungry Kids -
                                                                Chocolate Chip Muffin</a>
                                                            <div class="grid-link__meta">
                                                                <div class="product_price">


                                                                    <div class="grid-link__org_price">
                                                                        $34.00
                                                                    </div>


                                                                </div>
                                                                <span class="shopify-product-reviews-badge"
                                                                    data-id="4663260872790"></span>
                                                            </div>



                                                        </div>
                                                    </div>
                                                </li>












                                                <li class="grid__item item-row  wide--one-quarter post-large--one-third large--one-half medium--one-half small-grid__item"
                                                    id="product-4663260479574">
                                                    <div class="products product-hover-3">
                                                        <div class="product-container">









                                                            <a href="/collections/boys-tops-t-shirt/products/octopus-spectacles"
                                                                class="grid-link">




                                                                <div class="ImageOverlayCa"></div>

                                                                <div class="reveal">
                                                                    <span class="product-additional">
                                                                        <img src="//cdn.shopify.com/s/files/1/0048/7040/6230/products/kids_octo_grande.jpg?v=1588090034"
                                                                            class="featured-image"
                                                                            alt="Octopus spectacles">
                                                                    </span>
                                                                    <img src="//cdn.shopify.com/s/files/1/0048/7040/6230/products/il_fullxfull.393573569_hx85_7230b3dd-397c-4456-b536-849165b8ac9d_grande.jpg?v=1588090034"
                                                                        class="hidden-feature_img"
                                                                        alt="Octopus spectacles">
                                                                </div>

                                                            </a>
                                                            <div class="product_right_tag  ">


                                                            </div>
                                                            <div class="ImageWrapper">


                                                                <div class="img-whole-btn">
                                                                    <div class="product-button">




                                                                        <a href="javascript:void(0)"
                                                                            id="octopus-spectacles"
                                                                            class="quick-view-text">
                                                                            <i class="icon-eye" aria-hidden="true"></i>
                                                                        </a>



                                                                        <div class="add-to-wishlist">
                                                                            <div class="show">
                                                                                <div
                                                                                    class="default-wishbutton-octopus-spectacles loading">
                                                                                    <a class="add-in-wishlist-js"
                                                                                        href="octopus-spectacles"><i
                                                                                            class="icon-heart"></i><span
                                                                                            class="tooltip-label">Add to
                                                                                            wishlist</span></a></div>
                                                                                <div class="loadding-wishbutton-octopus-spectacles loading"
                                                                                    style="display: none; pointer-events: none">
                                                                                    <a class="add_to_wishlist"
                                                                                        href="octopus-spectacles"><i
                                                                                            class="fa fa-circle-o-notch fa-spin"></i></a>
                                                                                </div>
                                                                                <div class="added-wishbutton-octopus-spectacles loading"
                                                                                    style="display: none;"><a
                                                                                        class="added-wishlist add_to_wishlist"
                                                                                        href="/pages/wishlist"><i
                                                                                            class="icon-heart"></i><span
                                                                                            class="tooltip-label">View
                                                                                            Wishlist</span></a></div>
                                                                            </div>
                                                                        </div>



                                                                        <a href="#" class="compare action-home4"
                                                                            data-pid="octopus-spectacles" title=""
                                                                            data-original-title="Compare product"> <i
                                                                                class="icon-chart"></i></a>

                                                                    </div>



                                                                    <form action="/cart/add" method="post"
                                                                        class="variants clearfix"
                                                                        id="cart-form-4663260479574">
                                                                        <input type="hidden" name="id"
                                                                            value="32352569000022">
                                                                        <a class="add-cart-btn btn">
                                                                            Add to Cart
                                                                        </a>
                                                                    </form>




                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-detail">

                                                            <a href="/collections/boys-tops-t-shirt/products/octopus-spectacles"
                                                                class="grid-link__title">Octopus spectacles</a>
                                                            <div class="grid-link__meta">
                                                                <div class="product_price">


                                                                    <div class="grid-link__org_price">
                                                                        $19.99
                                                                    </div>


                                                                </div>
                                                                <span class="shopify-product-reviews-badge"
                                                                    data-id="4663260479574"></span>
                                                            </div>



                                                        </div>
                                                    </div>
                                                </li>












                                                <li class="grid__item item-row  wide--one-quarter post-large--one-third large--one-half medium--one-half small-grid__item"
                                                    id="product-4663259398230">
                                                    <div class="products product-hover-3">
                                                        <div class="product-container">









                                                            <a href="/collections/boys-tops-t-shirt/products/bird-swing"
                                                                class="grid-link">




                                                                <div class="ImageOverlayCa"></div>

                                                                <div class="reveal">
                                                                    <span class="product-additional">
                                                                        <img src="//cdn.shopify.com/s/files/1/0048/7040/6230/products/swing_kids_grande.jpg?v=1588090015"
                                                                            class="featured-image" alt="Bird swing">
                                                                    </span>
                                                                    <img src="//cdn.shopify.com/s/files/1/0048/7040/6230/products/swing_kids_71b2b73d-c45b-451d-8ce4-7b44b3ab2bc4_grande.jpg?v=1588090016"
                                                                        class="hidden-feature_img" alt="Bird swing">
                                                                </div>

                                                            </a>
                                                            <div class="product_right_tag  ">


                                                            </div>
                                                            <div class="ImageWrapper">


                                                                <div class="img-whole-btn">
                                                                    <div class="product-button">




                                                                        <a href="javascript:void(0)" id="bird-swing"
                                                                            class="quick-view-text">
                                                                            <i class="icon-eye" aria-hidden="true"></i>
                                                                        </a>



                                                                        <div class="add-to-wishlist">
                                                                            <div class="show">
                                                                                <div
                                                                                    class="default-wishbutton-bird-swing loading">
                                                                                    <a class="add-in-wishlist-js"
                                                                                        href="bird-swing"><i
                                                                                            class="icon-heart"></i><span
                                                                                            class="tooltip-label">Add to
                                                                                            wishlist</span></a></div>
                                                                                <div class="loadding-wishbutton-bird-swing loading"
                                                                                    style="display: none; pointer-events: none">
                                                                                    <a class="add_to_wishlist"
                                                                                        href="bird-swing"><i
                                                                                            class="fa fa-circle-o-notch fa-spin"></i></a>
                                                                                </div>
                                                                                <div class="added-wishbutton-bird-swing loading"
                                                                                    style="display: none;"><a
                                                                                        class="added-wishlist add_to_wishlist"
                                                                                        href="/pages/wishlist"><i
                                                                                            class="icon-heart"></i><span
                                                                                            class="tooltip-label">View
                                                                                            Wishlist</span></a></div>
                                                                            </div>
                                                                        </div>



                                                                        <a href="#" class="compare action-home4"
                                                                            data-pid="bird-swing" title=""
                                                                            data-original-title="Compare product"> <i
                                                                                class="icon-chart"></i></a>

                                                                    </div>



                                                                    <form action="/cart/add" method="post"
                                                                        class="variants clearfix"
                                                                        id="cart-form-4663259398230">
                                                                        <input type="hidden" name="id"
                                                                            value="32352567328854">
                                                                        <a class="add-cart-btn btn">
                                                                            Add to Cart
                                                                        </a>
                                                                    </form>




                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-detail">

                                                            <a href="/collections/boys-tops-t-shirt/products/bird-swing"
                                                                class="grid-link__title">Bird swing</a>
                                                            <div class="grid-link__meta">
                                                                <div class="product_price">


                                                                    <div class="grid-link__org_price">
                                                                        $18.99
                                                                    </div>


                                                                </div>
                                                                <span class="shopify-product-reviews-badge"
                                                                    data-id="4663259398230"></span>
                                                            </div>



                                                        </div>
                                                    </div>
                                                </li>












                                                <li class="grid__item item-row  wide--one-quarter post-large--one-third large--one-half medium--one-half small-grid__item"
                                                    id="product-4663258972246">
                                                    <div class="products product-hover-3">
                                                        <div class="product-container">









                                                            <a href="/collections/boys-tops-t-shirt/products/star-wars-american-gothic-kids"
                                                                class="grid-link">




                                                                <div class="ImageOverlayCa"></div>

                                                                <div class="reveal">
                                                                    <span class="product-additional">
                                                                        <img src="//cdn.shopify.com/s/files/1/0048/7040/6230/products/gothic_kids_grande.jpg?v=1588090008"
                                                                            class="featured-image"
                                                                            alt="Star Wars American Gothic- kids">
                                                                    </span>
                                                                    <img src="//cdn.shopify.com/s/files/1/0048/7040/6230/products/gothic_navy_a905123b-d8fd-4fd6-baf8-3710d310ddcd_grande.jpg?v=1588090008"
                                                                        class="hidden-feature_img"
                                                                        alt="Star Wars American Gothic- kids">
                                                                </div>

                                                            </a>
                                                            <div class="product_right_tag  ">


                                                            </div>
                                                            <div class="ImageWrapper">


                                                                <div class="img-whole-btn">
                                                                    <div class="product-button">




                                                                        <a href="javascript:void(0)"
                                                                            id="star-wars-american-gothic-kids"
                                                                            class="quick-view-text">
                                                                            <i class="icon-eye" aria-hidden="true"></i>
                                                                        </a>



                                                                        <div class="add-to-wishlist">
                                                                            <div class="show">
                                                                                <div
                                                                                    class="default-wishbutton-star-wars-american-gothic-kids loading">
                                                                                    <a class="add-in-wishlist-js"
                                                                                        href="star-wars-american-gothic-kids"><i
                                                                                            class="icon-heart"></i><span
                                                                                            class="tooltip-label">Add to
                                                                                            wishlist</span></a></div>
                                                                                <div class="loadding-wishbutton-star-wars-american-gothic-kids loading"
                                                                                    style="display: none; pointer-events: none">
                                                                                    <a class="add_to_wishlist"
                                                                                        href="star-wars-american-gothic-kids"><i
                                                                                            class="fa fa-circle-o-notch fa-spin"></i></a>
                                                                                </div>
                                                                                <div class="added-wishbutton-star-wars-american-gothic-kids loading"
                                                                                    style="display: none;"><a
                                                                                        class="added-wishlist add_to_wishlist"
                                                                                        href="/pages/wishlist"><i
                                                                                            class="icon-heart"></i><span
                                                                                            class="tooltip-label">View
                                                                                            Wishlist</span></a></div>
                                                                            </div>
                                                                        </div>



                                                                        <a href="#" class="compare action-home4"
                                                                            data-pid="star-wars-american-gothic-kids"
                                                                            title=""
                                                                            data-original-title="Compare product"> <i
                                                                                class="icon-chart"></i></a>

                                                                    </div>



                                                                    <form action="/cart/add" method="post"
                                                                        class="variants clearfix"
                                                                        id="cart-form-4663258972246">
                                                                        <input type="hidden" name="id"
                                                                            value="32352566542422">
                                                                        <a class="add-cart-btn btn">
                                                                            Add to Cart
                                                                        </a>
                                                                    </form>




                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-detail">

                                                            <a href="/collections/boys-tops-t-shirt/products/star-wars-american-gothic-kids"
                                                                class="grid-link__title">Star Wars American Gothic-
                                                                kids</a>
                                                            <div class="grid-link__meta">
                                                                <div class="product_price">


                                                                    <div class="grid-link__org_price">
                                                                        $19.99
                                                                    </div>


                                                                </div>
                                                                <span class="shopify-product-reviews-badge"
                                                                    data-id="4663258972246"></span>
                                                            </div>



                                                        </div>
                                                    </div>
                                                </li>


                                            </ul>

                                        </div>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>


            <div class="dt-sc-hr-invisible-large"></div>

            <div class="dt-sc-hr-invisible-large"></div>
        </main>
    </div>

    <?php include_once('../includes/footer.php'); ?>

    <?php //include_once('../includes/modals.php'); ?>