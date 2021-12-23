<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model{
    private $tableBooking = 'booking';
    private $tableContact = 'contact';
    private $tableSubscribe = 'subscribe';
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function get_username($username){
        $this->db->select("*");
        $this->db->from("user");
        $this->db->where('username',$username);

        $result = $this->db->get();
        
        return $result->result_array();
    }

    public function get_email($email){
        $this->db->select("*");
        $this->db->from("user");
        $this->db->where('email',$email);

        $result = $this->db->get();
        
        return $result->result_array();
    }

    public function register_account($username, $password, $email){
        $data =array(
            'username' => $username,
            'password' => $password,
            'email' => $email,
            'role' => 'user'
        );

        $this->db->insert('user', $data);

    }

    public function booking($name, $email, $phone, $type, $date){
        $data =array(
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'type' => $type,
            'date' => $date
        );
        $stock = $this->room_stock($type);
        $stock2 = ($stock[0]['stock'])-1;

        $this->db->insert('booking', $data);

        $this->db->set('stock', $stock2);
        $this->db->where('type', $type);
        $this->db->update('room');
        
    }

    public function get_booking($name){
        $this->db->select("*");
        $this->db->from("booking");
        $this->db->where('name',$name);

        $result = $this->db->get();
        
        return $result->result_array();
    }

    public function room($type){
        $this->db->select("*");
        $this->db->from("room");
        $this->db->where('type',$type);

        $result = $this->db->get();

        return $result->result_array();
    }

    public function room_stock($type){
        $this->db->select("stock");
        $this->db->from("room");
        $this->db->where('type',$type);

        $result = $this->db->get();

        return $result->result_array();
    }

    public function change_room($type, $stock, $price, $living, $kitchen, $bedroom, $bathroom){
        $data =array(
            'stock' => $stock,
            'price' => $price,
            'living' => $living,
            'kitchen' => $kitchen,
            'bedroom' => $bedroom,
            'bathroom' => $bathroom
        );
        
        $this->db->where('type', $type);
        $this->db->update('room', $data);

        return ($this->db->affected_rows() != 1)? false : true;
    }

    public function get_type(){
        $stock = 0;

        $this->db->select("type");
        $this->db->from("room");
        $this->db->where_not_in('stock', $stock);

        
        $result = $this->db->get();
        
        return $result->result_array();
    }

    public function get_subscribe($email){
        $this->db->select("email");
        $this->db->from("subscribe");
        $this->db->where('email', $email);

        $result = $this->db->get();
        
        return $result->result_array();
    }

    public function subscribe($email){
        $data =array(
            'email' => $email,
        );
        $this->db->insert('subscribe', $data);
        return ($this->db->affected_rows() != 1)? false : true;
    }

    public function contact_message($name, $email, $message){
        $data =array(
            'name' => $name,
            'email' => $email,
            'message' => $message
        );

        $this->db->insert('contact', $data);

    }

    public function selectBooking(){
        $this->db->order_by('date','desc');
        $result = $this->db->get($this->tableBooking)->result_array();
        return (count($result)>0)? $result:null;
    }

    public function selectContact(){
        $this->db->order_by('id','asc');
        $result = $this->db->get($this->tableContact)->result_array();
        return (count($result)>0)? $result:null;
    }

    public function selectSubscribe(){
        $this->db->order_by('email','asc');
        $result = $this->db->get($this->tableSubscribe)->result_array();
        return (count($result)>0)? $result:null;
    }

    public function deleteBooking($name){
        $this->db->where('name', $name);
        $check = $this->db->delete($this->tableBooking);
        return ($check)? true:false;
    }

    public function deleteContact($id){
        $this->db->where('id', $id);
        $check = $this->db->delete($this->tableContact);
        return ($check)? true:false;
    }

    public function deleteSubscribe($email){
        $this->db->where('email', $email);
        $check = $this->db->delete($this->tableSubscribe);
        return ($check)? true:false;
    }

}