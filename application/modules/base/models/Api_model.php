<?php

class api_Model extends CI_Model {

    public function __construct()
    {
    }
    //access control
    const CONST_ROLE_MENU_LIST= "account_service/role/menu/list";
    const CODE_ROLE_MENU_LIST_SUCCESS           =3370;
    
    //deposit and workcredit
	
	const PARTNER_DEPOSIT_REQUEST           ="ewallet_service/partner/deposit/request";
	const PARTNER_DEPOSIT_COMPLETE          ="ewallet_service/partner/deposit/complete";
	const PARTNER_DEPOSIT_CANCEL            ="ewallet_service/partner/deposit/cancel";
	const PARTNER_DEPOSIT_CHANNEL           ="ewallet_service/partner/deposit/channel";
	const PARTNER_WORKCREDIT_TOPUP_REQUEST  ="ewallet_service/partner/workcredit/topup/request";
	const PARTNER_WORKCREDIT_TOPUP_COMPLETE ="ewallet_service/partner/workcredit/topup/complete";
	const PARTNER_WORKCREDIT_TOPUP_CHANNEL  ="ewallet_service/partner/workcredit/topup/channel";
	const PARTNER_WORKCREDIT_TOPUP_CANCEL   ="ewallet_service/partner/workcredit/topup/cancel";
	const CONST_ADMIN_WORKCREDIT_GET        ="ewallet_service/admin/workcredit/get";
	const CONST_PARTNER_WORKCREDIT_GET      ="ewallet_service/partner/workcredit/get";
	const CONST_GET_COUNTRY_CURRENCY_LIST   ='payment_service/country/currency/list';
    const CONST_COUNTRY_CURRENCY_GET        ='payment_service/country/currency/getbycountrycode';


	const CODE_PARTNER_DEPOSIT_REQUEST_SUCCESS           =5500;
	const CODE_PARTNER_DEPOSIT_COMPLETE_SUCCESS          =5502;
	const CODE_PARTNER_DEPOSIT_CANCEL_SUCCESS            =5501;
	const CODE_PARTNER_DEPOSIT_CHANNEL_SUCCESS           =9150;
	const CODE_PARTNER_WORKCREDIT_TOPUP_REQUEST_SUCCESS  =5500;
	const CODE_PARTNER_WORKCREDIT_TOPUP_COMPLETE_SUCCESS =5502;
	const CODE_PARTNER_WORKCREDIT_TOPUP_CHANNEL_SUCCESS  =9150;
	const CODE_PARTNER_WORKCREDIT_TOPUP_CANCEL_SUCCESS   =5501;
	const CODE_ADMIN_WORKCREDIT_GET_SUCCESS              =5100;
	const CODE_PARTNER_WORKCREDIT_GET_SUCCESS            =5100;
	const CODE_GET_COUNTRY_CURRENCY_LIST                 =2022;
	//end deposit and workcredit
	//photo upload
	const CONST_PARTNER_PHOTO_UPLOAD= "account_service/partner/photo/upload";
	const CODE_PARTNER_PHOTO_UPLOAD_SUCCESS=0;
	const CONST_AGENT_PHOTO_UPLOAD= "account_service/partner/photo/upload";
	const CONST_AGENT_ID_FONT_PHOTO_UPLOAD= "account_service/partner/agent/idfront/upload";
	const CONST_AGENT_ID_BACK_PHOTO_UPLOAD= "account_service/partner/agent/idback/upload";
	const CODE_AGENT_PHOTO_UPLOAD_SUCCESS=0;
	
	//end photo upload
	//withdraw workcredit
	const PARTNER_WORKCREDIT_WITHDRAWAL_REQUEST ="ewallet_service/partner/workcredit/withdrawal/request";
	const PARTNER_WORKCREDIT_WITHDRAWAL_COMPLETE ="ewallet_service/partner/workcredit/withdrawal/complete";
	const PARTNER_WORKCREDIT_WITHDRAWAL_CANCEL ="ewallet_service/partner/workcredit/withdrawal/cancel";

    // limit workcredit

    const CONST_EDIT_WORKCREDIT_CHANGE_LIMIT = "ewallet_service/partner/workcredit/changelimit";	
    const CONST_PARTNER_WORKCREDIT_ACTIVATE  = "ewallet_service/partner/workcredit/activate";	

    const CODE_EDIT_WORKCREDIT_CHANGE_LIMIT_SUCCESS = 5526;
    const CODE_PARTNER_WORKCREDIT_ACTIVATE_GET_SUCCESS = 5009;


	const CODE_PARTNER_WORKCREDIT_WITHDRAWAL_REQUEST_SUCCESS =0;
	const CODE_PARTNER_WORKCREDIT_WITHDRAWAL_COMPLETE_SUCCESS =0;
	const CODE_PARTNER_WORKCREDIT_WITHDRAWAL_REQUEST_CANCEL =0;

	//end withdraw workcredit


 //help to clean the api not sure which 1 is needed

    //admin log in
const CONST_API_ADMIN_LOGIN                  	="account_service/partner/login";
const CONST_SENT_OTP                            ="account_service/partner/forgetPWD";
const CONST_VERIFY_OTP                          ="account_service/partner/verifyOtp";
const CONST_ADMIN_ADD                           ="account_service/adminuser/add";
const CONST_ADMIN_GET_LIST                      ="account_service/adminuser/list";

const CONST_ADMIN_GET_ROLE_LIST                 ="account_service/role/adminuser/list";
const CONST_ADMIN_EDIT_PASSWORD                 ="account_service/partner/changePWD/";
//
//admin log in
const CODE_API_ADMIN_LOGIN_SUCCESS              =3019;
const CODE_SENT_OTP_SUCCESS                     =3049;
const CODE_ADMIN_ADD_SUCCESS                    =3712;
const CODE_ADMIN_GET_LIST_SUCCESS               =3716;
const CODE_ADMIN_GET_ROLE_LIST_SUCCESS          =3100;
const CODE_ADMIN_EDIT_PASSWORD_SUCCESS          =3719;
//end admin log in
const CONST_CORPORATE_LIST                      ='account_service/corporate/list';
const CONST_CORPORATE_SEARCH                    ='account_service/corporate/list';
const CONST_CORPORATE_ADD                       ='account_service/corporate/add';
const CONST_CORPORATE_GET                       ='account_service/corporate/get';
const CONST_CORPORATE_EDIT                      ='account_service/corporate/edit';
const CONST_CORPORATE_DELETE                    ='';
const CODE_GET_CORPORATE_FAILED                 =2003;
const CODE_ADD_CORPORATE_SUCCESS                =3512;
const CODE_EDIT_CORPORATE_SUCCESS               =3514;
const CODE_GET_CORPORATE_SUCCESS                =3516;
// const CODE_ADD_STAFF_SUCCESS                    =3712;
const CODE_EDIT_STAFF_SUCCESS                   =3714;
const CONST_ADD_COUNTRY_LANG                    ='country_service/country/language/add';
const CONST_GET_COUNTRY_LANG                    ='country_service/country/language/get';
const CONST_EDIT_COUNTRY_LANG                   ='country_service/country/language/edit';
const CONST_GET_COUNTRY_SEARCH                  ='country_service/country/search';
const CONST_GET_COUNTRY_LIST                    ='country_service/country/list';
const CONST_GET_LANG                            ='country_service/language/get';
const CONST_GET_LANG_LIST                       ='country_service/language/list';
const CONST_ADD_LANG                            ='country_service/language/add';
const CONST_EDIT_LANG                           ='country_service/language/edit';
const CONST_DELETE_COUNTRY_LANG                 ='';

const CONST_GET_PROVINCE_LIST                   ='country_service/country/province/get';
const CONST_GET_PROVINCE_CITY_LIST              ='country_service/country/province/city/get';
const CONST_GET_CITY_LIST                       ="country_service/city/list";
const CONST_GET_CITY_LIST_CODE                  ="country_service/city/getbyprovincecode";
const CONST_GET_PROVINCE_LIST_CODE              = "country_service/province/getbycountrycode";
const CONST_ADD_CITY                            = "country_service/province/city/add";
const CONST_EDIT_CITY                           = "country_service/province/city/edit";
const CONST_GET_PROVINCE_LIST_ALL               = "country_service/province/list";
const CONST_GET_CITY_CODE                       = "country_service/province/city/getbyprovincecode";
const CONST_GET_COUNTRY_CODE                    = "country_service/country/get";
const CODE_GET_COUNTRY_CODE_SUCCESS             = 1002;



const CONST_SEARCH_USER                        = "account_service/partner/search/user";


const CODE_ADD_COUNTRY_SUCCESS                  = 1000;
const CODE_ADD_COUNTRY_FAILED                   = 1001;
const CODE_GET_COUNTRY_SUCCESS                  = 1002;
const CODE_GET_COUNTRY_FAILED                   = 1003;
const CODE_GET_CITY_SUCCESS                     =1042;
const CODE_GET_LANGUAGE_SUCCESS                 = 1012;//1012
const CODE_GET_LANGUAGE_LIST_SUCCESS            = 1012;
//Agent
// const CODE_ADD_AGENT_FAIL                    =3801;
// const CODE_ADD_AGENT_SUCCESS                 =3802;
const CODE_EDIT_AGENT_SUCCESS                   =3993;
const CODE_EDIT_AGENT_FAIL                      =3992;
const CODE_GET_AGENT_SUCCESS                    =3996;
const CODE_GET_AGENT_FAILED                     =3995;

const CODE_SEARCH_USER_SUCCESS                  =3024;



// **update
// const CODE_STORE_BRANCH_AGENT_UPDATE_FAIL       = 3809;
// const CODE_STORE_BRANCH_AGENT_UPDATE_SUCCESS    = 3810;
// const CODE_STORE_FRANCHISE_AGENT_UPDATE_FAIL    = 3811;
// const CODE_STORE_FRANCHISE_AGENT_UPDATE_SUCCESS = 3812;
// const CODE_AGENT_USER_UPDATE_FAIL               = 3993;
// const CODE_AGENT_USER_UPDATE_SUCCESS            = 3994;
// create
const CODE_MOBILE_AGENT_UPDATE_SUCCESS = 3994;

const CODE_CREATE_MOBILE_AGENT_SUCCESS   = 3992;


// const CODE_AGENT_USER_NOT_FOUND              = 3995;
// const CODE_GET_AGENT_USER_SUCCESS            = 3996;
// const CODE_GET_AGENT_USER_FAILED             = 3997;
//**
const URL_GET_AGENT_LIST                        = 'account_service/partner/agent/list';
const URL_GET_AGENT_INFO                        = 'account_service/partner/agent/get';
const URL_AGENT_EDIT                            = 'account_service/partner/agent/edit';
const URL_MOBILE_AGENT_ADD                      = 'account_service/partner/agent/add';

const URL_GET_COUNTRY_LIST                      = 'country/list';
const URL_GET_PROVINCE_LIST                     = 'country/province/list?';
const URL_GET_CITY_LIST                         = 'country/province/city/get?';
//================================================================
const API_ADMIN_LOGIN                           = 'account_service/partner/login';
const API_ADMIN_GET_OTP                         = 'account_service/partner/forgetPwd';
const API_ADMIN_VERIFY_OTP                      = 'account_service/partner/verifyOtp';
const API_ADMIN_CHANGE_PASSWORD                 = 'account_service/partner/changePWD';
const CONST_ADMIN_GET                           = 'account_service/partner/partneradminuser/get';
const CONST_ADMIN_EDIT                          = 'account_service/partner/partneradminuser/edit';
const CODE_ADMIN_LOGIN_SUCCESS                  = 3019;
const CODE_ADMIN_GET_OTP_SUCCESS                = 3004;
const CODE_VERIFY_OTP_SUCCESS                   = 3718;
const CODE_CHANGE_PASSWORD_SUCCESS              = 3719;
const CODE_ADMIN_GET_SUCCESS                    = 3716;
const CODE_ADMIN_EDIT_SUCCESS                   = 3714;
// not using now
const API_ADMIN_GET_VENUE                       = 'admin/venue';
const API_ADMIN_PROFILE                         = 'admin/profile';
const CODE_ADMIN_PROFILE_INFO                   = 1009;
const CODE_ADMIN_LOGIN_FAIL                     = 1021;
const CODE_PASSWORD_EXPIRED                     = 1508;
const CODE_ADMIN_RESETPW_FAIL                   = 1020;
const CODE_ADMIN_CHANGE_EXPIREDPW_SUCCESS       = 1515;
const CODE_ADMIN_VALIDATEPW_SUCCESS             = 1519;
const CODE_LOGIN_VENUE_INFO                     = 7010;
const CODE_ADMIN_VENUE_SUCESS                   = 1159;
const INCORRECT_PASSWORD                        = 'Incorrect Password';
const PASSWORD_SUCCESSFULL                      = 'Password has been changed Successfully';
const PASSWORD_FAIL                             = 'Password not updated';
const CODE_ADD_CURRENCY_SUCCESS                 =2000;
const CODE_ADD_CURRENCY_FAILED                  =2001;
const CODE_GET_CURRENCY_SUCCESS                 =2002;
const CODE_GET_CURRENCY_FAILED                  =2003;
const CODE_EDIT_CURRENCY_SUCCESS                =2004;
const CODE_EDIT_CURRENCY_FAILED                 =2005;
const CODE_EDIT_COUNTRY_SUCCESS                 = 1004;
const CODE_EDIT_COUNTRY_FAILED                  = 1005;
const CODE_ADD_LANGUAGE_SUCCESS                 = 1010;
const CODE_ADD_LANGUAGE_FAILED                  = 1011;
const CODE_GET_LANGUAGE_FAILED                  = 1013;
const CODE_EDIT_LANGUAGE_SUCCESS                = 1014;
const CODE_EDIT_LANGUAGE_FAILED                 = 1015;
const CODE_ADD_COUNTRY_LANGUAGE_SUCCESS         = 1020;
const CODE_ADD_COUNTRY_LANGUAGE_FAILED          = 1021;
const CODE_GET_COUNTRY_LANGUAGE_SUCCESS         = 1022;
const CODE_GET_COUNTRY_LANGUAGE_FAILED          = 1023;
const CODE_REMOVE_COUNTRY_LANGUAGE_SUCCESS      = 1024;
const CODE_REMOVE_COUNTRY_LANGUAGE_FAILED       = 1025;
const CODE_GET_PAYMENT_SUCCESS                  =2010;
const CODE_ADD_PAYMENT_SUCCESS                  =2021;
const CODE_GET_PAYMENT_CURRENCY_SUCCESS         =2022;
const CODE_GET_PROVINCE_SUCCESS                 =1032;
const CODE_GET_PROVINCE_CITY_SUCCESS            =1042;




// zhen code
const URL_GET_ROLE_LIST = 'account_service/role/agent/list';

const CODE_GET_ROLE_SUCCESS = 3100;

const URL_GET_AGENT_ROLE_LIST = 'account_service/role/getbyuserprofileid';
const CODE_GET_AGENT_ROLE_SUCCESS = 3110;

const CONST_GET_ATTR_LIST                       = 'account_service/attribute/value/get/all';
const CONST_GET_ID_TYPE_LIST                    = 'account_service/attribute/value/get';
const CODE_GET_ID_TYPE_SUCCESS   = 3057;




// Store Agent

const URL_GET_STORE_AGENT_LIST = 'account_service/partner/corporatestoreagent/list';
const CODE_GET_STORE_AGENT_SUCCESS = 3802;

const URL_GET_SUB_ROLE_LIST = 'account_service/role/corporatesubagent/list';
const CODE_GET_SUB_ROLE_SUCCESS = 3100;

const CONST_STORE_AGENT_GET = 'account_service/partner/corporatestoreagent/get';

const CONST_STORE_AGENT_EDIT = 'account_service/partner/corporatestoreagent/edit';
const CODE_EDIT_STORE_AGENT_SUCCESS = 3810;

const CONST_STORE_AGENT_ADD = 'account_service/partner/corporatestoreagent/add';
const CODE_ADD_STORE_AGENT_SUCCESS = 3804;

// super admin
const CONST_SUPER_ADMIN_LIST = 'account_service/partner/corporatestoresuperadmin/list';
const CODE_GET_SUPER_ADMIN_SUCCESS = 3812;

const CONST_SUPER_ADMIN_USER_ADD  = 'account_service/partner/corporatestoresuperadmin/add';
const CODE_ADD_SUPSER_ADMIN_SUCCESS = 3712;

const CONST_SUPER_ADMIN_GET = 'account_service/partner/corporatestoresuperadmin/get';

const CONST_SUPER_ADMIN_EDIT = 'account_service/partner/corporatestoresuperadmin/edit';
const CODE_EDIT_SUPER_ADMIN_SUCCESS = 3714;

// admin  staff
const CONST_ADMIN_STAFF_LIST  = 'account_service/partner/partneradminuser/list';
const CODE_GET_ADMIN_STAFF_SUCCESS = 3716;
const CONST_GET_CORPORATE_ID_LIST  = 'account_service/partner/structure/upline';
const CODE_GET_CORPORATE_ID_SUCCESS = 3024;


const CONST_ADMIN_STAFF_GET = 'account_service/partner/partneradminuser/get';

const CONST_GET_ROLE_ADMIN_STAFF_LIST = 'account_service/role/partneradminstaff/list'; 
const CODE_GET_ROLE_ADMIN_STAFF_SUCCESS = 3100;

const CONST_ADMIN_STAFF_EDIT = 'account_service/partner/partneradminuser/edit';
const CODE_EDIT_ADMIN_STAFF_SUCCESS = 3714;

const CONST_ADMIN_STAFF_ADD = 'account_service/partner/partneradminuser/add';
const CODE_ADD_ADMIN_STAFF_SUCCESS = 3712;

// staff
const CONST_GET_ROLE_STAFF_LIST = 'account_service/role/partnerstorestaff/list';
const CODE_GET_ROLE_STAFF_SUCCESS = 3100;

const CONST_STAFF_ADD = 'account_service/partner/storestaff/add';
const CODE_ADD_STAFF_SUCCESS  = 3808;

const URL_GET_STAFF_LIST      = 'account_service/partner/storestaff/list';
const CODE_GET_STAFF_SUCCESS  = 3818;

const CONST_STAFF_GET = 'account_service/partner/storestaff/get'; 

const CONST_STAFF_EDIT       = 'account_service/partner/storestaff/edit';
const CODE_STAFF_EDIT_SUCCESS = 3814;
//  RO  PANEL
const URL_ADD_WORLDCHECK   = 'user_credit_service/index.php/partner/user/worldcheck/save';
const CODE_ADD_WORLDCHECK_SUCCESS = 12520;

const URL_GET_WORLDCHECK_BY_ID = 'user_credit_service/index.php/partner/user/worldcheck/get';
const CODE_GET_WORLDCHECK_SUCCESS = 12522;

const URL_GET_USER_RISK_LEVEL_BY_USER_ID = 'user_credit_service/index.php/partner/user/risklevel/getbyuser';
const URL_GET_USER_RISK_LEVEL_BY_ID  = 'user_credit_service/index.php/partner/user/risklevel/getbyid';
const URL_GET_USER_RISK_LEVEL_BY_IDS = 'user_credit_service/index.php/partner/user/risklevel/getbyusers';
const CODE_GET_USER_RISK_LEVEL_SUCCESS  = 12530;


const URL_UPDATE_USER_RISK_LEVEL = 'account_service/partner/userrisklevel/get';
const CODE_UPDATE_USER_RISK_LEVEL_SUCCESS  = 4474;

const URL_VERIFY_USER_STATUS = 'remittance_service/partner/user/profile/verify';
const CODE_VERIFY_USER_STATUS_SUCCESS  = 4319;

const URL_GET_ADDITIONAL_DOCUMENTS_LIST  = 'remittance_service/partner/document/get';
const CODE_GET_ADDITIONAL_DOCUMENTS_LIST_SUCCESS = 4422;

const CONST_ADD_DOC_DELETE = 'remittance_service/partner/document/remove';
const ADD_DOC_DELETE_SUCCESS = 4424;

const CONST_ADD_DOC_UPLOAD 	= 'remittance_service/partner/document/upload';
const CONST_ADD_DOC_UPLOAD_SUCCESS = 4420;

// OFAC,UN,MAS Matching List
const URL_GET_MATCH_LIST = 'user_credit_service/partner/riskmatch/status/list'; 
const CODE_GET_MATCH_SUCCESS = 12588;

const URL_GET_OFAC_UN_MAS_STATUS_BY_IDS = 'user_credit_service/index.php/partner/user/ofac/getbyusers';
const CODE_GET_OFAC_UN_MAS_STATUS_SUCCESS = 12564;

// watchList 
const URL_GET_WATCH_LIST_LIST = 'user_credit_service/partner/user/watchlist/getbyusers'; 
const CODE_GET_WATCH_LIST_SUCCESS = 12960;

const CONST_MATCH_GET = 'user_credit_service/partner/riskmatch/status/get';
const CODE_GET_MATCH_DETAIL_SUCCESS  = 12588;

const CONST_MAS_UPLOAD = 'user_credit_service/partner/risksource/mas/upload';
const CONST_MAS_SUCCESS = 12558;

const URL_CONFIRM_MATCH_STATUS = 'user_credit_service/partner/riskmatch/status/approval';
const CODE_CONFIRM_MATCH_STATUS_SUCCESS = 12592;

// user risk level 
const URL_EDIT_USER_RISK = 'user_credit_service/index.php/partner/user/risklevel/save';
const CODE_EDIT_USER_RISK_SUCCESS = 12534;

const URL_USER_RISK_LEVEL_UPDATE = 'user_credit_service/index.php/partner/user/risklevel/approval';
const CODE_USER_RISK_LEVEL_UPDATE_SUCCESS = 12536;

const URL_GET_USERS_RISK_LEVEL_LIST = 'user_credit_service/index.php/partner/user/risklevel/list';
const CODE_GET_USERS_RISK_LEVEL_SUCCESS = 12530;

// // profit_sharing
// const URL_GET_PROFIT_SHARING_LIST = '/profit/sharing/list';
// const CODE_GET_PROFIT_SHARING_SUCCESS = 4444;


//users 
const URL_GET_USERS_LIST = 'remittance_service/partner/user/list';
const CODE_GET_USERS_SUCCESS =4154;

// world check status
const URL_GET_USERS_WORLD_CHECK_STATUS_BY_IDS = 'user_credit_service/index.php/partner/user/worldcheck/findbyids';
const CODE_GET_USERS_WORLD_CHECK_STATUS_SUCCESS  = 12522;

const URL_GET_USERS_DETAILS = 'remittance_service/partner/user/profile/get';
const CODE_GET_USERS_DETAILS_SUCCESS  = 4154;

//POI info
const  CONST_POI_UPDATE = 'lbs_service/agent/saveorupdatepoi';
const  CODE_UPDATE_POI_SUCCESS = 7501;
const CONST_GET_POI_INFO  = 'lbs_service/agent/findagentbyagentId';
const CODE_GET_POI_INFO_SUCCESS  = 7503;

// transaction 
const URL_GET_TRANSACTION_LIST  =  'remittance_service/partner/remittrancetransaction/list';
const CODE_GET_TRANSACTION_SUCCESS = 4137;

const URL_GET_REMITTANCE_TRANSACTION_LIST = 'remittance_service/partner/transaction/remittance/list';

const CONST_REMITTANCES_TRANSACTION_DETAIL_GET = 'remittance_service/partner/transaction/remittance/detail';
const CONST_TRANSACTION_DETAIL_GET = 'remittance_service/partner/transaction/history/detail/refid';
const CODE_GET_TRANSACTION_DETAIL_SUCCESS =9092;

const URL_GET_REFUND_INFO = 'remittance_service/partner/transaction/refund/get';
const CODE_GET_REFUND_INFO_SUCCESS =9500;

const CONST_RECIPIENT_DETAIL_GET = 'remittance_service/partner/recipient/get';
const CODE_GET_RECIPIENT_DETAIL_SUCCESS =4296;
// view delivery
const CONST_DELIVERY_DETAIL_GET = 'delivery_service/partner/transaction/history/detail/refid';
const CODE_GET_DELIVERY_DETAIL_SUCCESS 	=9092;




const URL_GET_REASON_LIST = 'remittance_service/attribute/value/get';
const CODE_GET_REASON_SUCCESS = 3056 ;

const URL_REJECT_TRANSACTION_STATUS ='remittance_service/transaction/reject'; 
const URL_APPROVE_TRANSACTION_STATUS = 'remittance_service/transaction/approve';
const CODE_REJECTED_TRANSACTION_STATUS_SUCCESS = 4146;
const CODE_APPROVED_TRANSACTION_STATUS_SUCCESS = 4144;



const URL_CONFIRM_DELIVERY = 'remittance_service/partner/remittance/cashout/complete';
const CODE_CONFIRM_DELIVERY_SUCCESS = 4701;

//rate
 //======================================
		const CONST_REMITTANCE_SERVICE_PARTNER_RATES_ADD                         ="remittance_service/partner/rate/add";
		const CONST_REMITTANCE_SERVICE_PARTNER_RATES_EDITABLE                    ="remittance_service/partner/rate/editable";
		const CONST_REMITTANCE_SERVICE_PARTNER_RATES_LIST                        ="remittance_service/partner/rate/list";
		const CONST_REMITTANCE_SERVICE_PARTNER_RATES_PENDING                     ="remittance_service/partner/rate/pending";//approve
		const CONST_REMITTANCE_SERVICE_PARTNER_RATES_STATUS_UPDATE               ="remittance_service/partner/rate/status/update";//aprove
		const CONST_REMITTANCE_SERVICE_PARTNER_CONFIG_RATE_APPROVING_LIST        ="remittance_service/partner/config/rates/approving/list";
		const CONST_ADMIN_TRANSACTION_HISTORY_DETAIL                             ="admin/transaction/history/detail";
		const CONST_REMITTANCE_SERVICE_REMITTANCECONFIG_LIST                     ="remittance_service/partner/config/rates/list";
		const CONST_CORP_SERV_REMITTANCECONFIG_GET                               ='remittance_service/corp/serv/remittanceconfig/get';
		const CONST_REMITTANCE_SERVICE_REMITTANCE_CONFIG_GET                     ="remittance_service/remittanceconfig/get";
		
		
		const CODE_REMITTANCE_SERVICE_REMITTANCECONFIG_LIST_SUCCESS              =4201;//4104
		const CODE_REMITTANCE_SERVICE_PARTNER_RATES_EDITABLE_SUCCESS             =4104;
		const CODE_REMITTANCE_SERVICE_PARTNER_RATES_ADD_SUCCESS                  =4100;
		const CODE_REMITTANCE_SERVICE_PARTNER_RATES_LIST_SUCCESS                 =4104;
		const CODE_REMITTANCE_SERVICE_PARTNER_CONFIG_RATE_APPROVING_LIST_SUCCESS =4201;
		const CODE_REMITTANCE_SERVICE_PARTNER_RATES_PENDING_SUCCESS              =4104;
		const CODE_REMITTANCE_SERVICE_PARTNER_RATES_STATUS_UPDATE_SUCCESS        =4118;
		const CODE_CORP_SERV_REMITTANCECONFIG_GET_SUCCESS                        =4201;
		const CODE_REMITTANCE_SERVICE_REMITTANCE_CONFIG_GET_SUCCESS              =4201;



	//TRANSACTION

	const URL_GET_AGENT_TRANSACTION_LIST                   = 'report_service/partner/mobileagent/transaction/list';
	const CODE_GET_AGENT_TRANSACTION_SUCCESS               = 6170;

	const URL_GET_STOREAGENT_TRANSACTION_LIST              = 'report_service/partner/storeagent/transaction/list';
	const CODE_GET_STOREAGENT_TRANSACTION_SUCCESS          = 6170;

	const URL_GET_MAINAGENT_TRANSACTION_LIST                = 'report_service/partner/mainagent/transaction/list';
	const CODE_GET_MAINAGENT_TRANSACTION_SUCCESS            = 6170;

	const URL_GET_STAFF_TRANSACTION_LIST                    = 'report_service/partner/staff/transaction/list';
	const CODE_GET_STAFF_TRANSACTION_SUCCESS                = 6170;

	const CONST_CORPORATE_TRANSACTION_LIST          = 'report_service/partner/mainagent/transaction/list';
	const CONST_BILL_TRANSACTION_DETAIL             = 'bill_service/admin/transaction/history/detail';
	const CONST_EWALLET_TRANSACTION_DETAIL          = 'ewallet_service/admin/transaction/history/detail';
    const CONST_REMITTANCE_TRANSACTION_DETAIL       = 'remittance_service/partner/transaction/history/detail';
	const CODE_GET_TRANSACTION_DETAIL               = 9092;

	const CONST_PAYMENT_MODE_LIST                   ='payment_service/payment_mode/list';

	const CODE_GET_MAIN_AGENT_TRANSACTION  = 6170;

//REPORT
    const URL_GET_DAILY_REMITTANCE_REPORT_CSV           = 'payment_service/report/agungtransaction';
    const URL_GET_CUSTOMER_REPORT_DETAIL                = 'remittance_service/report/agungcustomer';
    const CODE_GET_CUSTOMER_REPORT_DETAIL_SUCCESS       = 4872;

    const CONST_USER_ROLE_LIST                          ='ACCOUNT_service/payment_mode/list';
    const CODE_GET_USER_ROLE_LIST                       = 6170;

      

    /** deposit tracker constants **/
        
    const URL_GET_CHANNEL_LIST = 'remittance_service/admin/remittanceconfig/search';
    const CODE_GET_CHANNEL_LIST_SUCCESS = 4201; 
    const URL_GET_ADMIN_USER_INFO = 'account_service/service/user/get';
    const CODE_GET_ADMIN_USER_PROFILE_SUCCESS = 3024;
    const CONST_USER_NOT_ACCESSIBLE = '3021';
    const CODE_ADD_DEPOSIT_SUCCESS                 = 4800;
    const CODE_ADD_DEPOSIT_FAILED                  = 4801;
    const CODE_EDIT_DEPOSIT_SUCCESS                = 4802;
    const CODE_EDIT_DEPOSIT_FAILED                 = 4803;
    const CODE_CANCEL_DEPOSIT_SUCCESS              = 4804;
    const CODE_CANCEL_DEPOSIT_FAILED               = 4805;
    const CODE_APPROVE_DEPOSIT_SUCCESS             = 4806;
    const CODE_APPROVE_DEPOSIT_FAILED              = 4807;
    const CODE_REJECT_DEPOSIT_SUCCESS              = 4808;
    const CODE_REJECT_DEPOSIT_FAILED               = 4809;
    const CODE_GET_DEPOSIT_SUCCESS                 = 4810;
    const CODE_GET_DEPOSIT_FAILED                  = 4811;
    const CODE_LIST_DEPOSIT_SUCCESS                = 4812;
    const CODE_LIST_DEPOSIT_FAILED                 = 4813;
    const CODE_LIST_PENDING_DEPOSIT_SUCCESS        = 4814;
    const CODE_LIST_PENDING_DEPOSIT_FAILED         = 4815;     
    const CODE_ADD_TOPUP_SUCCESS                   = 4816;
    const CODE_ADD_TOPUP_FAILED                    = 4817;
    const CODE_CANCEL_TOPUP_SUCCESS                = 4818;
    const CODE_CANCEL_TOPUP_FAILED                 = 4819;
    const CODE_APPROVE_TOPUP_SUCCESS               = 4820;
    const CODE_APPROVE_TOPUP_FAILED                = 4821;
    const CODE_REJECT_TOPUP_SUCCESS                = 4822;
    const CODE_REJECT_TOPUP_FAILED                 = 4823;
    const CODE_GET_TOPUP_SUCCESS                   = 4824;
    const CODE_GET_TOPUP_FAILED                    = 4825;
    const CODE_LIST_TOPUP_SUCCESS                  = 4826;
    const CODE_LIST_TOPUP_FAILED                   = 4827;
    const CODE_LIST_PENDING_TOPUP_SUCCESS          = 4828;
    const CODE_LIST_PENDING_TOPUP_FAILED           = 4829;
    const CODE_ADD_DEDUCTION_SUCCESS               = 4830;
    const CODE_ADD_DEDUCTION_FAILED                = 4831;
    const CODE_CANCEL_DEDUCTION_SUCCESS            = 4832;
    const CODE_CANCEL_DEDUCTION_FAILED             = 4833;
    const CODE_APPROVE_DEDUCTION_SUCCESS           = 4834;
    const CODE_APPROVE_DEDUCTION_FAILED            = 4835;
    const CODE_REJECT_DEDUCTION_SUCCESS            = 4836;
    const CODE_REJECT_DEDUCTION_FAILED             = 4837;
    const CODE_GET_DEDUCTION_SUCCESS               = 4838;
    const CODE_GET_DEDUCTION_FAILED                = 4839;
    const CODE_LIST_DEDUCTION_SUCCESS              = 4840;
    const CODE_LIST_DEDUCTION_FAILED               = 4841;
    const CODE_LIST_PENDING_DEDUCTION_SUCCESS      = 4842;
    const CODE_LIST_PENDING_DEDUCTION_FAILED       = 4843;
    const CODE_PROCESS_DEDUCTION_SUCCESS           = 4844;
    const CODE_PROCESS_DEDUCTION_FAILED            = 4845;
    const CODE_ADD_HISTORY_SUCCESS                 = 4846;
    const CODE_ADD_HISTORY_FAILED                  = 4847;
    const CODE_GET_HISTORY_LIST_SUCCESS            = 4848;
    const CODE_GET_HISTORY_LIST_FAILED             = 4849;
//    const CODE_GET_TRANSACTION_SUCCESS             = 4850;
    const CODE_GET_TRANSACTION_FAILED              = 4851;

    const CODE_PHOTO_UPLOAD_SUCCESS                = 4852;
    const CODE_PHOTO_UPLOAD_FAILED                 = 4853;

    const CODE_GET_TRACKERS_SUCCESS                = 4854;
    const CODE_GET_TRACKERS_FAILED                 = 4855;
    const CODE_LIST_TRACKERS_SUCCESS               = 4856;
    const CODE_LIST_TRACKERS_FAILED                = 4857;

    const CODE_LIST_TRANSACTION_SUCCESS            = 4858;
    const CODE_LIST_TRANSACTION_FAILED             = 4859;
    const CODE_GET_PENDING_DEPOSIT_SUCCESS         = 4860;
    const CODE_GET_PENDING_DEPOSIT_FAILED          = 4861;


    const CODE_GET_DEPOSIT_USER_SUCCESS            = 4862;
    const CODE_GET_DEPOSIT_USER_FAILED             = 4863;
    const CODE_LIST_DEPOSIT_USER_SUCCESS           = 4864;
    const CODE_LIST_DEPOSIT_USER_FAILED            = 4865;
    const CODE_ADD_DEPOSIT_USER_SUCCESS            = 4866;
    const CODE_ADD_DEPOSIT_USER_FAILED             = 4867;
    const CODE_EDIT_DEPOSIT_USER_SUCCESS           = 4868;
    const CODE_EDIT_DEPOSIT_USER_FAILED            = 4869;



    const CODE_PAYMENT_MODE_ATTRIBUTE_GET_SUCCESS  = 6086;
    const CODE_PAYMENT_MODE_ATTRIBUTE_GET_FAILED   = 6087;   

    
    const CONST_DEPOSIT_TRACKER_ADD     = 'remittance_service/partner/deposittracker/create';
    const CONST_DEPOSIT_TRACKER_EDIT    = 'remittance_service/partner/deposittracker/update';
    const CONST_DEPOSIT_TRACKER_VIEW    = 'remittance_service/partner/deposittracker/view';

    const CONST_DEPOSIT_TRACKER_APPROVE = 'remittance_service/partner/deposittracker/approve';
    const CONST_DEPOSIT_TRACKER_REJECT  = 'remittance_service/partner/deposittracker/reject';

    const CONST_DEPOSIT_TRACKER_DELETE  = 'remittance_service/partner/deposittracker/delete';
    const CONST_DEPOSIT_TRACKER_LIST    = 'remittance_service/partner/deposittracker/list';
    const CONST_DEPOSIT_TRACKER_LIST_PENDING = 'remittance_service/partner/deposittracker/listpendingdeposit';

    const CONST_DEPOSIT_TOPUP_ADD       = 'remittance_service/partner/deposittracker/topup/add';
    const CONST_DEPOSIT_TOPUP_VIEW      = 'remittance_service/partner/deposittracker/topup/view';
    const CONST_DEPOSIT_TOPUP_LIST      = 'remittance_service/partner/deposittracker/topup/list';
    const CONST_DEPOSIT_TOPUP_PENDING   = 'remittance_service/partner/deposittracker/topup/listpendingtopup';

    const CONST_DEPOSIT_TOPUP_APPROVE   = 'remittance_service/partner/deposittracker/topup/approve';
    const CONST_DEPOSIT_TOPUP_REJECT    = 'remittance_service/partner/deposittracker/topup/reject';
    const CONST_DEPOSIT_TOPUP_CANCEL    = 'remittance_service/partner/deposittracker/topup/cancel';

    const CONST_DEPOSIT_DEDUCTION_LIST  = 'remittance_service/partner/deposittracker/deduction/list';
    const CONST_DEPOSIT_DEDUCTION_VIEW  = 'remittance_service/partner/deposittracker/deduction/view';
    const CONST_DEPOSIT_DEDUCTION_ADD   = 'remittance_service/partner/deposittracker/deduction/add';

    const CONST_DEPOSIT_DEDUCTION_APPROVE = 'remittance_service/partner/deposittracker/deduction/approve';
    const CONST_DEPOSIT_DEDUCTION_REJECT = 'remittance_service/partner/deposittracker/deduction/reject';
    const CONST_DEPOSIT_DEDUCTION_CANCEL = 'remittance_service/partner/deposittracker/deduction/cancel';
    const CONST_DEPOSIT_DEDUCTION_PROCESS = 'remittance_service/partner/deposittracker/deduction/process';
    const CONST_DEPOSIT_DEDUCTION_LIST_PENDING = 'remittance_service/partner/deposittracker/deduction/pendingdeductionlist';
    
    
    const CONST_PAYMENT_MODE_ATTRIBUTE_GET = 'payment_service/payment/mode/attribute/get';
    const CONST_PAYMENT_MODE_BANKNAMES_GET = 'payment_service/payment/mode/attribute/bankname/list';

    CONST CONST_DEPOSIT_TRACKER_HISTORY_GET = 'remittance_service/partner/deposittracker/deposit/history/get';
    CONST CONST_DEPOSIT_TRACKER_TRANSACTIONS_GET = 'remittance_service/partner/deposittracker/deposit/transactions/get';


    const CONST_DEPOSIT_TRACKER_PHOTO_UPLOAD = 'remittance_service/partner/deposittracker/topup/photo/upload';
    const CONST_DEPOSIT_DEDUCTION_PHOTO_UPLOAD = 'remittance_service/partner/deposittracker/deduction/photo/upload';
 
    const URL_GET_APPROVE_CHANNEL_LIST = 'remittance_service/admin/remittanceconfig/search';
    const CODE_GET_APPROVE_CHANNEL_SUCCESS = 4201;    
    
    const URL_APPROVE_TOPUP_LIST = 'remittance_service/partner/deposittracker/topup/pendingtopup';
    const CONST_DEPOSIT_EMAIL_LAST_APPROVED = 'remittance_service/admin/deposittracker/deposit/email/tracker/lastapproved';
    const CONST_DEPOSIT_HISTORY_CHECK = 'remittance_service/partner/deposittracker/deposit/history/check';
    const CONST_DEPOSIT_CONFIG_LAST_APPROVED  = 'remittance_service/partner/deposittracker/deposit/history/lastapproved';
    const CONST_DEPOSIT_CONFIG_HISTORY_USERS = 'remittance_service/partner/deposittracker/history/lastusers';
    const CONST_DEPOSIT_REASON_LIST = 'remittance_service/partner/deposittracker/deposit/reasons';
    const CONST_DEPOSIT_REMITTANCE_GET = 'remittance_service/partner/deposittracker/deposit/remittance/get';
    const CONST_DEPOSIT_HISTORY_PREVIOUS_USERS = 'remittance_service/admin/deposittracker/trackers/previous/get';

    // SLA config 
    const URL_GET_SLA_CONFIG_LIST = 'dashboard_service/sla/settings/get';
    const CODE_GET_SLA_CONFIG_SUCCESS = 10010;

    const URL_GET_SLA_TOP_UP_STATUS = 'dashboard_service/partner/sla/topup/status'; 
    const CODE_GET_SLA_TOP_UP_SUCCESS = 10011;

    const URL_GET_ANNOUNCEMENT_LIST_STATUS = 'dashboard_service/sla/announcement/list';
    const CODE_GET_ANNOUNCEMENT_LIST_SUCCESS = 10017;

    const URL_GET_REMITTANCE_STATUS = 'dashboard_service/partner/sla/remittance/status';
    const CODE_GET_REMITTANCE_STATUS_SUCCESS = 10018;

    // prelim check
    const URL_PRELIM_CONFIG_ADD = 'user_credit_service/partner/prelim/settings/save';
    const CODE_PRELIM_CONFIG_ADD_SUCCESS = 12930;

    const CONST_GET_ADD_BLACKLIST_COUNTRY_LIST = 'user_credit_service/partner/prelim/blacklistcountry/get/all';
    const CODE_GET_ADD_BLACKLIST_COUNTRY_SUCCESS = 12936;

    const CONST_GET_BLACKLIST_COUNTRY_LIST = 'user_credit_service/partner/prelim/blacklistcountry/get/blacklist';
    const CODE_GET_BLACKLIST_COUNTRY_SUCCESS = 12942;

    const CONST_GET_HIGH_RISK_COUNTRY_LIST = 'user_credit_service/partner/prelim/highriskcountry/get/highrisk';
    const CODE_GET_HIGH_RISK_COUNTRY_SUCCESS = 12908;

    const URL_BLACK_LIST_COUNTRIES_ADD = 'user_credit_service/partner/prelim/blacklistcountry/add';
    const CODE_BLACK_LIST_COUNTRIES_ADD_SUCCESS = 12944;

    const URL_BLACK_LIST_COUNTRIES_DEL = 'user_credit_service/partner/prelim/blacklistcountry/delete';
    const CODE_BLACK_LIST_COUNTRIES_DEL_SUCCESS = 12946;

    const CONST_PRELIM_SETTING_GET = 'user_credit_service/partner/prelim/settings/get';
    const CODE_PRELIM_SETTING_GET_SUCCESS = 12906;



    const CONST_NFF_GENERATE_REPORT = 'remittance_service/partner/report/nff';
    const CODE_GENERATE_NFF_REPORT_SUCCESS = 4327;

    const URL_GET_LIST_RECIPIENTS = 'remittance_service/partner/remco/recipient/list';
    const CODE_GET_RECIPIENTS_SUCCESS = 4302;
}
