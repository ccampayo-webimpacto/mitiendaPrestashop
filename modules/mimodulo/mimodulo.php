<?php
if(!defined('_PS_VERSION_'))
exit;

class Mimodulo extends Module{
	public function __construct()
	{
		$this->name = 'mimodulo'; //nombre del módulo el mismo que la carpeta y la clase.
		$this->tab = 'front_office_features'; // pestaña en la que se encuentra en el backoffice.
		$this->version = '1.0.0'; //versión del módulo
		$this->author ='4webs'; // autor del módulo
		$this->need_instance = 0; //si no necesita cargar la clase en la página módulos,1 si fuese necesario.
		$this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_); //las versiones con las que el módulo es compatible.
		$this->bootstrap = true; //si usa bootstrap plantilla responsive.

		parent::__construct(); //llamada al contructor padre.

		$this->displayName = $this->l('My module'); // Nombre del módulo
		$this->description = $this->l('Description of my module.'); //Descripción del módulo
		$this->confirmUninstall = $this->l('Are you sure you want to uninstall?'); //mensaje de alerta al desinstalar el módulo.
	}
	public function install()
	{
		if(!parent::install() || !$this->registerHook('displayTop') || !$this->registerHook('displayFooterProduct'))
		return false;
		return true;
	}


	public function uninstall()
	{
		if(!parent::uninstall() || !$this->unregisterHook('displayTop') || !$this->unregisterHook('displayFooterProduct'))
		return false;
		return true;
	}
	public function hookDisplayTop(){
		// $curl = curl_init();

		// curl_setopt_array($curl, array(
		//   CURLOPT_URL => "http://localhost:8000/api/productos?page=1",
		//   CURLOPT_RETURNTRANSFER => true,
		//   CURLOPT_ENCODING => "",
		//   CURLOPT_MAXREDIRS => 10,
		//   CURLOPT_TIMEOUT => 0,
		//   CURLOPT_FOLLOWLOCATION => true,
		//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		//   CURLOPT_CUSTOMREQUEST => "GET",
		// ));
		// curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		// curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		// $response = curl_exec($curl);
		// // dump(curl_error($curl));
		// curl_close($curl);
		// // dump($response);
		// // $n=1;
		// // dump($n);
		// $this->smarty->assign(array(
        //     'var' => 'top',
		// 	// 'variable1' => 'valor',
        //     'variable1' => $response
        //     )
        // );
		// return $this->display(__FILE__, 'views/templates/hook/mimodulo.tpl');
	}
	public function hookDisplayFooterProduct(){
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://localhost:8000/api/productos?page=1",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		));
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		$response = curl_exec($curl);
		// dump(curl_error($curl));
		curl_close($curl);
		// dump($response);
		// $n=1;
		// dump($n);
		$this->smarty->assign(array(
            'var' => 'top',
			// 'variable1' => 'valor',
            'variable1' => $response
            )
        );
		return $this->display(__FILE__, 'views/templates/hook/mimodulo.tpl');
	}
	//actionObjectOrderReturnAddAfter
	public function  hookActionOrderReturn(){
		
		// $curl = curl_init();

		// curl_setopt_array($curl, array(
		//   CURLOPT_URL => "http://localhost:8000/api/orders",
		//   CURLOPT_RETURNTRANSFER => true,
		//   CURLOPT_ENCODING => "",
		//   CURLOPT_MAXREDIRS => 10,
		//   CURLOPT_TIMEOUT => 0,
		//   CURLOPT_FOLLOWLOCATION => true,
		//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		//   CURLOPT_CUSTOMREQUEST => "POST",
		//   CURLOPT_POSTFIELDS =>"{\r\n  \"price\": 0,\r\n  \"mailingAddress\": \"\",\r\n  \"billingAddress\": \"\",\r\n  \"paid\": true,\r\n  \"purchaseDate\": \"2020-06-05T07:16:15.474Z\",\r\n  \"shippingDate\": \"2020-06-05T07:16:15.474Z\",\r\n  \"sent\": true,\r\n  \"trackingNumber\": \"9\",\r\n  \"user\": \"https://localhost:8000/api/users/2\"\r\n}",
		//   CURLOPT_HTTPHEADER => array(
		// 	"Content-Type: application/json",
		// 	"Cookie: sf_redirect=%7B%22token%22%3A%22a57566%22%2C%22route%22%3A%22api_orders_post_collection%22%2C%22method%22%3A%22POST%22%2C%22controller%22%3A%22api_platform.action.post_collection%22%2C%22status_code%22%3A201%2C%22status_text%22%3A%22Created%22%7D"
		//   ),
		// ));

		// $response = curl_exec($curl);

		// curl_close($curl);
		// echo $response;

		// dump($response);
	}
	//hook -> displayProductAdditionalInfo
}