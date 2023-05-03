# prueba_tecnica_pompeyo
Prueba técnica para empresa Pompeyo


# Opccion 1
1) crear base de datos con el nombre:
- pompeyo_db

2) ejecutar comando: 
- php artisan migrate

3) ejecutar comando:
- php artisan db:seed

4) ejecutar comando:
- php artisan serve

# Opccion 2
1) crear base de datos con el nombre:
- pompeyo_db

2) importar el archivo pompeyo_db.sql en la base de datos creada 
los usuarios creados en esta base de datos son y tiene como contraseña 'password':

- user@pompeyoblogs.com
- bledner@example.org
- dbraun@example.net
- fredrick75@example.org
- milo25@example.org
- norberto.gutkowski@example.net
- oda70@example.org
- sshanahan@example.net
- wilderman.noemi@example.org
- zruecker@example.net


3) ejecutar comando:
- php artisan serve

# Inicio de session por defecto
- usuario:  user@pompeyoblogs.com
- contraseña: password

# Configuracion del archivo .env
1) renombrar el .env.example -> .env

2) dentro el archivo .env configurar las siguientes variables

- DB_DATABASE=pompeyo_db
- DB_USERNAME=<nombre-base-datos>
- DB_PASSWORD=<password-base-datos> 