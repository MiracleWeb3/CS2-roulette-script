<?php

add_installer('opencase', 'opencase_steamauth_install');
add_uninstaller('opencase', 'opencase_steamauth_uninstall');

function opencase_steamauth_install() {
	add_setval('steamauth_loginDomen', '', 'Домен для логина на сайт', 'text');
	add_setval('steamauth_apiKey', '', 'Ключ Steam Web Api для логина на сайте', 'text');
}

function opencase_steamauth_uninstall() {
	delete_setval('steamauth_loginDomen');
	delete_setval('steamauth_apiKey');
}
