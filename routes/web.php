<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//ruta a la raiz
Route::get('/', function () {
    echo "Hola desde la pagina de inicio";
    echo "<a href=".route('address').">Direccion</a>";
});

//ruta a una pagina 
Route::get('contacto',function(){
    return "Hola desde la pagina contacto";
});
//un link hacia la pagina seria asi <a href="contacto">Clic para contactar</a>

//ruta con parametro (obligatorio)
Route::get('saludos/{nombre}',function($nombre){
    return "Hola $nombre";
}); //en el navegador accedemos como 127.0.0.1/saludos/carlos

//ruta con parametro (no obligatorio)
Route::get('saludos/{nombre?}',function($nombre = 'Invitado'){
    return "Hola $nombre";
});//en el navegador accedemos como 127.0.0.1/saludos/carlos ó 127.0.0.1/saludos/

//ruta con parametro (no obligatorio) validado
Route::get('saludos2/{nombre?}',function($nombre = 'Invitado'){
    return "Hola $nombre";
})->where('nombre','[A-Za-z]+');

//ruta con un alias
Route::get('direccion',['as' => 'address',function(){
    return "Hola desde la pagina direccion";
}]); //para acceder hay que apuntar a address

//<a href=".route('address').">Clic para ver direccion</a>
//si queremos cambiar la url solo cambiariamos "direccion" y las url seguirian funcionando


Route::get('correo',['as' => 'email',function(){
    return "Hola desde la pagina correo";
}]); //para acceder hay que apuntar a address