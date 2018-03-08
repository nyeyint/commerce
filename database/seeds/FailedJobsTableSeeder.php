<?php

use Illuminate\Database\Seeder;

class FailedJobsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('failed_jobs')->delete();
        
        \DB::table('failed_jobs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\SendConfirmationEmail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:35:\\"App\\\\Listeners\\\\SendConfirmationEmail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:32:\\"App\\\\Events\\\\SocialMediaRegistered\\":1:{s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
                'exception' => 'Illuminate\\Contracts\\Container\\BindingResolutionException: Unresolvable dependency resolving [Parameter #0 [ <required> $user ]] in class App\\Listeners\\SendConfirmationEmail in E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php:933
Stack trace:
#0 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(871): Illuminate\\Container\\Container->unresolvablePrimitive(Object(ReflectionParameter))
#1 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(812): Illuminate\\Container\\Container->resolvePrimitive(Object(ReflectionParameter))
#2 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(780): Illuminate\\Container\\Container->resolveDependencies(Array)
#3 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(631): Illuminate\\Container\\Container->build(\'App\\\\Listeners\\\\S...\')
#4 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(586): Illuminate\\Container\\Container->resolve(\'App\\\\Listeners\\\\S...\', Array)
#5 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(732): Illuminate\\Container\\Container->make(\'App\\\\Listeners\\\\S...\', Array)
#6 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Events\\CallQueuedListener.php(82): Illuminate\\Foundation\\Application->make(\'App\\\\Listeners\\\\S...\')
#7 [internal function]: Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))
#8 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(29): call_user_func_array(Array, Array)
#9 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#10 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#11 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#12 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#13 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#14 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#15 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#16 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)
#17 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#18 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#19 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#20 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#21 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#22 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#23 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#24 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(29): call_user_func_array(Array, Array)
#25 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#26 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#27 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#28 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Illuminate\\Container\\Container->call(Array)
#29 E:\\Code\\bio\\vendor\\symfony\\console\\Command\\Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#30 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#31 E:\\Code\\bio\\vendor\\symfony\\console\\Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#32 E:\\Code\\bio\\vendor\\symfony\\console\\Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#33 E:\\Code\\bio\\vendor\\symfony\\console\\Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#34 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#35 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#36 E:\\Code\\bio\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#37 {main}',
                'failed_at' => '2017-12-07 07:31:00',
            ),
            1 => 
            array (
                'id' => 2,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\SendConfirmationEmail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:35:\\"App\\\\Listeners\\\\SendConfirmationEmail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:32:\\"App\\\\Events\\\\SocialMediaRegistered\\":1:{s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
                'exception' => 'Illuminate\\Queue\\MaxAttemptsExceededException: App\\Listeners\\SendConfirmationEmail has been attempted too many times or run too long. The job may have previously timed out. in E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php:394
Stack trace:
#0 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(314): Illuminate\\Queue\\Worker->markJobAsFailedIfAlreadyExceedsMaxAttempts(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), 3)
#1 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#2 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#3 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#4 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#5 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#6 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(29): call_user_func_array(Array, Array)
#7 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#8 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#9 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#10 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Illuminate\\Container\\Container->call(Array)
#11 E:\\Code\\bio\\vendor\\symfony\\console\\Command\\Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#12 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#13 E:\\Code\\bio\\vendor\\symfony\\console\\Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#14 E:\\Code\\bio\\vendor\\symfony\\console\\Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#15 E:\\Code\\bio\\vendor\\symfony\\console\\Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#16 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#17 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#18 E:\\Code\\bio\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#19 {main}',
                'failed_at' => '2017-12-07 07:31:37',
            ),
            2 => 
            array (
                'id' => 3,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\SendConfirmationEmail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:35:\\"App\\\\Listeners\\\\SendConfirmationEmail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:32:\\"App\\\\Events\\\\SocialMediaRegistered\\":1:{s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
                'exception' => 'Illuminate\\Contracts\\Container\\BindingResolutionException: Unresolvable dependency resolving [Parameter #0 [ <required> $user ]] in class App\\Listeners\\SendConfirmationEmail in E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php:933
Stack trace:
#0 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(871): Illuminate\\Container\\Container->unresolvablePrimitive(Object(ReflectionParameter))
#1 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(812): Illuminate\\Container\\Container->resolvePrimitive(Object(ReflectionParameter))
#2 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(780): Illuminate\\Container\\Container->resolveDependencies(Array)
#3 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(631): Illuminate\\Container\\Container->build(\'App\\\\Listeners\\\\S...\')
#4 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(586): Illuminate\\Container\\Container->resolve(\'App\\\\Listeners\\\\S...\', Array)
#5 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(732): Illuminate\\Container\\Container->make(\'App\\\\Listeners\\\\S...\', Array)
#6 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Events\\CallQueuedListener.php(82): Illuminate\\Foundation\\Application->make(\'App\\\\Listeners\\\\S...\')
#7 [internal function]: Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))
#8 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(29): call_user_func_array(Array, Array)
#9 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#10 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#11 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#12 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#13 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#14 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#15 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#16 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)
#17 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#18 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#19 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#20 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#21 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#22 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#23 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#24 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(29): call_user_func_array(Array, Array)
#25 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#26 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#27 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#28 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Illuminate\\Container\\Container->call(Array)
#29 E:\\Code\\bio\\vendor\\symfony\\console\\Command\\Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#30 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#31 E:\\Code\\bio\\vendor\\symfony\\console\\Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#32 E:\\Code\\bio\\vendor\\symfony\\console\\Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#33 E:\\Code\\bio\\vendor\\symfony\\console\\Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#34 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#35 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#36 E:\\Code\\bio\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#37 {main}',
                'failed_at' => '2017-12-07 07:32:34',
            ),
            3 => 
            array (
                'id' => 4,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\SendConfirmationEmail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:35:\\"App\\\\Listeners\\\\SendConfirmationEmail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:32:\\"App\\\\Events\\\\SocialMediaRegistered\\":1:{s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
                'exception' => 'Illuminate\\Queue\\MaxAttemptsExceededException: App\\Listeners\\SendConfirmationEmail has been attempted too many times or run too long. The job may have previously timed out. in E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php:394
Stack trace:
#0 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(314): Illuminate\\Queue\\Worker->markJobAsFailedIfAlreadyExceedsMaxAttempts(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), 3)
#1 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#2 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#3 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#4 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#5 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#6 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(29): call_user_func_array(Array, Array)
#7 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#8 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#9 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#10 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Illuminate\\Container\\Container->call(Array)
#11 E:\\Code\\bio\\vendor\\symfony\\console\\Command\\Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#12 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#13 E:\\Code\\bio\\vendor\\symfony\\console\\Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#14 E:\\Code\\bio\\vendor\\symfony\\console\\Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#15 E:\\Code\\bio\\vendor\\symfony\\console\\Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#16 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#17 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#18 E:\\Code\\bio\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#19 {main}',
                'failed_at' => '2017-12-08 16:50:04',
            ),
            4 => 
            array (
                'id' => 5,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\SendConfirmationEmail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:35:\\"App\\\\Listeners\\\\SendConfirmationEmail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:32:\\"App\\\\Events\\\\SocialMediaRegistered\\":1:{s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
                'exception' => 'Illuminate\\Queue\\MaxAttemptsExceededException: App\\Listeners\\SendConfirmationEmail has been attempted too many times or run too long. The job may have previously timed out. in E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php:394
Stack trace:
#0 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(314): Illuminate\\Queue\\Worker->markJobAsFailedIfAlreadyExceedsMaxAttempts(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), 3)
#1 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#2 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#3 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#4 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#5 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#6 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(29): call_user_func_array(Array, Array)
#7 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#8 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#9 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#10 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Illuminate\\Container\\Container->call(Array)
#11 E:\\Code\\bio\\vendor\\symfony\\console\\Command\\Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#12 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#13 E:\\Code\\bio\\vendor\\symfony\\console\\Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#14 E:\\Code\\bio\\vendor\\symfony\\console\\Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#15 E:\\Code\\bio\\vendor\\symfony\\console\\Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#16 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#17 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#18 E:\\Code\\bio\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#19 {main}',
                'failed_at' => '2017-12-08 16:50:04',
            ),
            5 => 
            array (
                'id' => 6,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\SendConfirmationEmail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:35:\\"App\\\\Listeners\\\\SendConfirmationEmail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:32:\\"App\\\\Events\\\\SocialMediaRegistered\\":1:{s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
                'exception' => 'Illuminate\\Queue\\MaxAttemptsExceededException: App\\Listeners\\SendConfirmationEmail has been attempted too many times or run too long. The job may have previously timed out. in E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php:394
Stack trace:
#0 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(314): Illuminate\\Queue\\Worker->markJobAsFailedIfAlreadyExceedsMaxAttempts(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), 3)
#1 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#2 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#3 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#4 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#5 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#6 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(29): call_user_func_array(Array, Array)
#7 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#8 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#9 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#10 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Illuminate\\Container\\Container->call(Array)
#11 E:\\Code\\bio\\vendor\\symfony\\console\\Command\\Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#12 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#13 E:\\Code\\bio\\vendor\\symfony\\console\\Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#14 E:\\Code\\bio\\vendor\\symfony\\console\\Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#15 E:\\Code\\bio\\vendor\\symfony\\console\\Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#16 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#17 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#18 E:\\Code\\bio\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#19 {main}',
                'failed_at' => '2017-12-08 16:50:04',
            ),
            6 => 
            array (
                'id' => 7,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\SendConfirmationEmail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:35:\\"App\\\\Listeners\\\\SendConfirmationEmail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:32:\\"App\\\\Events\\\\SocialMediaRegistered\\":1:{s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
                'exception' => 'Illuminate\\Queue\\MaxAttemptsExceededException: App\\Listeners\\SendConfirmationEmail has been attempted too many times or run too long. The job may have previously timed out. in E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php:394
Stack trace:
#0 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(314): Illuminate\\Queue\\Worker->markJobAsFailedIfAlreadyExceedsMaxAttempts(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), 3)
#1 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#2 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#3 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#4 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#5 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#6 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(29): call_user_func_array(Array, Array)
#7 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#8 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#9 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#10 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Illuminate\\Container\\Container->call(Array)
#11 E:\\Code\\bio\\vendor\\symfony\\console\\Command\\Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#12 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#13 E:\\Code\\bio\\vendor\\symfony\\console\\Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#14 E:\\Code\\bio\\vendor\\symfony\\console\\Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#15 E:\\Code\\bio\\vendor\\symfony\\console\\Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#16 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#17 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#18 E:\\Code\\bio\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#19 {main}',
                'failed_at' => '2017-12-08 16:50:04',
            ),
            7 => 
            array (
                'id' => 8,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\SendConfirmationEmail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:35:\\"App\\\\Listeners\\\\SendConfirmationEmail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:32:\\"App\\\\Events\\\\SocialMediaRegistered\\":1:{s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
                'exception' => 'Illuminate\\Queue\\MaxAttemptsExceededException: App\\Listeners\\SendConfirmationEmail has been attempted too many times or run too long. The job may have previously timed out. in E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php:394
Stack trace:
#0 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(314): Illuminate\\Queue\\Worker->markJobAsFailedIfAlreadyExceedsMaxAttempts(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), 3)
#1 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#2 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#3 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#4 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#5 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#6 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(29): call_user_func_array(Array, Array)
#7 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#8 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#9 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#10 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Illuminate\\Container\\Container->call(Array)
#11 E:\\Code\\bio\\vendor\\symfony\\console\\Command\\Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#12 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#13 E:\\Code\\bio\\vendor\\symfony\\console\\Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#14 E:\\Code\\bio\\vendor\\symfony\\console\\Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#15 E:\\Code\\bio\\vendor\\symfony\\console\\Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#16 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#17 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#18 E:\\Code\\bio\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#19 {main}',
                'failed_at' => '2017-12-08 16:50:04',
            ),
            8 => 
            array (
                'id' => 9,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\SendConfirmationEmail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:35:\\"App\\\\Listeners\\\\SendConfirmationEmail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:28:\\"App\\\\Events\\\\NewUserRegistered\\":1:{s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
            'exception' => 'Symfony\\Component\\Debug\\Exception\\FatalThrowableError: Call to undefined method App\\Events\\NewUserRegistered::toArray() in E:\\Code\\bio\\app\\Listeners\\SendConfirmationEmail.php:39
Stack trace:
#0 [internal function]: App\\Listeners\\SendConfirmationEmail->handle(Object(App\\Events\\NewUserRegistered))
#1 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Events\\CallQueuedListener.php(86): call_user_func_array(Array, Array)
#2 [internal function]: Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))
#3 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(29): call_user_func_array(Array, Array)
#4 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#5 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#6 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#7 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#8 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#9 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#10 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#11 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)
#12 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#13 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#14 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#15 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#16 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#17 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#18 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#19 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(29): call_user_func_array(Array, Array)
#20 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#21 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#22 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#23 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Illuminate\\Container\\Container->call(Array)
#24 E:\\Code\\bio\\vendor\\symfony\\console\\Command\\Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#25 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#26 E:\\Code\\bio\\vendor\\symfony\\console\\Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#27 E:\\Code\\bio\\vendor\\symfony\\console\\Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#28 E:\\Code\\bio\\vendor\\symfony\\console\\Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#29 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#30 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#31 E:\\Code\\bio\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#32 {main}',
                'failed_at' => '2017-12-08 16:53:06',
            ),
            9 => 
            array (
                'id' => 10,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\SendConfirmationEmail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:35:\\"App\\\\Listeners\\\\SendConfirmationEmail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:28:\\"App\\\\Events\\\\NewUserRegistered\\":1:{s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
            'exception' => 'Symfony\\Component\\Debug\\Exception\\FatalThrowableError: Call to undefined method App\\Events\\NewUserRegistered::toArray() in E:\\Code\\bio\\app\\Listeners\\SendConfirmationEmail.php:39
Stack trace:
#0 [internal function]: App\\Listeners\\SendConfirmationEmail->handle(Object(App\\Events\\NewUserRegistered))
#1 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Events\\CallQueuedListener.php(86): call_user_func_array(Array, Array)
#2 [internal function]: Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))
#3 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(29): call_user_func_array(Array, Array)
#4 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#5 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#6 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#7 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#8 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#9 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#10 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#11 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)
#12 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#13 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#14 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#15 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#16 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#17 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#18 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#19 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(29): call_user_func_array(Array, Array)
#20 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#21 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#22 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#23 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Illuminate\\Container\\Container->call(Array)
#24 E:\\Code\\bio\\vendor\\symfony\\console\\Command\\Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#25 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#26 E:\\Code\\bio\\vendor\\symfony\\console\\Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#27 E:\\Code\\bio\\vendor\\symfony\\console\\Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#28 E:\\Code\\bio\\vendor\\symfony\\console\\Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#29 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#30 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#31 E:\\Code\\bio\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#32 {main}',
                'failed_at' => '2017-12-08 16:54:34',
            ),
            10 => 
            array (
                'id' => 11,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\SendConfirmationEmail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:35:\\"App\\\\Listeners\\\\SendConfirmationEmail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:28:\\"App\\\\Events\\\\NewUserRegistered\\":1:{s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
                'exception' => 'ErrorException: Undefined property: App\\Events\\NewUserRegistered::$user in E:\\Code\\bio\\app\\Listeners\\SendConfirmationEmail.php:39
Stack trace:
#0 E:\\Code\\bio\\app\\Listeners\\SendConfirmationEmail.php(39): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(8, \'Undefined prope...\', \'E:\\\\Code\\\\bio\\\\app...\', 39, Array)
#1 [internal function]: App\\Listeners\\SendConfirmationEmail->handle(Object(App\\Events\\NewUserRegistered))
#2 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Events\\CallQueuedListener.php(86): call_user_func_array(Array, Array)
#3 [internal function]: Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))
#4 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(29): call_user_func_array(Array, Array)
#5 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#6 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#7 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#8 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#9 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#10 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#11 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#12 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)
#13 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#14 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#15 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#16 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#17 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#18 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#19 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#20 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(29): call_user_func_array(Array, Array)
#21 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#22 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#23 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#24 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Illuminate\\Container\\Container->call(Array)
#25 E:\\Code\\bio\\vendor\\symfony\\console\\Command\\Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#26 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#27 E:\\Code\\bio\\vendor\\symfony\\console\\Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#28 E:\\Code\\bio\\vendor\\symfony\\console\\Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#29 E:\\Code\\bio\\vendor\\symfony\\console\\Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#30 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#31 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#32 E:\\Code\\bio\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#33 {main}',
                'failed_at' => '2017-12-08 16:55:19',
            ),
            11 => 
            array (
                'id' => 12,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\SendConfirmationEmail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:35:\\"App\\\\Listeners\\\\SendConfirmationEmail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:28:\\"App\\\\Events\\\\NewUserRegistered\\":2:{s:4:\\"user\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";i:27;s:10:\\"connection\\";s:5:\\"mysql\\";}s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
                'exception' => 'Symfony\\Component\\Debug\\Exception\\FatalThrowableError: Class \'App\\Listeners\\Mail\' not found in E:\\Code\\bio\\app\\Listeners\\SendConfirmationEmail.php:40
Stack trace:
#0 [internal function]: App\\Listeners\\SendConfirmationEmail->handle(Object(App\\Events\\NewUserRegistered))
#1 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Events\\CallQueuedListener.php(86): call_user_func_array(Array, Array)
#2 [internal function]: Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))
#3 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(29): call_user_func_array(Array, Array)
#4 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#5 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#6 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#7 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#8 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#9 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#10 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#11 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)
#12 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#13 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#14 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#15 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#16 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#17 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#18 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#19 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(29): call_user_func_array(Array, Array)
#20 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#21 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#22 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#23 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Illuminate\\Container\\Container->call(Array)
#24 E:\\Code\\bio\\vendor\\symfony\\console\\Command\\Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#25 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#26 E:\\Code\\bio\\vendor\\symfony\\console\\Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#27 E:\\Code\\bio\\vendor\\symfony\\console\\Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#28 E:\\Code\\bio\\vendor\\symfony\\console\\Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#29 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#30 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#31 E:\\Code\\bio\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#32 {main}',
                'failed_at' => '2017-12-08 17:16:07',
            ),
            12 => 
            array (
                'id' => 13,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\SendConfirmationEmail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:35:\\"App\\\\Listeners\\\\SendConfirmationEmail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:33:\\"Illuminate\\\\Auth\\\\Events\\\\Registered\\":1:{s:4:\\"user\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";i:31;s:10:\\"connection\\";s:5:\\"mysql\\";}}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
            'exception' => 'Symfony\\Component\\Debug\\Exception\\FatalThrowableError: Type error: Argument 1 passed to App\\Listeners\\SendConfirmationEmail::handle() must be an instance of App\\Events\\NewUserRegistered, instance of Illuminate\\Auth\\Events\\Registered given in E:\\Code\\bio\\app\\Listeners\\SendConfirmationEmail.php:39
Stack trace:
#0 [internal function]: App\\Listeners\\SendConfirmationEmail->handle(Object(Illuminate\\Auth\\Events\\Registered))
#1 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Events\\CallQueuedListener.php(86): call_user_func_array(Array, Array)
#2 [internal function]: Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))
#3 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(29): call_user_func_array(Array, Array)
#4 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#5 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#6 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#7 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#8 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#9 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#10 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#11 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)
#12 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#13 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#14 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#15 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#16 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#17 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#18 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#19 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(29): call_user_func_array(Array, Array)
#20 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#21 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#22 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#23 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Illuminate\\Container\\Container->call(Array)
#24 E:\\Code\\bio\\vendor\\symfony\\console\\Command\\Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#25 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#26 E:\\Code\\bio\\vendor\\symfony\\console\\Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#27 E:\\Code\\bio\\vendor\\symfony\\console\\Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#28 E:\\Code\\bio\\vendor\\symfony\\console\\Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#29 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#30 E:\\Code\\bio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#31 E:\\Code\\bio\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#32 {main}',
                'failed_at' => '2017-12-08 18:48:29',
            ),
            13 => 
            array (
                'id' => 14,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Mail\\\\RegisterConfirmation","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Mail\\\\SendQueuedMailable","command":"O:34:\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\":3:{s:8:\\"mailable\\";O:29:\\"App\\\\Mail\\\\RegisterConfirmation\\":21:{s:3:\\"url\\";s:218:\\"http:\\/\\/bio.dev\\/verify\\/eyJpdiI6IlwvXC9yVW9zYlMwVlwvWDBwK1NKVlwvV3h3PT0iLCJ2YWx1ZSI6IlkyRjYzUlRyWkJiVjZrdTJueDJ5UHc9PSIsIm1hYyI6IjM1NzA4ZGY3NmVjMDljYjAxYTNmNzYzYzBiOTAzZjUwMWRmMTVkM2I5NGE1YmNlOGEwNTI0ZTVkZDhiMjA1MzYifQ==\\";s:4:\\"user\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";i:37;s:10:\\"connection\\";s:5:\\"mysql\\";}s:4:\\"from\\";a:0:{}s:2:\\"to\\";a:1:{i:0;a:2:{s:4:\\"name\\";N;s:7:\\"address\\";s:7:\\"p@h.com\\";}}s:2:\\"cc\\";a:0:{}s:3:\\"bcc\\";a:0:{}s:7:\\"replyTo\\";a:0:{}s:7:\\"subject\\";N;s:11:\\"\\u0000*\\u0000markdown\\";N;s:4:\\"view\\";N;s:8:\\"textView\\";N;s:8:\\"viewData\\";a:0:{}s:11:\\"attachments\\";a:0:{}s:14:\\"rawAttachments\\";a:0:{}s:9:\\"callbacks\\";a:0:{}s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:5:\\"delay\\";N;s:7:\\"chained\\";a:0:{}}s:5:\\"tries\\";N;s:7:\\"timeout\\";N;}"}}',
                'exception' => 'Swift_TransportException: Failed to authenticate on SMTP server with username "ae7b5604d7615c" using 3 possible authenticators in /home/rizal/Code/bio/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/AuthHandler.php:181
Stack trace:
#0 /home/rizal/Code/bio/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/EsmtpTransport.php(334): Swift_Transport_Esmtp_AuthHandler->afterEhlo(Object(Swift_SmtpTransport))
#1 /home/rizal/Code/bio/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/AbstractSmtpTransport.php(131): Swift_Transport_EsmtpTransport->doHeloCommand()
#2 /home/rizal/Code/bio/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mailer.php(67): Swift_Transport_AbstractSmtpTransport->start()
#3 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Mail/Mailer.php(451): Swift_Mailer->send(Object(Swift_Message), Array)
#4 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Mail/Mailer.php(235): Illuminate\\Mail\\Mailer->sendSwiftMessage(Object(Swift_Message))
#5 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(125): Illuminate\\Mail\\Mailer->send(Object(Illuminate\\Support\\HtmlString), Array, Object(Closure))
#6 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Mail/SendQueuedMailable.php(52): Illuminate\\Mail\\Mailable->send(Object(Illuminate\\Mail\\Mailer))
#7 [internal function]: Illuminate\\Mail\\SendQueuedMailable->handle(Object(Illuminate\\Mail\\Mailer))
#8 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#9 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#10 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#11 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#12 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#13 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Mail\\SendQueuedMailable))
#14 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Mail\\SendQueuedMailable))
#15 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#16 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Mail\\SendQueuedMailable), false)
#17 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#18 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#19 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#20 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#21 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#22 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#23 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#24 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#25 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#26 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#27 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#28 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Illuminate\\Container\\Container->call(Array)
#29 /home/rizal/Code/bio/vendor/symfony/console/Command/Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#30 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#31 /home/rizal/Code/bio/vendor/symfony/console/Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#32 /home/rizal/Code/bio/vendor/symfony/console/Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#33 /home/rizal/Code/bio/vendor/symfony/console/Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#34 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#35 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#36 /home/rizal/Code/bio/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#37 {main}',
                'failed_at' => '2017-12-23 02:04:04',
            ),
            14 => 
            array (
                'id' => 15,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\Email\\\\ParseMail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:29:\\"App\\\\Listeners\\\\Email\\\\ParseMail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:25:\\"App\\\\Events\\\\Email\\\\SentMail\\":2:{s:8:\\"template\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:17:\\"App\\\\EmailTemplate\\";s:2:\\"id\\";i:1;s:10:\\"connection\\";s:5:\\"mysql\\";}s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
                'exception' => 'ReflectionException: Class App\\Listeners\\Email\\EmailTemplate does not exist in /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php:811
Stack trace:
#0 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(811): ReflectionParameter->getClass()
#1 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(780): Illuminate\\Container\\Container->resolveDependencies(Array)
#2 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(631): Illuminate\\Container\\Container->build(\'App\\\\Listeners\\\\E...\')
#3 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(586): Illuminate\\Container\\Container->resolve(\'App\\\\Listeners\\\\E...\', Array)
#4 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(732): Illuminate\\Container\\Container->make(\'App\\\\Listeners\\\\E...\', Array)
#5 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Events/CallQueuedListener.php(82): Illuminate\\Foundation\\Application->make(\'App\\\\Listeners\\\\E...\')
#6 [internal function]: Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))
#7 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#8 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#9 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#10 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#11 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#12 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#13 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#14 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#15 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)
#16 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#17 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#18 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#19 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#20 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#21 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#22 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#23 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#24 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#25 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#26 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#27 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Illuminate\\Container\\Container->call(Array)
#28 /home/rizal/Code/bio/vendor/symfony/console/Command/Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#29 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#30 /home/rizal/Code/bio/vendor/symfony/console/Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#31 /home/rizal/Code/bio/vendor/symfony/console/Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#32 /home/rizal/Code/bio/vendor/symfony/console/Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#33 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#34 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#35 /home/rizal/Code/bio/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#36 {main}',
                'failed_at' => '2018-01-04 19:47:16',
            ),
            15 => 
            array (
                'id' => 16,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\Email\\\\ParseMail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:29:\\"App\\\\Listeners\\\\Email\\\\ParseMail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:25:\\"App\\\\Events\\\\Email\\\\SentMail\\":2:{s:8:\\"template\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:17:\\"App\\\\EmailTemplate\\";s:2:\\"id\\";i:1;s:10:\\"connection\\";s:5:\\"mysql\\";}s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
                'exception' => 'Illuminate\\Contracts\\Container\\BindingResolutionException: Unresolvable dependency resolving [Parameter #1 [ <required> $data ]] in class App\\Listeners\\Email\\ParseMail in /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php:933
Stack trace:
#0 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(871): Illuminate\\Container\\Container->unresolvablePrimitive(Object(ReflectionParameter))
#1 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(812): Illuminate\\Container\\Container->resolvePrimitive(Object(ReflectionParameter))
#2 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(780): Illuminate\\Container\\Container->resolveDependencies(Array)
#3 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(631): Illuminate\\Container\\Container->build(\'App\\\\Listeners\\\\E...\')
#4 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(586): Illuminate\\Container\\Container->resolve(\'App\\\\Listeners\\\\E...\', Array)
#5 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(732): Illuminate\\Container\\Container->make(\'App\\\\Listeners\\\\E...\', Array)
#6 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Events/CallQueuedListener.php(82): Illuminate\\Foundation\\Application->make(\'App\\\\Listeners\\\\E...\')
#7 [internal function]: Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))
#8 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#9 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#10 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#11 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#12 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#13 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#14 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#15 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#16 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)
#17 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#18 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#19 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#20 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#21 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#22 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#23 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#24 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#25 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#26 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#27 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#28 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Illuminate\\Container\\Container->call(Array)
#29 /home/rizal/Code/bio/vendor/symfony/console/Command/Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#30 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#31 /home/rizal/Code/bio/vendor/symfony/console/Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#32 /home/rizal/Code/bio/vendor/symfony/console/Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#33 /home/rizal/Code/bio/vendor/symfony/console/Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#34 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#35 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#36 /home/rizal/Code/bio/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#37 {main}',
                'failed_at' => '2018-01-04 19:47:43',
            ),
            16 => 
            array (
                'id' => 17,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\Email\\\\ParseMail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:29:\\"App\\\\Listeners\\\\Email\\\\ParseMail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:25:\\"App\\\\Events\\\\Email\\\\SentMail\\":2:{s:8:\\"template\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:17:\\"App\\\\EmailTemplate\\";s:2:\\"id\\";i:1;s:10:\\"connection\\";s:5:\\"mysql\\";}s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
                'exception' => 'Illuminate\\Contracts\\Container\\BindingResolutionException: Unresolvable dependency resolving [Parameter #1 [ <required> $data ]] in class App\\Listeners\\Email\\ParseMail in /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php:933
Stack trace:
#0 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(871): Illuminate\\Container\\Container->unresolvablePrimitive(Object(ReflectionParameter))
#1 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(812): Illuminate\\Container\\Container->resolvePrimitive(Object(ReflectionParameter))
#2 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(780): Illuminate\\Container\\Container->resolveDependencies(Array)
#3 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(631): Illuminate\\Container\\Container->build(\'App\\\\Listeners\\\\E...\')
#4 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(586): Illuminate\\Container\\Container->resolve(\'App\\\\Listeners\\\\E...\', Array)
#5 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(732): Illuminate\\Container\\Container->make(\'App\\\\Listeners\\\\E...\', Array)
#6 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Events/CallQueuedListener.php(82): Illuminate\\Foundation\\Application->make(\'App\\\\Listeners\\\\E...\')
#7 [internal function]: Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))
#8 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#9 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#10 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#11 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#12 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#13 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#14 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#15 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#16 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)
#17 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#18 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#19 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#20 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#21 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#22 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#23 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#24 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#25 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#26 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#27 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#28 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Illuminate\\Container\\Container->call(Array)
#29 /home/rizal/Code/bio/vendor/symfony/console/Command/Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#30 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#31 /home/rizal/Code/bio/vendor/symfony/console/Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#32 /home/rizal/Code/bio/vendor/symfony/console/Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#33 /home/rizal/Code/bio/vendor/symfony/console/Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#34 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#35 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#36 /home/rizal/Code/bio/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#37 {main}',
                'failed_at' => '2018-01-04 19:47:58',
            ),
            17 => 
            array (
                'id' => 18,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\Email\\\\ParseMail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:29:\\"App\\\\Listeners\\\\Email\\\\ParseMail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:25:\\"App\\\\Events\\\\Email\\\\SentMail\\":3:{s:8:\\"template\\";s:243:\\"# Hello, [user_name]!\\r\\n\\r\\nThis email is sent to you because you are registering on <a href=\\"[app_url]\\">[app_name]<\\/a>, To start shopping please click button below to activate your account.\\r\\n\\r\\n[button url=activate_account]\\r\\n\\r\\nThanks! [app_name].\\";s:4:\\"data\\";a:0:{}s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
                'exception' => 'ErrorException: Trying to get property of non-object in /home/rizal/Code/bio/app/Listeners/Email/ParseMail.php:32
Stack trace:
#0 /home/rizal/Code/bio/app/Listeners/Email/ParseMail.php(32): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(8, \'Trying to get p...\', \'/home/rizal/Cod...\', 32, Array)
#1 [internal function]: App\\Listeners\\Email\\ParseMail->handle(Object(App\\Events\\Email\\SentMail))
#2 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Events/CallQueuedListener.php(86): call_user_func_array(Array, Array)
#3 [internal function]: Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))
#4 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#5 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#6 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#7 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#8 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#9 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#10 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#11 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#12 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)
#13 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#14 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#15 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#16 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#17 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#18 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#19 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#20 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#21 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#22 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#23 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#24 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Illuminate\\Container\\Container->call(Array)
#25 /home/rizal/Code/bio/vendor/symfony/console/Command/Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#26 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#27 /home/rizal/Code/bio/vendor/symfony/console/Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#28 /home/rizal/Code/bio/vendor/symfony/console/Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#29 /home/rizal/Code/bio/vendor/symfony/console/Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#30 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#31 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#32 /home/rizal/Code/bio/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#33 {main}',
                'failed_at' => '2018-01-08 10:23:44',
            ),
            18 => 
            array (
                'id' => 19,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\Email\\\\ParseMail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:29:\\"App\\\\Listeners\\\\Email\\\\ParseMail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:25:\\"App\\\\Events\\\\Email\\\\SentMail\\":3:{s:8:\\"template\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:17:\\"App\\\\EmailTemplate\\";s:2:\\"id\\";i:1;s:10:\\"connection\\";s:5:\\"mysql\\";}s:4:\\"data\\";a:0:{}s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
                'exception' => 'ErrorException: Undefined property: App\\Listeners\\Email\\ParseMail::$data in /home/rizal/Code/bio/app/Listeners/Email/ParseMail.php:32
Stack trace:
#0 /home/rizal/Code/bio/app/Listeners/Email/ParseMail.php(32): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(8, \'Undefined prope...\', \'/home/rizal/Cod...\', 32, Array)
#1 [internal function]: App\\Listeners\\Email\\ParseMail->handle(Object(App\\Events\\Email\\SentMail))
#2 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Events/CallQueuedListener.php(86): call_user_func_array(Array, Array)
#3 [internal function]: Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))
#4 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#5 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#6 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#7 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#8 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#9 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#10 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#11 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#12 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)
#13 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#14 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#15 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#16 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#17 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#18 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#19 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#20 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#21 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#22 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#23 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#24 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Illuminate\\Container\\Container->call(Array)
#25 /home/rizal/Code/bio/vendor/symfony/console/Command/Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#26 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#27 /home/rizal/Code/bio/vendor/symfony/console/Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#28 /home/rizal/Code/bio/vendor/symfony/console/Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#29 /home/rizal/Code/bio/vendor/symfony/console/Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#30 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#31 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#32 /home/rizal/Code/bio/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#33 {main}',
                'failed_at' => '2018-01-08 10:25:06',
            ),
            19 => 
            array (
                'id' => 20,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\Email\\\\ParseMail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:29:\\"App\\\\Listeners\\\\Email\\\\ParseMail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:25:\\"App\\\\Events\\\\Email\\\\SentMail\\":3:{s:8:\\"template\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:17:\\"App\\\\EmailTemplate\\";s:2:\\"id\\";i:1;s:10:\\"connection\\";s:5:\\"mysql\\";}s:4:\\"data\\";a:0:{}s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
                'exception' => 'ErrorException: Undefined property: stdClass::$verified in /home/rizal/Code/bio/app/Components/Email/Helpers/ButtonActivateAccountHelper.php:46
Stack trace:
#0 /home/rizal/Code/bio/app/Components/Email/Helpers/ButtonActivateAccountHelper.php(46): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(8, \'Undefined prope...\', \'/home/rizal/Cod...\', 46, Array)
#1 /home/rizal/Code/bio/app/Components/Email/Helpers/ButtonActivateAccountHelper.php(40): App\\Components\\Email\\Helpers\\ButtonActivateAccountHelper->parse()
#2 /home/rizal/Code/bio/app/Components/Facades/MailParser.php(62): App\\Components\\Email\\Helpers\\ButtonActivateAccountHelper->__construct(Array, \'# Hello, !\\r\\n\\r\\nT...\', Array)
#3 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Support/Facades/Facade.php(221): App\\Components\\Facades\\MailParser->parse(\'# Hello, [user_...\', Array)
#4 /home/rizal/Code/bio/app/Listeners/Email/ParseMail.php(33): Illuminate\\Support\\Facades\\Facade::__callStatic(\'parse\', Array)
#5 [internal function]: App\\Listeners\\Email\\ParseMail->handle(Object(App\\Events\\Email\\SentMail))
#6 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Events/CallQueuedListener.php(86): call_user_func_array(Array, Array)
#7 [internal function]: Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))
#8 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#9 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#10 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#11 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#12 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#13 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#14 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#15 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#16 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)
#17 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#18 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#19 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#20 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#21 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#22 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#23 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#24 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#25 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#26 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#27 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#28 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Illuminate\\Container\\Container->call(Array)
#29 /home/rizal/Code/bio/vendor/symfony/console/Command/Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#30 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#31 /home/rizal/Code/bio/vendor/symfony/console/Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#32 /home/rizal/Code/bio/vendor/symfony/console/Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#33 /home/rizal/Code/bio/vendor/symfony/console/Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#34 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#35 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#36 /home/rizal/Code/bio/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#37 {main}',
                'failed_at' => '2018-01-08 10:25:49',
            ),
            20 => 
            array (
                'id' => 21,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\Email\\\\ParseMail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:29:\\"App\\\\Listeners\\\\Email\\\\ParseMail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:25:\\"App\\\\Events\\\\Email\\\\SentMail\\":3:{s:8:\\"template\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:17:\\"App\\\\EmailTemplate\\";s:2:\\"id\\";i:1;s:10:\\"connection\\";s:5:\\"mysql\\";}s:4:\\"data\\";a:0:{}s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
                'exception' => 'ErrorException: Array to string conversion in /home/rizal/Code/bio/app/Components/Email/Helpers/RemoveHelper.php:46
Stack trace:
#0 [internal function]: Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(8, \'Array to string...\', \'/home/rizal/Cod...\', 46, Array)
#1 /home/rizal/Code/bio/app/Components/Email/Helpers/RemoveHelper.php(46): str_replace(Array, \'\', \'# Hello, !\\r\\n\\r\\nT...\')
#2 /home/rizal/Code/bio/app/Components/Email/Helpers/RemoveHelper.php(40): App\\Components\\Email\\Helpers\\RemoveHelper->parse()
#3 /home/rizal/Code/bio/app/Components/Email/Helpers/ButtonActivateAccountHelper.php(47): App\\Components\\Email\\Helpers\\RemoveHelper->__construct(Array, \'# Hello, !\\r\\n\\r\\nT...\', Array)
#4 /home/rizal/Code/bio/app/Components/Email/Helpers/ButtonActivateAccountHelper.php(40): App\\Components\\Email\\Helpers\\ButtonActivateAccountHelper->parse()
#5 /home/rizal/Code/bio/app/Components/Facades/MailParser.php(62): App\\Components\\Email\\Helpers\\ButtonActivateAccountHelper->__construct(Array, \'# Hello, !\\r\\n\\r\\nT...\', Array)
#6 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Support/Facades/Facade.php(221): App\\Components\\Facades\\MailParser->parse(\'# Hello, [user_...\', Array)
#7 /home/rizal/Code/bio/app/Listeners/Email/ParseMail.php(33): Illuminate\\Support\\Facades\\Facade::__callStatic(\'parse\', Array)
#8 [internal function]: App\\Listeners\\Email\\ParseMail->handle(Object(App\\Events\\Email\\SentMail))
#9 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Events/CallQueuedListener.php(86): call_user_func_array(Array, Array)
#10 [internal function]: Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))
#11 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#12 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#13 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#14 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#15 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#16 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#17 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#18 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#19 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)
#20 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#21 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#22 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#23 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#24 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#25 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#26 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#27 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#28 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#29 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#30 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#31 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Illuminate\\Container\\Container->call(Array)
#32 /home/rizal/Code/bio/vendor/symfony/console/Command/Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#33 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#34 /home/rizal/Code/bio/vendor/symfony/console/Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#35 /home/rizal/Code/bio/vendor/symfony/console/Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#36 /home/rizal/Code/bio/vendor/symfony/console/Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#37 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#38 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#39 /home/rizal/Code/bio/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#40 {main}',
                'failed_at' => '2018-01-08 10:27:03',
            ),
            21 => 
            array (
                'id' => 22,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\Email\\\\ParseMail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:29:\\"App\\\\Listeners\\\\Email\\\\ParseMail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:25:\\"App\\\\Events\\\\Email\\\\SentMail\\":3:{s:8:\\"template\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:17:\\"App\\\\EmailTemplate\\";s:2:\\"id\\";i:1;s:10:\\"connection\\";s:5:\\"mysql\\";}s:4:\\"data\\";a:0:{}s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
                'exception' => 'Symfony\\Component\\Debug\\Exception\\FatalThrowableError: Class \'App\\Listeners\\Email\\Mail\' not found in /home/rizal/Code/bio/app/Listeners/Email/ParseMail.php:35
Stack trace:
#0 [internal function]: App\\Listeners\\Email\\ParseMail->handle(Object(App\\Events\\Email\\SentMail))
#1 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Events/CallQueuedListener.php(86): call_user_func_array(Array, Array)
#2 [internal function]: Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))
#3 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#4 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#5 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#6 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#7 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#8 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#9 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#10 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#11 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)
#12 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#13 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#14 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#15 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#16 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#17 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#18 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#19 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#20 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#21 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#22 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#23 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Illuminate\\Container\\Container->call(Array)
#24 /home/rizal/Code/bio/vendor/symfony/console/Command/Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#25 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#26 /home/rizal/Code/bio/vendor/symfony/console/Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#27 /home/rizal/Code/bio/vendor/symfony/console/Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#28 /home/rizal/Code/bio/vendor/symfony/console/Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#29 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#30 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#31 /home/rizal/Code/bio/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#32 {main}',
                'failed_at' => '2018-01-08 10:50:29',
            ),
            22 => 
            array (
                'id' => 23,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\Email\\\\ParseMail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:29:\\"App\\\\Listeners\\\\Email\\\\ParseMail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:25:\\"App\\\\Events\\\\Email\\\\SentMail\\":3:{s:8:\\"template\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:17:\\"App\\\\EmailTemplate\\";s:2:\\"id\\";i:1;s:10:\\"connection\\";s:5:\\"mysql\\";}s:4:\\"data\\";a:0:{}s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
                'exception' => 'ErrorException: Undefined property: App\\Events\\Email\\SentMail::$to in /home/rizal/Code/bio/app/Listeners/Email/ParseMail.php:36
Stack trace:
#0 /home/rizal/Code/bio/app/Listeners/Email/ParseMail.php(36): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(8, \'Undefined prope...\', \'/home/rizal/Cod...\', 36, Array)
#1 [internal function]: App\\Listeners\\Email\\ParseMail->handle(Object(App\\Events\\Email\\SentMail))
#2 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Events/CallQueuedListener.php(86): call_user_func_array(Array, Array)
#3 [internal function]: Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))
#4 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#5 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#6 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#7 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#8 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#9 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#10 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#11 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#12 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)
#13 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#14 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#15 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#16 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#17 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#18 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#19 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#20 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#21 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#22 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#23 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#24 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Illuminate\\Container\\Container->call(Array)
#25 /home/rizal/Code/bio/vendor/symfony/console/Command/Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#26 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#27 /home/rizal/Code/bio/vendor/symfony/console/Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#28 /home/rizal/Code/bio/vendor/symfony/console/Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#29 /home/rizal/Code/bio/vendor/symfony/console/Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#30 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#31 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#32 /home/rizal/Code/bio/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#33 {main}',
                'failed_at' => '2018-01-08 10:51:38',
            ),
            23 => 
            array (
                'id' => 24,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\Email\\\\ParseMail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:29:\\"App\\\\Listeners\\\\Email\\\\ParseMail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:25:\\"App\\\\Events\\\\Email\\\\SentMail\\":4:{s:8:\\"template\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:17:\\"App\\\\EmailTemplate\\";s:2:\\"id\\";i:1;s:10:\\"connection\\";s:5:\\"mysql\\";}s:4:\\"data\\";a:0:{}s:2:\\"to\\";s:16:\\"bisa33@gmail.com\\";s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
                'exception' => 'ErrorException: Undefined variable: template in /home/rizal/Code/bio/app/Listeners/Email/ParseMail.php:36
Stack trace:
#0 /home/rizal/Code/bio/app/Listeners/Email/ParseMail.php(36): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(8, \'Undefined varia...\', \'/home/rizal/Cod...\', 36, Array)
#1 [internal function]: App\\Listeners\\Email\\ParseMail->handle(Object(App\\Events\\Email\\SentMail))
#2 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Events/CallQueuedListener.php(86): call_user_func_array(Array, Array)
#3 [internal function]: Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))
#4 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#5 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#6 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#7 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#8 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#9 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#10 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#11 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#12 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)
#13 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#14 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#15 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#16 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#17 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#18 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#19 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#20 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#21 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#22 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#23 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#24 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Illuminate\\Container\\Container->call(Array)
#25 /home/rizal/Code/bio/vendor/symfony/console/Command/Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#26 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#27 /home/rizal/Code/bio/vendor/symfony/console/Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#28 /home/rizal/Code/bio/vendor/symfony/console/Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#29 /home/rizal/Code/bio/vendor/symfony/console/Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#30 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#31 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#32 /home/rizal/Code/bio/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#33 {main}',
                'failed_at' => '2018-01-08 10:53:05',
            ),
            24 => 
            array (
                'id' => 25,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Mail\\\\DynamicEmail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Mail\\\\SendQueuedMailable","command":"O:34:\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\":3:{s:8:\\"mailable\\";O:21:\\"App\\\\Mail\\\\DynamicEmail\\":20:{s:7:\\"subject\\";s:64:\\"Hello , Please Activate your BioStore account to start shopping!\\";s:8:\\"template\\";s:0:\\"\\";s:4:\\"from\\";a:0:{}s:2:\\"to\\";a:1:{i:0;a:2:{s:4:\\"name\\";N;s:7:\\"address\\";s:16:\\"bisa34@gmail.com\\";}}s:2:\\"cc\\";a:0:{}s:3:\\"bcc\\";a:0:{}s:7:\\"replyTo\\";a:0:{}s:11:\\"\\u0000*\\u0000markdown\\";N;s:4:\\"view\\";N;s:8:\\"textView\\";N;s:8:\\"viewData\\";a:0:{}s:11:\\"attachments\\";a:0:{}s:14:\\"rawAttachments\\";a:0:{}s:9:\\"callbacks\\";a:0:{}s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:5:\\"delay\\";N;s:7:\\"chained\\";a:0:{}}s:5:\\"tries\\";N;s:7:\\"timeout\\";N;}"}}',
            'exception' => 'ErrorException: DOMDocument::loadHTML(): Empty string supplied as input in /home/rizal/Code/bio/vendor/tijsverkoyen/css-to-inline-styles/src/CssToInlineStyles.php:113
Stack trace:
#0 [internal function]: Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(2, \'DOMDocument::lo...\', \'/home/rizal/Cod...\', 113, Array)
#1 /home/rizal/Code/bio/vendor/tijsverkoyen/css-to-inline-styles/src/CssToInlineStyles.php(113): DOMDocument->loadHTML(\'\')
#2 /home/rizal/Code/bio/vendor/tijsverkoyen/css-to-inline-styles/src/CssToInlineStyles.php(36): TijsVerkoyen\\CssToInlineStyles\\CssToInlineStyles->createDomDocumentFromHtml(\'\')
#3 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Mail/Markdown.php(64): TijsVerkoyen\\CssToInlineStyles\\CssToInlineStyles->convert(\'\', \'/* Base */\\n\\nbod...\')
#4 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(217): Illuminate\\Mail\\Markdown->render(\'emails.dynamic-...\', Array)
#5 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(189): Illuminate\\Mail\\Mailable->buildMarkdownView()
#6 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(119): Illuminate\\Mail\\Mailable->buildView()
#7 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Mail/SendQueuedMailable.php(52): Illuminate\\Mail\\Mailable->send(Object(Illuminate\\Mail\\Mailer))
#8 [internal function]: Illuminate\\Mail\\SendQueuedMailable->handle(Object(Illuminate\\Mail\\Mailer))
#9 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#10 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#11 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#12 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#13 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#14 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Mail\\SendQueuedMailable))
#15 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Mail\\SendQueuedMailable))
#16 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#17 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Mail\\SendQueuedMailable), false)
#18 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#19 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#20 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#21 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#22 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#23 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#24 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#25 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#26 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#27 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#28 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#29 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Illuminate\\Container\\Container->call(Array)
#30 /home/rizal/Code/bio/vendor/symfony/console/Command/Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#31 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#32 /home/rizal/Code/bio/vendor/symfony/console/Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#33 /home/rizal/Code/bio/vendor/symfony/console/Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#34 /home/rizal/Code/bio/vendor/symfony/console/Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#35 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#36 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#37 /home/rizal/Code/bio/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#38 {main}',
                'failed_at' => '2018-01-08 10:53:49',
            ),
            25 => 
            array (
                'id' => 26,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\Email\\\\ParseMail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:29:\\"App\\\\Listeners\\\\Email\\\\ParseMail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:25:\\"App\\\\Events\\\\Email\\\\SentMail\\":4:{s:8:\\"template\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:17:\\"App\\\\EmailTemplate\\";s:2:\\"id\\";i:1;s:10:\\"connection\\";s:5:\\"mysql\\";}s:4:\\"data\\";a:0:{}s:2:\\"to\\";s:16:\\"bisa41@gmail.com\\";s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
                'exception' => 'ErrorException: Undefined property: stdClass::$email_token in /home/rizal/Code/bio/app/Components/Email/Helpers/ButtonActivateAccountHelper.php:55
Stack trace:
#0 /home/rizal/Code/bio/app/Components/Email/Helpers/ButtonActivateAccountHelper.php(55): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(8, \'Undefined prope...\', \'/home/rizal/Cod...\', 55, Array)
#1 /home/rizal/Code/bio/app/Components/Email/Helpers/ButtonActivateAccountHelper.php(40): App\\Components\\Email\\Helpers\\ButtonActivateAccountHelper->parse()
#2 /home/rizal/Code/bio/app/Components/Facades/MailParser.php(62): App\\Components\\Email\\Helpers\\ButtonActivateAccountHelper->__construct(Array, \'# Hello, !\\r\\n\\r\\nT...\', Array)
#3 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Support/Facades/Facade.php(221): App\\Components\\Facades\\MailParser->parse(\'# Hello, [user_...\', Array)
#4 /home/rizal/Code/bio/app/Listeners/Email/ParseMail.php(34): Illuminate\\Support\\Facades\\Facade::__callStatic(\'parse\', Array)
#5 [internal function]: App\\Listeners\\Email\\ParseMail->handle(Object(App\\Events\\Email\\SentMail))
#6 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Events/CallQueuedListener.php(86): call_user_func_array(Array, Array)
#7 [internal function]: Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))
#8 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#9 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#10 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#11 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#12 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#13 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#14 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#15 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#16 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)
#17 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#18 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#19 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#20 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#21 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#22 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#23 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#24 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#25 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#26 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#27 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#28 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Illuminate\\Container\\Container->call(Array)
#29 /home/rizal/Code/bio/vendor/symfony/console/Command/Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#30 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#31 /home/rizal/Code/bio/vendor/symfony/console/Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#32 /home/rizal/Code/bio/vendor/symfony/console/Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#33 /home/rizal/Code/bio/vendor/symfony/console/Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#34 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#35 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#36 /home/rizal/Code/bio/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#37 {main}',
                'failed_at' => '2018-01-08 11:13:42',
            ),
            26 => 
            array (
                'id' => 27,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\Email\\\\ParseMail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:29:\\"App\\\\Listeners\\\\Email\\\\ParseMail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:25:\\"App\\\\Events\\\\Email\\\\SentMail\\":4:{s:8:\\"template\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:17:\\"App\\\\EmailTemplate\\";s:2:\\"id\\";i:1;s:10:\\"connection\\";s:5:\\"mysql\\";}s:4:\\"data\\";a:0:{}s:2:\\"to\\";s:16:\\"bisa42@gmail.com\\";s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
            'exception' => 'Symfony\\Component\\Debug\\Exception\\FatalThrowableError: Parse error: syntax error, unexpected \'return\' (T_RETURN) in /home/rizal/Code/bio/app/Components/Email/Helpers/ButtonActivateAccountHelper.php:48
Stack trace:
#0 /home/rizal/Code/bio/vendor/composer/ClassLoader.php(322): Composer\\Autoload\\includeFile(\'/home/rizal/Cod...\')
#1 [internal function]: Composer\\Autoload\\ClassLoader->loadClass(\'App\\\\Components\\\\...\')
#2 /home/rizal/Code/bio/app/Components/Facades/MailParser.php(62): spl_autoload_call(\'App\\\\Components\\\\...\')
#3 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Support/Facades/Facade.php(221): App\\Components\\Facades\\MailParser->parse(\'# Hello, [user_...\', Array)
#4 /home/rizal/Code/bio/app/Listeners/Email/ParseMail.php(34): Illuminate\\Support\\Facades\\Facade::__callStatic(\'parse\', Array)
#5 [internal function]: App\\Listeners\\Email\\ParseMail->handle(Object(App\\Events\\Email\\SentMail))
#6 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Events/CallQueuedListener.php(86): call_user_func_array(Array, Array)
#7 [internal function]: Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))
#8 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#9 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#10 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#11 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#12 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#13 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#14 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#15 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#16 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)
#17 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#18 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#19 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#20 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#21 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#22 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#23 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#24 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#25 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#26 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#27 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#28 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Illuminate\\Container\\Container->call(Array)
#29 /home/rizal/Code/bio/vendor/symfony/console/Command/Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#30 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#31 /home/rizal/Code/bio/vendor/symfony/console/Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#32 /home/rizal/Code/bio/vendor/symfony/console/Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#33 /home/rizal/Code/bio/vendor/symfony/console/Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#34 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#35 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#36 /home/rizal/Code/bio/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#37 {main}',
                'failed_at' => '2018-01-08 11:17:48',
            ),
            27 => 
            array (
                'id' => 28,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\Email\\\\ParseMail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:29:\\"App\\\\Listeners\\\\Email\\\\ParseMail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:25:\\"App\\\\Events\\\\Email\\\\SentMail\\":4:{s:8:\\"template\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:17:\\"App\\\\EmailTemplate\\";s:2:\\"id\\";i:1;s:10:\\"connection\\";s:5:\\"mysql\\";}s:4:\\"data\\";a:0:{}s:2:\\"to\\";s:16:\\"bisa43@gmail.com\\";s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
            'exception' => 'Symfony\\Component\\Debug\\Exception\\FatalThrowableError: Parse error: syntax error, unexpected \'return\' (T_RETURN) in /home/rizal/Code/bio/app/Components/Email/Helpers/ButtonActivateAccountHelper.php:53
Stack trace:
#0 /home/rizal/Code/bio/vendor/composer/ClassLoader.php(322): Composer\\Autoload\\includeFile(\'/home/rizal/Cod...\')
#1 [internal function]: Composer\\Autoload\\ClassLoader->loadClass(\'App\\\\Components\\\\...\')
#2 /home/rizal/Code/bio/app/Components/Facades/MailParser.php(62): spl_autoload_call(\'App\\\\Components\\\\...\')
#3 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Support/Facades/Facade.php(221): App\\Components\\Facades\\MailParser->parse(\'# Hello, [user_...\', Array)
#4 /home/rizal/Code/bio/app/Listeners/Email/ParseMail.php(34): Illuminate\\Support\\Facades\\Facade::__callStatic(\'parse\', Array)
#5 [internal function]: App\\Listeners\\Email\\ParseMail->handle(Object(App\\Events\\Email\\SentMail))
#6 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Events/CallQueuedListener.php(86): call_user_func_array(Array, Array)
#7 [internal function]: Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))
#8 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#9 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#10 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#11 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#12 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#13 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#14 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#15 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#16 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)
#17 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#18 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#19 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#20 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#21 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#22 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#23 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#24 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#25 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#26 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#27 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#28 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Illuminate\\Container\\Container->call(Array)
#29 /home/rizal/Code/bio/vendor/symfony/console/Command/Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#30 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#31 /home/rizal/Code/bio/vendor/symfony/console/Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#32 /home/rizal/Code/bio/vendor/symfony/console/Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#33 /home/rizal/Code/bio/vendor/symfony/console/Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#34 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#35 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#36 /home/rizal/Code/bio/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#37 {main}',
                'failed_at' => '2018-01-08 11:18:39',
            ),
            28 => 
            array (
                'id' => 29,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\Email\\\\ParseMail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:29:\\"App\\\\Listeners\\\\Email\\\\ParseMail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:25:\\"App\\\\Events\\\\Email\\\\SentMail\\":4:{s:8:\\"template\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:17:\\"App\\\\EmailTemplate\\";s:2:\\"id\\";i:1;s:10:\\"connection\\";s:5:\\"mysql\\";}s:4:\\"data\\";a:0:{}s:2:\\"to\\";s:16:\\"bisa44@gmail.com\\";s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
            'exception' => 'Symfony\\Component\\Debug\\Exception\\FatalThrowableError: Parse error: syntax error, unexpected \'public\' (T_PUBLIC), expecting \',\' or \';\' in /home/rizal/Code/bio/app/Mail/DynamicEmail.php:15
Stack trace:
#0 /home/rizal/Code/bio/vendor/composer/ClassLoader.php(322): Composer\\Autoload\\includeFile(\'/home/rizal/Cod...\')
#1 [internal function]: Composer\\Autoload\\ClassLoader->loadClass(\'App\\\\Mail\\\\Dynami...\')
#2 /home/rizal/Code/bio/app/Listeners/Email/ParseMail.php(36): spl_autoload_call(\'App\\\\Mail\\\\Dynami...\')
#3 [internal function]: App\\Listeners\\Email\\ParseMail->handle(Object(App\\Events\\Email\\SentMail))
#4 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Events/CallQueuedListener.php(86): call_user_func_array(Array, Array)
#5 [internal function]: Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))
#6 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#7 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#8 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#9 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#10 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#11 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#12 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#13 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#14 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)
#15 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#16 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#17 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#18 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#19 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#20 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#21 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#22 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#23 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#24 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#25 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#26 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Illuminate\\Container\\Container->call(Array)
#27 /home/rizal/Code/bio/vendor/symfony/console/Command/Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#28 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#29 /home/rizal/Code/bio/vendor/symfony/console/Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#30 /home/rizal/Code/bio/vendor/symfony/console/Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#31 /home/rizal/Code/bio/vendor/symfony/console/Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#32 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#33 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#34 /home/rizal/Code/bio/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#35 {main}',
                'failed_at' => '2018-01-08 11:19:20',
            ),
            29 => 
            array (
                'id' => 30,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\Email\\\\ParseMail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:29:\\"App\\\\Listeners\\\\Email\\\\ParseMail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:25:\\"App\\\\Events\\\\Email\\\\SentMail\\":4:{s:8:\\"template\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:17:\\"App\\\\EmailTemplate\\";s:2:\\"id\\";i:1;s:10:\\"connection\\";s:5:\\"mysql\\";}s:4:\\"data\\";a:0:{}s:2:\\"to\\";s:16:\\"bisa49@gmail.com\\";s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
            'exception' => 'Symfony\\Component\\Debug\\Exception\\FatalThrowableError: Call to undefined method stdClass::toArray() in /home/rizal/Code/bio/app/Listeners/Email/ParseMail.php:35
Stack trace:
#0 [internal function]: App\\Listeners\\Email\\ParseMail->handle(Object(App\\Events\\Email\\SentMail))
#1 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Events/CallQueuedListener.php(86): call_user_func_array(Array, Array)
#2 [internal function]: Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))
#3 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#4 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#5 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#6 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#7 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#8 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#9 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#10 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#11 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)
#12 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#13 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#14 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#15 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#16 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#17 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#18 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#19 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#20 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#21 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#22 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#23 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Illuminate\\Container\\Container->call(Array)
#24 /home/rizal/Code/bio/vendor/symfony/console/Command/Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#25 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#26 /home/rizal/Code/bio/vendor/symfony/console/Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#27 /home/rizal/Code/bio/vendor/symfony/console/Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#28 /home/rizal/Code/bio/vendor/symfony/console/Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#29 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#30 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#31 /home/rizal/Code/bio/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#32 {main}',
                'failed_at' => '2018-01-08 11:28:44',
            ),
            30 => 
            array (
                'id' => 31,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\Email\\\\ParseMail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:29:\\"App\\\\Listeners\\\\Email\\\\ParseMail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:25:\\"App\\\\Events\\\\Email\\\\SentMail\\":4:{s:8:\\"template\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:17:\\"App\\\\EmailTemplate\\";s:2:\\"id\\";i:1;s:10:\\"connection\\";s:5:\\"mysql\\";}s:4:\\"data\\";a:0:{}s:2:\\"to\\";s:16:\\"bisa50@gmail.com\\";s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
                'exception' => 'Symfony\\Component\\Debug\\Exception\\FatalThrowableError: Class \'App\\Listeners\\Email\\Auth\' not found in /home/rizal/Code/bio/app/Listeners/Email/ParseMail.php:35
Stack trace:
#0 [internal function]: App\\Listeners\\Email\\ParseMail->handle(Object(App\\Events\\Email\\SentMail))
#1 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Events/CallQueuedListener.php(86): call_user_func_array(Array, Array)
#2 [internal function]: Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))
#3 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#4 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#5 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#6 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#7 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#8 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#9 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#10 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#11 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)
#12 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#13 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#14 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#15 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#16 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#17 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#18 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#19 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#20 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#21 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#22 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#23 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Illuminate\\Container\\Container->call(Array)
#24 /home/rizal/Code/bio/vendor/symfony/console/Command/Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#25 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#26 /home/rizal/Code/bio/vendor/symfony/console/Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#27 /home/rizal/Code/bio/vendor/symfony/console/Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#28 /home/rizal/Code/bio/vendor/symfony/console/Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#29 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#30 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#31 /home/rizal/Code/bio/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#32 {main}',
                'failed_at' => '2018-01-08 11:32:28',
            ),
            31 => 
            array (
                'id' => 32,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\Email\\\\ParseMail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:29:\\"App\\\\Listeners\\\\Email\\\\ParseMail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:25:\\"App\\\\Events\\\\Email\\\\SentMail\\":4:{s:8:\\"template\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:17:\\"App\\\\EmailTemplate\\";s:2:\\"id\\";i:1;s:10:\\"connection\\";s:5:\\"mysql\\";}s:4:\\"data\\";a:1:{s:4:\\"user\\";O:8:\\"App\\\\User\\":27:{s:11:\\"\\u0000*\\u0000fillable\\";a:7:{i:0;s:4:\\"name\\";i:1;s:5:\\"email\\";i:2;s:8:\\"password\\";i:3;s:7:\\"role_id\\";i:4;s:15:\\"access_token_id\\";i:5;s:11:\\"email_token\\";i:6;s:8:\\"verified\\";}s:9:\\"\\u0000*\\u0000hidden\\";a:2:{i:0;s:8:\\"password\\";i:1;s:14:\\"remember_token\\";}s:10:\\"\\u0000*\\u0000guarded\\";a:0:{}s:13:\\"\\u0000*\\u0000connection\\";s:5:\\"mysql\\";s:8:\\"\\u0000*\\u0000table\\";s:5:\\"users\\";s:13:\\"\\u0000*\\u0000primaryKey\\";s:2:\\"id\\";s:10:\\"\\u0000*\\u0000keyType\\";s:3:\\"int\\";s:12:\\"incrementing\\";b:1;s:7:\\"\\u0000*\\u0000with\\";a:0:{}s:12:\\"\\u0000*\\u0000withCount\\";a:0:{}s:10:\\"\\u0000*\\u0000perPage\\";i:15;s:6:\\"exists\\";b:1;s:18:\\"wasRecentlyCreated\\";b:1;s:13:\\"\\u0000*\\u0000attributes\\";a:7:{s:4:\\"name\\";s:12:\\"Rizal Fakhri\\";s:5:\\"email\\";s:16:\\"bisa51@gmail.com\\";s:8:\\"password\\";s:60:\\"$2y$10$FumEZ5xQ25niW0Y1xGiRxuLrZZWlubRF081blMBHuxdtrBmoTMGdK\\";s:11:\\"email_token\\";s:216:\\"eyJpdiI6IldkSUVFWGU3aE1TM1l2dUY4Mm5wWkE9PSIsInZhbHVlIjoiWXJtQjVxRVVaT3ViY1dJQ3BhYituK1pPcFNyenNcL1NNU2wzZDU1RktKZTQ9IiwibWFjIjoiMjZjNzQwOWMzMzdhMDgzMDQ1MzJjNGU5MGY5ODBlZmJjZjhjYTkxMWRkYjllYmZlZTFiMTc5YTJkOTJiNmJlNCJ9\\";s:10:\\"updated_at\\";s:19:\\"2018-01-08 11:35:56\\";s:10:\\"created_at\\";s:19:\\"2018-01-08 11:35:56\\";s:2:\\"id\\";i:74;}s:11:\\"\\u0000*\\u0000original\\";a:7:{s:4:\\"name\\";s:12:\\"Rizal Fakhri\\";s:5:\\"email\\";s:16:\\"bisa51@gmail.com\\";s:8:\\"password\\";s:60:\\"$2y$10$FumEZ5xQ25niW0Y1xGiRxuLrZZWlubRF081blMBHuxdtrBmoTMGdK\\";s:11:\\"email_token\\";s:216:\\"eyJpdiI6IldkSUVFWGU3aE1TM1l2dUY4Mm5wWkE9PSIsInZhbHVlIjoiWXJtQjVxRVVaT3ViY1dJQ3BhYituK1pPcFNyenNcL1NNU2wzZDU1RktKZTQ9IiwibWFjIjoiMjZjNzQwOWMzMzdhMDgzMDQ1MzJjNGU5MGY5ODBlZmJjZjhjYTkxMWRkYjllYmZlZTFiMTc5YTJkOTJiNmJlNCJ9\\";s:10:\\"updated_at\\";s:19:\\"2018-01-08 11:35:56\\";s:10:\\"created_at\\";s:19:\\"2018-01-08 11:35:56\\";s:2:\\"id\\";i:74;}s:10:\\"\\u0000*\\u0000changes\\";a:0:{}s:8:\\"\\u0000*\\u0000casts\\";a:0:{}s:8:\\"\\u0000*\\u0000dates\\";a:0:{}s:13:\\"\\u0000*\\u0000dateFormat\\";N;s:10:\\"\\u0000*\\u0000appends\\";a:0:{}s:19:\\"\\u0000*\\u0000dispatchesEvents\\";a:0:{}s:14:\\"\\u0000*\\u0000observables\\";a:0:{}s:12:\\"\\u0000*\\u0000relations\\";a:0:{}s:10:\\"\\u0000*\\u0000touches\\";a:0:{}s:10:\\"timestamps\\";b:1;s:10:\\"\\u0000*\\u0000visible\\";a:0:{}s:20:\\"\\u0000*\\u0000rememberTokenName\\";s:14:\\"remember_token\\";}}s:2:\\"to\\";s:16:\\"bisa51@gmail.com\\";s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
                'exception' => 'ErrorException: Undefined variable: data in /home/rizal/Code/bio/app/Components/Email/Helpers/ButtonActivateAccountHelper.php:46
Stack trace:
#0 /home/rizal/Code/bio/app/Components/Email/Helpers/ButtonActivateAccountHelper.php(46): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(8, \'Undefined varia...\', \'/home/rizal/Cod...\', 46, Array)
#1 /home/rizal/Code/bio/app/Components/Email/Helpers/ButtonActivateAccountHelper.php(40): App\\Components\\Email\\Helpers\\ButtonActivateAccountHelper->parse()
#2 /home/rizal/Code/bio/app/Components/Facades/MailParser.php(62): App\\Components\\Email\\Helpers\\ButtonActivateAccountHelper->__construct(Array, \'# Hello, !\\r\\n\\r\\nT...\', Array)
#3 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Support/Facades/Facade.php(221): App\\Components\\Facades\\MailParser->parse(\'# Hello, [user_...\')
#4 /home/rizal/Code/bio/app/Listeners/Email/ParseMail.php(34): Illuminate\\Support\\Facades\\Facade::__callStatic(\'parse\', Array)
#5 [internal function]: App\\Listeners\\Email\\ParseMail->handle(Object(App\\Events\\Email\\SentMail))
#6 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Events/CallQueuedListener.php(86): call_user_func_array(Array, Array)
#7 [internal function]: Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))
#8 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#9 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#10 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#11 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#12 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#13 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#14 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#15 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#16 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)
#17 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#18 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#19 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#20 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#21 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#22 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#23 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#24 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#25 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#26 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#27 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#28 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Illuminate\\Container\\Container->call(Array)
#29 /home/rizal/Code/bio/vendor/symfony/console/Command/Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#30 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#31 /home/rizal/Code/bio/vendor/symfony/console/Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#32 /home/rizal/Code/bio/vendor/symfony/console/Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#33 /home/rizal/Code/bio/vendor/symfony/console/Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#34 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#35 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#36 /home/rizal/Code/bio/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#37 {main}',
                'failed_at' => '2018-01-08 11:35:59',
            ),
            32 => 
            array (
                'id' => 33,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\Email\\\\ParseMail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:29:\\"App\\\\Listeners\\\\Email\\\\ParseMail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:25:\\"App\\\\Events\\\\Email\\\\SentMail\\":4:{s:8:\\"template\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:17:\\"App\\\\EmailTemplate\\";s:2:\\"id\\";i:1;s:10:\\"connection\\";s:5:\\"mysql\\";}s:4:\\"data\\";a:1:{s:4:\\"user\\";O:8:\\"App\\\\User\\":27:{s:11:\\"\\u0000*\\u0000fillable\\";a:7:{i:0;s:4:\\"name\\";i:1;s:5:\\"email\\";i:2;s:8:\\"password\\";i:3;s:7:\\"role_id\\";i:4;s:15:\\"access_token_id\\";i:5;s:11:\\"email_token\\";i:6;s:8:\\"verified\\";}s:9:\\"\\u0000*\\u0000hidden\\";a:2:{i:0;s:8:\\"password\\";i:1;s:14:\\"remember_token\\";}s:10:\\"\\u0000*\\u0000guarded\\";a:0:{}s:13:\\"\\u0000*\\u0000connection\\";s:5:\\"mysql\\";s:8:\\"\\u0000*\\u0000table\\";s:5:\\"users\\";s:13:\\"\\u0000*\\u0000primaryKey\\";s:2:\\"id\\";s:10:\\"\\u0000*\\u0000keyType\\";s:3:\\"int\\";s:12:\\"incrementing\\";b:1;s:7:\\"\\u0000*\\u0000with\\";a:0:{}s:12:\\"\\u0000*\\u0000withCount\\";a:0:{}s:10:\\"\\u0000*\\u0000perPage\\";i:15;s:6:\\"exists\\";b:1;s:18:\\"wasRecentlyCreated\\";b:1;s:13:\\"\\u0000*\\u0000attributes\\";a:7:{s:4:\\"name\\";s:12:\\"Rizal Fakhri\\";s:5:\\"email\\";s:16:\\"bisa52@gmail.com\\";s:8:\\"password\\";s:60:\\"$2y$10$K8ph3NYby\\/yaXmdQVHbu6ekarxjlS9Zn3Vw2H6S.8C0lv\\/Y8HvR36\\";s:11:\\"email_token\\";s:216:\\"eyJpdiI6IkdadWc2OWlMZUNlZ1wvR1ozRE84aVdnPT0iLCJ2YWx1ZSI6InQyZjE3SGl6bEFuUVd4bEZjWmU2TzhsZ0hjd0ZqYXFINWY2d0JCVUd0WGs9IiwibWFjIjoiNjlhOGNmMzg0NDE5YjUwZTMzOWQ0MDU3ZmNhYTFhYTJmMTU0MGIzMWZlYWFmZjAxYzJlMTk1Nzc4NjQzMGUzYiJ9\\";s:10:\\"updated_at\\";s:19:\\"2018-01-08 11:36:54\\";s:10:\\"created_at\\";s:19:\\"2018-01-08 11:36:54\\";s:2:\\"id\\";i:75;}s:11:\\"\\u0000*\\u0000original\\";a:7:{s:4:\\"name\\";s:12:\\"Rizal Fakhri\\";s:5:\\"email\\";s:16:\\"bisa52@gmail.com\\";s:8:\\"password\\";s:60:\\"$2y$10$K8ph3NYby\\/yaXmdQVHbu6ekarxjlS9Zn3Vw2H6S.8C0lv\\/Y8HvR36\\";s:11:\\"email_token\\";s:216:\\"eyJpdiI6IkdadWc2OWlMZUNlZ1wvR1ozRE84aVdnPT0iLCJ2YWx1ZSI6InQyZjE3SGl6bEFuUVd4bEZjWmU2TzhsZ0hjd0ZqYXFINWY2d0JCVUd0WGs9IiwibWFjIjoiNjlhOGNmMzg0NDE5YjUwZTMzOWQ0MDU3ZmNhYTFhYTJmMTU0MGIzMWZlYWFmZjAxYzJlMTk1Nzc4NjQzMGUzYiJ9\\";s:10:\\"updated_at\\";s:19:\\"2018-01-08 11:36:54\\";s:10:\\"created_at\\";s:19:\\"2018-01-08 11:36:54\\";s:2:\\"id\\";i:75;}s:10:\\"\\u0000*\\u0000changes\\";a:0:{}s:8:\\"\\u0000*\\u0000casts\\";a:0:{}s:8:\\"\\u0000*\\u0000dates\\";a:0:{}s:13:\\"\\u0000*\\u0000dateFormat\\";N;s:10:\\"\\u0000*\\u0000appends\\";a:0:{}s:19:\\"\\u0000*\\u0000dispatchesEvents\\";a:0:{}s:14:\\"\\u0000*\\u0000observables\\";a:0:{}s:12:\\"\\u0000*\\u0000relations\\";a:0:{}s:10:\\"\\u0000*\\u0000touches\\";a:0:{}s:10:\\"timestamps\\";b:1;s:10:\\"\\u0000*\\u0000visible\\";a:0:{}s:20:\\"\\u0000*\\u0000rememberTokenName\\";s:14:\\"remember_token\\";}}s:2:\\"to\\";s:16:\\"bisa52@gmail.com\\";s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
                'exception' => 'ErrorException: Undefined index: user in /home/rizal/Code/bio/app/Components/Email/Helpers/ButtonActivateAccountHelper.php:46
Stack trace:
#0 /home/rizal/Code/bio/app/Components/Email/Helpers/ButtonActivateAccountHelper.php(46): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(8, \'Undefined index...\', \'/home/rizal/Cod...\', 46, Array)
#1 /home/rizal/Code/bio/app/Components/Email/Helpers/ButtonActivateAccountHelper.php(40): App\\Components\\Email\\Helpers\\ButtonActivateAccountHelper->parse()
#2 /home/rizal/Code/bio/app/Components/Facades/MailParser.php(62): App\\Components\\Email\\Helpers\\ButtonActivateAccountHelper->__construct(Array, \'# Hello, !\\r\\n\\r\\nT...\', Array)
#3 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Support/Facades/Facade.php(221): App\\Components\\Facades\\MailParser->parse(\'# Hello, [user_...\')
#4 /home/rizal/Code/bio/app/Listeners/Email/ParseMail.php(34): Illuminate\\Support\\Facades\\Facade::__callStatic(\'parse\', Array)
#5 [internal function]: App\\Listeners\\Email\\ParseMail->handle(Object(App\\Events\\Email\\SentMail))
#6 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Events/CallQueuedListener.php(86): call_user_func_array(Array, Array)
#7 [internal function]: Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))
#8 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#9 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#10 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#11 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#12 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#13 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#14 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#15 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#16 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)
#17 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#18 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#19 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#20 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#21 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#22 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#23 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#24 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#25 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#26 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#27 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#28 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Illuminate\\Container\\Container->call(Array)
#29 /home/rizal/Code/bio/vendor/symfony/console/Command/Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#30 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#31 /home/rizal/Code/bio/vendor/symfony/console/Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#32 /home/rizal/Code/bio/vendor/symfony/console/Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#33 /home/rizal/Code/bio/vendor/symfony/console/Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#34 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#35 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#36 /home/rizal/Code/bio/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#37 {main}',
                'failed_at' => '2018-01-08 11:36:57',
            ),
            33 => 
            array (
                'id' => 34,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\Email\\\\ParseMail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:29:\\"App\\\\Listeners\\\\Email\\\\ParseMail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:25:\\"App\\\\Events\\\\Email\\\\SentMail\\":4:{s:8:\\"template\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:17:\\"App\\\\EmailTemplate\\";s:2:\\"id\\";i:1;s:10:\\"connection\\";s:5:\\"mysql\\";}s:4:\\"data\\";a:0:{}s:2:\\"to\\";s:16:\\"bisa60@gmail.com\\";s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
                'exception' => 'ErrorException: Undefined property: App\\Events\\Email\\SentMail::$user in /home/rizal/Code/bio/app/Listeners/Email/ParseMail.php:33
Stack trace:
#0 /home/rizal/Code/bio/app/Listeners/Email/ParseMail.php(33): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(8, \'Undefined prope...\', \'/home/rizal/Cod...\', 33, Array)
#1 [internal function]: App\\Listeners\\Email\\ParseMail->handle(Object(App\\Events\\Email\\SentMail))
#2 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Events/CallQueuedListener.php(86): call_user_func_array(Array, Array)
#3 [internal function]: Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))
#4 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#5 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#6 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#7 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#8 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#9 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#10 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#11 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#12 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)
#13 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#14 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#15 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#16 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#17 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#18 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#19 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#20 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#21 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#22 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#23 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#24 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Illuminate\\Container\\Container->call(Array)
#25 /home/rizal/Code/bio/vendor/symfony/console/Command/Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#26 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#27 /home/rizal/Code/bio/vendor/symfony/console/Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#28 /home/rizal/Code/bio/vendor/symfony/console/Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#29 /home/rizal/Code/bio/vendor/symfony/console/Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#30 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#31 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#32 /home/rizal/Code/bio/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#33 {main}',
                'failed_at' => '2018-01-08 11:51:10',
            ),
            34 => 
            array (
                'id' => 35,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\Email\\\\ParseMail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:29:\\"App\\\\Listeners\\\\Email\\\\ParseMail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:25:\\"App\\\\Events\\\\Email\\\\SentMail\\":5:{s:8:\\"template\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:17:\\"App\\\\EmailTemplate\\";s:2:\\"id\\";i:1;s:10:\\"connection\\";s:5:\\"mysql\\";}s:4:\\"data\\";a:0:{}s:2:\\"to\\";s:16:\\"bisa61@gmail.com\\";s:4:\\"user\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";i:81;s:10:\\"connection\\";s:5:\\"mysql\\";}s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
                'exception' => 'ErrorException: Undefined variable: data in /home/rizal/Code/bio/app/Listeners/Email/ParseMail.php:36
Stack trace:
#0 /home/rizal/Code/bio/app/Listeners/Email/ParseMail.php(36): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(8, \'Undefined varia...\', \'/home/rizal/Cod...\', 36, Array)
#1 [internal function]: App\\Listeners\\Email\\ParseMail->handle(Object(App\\Events\\Email\\SentMail))
#2 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Events/CallQueuedListener.php(86): call_user_func_array(Array, Array)
#3 [internal function]: Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))
#4 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#5 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#6 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#7 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#8 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#9 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#10 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#11 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#12 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)
#13 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#14 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#15 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#16 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#17 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#18 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#19 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#20 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#21 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#22 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#23 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#24 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Illuminate\\Container\\Container->call(Array)
#25 /home/rizal/Code/bio/vendor/symfony/console/Command/Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#26 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#27 /home/rizal/Code/bio/vendor/symfony/console/Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#28 /home/rizal/Code/bio/vendor/symfony/console/Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#29 /home/rizal/Code/bio/vendor/symfony/console/Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#30 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#31 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#32 /home/rizal/Code/bio/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#33 {main}',
                'failed_at' => '2018-01-08 11:51:56',
            ),
            35 => 
            array (
                'id' => 36,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\Email\\\\ParseMail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:29:\\"App\\\\Listeners\\\\Email\\\\ParseMail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:25:\\"App\\\\Events\\\\Email\\\\SentMail\\":5:{s:8:\\"template\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:17:\\"App\\\\EmailTemplate\\";s:2:\\"id\\";i:1;s:10:\\"connection\\";s:5:\\"mysql\\";}s:4:\\"data\\";a:0:{}s:2:\\"to\\";s:16:\\"bisa62@gmail.com\\";s:4:\\"user\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";i:82;s:10:\\"connection\\";s:5:\\"mysql\\";}s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
                'exception' => 'ErrorException: Trying to get property of non-object in /home/rizal/Code/bio/app/Components/Email/Helpers/UserNameHelper.php:46
Stack trace:
#0 /home/rizal/Code/bio/app/Components/Email/Helpers/UserNameHelper.php(46): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(8, \'Trying to get p...\', \'/home/rizal/Cod...\', 46, Array)
#1 /home/rizal/Code/bio/app/Components/Email/Helpers/UserNameHelper.php(40): App\\Components\\Email\\Helpers\\UserNameHelper->parse()
#2 /home/rizal/Code/bio/app/Components/Facades/MailParser.php(67): App\\Components\\Email\\Helpers\\UserNameHelper->__construct(\'[user_name]\', \'Hello [user_nam...\', Object(App\\User))
#3 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Support/Facades/Facade.php(221): App\\Components\\Facades\\MailParser->parse(\'Hello [user_nam...\', Object(App\\User))
#4 /home/rizal/Code/bio/app/Listeners/Email/ParseMail.php(41): Illuminate\\Support\\Facades\\Facade::__callStatic(\'parse\', Array)
#5 [internal function]: App\\Listeners\\Email\\ParseMail->handle(Object(App\\Events\\Email\\SentMail))
#6 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Events/CallQueuedListener.php(86): call_user_func_array(Array, Array)
#7 [internal function]: Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))
#8 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#9 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#10 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#11 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#12 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#13 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#14 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#15 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#16 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)
#17 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#18 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#19 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#20 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#21 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#22 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#23 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#24 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#25 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#26 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#27 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#28 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Illuminate\\Container\\Container->call(Array)
#29 /home/rizal/Code/bio/vendor/symfony/console/Command/Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#30 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#31 /home/rizal/Code/bio/vendor/symfony/console/Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#32 /home/rizal/Code/bio/vendor/symfony/console/Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#33 /home/rizal/Code/bio/vendor/symfony/console/Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#34 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#35 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#36 /home/rizal/Code/bio/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#37 {main}',
                'failed_at' => '2018-01-08 11:52:52',
            ),
            36 => 
            array (
                'id' => 37,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\Email\\\\ParseMail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:29:\\"App\\\\Listeners\\\\Email\\\\ParseMail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:25:\\"App\\\\Events\\\\Email\\\\SentMail\\":5:{s:8:\\"template\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:17:\\"App\\\\EmailTemplate\\";s:2:\\"id\\";i:1;s:10:\\"connection\\";s:5:\\"mysql\\";}s:4:\\"data\\";a:0:{}s:2:\\"to\\";s:16:\\"bisa63@gmail.com\\";s:4:\\"user\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";i:83;s:10:\\"connection\\";s:5:\\"mysql\\";}s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
                'exception' => 'ErrorException: Trying to get property of non-object in /home/rizal/Code/bio/app/Components/Email/Helpers/UserNameHelper.php:46
Stack trace:
#0 /home/rizal/Code/bio/app/Components/Email/Helpers/UserNameHelper.php(46): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(8, \'Trying to get p...\', \'/home/rizal/Cod...\', 46, Array)
#1 /home/rizal/Code/bio/app/Components/Email/Helpers/UserNameHelper.php(40): App\\Components\\Email\\Helpers\\UserNameHelper->parse()
#2 /home/rizal/Code/bio/app/Components/Facades/MailParser.php(67): App\\Components\\Email\\Helpers\\UserNameHelper->__construct(\'[user_name]\', \'Hello [user_nam...\', Object(App\\User))
#3 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Support/Facades/Facade.php(221): App\\Components\\Facades\\MailParser->parse(\'Hello [user_nam...\', Object(App\\User))
#4 /home/rizal/Code/bio/app/Listeners/Email/ParseMail.php(43): Illuminate\\Support\\Facades\\Facade::__callStatic(\'parse\', Array)
#5 [internal function]: App\\Listeners\\Email\\ParseMail->handle(Object(App\\Events\\Email\\SentMail))
#6 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Events/CallQueuedListener.php(86): call_user_func_array(Array, Array)
#7 [internal function]: Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))
#8 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#9 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#10 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#11 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#12 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#13 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#14 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#15 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#16 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)
#17 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#18 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#19 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#20 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#21 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#22 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#23 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#24 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#25 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#26 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#27 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#28 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Illuminate\\Container\\Container->call(Array)
#29 /home/rizal/Code/bio/vendor/symfony/console/Command/Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#30 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#31 /home/rizal/Code/bio/vendor/symfony/console/Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#32 /home/rizal/Code/bio/vendor/symfony/console/Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#33 /home/rizal/Code/bio/vendor/symfony/console/Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#34 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#35 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#36 /home/rizal/Code/bio/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#37 {main}',
                'failed_at' => '2018-01-08 11:55:30',
            ),
            37 => 
            array (
                'id' => 38,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\Email\\\\ParseMail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:29:\\"App\\\\Listeners\\\\Email\\\\ParseMail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:25:\\"App\\\\Events\\\\Email\\\\SentMail\\":5:{s:8:\\"template\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:17:\\"App\\\\EmailTemplate\\";s:2:\\"id\\";i:1;s:10:\\"connection\\";s:5:\\"mysql\\";}s:4:\\"data\\";a:0:{}s:2:\\"to\\";s:15:\\"rizal@gmail.com\\";s:4:\\"user\\";O:8:\\"stdClass\\":1:{s:5:\\"login\\";b:0;}s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
            'exception' => 'Symfony\\Component\\Debug\\Exception\\FatalThrowableError: Call to undefined method stdClass::toArray() in /home/rizal/Code/bio/app/Listeners/Email/ParseMail.php:40
Stack trace:
#0 [internal function]: App\\Listeners\\Email\\ParseMail->handle(Object(App\\Events\\Email\\SentMail))
#1 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Events/CallQueuedListener.php(86): call_user_func_array(Array, Array)
#2 [internal function]: Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))
#3 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#4 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#5 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#6 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#7 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#8 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#9 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#10 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#11 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)
#12 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#13 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#14 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#15 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#16 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#17 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#18 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#19 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#20 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#21 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#22 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#23 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Illuminate\\Container\\Container->call(Array)
#24 /home/rizal/Code/bio/vendor/symfony/console/Command/Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#25 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#26 /home/rizal/Code/bio/vendor/symfony/console/Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#27 /home/rizal/Code/bio/vendor/symfony/console/Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#28 /home/rizal/Code/bio/vendor/symfony/console/Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#29 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#30 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#31 /home/rizal/Code/bio/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#32 {main}',
                'failed_at' => '2018-01-08 12:02:53',
            ),
            38 => 
            array (
                'id' => 39,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\Email\\\\ParseMail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:29:\\"App\\\\Listeners\\\\Email\\\\ParseMail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:25:\\"App\\\\Events\\\\Email\\\\SentMail\\":5:{s:8:\\"template\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:17:\\"App\\\\EmailTemplate\\";s:2:\\"id\\";i:1;s:10:\\"connection\\";s:5:\\"mysql\\";}s:4:\\"data\\";a:0:{}s:2:\\"to\\";s:16:\\"bisa64@gmail.com\\";s:4:\\"user\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";i:84;s:10:\\"connection\\";s:5:\\"mysql\\";}s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
                'exception' => 'ErrorException: Trying to get property of non-object in /home/rizal/Code/bio/app/Components/Email/Helpers/ButtonActivateAccountHelper.php:46
Stack trace:
#0 /home/rizal/Code/bio/app/Components/Email/Helpers/ButtonActivateAccountHelper.php(46): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(8, \'Trying to get p...\', \'/home/rizal/Cod...\', 46, Array)
#1 /home/rizal/Code/bio/app/Components/Email/Helpers/ButtonActivateAccountHelper.php(40): App\\Components\\Email\\Helpers\\ButtonActivateAccountHelper->parse()
#2 /home/rizal/Code/bio/app/Components/Facades/MailParser.php(62): App\\Components\\Email\\Helpers\\ButtonActivateAccountHelper->__construct(Array, \'# Hello, !\\r\\n\\r\\nT...\', Object(App\\User))
#3 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Support/Facades/Facade.php(221): App\\Components\\Facades\\MailParser->parse(\'# Hello, [user_...\', Object(App\\User))
#4 /home/rizal/Code/bio/app/Listeners/Email/ParseMail.php(43): Illuminate\\Support\\Facades\\Facade::__callStatic(\'parse\', Array)
#5 [internal function]: App\\Listeners\\Email\\ParseMail->handle(Object(App\\Events\\Email\\SentMail))
#6 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Events/CallQueuedListener.php(86): call_user_func_array(Array, Array)
#7 [internal function]: Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))
#8 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#9 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#10 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#11 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#12 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#13 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#14 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#15 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#16 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)
#17 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#18 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#19 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#20 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#21 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#22 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#23 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#24 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#25 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#26 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#27 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#28 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Illuminate\\Container\\Container->call(Array)
#29 /home/rizal/Code/bio/vendor/symfony/console/Command/Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#30 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#31 /home/rizal/Code/bio/vendor/symfony/console/Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#32 /home/rizal/Code/bio/vendor/symfony/console/Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#33 /home/rizal/Code/bio/vendor/symfony/console/Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#34 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#35 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#36 /home/rizal/Code/bio/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#37 {main}',
                'failed_at' => '2018-01-08 12:04:44',
            ),
            39 => 
            array (
                'id' => 40,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\Email\\\\ParseMail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:29:\\"App\\\\Listeners\\\\Email\\\\ParseMail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:25:\\"App\\\\Events\\\\Email\\\\SentMail\\":5:{s:8:\\"template\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:17:\\"App\\\\EmailTemplate\\";s:2:\\"id\\";i:1;s:10:\\"connection\\";s:5:\\"mysql\\";}s:4:\\"data\\";a:0:{}s:2:\\"to\\";s:16:\\"bisa69@gmail.com\\";s:4:\\"user\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";i:86;s:10:\\"connection\\";s:5:\\"mysql\\";}s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
                'exception' => 'ErrorException: Illegal string offset \'helper\' in /home/rizal/Code/bio/app/Components/Email/Helpers/RemoveHelper.php:46
Stack trace:
#0 /home/rizal/Code/bio/app/Components/Email/Helpers/RemoveHelper.php(46): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(2, \'Illegal string ...\', \'/home/rizal/Cod...\', 46, Array)
#1 /home/rizal/Code/bio/app/Components/Email/Helpers/RemoveHelper.php(40): App\\Components\\Email\\Helpers\\RemoveHelper->parse()
#2 /home/rizal/Code/bio/app/Components/Email/Helpers/ButtonActivateAccountHelper.php(48): App\\Components\\Email\\Helpers\\RemoveHelper->__construct(\'[button url=act...\', \'# Hello, !\\r\\n\\r\\nT...\', Object(App\\User))
#3 /home/rizal/Code/bio/app/Components/Email/Helpers/ButtonActivateAccountHelper.php(40): App\\Components\\Email\\Helpers\\ButtonActivateAccountHelper->parse()
#4 /home/rizal/Code/bio/app/Components/Facades/MailParser.php(62): App\\Components\\Email\\Helpers\\ButtonActivateAccountHelper->__construct(Array, \'# Hello, !\\r\\n\\r\\nT...\', Object(App\\User))
#5 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Support/Facades/Facade.php(221): App\\Components\\Facades\\MailParser->parse(\'# Hello, [user_...\', Object(App\\User))
#6 /home/rizal/Code/bio/app/Listeners/Email/ParseMail.php(43): Illuminate\\Support\\Facades\\Facade::__callStatic(\'parse\', Array)
#7 [internal function]: App\\Listeners\\Email\\ParseMail->handle(Object(App\\Events\\Email\\SentMail))
#8 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Events/CallQueuedListener.php(86): call_user_func_array(Array, Array)
#9 [internal function]: Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))
#10 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#11 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#12 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#13 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#14 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#15 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#16 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#17 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#18 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)
#19 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#20 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#21 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#22 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#23 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#24 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#25 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#26 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#27 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#28 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#29 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#30 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Illuminate\\Container\\Container->call(Array)
#31 /home/rizal/Code/bio/vendor/symfony/console/Command/Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#32 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#33 /home/rizal/Code/bio/vendor/symfony/console/Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#34 /home/rizal/Code/bio/vendor/symfony/console/Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#35 /home/rizal/Code/bio/vendor/symfony/console/Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#36 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#37 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#38 /home/rizal/Code/bio/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#39 {main}',
                'failed_at' => '2018-01-08 12:36:41',
            ),
            40 => 
            array (
                'id' => 41,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\Email\\\\ParseMail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:29:\\"App\\\\Listeners\\\\Email\\\\ParseMail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:25:\\"App\\\\Events\\\\Email\\\\SentMail\\":5:{s:8:\\"template\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:17:\\"App\\\\EmailTemplate\\";s:2:\\"id\\";i:1;s:10:\\"connection\\";s:5:\\"mysql\\";}s:4:\\"data\\";a:0:{}s:2:\\"to\\";s:16:\\"bisa76@gmail.com\\";s:4:\\"user\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";i:91;s:10:\\"connection\\";s:5:\\"mysql\\";}s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
                'exception' => 'ErrorException: Undefined index: data in /home/rizal/Code/bio/app/Listeners/Email/ParseMail.php:32
Stack trace:
#0 /home/rizal/Code/bio/app/Listeners/Email/ParseMail.php(32): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(8, \'Undefined index...\', \'/home/rizal/Cod...\', 32, Array)
#1 [internal function]: App\\Listeners\\Email\\ParseMail->handle(Object(App\\Events\\Email\\SentMail))
#2 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Events/CallQueuedListener.php(86): call_user_func_array(Array, Array)
#3 [internal function]: Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))
#4 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#5 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#6 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#7 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#8 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#9 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#10 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#11 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#12 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)
#13 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#14 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#15 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#16 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#17 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#18 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#19 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#20 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#21 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#22 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#23 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#24 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Illuminate\\Container\\Container->call(Array)
#25 /home/rizal/Code/bio/vendor/symfony/console/Command/Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#26 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#27 /home/rizal/Code/bio/vendor/symfony/console/Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#28 /home/rizal/Code/bio/vendor/symfony/console/Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#29 /home/rizal/Code/bio/vendor/symfony/console/Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#30 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#31 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#32 /home/rizal/Code/bio/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#33 {main}',
                'failed_at' => '2018-01-08 12:49:17',
            ),
            41 => 
            array (
                'id' => 42,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\Email\\\\ParseMail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:29:\\"App\\\\Listeners\\\\Email\\\\ParseMail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:25:\\"App\\\\Events\\\\Email\\\\SentMail\\":5:{s:8:\\"template\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:17:\\"App\\\\EmailTemplate\\";s:2:\\"id\\";i:1;s:10:\\"connection\\";s:5:\\"mysql\\";}s:4:\\"data\\";a:0:{}s:2:\\"to\\";s:16:\\"bisa80@gmail.com\\";s:4:\\"user\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";i:97;s:10:\\"connection\\";s:5:\\"mysql\\";}s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
                'exception' => 'InvalidArgumentException: View [emails.dynamic->email] not found. in /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/FileViewFinder.php:137
Stack trace:
#0 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/FileViewFinder.php(79): Illuminate\\View\\FileViewFinder->findInPaths(\'emails.dynamic-...\', Array)
#1 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/Factory.php(128): Illuminate\\View\\FileViewFinder->find(\'emails.dynamic-...\')
#2 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/helpers.php(971): Illuminate\\View\\Factory->make(\'emails.dynamic-...\', Array, Array)
#3 /home/rizal/Code/bio/app/Listeners/Email/ParseMail.php(43): view(\'emails.dynamic-...\')
#4 [internal function]: App\\Listeners\\Email\\ParseMail->handle(Object(App\\Events\\Email\\SentMail))
#5 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Events/CallQueuedListener.php(86): call_user_func_array(Array, Array)
#6 [internal function]: Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))
#7 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#8 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#9 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#10 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#11 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#12 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#13 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#14 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#15 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)
#16 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#17 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#18 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#19 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#20 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#21 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#22 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#23 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#24 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#25 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#26 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#27 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Illuminate\\Container\\Container->call(Array)
#28 /home/rizal/Code/bio/vendor/symfony/console/Command/Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#29 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#30 /home/rizal/Code/bio/vendor/symfony/console/Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#31 /home/rizal/Code/bio/vendor/symfony/console/Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#32 /home/rizal/Code/bio/vendor/symfony/console/Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#33 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#34 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#35 /home/rizal/Code/bio/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#36 {main}',
                'failed_at' => '2018-01-08 13:21:27',
            ),
            42 => 
            array (
                'id' => 43,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\Email\\\\ParseMail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:29:\\"App\\\\Listeners\\\\Email\\\\ParseMail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:25:\\"App\\\\Events\\\\Email\\\\SentMail\\":5:{s:8:\\"template\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:17:\\"App\\\\EmailTemplate\\";s:2:\\"id\\";i:1;s:10:\\"connection\\";s:5:\\"mysql\\";}s:4:\\"data\\";a:0:{}s:2:\\"to\\";s:16:\\"bisa81@gmail.com\\";s:4:\\"user\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";i:98;s:10:\\"connection\\";s:5:\\"mysql\\";}s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
                'exception' => 'ErrorException: Undefined variable: email_template in /home/rizal/Code/bio/storage/framework/views/412dea7bec473ee5d1feb8ef53d2add0ae648ddb.php:3
Stack trace:
#0 /home/rizal/Code/bio/storage/framework/views/412dea7bec473ee5d1feb8ef53d2add0ae648ddb.php(3): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(8, \'Undefined varia...\', \'/home/rizal/Cod...\', 3, Array)
#1 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/Engines/PhpEngine.php(43): include(\'/home/rizal/Cod...\')
#2 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/Engines/CompilerEngine.php(59): Illuminate\\View\\Engines\\PhpEngine->evaluatePath(\'/home/rizal/Cod...\', Array)
#3 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/View.php(137): Illuminate\\View\\Engines\\CompilerEngine->get(\'/home/rizal/Cod...\', Array)
#4 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/View.php(120): Illuminate\\View\\View->getContents()
#5 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/View.php(85): Illuminate\\View\\View->renderContents()
#6 /home/rizal/Code/bio/app/Listeners/Email/ParseMail.php(43): Illuminate\\View\\View->render()
#7 [internal function]: App\\Listeners\\Email\\ParseMail->handle(Object(App\\Events\\Email\\SentMail))
#8 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Events/CallQueuedListener.php(86): call_user_func_array(Array, Array)
#9 [internal function]: Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))
#10 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#11 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#12 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#13 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#14 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#15 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#16 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#17 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#18 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)
#19 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#20 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#21 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#22 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#23 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#24 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#25 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#26 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#27 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#28 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#29 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#30 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Illuminate\\Container\\Container->call(Array)
#31 /home/rizal/Code/bio/vendor/symfony/console/Command/Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#32 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#33 /home/rizal/Code/bio/vendor/symfony/console/Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#34 /home/rizal/Code/bio/vendor/symfony/console/Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#35 /home/rizal/Code/bio/vendor/symfony/console/Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#36 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#37 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#38 /home/rizal/Code/bio/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#39 {main}

Next ErrorException: Undefined variable: email_template (View: /home/rizal/Code/bio/resources/views/emails/dynamic-email.blade.php) in /home/rizal/Code/bio/storage/framework/views/412dea7bec473ee5d1feb8ef53d2add0ae648ddb.php:3
Stack trace:
#0 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/Engines/PhpEngine.php(45): Illuminate\\View\\Engines\\CompilerEngine->handleViewException(Object(ErrorException), 0)
#1 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/Engines/CompilerEngine.php(59): Illuminate\\View\\Engines\\PhpEngine->evaluatePath(\'/home/rizal/Cod...\', Array)
#2 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/View.php(137): Illuminate\\View\\Engines\\CompilerEngine->get(\'/home/rizal/Cod...\', Array)
#3 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/View.php(120): Illuminate\\View\\View->getContents()
#4 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/View.php(85): Illuminate\\View\\View->renderContents()
#5 /home/rizal/Code/bio/app/Listeners/Email/ParseMail.php(43): Illuminate\\View\\View->render()
#6 [internal function]: App\\Listeners\\Email\\ParseMail->handle(Object(App\\Events\\Email\\SentMail))
#7 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Events/CallQueuedListener.php(86): call_user_func_array(Array, Array)
#8 [internal function]: Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))
#9 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#10 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#11 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#12 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#13 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#14 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#15 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#16 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#17 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)
#18 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#19 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#20 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#21 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#22 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#23 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#24 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#25 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#26 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#27 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#28 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#29 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Illuminate\\Container\\Container->call(Array)
#30 /home/rizal/Code/bio/vendor/symfony/console/Command/Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#31 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#32 /home/rizal/Code/bio/vendor/symfony/console/Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#33 /home/rizal/Code/bio/vendor/symfony/console/Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#34 /home/rizal/Code/bio/vendor/symfony/console/Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#35 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#36 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#37 /home/rizal/Code/bio/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#38 {main}',
                'failed_at' => '2018-01-08 13:22:00',
            ),
            43 => 
            array (
                'id' => 44,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\Email\\\\ParseMail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:29:\\"App\\\\Listeners\\\\Email\\\\ParseMail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:25:\\"App\\\\Events\\\\Email\\\\SentMail\\":5:{s:8:\\"template\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:17:\\"App\\\\EmailTemplate\\";s:2:\\"id\\";i:1;s:10:\\"connection\\";s:5:\\"mysql\\";}s:4:\\"data\\";a:0:{}s:2:\\"to\\";s:16:\\"bisa82@gmail.com\\";s:4:\\"user\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";i:99;s:10:\\"connection\\";s:5:\\"mysql\\";}s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
                'exception' => 'InvalidArgumentException: No hint path defined for [mail]. in /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/FileViewFinder.php:112
Stack trace:
#0 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/FileViewFinder.php(90): Illuminate\\View\\FileViewFinder->parseNamespaceSegments(\'mail::message\')
#1 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/FileViewFinder.php(76): Illuminate\\View\\FileViewFinder->findNamespacedView(\'mail::message\')
#2 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/Factory.php(128): Illuminate\\View\\FileViewFinder->find(\'mail::message\')
#3 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/Concerns/ManagesComponents.php(64): Illuminate\\View\\Factory->make(\'mail::message\', Array)
#4 /home/rizal/Code/bio/storage/framework/views/412dea7bec473ee5d1feb8ef53d2add0ae648ddb.php(6): Illuminate\\View\\Factory->renderComponent()
#5 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/Engines/PhpEngine.php(43): include(\'/home/rizal/Cod...\')
#6 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/Engines/CompilerEngine.php(59): Illuminate\\View\\Engines\\PhpEngine->evaluatePath(\'/home/rizal/Cod...\', Array)
#7 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/View.php(137): Illuminate\\View\\Engines\\CompilerEngine->get(\'/home/rizal/Cod...\', Array)
#8 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/View.php(120): Illuminate\\View\\View->getContents()
#9 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/View.php(85): Illuminate\\View\\View->renderContents()
#10 /home/rizal/Code/bio/app/Listeners/Email/ParseMail.php(43): Illuminate\\View\\View->render()
#11 [internal function]: App\\Listeners\\Email\\ParseMail->handle(Object(App\\Events\\Email\\SentMail))
#12 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Events/CallQueuedListener.php(86): call_user_func_array(Array, Array)
#13 [internal function]: Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))
#14 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#15 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#16 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#17 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#18 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#19 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#20 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#21 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#22 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)
#23 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#24 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#25 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#26 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#27 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#28 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#29 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#30 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#31 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#32 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#33 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#34 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Illuminate\\Container\\Container->call(Array)
#35 /home/rizal/Code/bio/vendor/symfony/console/Command/Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#36 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#37 /home/rizal/Code/bio/vendor/symfony/console/Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#38 /home/rizal/Code/bio/vendor/symfony/console/Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#39 /home/rizal/Code/bio/vendor/symfony/console/Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#40 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#41 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#42 /home/rizal/Code/bio/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#43 {main}

Next ErrorException: No hint path defined for [mail]. (View: /home/rizal/Code/bio/resources/views/emails/dynamic-email.blade.php) in /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/FileViewFinder.php:112
Stack trace:
#0 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/Engines/PhpEngine.php(45): Illuminate\\View\\Engines\\CompilerEngine->handleViewException(Object(InvalidArgumentException), 0)
#1 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/Engines/CompilerEngine.php(59): Illuminate\\View\\Engines\\PhpEngine->evaluatePath(\'/home/rizal/Cod...\', Array)
#2 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/View.php(137): Illuminate\\View\\Engines\\CompilerEngine->get(\'/home/rizal/Cod...\', Array)
#3 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/View.php(120): Illuminate\\View\\View->getContents()
#4 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/View.php(85): Illuminate\\View\\View->renderContents()
#5 /home/rizal/Code/bio/app/Listeners/Email/ParseMail.php(43): Illuminate\\View\\View->render()
#6 [internal function]: App\\Listeners\\Email\\ParseMail->handle(Object(App\\Events\\Email\\SentMail))
#7 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Events/CallQueuedListener.php(86): call_user_func_array(Array, Array)
#8 [internal function]: Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))
#9 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#10 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#11 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#12 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#13 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#14 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#15 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#16 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#17 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)
#18 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#19 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#20 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#21 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#22 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#23 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#24 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#25 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#26 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#27 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#28 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#29 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Illuminate\\Container\\Container->call(Array)
#30 /home/rizal/Code/bio/vendor/symfony/console/Command/Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#31 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#32 /home/rizal/Code/bio/vendor/symfony/console/Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#33 /home/rizal/Code/bio/vendor/symfony/console/Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#34 /home/rizal/Code/bio/vendor/symfony/console/Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#35 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#36 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#37 /home/rizal/Code/bio/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#38 {main}',
                'failed_at' => '2018-01-08 13:22:41',
            ),
            44 => 
            array (
                'id' => 45,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Listeners\\\\Email\\\\ParseMail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Events\\\\CallQueuedListener","command":"O:36:\\"Illuminate\\\\Events\\\\CallQueuedListener\\":7:{s:5:\\"class\\";s:29:\\"App\\\\Listeners\\\\Email\\\\ParseMail\\";s:6:\\"method\\";s:6:\\"handle\\";s:4:\\"data\\";a:1:{i:0;O:25:\\"App\\\\Events\\\\Email\\\\SentMail\\":5:{s:8:\\"template\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:17:\\"App\\\\EmailTemplate\\";s:2:\\"id\\";i:1;s:10:\\"connection\\";s:5:\\"mysql\\";}s:4:\\"data\\";a:0:{}s:2:\\"to\\";s:16:\\"bisa83@gmail.com\\";s:4:\\"user\\";O:45:\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\":3:{s:5:\\"class\\";s:8:\\"App\\\\User\\";s:2:\\"id\\";i:100;s:10:\\"connection\\";s:5:\\"mysql\\";}s:6:\\"socket\\";N;}}s:5:\\"tries\\";N;s:9:\\"timeoutAt\\";N;s:7:\\"timeout\\";N;s:6:\\"\\u0000*\\u0000job\\";N;}"}}',
                'exception' => 'ErrorException: Undefined variable: email_template in /home/rizal/Code/bio/storage/framework/views/412dea7bec473ee5d1feb8ef53d2add0ae648ddb.php:3
Stack trace:
#0 /home/rizal/Code/bio/storage/framework/views/412dea7bec473ee5d1feb8ef53d2add0ae648ddb.php(3): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(8, \'Undefined varia...\', \'/home/rizal/Cod...\', 3, Array)
#1 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/Engines/PhpEngine.php(43): include(\'/home/rizal/Cod...\')
#2 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/Engines/CompilerEngine.php(59): Illuminate\\View\\Engines\\PhpEngine->evaluatePath(\'/home/rizal/Cod...\', Array)
#3 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/View.php(137): Illuminate\\View\\Engines\\CompilerEngine->get(\'/home/rizal/Cod...\', Array)
#4 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/View.php(120): Illuminate\\View\\View->getContents()
#5 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/View.php(85): Illuminate\\View\\View->renderContents()
#6 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Mail/Markdown.php(61): Illuminate\\View\\View->render()
#7 /home/rizal/Code/bio/app/Listeners/Email/ParseMail.php(46): Illuminate\\Mail\\Markdown->render(\'emails.dynamic-...\')
#8 [internal function]: App\\Listeners\\Email\\ParseMail->handle(Object(App\\Events\\Email\\SentMail))
#9 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Events/CallQueuedListener.php(86): call_user_func_array(Array, Array)
#10 [internal function]: Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))
#11 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#12 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#13 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#14 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#15 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#16 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#17 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#18 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#19 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)
#20 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#21 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#22 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#23 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#24 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#25 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#26 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#27 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#28 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#29 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#30 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#31 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Illuminate\\Container\\Container->call(Array)
#32 /home/rizal/Code/bio/vendor/symfony/console/Command/Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#33 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#34 /home/rizal/Code/bio/vendor/symfony/console/Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#35 /home/rizal/Code/bio/vendor/symfony/console/Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#36 /home/rizal/Code/bio/vendor/symfony/console/Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#37 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#38 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#39 /home/rizal/Code/bio/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#40 {main}

Next ErrorException: Undefined variable: email_template (View: /home/rizal/Code/bio/resources/views/emails/dynamic-email.blade.php) in /home/rizal/Code/bio/storage/framework/views/412dea7bec473ee5d1feb8ef53d2add0ae648ddb.php:3
Stack trace:
#0 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/Engines/PhpEngine.php(45): Illuminate\\View\\Engines\\CompilerEngine->handleViewException(Object(ErrorException), 0)
#1 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/Engines/CompilerEngine.php(59): Illuminate\\View\\Engines\\PhpEngine->evaluatePath(\'/home/rizal/Cod...\', Array)
#2 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/View.php(137): Illuminate\\View\\Engines\\CompilerEngine->get(\'/home/rizal/Cod...\', Array)
#3 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/View.php(120): Illuminate\\View\\View->getContents()
#4 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/View.php(85): Illuminate\\View\\View->renderContents()
#5 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Mail/Markdown.php(61): Illuminate\\View\\View->render()
#6 /home/rizal/Code/bio/app/Listeners/Email/ParseMail.php(46): Illuminate\\Mail\\Markdown->render(\'emails.dynamic-...\')
#7 [internal function]: App\\Listeners\\Email\\ParseMail->handle(Object(App\\Events\\Email\\SentMail))
#8 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Events/CallQueuedListener.php(86): call_user_func_array(Array, Array)
#9 [internal function]: Illuminate\\Events\\CallQueuedListener->handle(Object(Illuminate\\Foundation\\Application))
#10 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#11 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#12 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#13 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#14 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#15 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#16 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Events\\CallQueuedListener))
#17 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#18 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Events\\CallQueuedListener), false)
#19 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#20 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#21 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#22 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#23 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#24 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#25 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#26 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#27 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#28 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#29 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#30 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Illuminate\\Container\\Container->call(Array)
#31 /home/rizal/Code/bio/vendor/symfony/console/Command/Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#32 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#33 /home/rizal/Code/bio/vendor/symfony/console/Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#34 /home/rizal/Code/bio/vendor/symfony/console/Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#35 /home/rizal/Code/bio/vendor/symfony/console/Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#36 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#37 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#38 /home/rizal/Code/bio/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#39 {main}',
                'failed_at' => '2018-01-08 13:28:50',
            ),
            45 => 
            array (
                'id' => 46,
                'connection' => 'database',
                'queue' => 'default',
                'payload' => '{"displayName":"App\\\\Mail\\\\DynamicEmail","job":"Illuminate\\\\Queue\\\\CallQueuedHandler@call","maxTries":null,"timeout":null,"timeoutAt":null,"data":{"commandName":"Illuminate\\\\Mail\\\\SendQueuedMailable","command":"O:34:\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\":3:{s:8:\\"mailable\\";O:21:\\"App\\\\Mail\\\\DynamicEmail\\":20:{s:7:\\"subject\\";s:58:\\"Hello Rizal Fakhri, Please Activate your BioStore account!\\";s:14:\\"email_template\\";s:908:\\"<h1>Halo, Rizal Fakhri!<\\/h1>\\r\\n<p>You receiving this email because you are registered on <a href=\\"http:\\/\\/bio.dev\\">BioStore<\\/a><\\/p>\\r\\n<p>To Activate your account, Please simply click button below.<\\/p>\\r\\n<p>&nbsp;<\\/p>\\r\\n<p>\\n\\t\\t\\t<a href=\\"http:\\/\\/bio.dev\\/verify\\/eyJpdiI6IkNVWGNtSWhycGxDOHdwWjk2bWI2dkE9PSIsInZhbHVlIjoiNFwvVFlEYmk4UFVNdHBJXC9hdjhFUXY1NVJqSDFaemxob2E2RXN6aENGTEtJPSIsIm1hYyI6IjQ5NWE0MTc0YjhiOGYwOTQ5MGVhY2NhZmEzNjg1N2RhODQzODlkNTJjOGQzZmY3MzdjOGQ4YjMyMTA3NTc2MmEifQ==\\" style=\\"font-family: Avenir,Helvetica,sans-serif;\\n\\t\\t    box-sizing: border-box;\\n\\t\\t    border-radius: 3px;\\n\\t\\t    color: #fff;\\n\\t\\t    display: inline-block;\\n\\t\\t    text-decoration: none;\\n\\t\\t    background-color: #3097d1;\\n\\t\\t    border-top: 10px solid #3097d1;\\n\\t\\t    border-right: 18px solid #3097d1;\\n\\t\\t    border-bottom: 10px solid #3097d1;\\n\\t\\t    border-left: 18px solid #3097d1;\\">Activate<\\/a>\\n\\t\\t<\\/p>\\r\\n<p>&nbsp;<\\/p>\\r\\n<p>Thanks!, BioStore<\\/p>\\";s:4:\\"from\\";a:0:{}s:2:\\"to\\";a:1:{i:0;a:2:{s:4:\\"name\\";N;s:7:\\"address\\";s:16:\\"bisa85@gmail.com\\";}}s:2:\\"cc\\";a:0:{}s:3:\\"bcc\\";a:0:{}s:7:\\"replyTo\\";a:0:{}s:11:\\"\\u0000*\\u0000markdown\\";N;s:4:\\"view\\";N;s:8:\\"textView\\";N;s:8:\\"viewData\\";a:0:{}s:11:\\"attachments\\";a:0:{}s:14:\\"rawAttachments\\";a:0:{}s:9:\\"callbacks\\";a:0:{}s:10:\\"connection\\";N;s:5:\\"queue\\";N;s:15:\\"chainConnection\\";N;s:10:\\"chainQueue\\";N;s:5:\\"delay\\";N;s:7:\\"chained\\";a:0:{}}s:5:\\"tries\\";N;s:7:\\"timeout\\";N;}"}}',
                'exception' => 'InvalidArgumentException: No hint path defined for [mail]. in /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/FileViewFinder.php:112
Stack trace:
#0 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/FileViewFinder.php(90): Illuminate\\View\\FileViewFinder->parseNamespaceSegments(\'mail::message\')
#1 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/FileViewFinder.php(76): Illuminate\\View\\FileViewFinder->findNamespacedView(\'mail::message\')
#2 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/Factory.php(128): Illuminate\\View\\FileViewFinder->find(\'mail::message\')
#3 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/Concerns/ManagesComponents.php(64): Illuminate\\View\\Factory->make(\'mail::message\', Array)
#4 /home/rizal/Code/bio/storage/framework/views/412dea7bec473ee5d1feb8ef53d2add0ae648ddb.php(6): Illuminate\\View\\Factory->renderComponent()
#5 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/Engines/PhpEngine.php(43): include(\'/home/rizal/Cod...\')
#6 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/Engines/CompilerEngine.php(59): Illuminate\\View\\Engines\\PhpEngine->evaluatePath(\'/home/rizal/Cod...\', Array)
#7 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/View.php(137): Illuminate\\View\\Engines\\CompilerEngine->get(\'/home/rizal/Cod...\', Array)
#8 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/View.php(120): Illuminate\\View\\View->getContents()
#9 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/View.php(85): Illuminate\\View\\View->renderContents()
#10 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Mail/Mailer.php(328): Illuminate\\View\\View->render()
#11 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Mail/Mailer.php(301): Illuminate\\Mail\\Mailer->renderView(\'emails.dynamic-...\', Array)
#12 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Mail/Mailer.php(218): Illuminate\\Mail\\Mailer->addContent(Object(Illuminate\\Mail\\Message), \'emails.dynamic-...\', NULL, NULL, Array)
#13 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(125): Illuminate\\Mail\\Mailer->send(\'emails.dynamic-...\', Array, Object(Closure))
#14 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Mail/SendQueuedMailable.php(52): Illuminate\\Mail\\Mailable->send(Object(Illuminate\\Mail\\Mailer))
#15 [internal function]: Illuminate\\Mail\\SendQueuedMailable->handle(Object(Illuminate\\Mail\\Mailer))
#16 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#17 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#18 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#19 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#20 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#21 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Mail\\SendQueuedMailable))
#22 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Mail\\SendQueuedMailable))
#23 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#24 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Mail\\SendQueuedMailable), false)
#25 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#26 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#27 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#28 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#29 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#30 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#31 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#32 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#33 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#34 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#35 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#36 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Illuminate\\Container\\Container->call(Array)
#37 /home/rizal/Code/bio/vendor/symfony/console/Command/Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#38 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#39 /home/rizal/Code/bio/vendor/symfony/console/Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#40 /home/rizal/Code/bio/vendor/symfony/console/Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#41 /home/rizal/Code/bio/vendor/symfony/console/Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#42 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#43 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#44 /home/rizal/Code/bio/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#45 {main}

Next ErrorException: No hint path defined for [mail]. (View: /home/rizal/Code/bio/resources/views/emails/dynamic-email.blade.php) in /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/FileViewFinder.php:112
Stack trace:
#0 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/Engines/PhpEngine.php(45): Illuminate\\View\\Engines\\CompilerEngine->handleViewException(Object(InvalidArgumentException), 0)
#1 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/Engines/CompilerEngine.php(59): Illuminate\\View\\Engines\\PhpEngine->evaluatePath(\'/home/rizal/Cod...\', Array)
#2 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/View.php(137): Illuminate\\View\\Engines\\CompilerEngine->get(\'/home/rizal/Cod...\', Array)
#3 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/View.php(120): Illuminate\\View\\View->getContents()
#4 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/View/View.php(85): Illuminate\\View\\View->renderContents()
#5 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Mail/Mailer.php(328): Illuminate\\View\\View->render()
#6 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Mail/Mailer.php(301): Illuminate\\Mail\\Mailer->renderView(\'emails.dynamic-...\', Array)
#7 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Mail/Mailer.php(218): Illuminate\\Mail\\Mailer->addContent(Object(Illuminate\\Mail\\Message), \'emails.dynamic-...\', NULL, NULL, Array)
#8 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Mail/Mailable.php(125): Illuminate\\Mail\\Mailer->send(\'emails.dynamic-...\', Array, Object(Closure))
#9 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Mail/SendQueuedMailable.php(52): Illuminate\\Mail\\Mailable->send(Object(Illuminate\\Mail\\Mailer))
#10 [internal function]: Illuminate\\Mail\\SendQueuedMailable->handle(Object(Illuminate\\Mail\\Mailer))
#11 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#12 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#13 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#14 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#15 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(94): Illuminate\\Container\\Container->call(Array)
#16 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(114): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Mail\\SendQueuedMailable))
#17 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Mail\\SendQueuedMailable))
#18 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(98): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#19 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(49): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Mail\\SendQueuedMailable), false)
#20 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(76): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)
#21 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(320): Illuminate\\Queue\\Jobs\\Job->fire()
#22 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(270): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))
#23 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(114): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))
#24 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))
#25 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(85): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')
#26 [internal function]: Illuminate\\Queue\\Console\\WorkCommand->handle()
#27 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(29): call_user_func_array(Array, Array)
#28 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(87): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#29 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(31): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#30 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Container/Container.php(549): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#31 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(180): Illuminate\\Container\\Container->call(Array)
#32 /home/rizal/Code/bio/vendor/symfony/console/Command/Command.php(252): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#33 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Command.php(167): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#34 /home/rizal/Code/bio/vendor/symfony/console/Application.php(918): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#35 /home/rizal/Code/bio/vendor/symfony/console/Application.php(222): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#36 /home/rizal/Code/bio/vendor/symfony/console/Application.php(129): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#37 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Console/Application.php(88): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#38 /home/rizal/Code/bio/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(121): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#39 /home/rizal/Code/bio/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#40 {main}',
                'failed_at' => '2018-01-08 13:39:05',
            ),
        ));
        
        
    }
}