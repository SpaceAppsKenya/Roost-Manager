<?php

class ProcessController extends Controller
{
	var $validTags;
    var $tag;

   public function init (){
     $this->validTags=array(
               'registration'=>'Register a new farmer if no record exist',               
               'get_user_info'=>'Get user details by email or phone no',
               'add_expenses'=>'Add a new expenditure for a particular farmer',  
               'add_stock'=> 'Add current poultry stock details',
               'update_stock'=>'update a particular stock entry',
               'production_search'=>'search for a production by any fields',
               'add_production'=>'Add a daily production',
               'update_production'=>'update productio by id',
               'disease_search' =>'search a particular disease',
               'get_rearing_info'=>'get information on best rearing practices',
               'validate_login'=>'Check if the soecified user exists',
               'get_all_tags'=>'Get list of all valid tags',
          	);
   }
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('api'),
				'users'=>array('*'),
			),
			
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
    
    public function tokenExists($token){
       $user=User::model()->findByAttributes(array('token'=>$token));
       if($user)
       {
       	return true;
       }
       return false;
    }
    public function isTagValid($tag){
       if(array_key_exists($tag, $this->validTags)){
       	return true;
       }
       return false;
    }
    public function tagExist(){
    	if((isset($_POST['tag']) && !empty($_POST['tag'])) || (isset($_GET['tag']) && !empty($_GET['tag'])))
    	{
    		$this->tag=(isset($_POST['tag']))?$_POST['tag']:isset($_GET['tag'])?$_GET['tag']:null;
    	   if($this->isTagValid($this->tag)){

             return true;
           }
    	}
       echo CJSON::encode(array('success'=>0,'error'=>'Invalid Tag'));
       Yii::app()->end();
    }
	public function actionApi()
	{

		if(isset($_POST) && !empty($_POST))
		{
            $this->tagExist();
            $this->ProcessRequest();

		}
		else if(isset($_GET) && !empty($_GET))
		{
			$this->tagExist();
            $this->ProcessRequest('GET');
			
		}
		else
		{
			echo CJSON::encode(array('success'=>0,'error'=>'Access Denied'));
            Yii::app()->end();
		}
      
		
	}
	private function http_build_query_for_curl($arrays, &$new = array(), $prefix = null ) {

	    if ( is_object( $arrays ) ) {
	        $arrays = get_object_vars( $arrays );
	    }

	    foreach ( $arrays AS $key => $value ) {
	        $k = isset( $prefix ) ? $prefix . '[' . $key . ']' : $key;

	        if ( is_array( $value ) OR is_object( $value )  ) {
	            $this->http_build_query_for_curl( $value, $new, $k );
	        } else {
	            $new[$k] = $value;
	        }
	    }

    }
	public function doPost($url,$data)
	{
            $ch = curl_init(); 
            curl_setopt($ch, CURLOPT_URL, $url); 
            curl_setopt($ch, CURLOPT_HEADER, FALSE); 
            //curl_setopt($ch, CURLOPT_NOBODY, TRUE); // remove body 
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
            curl_setopt($ch, CURLOPT_POST, true); 
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
            $head = curl_exec($ch); 
            /////////////////////////////////////////////////
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE); 
            curl_close($ch); 
            @header ("content-type: text/json charset=utf-8");
            echo $head;
			
			
	}
	public function ProcessRequest($requestType='POST'){
        Yii::import('ext.runactions.components.ERunActions');    
		switch ($this->tag) {
			case 'registration':
				
				$arrays = array('User' => ($requestType=='POST')?$_POST:($requestType=='GET')?$_GET:null);
                $arrays['User']['tag']=$this->tag;

				$this->http_build_query_for_curl($arrays, $post);				
				////////////////////////////////////////////
				$route=Yii::app()->createAbsoluteUrl('/user/create');
                $this->doPost($route,$post);
				
				break;
			  case 'get_user_info':
			  	$criteria=null;

			  	if(isset($_GET['email'])){
			  		$criteria=array('email'=>$_GET['email']);
			  	}
                if(isset($_GET['phone_number'])){
                	$criteria=array('phone_number'=>$_GET['phone_number']);
                }
			  	
			  		$user=User::model()->findByAttributes($criteria);
			  		if($user)
			  		{
			  			echo CJSON::encode(array('success'=>1,'data'=>$user));
			  			exit;
			  		}
			  		echo CJSON::encode(array('success'=>0,'error'=>1,'message'=>'No user found with that email/phone'));

			  	break;
			case 'add_production':
				$arrays = array('Production' => ($requestType=='POST')?$_POST:($requestType=='GET')?$_GET:null);
				$arrays['Production']['tag']=$this->tag;
				$this->http_build_query_for_curl($arrays, $post);				
				////////////////////////////////////////////
				$route=Yii::app()->createAbsoluteUrl('/production/create');
	            $this->doPost($route,$post);
			break;
			case 'update_production':
		
			    $arrays = array('Production' => ($requestType=='POST')?$_POST:($requestType=='GET')?$_GET:null);
				$arrays['Production']['tag']=$this->tag;
				$this->http_build_query_for_curl($arrays, $post);				
				////////////////////////////////////////////
				$route=Yii::app()->createAbsoluteUrl('/production/update');
				
	            $this->doPost($route,$post);
			break;
			case 'production_search':

				$arrays = array('Production' => ($requestType=='POST')?$_POST:($requestType=='GET')?$_GET:null);
				$arrays['Production']['tag']=$this->tag;
				$this->http_build_query_for_curl($arrays, $post);		
				
				////////////////////////////////////////////
				$route=Yii::app()->createAbsoluteUrl('/production/admin');
	            $this->doPost($route,$post);

			break;
			case 'add_stock':
			    $arrays = array('Stock' => ($requestType=='POST')?$_POST:($requestType=='GET')?$_GET:null);
				$arrays['Stock']['tag']=$this->tag;
				$this->http_build_query_for_curl($arrays, $post);		
				
				////////////////////////////////////////////
				$route=Yii::app()->createAbsoluteUrl('/stock/create');
	            $this->doPost($route,$post);
	            break;
	        case 'update_stock':
			    $arrays = array('Stock' => ($requestType=='POST')?$_POST:($requestType=='GET')?$_GET:null);
				$arrays['Stock']['tag']=$this->tag;
				$this->http_build_query_for_curl($arrays, $post);		
				
				////////////////////////////////////////////
				$route=Yii::app()->createAbsoluteUrl('/stock/update');
	            $this->doPost($route,$post);
	            break;
           case 'add_expenses':
		    $arrays = array('Expenses' => ($requestType=='POST')?$_POST:($requestType=='GET')?$_GET:null);
			$arrays['Expenses']['tag']=$this->tag;
			$this->http_build_query_for_curl($arrays, $post);		
			
			////////////////////////////////////////////
			$route=Yii::app()->createAbsoluteUrl('/expenses/create');
            $this->doPost($route,$post);
            break;
            case 'disease_search':
                $arrays = array('Diseases' => ($requestType=='POST')?$_POST:($requestType=='GET')?$_GET:null);
				$arrays['Diseases']['tag']=$this->tag;
				$this->http_build_query_for_curl($arrays, $post);		
				
				////////////////////////////////////////////
				$route=Yii::app()->createAbsoluteUrl('/diseases/admin');
	            $this->doPost($route,$post);

            
            	break;
             case 'get_rearing_info':
                $arrays = array('Raring' => ($requestType=='POST')?$_POST:($requestType=='GET')?$_GET:null);
				$arrays['Raring']['tag']=$this->tag;
				$this->http_build_query_for_curl($arrays, $post);		
				
				////////////////////////////////////////////
				$route=Yii::app()->createAbsoluteUrl('/raring/admin');
	            $this->doPost($route,$post);

            
            	break;
            	 case 'validate_login':
                $arrays = array('User' => ($requestType=='POST')?$_POST:($requestType=='GET')?$_GET:null);
				$arrays['User']['tag']=$this->tag;
				$this->http_build_query_for_curl($arrays, $post);		
				
				////////////////////////////////////////////
				$route=Yii::app()->createAbsoluteUrl('/user/admin');
	            $this->doPost($route,$post);
            	break;
             case 'get_all_tags':
              @header ("content-type: text/json charset=utf-8");
             echo CJSON::encode(array('tags'=>$this->validTags));
             break;


			default:
				
				break;
		}
        
	}


}
