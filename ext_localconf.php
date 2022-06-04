<?php
use TYPO3\CMS\Core\Information\Typo3Version;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

defined('TYPO3') or die('Access denied.');

$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['classes']['Domain/Model/News']['lwo_bootstrap_news'] = 'lwo_bootstrap_news';

$versionInformation = GeneralUtility::makeInstance(Typo3Version::class);
if ($versionInformation->getMajorVersion() < 12) {
    // Only include page.tsconfig if TYPO3 version is below 12 so that it is not imported twice.
    ExtensionManagementUtility::addPageTSConfig('
      @import "EXT:lwo_bootstrap_news/Configuration/page.tsconfig"
   ');

    // register default icons
    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
        \TYPO3\CMS\Core\Imaging\IconRegistry::class
    );
    $iconsToRegister = [
        'news-detail-1col',
        'news-detail-2col',
        'news-detail-2col-left',
        'news-detail-2col-right',
        'news-detail-3col',
    ];
    foreach ($iconsToRegister as $icon) {
        $iconRegistry->registerIcon(
            $icon,
            \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
            [
                'source' => 'EXT:lwo_bootstrap_news/Resources/Public/Icons/' . $icon . '.svg',
            ]
        );
    }

}
