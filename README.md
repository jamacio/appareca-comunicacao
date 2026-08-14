# Appareça Comunicação Estratégica

Institutional website for **Appareça Comunicação Estratégica**, an agency that combines strategy, content and communication to strengthen brands' digital presence.

## Stack

- **PHP 8.5** (Apache) via Docker
- **HTML/CSS/JS** (static assets in `src/assets`)
- **Docker Compose** for the local environment
- **Makefile** with shortcuts for the Docker commands

## Structure

```
├── docker/
│   └── apache.conf          # Apache configuration
├── docker-compose.yml       # PHP + Apache service
├── Makefile                 # Command shortcuts
└── src/
    ├── index.php            # Homepage
    ├── appareca.php         # About page
    ├── solucoes.php         # Solutions page
    ├── casos.php            # Case studies page
    ├── contato.php          # Contact page
    ├── handlers/            # Form logic
    ├── partials/            # Header, footer and base
    ├── assets/              # CSS and JS
    └── images/              # Site images
```

## How to run

The environment is containerized. The site is available at `http://localhost:5001`.

### Start the environment

```bash
docker compose -f docker-compose.yml up -d --remove-orphans
```

Equivalent via Makefile:

```bash
make up
```

### Run in interactive mode (logs)

```bash
docker compose -f docker-compose.yml up --remove-orphans
```

Equivalent via Makefile:

```bash
make watch
```

### Stop the containers

```bash
docker compose -f docker-compose.yml stop
```

Equivalent via Makefile:

```bash
make stop
```

### Tear down the environment and remove volumes

```bash
docker compose -f docker-compose.yml down -v
```

Equivalent via Makefile:

```bash
make down
```

### Full cleanup (networks, containers and images)

```bash
docker network prune
docker rm -vf $(docker ps -a -q)
docker rmi -f $(docker images -a -q)
```

Equivalent via Makefile:

```bash
make docker-clean
```
