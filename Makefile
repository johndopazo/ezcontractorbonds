import_db:
	@docker-compose cp dopazoin_ezcontractorbonds.sql mysql:/db.sql
	@docker-compose exec mysql bash -c "mysql -proot dopazo < /db.sql"

mysql:
	@docker-compose exec mysql mysql -proot

run: 
	@-docker-compose down
	@docker-compose up -d
	@echo "Running on http://localhost:8081. May take a minute for DB to load."

php-logs:
	@docker-compose exec web cat /var/log/php-errors.log

ssh:
	@ssh -p 7822 dopazoin@185.132.5.141 

download:
	# Downloading site locally.
	@ssh -p 7822 dopazoin@185.132.5.141 tar czvf /home/dopazoin/ezcontractorbonds.tar.gz /home/dopazoin/ezcontractorbonds.com
	@scp -P 7822 dopazoin@185.132.5.141:/home/dopazoin/ezcontractorbonds.tar.gz .
	@tar xvf ezcontractorbonds.tar.gz
	@cp -rf home/dopazoin/ezcontractorbonds.com/* .
	@rm -rf home
	@rm ezcontractorbonds.tar.gz
	# Done downloading entire site.
