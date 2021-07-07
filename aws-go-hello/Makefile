.PHONY: build clean deploy

build:
	env GOARCH=amd64 GOOS=linux go build -ldflags="-s -w" -o bin/hello hello/main.go
	env GOARCH=amd64 GOOS=linux go build -ldflags="-s -w" -o bin/world world/main.go

build-hello:
	cd hello && GOOS=linux go build -ldflags="-s -w" -o ../bin/hello main.go

deploy-hello:build-hello
	sls deploy --verbose

clean:
	rm -rf ./bin

deploy: clean build
	sls deploy --verbose
