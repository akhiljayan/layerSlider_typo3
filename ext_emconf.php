<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "pits_layerslider".
 *
 * Auto generated 16-12-2013 08:22
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Layer Slider For Typo3.',
	'description' => 'A front end plugin to render layer slider and a back end module to configure layer slider',
	'category' => 'module',
	'author' => 'Akhil Jayan, Sivaprasad S',
	'author_email' => 'akhil.jn@pitsolutions.com, sivaprasad.s@pitsolutions.com',
	'author_company' => 'Pit Solution Pvt Ltd',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'version' => '2.0.0',
	'constraints' =>
	array (
		'depends' => array(
        	'typo3' => '6.2.0-8.9.99',
        	'php' => '5.3.0-8.0'
    	),
		array (
			'extbase' => '1.3',
			'fluid' => '1.3',
			'typo3' => '4.7.0-6.2.99',
		),
		'conflicts' =>
		array (
		),
		'suggests' =>
		array (
		),
	),
	'_md5_values_when_last_written' => 'a:185:{s:12:"ext_icon.gif";s:4:"72a2";s:17:"ext_localconf.php";s:4:"13e1";s:14:"ext_tables.php";s:4:"af24";s:14:"ext_tables.sql";s:4:"05ce";s:21:"ExtensionBuilder.json";s:4:"9109";s:44:"Classes/Controller/LayersliderController.php";s:4:"cd47";s:48:"Classes/Controller/PitslayersliderController.php";s:4:"32e4";s:36:"Classes/Domain/Model/Layerslider.php";s:4:"15bc";s:40:"Classes/Domain/Model/Pitslayerslider.php";s:4:"9668";s:44:"Configuration/ExtensionBuilder/settings.yaml";s:4:"7ee4";s:38:"Configuration/FileFinder/connector.php";s:4:"4ae3";s:43:"Configuration/FileFinder/elFinder.class.php";s:4:"5af4";s:52:"Configuration/FileFinder/elFinderConnector.class.php";s:4:"9592";s:55:"Configuration/FileFinder/elFinderVolumeDriver.class.php";s:4:"7f1e";s:64:"Configuration/FileFinder/elFinderVolumeLocalFileSystem.class.php";s:4:"04c4";s:54:"Configuration/FileFinder/elFinderVolumeMySQL.class.php";s:4:"1a0f";s:35:"Configuration/FileFinder/mime.types";s:4:"cee0";s:41:"Configuration/FileFinder/MySQLStorage.sql";s:4:"55da";s:36:"Configuration/FlexForms/flexform.xml";s:4:"5c3d";s:33:"Configuration/TCA/Layerslider.php";s:4:"4b4d";s:37:"Configuration/TCA/Pitslayerslider.php";s:4:"dd18";s:38:"Configuration/TypoScript/constants.txt";s:4:"434e";s:34:"Configuration/TypoScript/setup.txt";s:4:"2b61";s:46:"Resources/Private/Backend/Layouts/Default.html";s:4:"cd4b";s:47:"Resources/Private/Backend/Layouts/DefaultA.html";s:4:"9f06";s:50:"Resources/Private/Backend/Partials/FormErrors.html";s:4:"f5bc";s:62:"Resources/Private/Backend/Partials/Layerslider/FormFields.html";s:4:"d41d";s:62:"Resources/Private/Backend/Partials/Layerslider/Properties.html";s:4:"1c65";s:66:"Resources/Private/Backend/Partials/Pitslayerslider/Properties.html";s:4:"1c65";s:65:"Resources/Private/Backend/Templates/Pitslayerslider/Addlayer.html";s:4:"c69c";s:71:"Resources/Private/Backend/Templates/Pitslayerslider/Addlayer.html--abin";s:4:"780c";s:66:"Resources/Private/Backend/Templates/Pitslayerslider/Allslider.html";s:4:"b635";s:64:"Resources/Private/Backend/Templates/Pitslayerslider/Getdata.html";s:4:"6ed6";s:68:"Resources/Private/Backend/Templates/Pitslayerslider/List (copy).html";s:4:"0cd8";s:61:"Resources/Private/Backend/Templates/Pitslayerslider/List.html";s:4:"cadd";s:65:"Resources/Private/Backend/Templates/Pitslayerslider/List.html____";s:4:"6edb";s:61:"Resources/Private/Backend/Templates/Pitslayerslider/Show.html";s:4:"9398";s:40:"Resources/Private/Language/locallang.xml";s:4:"f10f";s:88:"Resources/Private/Language/locallang_csh_tx_pitslayerslider_domain_model_layerslider.xml";s:4:"af1c";s:92:"Resources/Private/Language/locallang_csh_tx_pitslayerslider_domain_model_pitslayerslider.xml";s:4:"17ca";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"a692";s:52:"Resources/Private/Language/locallang_layerslider.xml";s:4:"633f";s:56:"Resources/Private/Language/locallang_pitslayerslider.xml";s:4:"633f";s:38:"Resources/Private/Layouts/Default.html";s:4:"6c0f";s:42:"Resources/Private/Partials/FormErrors.html";s:4:"f5bc";s:54:"Resources/Private/Partials/Layerslider/FormFields.html";s:4:"d41d";s:54:"Resources/Private/Partials/Layerslider/Properties.html";s:4:"1c65";s:58:"Resources/Private/Partials/Pitslayerslider/Properties.html";s:4:"1c65";s:49:"Resources/Private/Templates/Layerslider/List.html";s:4:"b807";s:48:"Resources/Private/Templates/Layerslider/New.html";s:4:"fc01";s:49:"Resources/Private/Templates/Layerslider/Show.html";s:4:"e1be";s:53:"Resources/Private/Templates/Pitslayerslider/List.html";s:4:"6be9";s:53:"Resources/Private/Templates/Pitslayerslider/Show.html";s:4:"de1d";s:33:"Resources/Public/Css/colorbox.css";s:4:"106f";s:34:"Resources/Public/Css/customCss.css";s:4:"5934";s:37:"Resources/Public/Css/elfinder.min.css";s:4:"24aa";s:52:"Resources/Public/Css/jquery-ui-1.10.3.custom.min.css";s:4:"884a";s:34:"Resources/Public/Css/jquery-ui.css";s:4:"d172";s:54:"Resources/Public/Css/layerslider.transitiongallery.css";s:4:"d840";s:35:"Resources/Public/Css/textstyles.css";s:4:"c96f";s:30:"Resources/Public/Css/theme.css";s:4:"c3b5";s:36:"Resources/Public/Css/tooltipster.css";s:4:"4652";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:70:"Resources/Public/Icons/tx_pitslayerslider_domain_model_layerslider.gif";s:4:"72a2";s:74:"Resources/Public/Icons/tx_pitslayerslider_domain_model_pitslayerslider.gif";s:4:"1103";s:68:"Resources/Public/Icons/tx_pitslayerslider_domain_model_sublayers.gif";s:4:"72a2";s:35:"Resources/Public/Js/actionScript.js";s:4:"6e2e";s:29:"Resources/Public/Js/common.js";s:4:"9218";s:35:"Resources/Public/Js/elfinder.min.js";s:4:"720a";s:35:"Resources/Public/Js/htmlTemplate.js";s:4:"ae20";s:35:"Resources/Public/Js/jquery-1.9.1.js";s:4:"08c2";s:46:"Resources/Public/Js/jquery-ui-1.10.3.custom.js";s:4:"2b7e";s:32:"Resources/Public/Js/jquery-ui.js";s:4:"ec97";s:38:"Resources/Public/Js/jquery.colorbox.js";s:4:"9565";s:42:"Resources/Public/Js/jquery.popupoverlay.js";s:4:"a0ec";s:41:"Resources/Public/Js/jquery.tooltipster.js";s:4:"72ef";s:52:"Resources/Public/Js/layerslider.transitiongallery.js";s:4:"f56c";s:34:"Resources/Public/Js/popupScript.js";s:4:"7248";s:39:"Resources/Public/Script/htmlTemplate.js";s:4:"4413";s:37:"Resources/Public/Styles/jquery-ui.css";s:4:"d172";s:44:"Resources/Public/images/animated-overlay.gif";s:4:"2b91";s:54:"Resources/Public/images/ui-bg_flat_0_aaaaaa_40x100.png";s:4:"2503";s:55:"Resources/Public/images/ui-bg_flat_75_ffffff_40x100.png";s:4:"4f67";s:55:"Resources/Public/images/ui-bg_glass_55_fbf9ee_1x400.png";s:4:"a3ee";s:55:"Resources/Public/images/ui-bg_glass_65_ffffff_1x400.png";s:4:"aed3";s:55:"Resources/Public/images/ui-bg_glass_75_dadada_1x400.png";s:4:"07fc";s:55:"Resources/Public/images/ui-bg_glass_75_e6e6e6_1x400.png";s:4:"62d8";s:55:"Resources/Public/images/ui-bg_glass_95_fef1ec_1x400.png";s:4:"2440";s:64:"Resources/Public/images/ui-bg_highlight-soft_75_cccccc_1x100.png";s:4:"1ca9";s:51:"Resources/Public/images/ui-icons_222222_256x240.png";s:4:"a1b3";s:51:"Resources/Public/images/ui-icons_2e83ff_256x240.png";s:4:"764c";s:51:"Resources/Public/images/ui-icons_454545_256x240.png";s:4:"6b29";s:51:"Resources/Public/images/ui-icons_888888_256x240.png";s:4:"302a";s:51:"Resources/Public/images/ui-icons_cd0a0a_256x240.png";s:4:"5c78";s:38:"Resources/Public/img/arrows-active.png";s:4:"5463";s:38:"Resources/Public/img/arrows-normal.png";s:4:"e479";s:31:"Resources/Public/img/border.png";s:4:"7ca8";s:33:"Resources/Public/img/closebox.png";s:4:"7c4e";s:33:"Resources/Public/img/controls.png";s:4:"b68b";s:29:"Resources/Public/img/crop.gif";s:4:"7a4b";s:32:"Resources/Public/img/dialogs.png";s:4:"e230";s:34:"Resources/Public/img/icons-big.png";s:4:"ebbf";s:36:"Resources/Public/img/icons-small.png";s:4:"1cc7";s:32:"Resources/Public/img/loading.gif";s:4:"e661";s:43:"Resources/Public/img/loading_background.png";s:4:"acf4";s:29:"Resources/Public/img/logo.png";s:4:"cb9f";s:32:"Resources/Public/img/overlay.png";s:4:"7903";s:33:"Resources/Public/img/progress.gif";s:4:"a937";s:37:"Resources/Public/img/quicklook-bg.png";s:4:"59c2";s:40:"Resources/Public/img/quicklook-icons.png";s:4:"f141";s:31:"Resources/Public/img/resize.png";s:4:"7534";s:39:"Resources/Public/img/sample_slide_1.png";s:4:"f593";s:39:"Resources/Public/img/sample_slide_2.png";s:4:"0ba7";s:37:"Resources/Public/img/spinner-mini.gif";s:4:"7b97";s:31:"Resources/Public/img/sprite.png";s:4:"6a52";s:32:"Resources/Public/img/toolbar.png";s:4:"f0d5";s:42:"Resources/Public/layerslider/css/blank.gif";s:4:"7608";s:48:"Resources/Public/layerslider/css/layerslider.css";s:4:"8065";s:56:"Resources/Public/layerslider/jQuery/jquery-easing-1.3.js";s:4:"5d14";s:62:"Resources/Public/layerslider/jQuery/jquery-transit-modified.js";s:4:"03bb";s:45:"Resources/Public/layerslider/jQuery/jquery.js";s:4:"674a";s:67:"Resources/Public/layerslider/js/layerslider.kreaturamedia.jquery.js";s:4:"bb0c";s:58:"Resources/Public/layerslider/js/layerslider.transitions.js";s:4:"b494";s:61:"Resources/Public/layerslider/skins/borderlessdark/loading.gif";s:4:"e825";s:61:"Resources/Public/layerslider/skins/borderlessdark/nothumb.png";s:4:"575f";s:60:"Resources/Public/layerslider/skins/borderlessdark/shadow.png";s:4:"35a1";s:58:"Resources/Public/layerslider/skins/borderlessdark/skin.css";s:4:"81f7";s:58:"Resources/Public/layerslider/skins/borderlessdark/skin.png";s:4:"dfc9";s:63:"Resources/Public/layerslider/skins/borderlessdark3d/loading.gif";s:4:"e32d";s:63:"Resources/Public/layerslider/skins/borderlessdark3d/nothumb.png";s:4:"4fb0";s:62:"Resources/Public/layerslider/skins/borderlessdark3d/shadow.png";s:4:"dfc1";s:60:"Resources/Public/layerslider/skins/borderlessdark3d/skin.css";s:4:"6c93";s:60:"Resources/Public/layerslider/skins/borderlessdark3d/skin.png";s:4:"744e";s:62:"Resources/Public/layerslider/skins/borderlesslight/loading.gif";s:4:"4f31";s:62:"Resources/Public/layerslider/skins/borderlesslight/nothumb.png";s:4:"4fb0";s:61:"Resources/Public/layerslider/skins/borderlesslight/shadow.png";s:4:"35a1";s:59:"Resources/Public/layerslider/skins/borderlesslight/skin.css";s:4:"2473";s:59:"Resources/Public/layerslider/skins/borderlesslight/skin.png";s:4:"dd7e";s:64:"Resources/Public/layerslider/skins/borderlesslight3d/loading.gif";s:4:"4f31";s:64:"Resources/Public/layerslider/skins/borderlesslight3d/nothumb.png";s:4:"4fb0";s:63:"Resources/Public/layerslider/skins/borderlesslight3d/shadow.png";s:4:"dfc1";s:61:"Resources/Public/layerslider/skins/borderlesslight3d/skin.css";s:4:"c08f";s:61:"Resources/Public/layerslider/skins/borderlesslight3d/skin.png";s:4:"5003";s:55:"Resources/Public/layerslider/skins/carousel/loading.gif";s:4:"4f31";s:55:"Resources/Public/layerslider/skins/carousel/nothumb.png";s:4:"4fb0";s:52:"Resources/Public/layerslider/skins/carousel/skin.css";s:4:"86e0";s:52:"Resources/Public/layerslider/skins/carousel/skin.png";s:4:"2168";s:55:"Resources/Public/layerslider/skins/darkskin/loading.gif";s:4:"e32d";s:55:"Resources/Public/layerslider/skins/darkskin/nothumb.png";s:4:"575f";s:52:"Resources/Public/layerslider/skins/darkskin/skin.css";s:4:"7aa8";s:52:"Resources/Public/layerslider/skins/darkskin/skin.png";s:4:"d9ec";s:58:"Resources/Public/layerslider/skins/defaultskin/loading.gif";s:4:"088b";s:58:"Resources/Public/layerslider/skins/defaultskin/nothumb.png";s:4:"4fb0";s:55:"Resources/Public/layerslider/skins/defaultskin/skin.css";s:4:"4346";s:55:"Resources/Public/layerslider/skins/defaultskin/skin.png";s:4:"7150";s:56:"Resources/Public/layerslider/skins/fullwidth/loading.gif";s:4:"088b";s:56:"Resources/Public/layerslider/skins/fullwidth/nothumb.png";s:4:"4fb0";s:53:"Resources/Public/layerslider/skins/fullwidth/skin.css";s:4:"b3f8";s:53:"Resources/Public/layerslider/skins/fullwidth/skin.png";s:4:"5003";s:60:"Resources/Public/layerslider/skins/fullwidthdark/loading.gif";s:4:"e32d";s:60:"Resources/Public/layerslider/skins/fullwidthdark/nothumb.png";s:4:"4fb0";s:57:"Resources/Public/layerslider/skins/fullwidthdark/skin.css";s:4:"77f9";s:57:"Resources/Public/layerslider/skins/fullwidthdark/skin.png";s:4:"c2a9";s:52:"Resources/Public/layerslider/skins/glass/loading.gif";s:4:"088b";s:52:"Resources/Public/layerslider/skins/glass/nothumb.png";s:4:"4fb0";s:51:"Resources/Public/layerslider/skins/glass/shadow.png";s:4:"7fee";s:49:"Resources/Public/layerslider/skins/glass/skin.css";s:4:"bc48";s:49:"Resources/Public/layerslider/skins/glass/skin.png";s:4:"a52d";s:56:"Resources/Public/layerslider/skins/lightskin/loading.gif";s:4:"088b";s:56:"Resources/Public/layerslider/skins/lightskin/nothumb.png";s:4:"4fb0";s:53:"Resources/Public/layerslider/skins/lightskin/skin.css";s:4:"76dd";s:53:"Resources/Public/layerslider/skins/lightskin/skin.png";s:4:"7a70";s:54:"Resources/Public/layerslider/skins/minimal/loading.gif";s:4:"088b";s:54:"Resources/Public/layerslider/skins/minimal/nothumb.png";s:4:"4fb0";s:51:"Resources/Public/layerslider/skins/minimal/skin.css";s:4:"12a9";s:51:"Resources/Public/layerslider/skins/minimal/skin.png";s:4:"683c";s:53:"Resources/Public/layerslider/skins/noskin/loading.gif";s:4:"088b";s:53:"Resources/Public/layerslider/skins/noskin/nothumb.png";s:4:"4fb0";s:50:"Resources/Public/layerslider/skins/noskin/skin.css";s:4:"38ef";s:50:"Resources/Public/layerslider/skins/noskin/skin.png";s:4:"68ac";s:51:"Tests/Unit/Controller/LayersliderControllerTest.php";s:4:"adb3";s:55:"Tests/Unit/Controller/PitslayersliderControllerTest.php";s:4:"8c29";s:43:"Tests/Unit/Domain/Model/LayersliderTest.php";s:4:"9f30";s:47:"Tests/Unit/Domain/Model/PitslayersliderTest.php";s:4:"f8b5";s:14:"doc/manual.sxw";s:4:"8d2d";}',
);
