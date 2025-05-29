-- Connect to PostgreSQL and run
CREATE TABLE students (
    id SERIAL PRIMARY KEY,
    name VARCHAR(100),
    grade VARCHAR(50),
    created_at TIMESTAMP DEFAULT NOW()
);

CREATE TABLE contacts (
    id SERIAL PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    message TEXT,
    created_at TIMESTAMP DEFAULT NOW()
);


psql -h database-1.cwdkc2q88d2r.us-east-1.rds.amazonaws.com -U postgres -d dynamic1 -p 5432

sudo yum update -y
sudo yum install -y docker
sudo systemctl start docker
sudo systemctl enable docker
sudo usermod -aG docker $USER


mkdir php-rds-site
cd php-rds-site


Create Dockerfile
Dockerfile
Copy
Edit
# Dockerfile

# Base image with Apache and PHP 8
FROM php:8.2-apache

# Install PostgreSQL extension for PHP
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pgsql pdo_pgsql

# Copy custom PHP files into container
COPY . /var/www/html

mkdir src
src/index.php

docker-compose.yml

version: '3.8'

services:
  web:
    build: .
    ports:
      - "8080:80"
    restart: always



php-rds-site/
├── Dockerfile
├── docker-compose.yml
└── src/
    └── index.php
------------------------------------------------------------------------

DOCKER_CONFIG=${DOCKER_CONFIG:-$HOME/.docker}
mkdir -p $DOCKER_CONFIG/cli-plugins

curl -SL https://github.com/docker/compose/releases/download/v2.27.0/docker-compose-linux-x86_64 \
    -o $DOCKER_CONFIG/cli-plugins/docker-compose

chmod +x $DOCKER_CONFIG/cli-plugins/docker-compose
---------------------------------------------------------------------------

docker compose version

docker compose up --build -d
sudo dnf install -y https://download.postgresql.org/pub/repos/yum/reporpms/EL-9-x86_64/pgdg-redhat-repo-latest.noarch.rpm

sudo dnf -qy module disable postgresql

sudo dnf install -y postgresql16

psql --version



psql -h database-1.cwdkc2q88d2r.us-east-1.rds.amazonaws.com -U postgres -d dynamic_website5 -p 5432

