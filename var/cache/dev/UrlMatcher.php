<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/actor' => [[['_route' => 'actor_index', '_controller' => 'App\\Controller\\ActorController::index'], null, ['GET' => 0], null, true, false, null]],
        '/actor/new' => [[['_route' => 'actor_new', '_controller' => 'App\\Controller\\ActorController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/category' => [[['_route' => 'category', '_controller' => 'App\\Controller\\CategoryController::add'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/episode' => [[['_route' => 'episode_index', '_controller' => 'App\\Controller\\EpisodeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/episode/new' => [[['_route' => 'episode_new', '_controller' => 'App\\Controller\\EpisodeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/program' => [[['_route' => 'program_index', '_controller' => 'App\\Controller\\ProgramController::index'], null, ['GET' => 0], null, true, false, null]],
        '/program/new' => [[['_route' => 'program_new', '_controller' => 'App\\Controller\\ProgramController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/season' => [[['_route' => 'season_index', '_controller' => 'App\\Controller\\SeasonController::index'], null, ['GET' => 0], null, true, false, null]],
        '/season/new' => [[['_route' => 'season_new', '_controller' => 'App\\Controller\\SeasonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/wild' => [[['_route' => 'wild_index', '_controller' => 'App\\Controller\\WildController::index'], null, null, null, false, false, null]],
        '/wild/wild/catlist' => [[['_route' => 'wild_category_list', '_controller' => 'App\\Controller\\WildController::categories'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/actor/([^/]++)(?'
                    .'|(*:187)'
                    .'|/edit(*:200)'
                    .'|(*:208)'
                .')'
                .'|/episode/([^/]++)(?'
                    .'|(*:237)'
                    .'|/edit(*:250)'
                    .'|(*:258)'
                .')'
                .'|/program/([^/]++)(?'
                    .'|(*:287)'
                    .'|/edit(*:300)'
                    .'|(*:308)'
                .')'
                .'|/season/([^/]++)(?'
                    .'|(*:336)'
                    .'|/edit(*:349)'
                    .'|(*:357)'
                .')'
                .'|/wild/(?'
                    .'|se(?'
                        .'|ries(?:/([a-z0-9-]+))?(*:402)'
                        .'|ason/([0-9]+)(*:423)'
                    .')'
                    .'|program(?:/([^/]++))?(*:453)'
                    .'|category(?:/([a-z0-9-]+))?(*:487)'
                    .'|wild/episode/([^/]++)(*:516)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        187 => [[['_route' => 'actor_show', '_controller' => 'App\\Controller\\ActorController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        200 => [[['_route' => 'actor_edit', '_controller' => 'App\\Controller\\ActorController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        208 => [[['_route' => 'actor_delete', '_controller' => 'App\\Controller\\ActorController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        237 => [[['_route' => 'episode_show', '_controller' => 'App\\Controller\\EpisodeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        250 => [[['_route' => 'episode_edit', '_controller' => 'App\\Controller\\EpisodeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        258 => [[['_route' => 'episode_delete', '_controller' => 'App\\Controller\\EpisodeController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        287 => [[['_route' => 'program_show', '_controller' => 'App\\Controller\\ProgramController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        300 => [[['_route' => 'program_edit', '_controller' => 'App\\Controller\\ProgramController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        308 => [[['_route' => 'program_delete', '_controller' => 'App\\Controller\\ProgramController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        336 => [[['_route' => 'season_show', '_controller' => 'App\\Controller\\SeasonController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        349 => [[['_route' => 'season_edit', '_controller' => 'App\\Controller\\SeasonController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        357 => [[['_route' => 'season_delete', '_controller' => 'App\\Controller\\SeasonController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        402 => [[['_route' => 'wild_show', 'slug' => null, '_controller' => 'App\\Controller\\WildController::show'], ['slug'], null, null, false, true, null]],
        423 => [[['_route' => 'wild_show_season', 'id' => null, '_controller' => 'App\\Controller\\WildController::showBySeason'], ['seasonId'], null, null, false, true, null]],
        453 => [[['_route' => 'wild_show_program', 'programName' => null, '_controller' => 'App\\Controller\\WildController::showByProgram'], ['programName'], null, null, false, true, null]],
        487 => [[['_route' => 'wild_show_category', 'categoryName' => null, '_controller' => 'App\\Controller\\WildController::showByCategory'], ['categoryName'], null, null, false, true, null]],
        516 => [
            [['_route' => 'wild_show_episode', '_controller' => 'App\\Controller\\WildController::showByEpisode'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
