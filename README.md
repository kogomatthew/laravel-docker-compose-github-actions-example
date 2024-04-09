# Laravel Docker Compose GitHub Actions Example

This repository serves as an example of setting up a Laravel project with Docker Compose for local development and utilizing GitHub Actions for Continuous Integration (CI).

## Requirements

- Docker
- Docker Compose
- GitHub account (for GitHub Actions)

## Local Development Setup

1. Clone this repository:

    ```bash
    git clone https://github.com/kogomatthew/laravel-docker-compose-github-actions-example.git
    ```

2. Navigate to the project directory:

    ```bash
    cd laravel-docker-compose-github-actions-example
    ```

3. Create a `.env` file by copying the example file:

    ```bash
    cp .env.example .env
    ```

4. Run Docker Compose to build and start the containers:

    ```bash
    docker-compose up -d --build
    ```

5. Install Composer dependencies:

    ```bash
    docker-compose exec app composer install
    ```

6. Generate application key:

    ```bash
    docker-compose exec app php artisan key:generate
    ```

7. Migrate the database:

    ```bash
    docker-compose exec app php artisan migrate
    ```

8. Visit `http://localhost` in your browser to see the Laravel welcome page.

## GitHub Actions

This repository is configured with GitHub Actions workflows for Continuous Integration (CI). The workflows are defined in the `.github/workflows` directory. When you push changes to your repository, these workflows will automatically run to check for errors and ensure code quality.

## Contributing

Contributions are welcome! Feel free to open issues or pull requests.

## License

This project is open-source and available under the [MIT License](LICENSE).
