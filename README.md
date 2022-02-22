

## EJERCICIO 1: Suma de números en ruta

## Paso 1

Crear proyecto Laravel

## Paso 2

Nuevo controlador en Laravel: php artisan make:controller CalculatorController

## Paso 3

Creamos la vista calculadora con el comando php artisan make:view calculator

## Paso 4

Añadimos la ruta en web.php: Route::get('/add/{number1}/{number2}', 'CalculatorController@add');

## Paso 5

Crear funcion llamada add en el controlador y lleva la variable a la vista. Previamente comprueba si falta algun parámetro o no son númericos


## Paso 6

En la vista recibimos la variable con la suma de los dos números y la mostramos.


## Paso 7

Para mostrar el ejemplo ponemos en el navegador por ejemplo (Donde 1 y 4 son el primer número y segundo respectivamente): http://localhost:8000/add/1/4


## EJERCICIO 2: Comando Laravel con Artisan

## Paso 1

Creamos un comando de artisan: php artisan make:command operations

## Paso 2

Buscamos el archivo para crear la lógica del comando. En este caso es operations.php que le hemos creado anteriormente. Esta dentro de: app/Console/Commands

## Paso 3

Definimos el comando a llamar, ponemos una descripción y en el handle creamos la lógica de las operaciones.


## Paso 4

Ejecumatos el comando en consola y veremos que los suma correctamente o por el contrario si no le hemos dado esos parámetros dará un error. Por ejemplo: php artisan operations:add 1 3








