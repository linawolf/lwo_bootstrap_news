<?php

$iconsToRegister = [
    'news-detail-1col',
    'news-detail-2col',
    'news-detail-2col-left',
    'news-detail-2col-right',
    'news-detail-3col',
];
$customIcons = [];

foreach ($iconsToRegister as $icon) {
    $customIcons['$icon'] = [
        'provider' => \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        'source' => 'EXT:lwo_bootstrap_news/Resources/Public/Icons/' . $icon . '.svg',
    ];
}

return $customIcons;