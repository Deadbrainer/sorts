install:
	sudo apt install nginx && sudo apt install docker && sudo apt install docker-ce docker-ce-cli containerd.io && sudo apt install docker-compose

start:
	sudo docker-compose up -d

stop:
	sudo docker-compose down