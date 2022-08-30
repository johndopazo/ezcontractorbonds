import_db:
	@docker-compose cp dopazoin_ezjanitorialbond.sql mysql:/db.sql
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
	@ssh -p 7822 dopazoin@185.132.5.141 tar czvf /home/dopazoin/ezjanitorialbond.tar.gz /home/dopazoin/ezjanitorialbond.com
	@scp -P 7822 dopazoin@185.132.5.141:/home/dopazoin/ezjanitorialbond.tar.gz .
	@tar xvf ezjanitorialbond.tar.gz
	@cp -rf home/dopazoin/ezjanitorialbond.com/* .
	@rm -rf home
	@rm ezjanitorialbond.tar.gz
	# Done downloading entire site.
