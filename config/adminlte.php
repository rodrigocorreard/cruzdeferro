<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#61-title
    |
    */

    'title' => 'Cruz de Ferro ',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#62-logo
    |
    */

    'logo' => 'Cruz de Ferro MC',
    'logo_img' => 'null',
    'logo_img_class' => 'brand-image-xl',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => '',

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#63-layout
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => null,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,

    /*
    |--------------------------------------------------------------------------
    | Extra Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#64-classes
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_header' => 'container-fluid',
    'classes_content' => 'container-fluid',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand-md',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#65-sidebar
    |
    */

    'sidebar_mini' => true,
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#66-control-sidebar-right-sidebar
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#67-urls
    |
    */

    'use_route_url' => false,

    'dashboard_url' => 'home',

    'logout_url' => 'logout',

    'login_url' => 'login',

    'register_url' => 'register',

    'password_reset_url' => 'password/reset',

    'password_email_url' => 'password/email',

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#68-laravel-mix
    |
    */

    'enabled_laravel_mix' => false,

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#69-menu
    |
    */

    'menu' => [
/*        [
            'text' => 'Comando',
            'search' => false,
            'topnav' => false,
        ],*/
        [
            'text' => 'blog',
            'url'  => 'admin/blog',
            'can'  => 'manage-blog',
        ],
        ['header' => 'Navegação'],
        [
            'text'          =>  'Ficha Cadastral',
            'icon'          =>  'fas fa-users ',
            'icon_color'    =>  'white',
            'url'           =>  '/membro'
        ],
        [
            'text'          =>  'Controle de Viagens',
            'icon'          =>  'fas fa-route ',
            'icon_color'    =>  'red',
            'url'           =>  '/viagem'
        ],
        ['header' => 'Cadastros'],
        [
            'text'          =>  'Cadastro de Sedes',
            'icon'          =>  'fas fa-home ',
            'icon_color'    =>  'orange',
            'url'           =>  '/sede'
        ],
        [
            'text'          =>  'Cadastro de Cargos',
            'icon'          =>  'fas fa-briefcase ',
            'icon_color'    =>  'yellow',
            'url'           =>  '/cargo'
        ],

        /*[
            'text'    => ' Clientes',
            'icon'        => 'fas fa-users',
            'icon_color' => 'blue',
            'submenu' => [

                [
            'text'    => 'Cadastro',
            'icon'    => 'fas fa-fw fa-share',
            'icon_color' => 'blue',
            'submenu' => [
                [
                    'text' => '107-Limite de Crédito',
                    'icon_color' => 'blue',
                    'url'  => '#',
                ],
                [
                    'text' => '109-Alterações',
                    'url'  => '#',
                    'icon_color' => 'blue',
                ],
                [
                    'text' => '110-Clientes [F2]',
                    'url'  => '#',
                    'icon_color' => 'blue',
                ],
                [
                    'text' => '113-Receita Oftalmológica',
                    'url'  => '#',
                    'icon_color' => 'blue',
                ],
                [
                    'text' => '119-Telefones/E-mail',
                    'url'  => '#',
                    'icon_color' => 'blue',
                ],
                [
                    'text' => '120-Agenda do Cliente',
                    'url'  => '#',
                    'icon_color' => 'blue',
                ],
                [
                    'text' => '125-Profissões',
                    'url'  => '#',
                    'icon_color' => 'blue',
                ],
                [
                    'text' => '126-Segmentos',
                    'url'  => '#',
                    'icon_color' => 'blue',
                ],

            ],
        ],
        [
            'text'    => 'Busca e Consulta',
            'icon'    => 'fas fa-fw fa-share',
            'icon_color' => 'blue',
            'submenu' => [
                [
                    'text' => '105-Vendas[F12]',
                    'url'  => '#',
                    'icon_color' => 'blue',
                ],
                [
                    'text' => '106-Bônus',
                    'url'  => '#',
                    'icon_color' => 'blue',
                ],
                [
                    'text' => '108-Por Telefone/E-mail',
                    'url'  => '#',
                    'icon_color' => 'blue',
                ],
                [
                    'text' => '112-Busca Cadastro Pessoal',
                    'url'  => '#',
                    'icon_color' => 'blue',
                ],
                [
                    'text' => '118-Saldo de Bônus',
                    'url'  => '#',
                    'icon_color' => 'blue',
                ],
                [
                    'text' => '140-Contas a Receber[F4]',
                    'url'  => '#',
                    'icon_color' => 'blue',
                ],
                [
                    'text' => '144-Agenda de Anotações',
                    'url'  => '#',
                    'icon_color' => 'blue',
                ],
                [
                    'text' => '147-Receita Oftalmológica',
                    'url'  => '#',
                    'icon_color' => 'blue',
                ],
                [
                    'text' => '149-Telefone/E-mail',
                    'url'  => '#',
                    'icon_color' => 'blue',
                ],

            ],
        ],
        [
            'text'    => 'Autorizados pelo Cliente',
            'icon'    => 'fas fa-fw fa-share',
            'icon_color' => 'blue',
            'submenu' => [
                [
                    'text' => '111-Cadastro',
                    'url'  => '#',
                    'icon_color' => 'blue',
                ],
                [
                    'text' => '143-Consulta',
                    'url'  => '#',
                    'icon_color' => 'blue',
                ],

            ],
        ],
        [
            'text'    => 'Situação do Crediário',
            'icon'    => 'fas fa-fw fa-share',
            'icon_color' => 'blue',
            'submenu' => [
                [
                    'text' => '130-Alterações',
                    'url'  => '#',
                    'icon_color' => 'blue',
                ],

            ],
        ],
        [
            'text'    => 'SMS',
            'icon'    => 'fas fa-fw fa-share',
            'icon_color' => 'blue',
            'submenu' => [
                [
                    'text' => '102-Envio de Anúncios',
                    'url'  => '#',
                    'icon_color' => 'blue',
                ],

            ],
        ],
        [
            'text'    => 'E-mail',
            'icon'    => 'fas fa-fw fa-share',
            'icon_color' => 'blue',
            'submenu' => [
                [
                    'text' => '104-Envio de Anúncios',
                    'url'  => '#',
                    'icon_color' => 'blue',
                ],

            ],
        ],
    ],
],

        [
            'text'    => '  Vendas',
            'icon'        => 'fas fa-money-bill-alt',
            'icon_color' => 'green',
            'submenu' => [

                [
                    'text'    => 'Caixa',
                    'url'     => '#',
                    'icon'    => 'fas fa-fw fa-share',
                    'icon_color' => 'green',

                    'submenu' => [
                        [
                            'text' => '124-Cadastro de Caixa',
                            'url'  => '#',
                            'icon_color' => 'green',
                        ],
                        [
                            'text' => '132-Movimento do Caixa',
                            'url'  => '#',
                            'icon_color' => 'green',
                        ],
                        [
                            'text' => '133-Fechamento',
                            'url'  => '#',
                            'icon_color' => 'green',
                        ],
                        [
                            'text' => '134-Caixa',
                            'url'  => '#',
                            'icon_color' => 'green',
                        ],

                    ],

                ],
                [
                    'text'    => 'Cartões(Créd/Déb/Próp)',
                    'url'     => '#',
                    'icon'    => 'fas fa-fw fa-share',
                    'icon_color' => 'green',
                    'submenu' => [
                        [
                            'text' => '117-Conciliação de Cartões',
                            'url'  => '#',
                            'icon_color' => 'green',
                        ],
                        [
                            'text' => '137-Baixa de Cartões',
                            'url'  => '#',
                            'icon_color' => 'green',
                        ],
                        [
                            'text' => '142-Consulta de Cartões',
                            'url'  => '#',
                            'icon_color' => 'green',
                        ],
                        [
                            'text' => '148-Consulta Cartão Próp',
                            'url'  => '#',
                            'icon_color' => 'green',
                        ],

                    ],
                ],

            ],

        ],

        [
            'text'    => ' Contas a Receber',
            'icon'        => 'fas fa-briefcase',
            'icon_color' => 'cyan',
            'label'       => 5,
            'label_color' => 'success',
            'submenu' => [

                [
                    'text'    => 'Caixa',
                    'url'     => '#',
                    'icon'    => 'fas fa-fw fa-share',
                    'icon_color' => 'cyan',
                    'submenu' => [
                        [
                            'text' => '124-Cadastro de Caixa',
                            'url'  => '#',
                            'icon_color' => 'cyan',
                        ],
                        [
                            'text' => '132-Movimento do Caixa',
                            'url'  => '#',
                            'icon_color' => 'cyan',
                        ],
                        [
                            'text' => '133-Fechamento',
                            'url'  => '#',
                            'icon_color' => 'cyan',
                        ],
                        [
                            'text' => '134-Caixa',
                            'url'  => '#',
                            'icon_color' => 'yellow',
                        ],

                    ],

                ],

            ],
        ],

        [
            'text'    => ' Estoque',
            'icon'        => 'fas fa-box-open',
            'icon_color' => 'red',
            'submenu' => [

                [
                    'text'    => 'Caixa',
                    'url'     => '#',
                    'icon'    => 'fas fa-fw fa-share',
                    'icon_color' => 'red',
                    'submenu' => [
                        [
                            'text' => '124-Cadastro de Caixa',
                            'url'  => '#',
                            'icon_color' => 'red',
                        ],
                        [
                            'text' => '132-Movimento do Caixa',
                            'url'  => '#',
                            'icon_color' => 'red',
                        ],
                        [
                            'text' => '133-Fechamento',
                            'url'  => '#',
                            'icon_color' => 'red',
                        ],
                        [
                            'text' => '134-Caixa',
                            'url'  => '#',
                            'icon_color' => 'red',
                        ],

                    ],

                ],

            ],
        ],

        [
            'text'    => ' Fornecedores',
            'icon'    => 'fas fa-boxes ',
            'icon_color' => 'yellow',
            'submenu' => [

                [
                    'text'    => 'Caixa',
                    'url'     => '#',
                    'icon'    => 'fas fa-fw fa-share',
                    'submenu' => [
                        [
                            'text' => '124-Cadastro de Caixa',
                            'url'  => '#',
                        ],
                        [
                            'text' => '132-Movimento do Caixa',
                            'url'  => '#',
                        ],
                        [
                            'text' => '133-Fechamento',
                            'url'  => '#',
                        ],
                        [
                            'text' => '134-Caixa',
                            'url'  => '#',
                        ],

                    ],

                ],

            ],
        ],

        [
            'text'    => ' Contas a Pagar',
            'icon'    => 'fas fa-comment-dollar',
            'icon_color' => 'soft red',
            'label'       => 4,
            'label_color' => 'warning',
            'submenu' => [

                [
                    'text'    => 'Caixa',
                    'url'     => '#',
                    'icon'    => 'fas fa-fw fa-share',
                    'submenu' => [
                        [
                            'text' => '124-Cadastro de Caixa',
                            'url'  => '#',
                        ],
                        [
                            'text' => '132-Movimento do Caixa',
                            'url'  => '#',
                        ],
                        [
                            'text' => '133-Fechamento',
                            'url'  => '#',
                        ],
                        [
                            'text' => '134-Caixa',
                            'url'  => '#',
                        ],

                    ],

                ],

            ],
        ],

        [
            'text'    => ' Funcionários',
            'icon'    => 'fas fa-user-circle',
            'icon_color' => 'teal',
            'submenu' => [

                [
                    'text'    => 'Caixa',
                    'url'     => '#',
                    'icon'    => 'fas fa-fw fa-share',
                    'icon_color' => 'teal',
                    'submenu' => [
                        [
                            'text' => '124-Cadastro de Caixa',
                            'url'  => '#',
                            'icon_color' => 'teal',
                        ],
                        [
                            'text' => '132-Movimento do Caixa',
                            'url'  => '#',
                            'icon_color' => 'teal',
                        ],
                        [
                            'text' => '133-Fechamento',
                            'url'  => '#',
                            'icon_color' => 'teal',
                        ],
                        [
                            'text' => '134-Caixa',
                            'url'  => '#',
                            'icon_color' => 'white',
                        ],

                    ],

                ],

            ],
        ],

        [
            'text'    => ' Serviços',
            'icon'        => 'fas fa-tools',
            'icon_color' => 'gray',
            'submenu' => [

                [
                    'text'    => 'Caixa',
                    'url'     => '#',
                    'icon'    => 'fas fa-fw fa-share',
                    'icon_color' => 'gray',
                    'submenu' => [
                        [
                            'text' => '124-Cadastro de Caixa',
                            'url'  => '#',
                            'icon_color' => 'gray',
                        ],
                        [
                            'text' => '132-Movimento do Caixa',
                            'url'  => '#',
                            'icon_color' => 'gray',
                        ],
                        [
                            'text' => '133-Fechamento',
                            'url'  => '#',
                            'icon_color' => 'gray',
                        ],
                        [
                            'text' => '134-Caixa',
                            'url'  => '#',
                            'icon_color' => 'gray',
                        ],

                    ],

                ],

            ],
        ],

        [
            'text'    => ' Diversos',
            'icon'        => 'fas fa-tools',
            'icon_color' => 'purple',
            'submenu' => [

                [
                    'text'    => 'Caixa',
                    'icon'    => 'fas fa-fw fa-share',
                    'icon_color' => 'purple',
                    'url'     => '#',
                    'submenu' => [
                        [
                            'text' => '124-Cadastro de Caixa',
                            'url'  => '#',
                            'icon_color' => 'purple',
                        ],
                        [
                            'text' => '132-Movimento do Caixa',
                            'url'  => '#',
                            'icon_color' => 'purple',
                        ],
                        [
                            'text' => '133-Fechamento',
                            'url'  => '#',
                            'icon_color' => 'purple',
                        ],
                        [
                            'text' => '134-Caixa',
                            'url'  => '#',
                            'icon_color' => 'purple',
                        ],

                    ],

                ],

            ],
        ],

        [
            'text'    => ' Configurações',
            'icon'        => 'fas fa-cogs',
            'icon_color' => 'orange',
            'submenu' => [

                [
                    'text'    => 'Caixa',
                    'url'     => '#',
                    'icon'    => 'fas fa-fw fa-share',
                    'icon_color' => 'orange',
                    'submenu' => [
                        [
                            'text' => '124-Cadastro de Caixa',
                            'url'  => '#',
                            'icon_color' => 'orange',
                        ],
                        [
                            'text' => '132-Movimento do Caixa',
                            'url'  => '#',
                            'icon_color' => 'orange',
                        ],
                        [
                            'text' => '133-Fechamento',
                            'url'  => '#',
                            'icon_color' => 'orange',
                        ],
                        [
                            'text' => '134-Caixa',
                            'url'  => '#',
                            'icon_color' => 'orange',
                        ],

                    ],

                ],

            ],
        ],

        [
            'text'    => ' Informações Gerenciais',
            'icon'        => 'far fa-file-alt',
            'icon_color' => 'fuchsia',
            'submenu' => [

                [
                    'text'    => 'Caixa',
                    'url'     => '#',
                    'icon'    => 'fas fa-fw fa-share',
                    'icon_color' => 'fuchsia',
                    'submenu' => [
                        [
                            'text' => '124-Cadastro de Caixa',
                            'url'  => '#',
                            'icon_color' => 'fuchsia',
                        ],
                        [
                            'text' => '132-Movimento do Caixa',
                            'url'  => '#',
                            'icon_color' => 'fuchsia',
                        ],
                        [
                            'text' => '133-Fechamento',
                            'url'  => '#',
                            'icon_color' => 'fuchsia',
                        ],
                        [
                            'text' => '134-Caixa',
                            'url'  => '#',
                            'icon_color' => 'fuchsia',
                        ],

                    ],

                ],

            ],
        ],*/
        ['header' => ' '],



        ['header' => 'Configurações da Conta'],
        [
            'text'          => 'Registrar Usuário',
            'url'           => '/register',
            'icon'          => 'fas fa-fw fa-user',
            'icon_color'    =>  'green',
        ],
//        [
//            'text' => 'Meu Perfil',
//            'url'  => '#',
//            'icon' => 'fas fa-fw fa-user',
//        ],
//        [
//            'text' => 'Mudar Senha',
//            'url'  => '#',
//            'icon' => 'fas fa-fw fa-lock',
//        ],
/*        [
            'text'    => 'Menu',
            'icon'    => 'fas fa-fw fa-share',
            'submenu' => [
                [
                    'text' => 'level_one',
                    'url'  => '#',
                ],
                [
                    'text'    => 'level_one',
                    'url'     => '#',
                    'submenu' => [
                        [
                            'text' => 'level_two',
                            'url'  => '#',
                        ],
                        [
                            'text'    => 'level_two',
                            'url'     => '#',
                            'submenu' => [
                                [
                                    'text' => 'level_three',
                                    'url'  => '#',
                                ],
                                [
                                    'text' => 'level_three',
                                    'url'  => '#',
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'text' => 'level_one',
                    'url'  => '#',
                ],
            ],
        ],*/
/*        ['header' => 'labels'],
        [
            'text'       => 'important',
            'icon_color' => 'red',
        ],
        [
            'text'       => 'warning',
            'icon_color' => 'yellow',
        ],
        [
            'text'       => 'information',
            'icon_color' => 'aqua',
        ],*/
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#610-menu-filters
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#611-plugins
    |
    */

    'plugins' => [
        [
            'name' => 'Datatables',
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.css',
                ],
            ],
        ],
        [
            'name' => 'Select2',
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        [
            'name' => 'Chartjs',
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        [
            'name' => 'Sweetalert2',
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        [
            'name' => 'Pace',
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],
];
