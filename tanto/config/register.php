<?php

return [

    'bindings' => [

        /**
         * Tanto Bindings
         */
        Illuminate\Contracts\View\Factory::class => Illuminate\View\Factory::class,
        Illuminate\Contracts\Events\Dispatcher::class => Illuminate\Events\Dispatcher::class,
        Tanto\Tanto\Contracts\SiteBuilder::class => Tanto\Tanto\SiteBuilder::class,
        Tanto\Tanto\Contracts\FileHandler::class => Tanto\Tanto\FileHandler::class,
        Tanto\Tanto\Contracts\Blade::class => Tanto\Tanto\Blade::class,
        Tanto\Tanto\Contracts\Markdown::class => Tanto\Tanto\Markdown::class,

        /**
         * Application Bindings
         */

        //

    ],

    'instances' => [

        /**
         * Tanto Instances
         */

        Tanto\Tanto\Application::class => $this,

        /**
         * Application Instances
         */

        //

    ],

    'singletons' => [

        /**
         * Tanto Singletons
         */
        Illuminate\Contracts\Events\Dispatcher::class => Illuminate\Events\Dispatcher::class,
        Illuminate\View\ViewFinderInterface::class => function (Tanto\Tanto\Application $application) {
            return $application->make(Illuminate\View\FileViewFinder::class, [
                'paths' => [config('paths.content')],
            ]);
        },
        Illuminate\View\Compilers\BladeCompiler::class => function () {
            return new Illuminate\View\Compilers\BladeCompiler(
                app(Illuminate\Filesystem\Filesystem::class),
                config('paths.view_cache', config('paths.cache').'/views')
            );
        },
        Illuminate\View\Engines\EngineResolver::class => function () {
            $resolver = new Illuminate\View\Engines\EngineResolver();

            $blade = app(Tanto\Tanto\Contracts\Blade::class);
            $bladeCompiler =  $blade->getCompiler();

            $resolver->register('blade', function () use ($bladeCompiler) {
                return new Illuminate\View\Engines\CompilerEngine($bladeCompiler);
            });

            return $resolver;
        },
        Illuminate\View\Factory::class => function () {
            return new Illuminate\View\Factory(
                app(Illuminate\View\Engines\EngineResolver::class),
                new Illuminate\View\FileViewFinder(
                    app(Illuminate\Filesystem\Filesystem::class),
                    [config('paths.content')]
                ),
                app(Illuminate\Contracts\Events\Dispatcher::class)
            );
        },

        /**
         * Application Singletons
         */

        //

    ],

];