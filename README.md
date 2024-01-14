# Gestión de Biblioteca Digital

## Requerimientos Funcionales Detallados:

-   [x] Hecho

### Modelado de Datos (en inglés):

-   [x] Users - Debe incluir información estándar del usuario como:
    -   [x] id
    -   [x] name
    -   [x] email
    -   [x] password
-   [x] Books - Cada entrada debe tener:
    -   [x] id
    -   [x] title
    -   [x] author
    -   [x] publication_year
-   [x] Reviews - Debe relacionarse con users y books:
    -   [x] user_id
    -   [x] book_id
    -   [x] review_text
    -   [x] rating

### CRUD de Libros (books):

-   [x] Create:
    -   [x] Los usuarios autenticados pueden añadir nuevos libros.
-   [x] Read:
    -   [x] Todos los usuarios pueden ver la lista de libros y detalles.
-   [x] Update/Delete:
    -   [x] Solo el usuario que añadió un libro puede modificarlo o eliminarlo.

### CRUD de Revisiones (reviews):

-   [x] Create:
    -   [x] Usuarios autenticados pueden añadir revisiones.
-   [x] Read:
    -   [x] Todos los usuarios pueden ver las revisiones.
-   [x] Update/Delete:
    -   [x] Los usuarios pueden modificar o eliminar solo sus propias revisiones.

### Búsqueda de Libros:

-   [x] Filtrado por:
    -   [x] title
    -   [x] author
    -   [x] publication_year

### Autenticación (Opcional):

-   [x] Implementa funcionalidades para:
    -   [x] registro
    -   [x] inicio de sesión
    -   [x] cierre de sesión.
-   [x] Asegura que las contraseñas sean almacenadas de forma segura.

### Dockerizacion (Opcional):

-   Lograr dockerizar la aplicación creando un “Docker-compose” para ejecutar el proyecto en cualquier equipo con docker.

### Documentación de la API:

-   Descripción clara de cada endpoint, incluyendo métodos HTTP, parámetros y formatos de respuesta.

### Requerimientos No Funcionales Detallados:

-   [x] Código Claro y Mantenible (en inglés):
    -   Código bien organizado y documentado, utilizando convenciones de Laravel.
    -   [x] Uso de migraciones y seeders para la base de datos.
-   [x] Seguridad:
    -   [x] Protección de endpoints, especialmente los que modifican la base de datos.
    -   [x] Restricción de acciones de creación, actualización y eliminación a usuarios autorizados.
-   [x] Control de Errores:
    -   [x] Gestión adecuada de errores con mensajes informativos.

## Entrega y Evaluación:

-   Proyecto entregado en un repositorio de Git con README en inglés explicando configuración y ejecución.
-   Evaluación basada en cumplimiento de requerimientos, calidad del código, estructura de base de datos y funcionalidades.
-   Valoración de creatividad, eficiencia en la resolución de problemas y uso efectivo de Laravel y MySQL.
