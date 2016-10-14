Descripción
------------

Ejercicio para poner en practica las buenas practicas de desarrollo guíado por test TDD utilizando phpUnit para pruebas sencillas sin herramientas, codeception para pruebas de aceptación, funcionales o unit y el patrón de diseño Bridge para simular diferentes implementaciones con uno o varios formularios de clases concretas.

Codeception es un framework de pruebas que uno muchas características útiles para los desarrolladores ya que no solo permite escribir y correr pruebas unitarias sino que también puedes realizar pruebas sobre las interfaces de usuario, pruebas sobre API REST, SOAP, XML-RCP, pruebas sobre el api de Facebook, integración con múltiples frameworks, maneja múltiples tipos de respuesta y además las pruebas son muy fáciles de escribir y leer.
Pueden encontrar toda la documentación en http://codeception.com/quickstart

¿Cómo probarlo?
---------------

Para clonar e instalar las dependencias del proyecto por consola posicionate en tu directorio de desarrollos y ejecuta lo siguiente comandos:

    git clone https://github.com/alejandrososa/FuncionalidadesTDD.git
    cd FuncionalidadesTDD && composer update
    
Ya tenemos el el proyecto instalado, ahora vamos a ejecutar las pruebas simples de phpUnit

     phpunit --bootstrap=vendor/autoload.php indexTest.php --colors 

O podemos usar el framework de codeception para realizar nuestra prueba

    vendor/bin/codecept run acceptance



