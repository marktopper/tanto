var gulp = require('gulp');
var elixir = require('laravel-elixir');

elixir.config.assetsPath = 'content/_includes/_assets';
elixir.config.publicPath = 'content/assets';

elixir(function(mix) {
    mix.styles(['style.css'])
        .exec('php tanto build', [
            './content/*',
            './content/**/*',
            './config/*.php'
        ])
        .browserSync({
            server: {
                baseDir: 'public'
            },
            proxy: null,
            files: ['public/**/*']
        });
});