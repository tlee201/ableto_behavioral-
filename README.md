# ableto_behavioral-
The index folder contains the css and js, I had to restructure the folder structure due to shared hosting. So in laravel this folder would normally be the public folder

    |--app
      |--GoPublic.php <-- new class to connect everthing
    |--bootstrap
    |--config
    |--database
    |--public <--copy to public_html
      |--assets
      |--index.php
    |--resources
    |--storage
    |--tests
    |--vendor
    |--deploy.sh    
    |--public_html
        |--myapp
        |--assets
        |--index.php <-- point here using the GoPublic class
