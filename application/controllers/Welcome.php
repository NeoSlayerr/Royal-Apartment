<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$data = array(
			'top'     => 'top_dashboard',
			'content' => 'Beranda',
			'bottom'  => 'bottom_dashboard'
		);
		$this->load->view('user/layout_luar', $data);
	}

	public function admin_landing()
	{
		$this->load->model('User');
		$allContact = $this->User->selectContact();
		$allSubscribe = $this->User->selectSubscribe();
		$data = array(
            'allContact' => $allContact,
            'allSubscribe' => $allSubscribe,
			'top'     => 'top_dashboard',
			'header'  => 'header_dashboard',
			'content' => 'admin_landing',
			'bottom'  => 'bottom_dashboard'
		);
		$this->load->view('admin/layout_admin', $data);
	}

	public function admin_apartments()
	{
		$this->load->model('User');
		$a = $this->User->room("Type A");
		$b = $this->User->room("Type B");
		$c = $this->User->room("Type C");

		$a2 = $a[0]['stock'];
		$b2 = $b[0]['stock'];
		$c2 = $c[0]['stock'];

		$p1 = $a[0]['price'];
		$p2 = $b[0]['price'];
		$p3 = $c[0]['price'];

		$living1 = $a[0]['living'];
		$living2 = $b[0]['living'];
		$living3 = $c[0]['living'];

		$kitchen1 = $a[0]['kitchen'];
		$kitchen2 = $b[0]['kitchen'];
		$kitchen3 = $c[0]['kitchen'];

		$bedroom1 = $a[0]['bedroom'];
		$bedroom2 = $b[0]['bedroom'];
		$bedroom3 = $c[0]['bedroom'];

		$bathroom1 = $a[0]['bathroom'];
		$bathroom2 = $b[0]['bathroom'];
		$bathroom3 = $c[0]['bathroom'];

		$data = array(
			'top'     => 'top_dashboard',
			'header'  => 'header_dashboard',
			'content' => 'admin_apartments',
			'bottom'  => 'bottom_dashboard',
			'a2'	  => $a2,
			'b2'	  => $b2,
			'c2'	  => $c2,
			'p1'      => $p1,
			'p2'      => $p2,
			'p3'      => $p3,
			'living1' => $living1,
			'living2' => $living2,
			'living3' => $living3,
			'kitchen1'=> $kitchen1,
			'kitchen2'=> $kitchen2,
			'kitchen3'=> $kitchen3,
			'bathroom1' => $bathroom1,
			'bathroom2' => $bathroom2,
			'bathroom3' => $bathroom3,
			'bedroom1' => $bedroom1,
			'bedroom2' => $bedroom2,
			'bedroom3' => $bedroom3
		);
		$this->load->view('admin/layout_admin', $data);
	}

	public function room($t)
	{
		$this->load->model('User');
		
		$type="Type ".$t;
		$room = $this->User->room($type);
		$stock = $room[0]['stock'];
		$price = $room[0]['price'];
		$living = $room[0]['living'];
		$kitchen = $room[0]['kitchen'];
		$bedroom = $room[0]['bedroom'];
		$bathroom = $room[0]['bathroom'];

		$data = array(
			'top'     => 'top_dashboard',
			'header'  => 'header_dashboard',
			'content' => 'change_room',
			'bottom'  => 'bottom_dashboard',
			'type'	  => $type,
			'stock'	  => $stock,
			'price'   => $price,
			'living'  => $living,
			'kitchen' => $kitchen,
			'bedroom' => $bedroom,
			'bathroom'=> $bathroom
		);
		$this->load->view('admin/layout_admin', $data);
	}

	public function change_room(){
		$type=$this->input->post('type');
		$stock=$this->input->post('stock');
		$price=$this->input->post('price');
		$living=$this->input->post('living');
		$kitchen=$this->input->post('kitchen');
		$bedroom=$this->input->post('bedroom');
		$bathroom=$this->input->post('bathroom');
		
		$this->load->model('User');

		$result = $this->User->change_room($type, $stock, $price, $living, $kitchen, $bedroom, $bathroom);

		if($result){
			echo"<script> alert('Change Success') </script>";
			$this->admin_apartments();
		}
		else{
			echo"<script> alert('Change Failed') </script>";
			$this->admin_apartments();
		}
		
	}

	public function admin_booking()
	{
		$this->load->model('User');
		$allBooking = $this->User->selectBooking();
		$data = array(
            'allBooking' => $allBooking,
			'top'        => 'top_dashboard',
			'header'     => 'header_dashboard',
			'content'    => 'admin_booking',
			'bottom'     => 'bottom_dashboard'
		);
		$this->load->view('admin/layout_admin', $data);
	}

	public function deleteBooking(){
        $name = $this->input->get('name');
        $this->load->model('User');
        $this->User->deleteBooking($name);
        $allBooking = $this->User->selectBooking();
		$data = array(
            'allBooking' => $allBooking,
			'top'        => 'top_dashboard',
			'header'     => 'header_dashboard',
			'content'    => 'admin_booking',
			'bottom'     => 'bottom_dashboard'
		);
		$this->load->view('admin/layout_admin', $data);
    }

	public function deleteContact(){
        $id = $this->input->get('id');
        $this->load->model('User');
        $this->User->deleteContact($id);
        $allContact = $this->User->selectContact();
		$data = array(
            'allContact' => $allContact,
			'top'        => 'top_dashboard',
			'header'     => 'header_dashboard',
			'content'    => 'admin_landing',
			'bottom'     => 'bottom_dashboard'
		);
		$this->load->view('admin/layout_admin', $data);
    }

	public function deleteSubscribe(){
        $email = $this->input->get('email');
        $this->load->model('User');
        $this->User->deleteSubscribe($email);
        $allContact = $this->User->selectContact();
		$data = array(
            'allSubscribe' => $allSubscribe,
			'top'        => 'top_dashboard',
			'header'     => 'header_dashboard',
			'content'    => 'admin_landing',
			'bottom'     => 'bottom_dashboard'
		);
		$this->load->view('admin/layout_admin', $data);
    }

	public function home()
	{
		$data = array(
			'top'     => 'top_dashboard',
			'header'  => 'header_dashboard',
			'content' => 'home',
			'bottom'  => 'bottom_dashboard'
		);
		$this->load->view('user/layout', $data);
	}

	public function login()
	{
		$data = array(
			'top'     => 'top_dashboard',
			'content' => 'login',
			'bottom'  => 'bottom_dashboard'
		);
		$this->load->view('user/layout_luar', $data);
	}

	public function facilities()
	{
		$data = array(
			'top'     => 'top_dashboard',
			'header'  => 'header_dashboard',
			'content' => 'facilities',
			'bottom'  => 'bottom_dashboard'
		);
		$this->load->view('user/layout', $data);
	}

	public function apartments()
	{
		$this->load->model('User');
		$a = $this->User->room("Type A");
		$b = $this->User->room("Type B");
		$c = $this->User->room("Type C");

		$a2 = $a[0]['stock'];
		$b2 = $b[0]['stock'];
		$c2 = $c[0]['stock'];

		$p1 = $a[0]['price'];
		$p2 = $b[0]['price'];
		$p3 = $c[0]['price'];

		$living1 = $a[0]['living'];
		$living2 = $b[0]['living'];
		$living3 = $c[0]['living'];

		$kitchen1 = $a[0]['kitchen'];
		$kitchen2 = $b[0]['kitchen'];
		$kitchen3 = $c[0]['kitchen'];

		$bedroom1 = $a[0]['bedroom'];
		$bedroom2 = $b[0]['bedroom'];
		$bedroom3 = $c[0]['bedroom'];

		$bathroom1 = $a[0]['bathroom'];
		$bathroom2 = $b[0]['bathroom'];
		$bathroom3 = $c[0]['bathroom'];

		$data = array(
			'top'     => 'top_dashboard',
			'header'  => 'header_dashboard',
			'content' => 'apartments',
			'bottom'  => 'bottom_dashboard',
			'a2'	  => $a2,
			'b2'	  => $b2,
			'c2'	  => $c2,
			'p1'      => $p1,
			'p2'      => $p2,
			'p3'      => $p3,
			'living1' => $living1,
			'living2' => $living2,
			'living3' => $living3,
			'kitchen1'=> $kitchen1,
			'kitchen2'=> $kitchen2,
			'kitchen3'=> $kitchen3,
			'bathroom1' => $bathroom1,
			'bathroom2' => $bathroom2,
			'bathroom3' => $bathroom3,
			'bedroom1' => $bedroom1,
			'bedroom2' => $bedroom2,
			'bedroom3' => $bedroom3
		);
		$this->load->view('user/layout', $data);
	}

	public function contact()
	{
		$data = array(
			'top'     => 'top_dashboard',
			'header'  => 'header_dashboard',
			'content' => 'contact',
			'bottom'  => 'bottom_dashboard'
		);
		$this->load->view('user/layout', $data);
	}

	public function signup()
	{
		$data = array(
			'top'     => 'top_dashboard',
			'content' => 'signup',
			'bottom'  => 'bottom_dashboard'
		);
		$this->load->view('user/layout_luar', $data);
	}

	public function booking()
	{
		$this->load->model('User');
		$type = $this->User->get_type();
		$data = array(
			'top'     => 'top_dashboard',
			'header'  => 'header_dashboard',
			'content' => 'booking',
			'bottom'  => 'bottom_dashboard',
			'type'	  => $type
		);
		$this->load->view('user/layout', $data);
	}

	public function terms()
	{
		$data = array(
			'top'     => 'top_dashboard',
			'header'  => 'header_dashboard',
			'content' => 'terms',
			'bottom'  => 'bottom_dashboard'
		);
		$this->load->view('user/layout', $data);
	}

	public function about()
	{	
		$data = array(
			'top'     => 'top_dashboard',
			'header'  => 'header_dashboard',
			'content' => 'about',
			'bottom'  => 'bottom_dashboard',
		);
		$this->load->view('user/layout', $data);
	}

	public function forgot()
	{
		$data = array(
			'top'     => 'top_dashboard',
			'content' => 'forgot',
			'bottom'  => 'bottom_dashboard'
		);
		$this->load->view('user/layout_luar', $data);
	}

	public function forgot1()
	{
		$email=$this->input->post('email');

		if($email!=""){
			echo"<script> alert('Success ! Please check your email')</script>";
		}

		$this->login();
	}

	public function logout()
	{
		$this->index();
	}

	public function cek_login(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');

		$this->load->model('User');

		$result = $this->User->get_username($username);
		
		if(count($result)> 0){
			$password = md5($password);

			if($password==$result[0]['password']){
				if($result[0]['role']=='user'){
					$this->session->set_userdata('username', $username);
					$this->home();
				}
				else{
					$this->session->set_userdata('username', $username);
					$this->admin_landing();
				}
			}
			else{
				echo"<script> alert('Your password is not correct, Please try again!') </script>";
				$this->login();
			}

		}
		else{
			echo"<script> alert('Username is not registered!') </script>";
			$this->login();
		}
		
	}

	public function register(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$password2=$this->input->post('password2');
		$email=$this->input->post('email');

		$this->load->model('User');
		
		$result = $this->User->get_username($username);
		$result2 = $this->User->get_email($email);

		if($password !== $password2){
			echo"<script> alert('Confirmation password does not match !! ') </script>";
			$this->signup();
		}
		else if(count($result)> 0){
			echo"<script> alert('Username already exist !') </script>";
			$this->signup();
		}
		else if(count($result2)> 0){
			echo"<script> alert('Email already registered !') </script>";
			$this->signup();
		}
		else{
			$password = md5($password);
			$this->User->register_account($username, $password, $email);
			echo"<script> alert('Account successfully created , please login !') </script>";
			$this->login();
		}
	}

	public function book_room(){
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$phone=$this->input->post('phone');
		$type=$this->input->post('type');
		$date=$this->input->post('date');
		
		$this->load->model('User');

		$result = $this->User->get_booking($name);
		$result2 = $this->User->room_stock($type);
		$result3 = $result2[0]['stock'];

		if(count($result)> 0){
			echo"<script> alert('You already made a reservation, Please wait for our confirmation !!') </script>";
		}
		else if($result3 == 0){
			echo"<script> alert('We are sorry, Apartment $type is not available !!') </script>";
		}
		else{
			$this->User->booking($name, $email, $phone, $type, $date);
			echo"<script> alert('Booking Success, Please wait for our call !!') </script>";
		}
		
		$this->booking();

	}

	public function form_contact(){
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$message=$this->input->post('message');

		$this->load->model('User');

		$this->User->contact_message($name, $email, $message);
		echo"<script> alert('Thank you ! We will check your message soon') </script>";
		$this->contact();

	}

	

	public function subscribe(){
		$email=$this->input->post('emailSubscribe');
		$this->load->model('User');

		$result = $this->User->get_subscribe($email);
		if(count($result)> 0){
			echo"<script> alert('You already subscribed to our newsletter !!') </script>";
		}

		else{
			$cek = $this->User->subscribe($email);
			if($cek){
				echo"<script> alert('Subscribe Success, From now we will give you our newsletter !!') </script>";
			}
			else{
				echo"<script> alert('Subscribe Failed, Please try again !!') </script>";
			}
		}
		$this->home();
		
	}


}
