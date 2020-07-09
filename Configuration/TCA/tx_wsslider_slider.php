<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:ws_slider/Resources/Private/Language/locallang_db.xlf:tx_wsslider_slider',
        'label' => 'tx_wsslider_image',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => true,
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'tx_wsslider_image,tx_wsslider_headline,tx_wsslider_text,tx_wsslider_link,tx_wsslider_fullwidth',
        'dynamicConfigFile' => '',
        'iconfile' => 'EXT:ws_slider/Resources/Public/Icons/Extension.png',
        'hideTable' => true,
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, tx_wsslider_image, tx_wsslider_headline, tx_wsslider_text, tx_wsslider_link, tx_wsslider_fullwidth',
    ],
    'types' => [
        1 => [
            'showitem' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,tx_wsslider_image,tx_wsslider_headline,tx_wsslider_text,tx_wsslider_link,tx_wsslider_fullwidth,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,starttime,endtime',
        ],
    ],
    'palettes' => [
        1 => [
            'showitem' => '',
        ],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple',
                    ],
                ],
                'special' => 'languages',
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => 1,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        '',
                        0,
                    ],
                ],
                'foreign_table' => 'tx_wsslider_slider',
                'foreign_table_where' => 'AND tx_wsslider_slider.pid=###CURRENT_PID### AND tx_wsslider_slider.sys_language_uid IN (-1,0)',
                'default' => 0,
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
            ],
        ],
        'starttime' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
                'renderType' => 'inputDateTime',
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime,int',
                'checkbox' => 0,
                'default' => 0,
            ],
        ],
        'endtime' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
                'renderType' => 'inputDateTime',
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime,int',
                'checkbox' => 0,
                'default' => 0,
            ],
        ],
        'parentid' => [
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        '',
                        0,
                    ],
                ],
                'foreign_table' => 'tt_content',
                'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.sys_language_uid IN (-1,###REC_FIELD_sys_language_uid###)',
            ],
        ],
        'parenttable' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'sorting' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'tx_wsslider_fullwidth' => [
            'config' => [
                'items' => [
                    [
                        'LLL:EXT:ws_slider/Resources/Private/Language/locallang_db.xlf:tx_wsslider_slider.tx_wsslider_fullwidth.I.0',
                    ],
                ],
                'renderType' => 'checkboxLabeledToggle',
                'type' => 'check',
            ],
            'exclude' => '1',
            'label' => 'LLL:EXT:ws_slider/Resources/Private/Language/locallang_db.xlf:tx_wsslider_slider.tx_wsslider_fullwidth',
            'order' => 6,
        ],
        'tx_wsslider_headline' => [
            'config' => [
                'eval' => 'trim',
                'type' => 'input',
            ],
            'exclude' => '1',
            'label' => 'LLL:EXT:ws_slider/Resources/Private/Language/locallang_db.xlf:tx_wsslider_slider.tx_wsslider_headline',
            'order' => 3,
        ],
        'tx_wsslider_image' => [
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'sys_file_reference',
                'foreign_field' => 'uid_foreign',
                'foreign_sortby' => 'sorting_foreign',
                'foreign_table_field' => 'tablenames',
                'foreign_match_fields' => [
                    'fieldname' => 'tx_wsslider_image',
                ],
                'foreign_label' => 'uid_local',
                'foreign_selector' => 'uid_local',
                'overrideChildTca' => [
                    'columns' => [
                        'uid_local' => [
                            'config' => [
                                'appearance' => [
                                    'elementBrowserType' => 'file',
                                    'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                                ],
                            ],
                        ],
                    ],
                    'types' => [
                        [
                            'showitem' => '--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
                        ],
                        [
                            'showitem' => '--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
                        ],
                        [
                            'showitem' => '--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
                        ],
                        [
                            'showitem' => '--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
                        ],
                        [
                            'showitem' => '--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
                        ],
                        [
                            'showitem' => '--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
                        ],
                    ],
                ],
                'filter' => [
                    [
                        'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                    ],
                ],
                'appearance' => [
                    'useSortable' => 'tx_wsslider_image',
                    'headerThumbnail' => [
                        'field' => 'uid_local',
                        'width' => '45',
                        'height' => '45c',
                    ],
                    'enabledControls' => [
                        'info' => 'tx_wsslider_image',
                        'new' => false,
                        'dragdrop' => 'tx_wsslider_image',
                        'sort' => false,
                        'hide' => 'tx_wsslider_image',
                        'delete' => 'tx_wsslider_image',
                    ],
                    'fileUploadAllowed' => false,
                ],
                'maxitems' => '1',
            ],
            'exclude' => '1',
            'label' => 'LLL:EXT:ws_slider/Resources/Private/Language/locallang_db.xlf:tx_wsslider_slider.tx_wsslider_image',
            'order' => 2,
        ],
        'tx_wsslider_link' => [
            'config' => [
                'fieldControl' => [
                    'linkPopup' => [
                        'options' => [
                            'blindLinkOptions' => 'file,mail,folder',
                            'title' => 'Link',
                            'windowOpenParameters' => 'height=300,width=500,status=0,menubar=0,scrollbars=1',
                        ],
                    ],
                ],
                'renderType' => 'inputLink',
                'softref' => 'typolink',
                'type' => 'input',
                'wizards' => [
                    'link' => [
                        'icon' => 'actions-wizard-link',
                    ],
                ],
            ],
            'exclude' => '1',
            'label' => 'LLL:EXT:ws_slider/Resources/Private/Language/locallang_db.xlf:tx_wsslider_slider.tx_wsslider_link',
            'order' => 5,
        ],
        'tx_wsslider_text' => [
            'config' => [
                'enableRichtext' => '1',
                'richtextConfiguration' => 'default',
                'type' => 'text',
            ],
            'exclude' => '1',
            'label' => 'LLL:EXT:ws_slider/Resources/Private/Language/locallang_db.xlf:tx_wsslider_slider.tx_wsslider_text',
            'order' => 4,
        ],
    ],
];