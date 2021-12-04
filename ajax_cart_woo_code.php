<!-- Put this code in header.php file -->
<?php global $woocommerce; ?>
<div class="mini_cart_wrapper">
                            <a href="javascript:void(0)">
                                <i class="fa fa-shopping-bag"></i>
                                <span class="cart_price">
                                    <?php echo $woocommerce->cart->get_cart_total(); ?> <i class="ion-ios-arrow-down"></i>
                                </span>
                                <span class="cart_count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                            </a>
                        </div>

<!-- Make one template / template file and add this code in that file -->
<?php
if (isset($_POST['newcarttotal'])) {
    global $woocommerce;
    echo WC()->cart->get_cart_contents_count() . "," . $woocommerce->cart->get_cart_total();
}
?>
<!-- Put this code in script file -->
<script>
  /* You can set interval time -> 3000 */
   window.setInterval(function () {
        autoloadajax();
    }, 3000);
    function autoloadajax() {
        var newcarttotal = "0";
        $.ajax({
            type: 'POST',
            url: "https://example.com/do-not-touch-this-page",
            data: {
                newcarttotal: newcarttotal
            },
            success: function (response) {
                var datatoshow = response.split(",");
                $(".cart_count").html(datatoshow[0]);
                $(".cart_price").html(datatoshow[1] + ' <i class="ion-ios-arrow-down"></i>');
            }
        });
    }
  </script>
