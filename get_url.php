function getCurrentUrl(){  
		$domain = $_SERVER['HTTP_HOST'];	//Nombre del dominion  
		$url = "http://" . $domain . $_SERVER['REQUEST_URI'];	  // Direccion despus del dominio URI
		return $url;	  
}
