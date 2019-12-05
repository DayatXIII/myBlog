<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hidayat extends CI_Controller {

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

    //
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'user');
    }

    // homepage
	public function index()
	{
        //$this->load->view('welcome_message');
        echo "Hello World";
    }
    
    // URL myLife/insert string
    public function myLife($hello)
    {
        echo "My Life " . $hello;
    }

    public function newUser()
    {
        $this->user->insert();
    }

    public function updateuser($id)
    {
        $this->user->update($id);
    }

    public function deleteUser($id)
    {
        $this->user->delete($id);
    }
}
