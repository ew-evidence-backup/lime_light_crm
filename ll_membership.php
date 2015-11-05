<?php
/**
 * @category   Limelight CRM API
 * @author     Evin Weissenberg <ecw.technology@gmail.com>
 * @copyright  2011 The PHP Group
 * @license    http://www.opensource.org/licenses/mit-license.php
 * @since      File available since Release 1.0
 */

class Limelight_CRM_API_Membership {

    private $request_url = "http://www.domain.com?membership.php?user_name=xxx&password=xxx";

    function curl($domain_url, $post_params) {

        $url = $domain_url;
        $params = $post_params;

        $user_agent = "Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $response = curl_exec($ch);
        curl_close($ch);

        parse_str($response, $array_output);
        $jsonized = json_encode($array_output);

        return $jsonized;
    }

    function  campaign_find_active($campaign_ids = array()) {

        $request = $this->curl($this->request_url, $campaign_ids);

        return $request;
    }

    function  campaign_view($campaign_id) {

        $p['campaign_id'] = $campaign_id;

        $request = $this->curl($this->request_url, $p);

        return $request;
    }

    function customer_find_active_product($customer_id) {

        $p['$customer_id'] = $customer_id;

        $request = $this->curl($this->request_url, $p);

        return $request;
    }

    function order_find_overdue($days) {

        $p['$days'] = $days;

        $request = $this->curl($this->request_url, $p);

        return $request;
    }

    function order_refund($order_id, $amount, $keep_recurring) {

        $p['$order_id'] = $order_id;
        $p['$amount'] = $amount;
        $p['$keep_recurring'] = $keep_recurring;

        $request = $this->curl($this->request_url, $p);

        return $request;
    }


    function order_void($order_id) {

        $p['$order_id'] = $order_id;

        $request = $this->curl($this->request_url, $p);

        return $request;
    }

    function order_force_bill($order_id) {

        $p['$order_id'] = $order_id;

        $request = $this->curl($this->request_url, $p);

        return $request;
    }

    function order_update_recurring($order_id, $status) {
        //Status: start, stop, reset

        $p['$order_id'] = $order_id;
        $p['$status'] = $status;

        $request = $this->curl($this->request_url, $p);

        return $request;
    }

    function order_find($campaign_id) {

        $p['campaign_id'] = $campaign_id;

        $request = $this->curl($this->request_url, $p);

        return $request;
    }

    function order_update($order_ids = array()) {

        $request = $this->curl($this->request_url, $order_ids);

        return $request;
    }

    function order_view($campaign_id) {

        $p['campaign_id'] = $campaign_id;

        $request = $this->curl($this->request_url, $p);

        return $request;
    }

    function product_index($product_id) {

        $p['product_id'] = $product_id;

        $request = $this->curl($this->request_url, $p);

        return $request;
    }

    function product_copy($product_id, $new_name) {

        $p['product_id'] = $product_id;
        $p['new_name'] = $new_name;

        $request = $this->curl($this->request_url, $p);

        return $request;
    }

    function product_update($product_id) {

        $p['product_id'] = $product_id;

        $request = $this->curl($this->request_url, $p);

        return $request;
    }


    function upsell_stop_recurring($order_id, $product_id) {

        $p['$order_id'] = $order_id;
        $p['product_id'] = $product_id;

        $request = $this->curl($this->request_url, $p);

        return $request;
    }

    function prospect_view($prospect_id) {

        $p['$prospect_id'] = $prospect_id;

        $request = $this->curl($this->request_url, $p);

        return $request;
    }

    function prospect_update($prospect_id, $action) {

        $p['$prospect_id'] = $prospect_id;
        $p['$action'] = $action;

        $request = $this->curl($this->request_url, $p);

        return $request;
    }

    function prospect_find($campaign_id) {

        $p['$campaign_id'] = $campaign_id;

        $request = $this->curl($this->request_url, $p);

        return $request;
    }
}