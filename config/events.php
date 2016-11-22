<?php

return [

    'listeners' => [
        'creating: *' => [
            function () {
                /**
                 * On rendering Blade views we will mute error reporting as
                 * we don't care about undefined variables or type
                 * mistakes during compilation.
                 */
                error_reporting(error_reporting() & ~E_NOTICE & ~E_WARNING);
            },
        ],
        'building' => [
            function (Illuminate\Filesystem\Filesystem $filesystem) {
                $viewsCache = config('paths.view_cache', config('paths.cache').'/views');
                $markdownCache = config('paths.markdown_cache', config('paths.cache').'/markdown');

                if (! $filesystem->isDirectory($viewsCache)) {
                    $filesystem->makeDirectory($viewsCache);
                }

                if (! $filesystem->isDirectory($markdownCache)) {
                    $filesystem->makeDirectory($markdownCache);
                }
            },
        ],
    ],

];