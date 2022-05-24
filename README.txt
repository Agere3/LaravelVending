INSTRUCCIONES PARA ARRANCAR LA MÁQUINA EXPENDEDORA
==================================================

1.-En mysql crear una base de datos llamada laravending:

		CREATE DATABASE laravending;
		
2.-En mysql volcar los datos desde el fichero datos_bbdd_laravending.sql:

		source "YOUR_PATH"/LaravelVending/datos_bbdd_laravending.sql;	
			
3.-En el fichero LaravelVending/Laravending/.env hacer las modificaciones:

		línea 14 --> DB_DATABASE=laravending
		línea 15 --> DB_USERNAME="YOUR_MYSQL_USER"
		línea 16 --> DB_PASSWORD="YOUR_MYSQL_PASSWORD"

4.-Ahora ya se puede levantar la aplicación ejecutando el siguiente comando situándonos en el directorio LaravelVending/Laravending/

		php artisan serve
	
5.-Para hacer login se puede utilizar una de las siguientes combinaciones:

		user: user_1 ---> password: password
		user: user_2 ---> password: password
