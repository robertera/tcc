# tcc

Instalação do cms:
Clonar o repositorio e instalar as dependencias com o comando:
$ composer install

Rode o comando abaixo. Não esqueça de configurar a .env
$ php artisan cms:initialize --seed

Instale o node e o npm seguindos os comandos abaixo para criar e compilar os assets do app
$ npm install
$ npm run production

Finalmente, execute o servidor
$ php artisan serve

Abra http://localhost:8000 no seu browser. Para cessar o painel de admin, use o link http://localhost:8000/admin no seu browser. A aplicação vem com o email de administrador e senha: admin@admin.com; 123456.


Anotações:
Semanas antes da apresentação da Semepi foi feita a edição dos arquivos e alterado o layout, para que pudessemos apresentar um exemplar em beta para a feira
Nas semanas seguintes fiz o estudo do codigo

Semana 17/10 á 24/10
Estou estudando sobre api's para implementar uma que gerencie os arquivos
