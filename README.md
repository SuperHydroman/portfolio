# Gideon van den Herik

**Full-Stack Developer & DevOps Engineer**

This is my personal portfolio. I use it to share my projects and what I'm working on.

[Website](https://gideonvandenherik.nl) · [GitHub](https://github.com/SuperHydroMan) · [LinkedIn](https://www.linkedin.com/in/gideon-van-den-herik/)

## The portfolio

A single-page site with light and dark themes and cyan accents. It features four of my GitHub projects: a Lua platformer, a JavaScript fighting game, a top-down shooter, and a console-based RPG battle game.

I'm building this myself to get more familiar with Vue, Inertia, and TypeScript. It's still a work in progress.

The site includes an introduction, section navigation, project cards with technology tags and repository links, an experience timeline, and a contact form with validation and rate limiting.

## Stack

- Laravel 13 and PHP 8.4+
- Vue 3 with TypeScript
- Inertia 3
- Tailwind CSS 4
- Vite 8 through Vite Plus

Laravel serves the homepage through Inertia, and Vue handles its components. Navigation stays on the page using section anchors. Project details live in the Vue component for now; there is no GitHub API dependency.

## Running locally

You'll need PHP 8.4+, Composer 2, and Node.js 22.12+ with npm. The default database is SQLite, so PHP needs SQLite support enabled.

Clone the repository:

```sh
git clone https://github.com/SuperHydroMan/Portfolio.git
cd Portfolio
```

For a fresh local checkout:

```sh
composer run setup
composer run dev
```

The setup script installs dependencies, creates `.env` if it's missing, generates an application key, runs migrations, and builds the frontend. Use it for initial setup; it generates a new key each time it runs.

The development command starts Laravel, Vite, and the queue listener. Open [localhost:8000](http://localhost:8000).

PHP must be available in your terminal, including when building the frontend: the Wayfinder plugin calls Artisan during the build.

## Useful commands

```sh
composer ci:check      # Run all formatting, linting, type checks, and tests

npm run check         # Check frontend formatting and linting
npm run check:fix     # Apply frontend formatting and lint fixes
npm run types:check   # Check Vue and TypeScript types

composer lint         # Format PHP code
composer lint:check   # Check PHP formatting
composer types:check  # Run PHP static analysis
composer test         # Run PHP formatting checks, static analysis, and tests
php artisan test      # Run tests only

npm run build         # Build production assets
npm run build:ssr     # Build client and SSR assets
```

GitHub Actions runs the build and CI checks on pushes to `main` and pull requests.

Contact-form tests cover validation, email content, mail failures, and rate limiting without sending real emails.

## Contact

You can reach me on LinkedIn or find more of my projects on GitHub.

[GitHub](https://github.com/SuperHydroMan) · [LinkedIn](https://www.linkedin.com/in/gideon-van-den-herik/)
