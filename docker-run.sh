#!/bin/sh

docker rm dev-laurie.besinet.net

docker run -it -d -p 80:80 -p 443:443 --name dev-laurie.besinet.net laurie.besinet.net:latest
