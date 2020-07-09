CREATE TABLE tt_content (
    tx_wsslider_slider int(11) unsigned DEFAULT '0' NOT NULL
);
CREATE TABLE tx_wsslider_slider (
    parentid int(11) DEFAULT '0' NOT NULL,
    parenttable varchar(255) DEFAULT '' NOT NULL,
    sorting int(11) unsigned DEFAULT '0' NOT NULL,
    tx_wsslider_fullwidth int(11) DEFAULT '0' NOT NULL,
    tx_wsslider_headline tinytext,
    tx_wsslider_image int(11) unsigned DEFAULT '0' NOT NULL,
    tx_wsslider_link tinytext,
    tx_wsslider_text mediumtext,
    KEY language (l10n_parent,sys_language_uid)
);
