# Estrutura dos Bancos de Dados

Documentacao reconstruida a partir do codigo PHP (os projetos nao possuiam
arquivos .sql). Use os scripts abaixo para recriar os bancos do zero.

Configuracao usada nos projetos: MySQL em `localhost`, usuario `root`,
senha vazia (padrao XAMPP/Laragon).

---

## PROJETO_MOVIESTAR — banco `moviestar`

Site de filmes com cadastro de usuarios e avaliacoes.
Conexao: `PROJETO_MOVIESTAR/db.php`

```sql
CREATE DATABASE IF NOT EXISTS moviestar;
USE moviestar;

CREATE TABLE users (
  id       INT AUTO_INCREMENT PRIMARY KEY,
  name     VARCHAR(255) NOT NULL,
  lastname VARCHAR(255),
  email    VARCHAR(255) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  token    VARCHAR(255),
  image    VARCHAR(255)
);

CREATE TABLE movies (
  id          INT AUTO_INCREMENT PRIMARY KEY,
  title       VARCHAR(255) NOT NULL,
  description TEXT,
  image       VARCHAR(255),
  trailer     VARCHAR(255),
  category    VARCHAR(100),
  length      VARCHAR(50),
  users_id    INT NOT NULL,
  FOREIGN KEY (users_id) REFERENCES users(id)
);

CREATE TABLE reviews (
  id        INT AUTO_INCREMENT PRIMARY KEY,
  rating    INT NOT NULL,
  review    TEXT,
  movies_id INT NOT NULL,
  users_id  INT NOT NULL,
  FOREIGN KEY (movies_id) REFERENCES movies(id),
  FOREIGN KEY (users_id)  REFERENCES users(id)
);
```

Observacoes:
- `image` em `movies` e `users` guarda apenas o nome do arquivo; as imagens
  ficam em `PROJETO_MOVIESTAR/img/movies/` e `img/users/`.
- `trailer` guarda a URL de embed do YouTube.

---

## PROJETO_AGENDA — banco `agenda`

CRUD simples de contatos.
Conexao: `PROJETO_AGENDA/config/connection.php`

```sql
CREATE DATABASE IF NOT EXISTS agenda;
USE agenda;

CREATE TABLE contacts (
  id           INT AUTO_INCREMENT PRIMARY KEY,
  name         VARCHAR(255) NOT NULL,
  phone        VARCHAR(50),
  observations TEXT
);
```

---

## PROJETO_BLOG

Nao usa banco de dados — os posts e categorias sao arrays PHP em
`PROJETO_BLOG/data/posts.php` e `data/categories.php`.

---

## Como rodar

1. Suba um MySQL local (XAMPP, Laragon ou WAMP).
2. Execute os scripts SQL acima (phpMyAdmin ou linha de comando).
3. Sirva a pasta do projeto:

```bash
cd PROJETO_MOVIESTAR
php -S localhost:8000
```

Ou copie a pasta para o `htdocs` do XAMPP.
