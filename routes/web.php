<?php

/*

|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('create', 'SoapController@create')->name('create');
Route::get('clima', 'SoapController@clima');
Route::get('envia', 'SoapController@Enviadatos')->name('formulario');




Route::get('/ves/afiliado',function(){



$opt = array(

'ssl' => array('encoding' => 'UTF-8', 'verify_peer' => false, 'verify_peer_name' => false)
);

$params  = array ( 'encoding' => 'UTF-8', 'verifypeer' => false, 'verifyhost' =>false, 'soap_version' => SOAP_1_2, 'trace' => 1, 'excepcions' => 1, "connection_timeout"=>180, 'stream_context' => stream_context_create($opt));
$url = "http://app.sis.gob.pe/sisWSAFI/Service.asmx?WSDL";

	try{
		$client = new SoapClient($url,$params);
		/*dd($client->__getTypes()); */
		dd($client->GetSession(['strUsuario'=>'HOSVES','strClave'=>'nSP1M7s2B9']));


	}

	catch(SoapFault $fault){
		echo '<br>' .$fault;
	}



});