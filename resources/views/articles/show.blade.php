@extends('_layouts.default')

<style>

    html {
        font-size: 62.5%;
    }

    html, body {
        height: 100%;
    }

    body {
        font-family: Helvetica, Arial, sans-serif;
        line-height: 1.3;
        margin: auto;
    }

    p, ul, ol, dl, table, pre {
        margin-bottom: 1em;
        font-size: 110%;
    }

    ul {
        margin-left: 20px;
    }

    a {
        text-decoration: none;
        cursor: pointer;
    }

    a:focus {
        outline: 1px dotted;
    }

    a:visited {
    }

    a:hover, a:focus {
        text-decoration: none;
    }

    a *, button * {
        cursor: pointer;
    }

    hr {
        display: none;
    }

    small {
        font-size: 90%;
    }

    input, select, button, textarea, option {
        font-family: Arial, "Lucida Grande", "Lucida Sans Unicode", Arial, Verdana, sans-serif;
        font-size: 100%;
    }

    button, label, select, option, input[type=submit] {
        cursor: pointer;
    }

    .group:after {
        content: ".";
        display: block;
        height: 0;
        clear: both;
        visibility: hidden;
    }

    .group {
        display: inline-block;
    }

    /* Hides from IE-mac \*/
    * html .group {
        height: 1%;
    }

    .group {
        display: block;
    }

    /* End hide from IE-mac */
    sup {
        font-size: 80%;
        line-height: 1;
        vertical-align: super;
    }

    button::-moz-focus-inner {
        border: 0;
        padding: 1px;
    }

    span.amp {
        font-family: Baskerville, "Goudy Old Style", "Palatino", "Book Antiqua", serif;
        font-weight: normal;
        font-style: italic;
        font-size: 1.2em;
        line-height: 0.8;
    }

    h1, h2, h3, h4, h5, h6 {
        line-height: 1.1;
        font-family: Baskerville, "Goudy Old Style", "Palatino", "Book Antiqua", serif;
    }

    h2 {
        font-size: 22pt;
    }

    h3 {
        font-size: 20pt;
    }

    h4 {
        font-size: 18pt;
    }

    h5 {
        font-size: 16pt;
    }

    h6 {
        font-size: 14pt;
    }

    ::-moz-selection {
        background: #745626;
    }

    h1 {
        font-size: 420%;
        margin: 0 0 0.1em;
        font-family: Baskerville, "Goudy Old Style", "Palatino", "Book Antiqua", serif;
    }

    h1 a,
    h1 a:hover {
        color: #d7af72;
        font-weight: normal;
        text-decoration: none;
    }

    pre {
        background: rgba(0, 0, 0, 0.8);
        padding: 8px 10px;
        color: #FFFFFF;
        border-radius: 0.4em;
        -moz-border-radius: 0.4em;
        -webkit-border-radius: 0.4em;
        overflow-x: hidden;
    }

    pre code {
        font-size: 11pt;
    }

    .thumb {
        float: left;
        margin: 10px;
    }

</style>


@section('content')

    <div class="ui container">
            <div class="ui raised segment">

                 {!! $article->body !!}

             </div>
    </div>


@endsection