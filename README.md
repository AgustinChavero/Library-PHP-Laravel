# Digital Library Management

## Detailed Functional Requirements:

-   [x] Done

### Data Modeling:

-   [x] Users - Must include standard user information such as:
    -   [x] id
    -   [x] name
    -   [x] email
    -   [x] password
-   [x] Books - Each entry must have:
    -   [x] id
    -   [x] title
    -   [x] author
    -   [x] publication_year
-   [x] Reviews - Should be related to users and books:
    -   [x] user_id
    -   [x] book_id
    -   [x] review_text
    -   [x] rating

### Books CRUD (Create, Read, Update, Delete):

-   [x] Create:
    -   [x] Authenticated users can add new books.
-   [x] Read:
    -   [x] All users can view the list of books and details.
-   [x] Update/Delete:
    -   [x] Only the user who added a book can modify or delete it.

### Reviews CRUD:

-   [x] Create:
    -   [x] Authenticated users can add reviews.
-   [x] Read:
    -   [x] All users can view reviews.
-   [x] Update/Delete:
    -   [x] Users can modify or delete only their own reviews.

### Book Search:

-   [x] Filtering by:
    -   [x] title
    -   [x] author
    -   [x] publication_year

### Authentication (Optional):

-   [x] Implement functionalities for:
    -   [x] registration
    -   [x] login
    -   [x] logout.
-   [x] Ensure passwords are securely stored.

### Dockerization (Optional):

-   Dockerize the application by creating a "Docker-compose" to run the project on any machine with Docker.

### API Documentation:

-   [x] Clear description of each endpoint, including HTTP methods, parameters, and response formats.

### Detailed Non-functional Requirements:

-   [x] Clear and Maintainable Code:
    -   [x] Well-organized and documented code, using Laravel conventions.
    -   [x] Use migrations and seeders for the database.
-   [x] Security:
    -   [x] Protection of endpoints, especially those modifying the database.
    -   [x] Restriction of creation, update, and deletion actions to authorized users.
-   [x] Error Handling:
    -   [x] Proper error management with informative messages.

## Delivery and Evaluation:

-   Project delivered in a Git repository with an English README explaining configuration and execution.
-   Evaluation based on compliance with requirements, code quality, database structure, and functionalities.
-   Assessment of creativity, efficiency in problem-solving, and effective use of Laravel and MySQL.
