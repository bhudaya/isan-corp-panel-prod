<?php

require_once(APPPATH.'modules/admin/models/Admin_detail.php');

class Listing_guzzle extends CI_Model{



    public function __construct()
    {


    }
    public function getListingByID($controller,$api,$id,&$data,$id_name="id")
    {
        $_api= new Iapps\Http\Api_Model();
        $curl_response = $_api->get($api.'?'.$id_name."=".$id,"", $_api->getAuthenticationHeaders());
        $json=$curl_response;
        $admin= new Admin_detail();
        $admin->IsInvalidAccessToken($json->getHeaderCode());
       
        if(!isset($json)){
            return false;
        }
        if ($json->isOK()){
            $data['list'] = $json->getResults();
        }
    }
    public function getListing($controller,$url,$status_code,&$data)
    {
        $this->getPaginationListing($controller,$url,$status_code,"",$data);
        unset($data['pagination']);
        unset($data['total_records']);

    }
    //$params['limit'] = $this->getLimit();
    //$params['page'] = $this->getPage();
    //$params['search']=search
    public function getPaginationListing($controller,$url,$status_code,$params,&$data)//need limit and page
    {
        $_api= new Iapps\Http\Api_Model();
        $curl_response = $_api->get($url/*'https://httpbin.org/post'*/, $params, $_api->getAuthenticationHeaders());
        $json=$curl_response;
        if(class_exists ('Admin_detail'))
        { 
            $admin= new Admin_detail();
            $admin->IsInvalidAccessToken($json->getHeaderCode());
        }
        // var_dump($api_url);die;
        if(!isset($json)){
            return false;
        }
        if ($json->isOK()) {
            $_common= new Iapps\Common\Common_function();
           // $data['list'] = $_common->arrayToObject($json->getResults());
             $data['list'] =$json->getResults();
            $data['total_records'] = $json->getTotal();
            $data['pagination'] = array('total' => $json->getTotal(), 'limit' => $controller->getLimit(), 'curpage' => $controller->getPage(), 'totalpage' => ceil($json->getTotal() / $controller->getLimit()));
        } else {
            $data['error_message'] = $json->getMessage();
            $data['pagination'] = '';
        }
    }

}

/* End of file Someclass.php */
