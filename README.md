# Laravel API Application

## Description

This Laravel application enables API users to access designated endpoints using token-based authentication, where each user's unique token is sent as a Bearer token in the request header. The application authenticates users through these tokens, ensuring secure and personalized access to its API functionalities.

## Features

- Token-based API authentication.
- Endpoints accessible only by authenticated Api Users.
- Comprehensive feature tests ensuring reliability and security.

## Installation

### Prerequisites

- PHP >= 8.1
- Composer
- Docker
- Docker Compose

### Steps

1. **Clone the Repository**

2. **Install Dependencies**

```bash
composer install
```

3. **Environment Setup**

   Copy the `.env.example` file to create a `.env` file and modify it according to your environment settings.
```bash
cp .env.example .env
```

4. **Start container**

```bash
./vendor/bin/sail up -d
```

5. **Run Migrations & Seeders**

```bash
./vendor/bin/sail artisan migrate:fresh --seed
```

### Testing

To run the tests, use the following command:
```bash
./vendor/bin/sail artisan test
```

### API Endpoints

GET `http://localhost/api/` - returns details of the authenticated ApiUser. 

Here's a curl example how to make a request to the endpoint:
```bash
curl -X GET \
     -H "Accept: application/json" \
     -H "Content-Type: application/json" \
     -H "Authorization: Bearer YOUR_API_TOKEN" \
     http://localhost/api/
```
