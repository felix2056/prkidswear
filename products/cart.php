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


        <main class="main-content ">


            <div class="wrapper">

                <div class="grid__item">



                    <div class="cart_empty_msg">
                        <h2>Your Cart</h2>
                        <p>Your cart is currently empty!</p>
                        <p>Continue browsing <a href="/collections/all">here</a>.</p>
                    </div>



                    <script>
                    $('.qtyplus1').click(function(e) {
                        e.preventDefault();
                        var currentVal = parseInt($(this).parent().find('input[name="updates[]"]').val());
                        if (!isNaN(currentVal)) {
                            $(this).parent().find('input[name="updates[]"]').val(currentVal + 1);
                        } else {
                            $(this).parent().find('input[name="updates[]"]').val(1);
                        }
                    });

                    $(".qtyminus1").click(function(e) {

                        e.preventDefault();
                        var currentVal = parseInt($(this).parent().find('input[name="updates[]"]').val());
                        if (!isNaN(currentVal) && currentVal > 1) {
                            $(this).parent().find('input[name="updates[]"]').val(currentVal - 1);
                        } else {
                            $(this).parent().find('input[name="updates[]"]').val(1);
                        }
                    });
                    </script>


                </div>

            </div>


            <div class="dt-sc-hr-invisible-large"></div>

            <div class="dt-sc-hr-invisible-large"></div>
        </main>
    </div>

    <?php include_once('../includes/footer.php'); ?>

    <?php //include_once('../includes/modals.php'); ?>