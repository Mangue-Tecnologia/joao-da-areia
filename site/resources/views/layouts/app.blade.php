<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>

    <?php
    if ($segmento = Request::segment(1) == "produto"):
    ?>

    <title><?= $produto['nome']; ?></title>

    <?php
    else:
    ?>

    <title>João da Areia - @yield('title')</title>

    <?php
    endif;
    ?>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta author="Mangue Tecnologia">

    <link rel="icon" href="img/icons/icon.png">

    <base href="<?= $url_base; ?>">

    <meta property="og:type" content="website">

    <meta property="og:image" content="<?= $url_base; ?>img/logo.jpg">

    <meta name="keywords" value="<?= $data['info']['keywords']; ?>">
    <meta name="description" value="<?= $data['info']['descricao']; ?>">

    <link rel="stylesheet" type="text/css" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Semi+Condensed:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700|Roboto:300,400,500,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="/css/plugins/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/css/plugins/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="/css/plugins/jquery.fancybox.min.css" />

    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/responsive.css">

</head>

<body>

    <div class="content">

            @include('templates.header')

            <main>
                @yield('content')
            </main>

            @include('templates.footer')

        </div>

    </div>

    <script src="/js/jquery-3.2.1.min.js" ></script>
    <script src="/js/plugins/jquery.validate.js" ></script>
    <script src="/js/plugins/slick.min.js" ></script>
    <script src="/js/plugins/jquery.mask.js" ></script>
    <script src="/js/app.js"></script>
    <script src="/js/wow.min.js"></script>
        
</body>
</html>