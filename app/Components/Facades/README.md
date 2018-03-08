Welcome to Facades Namespace!
===================


Hey! So, you're gonna create a  **Facades**?. No Worries! You just simply follow the instructions below!

----------


Creating a Class
-------------

FIrst! You should create a class under `App\Components\Facades` namespace in `App\Components\Facades` Directory!

Then add alias on `config/app.php` inside `$aliases` array like below: 

```
...
'YourFacadeAlias' => 'Facades\App\Facades\YourFacadeClass'
```

Easy isn't it! Doesn't need to define your own container bindings or ServiceProvider! 

_Powered by_ [Laravel Real Time Facades](https://laravel.com/docs/5.5/facades#real-time-facades)_
