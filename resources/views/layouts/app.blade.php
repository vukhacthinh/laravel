<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav id="sidebar" role="navigation" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll" style="height: auto;background: #33485c;">
                <ul id="side-menu" class="nav">
                    <li>
                    </li>
                    <?php
                    for ($i = 1; $i <= 7; $i++) : ?>
                    <?php if (isset($menus[$i])) : ?>
                    <li>
                        <a href="#" class="parrent-a" id="group_menu_<?=$i?>">
                            <i class="<?= $iconArr[$i] ?>">
                                <div class="icon-bg"></div>
                            </i>
                            <span class="menu-title"><?= $menuArr[$i]?></span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <?php foreach ($menus[$i] as $e) :
                            $c_class = "";

                                $c_class = "active";
                            ?>
                            <li class="<?= $c_class ?>">
                                <a href="{{$e->action}}"><i class = 'fa fa-angle-right'></i><span>{{$e->name}}</span></a>
                            </li>
                            <?php endforeach; ?>
                        </ul>

                    </li>
                    <?php endif ?>
                    <?php endfor; ?>
                </ul>
            </div>
        </nav>


        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
