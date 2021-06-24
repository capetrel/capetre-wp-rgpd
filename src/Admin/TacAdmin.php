<?php

class TacAdmin
{
    public static array $tacAdminPages = ['tac-admin-menu', 'tac-admin-services', 'tac-admin-text'];

    public static array $init = [
        ["id" => "tac_init_hashtag", "title" => "hashtag", "comment" => "Ouvrez automatiquement le panneau avec le hashtag", "class" => "Tac_admin_scripts", "function" => "", "value" => "#tarteaucitron", "type" => "input"],
        ["id" => "tac_init_highPrivacy", "title" => "highPrivacy", "comment" => "Désactiver la fonction de consentement automatique sur la navigation ?", "class" => "Tac_admin_scripts", "function" => "", "value" => "false", "type" => "boolean", "options" => ["true", "false"]],
        ["id" => "tac_init_AcceptAllCta", "title" => "AcceptAllCta", "comment" => "Afficher le bouton Accepter tout lorsque la valeur est élevée", "class" => "Tac_admin_scripts", "function" => "", "value" => "false", "type" => "boolean", "options" => ["true", "false"]],
        ["id" => "tac_init_orientation", "title" => "orientation", "comment" => "la grande bannière doit être en haut ou en bas ?", "class" => "Tac_admin_scripts", "function" => "", "value" => "bottom", "type" => "options", "options" => ["top", "middle", "bottom"]],
        ["id" => "tac_init_adblocker", "title" => "adblocker", "comment" => "Afficher un message si un bloqueur de publicités est détecté", "class" => "Tac_admin_scripts", "function" => "", "value" => "false", "type" => "boolean", "options" => ["true", "false"]],
        ["id" => "tac_init_showAlertSmall", "title" => "showAlertSmall", "comment" => "Montrer la petite bannière en bas / en haut à droite ?", "class" => "Tac_admin_scripts", "function" => "", "value" => "true", "type" => "boolean", "options" => ["true", "false"]],
        ["id" => "tac_init_cookieslist", "title" => "cookieslist", "comment" => "Afficher la liste des cookies installés ?", "class" => "Tac_admin_scripts", "function" => "", "value" => "true", "type" => "boolean", "options" => ["true", "false"]],
        ["id" => "tac_init_removeCredit", "title" => "removeCredit", "comment" => "Supprimer le lien de crédit ?", "class" => "Tac_admin_scripts", "function" => "", "value" => "false", "type" => "boolean", "options" => ["true", "false"]],
        ["id" => "tac_init_handleBrowserDNTRequest", "title" => "handleBrowserDNTRequest", "comment" => "Tout refuser si DNT est activé", "class" => "Tac_admin_scripts", "function" => "", "value" => "false", "type" => "boolean", "options" => ["true", "false"]],
        ["id" => "tac_init_cookieDomain", "title" => "cookieDomain", "comment" => "Nom de domaine sur lequel sera placé le cookie des sous-domaines", "class" => "Tac_admin_scripts", "function" => "", "value" => "", "type" => "input"],
        ["id" => "tac_init_tarteaucitronCookieName", "title" => "cookieName", "comment" => "Nom du cookie enregistré avec les paramètres tarteaucitron.", "class" => "Tac_admin_scripts", "function" => "", "value" => "tarteaucitron", "type" => "input"],
        ["id" => "tac_init_tarteaucitronExternalCss", "title" => "useExternalCss", "comment" => "Utilisation de css supplémentaire ?", "class" => "Tac_admin_scripts", "function" => "", "value" => "false", "type" => "boolean", "options" => ["true", "false"]],
        ["id" => "tac_othet_ExternalCssUrl", "title" => "External CSS Url", "comment" => "Url qui sera utilisée pour charger ce css supplémentaire", "class" => "Tac_admin_scripts", "function" => "", "value" => "", "type" => "input"],
        ["id" => "tac_init_tarteaucitronForceLanguage", "title" => "tarteaucitronForceLanguage", "comment" => "Forcer la langue du module", "class" => "Tac_admin_scripts", "function" => "", "value" => "BrowserLanguage", "type" => "options", "options" => ["BrowserLanguage", "bg", "cs", "de", "el", "en", "es", "fr", "it", "nl", "pl", "pt", "ro", "ru"]],
        ["id" => "tac_init_tarteaucitronForceExpire", "title" => "tarteaucitronForceExpire", "comment" => "Forcer la date d'expiration par defaut (en jours)", "class" => "Tac_admin_scripts", "function" => "", "value" => "365", "type" => "integer"],
    ];

    public static array $services = [
        "ads" => [
            ["id" => "", "title" => "ads", "class" => "Tac_admin_services", "function" => "section_html", "value" => ""],
            ["id" => "tac_services_adform", "title" => "Adform", "class" => "Tac_admin_services", "function" => "", "value" => "adform", "code" => ["js"=> "tarteaucitron.user.adformpm = ###adformpm###;tarteaucitron.user.adformpagename = \"###adformpagename###\";", "html" => "null"]],
            ["id" => "tac_services_adsense", "title" => "Google Adsense", "class" => "Tac_admin_services", "function" => "", "value" => "adsense", "code" => ["js"=> "null", "html" => "&lt;ins class=\"adsbygoogle\" style=\"display:inline-block;width:###width###px;height:###height###px\" data-ad-client=\"###ca_pub_xxxxxxxxxxxxxxx###\" data-ad-slot=\"###ad_slot###\"&gt;&lt;/ins&gt;&lt;script type=\"text/javascript\"&gt;(adsbygoogle = window.adsbygoogle || []).push({});&lt;/script&gt;"]],
            ["id" => "tac_services_adsensesearchform", "title" => "Google Adsense Search (form)", "class" => "Tac_admin_services", "function" => "", "value" => "adsensesearchform", "code" => ["js"=> "null", "html" => "&lt;form action=\"###url_destination###\" id=\"cse-search-box\" target=\"###target (_self | _blank)###\"&gt;&lt;div&gt;&lt;input type=\"hidden\" name=\"cx\" value=\"###partner-pub-XXXXXXXXXXXX:XXXXXX###\" /&gt;&lt;input type=\"hidden\" name=\"ie\" value=\"UTF-8\" /&gt;&lt;input type=\"text\" name=\"q\" size=\"25\" /&gt;&lt;input type=\"submit\" name=\"sa\" value=\"Search\" /&gt;&lt;/div&gt;&lt;/form&gt;"]],
            ["id" => "tac_services_adsensesearchresult", "title" => "Google Adsense Search (result)", "class" => "Tac_admin_services", "function" => "", "value" => "adsensesearchresult", "code" => ["js"=> "tarteaucitron.user.adsensesearchresultCx = '###partner-pub-XXXXXXXXXXXXX:XXXXXXX###';", "html" => "&lt;gcse:searchresults-only id=\"gcse_searchresults\"&gt;&lt;/gcse:searchresults-only&gt;"]],
            ["id" => "tac_services_aduptech_ads", "title" => "Ad Up Technology (ads)", "class" => "Tac_admin_services", "function" => "", "value" => "aduptech_ads", "code" => ["js"=> "null", "html" => "Array,Array"]],
            ["id" => "tac_services_aduptech_conversion", "title" => "Ad Up Technology (conversion)", "class" => "Tac_admin_services", "function" => "", "value" => "aduptech_conversion", "code" => ["js"=> "null", "html" => "&lt;div class=\"aduptech_conversion\"
     advertiserId=\"###ADVERTISER_ID###\"
     conversionCode=\"###CONVERSION_CODE###\"&gt;&lt;/div&gt;"]],
            ["id" => "tac_services_aduptech_retargeting", "title" => "Ad Up Technology (retargeting)", "class" => "Tac_admin_services", "function" => "", "value" => "aduptech_retargeting", "code" => ["js"=> "null", "html" => "&lt;div class=\"aduptech_retargeting\"
     account=\"###ACCOUNT_ID###\"
     product='[\"###PRODUCT_ID1###\", \"###PRODUCT_ID2###\"]'
     track=\"productList\" &gt;&lt;/div&gt;"]],
            ["id" => "tac_services_amazon", "title" => "Amazon", "class" => "Tac_admin_services", "function" => "", "value" => "amazon", "code" => ["js"=> "null", "html" => "&lt;div class=\"amazon_product\" amazonid=\"###xxxxx-xx###\" productid=\"###product_id###\"&gt;&lt;/div&gt;"]],
            ["id" => "tac_services_bingads", "title" => "Bing Ads Universal Event Tracking", "class" => "Tac_admin_services", "function" => "", "value" => "bingads", "code" => ["js"=> "tarteaucitron.user.bingadsTag = '###bingadsTag###';tarteaucitron.user.bingadsID = '###bingadsID###';;", "html" => "null"]],
            ["id" => "tac_services_clicmanager", "title" => "Clicmanager", "class" => "Tac_admin_services", "function" => "", "value" => "clicmanager", "code" => ["js"=> "null", "html" => "&lt;div class=\"clicmanager-canvas\" c=\"###c###\" s=\"###s###\" t=\"###t###\"&gt;&lt;/div&gt;"]],
            ["id" => "tac_services_criteo", "title" => "Criteo", "class" => "Tac_admin_services", "function" => "", "value" => "criteo", "code" => ["js"=> "null", "html" => "&lt;div class=\"criteo-canvas\" zoneid=\"###zoneid###\"&gt;&lt;/div&gt;"]],
            ["id" => "tac_services_datingaffiliation", "title" => "Dating Affiliation", "class" => "Tac_admin_services", "function" => "", "value" => "datingaffiliation", "code" => ["js"=> "null", "html" => "&lt;div class=\"datingaffiliation-canvas\" data-comfrom=\"###data-comfrom###\" data-r=\"###data-r###\" data-p=\"###data-p###\" data-cf0=\"###data-cf0###\" data-langue=\"###data-langue###\" data-forwardAffiliate=\"###data-forwardAffiliate###\" data-cf2=\"###data-cf2###\" data-cfsa2=\"###data-cfsa2###\" width=\"###width###\" height=\"###height###\"&gt;&lt;/div&gt;"]],
            ["id" => "tac_services_datingaffiliationpopup", "title" => "Dating Affiliation (popup)", "class" => "Tac_admin_services", "function" => "", "value" => "datingaffiliationpopup", "code" => ["js"=> "null", "html" => "&lt;div class=\"datingaffiliationpopup-canvas\" comfrom=\"###comfrom###\" promo=\"###promo###\" productid=\"###productid###\" submitconfig=\"###submitconfig###\" ur=\"###ur###\" brand=\"###brand###\" lang=\"###lang###\" cf0=\"###cf0###\" cf2=\"###cf2###\" subid1=\"###subid1###\" cfsa2=\"###cfsa2###\" subid2=\"###subid2###\" nicheid=\"###nicheid###\" degreid=\"###degreid###\" bt=\"###bt###\" vis=\"###vis###\" hid=\"###hid###\" snd=\"###snd###\" aabd=\"###aabd###\" aabs=\"###aabs###\"&gt;&lt;/div&gt;"]],
            ["id" => "tac_services_ferankpub", "title" => "FERank (pub)", "class" => "Tac_admin_services", "function" => "", "value" => "ferankpub", "code" => ["js"=> "null", "html" => "&lt;ins class=\"ferank-publicite\" client=\"###id_client###\" style=\"display:inline-block;width:###width###px;height:###height###px\" titre=\"###couleur_titre###\" texte=\"###couleur_texte###\"&gt;&lt;/ins&gt;"]],
            ["id" => "tac_services_googleadwordsconversion", "title" => "Google Adwords (conversion)", "class" => "Tac_admin_services", "function" => "", "value" => "googleadwordsconversion", "code" => ["js"=> "null", "html" => "&lt;script type=\"text/javascript\"&gt;tarteaucitron.user.adwordsconversionId = ###id###;tarteaucitron.user.adwordsconversionLabel = '###label###';tarteaucitron.user.adwordsconversionLanguage  = '###language###';tarteaucitron.user.adwordsconversionFormat = '###format###';tarteaucitron.user.adwordsconversionColor = '###color###';tarteaucitron.user.adwordsconversionValue = '###value###';tarteaucitron.user.adwordsconversionCurrency = '###currency###';tarteaucitron.user.adwordsconversionCustom1 = '###custom1###';tarteaucitron.user.adwordsconversionCustom2 = '###custom2###';&lt;/script&gt;"]],
            ["id" => "tac_services_googleadwordsremarketing", "title" => "Google Adwords (remarketing)", "class" => "Tac_admin_services", "function" => "", "value" => "googleadwordsremarketing", "code" => ["js"=> "tarteaucitron.user.adwordsremarketingId = ###id###;", "html" => "null"]],
            ["id" => "tac_services_googlepartners", "title" => "Google Partners Badge", "class" => "Tac_admin_services", "function" => "", "value" => "googlepartners", "code" => ["js"=> "null", "html" => "&lt;div class=\"g-partnersbadge\" data-agency-id=\"###id###\"&gt;&lt;/div&gt;"]],
            ["id" => "tac_services_prelinker", "title" => "Prelinker", "class" => "Tac_admin_services", "function" => "", "value" => "prelinker", "code" => ["js"=> "null", "html" => "&lt;div class=\"prelinker-canvas\" siteId=\"###siteId###\" bannerId=\"###bannerId###\" defaultLanguage=\"###defaultLanguage###\" tracker=\"###tracker###\"&gt;&lt;/div&gt;"]],
            ["id" => "tac_services_pubdirecte", "title" => "Pubdirecte", "class" => "Tac_admin_services", "function" => "", "value" => "pubdirecte", "code" => ["js"=> "null", "html" => "&lt;div class=\"pubdirecte-canvas\" pid=\"###id###\" ref=\"###ref###\"&gt;&lt;/div&gt;"]],
            ["id" => "tac_services_shareasale", "title" => "ShareASale", "class" => "Tac_admin_services", "function" => "", "value" => "shareasale", "code" => ["js"=> "null", "html" => "&lt;div class=\"shareasale-canvas\" amount=\"###amount###\" tracking=\"###tracking###\" transtype=\"###transtype###\" persale=\"###persale###\" perlead=\"###perlead###\" perhit=\"###perhit###\" merchantID=\"###merchantID###\"&gt;&lt;/div&gt;"]],
            ["id" => "tac_services_twenga", "title" => "Twenga", "class" => "Tac_admin_services", "function" => "", "value" => "twenga", "code" => ["js"=> "null", "html" => "&lt;script type=\"text/javascript\"&gt;tarteaucitron.user.twengaId = ###id###;tarteaucitron.user.twengaLocale = '###locale###';&lt;/script&gt;"]],
            ["id" => "tac_services_vshop", "title" => "vShop", "class" => "Tac_admin_services", "function" => "", "value" => "vshop", "code" => ["js"=> "null", "html" => "&lt;div class=\"vcashW\" style=\"width: ###width###px; height: ###height###px;\" data-key=\"###key###\" data-tracking=\"###zone###\" data-category=\"###category###\" data-keyword=\"###keyword###\" data-layout=\"###layout (small | medium | big)###\" data-theme=\"###theme (shadow | circle)###\" data-linkColor=\"###link_color###\" data-textColor=\"###text_color###\" data-backgroundColor=\"###background_color###\" data-borderColor=\"###border_color###\"&gt;&lt;/div&gt;"]],
        ],
        "analytic" => [
            ["id" => "", "title" => "analytic", "class" => "Tac_admin_services", "function" => "section_html", "value" => ""],

            ["id" => "tac_services_amplitude", "title" => "Amplitude", "class" => "Tac_admin_services", "function" => "", "value" => "amplitude", "code" => ["js"=> "tarteaucitron.user.amplitude = '###API_KEY###';", "html" => "null"]],
            ["id" => "tac_services_analytics", "title" => "Google Analytics (universal)", "class" => "Tac_admin_services", "function" => "", "value" => "analytics", "code" => ["js"=> "tarteaucitron.user.analyticsUa = '###UA-XXXXXXXX-X###';tarteaucitron.user.analyticsMore = function () { /* <s>add here your optionnal ga.push()</s> */ };", "html" => "null"]],
            ["id" => "tac_services_atinternet", "title" => "AT Internet", "class" => "Tac_admin_services", "function" => "", "value" => "atinternet", "code" => ["js"=> "tarteaucitron.user.atLibUrl = '###SMARTTAG_JS_LINK###';tarteaucitron.user.atMore = function () { /* <s>add here your optionnal ATInternet.Tracker.Tag configuration</s> */ };", "html" => "null"]],
            ["id" => "tac_services_clicky", "title" => "Clicky", "class" => "Tac_admin_services", "function" => "", "value" => "clicky", "code" => ["js"=> "tarteaucitron.user.clickyId = ###YOUR-ID###;tarteaucitron.user.clickyMore = function () { /* <s>add here your optionnal clicky function</s> */ };", "html" => "null"]],
            ["id" => "tac_services_crazyegg", "title" => "Crazy Egg", "class" => "Tac_admin_services", "function" => "", "value" => "crazyegg", "code" => ["js"=> "tarteaucitron.user.crazyeggId = '###account_id###';", "html" => "null"]],
            ["id" => "tac_services_etracker", "title" => "eTracker", "class" => "Tac_admin_services", "function" => "", "value" => "etracker", "code" => ["js"=> "tarteaucitron.user.etracker = '###data-secure-code###';", "html" => "null"]],
            ["id" => "tac_services_ferank", "title" => "FERank", "class" => "Tac_admin_services", "function" => "", "value" => "ferank", "code" => ["js"=> "null", "html" => "null"]],
            ["id" => "tac_services_gajs", "title" => "Google Analytics (ga.js)", "class" => "Tac_admin_services", "function" => "", "value" => "gajs", "code" => ["js"=> "tarteaucitron.user.gajsUa = '###UA-XXXXXXXX-X###';tarteaucitron.user.gajsMore = function () { /* <s>add here your optionnal _ga.push()</s> */ };", "html" => "null"]],
            ["id" => "tac_services_getplus", "title" => "Get+", "class" => "Tac_admin_services", "function" => "", "value" => "getplus", "code" => ["js"=> "tarteaucitron.user.getplusId = '###ACCOUNT_ID###';", "html" => "null"]],
            ["id" => "tac_services_getquanty", "title" => "GetQuanty", "class" => "Tac_admin_services", "function" => "", "value" => "getquanty", "code" => ["js"=> "tarteaucitron.user.getguanty = '###id###';", "html" => "null"]],
            ["id" => "tac_services_gtag", "title" => "Google Analytics (gtag.js)", "class" => "Tac_admin_services", "function" => "", "value" => "gtag", "code" => ["js"=> "tarteaucitron.user.gtagUa = '###UA-XXXXXXXX-X###';tarteaucitron.user.gtagMore = function () { /* <s>add here your optionnal gtag()</s> */ };", "html" => "null"]],
            ["id" => "tac_services_hotjar", "title" => "Hotjar", "class" => "Tac_admin_services", "function" => "", "value" => "hotjar", "code" => ["js"=> "null", "html" => "&lt;script type=\"text/javascript\"&gt;tarteaucitron.user.hotjarId = ###hotjarId###;tarteaucitron.user.HotjarSv = ###HotjarSv###;&lt;/script&gt;"]],
            ["id" => "tac_services_hubspot", "title" => "Hubspot", "class" => "Tac_admin_services", "function" => "", "value" => "hubspot", "code" => ["js"=> "tarteaucitron.user.hubspotId = '###API_KEY###';", "html" => "null"]],
            ["id" => "tac_services_koban", "title" => "Koban", "class" => "Tac_admin_services", "function" => "", "value" => "koban", "code" => ["js"=> "tarteaucitron.user.kobanurl = '###KOBEN_URL###';
        tarteaucitron.user.kobanapi = '###KOBAN_API###';", "html" => "null"]],
            ["id" => "tac_services_matomo", "title" => "Matomo (formerly known as Piwik)", "class" => "Tac_admin_services", "function" => "", "value" => "matomo", "code" => ["js"=> "tarteaucitron.user.matomoId = ###SITE_ID###;tarteaucitron.user.matomoHost = \"###YOUR_MATOMO_URL###\";", "html" => "null"]],
            ["id" => "tac_services_mautic", "title" => "Mautic", "class" => "Tac_admin_services", "function" => "", "value" => "mautic", "code" => ["js"=> "tarteaucitron.user.mauticurl = '###mautic_url###';", "html" => "null"]],
            ["id" => "tac_services_metrica", "title" => "Yandex Metrica", "class" => "Tac_admin_services", "function" => "", "value" => "metrica", "code" => ["js"=> "tarteaucitron.user.yandexmetrica = '###id###';", "html" => "null"]],
            ["id" => "tac_services_microsoftcampaignanalytics", "title" => "Microsoft Campaign Analytics", "class" => "Tac_admin_services", "function" => "", "value" => "microsoftcampaignanalytics", "code" => ["js"=> "null", "html" => "&lt;script type=\"text/javascript\"&gt;tarteaucitron.user.microsoftcampaignanalyticsUUID = '###UUID###';tarteaucitron.user.microsoftcampaignanalyticsdomaineId = '###domainId###';tarteaucitron.user.microsoftcampaignanalyticsactionId = '###actionId###';&lt;/script&gt;"]],
            ["id" => "tac_services_multiplegtag", "title" => "Google Analytics (gtag.js) [for multiple UA]", "class" => "Tac_admin_services", "function" => "", "value" => "multiplegtag", "code" => ["js"=> "tarteaucitron.user.multiplegtagUa = ###['UA-XXXXXXXX-X', 'UA-XXXXXXXX-X', 'UA-XXXXXXXX-X']###;", "html" => "null"]],
            ["id" => "tac_services_statcounter", "title" => "StatCounter", "class" => "Tac_admin_services", "function" => "", "value" => "statcounter", "code" => ["js"=> "null", "html" => "&lt;div class=\"statcounter-canvas\"&gt;&lt;/div&gt;&lt;script type=\"text/javascript\"&gt;var sc_project = ###sc_project###, sc_invisible = ###sc_invisible (0 | 1)###, sc_security = \"###sc_security###\", sc_text = ###sc_text (0 | 2 | 3 | 4 | 5)###;&lt;/script&gt;"]],
            ["id" => "tac_services_visualrevenue", "title" => "VisualRevenue", "class" => "Tac_admin_services", "function" => "", "value" => "visualrevenue", "code" => ["js"=> "tarteaucitron.user.visualrevenueId = ###ID###;", "html" => "null"]],
            ["id" => "tac_services_webmecanik", "title" => "Webmecanik", "class" => "Tac_admin_services", "function" => "", "value" => "webmecanik", "code" => ["js"=> "tarteaucitron.user.webmecanikurl = '###webmecanikurl###';", "html" => "null"]],
            ["id" => "tac_services_wysistat", "title" => "Wysistat", "class" => "Tac_admin_services", "function" => "", "value" => "wysistat", "code" => ["js"=> "null", "html" => "&lt;script type=\"text/javascript\"&gt;tarteaucitron.user.wysistat = {\"cli\": \"###nom###\", \"frm\": \"###frame###\", \"prm\": \"###prm###\", \"ce\": \"###compteurExtranet###\", \"page\": \"###page###\", \"roi\": \"###roi###\", \"prof\": \"###profiling###\", \"cpt\": \"###compte###\"};&lt;/script&gt;"]],
            ["id" => "tac_services_xiti", "title" => "AT Internet (deprecated Xiti)", "class" => "Tac_admin_services", "function" => "", "value" => "xiti", "code" => ["js"=> "tarteaucitron.user.xitiId = '###YOUR-ID###';tarteaucitron.user.xitiMore = function () { /* <s>add here your optionnal xiti function</s> */ };", "html" => "null"]],
        ],
        "api" => [
            ["id" => "", "title" => "api", "class" => "Tac_admin_services", "function" => "section_html", "value" => ""],

            ["id" => "tac_services_contentsquare", "title" => "ContentSquare", "class" => "Tac_admin_services", "function" => "", "value" => "contentsquare", "code" => ["js"=> "tarteaucitron.user.contentsquareID = '###YOUR_TAG_ID###';", "html" => "null"]],
            ["id" => "tac_services_googlefonts", "title" => "Google Fonts", "class" => "Tac_admin_services", "function" => "", "value" => "googlefonts", "code" => ["js"=> "tarteaucitron.user.googleFonts = '###families###';", "html" => "null"]],
            ["id" => "tac_services_googlemaps", "title" => "Google Maps", "class" => "Tac_admin_services", "function" => "", "value" => "googlemaps", "code" => ["js"=> "tarteaucitron.user.googlemapsKey = '###API KEY###';", "html" => "&lt;div class=\"googlemaps-canvas\" zoom=\"###zoom###\" latitude=\"###latitude###\" longitude=\"###longitude###\" style=\"width: ###width###px; height: ###height###px;\"&gt;&lt;/div&gt;&lt;script&gt;tarteaucitron.user.mapscallback = '###callback_function###';tarteaucitron.user.googlemapsLibraries = '###LIBRARIES###';&lt;/script&gt;"]],
            ["id" => "tac_services_googlemapssearch", "title" => "Google Maps (search query)", "class" => "Tac_admin_services", "function" => "", "value" => "googlemapssearch", "code" => ["js"=> "null", "html" => "&lt;div class=\"googlemapssearch\" data-search=\"###SEARCHWORDS###\" data-api-key=\"###YOUR_GOOGLE_MAP_API_KEY###\" width=\"###WIDTH###\" height=\"###HEIGHT###\" &gt;&lt;/div&gt;"]],
            ["id" => "tac_services_googletagmanager", "title" => "Google Tag Manager", "class" => "Tac_admin_services", "function" => "", "value" => "googletagmanager", "code" => ["js"=> "tarteaucitron.user.googletagmanagerId = '###GTM-XXXX###';", "html" => "null"]],
            ["id" => "tac_services_jsapi", "title" => "Google jsapi", "class" => "Tac_admin_services", "function" => "", "value" => "jsapi", "code" => ["js"=> "null", "html" => "null"]],
            ["id" => "tac_services_recaptcha", "title" => "reCAPTCHA", "class" => "Tac_admin_services", "function" => "", "value" => "recaptcha", "code" => ["js"=> "null", "html" => "&lt;div class=\"g-recaptcha\" data-sitekey=\"###sitekey###\"&gt;&lt;/div&gt;"]],
            ["id" => "tac_services_tagcommander", "title" => "TagCommander", "class" => "Tac_admin_services", "function" => "", "value" => "tagcommander", "code" => ["js"=> "tarteaucitron.user.tagcommanderid = '###tagcommanderid###';", "html" => "null"]],
            ["id" => "tac_services_timelinejs", "title" => "Timeline JS", "class" => "Tac_admin_services", "function" => "", "value" => "timelinejs", "code" => ["js"=> "null", "html" => "&lt;div class=\"timelinejs-canvas\" spreadsheet_id=\"###spreadsheet_id###\" width=\"###width###\" height=\"###height###\" lang=\"###lang_2_letter###\" font=\"###font (Bevan-PotanoSans | Georgia-Helvetica | Arvo-PTSans)###\" map=\"###map (toner | osm)###\" start_at_end=\"###start_at_end (false | true)###\" hash_bookmark=\"###hash_bookmark (false | true)###\" start_at_slide=\"###start_at_slide (0 | ...)###\" start_zoom=\"###start_zoom (0 | ... | 5)###\"&gt;&lt;/div&gt;"]],
            ["id" => "tac_services_twitterwidgetsapi", "title" => "Twitter Widgets API", "class" => "Tac_admin_services", "function" => "", "value" => "twitterwidgetsapi", "code" => ["js"=> "null", "html" => "null"]],
            ["id" => "tac_services_typekit", "title" => "Typekit (adobe)", "class" => "Tac_admin_services", "function" => "", "value" => "typekit", "code" => ["js"=> "tarteaucitron.user.typekitId = '###id###';", "html" => "null"]],
        ],
        "comment" => [
            ["id" => "", "title" => "comment", "class" => "Tac_admin_services", "function" => "section_html", "value" => ""],

            ["id" => "tac_services_facebookcomment", "title" => "Facebook (commentaire)", "class" => "Tac_admin_services", "function" => "", "value" => "facebookcomment", "code" => ["js"=> "null", "html" => "Array,Array"]],
        ],
        "social" => [
            ["id" => "", "title" => "social", "class" => "Tac_admin_services", "function" => "section_html", "value" => ""],

            ["id" => "tac_services_addtoanyfeed", "title" => "AddToAny (feed)", "class" => "Tac_admin_services", "function" => "", "value" => "addtoanyfeed", "code" => ["js"=> "tarteaucitron.user.addtoanyfeedUri = '###feed_uri###';", "html" => "Array,Array"]],
            ["id" => "tac_services_addtoanyshare", "title" => "AddToAny (share)", "class" => "Tac_admin_services", "function" => "", "value" => "addtoanyshare", "code" => ["js"=> "null", "html" => "Array,Array,Array,Array"]],
            ["id" => "tac_services_ekomi", "title" => "eKomi", "class" => "Tac_admin_services", "function" => "", "value" => "ekomi", "code" => ["js"=> "tarteaucitron.user.ekomiCertId = '###CERT-ID###';", "html" => "null"]],
            ["id" => "tac_services_facebook", "title" => "Facebook", "class" => "Tac_admin_services", "function" => "", "value" => "facebook", "code" => ["js"=> "null", "html" => "Array,Array,Array,Array,Array,Array,Array,Array,Array,Array,Array,Array,Array,Array,Array,Array"]],
            ["id" => "tac_services_facebooklikebox", "title" => "Facebook (like box)", "class" => "Tac_admin_services", "function" => "", "value" => "facebooklikebox", "code" => ["js"=> "null", "html" => "Array,Array"]],
            ["id" => "tac_services_facebookpixel", "title" => "Facebook Pixel", "class" => "Tac_admin_services", "function" => "", "value" => "facebookpixel", "code" => ["js"=> "tarteaucitron.user.facebookpixelId = '###YOUR-ID###'; tarteaucitron.user.facebookpixelMore = function () { /* add here your optionnal facebook pixel function */ };", "html" => "null"]],
            ["id" => "tac_services_gplus", "title" => "Google+", "class" => "Tac_admin_services", "function" => "", "value" => "gplus", "code" => ["js"=> "null", "html" => "Array,Array,Array,Array,Array,Array,Array,Array,Array,Array,Array,Array,Array,Array,Array,Array,Array,Array,Array,Array,Array,Array"]],
            ["id" => "tac_services_gplusbadge", "title" => "Google+ (badge)", "class" => "Tac_admin_services", "function" => "", "value" => "gplusbadge", "code" => ["js"=> "null", "html" => "Array,Array,Array,Array,Array,Array,Array,Array"]],
            ["id" => "tac_services_linkedin", "title" => "Linkedin", "class" => "Tac_admin_services", "function" => "", "value" => "linkedin", "code" => ["js"=> "null", "html" => "Array,Array,Array"]],
            ["id" => "tac_services_pinterest", "title" => "Pinterest", "class" => "Tac_admin_services", "function" => "", "value" => "pinterest", "code" => ["js"=> "null", "html" => "Array,Array,Array,Array,Array,Array,Array,Array"]],
            ["id" => "tac_services_shareaholic", "title" => "Shareaholic", "class" => "Tac_admin_services", "function" => "", "value" => "shareaholic", "code" => ["js"=> "tarteaucitron.user.shareaholicSiteId = '###site_id###';", "html" => "&lt;div class='shareaholic-canvas' data-app='share_buttons' data-app-id='###app_id###'&gt;&lt;/div&gt;"]],
            ["id" => "tac_services_sharethis", "title" => "ShareThis", "class" => "Tac_admin_services", "function" => "", "value" => "sharethis", "code" => ["js"=> "tarteaucitron.user.sharethisPublisher = '###publisher###';", "html" => "&lt;span class=\"tacSharethis\"&gt;&lt;/span&gt;###services_list_spans###"]],
            ["id" => "tac_services_twitter", "title" => "Twitter", "class" => "Tac_admin_services", "function" => "", "value" => "twitter", "code" => ["js"=> "null", "html" => "Array,Array,Array,Array,Array,Array,Array,Array,Array,Array"]],
            ["id" => "tac_services_twitterembed", "title" => "Twitter (cards)", "class" => "Tac_admin_services", "function" => "", "value" => "twitterembed", "code" => ["js"=> "null", "html" => "&lt;div class=\"twitterembed-canvas\" tweetid=\"###tweet_id###\" data-width=\"###width###\" theme=\"###theme (light | dark)###\" cards=\"###cards (show | hidden)###\" conversation=\"###conversation (show | none)###\" data-align=\"###align (left | center | right)###\"&gt;&lt;/div&gt;"]],
            ["id" => "tac_services_twittertimeline", "title" => "Twitter (timelines)", "class" => "Tac_admin_services", "function" => "", "value" => "twittertimeline", "code" => ["js"=> "null", "html" => "&lt;span class=\"tacTwitterTimelines\"&gt;&lt;/span&gt;&lt;a class=\"twitter-timeline\" href=\"###twitter_url###\" data-tweet-limit=\"###tweet-limit###\" data-dnt=\"###dnt (true | false)###\" data-width=\"###width###\" data-height=\"###height###\" data-theme=\"###theme (dark | light)###\" data-link-color=\"###hex link-color###\"&gt;&lt;/a&gt;"]],
        ],
        "support" => [
            ["id" => "", "title" => "support", "class" => "Tac_admin_services", "function" => "section_html", "value" => ""],

            ["id" => "tac_services_tawkto", "title" => "Tawk.to chat", "class" => "Tac_admin_services", "function" => "", "value" => "tawkto", "code" => ["js"=> "tarteaucitron.user.tawktoId = '###ID###';", "html" => "null"]],
            ["id" => "tac_services_uservoice", "title" => "UserVoice", "class" => "Tac_admin_services", "function" => "", "value" => "uservoice", "code" => ["js"=> "tarteaucitron.user.userVoiceApi = '###YOUR_API_KEY###';", "html" => "Array,Array,Array"]],
            ["id" => "tac_services_zopim", "title" => "Zopim", "class" => "Tac_admin_services", "function" => "", "value" => "zopim", "code" => ["js"=> "tarteaucitron.user.zopimID = '###zopim_id###';", "html" => "null"]],
        ],
        "video" => [
            ["id" => "", "title" => "video", "class" => "Tac_admin_services", "function" => "section_html", "value" => ""],

            ["id" => "tac_services_dailymotion", "title" => "Dailymotion", "class" => "Tac_admin_services", "function" => "", "value" => "dailymotion", "code" => ["js"=> "null", "html" => "&lt;div class=\"dailymotion_player\" videoID=\"###video_id###\" width=\"###width###\" height=\"###height###\" showinfo=\"###showinfo (1 | 0)###\" autoplay=\"###autoplay (0 | 1)###\"&gt;&lt;/div&gt;"]],
            ["id" => "tac_services_issuu", "title" => "Issuu", "class" => "Tac_admin_services", "function" => "", "value" => "issuu", "code" => ["js"=> "null", "html" => "&lt;div class=\"issuu_player\" issuuID=\"###your_issuu_id###\" width=\"###width###\" height=\"###height###\"&gt;&lt;/div&gt;"]],
            ["id" => "tac_services_prezi", "title" => "Prezi", "class" => "Tac_admin_services", "function" => "", "value" => "prezi", "code" => ["js"=> "null", "html" => "&lt;div class=\"prezi-canvas\" data-id=\"###slide_id###\" width=\"###width###\" height=\"###height###\"&gt;&lt;/div&gt;"]],
            ["id" => "tac_services_slideshare", "title" => "SlideShare", "class" => "Tac_admin_services", "function" => "", "value" => "slideshare", "code" => ["js"=> "null", "html" => "&lt;div class=\"slideshare-canvas\" data-id=\"###slide_id###\" width=\"###width###\" height=\"###height###\"&gt;&lt;/div&gt;"]],
            ["id" => "tac_services_vimeo", "title" => "Vimeo", "class" => "Tac_admin_services", "function" => "", "value" => "vimeo", "code" => ["js"=> "null", "html" => "&lt;div class=\"vimeo_player\" videoID=\"###video_id###\" width=\"###width###\" height=\"###height###\"&gt;&lt;/div&gt;"]],
            ["id" => "tac_services_youtube", "title" => "Youtube", "class" => "Tac_admin_services", "function" => "", "value" => "youtube", "code" => ["js"=> "null", "html" => "&lt;div class=\"youtube_player\" videoID=\"###video_id###\" width=\"###width###\" height=\"###height###\" theme=\"###theme (dark | light)###\" rel=\"###rel (1 | 0)###\" controls=\"###controls (1 | 0)###\" showinfo=\"###showinfo (1 | 0)###\" autoplay=\"###autoplay (0 | 1)###\"&gt;&lt;/div&gt;"]],
            ["id" => "tac_services_youtubeapi", "title" => "Youtube (Js API)", "class" => "Tac_admin_services", "function" => "", "value" => "youtubeapi", "code" => ["js"=> "null", "html" => "null"]],
        ],
    ];

    public static array $customText = [
        ["id" => "tac_lang_middle_head", "title" => "middleBarHead", "function" => "", "value" => null, "placeholder" => "☝ 🍪", "type" => "input"],
        ["id" => "tac_lang_adblock", "title" => "adblock", "function" => "", "value" => null, "placeholder" => "Hello! This site is transparent and lets you chose the 3rd party services you want to allow.", "type" => "input"],
        ["id" => "tac_lang_adblock_call", "title" => "adblock_call", "function" => "", "value" => null, "placeholder" => "Please disable your adblocker to start customizing.", "type" => "input"],
        ["id" => "tac_lang_reload", "title" => "reload", "function" => "", "value" => null, "placeholder" => "Refresh the page", "type" => "input"],
        ["id" => "tac_lang_alertBigScroll", "title" => "alertBigScroll", "function" => "", "value" => null, "placeholder" => "By continuing to scroll,", "type" => "input"],
        ["id" => "tac_lang_alertBigClick", "title" => "alertBigClick", "function" => "", "value" => null, "placeholder" => "If you continue to browse this website,", "type" => "input"],
        ["id" => "tac_lang_alertBig", "title" => "alertBig", "function" => "", "value" => null, "placeholder" => "you are allowing all third-party services", "type" => "input"],
        ["id" => "tac_lang_alertBigPrivacy", "title" => "alertBigPrivacy", "function" => "", "value" => null, "placeholder" => "This site uses cookies and gives you control over what you want to activate", "type" => "input"],
        ["id" => "tac_lang_alertSmall", "title" => "alertSmall", "function" => "", "value" => null, "placeholder" => "Manage services", "type" => "input"],
        ["id" => "tac_lang_personalize", "title" => "personalize", "function" => "", "value" => null, "placeholder" => "Personalize", "type" => "input"],
        ["id" => "tac_lang_acceptAll", "title" => "acceptAll", "function" => "", "value" => null, "placeholder" => "OK, accept all", "type" => "input"],
        ["id" => "tac_lang_close", "title" => "close", "function" => "", "value" => null, "placeholder" => "Close", "type" => "input"],
        ["id" => "tac_lang_all", "title" => "all", "function" => "", "value" => null, "placeholder" => "Preference for all services", "type" => "input"],
        ["id" => "tac_lang_info", "title" => "info", "function" => "", "value" => null, "placeholder" => "Protecting your privacy", "type" => "input"],
        ["id" => "tac_lang_disclaimer", "title" => "disclaimer", "function" => "", "value" => null, "placeholder" => "By allowing these third party services, you accept their cookies and the use of tracking technologies necessary for their proper functioning.", "type" => "input"],
        ["id" => "tac_lang_allow", "title" => "allow", "function" => "", "value" => null, "placeholder" => "Allow", "type" => "input"],
        ["id" => "tac_lang_deny", "title" => "deny", "function" => "", "value" => null, "placeholder" => "Deny", "type" => "input"],
        ["id" => "tac_lang_noCookie", "title" => "noCookie", "function" => "", "value" => null, "placeholder" => "This service does not use cookie.", "type" => "input"],
        ["id" => "tac_lang_useCookie", "title" => "useCookie", "function" => "", "value" => null, "placeholder" => "This service can install", "type" => "input"],
        ["id" => "tac_lang_useCookieCurrent", "title" => "useCookieCurrent", "function" => "", "value" => null, "placeholder" => "This service has installed", "type" => "input"],
        ["id" => "tac_lang_useNoCookie", "title" => "useNoCookie", "function" => "", "value" => null, "placeholder" => "This service has not installed any cookie.", "type" => "input"],
        ["id" => "tac_lang_more", "title" => "more", "function" => "", "value" => null, "placeholder" => "Read more", "type" => "input"],
        ["id" => "tac_lang_source", "title" => "source", "function" => "", "value" => null, "placeholder" => "View the official website", "type" => "input"],
        ["id" => "tac_lang_credit", "title" => "credit", "function" => "", "value" => null, "placeholder" => "Cookies manager by tarteaucitron.js", "type" => "input"],
        ["id" => "tac_lang_fallback", "title" => "fallback", "function" => "", "value" => null, "placeholder" => "is disabled.", "type" => "input"],
    ];

    public static function init()
    {
        global $pagenow;

        if (('admin.php' === $pagenow) && (in_array($_GET['page'], self::$tacAdminPages))) {
            add_action('admin_enqueue_scripts', [self::class, 'registerStyle']);
        }

        self::adminMenu();
    }

    public static function adminMenu()
    {
        add_action('admin_menu', [self::class, 'addAdminMenu'], 20);
        add_action('admin_init', [self::class, 'registerSettings']);
    }

    public static function addAdminMenu()
    {
        add_menu_page(__('Paramètres', 'capetrel-wp-rgpd'), 'RGPD', 'manage_options', 'tac-admin-menu', ['Tac_admin_scripts', 'tac_menu_script'], 'dashicons-privacy');
        add_submenu_page('tac-admin-menu', __('Services', 'capetrel-wp-rgpd'), 'Services', 'manage_options', 'tac-admin-services', ['Tac_admin_services', 'tac_menu_services']);
        add_submenu_page('tac-admin-menu', __('Languages', 'capetrel-wp-rgpd'), 'Textes', 'manage_options', 'tac-admin-text', ['Tac_admin_languages', 'tac_menu_languages']);
    }

    public static function registerStyle()
    {
        # Bootstrap css
        wp_register_style('bootstrap.min', plugins_url() . '/capetrel-wp-rgpd/assets/css/bootstrap.min.css', false, '4.1.1');
        wp_enqueue_style('bootstrap.min');

        #Bootstrap js
        wp_enqueue_script('bootstrap.min.js', '//stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array(), '1', true);

        # admin custom css
        wp_register_style('admin', plugins_url() . '/capetrel-wp-rgpd/assets/css/admin.css', false, '1.0.0');
        wp_enqueue_style('admin');
    }

    public static function registerSettings()
    {
        Tac_admin_scripts::registerSettings();
        Tac_admin_services::registerSettings();
        Tac_admin_languages::registerLanguages();
    }
}
