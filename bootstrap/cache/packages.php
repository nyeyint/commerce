<?php return array (
  'barryvdh/laravel-dompdf' => 
  array (
    'providers' => 
    array (
      0 => 'Barryvdh\\DomPDF\\ServiceProvider',
    ),
    'aliases' => 
    array (
      'PDF' => 'Barryvdh\\DomPDF\\Facade',
    ),
  ),
  'fideloper/proxy' => 
  array (
    'providers' => 
    array (
      0 => 'Fideloper\\Proxy\\TrustedProxyServiceProvider',
    ),
  ),
  'gloudemans/shoppingcart' => 
  array (
    'providers' => 
    array (
      0 => 'Gloudemans\\Shoppingcart\\ShoppingcartServiceProvider',
    ),
    'aliases' => 
    array (
      'Cart' => 'Gloudemans\\Shoppingcart\\Facades\\Cart',
    ),
  ),
  'laravel/socialite' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Socialite\\SocialiteServiceProvider',
    ),
    'aliases' => 
    array (
      'Socialite' => 'Laravel\\Socialite\\Facades\\Socialite',
    ),
  ),
  'laravel/tinker' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'larapack/voyager-hooks' => 
  array (
    'providers' => 
    array (
      0 => 'Larapack\\VoyagerHooks\\VoyagerHooksServiceProvider',
    ),
  ),
  'intervention/image' => 
  array (
    'providers' => 
    array (
      0 => 'Intervention\\Image\\ImageServiceProvider',
    ),
    'aliases' => 
    array (
      'Image' => 'Intervention\\Image\\Facades\\Image',
    ),
  ),
  'arrilot/laravel-widgets' => 
  array (
    'providers' => 
    array (
      0 => 'Arrilot\\Widgets\\ServiceProvider',
    ),
    'aliases' => 
    array (
      'Widget' => 'Arrilot\\Widgets\\Facade',
      'AsyncWidget' => 'Arrilot\\Widgets\\AsyncFacade',
    ),
  ),
  'tcg/voyager' => 
  array (
    'providers' => 
    array (
      0 => 'TCG\\Voyager\\VoyagerServiceProvider',
    ),
  ),
  'webpatser/laravel-uuid' => 
  array (
    'providers' => 
    array (
      0 => 'Webpatser\\Uuid\\UuidServiceProvider',
    ),
    'aliases' => 
    array (
      'Uuid' => 'Webpatser\\Uuid\\Uuid',
    ),
  ),
  'barryvdh/laravel-debugbar' => 
  array (
    'providers' => 
    array (
      0 => 'Barryvdh\\Debugbar\\ServiceProvider',
    ),
    'aliases' => 
    array (
      'Debugbar' => 'Barryvdh\\Debugbar\\Facade',
    ),
  ),
  'orangehill/iseed' => 
  array (
    'providers' => 
    array (
      0 => 'Orangehill\\Iseed\\IseedServiceProvider',
    ),
  ),
  'xethron/migrations-generator' => 
  array (
    'providers' => 
    array (
      0 => 'Way\\Generators\\GeneratorsServiceProvider',
      1 => 'Xethron\\MigrationsGenerator\\MigrationsGeneratorServiceProvider',
    ),
  ),
);