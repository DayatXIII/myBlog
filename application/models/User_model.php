<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

public $id;
public $name;
public $age;
public $email;

public function __construct() 
{
    parent::__construct();
    $this->load->database();
}

public function get_last_ten_entries()
{
        $query = $this->db->get('user', 1);
        return $query->result();
}

public function insert()
{
        $this->name    = $this->input->post('name');
        $this->age  = $this->input->post('age');
        $this->email     = $this->input->post('email');

        $this->db->insert('user', $this);
}

public function update($id)
{
    $data = array(
        'name' => $this->input->post('name'),
        'age' => $this->input->post('age'),
        'email' => $this->input->post('email')
    );

    // try {
        $this->db->where('id', $id);
        $this->db->update('user', $data);

        return "OK";

        // return response()->json(
        //     array(
        //         'success' => true,
        //         'message' => "Successfully updated your email",
        //     )
        // );

    // } catch (\Throwable $e) {
        // return response()->json(
        //     array(
        //         'success' => false,
        //         'message' => "Successfully updated your email",
        //     )
        // );
    // }
}

public function delete($id)
{
    $this->db->where('id', $id);
    $this->db->delete('user');
}

}