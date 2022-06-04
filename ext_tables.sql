#
# Table structure for table 'tx_news_domain_model_news'
#
CREATE TABLE tx_news_domain_model_news
(
    subheader             text         DEFAULT ''  NOT NULL,
    detail_style          varchar(255) DEFAULT '0' NOT NULL,
    content_elements_col2 int(11) DEFAULT '0' NOT NULL,
    content_elements_col3 int(11) DEFAULT '0' NOT NULL,
);


#
# Table structure for table 'tt_content'
#
CREATE TABLE tt_content
(
    tx_news_related_news_col2 int(11) DEFAULT '0' NOT NULL,
    tx_news_related_news_col3 int(11) DEFAULT '0' NOT NULL,
    KEY                       index_newscontent (tx_news_related_news_col2,tx_news_related_news_col3)
);

