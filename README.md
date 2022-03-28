
## App

Aplicación web de prueba de conocimiento, desarrollada en Laravel 8. 


### Instalación

- Instalar paquetes de composer
-> composer install
- Crear DB en MySql con el nombre prueba_db
- En la raíz del proyecto 
-> Crear un archivo llamado **.env** y copiar el contenido de **env.example** (cp .env.example .env)
- Generar nueva clave para la APP
-> php artisan key:generate
- Ejecutar migraciones y seed 
-> php artisan migrate --seed
- Iniciar json-server Api Rest de premios
-> npm start

### Credenciales de acceso
email: admin@mail.com
pass: Admin123456
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
