<?php
require_once(APPPATH.'modules/base/models/Detail_base.php');

/*
===============================================
Class for call api using do curl
author: joseph
version:0.1
===============================================
*/
class Detail extends Detail_base{

    public function __construct()
    {
        parent::__construct();
        $this->init_base();
    }
    //**
    //a base class for add profile
    //should call by subclass of this
    //**
    protected function _addProfile($params,$url,$code)
    {
        $curl_response = doCurl($url/*'https://httpbin.org/post'*/, $params, 'POST');//get data fail from api               
        $this->checkToken($curl_response['http_status_code']);
        $json = json_decode(isset($curl_response['output']) ? $curl_response['output'] : NULL);
     
        if (isset($json->status_code) && $json->status_code == $code /*&& isset($json->result)*/) {
            $this->_setSuccessMessage($json);
            return true;
        } else {
            $this->_setErrorMessage($json);
            return false;
        }
    }
    //**
    //a base class for add profile and return json result
    //should call by subclass of this
    //**
    protected function _addProfile_Result($params,$url,$code)
    {
       

       $curl_response = doCurl($url/*'https://httpbin.org/post'*/, $params, 'POST');//get data fail from api
        if($url!=API_BASE_LINK.api_Model::API_ADMIN_LOGIN)
        {
            $this->checkToken($curl_response['http_status_code']);
        }

        $json = json_decode(isset($curl_response['output']) ? $curl_response['output'] : NULL);
        if (isset($json->status_code) && $json->status_code == $code /*&& isset($json->result)*/) {
            $this->_setSuccessMessage($json);
            return $json;
        } else {
            if(isset($json))
            {
                $this->_setErrorMessage($json);
                return $json;
            }
            return false;
        }
    }
    //**
    //a base class for get profile set getKey for ur name.
    // should call by subclass of this
    //**
    protected function _getProfile($id,$params,$url,$code,$getKey='code')
    {
        $curl_response = doCurl($url."?".$getKey."=".$id, $params, 'GET');
        $this->checkToken($curl_response['http_status_code']);
        $json = json_decode(isset($curl_response['output']) ? $curl_response['output'] : NULL);
        if (isset($json->status_code) && $json->status_code == $code && isset($json->result)) {
            $this->convertAllCurrency($json->result);
            $this->_updateData($json->result,$json->message);
            return true;
        }
        else {
            $this->_setErrorMessage($json);
            return false;
        }
    }
    //**
    //a base class for get profile set getKey for ur name return json.
    // should call by subclass of this
    //**
    protected function _getProfileJson($id,$params,$url,$code,$getKey='code')
    {
        $curl_response = doCurl($url."?".$getKey."=".$id, $params, 'GET');
        $this->checkToken($curl_response['http_status_code']);
        $json = json_decode(isset($curl_response['output']) ? $curl_response['output'] : NULL);
        if (isset($json->status_code) && $json->status_code == $code && isset($json->result)) {
            return $json;
        }
        else {
            $this->_setErrorMessage($json);
            return false;
        }
    }
    //**
    //a base class for edit profile
    // should call by subclass of this
    //**
    protected function _submitProfile($params,$url,$code,$noShowMessage=false)
    {
        // var_dump($params,$url,$code);exit;
        $curl_response = doCurl($url, $params, 'POST');
        $this->checkToken($curl_response['http_status_code']);
        $json = json_decode(isset($curl_response['output']) ? $curl_response['output'] : NULL);

        if (isset($json->status_code) && $json->status_code == $code ) {
            if(isset($json->result))
            {
                $this->_updateData($json->result,$json->message);
            }            
            if (isset($json->status_code) && $noShowMessage) {
                $this->_offDefaultMessage(false);
            }else{
                $this->_setSuccessMessage($json);
            }

            return true;
        }else if(isset($json->status_code) && $noShowMessage){
            $this->_offDefaultMessage(false);
            return true;
        }
        else{
            $this->_setErrorMessage($json);
            return false;
        }
    }
    //**
    //a base class for delete profile
    // should call by subclass of this
    //**
    protected function _deleteProfile($params,$url,$code)
    {
        $curl_response = doCurl($url, $params, 'POST');
        $this->checkToken($curl_response['http_status_code']);
        $json = json_decode(isset($curl_response['output']) ? $curl_response['output'] : NULL);

        if (isset($json->status_code) && $json->status_code == $code) {
            $this->_setSuccessMessage($json);
            return true;
        }
        else{
            $this->_setErrorMessage($json);
            return false;
        }
    }

}

/* End of file Someclass.php */
