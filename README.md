# PHP-trabalho

Site simples em PHP + HTML (sem CSS) para uma pequena oficina de artes, com menu e rodapé reutilizáveis via include, integração com MySQL via PDO, e CRUD de um único módulo.
## Composto de:
Home: Exibindo o último registro "Sobre".
Sobre: CRUD com upload de imagem.
Galeria: Lista de todas as imagens cadastradas.
P.S JPEG, PNG, JPG, GIF, WEBP aceitos para upload de imagem
Contato: Página estrutural.

## -> SCRIPT BANCO DE DADOS
CREATE DATABASE IF NOT EXISTS oficina_db
  CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE oficina_db;

CREATE TABLE IF NOT EXISTS sobre (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titulo VARCHAR(150) NOT NULL,
  descricao TEXT NOT NULL,
  photo_path VARCHAR(255) DEFAULT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


## Como rodar o projeto:
1- Clonar repositório
2- Criar o banco de dados atráves do MySQL
3- COnfigurar arquivo db.sql
4- Acessar localhost:8000

