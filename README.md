# Pixel Positions

Pixel Positions is a modern job board tailored for creative and product-focused teams. It highlights the most exciting roles, gives employers a polished way to publish new openings, and delivers a clean experience for candidates who want to explore, search, and filter listings.

## Table of Contents
- [Overview](#overview)
- [Feature Highlights](#feature-highlights)
- [Tech Stack](#tech-stack)
- [Getting Started](#getting-started)
  - [Requirements](#requirements)
  - [Installation](#installation)
  - [Run the App](#run-the-app)
  - [Database Seeding](#database-seeding)
  - [Running Tests](#running-tests)
- [Project Structure](#project-structure)
- [Development Notes](#development-notes)
- [Contributing](#contributing)
- [License](#license)

## Overview
Pixel Positions packages the full job-board workflow:
- Employers register, upload their brand assets, and post openings directly from the dashboard.
- Candidates can browse featured postings, dig into the latest roles, or power-search by title.
- Tags, reusable Blade components, and Tailwind 4 utilities keep the UI fast and consistent.

## Feature Highlights
- **Curated feed** – Separate featured vs. fresh listings with tailored card layouts.
- **Smart search** – Live query filtering hits titles and returns matching roles instantly.
- **Tag navigation** – Each job is wired to tags so talent can tunnel into specialties in a click.
- **Employer portal** – Registration pairs user accounts with employer profiles, logo uploads, and new job creation.
- **Reusable design system** – Blade components for forms, typography, and cards make it easy to extend the interface without duplicating markup.

## Tech Stack
- **Framework**: Laravel 12 (PHP 8.2)
- **Frontend**: Tailwind CSS 4, Vite, vanilla JavaScript
- **Database**: MySQL, PostgreSQL, or SQLite (via Eloquent ORM)
- **Tooling**: Composer, NPM, Pest/PHPUnit for automated tests

## Getting Started
### Requirements
- PHP 8.2+
- Composer 2.5+
- Node.js 20+ and npm
- A database connection (MySQL/PostgreSQL) or SQLite file
- Git, if you are cloning from a repository

### Installation
1. Clone the repository and enter the project directory.
2. Install PHP dependencies:

        composer install

3. Install frontend dependencies:

        npm install

4. Copy the example environment file and generate an application key:

        cp .env.example .env
        php artisan key:generate

5. Update the .env file to reflect your database, mail, and storage configuration.
6. Create the storage symlink so employer logos are publicly accessible:

        php artisan storage:link

7. Run the migrations (add '--seed' to preload demo content):

        php artisan migrate
        # php artisan migrate --seed

### Run the App
- Start the Laravel backend:

        php artisan serve

- In a separate terminal, compile assets and watch for changes:

        npm run dev

- Alternatively, use the all-in-one script for local development:

        composer run dev

### Database Seeding
Seeder classes live in database/seeders and populate employers, tags, and jobs. After configuring your database, run:

        php artisan migrate --seed

This creates sample companies, logos, and 20 jobs wired to reusable tags so you can explore the UI immediately.

### Running Tests
Unit and feature tests are executed with Pest/PHPUnit:

        php artisan test

Feel free to add coverage around new controllers, requests, or Blade components as the app grows.

## Project Structure
- app/Models – Eloquent models for users, employers, jobs, and tags.
- app/Http/Controllers – Authentication, job management, and search endpoints.
- resources/views – Blade templates and components that make up the interface.
- resources/css & resources/js – Tailwind 4 theme configuration and Vite entry points.
- database/migrations – Schema definitions for employers, jobs, tags, and pivot tables.
- database/factories – Factories for seeding and testing data.

## Development Notes
- Employer logos upload to storage/app/public/logos; run php artisan storage:link to expose them at /storage/logos.
- Featured jobs render in a three-column grid with a compact card component; recent jobs use a wide card optimized for descriptions.
- Search results and tag pages reuse the same result layout for a consistent browsing experience.
- Tailwind utilities are extended in tailwind.config.js to match the Pixel Positions visual language.

## Contributing
Fork the repository, create a feature branch, and open a pull request. Please document UI changes with screenshots and include tests when adding backend behavior.
