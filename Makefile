PROJECT_NAME=api

.PHONY: build

build: ## Build a dockerimage
	docker compose up -d 