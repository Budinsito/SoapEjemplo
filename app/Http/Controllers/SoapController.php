<?php
namespace App\Http\Controllers;
use Response;
use Illuminate\Http\Request;


class SoapController extends BaseSoapController

{
    private $service;


public  $user;

	public function create(){

		return view('consulta');
	}



    public function BienesServicios(){

        try {
            self::setWsdl('http://app.sis.gob.pe/sisWSAFI/Service.asmx?WSDL');
            $this->service = InstanceSoapClient::init();

            $countryCode = 'DK';
            $vatNumber = '47458714';

            $params = [
                'countryCode' => request()->input('countryCode') ? request()->input('countryCode') : $countryCode,
                'vatNumber'   => request()->input('vatNumber') ? request()->input('vatNumber') : $vatNumber
            ];
            $response = $this->service->checkVat($params);
            return view ('bienes-servicios-soap', compact('response'));
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }
    }

    public function clima(){
        try {
            self::setWsdl('http://app.sis.gob.pe/sisWSAFI/Service.asmx?WSDL');
            $this->service = InstanceSoapClient::init();

            $llave = $this->service->GetSession(['strUsuario' => 'HOSVES','strClave' => 'nSP1M7s2B9']);
                
/*dd($user);*/

return $llave;

       /*return response::json($user);*/


		 }
        catch(\Exception $e) {
            return $e->getMessage();
        }
    }


public function Enviadatos(Request $request){

	$llave = $this->clima()->GetSessionResult;  // Me genera la llave desde otra funcion
  /*  print_r($llave);*/


	//$strFromArr = serialize($llave); 

//$rest = substr($strFromArr,  48,-3); // Lo convierte a String la llave

	try{
			self::setWsdl('http://app.sis.gob.pe/sisWSAFI/Service.asmx?WSDL');
			$this->service = InstanceSoapClient::init();

	$valorpac = $this->service->ConsultarAfiliadoFuaE(
            [   'intOpcion' => 1 ,
                'strAutorizacion' => $llave , 
                'strDni' => '42275765' , 
                'strTipoDocumento' => '1' , 
                'strNroDocumento' => '46273345' , 
                'strDisa' => '', 
                'strTipoFormato' => '' , 
                'strNroContrato' => '' ,
                'strCorrelativo' => ''
            ]
        );

			
  /*print_r($valorpac);*/
 // dd($valorpac);
// return view('consulta')->with(['data' => $valorpac->ConsultarAfiliadoFuaEResult]);

return view('consulta', compact('valorpac'));




	}


 catch(\Exception $e) {
            return $e->getMessage();
/*dd($request['radioafi']);*/


}
}





}
