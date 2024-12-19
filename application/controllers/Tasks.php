<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tasks extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('task_model');
    }

    // Exibir a lista de tarefas
    public function index() {
        $data['tasks'] = $this->task_model->get_tasks();
        $this->load->view('task_list', $data);
    }

    // Exibir o formulário de criação de tarefa
    public function create() {
        $this->load->view('task_create');
    }

    // Salvar tarefa
    public function store() {
        $task_data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'status' => $this->input->post('status')
        );
        $this->task_model->insert_task($task_data);
        redirect('tasks');
    }

    // Editar tarefa
    public function edit($id) {
        $data['task'] = $this->task_model->get_task($id);
        $this->load->view('task_edit', $data);
    }

    // Atualizar tarefa
    public function update($id) {
        $task_data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'status' => $this->input->post('status')
        );
        $this->task_model->update_task($id, $task_data);
        redirect('tasks');
    }

    // Excluir tarefa
    public function delete($id) {
        $this->task_model->delete_task($id);
        redirect('tasks');
    }
}
