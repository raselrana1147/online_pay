<?php 

// $json = array(          
// 		 "fun_name" => "get_balnce",         
// 		  "apistring"  => "3230323130343132313633393237"       
// 		);              
// $json = json_encode($json);             
//  $url = "http://loginbd.net/portal/api/out_api.php";            
//    $curl = curl_init($url);           
//       curl_setopt ($curl, CURLOPT_HTTPHEADER, 
//       	array("Content-Type: application/json"));             
//       	 curl_setopt($curl, CURLOPT_POST, true);            
//       	   curl_setopt($curl, CURLOPT_POSTFIELDS, $json);             
//       	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);             
//       	     curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);

//       	       $rsl_api = curl_exec($curl);              
//       	       if(curl_errno($curl)){ 

//                   echo curl_error($curl);      
//            }             
//            curl_close($curl);




// if($rsl_api != null)
// {
//  	$obj = json_decode($rsl_api);
//  	echo $obj->{'balance'};
// }
 




 // header("Access-Control-Allow-Origin: *");;
 // $real_path=realpath(dirname(__FILE__));

 // include_once $real_path."/../classes/Add.php";
 // $add=new Add();
 // $request=$_SERVER['REQUEST_METHOD'];


//if ($request=='POST') {

		$json = array(

			"fun_name"=> "exe_request",
			"tag_name"=> "Banglalink",
			"operator_id"=> "2",
			"number"=> "01964719349",
			"prefix"=> "019,014",
			"amount"=> "20",
			"type_id"=> "1",
			"uniq_id"=>"1",
			"apistring"=> "3230323130343132313732323231",
			"api_pass"=> "Soft@123",

		);

		  $url = "http://loginbd.net/portal/api/out_api.php";
		  $curl = curl_init($url);
		  curl_setopt ($curl, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
		  curl_setopt($curl, CURLOPT_POST, true);
		  curl_setopt($curl, CURLOPT_POSTFIELDS, $json);
		  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
		  $rsl_api = curl_exec($curl);

		  if(curl_errno($curl)) {                  
		  	    echo curl_error($curl);               
		  	 }                                       
		  	 curl_close($curl); 

		  	 if ($rsl_api !=null) {

		  	 	$obj=json_decode($rsl_api);
		  	 	echo $obj;
		  	 	//if (trim($obj->{'status'}=="1")) {

		  	 			//Successful execution 

		  	 	   // return $obj->{'status'};
		  	 	    //$obj->{'balance'};

		  	 	//}else{
		  	 		//error execution 

		  	 	//	return $obj->{'status'};
		  	 		//$obj->{'balance'};
		  	 	//}
		  	 //	echo $rsl_api;
		  	 }
		
  //  }
 	



 ?>