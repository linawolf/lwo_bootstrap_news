<?php
defined('TYPO3') or die();


$ll = 'LLL:EXT:lwo_bootstrap_news/Resources/Private/Language/locallang_db.xlf:';

$fields = [

    'subheader' => [
        'exclude' => true,
        'label' => $ll . 'tx_news_domain_model_news.subheader',
        'onChange' => 'reload',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['100', '', 'news-detail-1col'],
                ['33-66', '33-66', 'news-detail-2col-right'],
                ['50-50', '50-50', 'news-detail-2col'],
                ['66-33', '66-33', 'news-detail-2col-left'],
                ['33-33-33', '33-33-33', 'news-detail-3col'],
            ],
            'fieldWizard' => [
                'selectIcons' => [
                    'disabled' => false,
                ],
            ],
            'size' => 1,
            'maxitems' => 1,
        ]
    ],
    'detail_style' => [
        'exclude' => true,
        'label' => $ll . 'tx_news_domain_model_news.detail_style',
        'onChange' => 'reload',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['100', '', 'news-detail-1col'],
                ['33-66', '33-66', 'news-detail-2col-left'],
                ['50-50', '50-50', 'news-detail-2col'],
                ['66-33', '66-33', 'news-detail-2col-right'],
                ['33-33-33', '33-33-33', 'news-detail-3col'],
            ],
            'fieldWizard' => [
                'selectIcons' => [
                    'disabled' => false,
                ],
            ],
            'size' => 1,
            'maxitems' => 1,
        ]
    ],
    'content_elements_col2' => [
        'exclude' => true,
        'label' => $ll . 'tx_news_domain_model_news.content_elements_col2',
        'displayCond' => 'FIELD:detail_style:!=:',
        'config' => [
            'type' => 'inline',
            'allowed' => 'tt_content',
            'foreign_table' => 'tt_content',
            'foreign_sortby' => 'sorting',
            'foreign_field' => 'tx_news_related_news_col2',
            'minitems' => 0,
            'maxitems' => 99,
            'appearance' => [
                'useXclassedVersion' => true,
                'collapseAll' => true,
                'expandSingle' => true,
                'levelLinksPosition' => 'bottom',
                'useSortable' => true,
                'showPossibleLocalizationRecords' => true,
                'showRemovedLocalizationRecords' => true,
                'showAllLocalizationLink' => true,
                'showSynchronizationLink' => true,
                'enabledControls' => [
                    'info' => false,
                ]
            ],
            'behaviour' => [
                'allowLanguageSynchronization' => true,
            ],
        ]
    ],
    'content_elements_col3' => [
        'exclude' => true,
        'label' => $ll . 'tx_news_domain_model_news.content_elements_col3',
        'displayCond' => 'FIELD:detail_style:=:33-33-33',
        'config' => [
            'type' => 'inline',
            'allowed' => 'tt_content',
            'foreign_table' => 'tt_content',
            'foreign_sortby' => 'sorting',
            'foreign_field' => 'tx_news_related_news_col2',
            'minitems' => 0,
            'maxitems' => 99,
            'appearance' => [
                'useXclassedVersion' => true,
                'collapseAll' => true,
                'expandSingle' => true,
                'levelLinksPosition' => 'bottom',
                'useSortable' => true,
                'showPossibleLocalizationRecords' => true,
                'showRemovedLocalizationRecords' => true,
                'showAllLocalizationLink' => true,
                'showSynchronizationLink' => true,
                'enabledControls' => [
                    'info' => false,
                ]
            ],
            'behaviour' => [
                'allowLanguageSynchronization' => true,
            ],
        ]
    ],
];


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $fields);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_news_domain_model_news',
    'detail_style,',
    '', 'before:content_elements');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_news_domain_model_news',
    'content_elements_col2,content_elements_col3,',
    '', 'after:content_elements');

$replaceNewsTCA = [
    'columns' => [
    ],
    'ctrl' => [
    ],
    'palettes' => [
    ],
];

$GLOBALS['TCA']['tx_news_domain_model_news'] = array_replace_recursive($GLOBALS['TCA']['tx_news_domain_model_news'], (array)$replaceNewsTCA);
