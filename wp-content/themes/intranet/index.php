<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Tue Oct 23 2018 13:42:29 GMT+0000 (UTC)  -->
<html data-wf-page="5b98252a8dec3ffc2dd64998" data-wf-site="5b98252a8dec3f8019d64997">

<head>
    <meta charset="utf-8">
    <title>Intranet</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/normalize.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/webflow.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/intranet-or.webflow.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic", "Roboto Condensed:300,300italic,regular,italic,700,700italic", "Roboto Mono:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic"]
            }
        });

    </script>
    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <script type="text/javascript">
        ! function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
        }(window, document);

    </script>
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" rel="shortcut icon" type="<?php echo get_stylesheet_directory_uri(); ?>/images/x-icon">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/images/webclip.png" rel="apple-touch-icon">
</head>

<body>
    <div class="section section-top w-clearfix">
        <div data-delay="0" class="drop-top w-dropdown">
            <div class="drop-toggle-top w-dropdown-toggle">
                <div class="icon-drop w-icon-dropdown-toggle"></div>
                <div>adicionar</div>
            </div>
            <nav class="drop-list-top w-dropdown-list"><a href="#" class="drop-link-top w-dropdown-link">Link 1</a><a href="#" class="drop-link-top w-dropdown-link">Link 1</a><a href="#" class="drop-link-top w-dropdown-link">Link 1</a></nav>
        </div>
        <div class="box-img-user-logged w-hidden-tiny"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/user/img-user.jpg" alt="" class="img-user-logged"></div>
        <div class="box-ico-not"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icones/ico-notification.png" alt="" class="ico-not">
            <div class="num-not">
                <div>999</div>
            </div>
        </div>
        <!--        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ico-search.png" alt="" class="ico-search w-hidden-tiny" data-ix="show-search">-->
        <form action="/search" class="search-box w-hidden-tiny w-clearfix w-form">
            <input type="search" class="search-input w-input" maxlength="256" name="query" placeholder="Pesquisar..." id="search" required="">
            <input type="submit" value="ok" class="search-submit w-button">
        </form>
    </div>

    <div data-collapse="all" data-animation="over-left" data-duration="400" class="nav-bar w-nav">
        <div class="container-nav w-container">
            <nav role="navigation" class="nav-menu w-nav-menu">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon/logo-or-nav.png" alt="" class="logo-nav">

                <a href="#" class="nav-link w-inline-block">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon/ico-dash.png" alt="" class="img-nav">
                    <div>Dashboard</div>
                    <div class="num-nav">
                        <div>99</div>
                    </div>
                </a>
                <h2 class="h2-nav">or</h2><a href="#" class="nav-link w-inline-block">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon/taslk.png" alt="" class="img-nav">

                    <div>Tarefas</div>
                </a><a href="#" class="nav-link w-inline-block">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon/icon-project.png" alt="" class="img-nav">

                    <div>Projetos</div>
                </a>
                  <a href="#" class="nav-link w-inline-block">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon/icon-clients.png" alt="" class="img-nav">

                    <div>Clientes</div>
                </a>
                   <a href="#" class="nav-link w-inline-block">
                       <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon/icon-idea.png" alt="" class="img-nav">
                    <div>Novas Ideias</div>

                </a>
                   <a href="#" class="nav-link w-inline-block">
                       <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon/icon-award.png" alt="" class="img-nav">
                    <div>Funcionário do Mês</div>

                </a>
                <h2 class="h2-nav">calendários</h2>
                   <a href="#" class="nav-link w-inline-block">
                       <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon/icon-calendar.png" alt="" class="img-nav">
                    <div>Calendário Geral</div>

                </a>
                   <a href="#" class="nav-link w-inline-block">
                       <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon/icon-ata.png" alt="" class="img-nav">
                    <div>Atas das Reuniões</div>

                </a>
                  <a href="#" class="nav-link w-inline-block">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon/icon-niver.png" alt="" class="img-nav">
                    <div>Aniversários</div>
                </a>

                <h2 class="h2-nav">integração</h2><a href="#" class="nav-link w-inline-block">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon/icon-hh.png" alt="" class="img-nav">
                   <div>Happy Hour</div>

                </a>
                   <a href="#" class="nav-link w-inline-block">
                       <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon/icon-galery.png" alt="" class="img-nav">
                    <div>Galeria</div>

                </a>
                   <a href="#" class="nav-link w-inline-block">
                       <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon/icon-coffee.png" alt="" class="img-nav">
                    <div>Café</div>
                </a>
            </nav>
            <div class="menu-bottom w-nav-button">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-small.png" alt="">
               </div>

               <a href="#" class="link-menu-closed link-dash w-inline-block">
                   <img src="<?php echo get_stylesheet_directory_uri(); ?>//images/icon/ico-dash.png" alt="" class="img-ico-side-menu">
                <div class="num-not">
                    <div>999</div>
                </div>
            </a>

            <div class="divisor-nav"></div>
            <a href="#" class="link-menu-closed w-inline-block">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon/taslk.png" alt="" class="img-ico-side-menu"></a>

            <a href="#" class="link-menu-closed w-inline-block">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon/icon-project.png" alt="" class="img-ico-side-menu"></a>

            <a href="#" class="link-menu-closed w-inline-block">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon/icon-clients.png" alt="" class="img-ico-side-menu"></a>

            <a href="#" class="link-menu-closed w-inline-block">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon/icon-idea.png" alt="" class="img-ico-side-menu"></a>

            <a href="#" class="link-menu-closed w-inline-block">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon/icon-award.png" alt="" class="img-ico-side-menu"></a>

            <div class="divisor-nav"></div>
            <a href="#" class="link-menu-closed w-inline-block">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon/icon-calendar.png" alt="" class="img-ico-side-menu"></a>

            <a href="#" class="link-menu-closed w-inline-block">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon/icon-ata.png" alt="" class="img-ico-side-menu"></a>

            <a href="#" class="link-menu-closed w-inline-block">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon/icon-niver.png" alt="" class="img-ico-side-menu"></a>

            <div class="divisor-nav"></div>
            <a href="#" class="link-menu-closed w-inline-block">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon/icon-hh.png" alt="" class="img-ico-side-menu"></a>

            <a href="#" class="link-menu-closed w-inline-block">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon/icon-galery.png" alt="" class="img-ico-side-menu"></a>

            <a href="#" class="link-menu-closed w-inline-block">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon/icon-coffee.png" alt="" class="img-ico-side-menu"></a>
        </div>
    </div>
    <div class="section section-header">
        <div class="container-geral w-clearfix">
            <h1>OR Dashboard</h1>
            <div class="date">Quinta, 25 de Dezembro de 2025</div>
        </div>
    </div>
    <div class="section section-jobs-home">
        <div class="container-geral w-clearfix">
            <div class="container container-68 w-hidden-tiny">
                <div class="header-box w-clearfix">
                    <h2>Tarefas da Equipe</h2>
                    <div data-delay="0" class="drop-order w-dropdown">
                        <div class="drop-order-toggle w-hidden-small w-hidden-tiny w-dropdown-toggle">
                            <div class="w-icon-dropdown-toggle"></div>
                            <div>Ordernar por</div>
                        </div>
                        <nav class="drop-list-order w-dropdown-list">
                            <a href="#" class="w-dropdown-link">Link 1</a>
                            <a href="#" class="w-dropdown-link">Link 2</a>
                            <a href="#" class="w-dropdown-link">Link 3</a>
                        </nav>
                    </div>
                </div>
                <ul class="ul-tarefas w-list-unstyled">
                    <li class="li-tarefas">
                        <div class="row-tarefas row-1 w-row">
                            <div class="col-tarefa w-col w-col-4 w-col-small-small-stack">
                                <h3>tarefa</h3>
                            </div>
                            <div class="col-tarefa w-col w-col-2 w-col-small-small-stack">
                                <h3>cliente</h3>
                            </div>
                            <div class="col-tarefa w-col w-col-2 w-col-small-small-stack">
                                <h3>responsável</h3>
                            </div>
                            <div class="col-tarefa w-col w-col-2 w-col-small-small-stack">
                                <h3>prazo</h3>
                            </div>
                            <div class="col-tarefa w-col w-col-2 w-col-small-small-stack">
                                <h3>status</h3>
                            </div>
                        </div>
                    </li>
                    <li class="li-tarefas">
                        <div class="row-tarefas w-row">
                            <div class="col-tarefa w-col w-col-4"><a href="#" class="a-tarefas">Desenvolvimento App Tampinhas</a></div>
                            <div class="col-tarefa w-col w-col-2"><a href="#" class="a-tarefas">Femsa</a></div>
                            <div class="col-tarefa w-col w-col-2"><a href="#" class="a-tarefas">Ruan</a></div>
                            <div class="col-tarefa w-col w-col-2">
                                <div>31/08/2018</div>
                            </div>
                            <div class="status andamento col-tarefa w-col w-col-2">
                                <div>Em andamento</div>
                            </div>
                        </div>
                    </li>
                    <li class="li-tarefas escura w-hidden-small w-hidden-tiny">
                        <div class="row-tarefas w-row">
                            <div class="w-col w-col-4"><a href="#" class="a-tarefas">E-mail Marketing Semanal</a></div>
                            <div class="w-col w-col-2"><a href="#" class="a-tarefas">Swift</a></div>
                            <div class="w-col w-col-2"><a href="#" class="a-tarefas">Victor</a></div>
                            <div class="w-col w-col-2">
                                <div>31/08/2018</div>
                            </div>
                            <div class="status aprovacao w-col w-col-2">
                                <div>em aprovação</div>
                            </div>
                        </div>
                    </li>
                    <li class="li-tarefas w-hidden-small w-hidden-tiny">
                        <div class="row-tarefas w-row">
                            <div class="w-col w-col-4"><a href="#" class="a-tarefas">Hotsite Programa do Ano</a></div>
                            <div class="w-col w-col-2"><a href="#" class="a-tarefas">Onodera</a></div>
                            <div class="w-col w-col-2"><a href="#" class="a-tarefas">Daniel</a></div>
                            <div class="w-col w-col-2">
                                <div>31/08/2018</div>
                            </div>
                            <div class="status concluido w-col w-col-2">
                                <div>concluído</div>
                            </div>
                        </div>
                    </li>
                    <li class="li-tarefas escura w-hidden-small w-hidden-tiny">
                        <div class="row-tarefas w-row">
                            <div class="w-col w-col-4">
                                <a href="#" class="a-tarefas">Backend InGlass</a></div>
                            <div class="w-col w-col-2">
                                <a href="#" class="a-tarefas">Guardian</a></div>
                            <div class="w-col w-col-2">
                                <a href="#" class="a-tarefas">Thiago</a></div>
                            <div class="w-col w-col-2">
                                <div>31/08/2018</div>
                            </div>
                            <div class="status w-col w-col-2">
                                <div>na fila</div>
                            </div>
                        </div>
                    </li>
                    <li class="li-tarefas w-hidden-small w-hidden-tiny">
                        <div class="row-tarefas w-row">
                            <div class="w-col w-col-4">
                                <a href="#" class="a-tarefas">Café no Bule</a></div>
                            <div class="w-col w-col-2">
                                <a href="#" class="a-tarefas">OR</a></div>
                            <div class="w-col w-col-2">
                                <a href="#" class="a-tarefas">Ruan</a></div>
                            <div class="w-col w-col-2">
                                <div>31/08/2018</div>
                            </div>
                            <div class="status concluido w-col w-col-2">
                                <div>concluído</div>
                            </div>
                        </div>
                    </li>
                </ul><a href="#" class="btn violet w-button">mais tarefas</a>
            </div>
            <div class="container container-33">
                <div class="header-box w-clearfix">
                    <h2>Grandes Projetos</h2>
                    <div data-delay="0" class="drop-order w-dropdown">
                        <div class="drop-order-toggle w-dropdown-toggle">
                            <div class="w-icon-dropdown-toggle"></div>
                            <div>Ordernar por</div>
                        </div>
                        <nav class="drop-list-order w-dropdown-list">
                            <a href="#" class="w-dropdown-link">Link 1</a>
                            <a href="#" class="w-dropdown-link">Link 2</a>
                            <a href="#" class="w-dropdown-link">Link 3</a>
                        </nav>
                    </div>
                </div>
                <ul class="ul-projects w-list-unstyled">
                    <li class="li-projects">
                        <div class="row-projects w-row">
                            <div class="col-logo w-col w-col-3 w-col-small-3">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clientes/logo-coca.jpg" alt="" class="img-logo">
                            </div>

                            <div class="col-infos w-clearfix w-col w-col-9 w-col-small-9">
                                <h3>Aplicativo Tampinhas Coca-Cola</h3>
                                <div class="field-label">Cliente: </div>
                                <div class="fiel-name">Femsa Brasil</div>
                                <div class="box-status w-clearfix">
                                    <div class="field-label">Status:</div>
                                    <div class="fiel-name">Em andamento</div>
                                    <div class="divisor-status">*</div>
                                    <div class="field-label">Entrega:</div>
                                    <div class="fiel-name">19/09/2018</div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="li-projects">
                        <div class="row-projects w-row">
                            <div class="col-logo w-col w-col-3 w-col-medium-3 w-col-small-3">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clientes/logo-rai.jpg" alt="" class="img-logo">
                            </div>

                            <div class="col-infos w-clearfix w-col w-col-9 w-col-medium-9 w-col-small-9">
                                <h3>Plataforma ROM/MOT</h3>
                                <div class="field-label">Cliente: </div>
                                <div class="fiel-name">Grupo Rai</div>
                                <div class="box-status w-clearfix">
                                    <div class="field-label">Status:</div>
                                    <div class="fiel-name">Em andamento</div>
                                    <div class="divisor-status">*</div>
                                    <div class="field-label">Entrega:</div>
                                    <div class="fiel-name">19/09/2018</div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="li-projects">
                        <div class="row-projects w-row">
                            <div class="col-logo w-col w-col-3 w-col-small-3">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clientes/logo-latam.jpg" alt="" class="img-logo">
                            </div>

                            <div class="col-infos w-clearfix w-col w-col-9 w-col-small-9">
                                <h3>Sistema Latam Airlines</h3>
                                <div class="field-label">Cliente: </div>
                                <div class="fiel-name">LATAM</div>
                                <div class="box-status w-clearfix">
                                    <div class="field-label">Status:</div>
                                    <div class="fiel-name">Em andamento</div>
                                    <div class="divisor-status">*</div>
                                    <div class="field-label">Entrega:</div>
                                    <div class="fiel-name">19/09/2018</div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="li-projects last">
                        <div class="row-projects w-row">
                            <div class="col-logo w-col w-col-3 w-col-small-3">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clientes/logo-ultragaz.jpg" alt="" class="img-logo">
                            </div>

                            <div class="col-infos w-clearfix w-col w-col-9 w-col-small-9">
                                <h3>Page Builder Ultragaz</h3>
                                <div class="field-label">Cliente: </div>
                                <div class="fiel-name">Ultragaz</div>
                                <div class="box-status w-clearfix">
                                    <div class="field-label">Status:</div>
                                    <div class="fiel-name">Em andamento</div>
                                    <div class="divisor-status">*</div>
                                    <div class="field-label">Entrega:</div>
                                    <div class="fiel-name">19/09/2018</div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <a href="#" class="btn violet w-button">outros projetos</a>
            </div>
        </div>
    </div>
    <div class="section section-clientes">
        <div class="container-geral">
            <div class="container">
                <div class="header-box">
                    <h2>Clientes</h2>
                </div>
                <div data-animation="slide" data-duration="500" data-infinite="1" class="slider w-slider">
                    <div class="mask-slider w-slider-mask">
                        <div class="slide-clientes w-slide">
                            <div class="box-img-slide-clientes">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-or-cinza.png" alt="" class="logo-slide">
                            </div>
                        </div>
                        <div class="slide-clientes w-slide">
                            <div class="box-img-slide-clientes">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-or-cinza.png" alt="" class="logo-slide">
                            </div>
                        </div>
                        <div class="slide-clientes w-slide">
                            <div class="box-img-slide-clientes">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-or-cinza.png" alt="" class="logo-slide">
                            </div>
                        </div>
                        <div class="slide-clientes w-slide">
                            <div class="box-img-slide-clientes">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-or-cinza.png" alt="" class="logo-slide">
                            </div>
                        </div>
                        <div class="slide-clientes w-slide">
                            <div class="box-img-slide-clientes">
                                <img src="images/logo-or-cinza.png" alt="" class="logo-slide">
                            </div>
                        </div>
                        <div class="slide-clientes w-slide">
                            <div class="box-img-slide-clientes">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-or-cinza.png" alt="" class="logo-slide">
                            </div>
                        </div>
                        <div class="slide-clientes w-slide">
                            <div class="box-img-slide-clientes">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-or-cinza.png" alt="" class="logo-slide">
                            </div>
                        </div>
                        <div class="slide-clientes w-slide">
                            <div class="box-img-slide-clientes">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-or-cinza.png" alt="" class="logo-slide">
                            </div>
                        </div>
                        <div class="slide-clientes w-slide">
                            <div class="box-img-slide-clientes">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-or-cinza.png" alt="" class="logo-slide">
                            </div>
                        </div>
                        <div class="slide-clientes w-slide">
                            <div class="box-img-slide-clientes">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-or-cinza.png" alt="" class="logo-slide">
                            </div>
                        </div>
                        <div class="slide-clientes w-slide">
                            <div class="box-img-slide-clientes">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-or-cinza.png" alt="" class="logo-slide">
                            </div>
                        </div>
                    </div>
                    <div class="arrow-slider w-slider-arrow-left">
                        <div class="w-icon-slider-left">

                        </div>

                    </div>
                    <div class="arrow-slider w-slider-arrow-right">
                        <div class="w-icon-slider-right">

                        </div>

                    </div>

                    <div class="w-hidden-main w-hidden-medium w-hidden-small w-hidden-tiny w-slider-nav w-round">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-jobs-home">
        <div class="container-geral w-clearfix">
            <div class="container container-68">
                <div class="header-box w-clearfix">
                    <h2>Novas Ideias</h2>
                    <div data-delay="0" class="drop-order w-dropdown">
                        <div class="drop-order-toggle w-dropdown-toggle">
                            <div class="w-icon-dropdown-toggle">

                            </div>

                            <div>Ordernar por</div>
                        </div>
                        <nav class="drop-list-order w-dropdown-list">
                            <a href="#" class="w-dropdown-link">Link 1</a>
                            <a href="#" class="w-dropdown-link">Link 2</a>
                            <a href="#" class="w-dropdown-link">Link 3</a>
                        </nav>
                    </div>
                </div>
                <div class="row-titu-ideias w-row">
                    <div class="w-col w-col-10 w-col-small-10">
                        <h3 class="h3-ideas w-hidden-tiny">Título</h3>
                    </div>
                    <div class="w-col w-col-2 w-col-small-2">
                        <h3 class="h3-ideas w-hidden-tiny">Respostas</h3>
                    </div>
                </div>
                <ul class="ul-ideias w-list-unstyled">
                    <li class="li-ideias">
                        <a href="#" class="a-ideias w-inline-block">
                            <div class="row-ideas w-row">
                                <div class="w-col w-col-10 w-col-small-small-stack">
                                    <h4 class="h4-titu-idea">[Vaquinha] Nova cafeteira</h4>
                                    <div>por Ruan, 18/06/2018</div>
                                </div>
                                <div class="w-col w-col-2 w-col-small-small-stack">
                                    <div>7 comentários</div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="li-ideias">
                        <a href="#" class="a-ideias w-inline-block">
                            <div class="row-ideas w-row">
                                <div class="w-col w-col-10 w-col-small-small-stack">
                                    <h4 class="h4-titu-idea">Novos Monitores</h4>
                                    <div>por Thiago, 18/06/2018</div>
                                </div>
                                <div class="w-col w-col-2 w-col-small-small-stack">
                                    <div>7 comentários</div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="li-ideias">
                        <a href="#" class="a-ideias w-inline-block">
                            <div class="row-ideas w-row">
                                <div class="w-col w-col-10 w-col-small-small-stack">
                                    <h4 class="h4-titu-idea">Lorem Ipsum</h4>
                                    <div>por Victor, 18/06/2018</div>
                                </div>
                                <div class="w-col w-col-2 w-col-small-small-stack">
                                    <div>7 comentários</div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="li-ideias">
                        <a href="#" class="a-ideias w-inline-block">
                            <div class="row-ideas w-row">
                                <div class="w-col w-col-10 w-col-small-small-stack">
                                    <h4 class="h4-titu-idea">Lorem Ipsum</h4>
                                    <div>por Victor, 18/06/2018</div>
                                </div>
                                <div class="w-col w-col-2 w-col-small-small-stack">
                                    <div>7 comentários</div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="li-ideias">
                        <a href="#" class="a-ideias w-inline-block">
                            <div class="row-ideas w-row">
                                <div class="w-col w-col-10 w-col-small-small-stack">
                                    <h4 class="h4-titu-idea">Lorem Ipsum</h4>
                                    <div>por Victor, 18/06/2018</div>
                                </div>
                                <div class="w-col w-col-2 w-col-small-small-stack">
                                    <div>7 comentários</div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="box-btns w-clearfix">
                    <a href="#" class="btn violet left w-button">mais ideias</a>
                    <a href="#" class="btn verde w-button">nova ideia</a>
                </div>

            </div>

            <div class="container container-33">
                <div class="header-box w-clearfix">
                    <h2 class="h2-funcionario">Funcionário do Mês</h2>
                    <div data-delay="0" class="drop-order funcionario w-dropdown">
                        <div class="drop-order-toggle funcionario w-dropdown-toggle">
                            <div class="w-icon-dropdown-toggle">
                            </div>
                            <div>Julho</div>
                        </div>
                        <nav class="drop-list-order w-dropdown-list">
                            <a href="#" class="w-dropdown-link">Link 1</a>
                            <a href="#" class="w-dropdown-link">Link 2</a>
                            <a href="#" class="w-dropdown-link">Link 3</a>
                        </nav>
                    </div>
                </div>
                <div class="box-bg-funcionario">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/foto-ruan2.png" alt="" class="img-bg-funcionario">
                </div>
                <div class="img-funcionario">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/foto-ruan2.png" alt="">
                </div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ico-ribbon.png" alt="" class="ico-ribbon">

                <div class="nome-funcionario-mes">Ruan Araújo</div>
                <p class="desc-funcionario-mes">Nosso lunático do café foi eleito funcionário do mês em Julho. Parabéns, Ruan!</p>
                <a href="#" class="btn violet w-button">outros vencedores</a>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container-geral">
            <h2 class="h2-section">Calendários, datas e mais</h2>
        </div>
    </div>
    <div class="section">
        <div class="container-geral w-clearfix">
            <div class="container container-40">
                <div class="header-box w-clearfix">
                    <h2>Calendário Geral</h2>
                    <div data-animation="slide" data-duration="500" data-infinite="1" class="slider-meses w-slider">
                        <div class="mask-slider-meses w-slider-mask">
                            <div class="slide-mes w-slide">
                                <div>Janeiro</div>
                            </div>
                            <div class="slide-mes w-slide">
                                <div>Fevereiro</div>
                            </div>
                            <div class="slide-mes w-slide">
                                <div>Março</div>
                            </div>
                            <div class="slide-mes w-slide">
                                <div>Abril</div>
                            </div>
                            <div class="slide-mes w-slide">
                                <div>Maio</div>
                            </div>
                            <div class="slide-mes w-slide">
                                <div>Junho</div>
                            </div>
                            <div class="slide-mes w-slide">
                                <div>Julho</div>
                            </div>
                            <div class="slide-mes w-slide">
                                <div>Agosto</div>
                            </div>
                            <div class="slide-mes w-slide">
                                <div>Setembro</div>
                            </div>
                            <div class="slide-mes w-slide">
                                <div>Outubro</div>
                            </div>
                            <div class="slide-mes w-slide">
                                <div>Novembro</div>
                            </div>
                            <div class="slide-mes w-slide">
                                <div>Dezembro</div>
                            </div>
                        </div>
                        <div class="arrow-slider-meses w-slider-arrow-left">
                            <div class="w-icon-slider-left"></div>
                        </div>
                        <div class="arrow-slider-meses w-slider-arrow-right">
                            <div class="w-icon-slider-right"></div>
                        </div>
                        <div class="w-hidden-main w-hidden-medium w-hidden-small w-hidden-tiny w-slider-nav w-round"></div>
                    </div>
                </div>
                <div class="container-calendario">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/calendario.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/calendario-p-500.jpeg 500w, <?php echo get_stylesheet_directory_uri(); ?>/images/calendario.jpg 610w" sizes="(max-width: 479px) 100vw, (max-width: 767px) 77vw, (max-width: 991px) 80vw, 32vw" alt="" class="img-calendario">
                </div>

                <div class="box-btns w-clearfix">
                    <a href="#" class="btn violet left w-button">mais ideias</a>
                    <a href="#" class="btn verde w-button">nova ideia</a>
                </div>
            </div>
            <div class="container container-33">
                <div class="header-box">
                    <h2>Atas de Reuniões</h2>
                </div>
                <ul class="ul-reunioes w-list-unstyled">
                    <li class="li-reunioes w-clearfix">
                        <a href="#" class="info-reuniao w-inline-block">
                            <h3 class="h3-reuniao">Reunião OR  #19</h3>
                            <div class="data">16/07/2018</div>
                        </a>
                    </li>
                    <li class="li-reunioes w-clearfix">
                        <a href="#" class="info-reuniao w-inline-block">
                            <h3 class="h3-reuniao">Mi volutpat</h3>
                            <div class="data">16/07/2018</div>
                        </a>
                    </li>
                    <li class="li-reunioes w-clearfix">
                        <a href="#" class="info-reuniao w-inline-block">
                            <h3 class="h3-reuniao">Reunião OR  #18</h3>
                            <div class="data">16/07/2018</div>
                        </a>
                    </li>
                    <li class="li-reunioes w-clearfix">
                        <a href="#" class="info-reuniao w-inline-block">
                            <h3 class="h3-reuniao">Vivamus vitae</h3>
                            <div class="data">16/07/2018</div>
                        </a>
                    </li>
                    <li class="li-reunioes last w-clearfix">
                        <a href="#" class="info-reuniao w-inline-block">
                            <h3 class="h3-reuniao">Maecenas at auctor</h3>
                            <div class="data">16/07/2018</div>
                        </a>
                    </li>
                    <li class="li-reunioes last w-clearfix">
                        <a href="#" class="info-reuniao w-inline-block">
                            <h3 class="h3-reuniao">Maecenas at auctor</h3>
                            <div class="data">16/07/2018</div>
                        </a>
                    </li>
                </ul><a href="#" class="btn violet w-button">outras atas</a>
            </div>
            <div class="container container-33">
                <div class="header-box">
                    <h2>Aniversários</h2>
                </div>
                <ul class="ul-aniversariantes w-list-unstyled">
                    <li class="li-aniversariantes aniversariante-dia w-clearfix">
                        <div class="box-foto-niver">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/foto-ruan2.png" alt="" class="foto-niver">
                        </div>

                        <div class="info-niver">
                            <h3 class="h3-niver">Ruan Araújo</h3>
                            <div class="data">Hoje!</div>
                        </div>
                    </li>
                    <li class="li-aniversariantes w-clearfix">
                        <div class="box-foto-niver">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/foto-ruan2.png" alt="" class="foto-niver">
                        </div>
                        <div class="info-niver">
                            <h3 class="h3-niver">Ruan Araújo</h3>
                            <div class="data">18 de Agosto</div>
                        </div>
                    </li>
                    <li class="li-aniversariantes w-clearfix">
                        <div class="box-foto-niver">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/foto-ruan2.png" alt="" class="foto-niver">
                        </div>
                        <div class="info-niver">
                            <h3 class="h3-niver">Ruan Araújo</h3>
                            <div class="data">18 de Agosto</div>
                        </div>
                    </li>
                    <li class="li-aniversariantes w-clearfix">
                        <div class="box-foto-niver">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/foto-ruan2.png" alt="" class="foto-niver">
                        </div>
                        <div class="info-niver">
                            <h3 class="h3-niver">Ruan Araújo</h3>
                            <div class="data">18 de Agosto</div>
                        </div>
                    </li>
                    <li class="li-aniversariantes w-clearfix">
                        <div class="box-foto-niver">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/foto-ruan2.png" alt="" class="foto-niver">
                        </div>
                        <div class="info-niver">
                            <h3 class="h3-niver">Ruan Araújo</h3>
                            <div class="data">18 de Agosto</div>
                        </div>
                    </li>
                    <li class="li-aniversariantes w-clearfix">
                        <div class="box-foto-niver">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/foto-ruan2.png" alt="" class="foto-niver">
                        </div>
                        <div class="info-niver">
                            <h3 class="h3-niver">Ruan Araújo</h3>
                            <div class="data">18 de Agosto</div>
                        </div>
                    </li>
                </ul><a href="#" class="btn violet w-button">próximos</a>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container-geral">
            <h2 class="h2-section">Integração OR</h2>
        </div>
    </div>
    <div class="section">
        <div class="container-geral w-clearfix">
            <div class="container container-40">
                <div class="header-box">
                    <h2>Happy Hour</h2>
                </div>
                <ul class="ul-eventos w-list-unstyled">
                    <li class="li-eventos w-clearfix">
                        <div class="circle-data verde">
                            <div>17</div>
                        </div>
                        <div class="info-evento">
                            <div class="nome-evento">Keka’s Bar Cervejada<br></div>
                            <div class="detalhe-evento">19h00 * Keka</div>
                        </div>
                    </li>
                    <li class="li-eventos w-clearfix">
                        <div class="circle-data azul">
                            <div>25</div>
                        </div>
                        <div class="info-evento">
                            <div class="nome-evento">Chá de Bebê Fernanda<br></div>
                            <div class="detalhe-evento">18h00 * Auditório Rai</div>
                        </div>
                    </li>
                    <li class="li-eventos w-clearfix">
                        <div class="circle-data verde">
                            <div>27</div>
                        </div>
                        <div class="info-evento">
                            <div class="nome-evento">Festa Junina<br></div>
                            <div class="detalhe-evento">18h00 * Rai</div>
                        </div>
                    </li>
                    <li class="li-eventos w-clearfix">
                        <div class="circle-data roxo">
                            <div>05</div>
                        </div>
                        <div class="info-evento">
                            <div class="nome-evento">Almoço Galera<br></div>
                            <div class="detalhe-evento">18h00 * Degas Parmegiana</div>
                        </div>
                    </li>
                    <li class="li-eventos w-clearfix">
                        <div class="circle-data rosa">
                            <div>30</div>
                        </div>
                        <div class="info-evento">
                            <div class="nome-evento">Lorem Ipsum<br></div>
                            <div class="detalhe-evento">18h00 * Lorem Ipsum</div>
                        </div>
                    </li>
                </ul>
                <div class="box-btns w-clearfix">
                    <a href="#" class="btn violet left w-button">calendário completo</a>
                    <a href="#" class="btn verde w-button">adicionar evento</a>
                </div>
            </div>
            <div class="container container-33">
                <div class="header-box">
                    <h2>Galeria</h2>
                </div>
                <div class="container-galeria">
                    <div class="box-gallery w-clearfix">
                        <a href="#" class="lightbox-link-box w-inline-block w-lightbox">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/galeria/ex-galeria1.jpg" alt="" class="img-galeria">
                            <div class="hover-galeria" data-ix="hover-galeria">
                                <h4>Hover Ipsum</h4>
                                <div>ver galeria +</div>
                            </div>
                            <script type="application/json" class="w-json">
                                {
                                    "items": [{
                                        "width": 600,
                                        "caption": "party",
                                        "height": 600,
                                        "fileName": "ex-galeria1-g.jpg",
                                        "origFileName": "ex-galeria1-g.jpg",
                                        "url": "<?php echo get_stylesheet_directory_uri(); ?>/images/galeria/ex-galeria1-g.jpg",
                                        "_id": "5ba2c56d609bb86cfc89134a",
                                        "type": "image",
                                        "fileSize": 73113
                                    }],
                                    "group": "galeria-home"
                                }

                            </script>
                        </a>
                        <a href="#" class="lightbox-link-box w-inline-block w-lightbox">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/galeria/ex-galeria2.jpg" alt="" class="img-galeria">
                            <div class="hover-galeria" data-ix="hover-galeria">
                                <h4>Hover Ipsum</h4>
                                <div>ver galeria +</div>
                            </div>
                            <script type="application/json" class="w-json">
                                {
                                    "items": [{
                                        "width": 600,
                                        "caption": "party",
                                        "height": 600,
                                        "fileName": "ex-galeria1-g.jpg",
                                        "origFileName": "ex-galeria1-g.jpg",
                                        "url": "<?php echo get_stylesheet_directory_uri(); ?>/images/galeria/ex-galeria1-g.jpg",
                                        "_id": "5ba2c56d609bb86cfc89134a",
                                        "type": "image",
                                        "fileSize": 73113
                                    }],
                                    "group": "galeria-home"
                                }

                            </script>
                        </a>
                        <a href="#" class="lightbox-link-box w-inline-block w-lightbox">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/galeria/ex-galeria3.jpg" alt="" class="img-galeria">
                            <div class="hover-galeria" data-ix="hover-galeria">
                                <h4>Hover Ipsum</h4>
                                <div>ver galeria +</div>
                            </div>
                            <script type="application/json" class="w-json">
                                {
                                    "items": [{
                                        "width": 600,
                                        "caption": "party",
                                        "height": 600,
                                        "fileName": "ex-galeria1-g.jpg",
                                        "origFileName": "ex-galeria1-g.jpg",
                                        "url": "<?php echo get_stylesheet_directory_uri(); ?>/images/galeria/ex-galeria1-g.jpg",
                                        "_id": "5ba2c56d609bb86cfc89134a",
                                        "type": "image",
                                        "fileSize": 73113
                                    }],
                                    "group": "galeria-home"
                                }

                            </script>
                        </a>
                        <a href="#" class="lightbox-link-box w-inline-block w-lightbox">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/galeria/ex-galeria4.jpg" alt="" class="img-galeria">
                            <div class="hover-galeria" data-ix="hover-galeria">
                                <h4>Hover Ipsum</h4>
                                <div>ver galeria +</div>
                            </div>
                            <script type="application/json" class="w-json">
                                {
                                    "items": [{
                                        "width": 600,
                                        "caption": "party",
                                        "height": 600,
                                        "fileName": "ex-galeria1-g.jpg",
                                        "origFileName": "ex-galeria1-g.jpg",
                                        "url": "<?php echo get_stylesheet_directory_uri(); ?>/images/galeria/ex-galeria1-g.jpg",
                                        "_id": "5ba2c56d609bb86cfc89134a",
                                        "type": "image",
                                        "fileSize": 73113
                                    }],
                                    "group": "galeria-home"
                                }

                            </script>
                        </a></div>
                </div><a href="#" class="btn violet w-button">próximos</a>
            </div>
            <div class="container container-33">
                <div class="header-box">
                    <h2>Café no Bule</h2>
                </div>
                <div class="container-grafico-cafe">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/grafico-cafe.png" alt="">
                </div>
                <div class="box-total">
                    <div class="valor-arrecadado">RS 37,00</div>
                    <div>de R$ 60,00</div>
                </div>
                <p class="info-arrecadacao">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                <a href="#" class="btn violet w-button">próximos</a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/webflow.js" type="text/javascript"></script>
    <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>

</html>
