# Books endpoints

## Create

-   Only logged in users will be able to create books

        http://127.0.0.1:8000/api/book/create

-   To create a book you need to send by body:

    -   Title, it has to be a string

        -   "title": "example"

    -   Author, it has to be you ID, a UUID

        -   "author": "d7c78abd-e8f5-4ddc-9b3a-7b211145a5b8"

    -   Preview, it has to be a string

        -   "preview": "It's never too late"

    -   Edition, it has to be a string

        -   "edition": "1"

    -   Publication Year, it has to be a string

        -   "publication_year": "12-01-2024"

-   Body should be to be like that

```
{
    "title": "New history",
    "author": "d7c78abd-e8f5-4ddc-9b3a-7b211145a5b8",
    "preview": "It's never too late",
    "edition": "1",
    "publication_year": "12-01-2024"
}
```

## Update

-   Only the user who created the book will be able to edit it

        http://127.0.0.1:8000/api/book/edit/:id

-   To update a book you need to send by params:

    -   ID from book to update

            http://127.0.0.1:8000/api/book/edit/bda12f2b-774b-480c-bc52-7c85d0022961

-   To create a book you need to send by body:

    -   User ID, it has to be a string

        -   "user_id": "d7c78abd-e8f5-4ddc-9b3a-7b211145a5b8"

    -   Title, it has to be a string

        -   "title": "New History"

    -   Author, it has to be you ID, a UUID

        -   "author": "d7c78abd-e8f5-4ddc-9b3a-7b211145a5b8"

    -   Preview, it has to be a string

        -   "preview": "Its never too late"

    -   Edition, it has to be a string

        -   "edition": "1"

    -   Publication Year, it has to be a string

        -   "publication_year": "12-01-2024"

-   Body should be to be like that

```
{
    "user_id": "d7c78abd-e8f5-4ddc-9b3a-7b211145a5b8",
    "title": "New History",
    "author": "d7c78abd-e8f5-4ddc-9b3a-7b211145a5b8",
    "preview": "Its never too late",
    "edition": "1",
    "publication_year": "12-01-2024"
}
```

## GetAll

-   Everyone can see all book

        http://127.0.0.1:8000/api/book

-   You can filter them by author, title, and year of publication

        http://127.0.0.1:8000/api/book?title=New history

## GetOne

-   Everyone can see one specific book

        http://127.0.0.1:8000/api/book/detail/:id

-   To see a book you need to send by params:

    -   ID from book to get

            http://127.0.0.1:8000/api/book/detail/bda12f2b-774b-480c-bc52-7c85d0022961

## Delete

-   Only the author (creator of this book), being logged in, can delete the book

        http://127.0.0.1:8000/api/book/delete/:id

-   To delete a book you need to send by params:

    -   ID from user to delete

            http://127.0.0.1:8000/api/book/delete/bda12f2b-774b-480c-bc52-7c85d0022961

-   To delete a book you need to send by body:

    -   UserId, it has to be a UUID

        -   "user_id": "d7c78abd-e8f5-4ddc-9b3a-7b211145a5b8"

-   Body should be to be like that

```
{
    "user_id": "d7c78abd-e8f5-4ddc-9b3a-7b211145a5b8"
}
```
