<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	public function index()
	{
        $this->db->select('*');
        $this->db->from('student');
        $query      = $this->db->get();
        $response   = $query->result();

        $data['students'] = $response;

		$this->load->view('student/list', $data);
	}

    public function form()
    {
        $this->load->view('student/form');
    }

    public function save()
    {
        $id                     = $this->input->post('id');
        $data['name']           = $this->input->post('name');
        $data['fathers_name']   = $this->input->post('fathers_name');
        $data['mothers_name']   = $this->input->post('mothers_name');

        if ($id) {
			$update = $this->db->update('student', $data, ['id '=> $id]);
			if ($update) {
				$alert['msg'] 	= "your data has been updated";
				$alert['type'] 	= "success";
				echo json_encode($alert);
			}
		} else {
			$save = $this->db->insert('student', $data);
			if ($save) {
				$alert['msg'] 	= "your data has been saved";
				$alert['type'] 	= "success";
				echo json_encode($alert);
			}
		}

    }

    public function edit($id)
    {
        $this->db->select('*');
        $this->db->from('student');
        $this->db->where('id', $id);
        $query      = $this->db->get();
        $response   = $query->row();

        $data['input'] = $response;
        $this->load->view('student/form', $data);
    }

    public function delete($id)
    {
        $delete = $this->db->delete('student', ['id' => $id]);
        if ($delete) {
            $alert['msg'] 	= "your data has been deleted";
            $alert['type'] 	= "success";
            echo json_encode($alert);
        }
    }
}
