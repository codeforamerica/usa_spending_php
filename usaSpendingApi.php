<?php
/** 
 *	The most bare bones API library example
 *	Use _request(url,method,data-optional,headers-optional) to access the API
 */
 
class usaSpendingApi extends APIBaseClass{

	public static $api_key = '';
	public static $api_url = 'http://usaspending.gov';
	
	public function __construct($url=NULL,$api_key=NULL)
	{
		parent::new_request(($url?$url:self::$api_url));
	}
	
	public function contracts($state,$detail=NULL){
		$data = array('state'=>$state);
		if($detail) $data ['detail'] = $detail;
		$result = $this->_request($api_url . '/fpds/fpds.php' , 'GET',$data);
		return ($result?$result:null);
	}
	
	public function assistance($state,$fiscal_year,$max_records=20){
	// this api has several urls to access ...
		$data = $this->_request($api_url. '/faads/faads.php', 'GET',array('principal_place_state_code'=>$state,'fiscal_year'=>$fiscal_year,'max_records'=>$max_records));
		return ($data?$data:null);
		
	}	
	
	public function fiscal_summary($fiscal_year,$detail=NULL){
		$data = array('fiscal_year'=>$fiscal_year);
		if($detail) $data['detail'] = $detail;
		$result = $this->_request($url_api.'/fsrs/fsrs.php', 'GET',$data);
		return ($result?$result:null);
	}
}
