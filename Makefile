start: ##@start
	@docker-compose up -d
	@php bin/console server:run
.PHONY: start