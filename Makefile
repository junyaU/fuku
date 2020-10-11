ps:
	cd laradock; docker-compose ps

login:
	cd laradock; docker-compose exec workspace bash

start:
	cd laradock; docker-compose up -d mysql redis nginx

stop:
	cd laradock; docker-compose down
