<?php
require_once(APPPATH.'modules/base/models/Detail_base.php');
/*
===============================================
Class for call api using guzzle library + iapps framework.
author: joseph
version:0.1
===============================================
*/
class Detail_guzzle extends Detail_base{


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

        $_api= new Iapps\Http\Api_Model();
        $curl_response = $_api->post($url/*'https://httpbin.org/post'*/, $params, $_api->getAuthenticationHeaders());
        $json=$curl_response;
        $errorMessage =  $curl_response->getMessage();
        $this->checkToken($json->getHeaderCode());
        $this->_updateMessage($json->getMessage());

        $outputResult =  $json->getOutput();
        $isOK = $json->isOK();
        $json->status_code = isset($outputResult['status_code']) ? $outputResult['status_code'] : NULL;
        $json->message = isset($outputResult['message']) ? $outputResult['message'] : NULL;
        if ($isOK && (isset($json->status_code)) && $json->status_code == $code) {
            $this->_setSuccessMessage($json);
            return true;
        }
        else
        {
            $json->message  =  $errorMessage;
            $this->_setErrorMessage($json);
            return false;
        }
    }
    //**
    //a base class for add profile and return json result
    //should call by subclass of this
    //**
    protected function _addProfile_Result($params,$url,$code,$is_set_result_message = true)
    {
        $_api= new Iapps\Http\Api_Model();
        $curl_response = $_api->post($url/*'https://httpbin.org/post'*/, $params, $_api->getAuthenticationHeaders());
        //print_r($url);
        $json=$curl_response;
        $this->checkToken($json->getHeaderCode());
        //$this->_updateMessage($json->getMessage());
        if ($json->isOK()) {
            $_common= new Iapps\Common\Common_function();
            //return $_common->arrayToObject($json->getResults());
            if ($is_set_result_message) {
                $this->_setSuccessMessage($json);
            }
            return $json->getResults();
        } else {
            if ($is_set_result_message) {
                $this->_setErrorMessage($json);
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
        $_api= new Iapps\Http\Api_Model();
        $curl_response = $_api->get($url."?".$getKey."=".$id, $params, $_api->getAuthenticationHeaders());
        $json=$curl_response;

        $this->checkToken($json->getHeaderCode());
       if ($json->isOK()) {
            $_common= new Iapps\Common\Common_function();
            $this->_updateData($json->getResults(),$json->message);
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
        $_api= new Iapps\Http\Api_Model();
        $curl_response = $_api->get($url."?".$getKey."=".$id, $params, $_api->getAuthenticationHeaders());
        $json=$curl_response;
        $this->checkToken($json->getHeaderCode());
        if ($json->isOK()) {
            $_common= new Iapps\Common\Common_function();
            return $json->getResults();
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
    protected function _submitProfile($params,$url,$code)
    {

        $_api= new Iapps\Http\Api_Model();
        $curl_response = $_api->post($url/*'https://httpbin.org/post'*/, $params, $_api->getAuthenticationHeaders());
        $json=$curl_response;
        $this->checkToken($json->getHeaderCode());

        if ($json->isOK()) {
            $this->_updateData($json->getResults(),$json->message);
            $this->_setSuccessMessage($json);
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
        $_api= new Iapps\Http\Api_Model();
        $curl_response = $_api->post($url/*'https://httpbin.org/post'*/, $params, $_api->getAuthenticationHeaders());
        //$_common= new Iapps\Common\Common_function();
        //$json = $_common->arrayToObject($curl_response->getOutput());
        $json=$curl_response;
        $this->checkToken($json->getHeaderCode());
        if ($json->isOK()) {
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
