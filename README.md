# Task Manager

## Sobre o Projeto

**Task Manager** é uma aplicação simples para gerenciamento de tarefas, desenvolvida utilizando o framework PHP CodeIgniter 3. O objetivo do projeto é permitir que os usuários criem, editem, visualizem e excluam tarefas de forma fácil e eficiente.

## Funcionalidades

- **Listagem de Tarefas**: Visualize todas as tarefas cadastradas.
- **Criação de Tarefas**: Adicione novas tarefas com título, descrição e status.
- **Edição de Tarefas**: Atualize informações de uma tarefa existente.
- **Exclusão de Tarefas**: Remova tarefas que não são mais necessárias.

## Requisitos do Sistema

- PHP 7.2 ou superior
- Servidor Apache (exemplo: XAMPP, WAMP) 
- Banco de dados MySQL

## Configuração do Projeto

### 1. Clone o Repositório

Baixe ou clone o repositório no seu computador:

```bash
git clone https://github.com/seu-usuario/task-manager.git
```

### 2. Configure o Banco de Dados

1. Abra o phpMyAdmin ou outro cliente MySQL.
2. Crie um banco de dados chamado `task_manager` (ou outro nome de sua escolha).
3. Importe o arquivo `database.sql` para criar as tabelas necessárias.

### 3. Configure o CodeIgniter

1. Renomeie o arquivo `application/config/config-sample.php` para `config.php` e atualize as configurações básicas (base URL, cookies, etc.).
2. Renomeie o arquivo `application/config/database-sample.php` para `database.php` e configure as credenciais do banco de dados:

```php
'db' => [
    'hostname' => 'localhost',
    'username' => 'seu_usuario',
    'password' => 'sua_senha',
    'database' => 'task_manager',
    'dbdriver' => 'mysqli',
],
```

### 4. Habilite o Mod Rewrite

Certifique-se de que o módulo `mod_rewrite` está habilitado no Apache.

1. Abra o painel do XAMPP ou WAMP e clique em *Config* no Apache.
2. Abra o arquivo `httpd.conf` e verifique se a linha abaixo está descomentada:

```apache
LoadModule rewrite_module modules/mod_rewrite.so
```

3. No mesmo arquivo, encontre o bloco `<Directory>` e configure o `AllowOverride` como `All`:

```apache
<Directory "C:/xampp/htdocs">
    Options Indexes FollowSymLinks Includes ExecCGI
    AllowOverride All
    Require all granted
</Directory>
```

4. Reinicie o servidor Apache pelo painel do XAMPP ou WAMP.

### 5. Configure o `.htaccess`

Adicione ou verifique o arquivo `.htaccess` na raiz do projeto:

```htaccess
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php/$1 [L]
```

### 6. Inicie o Servidor

1. Copie a pasta do projeto para o diretório `htdocs` do XAMPP (ou o diretório correspondente no WAMP).
2. Acesse o projeto no navegador através do endereço:

```
http://localhost/TodoList/
```

## Estrutura de Diretórios

- **application/controllers**: Contém os controladores da aplicação.
- **application/models**: Contém os modelos para interação com o banco de dados.
- **application/views**: Contém as views utilizadas para renderizar páginas HTML.
- **public/css**: Contém os arquivos de estilo CSS.

## Uso

1. Acesse o projeto no navegador pelo endereço [http://localhost/TodoList/](http://localhost/TodoList/).
2. Na página inicial, visualize todas as tarefas cadastradas.
3. Use os botões para criar, editar ou excluir tarefas.

## Tecnologias Utilizadas

- **PHP**: Linguagem de programação principal.
- **CodeIgniter 3**: Framework PHP para estruturação do projeto.
- **MySQL**: Banco de dados relacional.
- **HTML/CSS**: Para a interface do usuário.

## Contribuição

1. Faça um fork do repositório.
2. Crie uma branch para suas modificações:

```bash
git checkout -b minha-feature
```

3. Commit suas alterações:

```bash
git commit -m "Adicionei uma nova funcionalidade"
```

4. Envie suas alterações para a branch principal:

```bash
git push origin minha-feature
```

5. Abra um Pull Request.

## Licença

Este projeto está licenciado sob a Licença MIT. Consulte o arquivo `LICENSE` para mais informações.
