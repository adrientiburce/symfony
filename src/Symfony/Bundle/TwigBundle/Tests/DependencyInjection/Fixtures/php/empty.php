<?php

$container->loadFromExtension('twig', [
    'strict_variables' => false, // to be removed in 5.0 relying on default
    'exception_controller' => null, // to be removed in 5.0
]);
