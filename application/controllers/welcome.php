<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $user = $this->facebook->getUser();

        if ($user) {
            try {
               $data['user_profile'] = $this->facebook->api('/me');
            } catch (FacebookApiException $e) {
                $user = null;
            }
        }

        if ($user) {
            $this->data['logout_url'] = $this->facebook->getLogoutUrl();
        } else {
            $this->data['login_url'] = $this->facebook->getLoginUrl();
        }

        // $this->data['scripts'] = array('');	USE THIS TO INCLUDE JS ON THE PAGE
        // $this->data['css'] = array('');	USE THIS TO INCLUDE CSS ON THE PAGE
        // $this->data['modais'] = array('');  USE THIS TO INCLUDE MODAL ON THE PAGE

        $this->template->set('title', 'Home');
        $this->template->load('layouts/default', 'welcome/index', $this->data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */