<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    @include('partials.head')
</head>

<body class="min-h-screen bg-gray-100 dark:bg-zinc-900">
    <livewire:test-player :attemptId="$attempt->id" />
    @fluxScripts
    @livewireScripts
</body>

</html>
