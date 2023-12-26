# Laravel Api Authentication

## System Requirements

- PHP 8.1
- Composer
- Docker
- Docker Compose

## Installation

```bash
# Install dependencies
composer install

# Prepare app
cp .env.example .env

# Start container (sail up -d)
./vendor/bin/sail up -d

# Run migration and seeder
./vendor/bin/sail artisan migrate:fresh --seeder="DatabaseSeeder"
```
