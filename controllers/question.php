<?php 
class Question extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('question_model');
	}

	public function index()
	{
		$this->load->library('form_validation');
		$data['all_topics'] = $this->question_model->get_topics();
		$this->load->view('question_form', $data);
	}

	public function add_question_info()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('sender', 'sender', 'required|trim');
		$this->form_validation->set_rules('email', 'email', 'required|trim|valid_email')
		$this->form_validation->set_rules('topic_id', 'topic_id', 'required|trim')
		$this->form_validation->set_rules('content', 'content', 'required|trim')
		$this->form_validation->set_rules('theme', 'theme', 'required|trim')
		$this->form_validation->set_rules('string', 'string', 'required|trim')

		

		if ($this->form_validation->run() === FALSE) 
		{
			$this->show_contact_form();
			echo "Опитайте отново!";
		} 
		else 
		{
			if (valid_email($this->input->post('email'))
			{
				$this->question_model->add_question();
				echo "success!";
			}
			else
			{
				echo 'email is not valid';
			}
		}

	}

}