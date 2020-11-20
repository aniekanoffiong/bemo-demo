<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @if ($config->google_analytics)
        {!! $config->google_analytics !!}
    @endif
    @if ($config->facebook_ad)
        {!! $config->facebook_ad !!}
    @endif
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="{{ $page->decription ?? 'Welcome to our Site' }}">
	<meta name="robots" content="{{ $page->search_index ? 'index' : 'no-index' }}">
    <title>{{ $title }}</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- favicon -->
    {{-- CSS --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div id="wrapper">
        @include("layouts.header")
        @yield("content")
        @include("layouts.footer")
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>