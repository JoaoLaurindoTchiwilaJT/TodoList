<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Criar Tarefa</title>
    <!-- Link para o arquivo CSS -->
    <link rel="stylesheet" href="<?php  echo base_url('assets/css/style2.css'); ?>">
</head>
<body>
    <h1>Criar Nova Tarefa</h1>
    <form action="<?php echo site_url('tasks/store'); ?>" method="post">
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" required>
        
        <label for="description">Descrição:</label>
        <textarea name="description" id="description"></textarea>
        
        <label for="status">Status:</label>
        <select name="status" id="status">
            <option value="pending">Pendente</option>
            <option value="in_progress">Em progresso</option>
            <option value="completed">Concluída</option>
        </select>
        
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
