<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Default Remote Connection Name
	|--------------------------------------------------------------------------
	|
	| Here you may specify the default connection that will be used for SSH
	| operations. This name should correspond to a connection name below
	| in the server list. Each connection will be manually accessible.
	|
	*/

	'default' => 'production',

	/*
	|--------------------------------------------------------------------------
	| Remote Server Connections
	|--------------------------------------------------------------------------
	|
	| These are the servers that will be accessible via the SSH task runner
	| facilities of Laravel. This feature radically simplifies executing
	| tasks on your servers, such as deploying out these applications.
	|
	*/

	'connections' => array(

		'production' => array(
			'host'      => 'vitly-valery.com',
			'username'  => 'vitalyva',
			'password'  => 'kasvumaja2013',
			'key'       => 'PuTTY-User-Key-File-2: ssh-dssEncryption: aes256-cbcComment: imported-openssh-keyPublic-Lines: 10AAAAB3NzaC1kc3MAAACBAIfl+eWB1Qf2A2Y5WNuGxTogLj6znLx9gvJJAiAecMBRNzgjDZmU/Fv3wjWzcY7htKpC/x4B9Pt80xFle45LcjS+HC7OQMfjodXZX8hOcf/MmFcRsEs5E7mLIdcT8onsRDYo/eSR2jEM+NfVU2gXRZIecqC2FjnwMmfJ9QgB3rV7AAAAFQC06CHCWbwPBx/AeDKuASHmQZ9quQAAAIEAhIG7g87LNiU3nA44c6lECw5S9X9LDi39TnRSLIGWsYcucTCODJ5QRbfNZR3lLCTt7Ii6KBITYi+uJ1axoEm2ycS8c2K8u+gg3cSzYAifvll/65slQfLCH3TIOUFjolTOTmNXPu1zN88sDJ9AMohv9ikSYjgJaZNsSI8/F+vGPcIAAACAR7sKgMF+fPqltQSmhJEYeseIHr2pQdiDYM9V9H4aSTgHI9AgyoBxsPqsFkJDDn39gkX+v5+NAAapdLG4RsJp72b1YdvTiO2lQWES923pFjFmYrihlap3ommdEGTwHvXNE9KxqkZoBsfu4rKujU1akQsvQe8u8zyqvCunXgwUgbI=Private-Lines: 1wuvMxFiZW6IyEo+pXFgz6SJs2Siy4s8miTsrkzmb01Y=Private-MAC: 98d5a9507ac546005d506f77a92b40cfe481017a',
			'keyphrase' => 'kasvumaja2013',
			'root'      => '/public_html/kasvumaja.ee',
		),

	),

	/*
	|--------------------------------------------------------------------------
	| Remote Server Groups
	|--------------------------------------------------------------------------
	|
	| Here you may list connections under a single group name, which allows
	| you to easily access all of the servers at once using a short name
	| that is extremely easy to remember, such as "web" or "database".
	|
	*/

	'groups' => array(

		'web' => array('production')

	),

);