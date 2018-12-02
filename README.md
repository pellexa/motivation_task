# Dev environment (Docker)

### Structure:
 - contaners - Contains a Dockerfile with config.
 - database - Here is the workplace for DB.
 - logs - For logs.
 - task-code - Contains application code.

```bash

.
├── containers
│   ├── fpm
│   │   ├── conf
│   │   │   └── README
│   │   └── Dockerfile
│   ├── nginx
│   │   ├── conf
│   │   │   └── nginx.conf
│   │   └── Dockerfile
│   └── postgres
│       ├── conf
│       │   └── README
│       ├── Dockerfile
│       └── initdb.sh
├── database
│   └── postgres
├── docker-compose.yml
├── logs
│   ├── nginx_access.log
│   └── nginx_error.log
├── task-code
│   ├── ...
│
└── README.md (this README)

```


### For running application execute:

```bash
git clone https://github.com/pellexa/motivation_task.git folderName
cd folderName
docker-compose up
```
http://localhost:82/welcome/

File with queries: task-code/query.sql
