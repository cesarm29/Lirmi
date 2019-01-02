
### Requerimientos de instalacion

- PHP 5.6+
- Composer
- MySQL
- npm - yarn

### Instalacion

1.  desde consola ejecutar  cp .env.example .env     para crear el archivo.env
2.  crear en mysql una base de datos con nombre gantt
3.  desde consola ejecutar nano .env para ingresar a la configuracion e ingresar segun xampp o lampp

DB_CONNECTION=mysql
DB_PORT=3306
DB_DATABASE=gantt
DB_USERNAME=root
DB_PASSWORD=

4.  desde consola ejecutar composer update para crear todas las dependencias dentro de la carpeta vendor
5.  instalar todas las dependencias de node ejecutando npm install
6.  ejecutar desde consola php artisan migrate --seed para llenar la base de datos

### Ejecutar proyecto

7. desde consola ejecutar php artisan serve  el proyecto si todo quedo bien instalado se visualizara en http://localhost:8000/ 


