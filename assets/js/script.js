function addTask() {
    const taskInput = document.getElementById('task');
    if (taskInput.value.trim() === '') {
        alert('Task cannot be empty');
        return;
    }
    document.forms[0].submit();
}

function deleteTask(id) {
    if (confirm('Are you sure you want to delete this task?')) {
        window.location.href = `/todo/delete_task/${id}`;
    }
}

    // Função para validar o formulário antes de enviar
    function validateTaskForm() {
        const taskInput = document.getElementById('task');
        if (taskInput.value.trim() === '') {
            alert('Task cannot be empty');
            return false;
        }
        return true; // Permite enviar o formulário se estiver válido
    }

function validateTaskForm() {
    const taskInput = document.getElementById('task');
    if (taskInput.value.trim() === '') {
        alert('Task cannot be empty');
        return false;
    }
    return true;
}

