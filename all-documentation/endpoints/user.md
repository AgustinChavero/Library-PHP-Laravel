# Users endpoints

## Create

-   Everyone can create a user

        http://127.0.0.1:8000/api/user/create

-   To create a user you need to send by body:

    -   Name, it has to be a string

        -   "name": "example"

    -   Email, it has to be a string

        -   "email": "example@email.com"

    -   Name, it has to be a string

        -   "password": "12345678"

-   Body should be to be like that

```
{
    "name": "example",
    "email": "example@email.com",
    "password": "12345678"
}
```

## Update

-   Only an loged Admin you can update a user

        http://127.0.0.1:8000/api/user/edit/:id

-   To update a user you need to send by params:

    -   ID from user to update

            http://127.0.0.1:8000/api/user/edit/6e31793e-479f-4ad9-85e3-e4c3738d3fc5

-   To update a user you need to send by headers:

    -   Authorization

            Bearer 1|kHLH6JDjycTzkAFTroCgZylOeTI9o4kFIz9Ahj3p0a1a15bf

-   To update a user you need to send by body:

    -   Admin, it has to be a UUID

        -   "admin": "d7c78abd-e8f5-4ddc-9b3a-7b211145a5b8"

    -   Name, it has to be a string

        -   "name": "example"

    -   Email, it has to be a string

        -   "email": "example@email.com"

    -   Name, it has to be a string

        -   "password": "12345678"

-   Body should be to be like that

```
{
    "admin": "d7c78abd-e8f5-4ddc-9b3a-7b211145a5b8",
    "name": "newexample",
    "email": "newexample@email.com",
    "password": "12345678"
}
```

## GetAll

-   Only an loged person can see all users

        http://127.0.0.1:8000/api/user/

-   To see all users you need to send by headers:

    -   Authorization

            Bearer 1|kHLH6JDjycTzkAFTroCgZylOeTI9o4kFIz9Ahj3p0a1a15bf

## GetOne

-   Everyone can see one specific user

        http://127.0.0.1:8000/api/user/detail/:id

-   To update a user you need to send by params:

    -   ID from user to get

            http://127.0.0.1:8000/api/user/detail/6e31793e-479f-4ad9-85e3-e4c3738d3fc5

## Delete

-   Only an loged Admin you can delete a user

        http://127.0.0.1:8000/api/user/delete/:id

-   To delete a user you need to send by params:

    -   ID from user to delete

            http://127.0.0.1:8000/api/user/delete/6e31793e-479f-4ad9-85e3-e4c3738d3fc5

-   To delete a user you need to send by headers:

    -   Authorization

            Bearer 1|kHLH6JDjycTzkAFTroCgZylOeTI9o4kFIz9Ahj3p0a1a15bf

-   To delete a user you need to send by body:

    -   UserId, it has to be a UUID

        -   "user_id": "d7c78abd-e8f5-4ddc-9b3a-7b211145a5b8"

-   Body should be to be like that

```
{
    "user_id": "d7c78abd-e8f5-4ddc-9b3a-7b211145a5b8"
}
```
