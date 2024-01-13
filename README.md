# Gestión de Biblioteca Digital

## Requerimientos Funcionales Detallados:

-   [v] Hecho
-   [x] Pendiente

### Modelado de Datos (en inglés):

-   [v] Users - Debe incluir información estándar del usuario como:
    -   id
    -   name
    -   email
    -   password
-   [v] Books - Cada entrada debe tener:
    -   id
    -   title
    -   author
    -   publication_year
-   [v] Reviews - Debe relacionarse con users y books:
    -   user_id
    -   book_id
    -   review_text
    -   rating

### CRUD de Libros (books):

-   Create:
    -   [x] Los usuarios autenticados pueden añadir nuevos libros.
-   Read:
    -   [x] Todos los usuarios pueden ver la lista de libros y detalles.
-   Update/Delete:
    -   [x] Solo el usuario que añadió un libro puede modificarlo o eliminarlo.

### CRUD de Revisiones (reviews):

-   Create:
    -   [x] Usuarios autenticados pueden añadir revisiones.
-   Read:
    -   [x] Todos los usuarios pueden ver las revisiones.
-   Update/Delete:
    -   [x] Los usuarios pueden modificar o eliminar solo sus propias revisiones.

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
-   [v] Asegura que las contraseñas sean almacenadas de forma segura.

### Dockerizacion (Opcional):

-   [x] Lograr dockerizar la aplicación creando un “Docker-compose” para ejecutar el proyecto en cualquier equipo con docker.

### Documentación de la API:

-   [x] Descripción clara de cada endpoint, incluyendo métodos HTTP, parámetros y formatos de respuesta.

### Requerimientos No Funcionales Detallados:

-   [v] Código Claro y Mantenible (en inglés):
    -   Código bien organizado y documentado, utilizando convenciones de Laravel.
    -   Uso de migraciones y seeders para la base de datos.
-   [v] Seguridad:
    -   Protección de endpoints, especialmente los que modifican la base de datos.
    -   Restricción de acciones de creación, actualización y eliminación a usuarios autorizados.
-   [v] Control de Errores:
    -   Gestión adecuada de errores con mensajes informativos.

## Entrega y Evaluación:

-   Proyecto entregado en un repositorio de Git con README en inglés explicando configuración y ejecución.
-   Evaluación basada en cumplimiento de requerimientos, calidad del código, estructura de base de datos y funcionalidades.
-   Valoración de creatividad, eficiencia en la resolución de problemas y uso efectivo de Laravel y MySQL.
