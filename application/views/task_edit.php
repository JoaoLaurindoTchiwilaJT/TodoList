<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Tarefa</title>
    <!-- Link para o arquivo CSS -->
    <link rel="stylesheet" href="<?php echo  base_url('assets/css/style1.css'); ?>">
</head>
<body>
    <h1>Editar Tarefa</h1>
    <form action="<?php echo site_url('tasks/update/' . $task['id']); ?>" method="post">
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" value="<?php echo $task['title']; ?>" required>
        
        <label for="description">Descrição:</label>
        <textarea name="description" id="description"><?php echo $task['description']; ?></textarea>
        
        <label for="status">Status:</label>
        <select name="status" id="status">
            <option value="pending" <?php echo ($task['status'] == 'pending') ? 'selected' : ''; ?>>Pendente</option>
            <option value="in_progress" <?php echo ($task['status'] == 'in_progress') ? 'selected' : ''; ?>>Em progresso</option>
            <option value="completed" <?php echo ($task['status'] == 'completed') ? 'selected' : ''; ?>>Concluída</option>
        </select>
        
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
