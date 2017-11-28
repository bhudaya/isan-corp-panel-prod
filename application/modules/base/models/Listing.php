<?php

require_once(APPPATH.'modules/admin/models/Admin_detail.php');

class Listing extends CI_Model{



    public function __construct()
    {


    }
    public function getDropDownListing($controller,$api_url,$status_code,&$data)
    {
        $params['limit']=999;
        $params['page']=1;
        $httpMethod = 'GET';
        $curl_response = doCurl($api_url, $params, $httpMethod);

        if(class_exists ('Admin_detail'))
        {
            $admin= new Admin_detail();
            $admin->IsInvalidAccessToken($curl_response['http_status_code']);
        }

        $json = json_decode(isset($curl_response['output']) ? $curl_response['output'] : NULL);
        $data['list']=[];
        $data['pagination'] = [];
        $data['total_records']='';
        if(!isset($json)){
            return false;
        }
        if (isset($json->status_code) && $json->status_code == $status_code&& isset($json->result)) {
            $data['list'] = $json->result;
        } 
    }
    public function getListing($controller,$api_url,$status_code,&$data)
    {
        $this->getPaginationListing($controller,$api_url,$status_code,"",$data);
        unset($data['pagination']);
        unset($data['total_records']);

    }
    public function getPaginationListing($controller,$api_url,$status_code,$params,&$data,$httpMethod = 'GET')//need limit and page
    {
        // $curl_response = doCurl($api_url, $params, 'GET');
        if(isset($params['limit']))
        {
            $limit= $params['limit'];
        }
        
        if(isset($params['page']))
        {
            $page= $params['page'];
        }

        // $curl_response = doCurl($api_url.'?limit='.$limit.'&page='.$page, $params, $httpMethod);
        
        if(isset($params['limit'])&&isset($params['page'])){
            $curl_response = doCurl($api_url.'?limit='.$limit.'&page='.$page, $params, $httpMethod);
        }
        else
        {
            $curl_response = doCurl($api_url, $params, $httpMethod);
        }


        if(class_exists ('Admin_detail'))
        {
            $admin= new Admin_detail();
            $admin->IsInvalidAccessToken($curl_response['http_status_code']);
        }
        $json = json_decode(isset($curl_response['output']) ? $curl_response['output'] : NULL);
       /* if (isset($json->status_code) && $json->status_code == globalsetting_Model::PERMISSION_DENIED) {
            redirect('admin/dashboard');
        }*/
        //var_dump($params);die;
        $data['pagination'] = [];
        $data['list']=[];
        $data['total_records']='';
        if(!isset($json)){
            return false;
        }
        if (isset($json->status_code) && $json->status_code == $status_code&& isset($json->result)) {
            $data['list'] = $json->result;
            if (!isset($json->total)) {
                $data['total_records'] = 1 ;                
                $json->total = 1;
                
            }else{
                $data['total_records'] = $json->total;                
            }

            $data['pagination'] = array('total' => $json->total, 'limit' => $controller->getLimit(), 'curpage' => $controller->getPage(), 'totalpage' => ceil($json->total / $controller->getLimit()));
        } else {
        }
    }
    public function doCurl_get($controller,$api_url,$status_code,$params,&$data)//need limit and page
    {
        $curl_response = doCurl($api_url, $params, 'GET');
        $json = json_decode(isset($curl_response['output']) ? $curl_response['output'] : NULL);

       /* if (isset($json->status_code) && $json->status_code == globalsetting_Model::PERMISSION_DENIED) {
            redirect('admin/dashboard');
        }*/



        //var_dump($api_url);die;
        if (isset($json->status_code) && $json->status_code == $status_code&& isset($json->result)) {
            $data['list'] = $json->result;
            $data['total_records'] = $json->total;
            $data['pagination'] = array('total' => $json->total, 'limit' => $controller->getLimit(), 'curpage' => $controller->getPage(), 'totalpage' => ceil($json->total / $controller->getLimit()));
        } else {
            $data['error_message'] = $json->message;
            $data['pagination'] = '';
        }
    }

    public function doCurl_post($controller,$api_url,$status_code,$params,&$data)//need limit and page
    {
        $curl_response = doCurl($api_url, $params, 'POST');
        $json = json_decode(isset($curl_response['output']) ? $curl_response['output'] : NULL);

       /* if (isset($json->status_code) && $json->status_code == globalsetting_Model::PERMISSION_DENIED) {
            redirect('admin/dashboard');
        }*/



        //var_dump($api_url);die;
        if (isset($json->status_code) && $json->status_code == $status_code&& isset($json->result)) {
            $data['list'] = $json->result;
            if (isset($json->total)) {
                $data['total_records'] = $json->total;
            }
        } else {
            $data['error_message'] = $json->message;
            $data['pagination'] = '';
        }
    }


    //will clean to other class later
    public function getProvinceList($code)
    {
        $path = API_BASE_LINK.api_Model::CONST_GET_PROVINCE_LIST."?code=".$code;
        $result = doCurl($path,"","");
        if ($result) {
            $result = json_decode($result['output']);
            if(isset($result->result))
            return $result->result[0]->province_list;
        }
        return 0;
    }
    public function getProvinceCityList($code)
    {
        $path = API_BASE_LINK.api_Model::CONST_GET_PROVINCE_CITY_LIST."?code=".$code;
        $result = doCurl($path,"","");
        if ($result) {
            $result = json_decode($result['output']);
            if(isset($result->result))
            return $result->result[0]->city_list;
        }
        return 0;
    }

}

/* End of file Someclass.php */
