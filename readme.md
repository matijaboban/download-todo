# Download - ToDo framework

A "work in progress" test framework.


This is a work in progress framework which will consist of:

 - a unified Laravel back-end which provides data procesign via an API layer
 - front-end aps based on several implementation languages: VueJs, ReactJs, angular.js, Blade, Twig

## Instalation
 Project is encapsulated in a VM developemnt enviroment and requires VirtualBox and Vagrant to be installed. 
 After the repo is cloned, run **composer install** in the project directory. After composer completion, run **vagrant up**
 After the VM is done, you can access it via **vagrant ssh** command.
 
 Inside the VM run:
 
 ``./artisan migrate --seed``
 to generate dB migrations and seed data
 
 
 ``./artisan api:generate --output=public/docs/api --middleware=api`` to generate api documentation
 
  ``gulp`` to generate assets
 
 
## Project access
As specified in **Homestead.yaml** project is routed via specified domain pointing to a local 10.10.10.* IP. 
Adjust your local configuration as appropriate.

### Front-end access
Currently the front-end selector menu and the front-end App locations are placeholders.

### API access
API documentation can be accessed via /docs/api/
