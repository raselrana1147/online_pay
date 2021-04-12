<?php 


	$value = "https://jsonplaceholder.typicode.com/posts";

		
		 $curl = curl_init();
		 $service_url = 'https://jsonplaceholder.typicode.com/posts';
		 curl_setopt($curl, CURLOPT_URL, $service_url);
		 curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		 $resp=curl_exec($curl);

		 $decide=json_decode($resp);
		 
		  //curl_close($curl)
			
		print_r($resp);


 ?>