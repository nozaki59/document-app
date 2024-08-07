<!DOCTYPE html>
<html lang="ja">
<x-head :title="$title">
    @if(isset($description))
        <meta name="description" content="{{ $description }}"/>
    @endif
    @vite(['resources/css/'.$css])
</x-head>
<body>
<x-header></x-header>
{{ $slot }}
<x-footer></x-footer>
</body>
</html>
