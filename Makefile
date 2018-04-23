main:
	@echo "Run \"make install\" to install"
install:
	@echo "Installing hashr"
	cp hash.php /usr/local/bin/hashr
	chmod +x /usr/local/bin/hashr
	@echo "Run hashr with type \"$ hashr\""
