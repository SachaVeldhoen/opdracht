# Blog Posting API Aareon

This is a simple API for posting blog entries to Aareon. It allows you to create, read, update, and delete blog posts.

## Features
- Create new blog posts
- Read existing blog posts
- Update existing blog posts
- Delete blog posts
- List all blog posts
- Search blog posts by id

## Security to do features:
- **Use Laravel Sanctum for API authentication**  
    _Laravel Sanctum makes it easy to protect routes with tokens. It's simple and works well for this simple API._

- **Limit API request rate** <br>
_To prevent abuse (like spamming or brute-force attacks), I'd use Laravel’s built-in rate limiting. You can easily set limits per route or user._

- **Require HTTPS**  
  _All API traffic should go over HTTPS. This keeps the data safe during transport and avoids man-in-the-middle attacks._

- **Validate all incoming data**  
  _Every request would be validated using Laravel's validation rules. This helps keep the app clean and secure._

- **Encrypt sensitive data (optional)**  
  _Passwords would be hashed, and personal info can be encrypted using Laravel’s built-in encryption tools._


## Installation Steps
1. Clone the repository:
    ```bash
    git clone git@github.com:SachaVeldhoen/opdracht.git opdracht
    ```

2. Navigate into the project directory:
    ```bash
    cd opdracht
    ```

3. Install PHP dependencies:
    ```bash
    composer install
    ```

4. Copy the `.env.example` file and rename it to `.env`:
    ```bash
    cp .env.example .env
    ```

5. Generate application key (if not already set in `.env`):
    ```bash
    php artisan key:generate
    ```

   (Make sure to set the database connection and settle all the fields in your `.env` file, such as `DB_CONNECTION`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD`)


6. Run database migrations:
    ```bash
    php artisan migrate
    ```

7. Start the development server:
    ```bash
    php artisan serve
    ```
   
Server will be running at `http://localhost:8000`.
