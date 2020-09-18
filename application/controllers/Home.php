<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('pages/home');
		$this->load->view('common/footer');
	}

	public function student_list()
	{
		$this->load->view('partial/student/student_list');
	}

	public function student_details()
	{
		$this->load->view('partial/student/student_details');
	}

	public function student_stat()
	{
		$this->load->view('partial/student/stat');
	}

	public function faker(){
		$faker = Faker\Factory::create();
		$this->load->model('student');
		for ($i=0; $i < 5 ; $i++) { 

			$options = [
				'nie' => 'SE'.date('Y').'000'.$i,
				'name' => $faker->firstName(),
				'username' => $faker->lastName(),
				'address' => $faker->address(),
				'sexe' => 'Homme'
			];

			$this->student->add($options);
		}
		for ($i=5; $i < 10 ; $i++) { 

			$options = [
				'nie' => 'SE'.date('Y').'000'.$i,
				'name' => $faker->firstName(),
				'username' => $faker->lastName(),
				'address' => $faker->address(),
				'sexe' => 'Femme'
			];

			$this->student->add($options);
		}
		redirect('/');
	}
}