<?php 
	
	// CURL

	function post($url, $data) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER ,  false );
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        if($result) {
			 $info = curl_getinfo($ch);
			 echo $info['speed_upload'];
		};
        curl_close($ch);
        return $result;
    }

    function get($url) {
    	$ch = curl_init();
    	curl_setopt($ch, CURLOPT_URL, $url);
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER ,  false );
    	$result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    $key_1 = "oiAebu5ixpIw7rZxClxH2SlrunyN0kR9hw6RoOeHgtCslQSPp7NldObBsSb9EpHZ";
	$key_2 = "DeZ8paKhp1RUyhWuCIGQhQyR39wVUxPu7wCDwaGgwdkKVvqF9KkgKL174QVohfm4";

	$api_url = 'https://upfile.xyz/api/v2/';

	$getAuth = get($api_url.'authorize?key1='.$key_1.'&key2='.$key_2);
	$authData = json_decode($getAuth,true);
	$access_token = $authData['data']['access_token'];
	$account_id = $authData['data']['account_id'];

	$fullpat = $_FILES['file']['tmp_name'];

	if (function_exists('curl_file_create')) {
		$cFile = curl_file_create($fullpat,$_FILES['file']['type'],$_FILES['file']['name']);
	} else { // 
		$cFile = '@' . realpath($fullpat);
	}

	$post = array('access_token' => $access_token, 'account_id' => $account_id, 'upload_file'=> $cFile);
	$uploadFile = post($api_url."file/upload", $post);
	// $file_data = json_decode($uploadFile,true);
	// $file_data = $file_data['data']['0'];
	print_r($uploadFile);
?>