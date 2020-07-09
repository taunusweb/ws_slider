<?php
defined('TYPO3_MODE') || die();

call_user_func(function () {

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['wsslider_ws_slider'] = 'tx_wsslider_ws_slider';
$tempColumns = [
    'tx_wsslider_slider' => [
        'config' => [
            'appearance' => [
                'collapseAll' => '1',
                'enabledControls' => [
                    'dragdrop' => '1',
                ],
                'expandSingle' => '1',
                'levelLinksPosition' => 'bottom',
                'useSortable' => '1',
            ],
            'foreign_field' => 'parentid',
            'foreign_sortby' => 'sorting',
            'foreign_table' => 'tx_wsslider_slider',
            'foreign_table_field' => 'parenttable',
            'type' => 'inline',
        ],
        'exclude' => '1',
        'label' => 'LLL:EXT:ws_slider/Resources/Private/Language/locallang_db.xlf:tt_content.tx_wsslider_slider',
    ],
];
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:ws_slider/Resources/Private/Language/locallang_db.xlf:tt_content.CType.div._wsslider_',
    '--div--',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:ws_slider/Resources/Private/Language/locallang_db.xlf:tt_content.CType.wsslider_ws_slider',
    'wsslider_ws_slider',
    'tx_wsslider_ws_slider',
];
$tempTypes = [
    'wsslider_ws_slider' => [
        'columnsOverrides' => [
            'bodytext' => [
                'config' => [
                    'richtextConfiguration' => 'default',
                    'enableRichtext' => 1,
                ],
            ],
        ],
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,tx_wsslider_slider,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
    ],
];
$GLOBALS['TCA']['tt_content']['types'] += $tempTypes;
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'ws_slider',
    'Configuration/TypoScript/',
    'ws_slider'
);

});

