<?php
namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $this->browser();
		 //return view('home_index');
    }

    private function browser()
    {
        $agent = $this->request->getUserAgent();

        if ($agent->isBrowser()) {
            $currentAgent = $agent->getBrowser().' '.$agent->getVersion();
        } elseif ($agent->isRobot()) {
            $currentAgent = $this->agent->robot();
        } elseif ($agent->isMobile()) {
            $currentAgent = $agent->getMobile();
        } else {
            $currentAgent = 'Unidentified User Agent';
        }
        echo $this->request->getIPAddress(). '<br>';
        echo $currentAgent . '<br>';
        echo $agent->getPlatform(); // Platform info (Windows, Linux, Mac, etc.)
    }

    private function rascunho()
    {
        #Método
        // echo $this->request->getMethod(); //GET || POST
        // print_r($this->request->getGet());
        // print_r($this->request->getPost());
        // print_r($this->request->getServer());
        // print_r($this->request->getCookie());
        // print_r($this->request->getPostGet());
        // print_r($this->request->getGetPost());

        #GET JSON:  php://input
        //$json = $this->request->getJSON();
        
        #JSON VAR
        //{
        // 	"foo": "bar",
        // 	"fizz": {
        // 		"buzz": "baz"
        // 	}
        // }
        // $data = $this->request->getJsonVar('fizz');
        // $data->buzz = "baz"
        // $data = $this->request->getJsonVar('fizz', true);
        // $data = ["buzz" => "baz"]
        
        #validação
        //$email = $this->request->getVar('email', FILTER_SANITIZE_EMAIL);
        
        #header
        // $supported = [
        //     'application/json',
        //     'text/html',
        //     'application/xml'
        // ];
        //echo $this->request->negotiate('media', $supported);
        // echo $this->negotiate->media($supported);
        
        #header
        //print_r($this->request->headers());
    }
}
