<?php
$extensionClassesPath = t3lib_extMgm::extPath('news') . 'Classes/';
require_once(t3lib_extMgm::extPath('news') . 'Classes/Cache/ClassCacheBuilder.php');

$default = array(
	'tx_news_cache_classcachebuilder' => $extensionClassesPath . 'Cache/ClassCacheBuilder.php',
	'tx_news_controller_administrationcontroller' => $extensionClassesPath . 'Controller/AdministrationController.php',
	'tx_news_controller_categorycontroller' => $extensionClassesPath . 'Controller/CategoryController.php',
	'tx_news_controller_importcontroller' => $extensionClassesPath . 'Controller/ImportController.php',
	'tx_news_controller_newsbasecontroller' => $extensionClassesPath . 'Controller/NewsBaseController.php',
	'tx_news_controller_newscontroller' => $extensionClassesPath . 'Controller/NewsController.php',
	'tx_news_controller_tagcontroller' => $extensionClassesPath . 'Controller/TagController.php',
	'tx_news_domain_model_category' => $extensionClassesPath . 'Domain/Model/Category.php',
	'tx_news_domain_model_demandinterface' => $extensionClassesPath . 'Domain/Model/DemandInterface.php',
	'tx_news_domain_model_file' => $extensionClassesPath . 'Domain/Model/File.php',
	'tx_news_domain_model_filereference' => $extensionClassesPath . 'Domain/Model/FileReference.php',
	'tx_news_domain_model_link' => $extensionClassesPath . 'Domain/Model/Link.php',
	'tx_news_domain_model_media' => $extensionClassesPath . 'Domain/Model/Media.php',
	'tx_news_domain_model_mediafilereference' => $extensionClassesPath . 'Domain/Model/MediaFileReference.php',
	'tx_news_domain_model_news' => $extensionClassesPath . 'Domain/Model/News.php',
	'tx_news_domain_model_newsdefault' => $extensionClassesPath . 'Domain/Model/NewsDefault.php',
	'tx_news_domain_model_newsexternal' => $extensionClassesPath . 'Domain/Model/NewsExternal.php',
	'tx_news_domain_model_newsinternal' => $extensionClassesPath . 'Domain/Model/NewsInternal.php',
	'tx_news_domain_model_tag' => $extensionClassesPath . 'Domain/Model/Tag.php',
	'tx_news_domain_model_ttcontent' => $extensionClassesPath . 'Domain/Model/TtContent.php',
	'tx_news_domain_model_dto_administrationdemand' => $extensionClassesPath . 'Domain/Model/Dto/AdministrationDemand.php',
	'tx_news_domain_model_dto_emconfiguration' => $extensionClassesPath . 'Domain/Model/Dto/EmConfiguration.php',
	'tx_news_domain_model_dto_newsdemand' => $extensionClassesPath . 'Domain/Model/Dto/NewsDemand.php',
	'tx_news_domain_model_dto_search' => $extensionClassesPath . 'Domain/Model/Dto/Search.php',
	'tx_news_domain_repository_abstractdemandedrepository' => $extensionClassesPath . 'Domain/Repository/AbstractDemandedRepository.php',
	'tx_news_domain_repository_categoryrepository' => $extensionClassesPath . 'Domain/Repository/CategoryRepository.php',
	'tx_news_domain_repository_demandedrepositoryinterface' => $extensionClassesPath . 'Domain/Repository/DemandedRepositoryInterface.php',
	'tx_news_domain_repository_filerepository' => $extensionClassesPath . 'Domain/Repository/FileRepository.php',
	'tx_news_domain_repository_linkrepository' => $extensionClassesPath . 'Domain/Repository/LinkRepository.php',
	'tx_news_domain_repository_mediarepository' => $extensionClassesPath . 'Domain/Repository/MediaRepository.php',
	'tx_news_domain_repository_newsdefaultrepository' => $extensionClassesPath . 'Domain/Repository/NewsDefaultRepository.php',
	'tx_news_domain_repository_newsrepository' => $extensionClassesPath . 'Domain/Repository/NewsRepository.php',
	'tx_news_domain_repository_tagrepository' => $extensionClassesPath . 'Domain/Repository/TagRepository.php',
	'tx_news_domain_repository_ttcontentrepository' => $extensionClassesPath . 'Domain/Repository/TtContentRepository.php',
	'tx_news_domain_service_categoryimportservice' => $extensionClassesPath . 'Domain/Service/CategoryImportService.php',
	'tx_news_domain_service_newsimportservice' => $extensionClassesPath . 'Domain/Service/NewsImportService.php',
	'tx_news_hooks_cmslayout' => $extensionClassesPath . 'Hooks/CmsLayout.php',
	'tx_news_hooks_itemsprocfunc' => $extensionClassesPath . 'Hooks/ItemsProcFunc.php',
	'tx_news_hooks_labels' => $extensionClassesPath . 'Hooks/Labels.php',
	'tx_news_hooks_suggestreceiver' => $extensionClassesPath . 'Hooks/SuggestReceiver.php',
	'tx_news_hooks_suggestreceivercall' => $extensionClassesPath . 'Hooks/SuggestReceiverCall.php',
	'tx_news_hooks_t3libbefunc' => $extensionClassesPath . 'Hooks/T3libBefunc.php',
	'tx_news_hooks_tceforms' => $extensionClassesPath . 'Hooks/Tceforms.php',
	'tx_news_hooks_tcemain' => $extensionClassesPath . 'Hooks/Tcemain.php',
	'tx_news_jobs_abstractimportjob' => $extensionClassesPath . 'Jobs/AbstractImportJob.php',
	'tx_news_jobs_importjobinterface' => $extensionClassesPath . 'Jobs/ImportJobInterface.php',
	'tx_news_jobs_t3blogcategoryimportjob' => $extensionClassesPath . 'Jobs/T3BlogCategoryImportJob.php',
	'tx_news_jobs_t3blognewsimportjob' => $extensionClassesPath . 'Jobs/T3BlogNewsImportJob.php',
	'tx_news_jobs_ttnewscategoryimportjob' => $extensionClassesPath . 'Jobs/TTNewsCategoryImportJob.php',
	'tx_news_jobs_ttnewsnewsimportjob' => $extensionClassesPath . 'Jobs/TTNewsNewsImportJob.php',
	'tx_news_mediarenderer_mediainterface' => $extensionClassesPath . 'MediaRenderer/MediaInterface.php',
	'tx_news_mediarenderer_falmediainterface' => $extensionClassesPath . 'MediaRenderer/FalMediaInterface.php',
	'tx_news_mediarenderer_audio_mp3' => $extensionClassesPath . 'MediaRenderer/Audio/Mp3.php',
	'tx_news_mediarenderer_video_fal' => $extensionClassesPath . 'MediaRenderer/Video/Fal.php',
	'tx_news_mediarenderer_video_file' => $extensionClassesPath . 'MediaRenderer/Video/File.php',
	'tx_news_mediarenderer_video_quicktime' => $extensionClassesPath . 'MediaRenderer/Video/Quicktime.php',
	'tx_news_mediarenderer_video_videosites' => $extensionClassesPath . 'MediaRenderer/Video/Videosites.php',
	'tx_news_mediarenderer_video_youtube' => $extensionClassesPath . 'MediaRenderer/Video/Youtube.php',
	'tx_news_service_cacheservice' => $extensionClassesPath . 'Service/CacheService.php',
	'tx_news_service_categoryservice' => $extensionClassesPath . 'Service/CategoryService.php',
	'tx_news_service_fileservice' => $extensionClassesPath . 'Service/FileService.php',
	'tx_news_service_settingsservice' => $extensionClassesPath . 'Service/SettingsService.php',
	'tx_news_service_import_dataproviderserviceinterface' => $extensionClassesPath . 'Service/Import/DataProviderServiceInterface.php',
	'tx_news_service_import_t3blogcategorydataproviderservice' => $extensionClassesPath . 'Service/Import/T3BlogCategoryDataProviderService.php',
	'tx_news_service_import_t3blognewsdataproviderservice' => $extensionClassesPath . 'Service/Import/T3BlogNewsDataProviderService.php',
	'tx_news_service_import_ttnewscategorydataproviderservice' => $extensionClassesPath . 'Service/Import/TTNewsCategoryDataProviderService.php',
	'tx_news_service_import_ttnewsnewsdataproviderservice' => $extensionClassesPath . 'Service/Import/TTNewsNewsDataProviderService.php',
	'tx_news_treeprovider_databasetreedataprovider' => $extensionClassesPath . 'TreeProvider/DatabaseTreeDataProvider.php',
	'tx_news_utility_categoryprovider' => $extensionClassesPath . 'Utility/CategoryProvider.php',
	'tx_news_utility_emconfiguration' => $extensionClassesPath . 'Utility/EmConfiguration.php',
	'tx_news_utility_importjob' => $extensionClassesPath . 'Utility/ImportJob.php',
	'tx_news_utility_page' => $extensionClassesPath . 'Utility/Page.php',
	'tx_news_utility_url' => $extensionClassesPath . 'Utility/Url.php',
	'tx_news_utility_validation' => $extensionClassesPath . 'Utility/Validation.php',
	'tx_news_viewhelpers_categorychildrenviewhelper' => $extensionClassesPath . 'ViewHelpers/CategoryChildrenViewHelper.php',
	'tx_news_viewhelpers_excludedisplayednewsviewhelper' => $extensionClassesPath . 'ViewHelpers/ExcludeDisplayedNewsViewHelper.php',
	'tx_news_viewhelpers_headerdataviewhelper' => $extensionClassesPath . 'ViewHelpers/HeaderDataViewHelper.php',
	'tx_news_viewhelpers_includefileviewhelper' => $extensionClassesPath . 'ViewHelpers/IncludeFileViewHelper.php',
	'tx_news_viewhelpers_linkviewhelper' => $extensionClassesPath . 'ViewHelpers/LinkViewHelper.php',
	'tx_news_viewhelpers_mediafactoryviewhelper' => $extensionClassesPath . 'ViewHelpers/MediaFactoryViewHelper.php',
	'tx_news_viewhelpers_falmediafactoryviewhelper' => $extensionClassesPath . 'ViewHelpers/FalMediaFactoryViewHelper.php',
	'tx_news_viewhelpers_metatagviewhelper' => $extensionClassesPath . 'ViewHelpers/MetaTagViewHelper.php',
	'tx_news_viewhelpers_objectviewhelper' => $extensionClassesPath . 'ViewHelpers/ObjectViewHelper.php',
	'tx_news_viewhelpers_paginatebodytextviewhelper' => $extensionClassesPath . 'ViewHelpers/PaginateBodytextViewHelper.php',
	'tx_news_viewhelpers_targetlinkviewhelper' => $extensionClassesPath . 'ViewHelpers/TargetLinkViewHelper.php',
	'tx_news_viewhelpers_titletagviewhelper' => $extensionClassesPath . 'ViewHelpers/TitleTagViewHelper.php',
	'tx_news_viewhelpers_be_clickmenuviewhelper' => $extensionClassesPath . 'ViewHelpers/Be/ClickmenuViewHelper.php',
	'tx_news_viewhelpers_be_multieditlinkviewhelper' => $extensionClassesPath . 'ViewHelpers/Be/MultiEditLinkViewHelper.php',
	'tx_news_viewhelpers_be_buttons_iconforrecordviewhelper' => $extensionClassesPath . 'ViewHelpers/Be/Buttons/IconForRecordViewHelper.php',
	'tx_news_viewhelpers_be_buttons_iconviewhelper' => $extensionClassesPath . 'ViewHelpers/Be/Buttons/IconViewHelper.php',
	'tx_news_viewhelpers_format_damviewhelper' => $extensionClassesPath . 'ViewHelpers/Format/DamViewHelper.php',
	'tx_news_viewhelpers_format_dateviewhelper' => $extensionClassesPath . 'ViewHelpers/Format/DateViewHelper.php',
	'tx_news_viewhelpers_format_filedownloadviewhelper' => $extensionClassesPath . 'ViewHelpers/Format/FileDownloadViewHelper.php',
	'tx_news_viewhelpers_format_filesizeviewhelper' => $extensionClassesPath . 'ViewHelpers/Format/FileSizeViewHelper.php',
	'tx_news_viewhelpers_format_hscviewhelper' => $extensionClassesPath . 'ViewHelpers/Format/HscViewHelper.php',
	'tx_news_viewhelpers_format_htmlentitiesdecodeviewhelper' => $extensionClassesPath . 'ViewHelpers/Format/HtmlentitiesDecodeViewHelper.php',
	'tx_news_viewhelpers_format_nothingviewhelper' => $extensionClassesPath . 'ViewHelpers/Format/NothingViewHelper.php',
	'tx_news_viewhelpers_format_striptagsviewhelper' => $extensionClassesPath . 'ViewHelpers/Format/StriptagsViewHelper.php',
	'tx_news_viewhelpers_social_disqusviewhelper' => $extensionClassesPath . 'ViewHelpers/Social/DisqusViewHelper.php',
	'tx_news_viewhelpers_social_googleplusviewhelper' => $extensionClassesPath . 'ViewHelpers/Social/GooglePlusViewHelper.php',
	'tx_news_viewhelpers_social_gravatarviewhelper' => $extensionClassesPath . 'ViewHelpers/Social/GravatarViewHelper.php',
	'tx_news_viewhelpers_social_twitterviewhelper' => $extensionClassesPath . 'ViewHelpers/Social/TwitterViewHelper.php',
	'tx_news_viewhelpers_social_facebook_commentviewhelper' => $extensionClassesPath . 'ViewHelpers/Social/Facebook/CommentViewHelper.php',
	'tx_news_viewhelpers_social_facebook_likeviewhelper' => $extensionClassesPath . 'ViewHelpers/Social/Facebook/LikeViewHelper.php',
	'tx_news_viewhelpers_social_facebook_shareviewhelper' => $extensionClassesPath . 'ViewHelpers/Social/Facebook/ShareViewHelper.php',
	'tx_news_viewhelpers_widget_paginateviewhelper' => $extensionClassesPath . 'ViewHelpers/Widget/PaginateViewHelper.php',
	'tx_news_viewhelpers_widget_controller_paginatecontroller' => $extensionClassesPath . 'ViewHelpers/Widget/Controller/PaginateController.php',
	'tx_news_tests_unit_cache_classcachebuildertest' => $extensionPath . 'Tests/Unit/Cache/ClassCacheBuilderTest.php',
	'tx_news_tests_unit_controller_newscontrollertest' => $extensionPath . 'Tests/Unit/Controller/NewsControllerTest.php',
	'tx_news_tests_unit_domain_model_categorytest' => $extensionPath . 'Tests/Unit/Domain/Model/CategoryTest.php',
	'tx_news_tests_unit_domain_model_filetest' => $extensionPath . 'Tests/Unit/Domain/Model/FileTest.php',
	'tx_news_tests_unit_domain_model_linktest' => $extensionPath . 'Tests/Unit/Domain/Model/LinkTest.php',
	'tx_news_tests_unit_domain_model_mediatest' => $extensionPath . 'Tests/Unit/Domain/Model/MediaTest.php',
	'tx_news_tests_unit_domain_model_newsdefaulttest' => $extensionPath . 'Tests/Unit/Domain/Model/NewsDefaultTest.php',
	'tx_news_tests_unit_domain_model_newsdemandtest' => $extensionPath . 'Tests/Unit/Domain/Model/NewsDemandTest.php',
	'tx_news_tests_unit_domain_model_newsexternaltest' => $extensionPath . 'Tests/Unit/Domain/Model/NewsExternalTest.php',
	'tx_news_tests_unit_domain_model_newsinternaltest' => $extensionPath . 'Tests/Unit/Domain/Model/NewsInternalTest.php',
	'tx_news_tests_unit_domain_model_newstest' => $extensionPath . 'Tests/Unit/Domain/Model/NewsTest.php',
	'tx_news_tests_unit_domain_model_tagtest' => $extensionPath . 'Tests/Unit/Domain/Model/TagTest.php',
	'tx_news_tests_unit_domain_model_ttcontenttest' => $extensionPath . 'Tests/Unit/Domain/Model/TtContentTest.php',
	'tx_news_tests_unit_domain_model_dto_emconfigurationtest' => $extensionPath . 'Tests/Unit/Domain/Model/Dto/EmConfigurationTest.php',
	'tx_news_tests_unit_domain_model_dto_searchtest' => $extensionPath . 'Tests/Unit/Domain/Model/Dto/SearchTest.php',
	'tx_news_tests_unit_domain_repository_categoryrepositorytest' => $extensionPath . 'Tests/Unit/Domain/Repository/CategoryRepositoryTest.php',
	'tx_news_tests_unit_domain_repository_newsrepositorydemandtest' => $extensionPath . 'Tests/Unit/Domain/Repository/NewsRepositoryDemandTest.php',
	'tx_news_tests_unit_domain_repository_newsrepositorytest' => $extensionPath . 'Tests/Unit/Domain/Repository/NewsRepositoryTest.php',
	'tx_news_tests_unit_hooks_labelstest' => $extensionPath . 'Tests/Unit/Hooks/LabelsTest.php',
	'tx_news_tests_unit_jobs_ttnewsnewsimportjobtest' => $extensionPath . 'Tests/Unit/Jobs/TTNewsNewsImportJobTest.php',
	'tx_news_tests_unit_mediarenderer_audio_mp3test' => $extensionPath . 'Tests/Unit/MediaRenderer/Audio/Mp3Test.php',
	'tx_news_tests_unit_mediarenderer_video_filetest' => $extensionPath . 'Tests/Unit/MediaRenderer/Video/FileTest.php',
	'tx_news_tests_unit_mediarenderer_video_quicktimetest' => $extensionPath . 'Tests/Unit/MediaRenderer/Video/QuicktimeTest.php',
	'tx_news_tests_unit_mediarenderer_video_videositestest' => $extensionPath . 'Tests/Unit/MediaRenderer/Video/VideositesTest.php',
	'tx_news_tests_unit_mediarenderer_video_youtubetest' => $extensionPath . 'Tests/Unit/MediaRenderer/Video/YoutubeTest.php',
	'tx_news_tests_unit_service_categoryservicetest' => $extensionPath . 'Tests/Unit/Service/CategoryServiceTest.php',
	'tx_news_tests_unit_service_fileservicetest' => $extensionPath . 'Tests/Unit/Service/FileServiceTest.php',
	'tx_news_tests_unit_service_import_ttnewsnewsdataproviderservicetest' => $extensionPath . 'Tests/Unit/Service/Import/TTNewsNewsDataProviderServiceTest.php',
	'tx_news_tests_unit_treeprovider_databasetreedataprovidertest' => $extensionPath . 'Tests/Unit/TreeProvider/DatabaseTreeDataProviderTest.php',
	'tx_news_tests_unit_utility_categoryprovidertest' => $extensionPath . 'Tests/Unit/Utility/CategoryProviderTest.php',
	'tx_news_tests_unit_utility_emconfigurationtest' => $extensionPath . 'Tests/Unit/Utility/EmConfigurationTest.php',
	'tx_news_tests_unit_utility_importjobtest' => $extensionPath . 'Tests/Unit/Utility/ImportJobTest.php',
	'tx_news_tests_unit_utility_urltest' => $extensionPath . 'Tests/Unit/Utility/UrlTest.php',
	'tx_news_tests_unit_utility_validationtest' => $extensionPath . 'Tests/Unit/Utility/ValidationTest.php',
	'tx_news_tests_unit_viewhelpers_excludedisplayednewsviewhelpertest' => $extensionPath . 'Tests/Unit/ViewHelpers/ExcludeDisplayedNewsViewHelperTest.php',
	'tx_news_tests_unit_viewhelpers_paginatebodytextviewhelpertest' => $extensionPath . 'Tests/Unit/ViewHelpers/PaginateBodytextViewHelperTest.php',
	'tx_news_tests_unit_viewhelpers_targetlinkviewhelpertest' => $extensionPath . 'Tests/Unit/ViewHelpers/TargetLinkViewHelperTest.php',
	'tx_news_tests_unit_viewhelpers_be_multieditlinkviewhelpertest' => $extensionPath . 'Tests/Unit/ViewHelpers/Be/MultiEditLinkViewhelperTest.php',
	'tx_news_tests_unit_viewhelpers_format_dateviewhelpertest' => $extensionPath . 'Tests/Unit/ViewHelpers/Format/DateViewHelperTest.php',
	'tx_news_tests_unit_viewhelpers_format_filesizeviewhelpertest' => $extensionPath . 'Tests/Unit/ViewHelpers/Format/FileSizeViewHelperTest.php',
	'tx_news_tests_unit_viewhelpers_format_nothingviewhelpertest' => $extensionPath . 'Tests/Unit/ViewHelpers/Format/NothingViewHelperTest.php',
	'tx_news_tests_unit_viewhelpers_format_striptagsviewhelpertest' => $extensionPath . 'Tests/Unit/ViewHelpers/Format/StriptagsViewHelperTest.php',
	'tx_news_tests_unit_viewhelpers_social_disqusviewhelpertest' => $extensionPath . 'Tests/Unit/ViewHelpers/Social/DisqusViewHelperTest.php',
	'tx_news_tests_unit_viewhelpers_widget_controller_paginatecontrollertest' => $extensionPath . 'Tests/Unit/ViewHelpers/Widget/Controller/PaginateControllerTest.php',
);

/** @var Tx_News_Cache_ClassCacheBuilder $classCacheBuilder */
$classCacheBuilder = t3lib_div::makeInstance('Tx_News_Cache_ClassCacheBuilder');
$mergedClasses = array_merge($default, $classCacheBuilder->build());
return $mergedClasses;
