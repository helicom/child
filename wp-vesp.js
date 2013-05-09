jQuery(document).ready(function(){
    jQuery("#jQuerytest").click(function(){
        jQuery("#jQuerytest").toggleClass("test-bold");
    });

    //stock availability is shown after the option selected
    jQuery(".single_product_display .product_form .wpsc_variation_forms tbody tr:first-child select").addClass("select_color");
    jQuery(".single_product_display .product_form .wpsc_variation_forms tbody tr:nth-child(2) select").addClass("select_size");
    var showStock = jQuery(".single_product_display .product_form div.wpsc_product_price:nth-child(3)");
    var showBuy = jQuery(".single_product_display .wpsc_buy_button_container");
    var showQuantity = jQuery(".single_product_display .product_form fieldset:nth-child(4)");
    jQuery(showQuantity).hide();
    jQuery(showStock).hide();
    jQuery(showBuy).hide();
    jQuery(".wpsc_select_variation").change(function(){
        //show stock availability
        var selectIndex1 = jQuery(".select_color").val();
        var selectIndex2 = jQuery(".select_size").val();
        if(selectIndex1 > 0 && selectIndex2 > 0){
            jQuery(showQuantity).show("fast");
            jQuery(showStock).show("fast");
            jQuery(showBuy).show("fast");
        }
    });
    var stockText = jQuery(".single_product_display .product_form div.wpsc_product_price:nth-child(3)>div")
    jQuery(stockText).change(function(){
    
        if(jQuery(this).hasClass("out_of_stock")){
            jQuery(showBuy).hide();
        }else{
            jQuery(showBuy).show("fast");
        }
    });

    //shopping cart is closed if the window size is under 600px
    jQuery(function() {
        var w = $(window).width();
        var x = 600;
        if (w <= x) {
            $('#sliding_cart').css({
                display: 'none'
            });
        }
        else if(w >= x){
            $('#sliding_cart').css({
                display: 'block'
            });
        }
    });
});