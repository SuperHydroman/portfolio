# Gideon van den Herik

**Full-Stack Developer & DevOps Engineer**

This is my personal portfolio. I use it to share my projects and what I'm working on.

[Website](https://gideonvandenherik.nl) · [GitHub](https://github.com/SuperHydroMan) · [LinkedIn](https://www.linkedin.com/in/gideon-van-den-herik/)

## The portfolio

A single-page site with a dark theme and cyan accents. It currently features three of my GitHub projects: a Lua platformer, a JavaScript fighting game, and a top-down shooter.

I'm building this myself to get more familiar with Vue, Inertia, and TypeScript. It's still a work in progress.

**Built so far:** introduction, section navigation, and project cards with technology tags and repository links.

**Up next:** background and experience, and a contact section.

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

PHP must be available in your terminal, including when building the frontend: the existing Wayfinder plugin calls Artisan during the build.

## Useful commands

```sh
npm run build          # Build production assets
npm run check          # Check frontend formatting and linting
npm run types:check    # Check TypeScript and Vue types
composer test          # Run PHP formatting checks, static analysis, and tests
```

## Where things live

- `resources/js/pages/Home.vue`: puts the homepage together
- `resources/js/components/SiteNavigation.vue`: section navigation
- `resources/js/components/sections/`: introduction and project sections
- `resources/js/lib/utils.ts`: shared helpers
- `resources/css/app.css`: stylesheet entry point
- `routes/web.php`: homepage route

## Hosting

The site uses the existing GitHub-to-Plesk deployment setup. The Laravel project is deployed to `httpdocs`, with the web root pointing to `httpdocs/public`.

## Contact

You can reach me on LinkedIn or find more of my projects on GitHub.

[GitHub](https://github.com/SuperHydroMan) · [LinkedIn](https://www.linkedin.com/in/gideon-van-den-herik/)
