<?php

// Protege de eventual decriptage
define( 'SEC_SALT', 'kjcl44ez3%78p@e' ); // admin1234
define( 'SEC_PEPPER', 'd(z789#fd5z%r@' ); // admin1234

echo hash('sha512', 'kjcl44ez3%78p@e@admin1234d(z789#fd5z%r@');