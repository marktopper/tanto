<?php

return [

    'default' => Tanto\Tanto\Compilers\FileCompiler::class,

    'extensions' => [
        '.blade.php' => Tanto\Tanto\Compilers\BladeCompiler::class,
        '.md' => Tanto\Tanto\Compilers\MarkdownCompiler::class,
    ],

];