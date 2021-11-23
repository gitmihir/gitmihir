<?php

function tpp_wp_paypal_get_subscribe_button() {
    $button_code = '';
    if (PAYPAL_SANDBOX == true) {
        $action_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
    } else if (PAYPAL_SANDBOX == false) {
        $action_url = 'https://www.paypal.com/cgi-bin/webscr';
    }
    $target = 'target=_blank';
    $button_code .= '<form action="' . $action_url . '" method="post" >';
    $button_code .= '<input type="hidden" name="charset" value="utf-8">';
    $button_code .= '<input type="hidden" name="cmd" value="_xclick-subscriptions">';

    $business = '';
    $paypal_merchant_id = get_option('tpp_wp_paypal_merchant_id');
    $paypal_email = get_option('tpp_wp_paypal_email');
    if (isset($paypal_merchant_id) && !empty($paypal_merchant_id)) {
        $business = $paypal_merchant_id;
    } else if (isset($paypal_email) && !empty($paypal_email)) {
        $business = $paypal_email;
    }
    if (isset($business) && !empty($business)) {
        $button_code .= '<input type="hidden" name="business" value="' . $business . '">';
    }
    $button_code .= '<input type="hidden" class="dw_custom_plan_name" name="item_name" value="">';
    $rand_number = time() . rand(1, 2);
    $item_number = $rand_number;
    $button_code .= '<input type="hidden" name="item_number" value="' . $item_number . '">';
    $button_code .= '<input type="hidden" id="paypalAmt" name="a3" class="dw_monthly_total">';
    $button_code .= '<input type="hidden" name="p3" value="1">';
    $button_code .= '<input type="hidden" name="t3" value="M">';
    $button_code .= '<input type="hidden" name="src" value="1">';
    $button_code .= '<input type="hidden" name="sra" value="1">';
    $button_code .= '<input type="hidden" name="currency_code" value="USD">';
    $button_code .= '<input type="hidden" name="no_note" value="1">'; //For Subscribe buttons, always set no_note to 1
    $button_code .= '<input type="hidden" name="no_shipping" value="1">';
    $button_code .= '<input type="hidden" name="return" value="' . PAYPAL_RETURN_URL . '">';
    $button_code .= '<input type="hidden" name="cancel_return" value="' . PAYPAL_CANCEL_URL . '">';
    $button_code .= '<input type="hidden" name="notify_url" value="' . PAYPAL_NOTIFY_URL . '">';
    $button_code .= '<input type="hidden" name="bn" value="WPPayPal_Subscribe_WPS_US">';
    $button_image_url = get_site_url() . '/wp-content/uploads/2020/12/paypal.png';
    $button_code .= '<input class="buy-btn btn btn-primary pay_with_paypal create_plan closethistab" type="submit" value="Pay With Paypal" style="margin-top: 0px !important;">';
    $button_code .= '<input type="image" src="' . $button_image_url . '" border="0" name="submit" style="width: 18%;float: right;>';
    $button_code .= '</form>';
    return $button_code;
}

add_shortcode('tpp_paypal_shortcode', 'tpp_wp_paypal_get_subscribe_button');
