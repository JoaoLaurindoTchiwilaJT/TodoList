<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Task Manager</title>
    <!-- Adicionar o link para o arquivo CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>
<body>
    <h1>Lista de Tarefas</h1>

    <!-- Link para criar nova tarefa com estilo aplicado -->
    <a href="<?php echo site_url('tasks/create'); ?>" class="create-btn">Criar Nova Tarefa</a>

    <!-- Tabela para exibir as tarefas -->
    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tasks as $task): ?>
                <tr>
                    <td><?php echo $task['title']; ?></td>
                    <td><?php echo ucfirst($task['status']); ?></td>
                    <td>
                        <a href="<?php echo site_url('tasks/edit/' . $task['id']); ?>">Editar</a>
                        <a href="<?php echo site_url('tasks/delete/' . $task['id']); ?>">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
