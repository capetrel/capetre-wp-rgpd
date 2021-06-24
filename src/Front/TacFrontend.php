<?php

class TacFrontend
{

    public static function init()
    {
        add_action('wp_enqueue_scripts', ['TacFrontend', 'customHeaderScript']);
        add_action('wp_enqueue_scripts', ['TacFrontend', 'customFooterScript']);
    }

    public static function customHeaderScript()
    {
        wp_enqueue_script('tarteaucitronjshead', plugins_url() . '/capetrel-wp-rgpd/assets/js/tarteaucitronjs/tarteaucitron.js', [], '1.9.0', true);
        wp_enqueue_script('tarteaucitronjsheadmain', plugins_url() . '/capetrel-wp-rgpd/assets/js/main.js', [], '1.1', true);

        $initScript = get_option("tac_header_script_content", "");
        $initScript .= "\n\n";
        $lang = get_option("tac_init_tarteaucitronForceLanguage", "BrowserLanguage");

        if ($lang != "BrowserLanguage") {
            $initScript .= "var tarteaucitronForceLanguage = '" . get_option("tac_init_tarteaucitronForceLanguage") . "';\n";
        }
        $initScript .= "var tarteaucitronForceExpire = '" . get_option("tac_init_tarteaucitronForceExpire", "365") . "';\n";
        $userTexts = self::generateCustomTextJson();

        if ($userTexts !== '') {
            $userTexts = $userTexts == "{};" ? "''" : $userTexts;
            $initScript .= "var tarteaucitronCustomText = {\n" . $userTexts . "}\n";
        }

        if (get_option("tac_init_tarteaucitronExternalCss") === "true") {
            $initScript .= "var linkElement = document.createElement('link');
            linkElement.rel = 'stylesheet';
            linkElement.type = 'text/css';
            linkElement.href = '". get_option("tac_othet_ExternalCssUrl"). "';
            document.getElementsByTagName('head')[0].appendChild(linkElement);\n";
        }

        $initScript .= "tarteaucitron.init({";

        foreach (TacAdmin::$init as $key1 => $service) {
            //ignore the url in the init script
            if ($service["id"] === "tac_init_tarteaucitronExternalCssURL") {
                continue;
            }
            $initScript .= "\n\t\"" . $service["title"] . "\" : ";

            $initScript .= $service["type"] == "boolean" ? "" : "\"";
            $initScript .= get_option($service["id"]) ? get_option($service["id"]) : $service["value"];
            $initScript .= $service["type"] == "boolean" ? "," : "\",";
        }

        $initScript .= "});";

        wp_add_inline_script('tarteaucitronjsheadmain', $initScript);
    }


    public static function customFooterScript()
    {
        wp_enqueue_script('tarteaucitronjsfootmain', plugins_url() . '/capetrel-wp-rgpd/assets/js/main.js', [], '1.2', true);

        $script = "\n" . trim(get_option("tac_footer_script_content"));
        // $newSection = true;
        foreach (TacAdmin::$services as $key1 => $services) {
            foreach ($services as $key2 => $service) {
                /*if ($newSection) {
                    $newSection = false;
                    $script .= "\n//Start Services $key1 \n";
                    continue;
                }*/
                $opt = get_option($service['id'], '');
                if ($opt != '') {
                    $script .= "\n//Start Services $key1 \n";
                    $script .= "(tarteaucitron.job = tarteaucitron.job || []).push('" . get_option($service['id']) . "');\n";
                    $script .= "// End Services $key1 \n\n";
                }
            }
        }

        wp_add_inline_script('tarteaucitronjsfootmain', $script);
    }

    private static function generateCustomTextJson(): string
    {
        $customText = '';
        foreach (TacAdmin::$customText as $key1 => $service) {
            $value = get_option($service['id'], "");
            if ($value !== '') {
                $customText .= "\t'" . $service['title'] . "' : '" . $value . "',\n";
            }
        }
        return $customText;
    }
}
