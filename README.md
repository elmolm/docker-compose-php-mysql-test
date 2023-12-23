# PHP8 MySQL Development Docker Compose Example

This project provides a Docker Compose example for setting up a PHP 8 and MySQL development environment. It includes a sample MySQL database dump (`dump.sql`) to help you get started quickly. The platform targeted is `linux/amd64`.

## Prerequisites

Make sure you have Docker and Docker Compose installed on your machine before getting started.

- [Docker Installation Guide](https://docs.docker.com/get-docker/)
- [Docker Compose Installation Guide](https://docs.docker.com/compose/install/)

## Usage

### Start the Environment

To start the development environment, run the following command:

```bash
docker compose up -d
```
This command will build the necessary images and start the containers in detached mode.

### Stop the Environment

To stop the environment, use the following command:

```bash
docker compose down
```

### Stop and Remove Volumes

If you want to stop the environment and delete all volumes, use the following command:

```bash
docker compose down -v
```
This will stop the containers and remove all associated volumes, ensuring a clean shutdown.

## Database
The environment includes a MySQL database with a sample dump file (dump.sql). You can customize this file with your own database schema and data.

## Configuration
Feel free to modify the `docker-compose.yml` file to suit your specific project requirements. Adjust environment variables, ports, or volumes as needed.

## Contributing
If you encounter any issues or have suggestions for improvements, feel free to open an issue or submit a pull request.

Happy coding!