## Requirements
- docker-compose

## Running application
```bash
make up
```
##### Application will be running on 127.0.0.1:8000

## create db folder
```bash
mkdir mariadb
```

## Populate database
```bash
make migrate
```

## Run Test suite
```bash
make test
```
