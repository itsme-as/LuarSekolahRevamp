# Project Plan Luarsekolah.com

## Project Overview

- FrontEnd: HTML, TailwindCSS, JS
- Server: Vercel Serverless
- Database: Postgres Supabase
- Bahasa: PHP
- Framework: Laravel
- Version Control: Git

## Database Architecture

- Table: users
  - id
  - name
  - email
  - phone
  - password
  - classRole
  - created_at
  - updated_at

- Table: banners
  - id
  - image
  - link
  - created_at
  - updated_at

- Table: programs
  - id
  - name
  - description
  - image
  - link
  - created_at
  - updated_at

- Table: categories
  - id
  - name
  - created_at
  - updated_a

- Table: tags
  - id
  - name
  - created_at
  - updated_at

- Table: classes
  - id
  - name
  - description
  - image
  - slug
  - total_rating
  - price
  - category_id
  - mentor_id
  - tag_id

- Table: blogs
  - id
  - title
  - content
  - image
  - slug
  - tag_id
  - author_id
  - created_at
  - updated_at

- Table: partnerships
  - id
  - name
  - image
  - created_at
  - updated_at

## Steps

1. Running this command to initiate laravel project
   ```bash
   composer create-project laravel/laravel .
   ```

2. Installing breeze library
   ```bash
   composer require laravel/breeze --dev
   php artisan breeze:install
   ```

3. Setup supabase connection: https://supabase.com/docs/guides/getting-started/quickstarts/laravel

4. Create migrations

5. Setup deployment: https://rezamandala.medium.com/how-to-deploy-laravel-project-to-vercel-7b3c2800e974