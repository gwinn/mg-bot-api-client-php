ROOT_DIR=$(shell dirname $(realpath $(lastword $(MAKEFILE_LIST))))
SRC_DIR=$(ROOT_DIR)/src
BIN_DIR=$(ROOT_DIR)/bin
export PATH := $(PATH):$(ROOT_DIR)/dot

deps:
	@echo "==> Installing dependencies"
	@curl -L https://getcomposer.org/composer.phar -o $(BIN_DIR)/composer
	@COMPOSER_HOME=/tmp php -d memory_limit=-1 $(BIN_DIR)/composer install

test:
	@echo "==> Running tests"
	@cd $(ROOT_DIR)
ifeq ($(wildcard .env), )
	@echo "==> Creating .env file for testing purposes..."
	@cp .env.dist .env
endif
	@php -d memory_limit=-1 $(BIN_DIR)/phpunit -c phpunit.xml.dist --log-junit $(ROOT_DIR)/test-report.xml
	@echo "==> Testing  complete"

stan:
	@echo "==> Running analysis"
	@php $(BIN_DIR)/phpstan analyse -l 4 -c $(ROOT_DIR)/phpstan.neon $(SRC_DIR)
	@echo "==> Analysis complete"

travis: test stan
	@echo "==> Completed"