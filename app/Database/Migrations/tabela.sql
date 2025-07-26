CREATE DATABASE portifolio;
USE portifolio;

CREATE TABLE projeto (
    id_projeto INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    sub_titulo VARCHAR(255) NOT NULL,
    img_capa VARCHAR(255) NOT NULL,
    img_destaque VARCHAR(255) NOT NULL,
    link_demo VARCHAR(255),
    link_figma VARCHAR(255),
    link_github VARCHAR(255),
    link_video_e VARCHAR(255),
    link_video_c VARCHAR(255),
    descricao_projeto TEXT NOT NULL
);

CREATE TABLE tecnologia (
    id_tecnologia INT AUTO_INCREMENT PRIMARY KEY,
    nome_tecnologia VARCHAR(100) NOT NULL,
    img_tecnologia VARCHAR(100) NOT NULL UNIQUE
);

-- Tabela de imagens
CREATE TABLE imagem (
    id_imagem INT AUTO_INCREMENT PRIMARY KEY,
    img_projeto VARCHAR(255) NOT NULL,
    alt_text VARCHAR(255)
);

-- Tabela de destaques (caso você queira marcar certos projetos como destaques)
CREATE TABLE destaque (
    id_destaque INT AUTO_INCREMENT PRIMARY KEY,
    projeto_id INT NOT NULL,
    
    FOREIGN KEY (projeto_id) REFERENCES projeto(id) ON DELETE CASCADE
);

CREATE TABLE projeto_imagem (    
    projeto_id INT NOT NULL,
    imagem_id INT NOT NULL,

    PRIMARY KEY (projeto_id, imagem_id),
    FOREIGN KEY (projeto_id) REFERENCES projeto(id) ON DELETE CASCADE,
    FOREIGN KEY (imagem_id) REFERENCES imagem(id) ON DELETE CASCADE
);

CREATE TABLE projeto_tecnologia (
    
    projeto_id INT NOT NULL,
    tecnologia_id INT NOT NULL,

    PRIMARY KEY (projeto_id, tecnologia_id),
    FOREIGN KEY (projeto_id) REFERENCES projeto(id) ON DELETE CASCADE,
    FOREIGN KEY (tecnologia_id) REFERENCES tecnologia(id) ON DELETE CASCADE
);

INSERT INTO tecnologia (nome_tecnologia,img_tecnologia) VALUES  
('Css','css.svg'),
('Figma','figma.svg'),
('Html','html.svg'),
('React','react.svg'),
('TypeScript','ts.svg')

INSERT INTO projeto (titulo, sub_titulo, img_capa, img_destaque, link_demo, link_figma, link_github, link_video_e, link_video_c, descricao_projeto)VALUES 
('portifolio do bruno mendes de morais','ESTE PROJETO FOI DESENVOLVIDO PARA FACILITAR A DIVULGAÇÃO DE MEUS PROJETOS','projeto1.png','projeto1.png','','#',"","","","Este projeto consiste em um portfólio digital desenvolvido com o framework CodeIgniter, com o objetivo de apresentar informações profissionais, habilidades técnicas, projetos desenvolvidos e formas de contato de forma moderna, organizada e responsiva.A aplicação é estruturada em seções como Sobre Mim, Habilidades, Projetos, Experiência Profissional e Contato, todas integradas dentro da arquitetura MVC do CodeIgniter. A navegação entre as seções pode ser feita via rotas amigáveis e âncoras, proporcionando uma experiência fluida ao usuário.")

INSERT INTO imagem (img_projeto, alt_text) VALUES  
('projeto1.png','foto do projeto'),
('projeto1.png','foto do projeto'),
('projeto1.png','foto do projeto'),
('projeto1.png','foto do projeto'),
('projeto1.png','foto do projeto')

INSERT INTO projeto_imagem (projeto_id, imagem_id) VALUES  
('1','1'),
('2','2'),
('2','3'),
('2','4'),
('1','5')

INSERT INTO projeto_tecnologia (projeto_id, tecnologia_id) VALUES  
('1','1'),
('1','2'),
('1','3'),
('1','4'),
('2','1'),
('2','2'),
('2','3')