# Practico API de Productos

Trabajo de Full Stack: PHP, MySQL, HTML, CSS y JavaScript.
Temas trabajados: documentos 8.1 al 8.5.

Incluye crear, listar, editar y eliminar productos, filtros,
ordenamiento, busqueda automatica, validaciones y CORS.

## Instalacion

1. Descargar o clonar el repositorio.
2. Ejecutar database/estructura.sql en MySQL.
3. Copiar backend/conexion.ejemplo.php como backend/conexion.php.
4. Cambiar CAMBIAR_PASSWORD por la contraseña local de MySQL.
5. Ajustar el usuario de MySQL si no se utiliza root.

La base comienza vacia. Crear productos desde el formulario.
La conexion real no se sube a GitHub.

## Requisitos

PHP con PDO, pdo_mysql y mbstring. MySQL funcionando.
Para usar Live Server, instalar esa extension en VS Code.

## Abrir con VS Code

Abrir la carpeta completa y permitir las tareas automaticas.
La tarea incluida inicia el backend en localhost:3000.
Usar Open with Live Server sobre frontend/index.html.
El frontend debe abrir en http://127.0.0.1:5501.

## Alternativa con terminales

Desde la carpeta del proyecto, ejecutar:
php -S localhost:3000 -t backend

En otra terminal:
php -S 127.0.0.1:5501 -t frontend

Abrir http://127.0.0.1:5501/index.html.
