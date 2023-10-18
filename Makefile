APP ?= docker

run:
	clear
	${APP}-compose -f ./${APP}/compose.yml up
	${APP} ps

rund:
	clear
	${APP}-compose -f ./${APP}/compose.yml up -d
	${APP} ps

run-build:
	clear
	${APP}-compose -f ./${APP}/compose.yml up --build
	${APP} ps

rund-build:
	clear
	${APP}-compose -f ./${APP}/compose.yml up -d --build
	${APP} ps

pull:
	clear
	${APP}-compose -f ./${APP}/compose.yml pull
	${APP} ps

start:
	clear
	${APP}-compose -f ./${APP}/compose.yml start
	${APP} ps

stop:
	clear
	${APP}-compose -f ./${APP}/compose.yml stop
	${APP} ps

clean:
	clear
	${APP}-compose -f ./${APP}/compose.yml down --remove-orphans
	${APP} ps

list:
	clear
	${APP} ps

list-all:
	clear
	${APP} ps -a
