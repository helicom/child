jQuery(document).ready(function(){
    jQuery("#jQuerytest").click(function(){
        jQuery("#jQuerytest").toggleClass("test-bold");
    });
    jQuery(".single_product_display .product_form .wpsc_variation_forms tbody tr:first-child select").addClass("select_color");
    jQuery(".single_product_display .product_form .wpsc_variation_forms tbody tr:nth-child(2) select").addClass("select_size");
    var showStock = jQuery(".single_product_display .wpsc_product_price div:nth-child(4)");
    var showBuy = jQuery(".single_product_display .wpsc_buy_button_container");
    var showQuantity = jQuery(".single_product_display .product_form fieldset:nth-child(3)");
    jQuery(showQuantity).hide();
    jQuery(showStock).hide();
    jQuery(showBuy).hide();
    jQuery(".wpsc_select_variation").change(function(){
        var selectIndex1 = jQuery(".select_color").val();
        var selectIndex2 = jQuery(".select_size").val();
        if(selectIndex1 > 0 && selectIndex2 > 0){
            jQuery(showQuantity).show();
            jQuery(showStock).show();
            jQuery(showBuy).show();
        }
    });
});