<?php
defined('TYPO3') or die();


$fields = [

    'tx_news_related_news_col2' => [
        'label' => 'tx_news_related_news_col2',
        'config' => [
            'type' => 'passthrough',
        ]
    ],
    'tx_news_related_news_col3' => [
        'label' => 'tx_news_related_news_col3',
        'config' => [
            'type' => 'passthrough',
        ]
    ],
];


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $fields);
