# tpPW2_pokemons
Realizar una web que represente una Pokedex (listado de pokémon) y permita realizar búsqueda
sobre la misma. Además, el sistema debe permitir que el administrador se loguee al mismo y
pueda realizar abm de los elementos (alta, baja y modificación). Ejemplo de donde pueden tomar
datos: http://es.pokemon.wikia.com/wiki/Lista_de_Pok%C3%A9mon <br>
Casos de uso:<br>
- Si se busca un pokemon existente, mostrar sólo ese.
- Si se busca un pokemon inexistente, informar "pokemon no encontrado" y - mostrar la lista de
todos ellos.<br>
- Si no se busca nada, mostrar la lista de todos ellos<br>
- Usuario logueado: puede dar de alta un pokemon<br>
- Usuario logueado: puede dar de baja un pokemon<br>
- Usuario logueado: puede editar un pokemon<br>
Requisitos técnicas:<br>
- La web debe ser FirstMobile (responsive). Puede implementarse a gusto, pero se
recomienda el uso de w3css, bootstraps o materialize.<br>
- Los datos mínimos de cada pokémon serán:<br>
- imagen (url)
- nombre
- tipo
agregar todos los que quieran<br>
- Debe trabajarse sobre una base de datos MySql (o postgre si prefieren).
- El backend debe realizarse en PHP
Requisitos de formato:<br>
- La base de datos debe llamarse: pokemons-<apellido-nombre>.
Ej: pokemons-daranno-facundo<br>
- La estructura de carpeta debe ser la siguiente y entregarse en un Zip:<br>
- El Zip debe llamarse: pokemons-<apellido-nombre><br>
- Carpeta llamada: pokemons-<apellido-nombre><br>
Ej: pokemons-daranno-facundo<br>
- Contenido<br>
- README.txt: el cual indique link a repositorio GIT con permisos
públicos,dni nombre y apellido del integrante.
- database.sql: archivo que cree la base de datos, las tablas y la cargue con
algunos datos.
- index.php: debe ingresar directamente a la búsqueda de pokemon
- resto de archivos php necesarios.
- carpeta ‘recursos’: la cual contendrá todo aquello que no sea php: css,
imágenes, html, frameworks (w3css), etc.
Chequear si los formatos y rutas son correctos: descomprimir el zip en el / del web server,
acceder mediante url a: locahost:<puerto>/pokemons-<apellido-nombre>. Si no funciona de
éste modo, luego de crear la base de datos, el ejercicio no será corregido.
