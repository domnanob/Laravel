<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Document</title>
</head>
<body>
    <x-bladewind::timeline
    date="18-JUL"
    label="You signed up"
    completed="true" />

<x-bladewind::timeline
    date="19-JUL"
    label="Customer rep assigned"
    completed="true" />

<x-bladewind::timeline
    date="20-JUL"
    label="Customer rep called"
    completed="true" />

<x-bladewind::timeline
    label="Account is being reviewed" />

<x-bladewind::timeline
    label="Account activated"
    last="true" />
</body>
</html>
