<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task_model extends CI_Model {

    // Obter todas as tarefas
    public function get_tasks() {
        return $this->db->get('tasks')->result_array();
    }

    // Obter uma tarefa específica
    public function get_task($id) {
        return $this->db->get_where('tasks', ['id' => $id])->row_array();
    }

    // Inserir uma nova tarefa
    public function insert_task($data) {
        return $this->db->insert('tasks', $data);
    }

    // Atualizar tarefa
    public function update_task($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('tasks', $data);
    }

    // Excluir tarefa
    public function delete_task($id) {
        return $this->db->delete('tasks', ['id' => $id]);
    }
}
