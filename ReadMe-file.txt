To run this need

your .env file

install from composer

	LaravelHTML Collective [ url (https://laravelcollective.com/docs/5.3/html) ]

	Intervention Image Installation [ url (http://image.intervention.io/getting_started/installation) ]
	
	Laravel File Manager From UniSharp/Laravel [ url (http://unisharp.github.io/laravel-filemanager/installation) ]

==============================================================================
==============================================================================
==============================================================================

------------ HOW TO INSTAL LAravel collective -----------

Begin by installing this package through Composer. Run the following from the terminal:

composer require "laravelcollective/html":"^5.3.0"

Next, add your new provider to the providers array of config/app.php:

  'providers' => [
    // ...
    Collective\Html\HtmlServiceProvider::class,
    // ...
  ],

Finally, add two class aliases to the aliases array of config/app.php:

  'aliases' => [
    // ...
      'Form' => Collective\Html\FormFacade::class,
      'Html' => Collective\Html\HtmlFacade::class,
    // ...
  ],
	

------------ HOW TO INSTALL INTERVENTION -----------------

Composer Installation

The best way to install Intervention Image is quickly and easily with Composer.

To install the most recent version, run the following command.

    $ php composer.phar require intervention/image

Now your composer.json has been updated automatically and you're able to require the just created vendor/autoload.php file to PSR-4 autoload the library.

The next step is to decide, if you want to integrate Intervention Image into the Laravel framework. If you want to use the library with Laravel, just skip the following step and continue with the description of Laravel Integration.


------------- HOW TO INSTALL LARAVEL FILE MANAGER -------------

Installation

    Install package

     composer require unisharp/laravel-filemanager

    Edit config/app.php :

    Add service providers

     Unisharp\Laravelfilemanager\LaravelFilemanagerServiceProvider::class,
     Intervention\Image\ImageServiceProvider::class,

    And add class aliases

     'Image' => Intervention\Image\Facades\Image::class,

    Code above is for Laravel 5.1. In Laravel 5.0 should leave only quoted class names.

    Publish the package’s config and assets :

     php artisan vendor:publish --tag=lfm_config
     php artisan vendor:publish --tag=lfm_public

    Ensure that the files & images directories (in config/lfm.php) are writable by your web server(run commands like chown or chmod).
