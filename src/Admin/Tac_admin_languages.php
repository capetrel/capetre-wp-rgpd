<?php

class Tac_admin_languages
{

    public static function registerLanguages()
    {
        register_setting('tac_admin_language_settings', 'tac_lang_content');
        add_settings_section("tac_admin_lang_section", __('Textes personnalisé par région', 'capetrel-wp-rgpd'), ["Tac_admin_languages", "section_html"], 'tac_admin_language_settings');

        foreach (TacAdmin::$customText as $key1 => $service) {
            register_setting('tac_admin_language_settings', $service['id']);

            $args = ['id' => $service['id'], 'value' => $service['value'], "placeholder" => $service['placeholder']];

            $function = $service['function'] == '' ? 'languages_content_textarea_html' : $service['function'];

            add_settings_field($service['id'], $service['title'], ["Tac_admin_languages", $function], 'tac_admin_language_settings', "tac_admin_lang_section", $args);
        }

        # Other settings that needs to be set before the initialisation
        add_settings_field('tac_lang_content', __('Textes de service(s)', 'capetrel-wp-rgpd'), ['Tac_admin_languages', 'languages_content_html'], 'tac_admin_language_settings', 'tac_admin_lang_section');
    }

    public static function section_html()
    {
        echo __('Ensembles des textes du module (hors service)', 'capetrel-wp-rgpd');
        ?>
            <p>La préview est en anglais mais le texte du module sera dans la langue du navigateur. Par contre si vous remplacer un des textes il ne sera pas traduit</p>
        <?php
    }

    public static function languages_content_textarea_html($args)
    {
        ?>
        <div class="row">
            <div class="col-md-9">
                 <textarea name="<?php echo $args['id'] ?>" rows="4" cols="100" placeholder="e.g. : <?php echo $args["placeholder"] ?>"><?php echo get_option($args['id'], $args['value']) ?></textarea>
            </div>

        </div>
        <?php
    }

    public static function languages_content_html()
    {
        ?>
        <div class="row">
            <div class="col-md-9">
                 <textarea name="tac_lang_content" rows="20" cols="100"><?php echo get_option('tac_lang_content') ?></textarea>
                <p><?php echo __('Par exemple pour modifier la valeur du "adblock"', 'capetrel-wp-rgpd') ?></p>
                <p><?php echo __('{"adblock": "Ceci est un message personnalisé"}', 'capetrel-wp-rgpd') ?></p>
            </div>
        </div>
        <?php
    }

    public static function tac_menu_languages()
    {
        ?>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4"><?php echo __("Textes de la fenêtre", 'capetrel-wp-rgpd') ?></h1>
            </div>
        </div>

        <form method="post" action="options.php">

            <?php submit_button("Save"); ?>
            <!-- generation automatique des champs pour les options tac_admin_settings -->
            <?php settings_fields('tac_admin_language_settings') ?>

            <?php do_settings_sections('tac_admin_language_settings') ?>

            <?php submit_button("Save"); ?>
        </form>
        <?php


    }
}
