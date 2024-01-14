# Gestión de Biblioteca Digital

## Requerimientos Funcionales Detallados:

-   [x] Hecho

### Modelado de Datos (en inglés):

-   [x] Users - Debe incluir información estándar del usuario como:
    -   id
    -   name
    -   email
    -   password
-   [x] Books - Cada entrada debe tener:
    -   id
    -   title
    -   author
    -   publication_year
-   [x] Reviews - Debe relacionarse con users y books:
    -   user_id
    -   book_id
    -   review_text
    -   rating

### CRUD de Libros (books):

-   [x] Create:
    -   Los usuarios autenticados pueden añadir nuevos libros.
-   [x] Read:
    -   Todos los usuarios pueden ver la lista de libros y detalles.
-   [x] Update/Delete:
    -   Solo el usuario que añadió un libro puede modificarlo o eliminarlo.

### CRUD de Revisiones (reviews):

-   [x] Create:
    -   Usuarios autenticados pueden añadir revisiones.
-   [x] Read:
    -   Todos los usuarios pueden ver las revisiones.
-   Update/Delete:
    -   Los usuarios pueden modificar o eliminar solo sus propias revisiones.

### Búsqueda de Libros:

-   [x] Filtrado por:
    -   title
    -   author
    -   publication_year

### Autenticación (Opcional):

-   [x] Implementa funcionalidades para:
    -   registro
    -   inicio de sesión
    -   cierre de sesión.
-   [x] Asegura que las contraseñas sean almacenadas de forma segura.

### Dockerizacion (Opcional):

-   Lograr dockerizar la aplicación creando un “Docker-compose” para ejecutar el proyecto en cualquier equipo con docker.

### Documentación de la API:

-   Descripción clara de cada endpoint, incluyendo métodos HTTP, parámetros y formatos de respuesta.

### Requerimientos No Funcionales Detallados:

-   [x] Código Claro y Mantenible (en inglés):
    -   Código bien organizado y documentado, utilizando convenciones de Laravel.
    -   Uso de migraciones y seeders para la base de datos.
-   [x] Seguridad:
    -   Protección de endpoints, especialmente los que modifican la base de datos.
    -   Restricción de acciones de creación, actualización y eliminación a usuarios autorizados.
-   [x] Control de Errores:
    -   Gestión adecuada de errores con mensajes informativos.

## Entrega y Evaluación:

-   Proyecto entregado en un repositorio de Git con README en inglés explicando configuración y ejecución.
-   Evaluación basada en cumplimiento de requerimientos, calidad del código, estructura de base de datos y funcionalidades.
-   Valoración de creatividad, eficiencia en la resolución de problemas y uso efectivo de Laravel y MySQL.
