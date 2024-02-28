<!-- Pensando no banco de dado -->
<?php
// vamos criar a tabela de assinaturas
// CREATE TABLE assinaturas (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     nome VARCHAR(100) NOT NULL,
//     id_usuario INT NOT NULL,
//     FOREIGN KEY (id_usuario) REFERENCES usuarios(id)
// );
// agora vamos criar a tabela de pessoas que estão dentro das assinaturas
// CREATE TABLE pessoas (
//     id INT AUTO_INCREMENT PRIMARY KEY, 
//     nome VARCHAR(100) NOT NULL,
//     id_assinatura INT NOT NULL,
//     FOREIGN KEY (id_assinatura) REFERENCES assinaturas(id)
// );
// agora vamos criar a tabela de pagamentos
// CREATE TABLE pagamentos (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     id_pessoa INT NOT NULL,
//     id_assinatura INT NOT NULL,
//     status ENUM('pago', 'nao pago') NOT NULL,
//     data_vencimento DATE NOT NULL,
//     FOREIGN KEY (id_pessoa) REFERENCES pessoas(id),
//     FOREIGN KEY (id_assinatura) REFERENCES assinaturas(id)
// );
// agora vamos criar a tabela de mensalidades
// CREATE TABLE mensalidades (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     id_pessoa INT NOT NULL,
//     id_assinatura INT NOT NULL,
//     valor DECIMAL(10,2) NOT NULL,
//     data_vencimento DATE NOT NULL,
//     FOREIGN KEY (id_pessoa) REFERENCES pessoas(id),
//     FOREIGN KEY (id_assinatura) REFERENCES assinaturas(id)
// );
// agora vamos criar a tabela de movimentações
// CREATE TABLE movimentacoes (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     id_pessoa INT NOT NULL,
//     id_assinatura INT NOT NULL,
//     valor DECIMAL(10,2) NOT NULL,
//     data DATE NOT NULL,
//     FOREIGN KEY (id_pessoa) REFERENCES pessoas(id),
//     FOREIGN KEY (id_assinatura) REFERENCES assinaturas(id)
// );
// agora vamos criar a tabela de configurações
// CREATE TABLE configuracoes (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     id_usuario INT NOT NULL,
//     valor_mensalidade DECIMAL(10,2) NOT NULL,
//     FOREIGN KEY (id_usuario) REFERENCES usuarios(id)
// );
