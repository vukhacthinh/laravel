<nav id="sidebar" role="navigation" class="navbar-default navbar-static-side" style="float: left;width: 205px;">
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
