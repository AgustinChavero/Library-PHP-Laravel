# Auth endpoints

## Login

-   Everyone can log in

        http://127.0.0.1:8000/api/auth/login

-   To login you need to send by body:

    -   Email, it has to be a string

        -   "email": "example@example.com"

    -   Password, it has to be a string

        -   "password": "admin"

-   Body should be to be like that

```
{
    "email": "admin@admin.com",
    "password": "admin"
}
```

## Logout

-   Everyone can log out

        http://127.0.0.1:8000/api/auth/logout

-   To logout you need to send by body:

    -   UserId (you id), it has to be a string

        -   "user_id": "ad5eaf22-08bb-4b4e-aef4-54487f57765f"

-   Body should be to be like that

```
{
    "user_id": "ad5eaf22-08bb-4b4e-aef4-54487f57765f"
}
```
