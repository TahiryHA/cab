<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once('./application/libraries/REST_Controller.php');

/**
 * Students API controller
 *
 * Validation is missign
 */
class Students extends REST_Controller {

	public function __construct()
	{
	    parent::__construct();

	    $this->load->model('student');
	}

	public function index_get()
	{
		$this->response($this->student->get_all());
	}

	public function edit_get($id = NULL)
	{
		if ( ! $id)
		{
			$this->response(array('status' => false, 'error_message' => 'No ID was provided.'), 400);
		}

		$this->response($this->student->get($id));
	}

	public function save_post($id = NULL)
	{
		if ( ! $id)
		{
			$new_id = $this->student->add($this->post());
			$this->response(array('status' => true, 'id' => $new_id, 'message' => sprintf('Student #%d has been created.', $new_id)), 200);
		}
		else
		{
			$this->student->update($id, $this->post());
			$this->response(array('status' => true, 'message' => sprintf('Student #%d has been updated.', $id)), 200);
		}
	}

	public function remove_delete($id = NULL)
	{
		if ($this->student->delete($id))
		{
			$this->response(array('status' => true, 'message' => sprintf('Student #%d has been deleted.', $id)), 200);
		}
		else
		{
			$this->response(array('status' => false, 'error_message' => 'This Student does not exist!'), 404);
		}
	}

}