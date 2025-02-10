# Gestor de Times

Este projeto é um CRUD simples para gerenciamento de times e jogadores, desenvolvido com PHP e MySQL.

## 🚀 Tecnologias Utilizadas

- PHP
- MySQL
- Bootstrap (para estilização)
- HTML/CSS

## 📌 Funcionalidades

- 📋 Cadastro de times e jogadores
- 📝 Edição de registros
- ❌ Exclusão de times e jogadores
- 🔍 Listagem de dados

## 📂 Estrutura do Projeto

```
/
├── includes/
│   ├── db.php
├── pages/
│   ├── add.php
│   ├── edit.php
│   ├── delete.php
│   ├── gestao.php
├── sql/
│   ├── create_tables.sql
├── css/
│   ├── styles.css
├── index.php
├── save.php
├── savejogadores.php
├── update.php
└── README.md
```

## ⚙️ Configuração do Ambiente

### 1️⃣ Clonar o Repositório
```bash
git clone https://github.com/seu-usuario/seu-repositorio.git
cd seu-repositorio
```

### 2️⃣ Configurar o Banco de Dados
1. Criar um banco de dados no MySQL.
2. Executar o script `sql/create_tables.sql` para criar as tabelas necessárias.
3. Configurar a conexão no arquivo `includes/db.php`:

```php
<?php
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$database = "times_esportivos";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
```

### 3️⃣ Rodar o Projeto
1. Iniciar um servidor local com o XAMPP, WAMP ou um servidor embutido do PHP:
```bash
php -S localhost:8000
```
2. Acessar `http://localhost:8000` no navegador.

## 🛠️ Melhorias Futuras
- Implementação de autenticação de usuários.
- Melhorias na interface.
- Refatoração do código para uso de PDO ao invés de MySQLi.

---

📬 Contato
Se você tiver alguma dúvida ou sugestão, não hesite em me contatar por e-mail: alexsantos.djesus@gmail.com.

---

## 📜 Licença
Este projeto está sob a licença MIT. Sinta-se livre para contribuir! 😃

---

## © 2025 - Desenvolvido por [Alex Santos]
