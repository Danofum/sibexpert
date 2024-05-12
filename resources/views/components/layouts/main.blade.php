<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <script>
        window.__unocss = {
            theme: {
                colors: {
                    'brand': {
                        'bg': `#3958C8`,
                        'text': `#FFFFFF`
                    }
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css"/>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/@unocss/runtime"></script>--}}

    <script src="{{ asset('/js/script.js') }}"></script>
    <script src="{{ asset('/js/unocss.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/styles-register.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/tabler-icons.min.css') }}">
</head>
<body class="m-0 p-0 flex flex-col items-center">
{{ $slot }}
</body>
</html>
