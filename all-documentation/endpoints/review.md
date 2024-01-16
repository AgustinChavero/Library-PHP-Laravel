# Reviews endpoints

## Create

-   Only logged in users will be able to create reviews

        http://127.0.0.1:8000/api/review/create

-   To create a review you need to send by headers:

    -   Authorization

            Bearer 1|kHLH6JDjycTzkAFTroCgZylOeTI9o4kFIz9Ahj3p0a1a15bf

-   To create a review you need to send by body:

    -   Review Text, it has to be a string

        -   "review_text": "Wonderfull"

    -   Rating, it has to be a number (min 1, max 5)

        -   "rating": 5

    -   User ID, it has to be a string

        -   "user_id": "d7c78abd-e8f5-4ddc-9b3a-7b211145a5b8"

    -   Book ID, it has to be a UUID

        -   "book_id": "d7c78abd-e8f5-4ddc-9b3a-7b211145a5b8"

-   Body should be to be like that

```
{
    "review_text": "Wonderfull",
    "rating": 5,
    "user_id": "d7c78abd-e8f5-4ddc-9b3a-7b211145a5b8",
    "book_id": "773eff12-2890-4a75-abbc-074cc9a0f799"
}
```

## Update

-   Only logged in users will be able to update reviews

        http://127.0.0.1:8000/api/review/edit/:id

-   To update a review you need to send by headers:

    -   Authorization

            Bearer 1|kHLH6JDjycTzkAFTroCgZylOeTI9o4kFIz9Ahj3p0a1a15bf

-   To update a review you need to send by params:

    -   ID from review to update

            http://127.0.0.1:8000/api/review/edit/bda12f2b-774b-480c-bc52-7c85d0022961

-   To update a review you need to send by body:

    -   Review Text, it has to be a string

        -   "review_text": "Very good"

    -   Rating, it has to be a number (min 1, max 5)

        -   "rating": 5

    -   User ID, it has to be a string

        -   "user_id": "d7c78abd-e8f5-4ddc-9b3a-7b211145a5b8"

    -   Book ID, it has to be a UUID

        -   "book_id": "d7c78abd-e8f5-4ddc-9b3a-7b211145a5b8"

-   Body should be to be like that

```
{
    "review_text": "Very good",
    "rating": 5,
    "user_id": "d7c78abd-e8f5-4ddc-9b3a-7b211145a5b8",
    "book_id": "773eff12-2890-4a75-abbc-074cc9a0f799"
}
```

## GetAll

-   Everyone can see all reviews

        http://127.0.0.1:8000/api/review

-   You can filter them by book_id

        http://127.0.0.1:8000/api/review?book_id=773eff12-2890-4a75-abbc-074cc9a0f799

## GetOne

-   Everyone can see one specific review

        http://127.0.0.1:8000/api/review/detail/:id

-   To see a review you need to send by params:

    -   ID from review to get

            http://127.0.0.1:8000/api/review/detail/bda12f2b-774b-480c-bc52-7c85d0022961

## Delete

-   Only the logged author, being logged in, can delete the review

        http://127.0.0.1:8000/api/review/delete/:id

-   To create a review you need to send by headers:

    -   Authorization

            Bearer 1|kHLH6JDjycTzkAFTroCgZylOeTI9o4kFIz9Ahj3p0a1a15bf

-   To delete a review you need to send by params:

    -   ID from review to delete

            http://127.0.0.1:8000/api/review/delete/bda12f2b-774b-480c-bc52-7c85d0022961

-   To delete a review you need to send by body:

    -   UserId, it has to be a UUID

        -   "user_id": "d7c78abd-e8f5-4ddc-9b3a-7b211145a5b8"

-   Body should be to be like that

```
{
    "user_id": "d7c78abd-e8f5-4ddc-9b3a-7b211145a5b8"
}
```
