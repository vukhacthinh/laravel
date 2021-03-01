<style>
    .nav .open > a, .nav .open > a:hover, .nav .open > a:focus {
        background: none !important;
    }
    .navbar-right .notices-menu{
        height: auto;
        width: 300px;
        margin-top: 12px;
    }
    .navbar-right .notices-menu:before{
        right: 17px;
        background-image: url("/img/notices.png");
        display: table;
        content: " ";
        background-repeat: no-repeat;
        background-size: auto;
        background-position: -167px -251px;
        height: 11px;
        position: absolute;
        top: -11px;
        width: 20px;
    }
    .navbar-right .notices-menu li{
        height: 70px;
    }
</style>
<header>
    <div id="header-topbar-option-demo" class="page-header-topbar">
        <nav id="topbar" role="navigation" style="margin-bottom: 0; z-index: 2;" class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle">
                    <span class="icon-bar">button</span>
                </button>
                <a id="logo" class="navbar-brand">
                    <span class="fa fa-rocket"></span>
                    <span class="logo-text"><?= __('勤怠システム') ?></span>
                    <span style="display: none" class="logo-text-icon">
                    </span>
                </a>
            </div>
            <div class="topbar-main">
                <a id="menu-toggle" href="#" class="hidden-xs">
                    <i class="fa fa-bars"></i>
                </a>
                <ul class="nav navbar navbar-top-links navbar-right mbn pull-right">
                    <li>

                    </li>
                    <li>
                        <ul>
                            <?php $today = date('YmdHis'); ?>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown">
                            <a class="dropdown-toggle notification" type="button" data-toggle="dropdown" href="#">
                                <span class="badge "></span></a>
                            <ul class="dropdown-menu notices-menu">
                                <li class = 'not_read'  >
                                    <a href= "#">
                                        <div style="display:inline-block;"></div>
                                        <div>
                                            <div class="time-ago pull-right"></div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button >logout</button></li>
                    <li class="dropdown topbar-user">
                        <a data-hover="dropdown" href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="" alt="" class="img-responsive img-circle">&nbsp;
                            <span class="hidden-xs">
                                </span>&nbsp;<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-user pull-right">
                            <li></li>

                            <li><a href="#"  data-tooltip="" title="<?=__('パスワード変更')?>" class="modal-open dia_change_password" data-target ="#dia_change_password" data-toggle="modal"><i class="fa fa-key"></i><?= __('パスワード変更') ?></a></li>
                            <li></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<style>
    .not_read{
        background: antiquewhite;
    }
    .new_notice{
        background: firebrick;
    }
    .bell_notice{
        color: firebrick;
    }
</style>
