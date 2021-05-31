#!/usr/bin/make


up:
	./vendor/bin/sail up -d

down:
	./vendor/bin/sail down

root-shell:
	./vendor/bin/sail root-shell

shell:
	./vendor/bin/sail shell

sail:
	alias sail='bash vendor/bin/sail'




