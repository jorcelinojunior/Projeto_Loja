create table produtos(
        id integer auto_increment primary key,
        nome varchar(255), preco decimal(10,2),
        categoria_id int(11),
        usado tinyint(1),
        descricao varchar(300)
);

create table categorias(
        id integer auto_increment primary key,
        nome varchar(255)
);

create table usuario(
        id integer auto_increment primary key,
        email varchar(255),
        senha varchar(255)
);

insert into categorias (nome) values
        ('Acessórios para Veículos'),
        ('Agro, Indústria e Comércio'),
        ('Animais'),
        ('Antiguidades'),
        ('Arte e Artesanato'),
        ('Bebês'),
        ('Brinquedos e Hobbies'),
        ('Calçados'),
        ('Roupas e Bolsas')
;