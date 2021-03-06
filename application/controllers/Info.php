<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Info extends Application {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->data['pagetitle'] = 'Information/Service';
		$this->data['pagebody'] = 'info';
		$this->render();
	}
    
    public function flights()   
    {
        header('Content-Type: application/json');
        echo json_encode($this->flight->all(), JSON_PRETTY_PRINT);
    }
    
    public function fleet()   
    {
        header('Content-Type: application/json');
        echo json_encode($this->fleet->all(), JSON_PRETTY_PRINT);
    }


}