@extends('_includes.base')

@section('body')

    <div class="welcome">
        <div class="wrapper">
            <h1>Welcome Home!</h1>
            <span>{{ config('app.description') }}</span>
        </div>
    </div>

    <div class="left-side">
        @markdown

        ## Tanto

        This is the homescreen, and the content of `content/index.blade.php`.

        > Please note that this CMS is still in alpha.

        #### Feature list:

        - Markdown Support
        - Blade Support
        - Easy extend-able
        - Focus of the readability
        - Minimize user input

        @endmarkdown

    </div>

    <div class="right-side">
        @include('_includes.sidebar')
    </div>

@stop