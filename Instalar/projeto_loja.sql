CREATE TABLE produtos 
  ( 
     id           INTEGER auto_increment PRIMARY KEY, 
     nome         VARCHAR(255), 
     preco        DECIMAL(10, 2), 
     categoria_id INT(11), 
     usado        TINYINT(1), 
     descricao    VARCHAR(300) 
  ); 

CREATE TABLE categorias 
  ( 
     id   INTEGER auto_increment PRIMARY KEY, 
     nome VARCHAR(255) 
  ); 

CREATE TABLE usuario 
  ( 
     id    INTEGER auto_increment PRIMARY KEY, 
     email VARCHAR(255), 
     senha VARCHAR(255) 
  ); 

INSERT INTO categorias 
            (nome) 
VALUES      ('Acessórios para Veículos'), 
            ('Agro, Indústria e Comércio'), 
            ('Animais'), 
            ('Antiguidades'), 
            ('Arte e Artesanato'), 
            ('Bebês'), 
            ('Brinquedos e Hobbies'), 
            ('Calçados'), 
            ('Roupas e Bolsas'); 