<?php
/*
===============================================
Base class for api class, should call using detail class and detail guzzle class
author: joseph
version:0.1
===============================================
*/
class Detail_base extends CI_Model{

    protected $_data;//array
    protected $_sessionData;//flag to
    protected $_update_id;//is use to fliter which set of data to be update to optimize . So no need run whole updatedata function and store too much array
    protected $_show_code;
    protected $_display_message;
    public function __construct()
    {
        
    }
    protected function init_base()
    {
        $this->_data=[];
        $this->_sessionData=false;
        $this->load->library('session');
        $this->load->model('base/listing','listing');
        $this->_update_id=0;
        $this->_show_code=false;
        $this->_display_message=true;
    }
    protected function _addProfile($params,$url,$code)
    {
        //to be replace by sub class
    }
    protected function _addProfile_Result($params,$url,$code)
    {
        //to be replace by sub class
    }
    protected function _getProfile($id,$params,$url,$code,$getKey='code')
    {
        //to be replace by sub class
    }
    protected function _getProfileJson($id,$params,$url,$code,$getKey='code')
    {
        //to be replace by sub class
    }
    protected function _submitProfile($params,$url,$code)
    {
        //to be replace by sub class
    }
    protected function _deleteProfile($params,$url,$code)
    {
        //to be replace by sub class
    }

    //if u want to handle message display your own set to false;
    protected function _offDefaultMessage($val)
    {
        $this->_display_message=$val;
    }
    //set success msg and code from api
    protected function _setSuccessMessage($json)
    {
         if(!$this->_display_message){
            return;
        }
        $temp_msg="";
        $temp_code="";
        $_msg="";
        if(isset($json->message))
        {
            $temp_msg=$json->message;
        }
        if(isset($json->status_code))
        {
            $temp_code=$json->status_code;
        }
        else if(isset($json->httpStatusCode))
        {
            $temp_code=$json->httpStatusCode;
        }
        $this->_updateMessage($temp_msg);
        if($this->_show_code){
            $_msg="[".$temp_code."]".$temp_msg;
        }
        else{
            $_msg=$temp_msg;
        }
        log_message('error', 'success_message: '. $_msg);
        $this->session->set_flashdata('success_message', $_msg);
        $this->session->set_userdata('status_code', $temp_code);
          
    }
    //set error msg and code from api
    protected function _setErrorMessage($json)
    {   
        if(!$this->_display_message){
            return;
        }
        $temp_msg="";
        $temp_code="";
        $_msg="";
        if(isset($json->message))
        {
            $temp_msg=$json->message;
        }
        if(isset($json->status_code))
        {
            $temp_code=$json->status_code;
        }
        else if(isset($json->httpStatusCode))
        {
            $temp_code=$json->httpStatusCode;
        }
        
        $this->_updateMessage($temp_msg);
        if($this->_show_code){
            $_msg="[".$temp_code."]".$temp_msg;
        }
        else{
            $_msg=$temp_msg;
        }
        log_message('error', 'error_message: '. $_msg);
        $this->session->set_flashdata('error_message', $_msg);
        $this->session->set_userdata('status_code', $temp_code);
    }
    //set warning msg and code from api
    protected function _setWarningMessage($json)
    {
         if(!$this->_display_message){
            return;
        }
        $temp_msg="";
        $temp_code="";
        $_msg="";
        if(isset($json->message))
        {
            $temp_msg=$json->message;
        }
        if(isset($json->status_code))
        {
            $temp_code=$json->status_code;
        }
        else if(isset($json->httpStatusCode))
        {
            $temp_code=$json->httpStatusCode;
        }
        
        $this->_updateMessage($temp_msg);
        if($this->_show_code){
            $_msg="[".$temp_code."]".$temp_msg;
        }
        else{
            $_msg=$temp_msg;
        }
        log_message('warn', 'warning_message: '. $_msg);
        $this->session->set_flashdata('warning_message', $_msg);
        $this->session->set_userdata('status_code', $temp_code);
    }
    protected function _updateMessage($MSG)
    {
       $this->session->set_userdata('detailMessage',$MSG);
    }
    protected function _updateData($Result,$Message='')
    {
     //ready for being replace
        /*
        switch($this->_update_id)
        {
            case 0:
                //update data set 0
                break;
            case 1:
                //update data set 0
                break;
            default:
            break;
        }
        */
        $this->_data['created_at']      =$this->_verify($Result->created_at);
        $this->_data['created_by_name'] =$this->_verify($Result->created_by_name);
    }
    protected function _setUpdateDataId($val)
    {
        $this->_update_id=$val;
    }
    //**
    //manually update the data
    //**
    public function setValue($Result,$Message='')
    {
        $this->_updateData($Result,$Message='');
    }

    //**
    //auto replace null data with custom data generally
    //**
    protected function _verify(&$var)
    {
        if(is_null($var))
        {
            $var="--";
        }
        else if($var=="")
        {
            $var="--";
        }

        return $var;
    }
    //**
    //auto replace fill date with general date if fail
    //**
    protected function _verifydate(&$var)
    {
        if(is_null($var))
        {
            $var=date("Y-m-d");
        }
        else if($var=="")
        {
            $var="--";
        }
        return $var;
    }
    protected function _verifytime(&$var)
    {
        if(is_null($var))
        {
            $var=date("h:s:i");
        }
        return $var;
    }
    //**
    //get message from each api call
    //**
     public function getMessage()
    {
        return $this->session->userdata('detailMessage');
    }

    //**
    //Repopulate function to store the input data if api call unsuccessful
    //**
    public function storeSession($d)
    {

        $this->session->set_flashdata('detailData',$d);
        $this->_sessionData=true;
        $this->session->set_flashdata('detailSession',$this->_sessionData);
    }
    //**
    //Repopulate function to get the data back from store session
    //**
    public function retiveSession()
    {   if($this->session->flashdata('detailSession')==false)//if didnt store before just return back
            return false;
        $flashData=$this->session->flashdata('detailData');//repopulate
        $this->_data=$flashData;
        $this->_sessionData=false;
        $this->session->set_flashdata('detailSession',$this->_sessionData);
        return true;
    }
    //**
    //Repopulate function get the session store data
    //usually use for View page to view the data
    //example $this->detail->getData("name");
    //**
    public function getData($key)
    {
        if(isset($this->_data[$key]))
        {
            return $this->_data[$key];
        }
        return false;
    }
    //**
    //Repopulate function get whole datas
    //**
    public function getAllData()
    {
        return $this->_data;
    }
    public function getAnswer($integer)
    {
        if($integer==1)
            return "Yes";
        return "No";
    }
    protected function checkToken($http_code)
    {
        if(class_exists ('Admin_detail'))
        {
            $admin= new Admin_detail();
            $admin->IsInvalidAccessToken($http_code);
        }
    }

    public function convertTime($var)
    {
        
        if(!is_null($var) && $var){
            $dataVar=$var;
            $dataVar = date('Y-m-d H:i:s',strtotime($var)); 
            
        }else{
             $dataVar="--";
        }

        return $dataVar;
    }
    // only show year month day
    public function convertToDate($var)
    {
        
        if(!is_null($var) && $var){
            $dataVar=$var;
            $dataVar = date('Y-m-d',strtotime($var)); 
            
        }else{
             $dataVar="--";
        }

        return $dataVar;
    }
    // only show time
    public function convertToTime($var)
    {
        
        if(!is_null($var) && $var){
            $dataVar=$var;
            $dataVar = date('H:i:s',strtotime($var)); 
            
        }else{
             $dataVar="--";
        }

        return $dataVar;
    }
    protected function convertAllCurrency(&$result)
    {
        foreach ($result as $key => &$value)
        {
            if (is_array($value) || is_object($value))
            {
                $this->convertAllCurrency($value);
            }
            else
            {
                $this->currency($value);
            }
        }
    }
    //convert number to 4 decimal
    public function currency(&$var)
    {
        if(is_numeric($var))
        {
            //convert to 4 digit
            if (preg_match('/\.\d{3,}/', $var)) {
            $temp=number_format((float)$var, 4, '.', '');
            $var=$temp;
            return true;
            }
        }
        return false;
    }
     //convert country currency string
    public function currencyCode($code)
    {
         $temp =explode("-", $code);
         return $temp[1];
         
       
    }

    public function encodeSpace(&$val)
    {
        $temp_val=$val;
        $val = str_replace(" ","%20",$temp_val);
        return $val;
    }
    public function replaceSpace(&$val)
    {
        $temp_val=$val;
        $val = str_replace("%20"," ",$temp_val);
        return $val;
    }

    public function countAge(&$birthday)
    {
        if (!is_null($birthday)) {            
            $age = date('Y', time()) - date('Y', strtotime($birthday)) - 1;  
            if (date('m', time()) == date('m', strtotime($birthday))){  
              
                if (date('d', time()) > date('d', strtotime($birthday))){  
                $age++;  
                }  
            }elseif (date('m', time()) > date('m', strtotime($birthday))){  
                $age++;  
            }  

        }else{
            return false;
        }
        
        return $age;
    }

}

/* End of file Someclass.php */
