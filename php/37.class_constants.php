<?php

define ('CREATED', 201);
print CREATED.PHP_EOL;

class Htpp
{
    public const NOT_FOUND = 404;
    public const OK = 200;
    public const CREATED = 201;
}

print Htpp::NOT_FOUND.PHP_EOL;
print Htpp::OK.PHP_EOL;
print Htpp::CREATED.PHP_EOL;


?>