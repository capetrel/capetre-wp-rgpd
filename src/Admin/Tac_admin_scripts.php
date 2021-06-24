<?php

class Tac_admin_scripts
{
    public static function registerSettings()
    {
        # header script settings
        register_setting('tac_admin_script_settings', 'tac_header_script_content');

        add_settings_section('tac_admin_script_section', __('Paramètres du plugins RGPD', 'capetrel-wp-rgpd'), ['Tac_admin_scripts', 'section_html'], 'tac_admin_script_settings');

        foreach (TacAdmin::$init as $key1 => $service) {
            register_setting('tac_admin_script_settings', $service['id']);

            $args = [
                    'id' => $service['id'],
                    'value' => $service['value'],
                    "comment" => $service['comment']
            ];

            switch ($service['type']) {
                case "text":
                    $function = "script_html";
                    break;
                case "boolean":
                case "options":
                    $args["options"] = $service['options'];
                    $function = "script_options_html";
                    break;
                case "integer":
                    $function = "script_integer_html";
                    break;
                default:
                    $function = "script_html";
            }

            add_settings_field($service['id'], $service['title'], [$service['class'], $function], 'tac_admin_script_settings', "tac_admin_script_section", $args);
        }

        # Other settings that needs to be set before the initialisation
        add_settings_field('tac_header_script_content', 'Header script content', ['Tac_admin_scripts', 'header_content_html'], 'tac_admin_script_settings', 'tac_admin_script_section');
    }

    public static function section_html()
    {
        echo __("Renseignez le contenu des scripts d'initialisation du plugin RGPD.", 'capetrel-wp-rgpd');
    }

    public static function header_content_html()
    {
        ?>
        <div class="row">
            <div class="col-md-7">
                 <textarea name="tac_header_script_content" rows="15" cols="100"><?php echo get_option('tac_header_script_content') ?></textarea>
                <p><?php echo __("Tous les autres paramètres qui doivent être définis avant l'initialisation de tarteaucitron.js", 'capetrel-wp-rgpd') ?></p>
                <p><?php echo __("Si un paramètre n'est pas dans les options ci-dessus mais est déjà présent dans le script tarteaucitron.js, vous pouvez mettre le code ici. (Uniquement pour le script d'initialisation).", 'capetrel-wp-rgpd') ?></p>
            </div>
        </div>
        <?php
    }

    public static function script_options_html($args)
    {
        ?>
        <div class="row">
            <div class="col-md-3">
                <select name="<?php echo $args['id'] ?>">
                    <?php
                    foreach ($args['options'] as $opt) {
                        ?>
                        <option value="<?php echo $opt ?>" <?php selected(get_option($args['id'], ''), $opt); ?>> <?php echo $opt?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-9">
                <p><?php echo $args['comment'];?></p>
            </div>
        </div>

        <?php
    }

    public static function script_integer_html($args)
    {
        ?>
        <div class="row">
            <div class="col-md-3">
                <input name="<?php echo $args['id'] ?>" type="number" value="<?php echo get_option($args['id'], $args['value']) ?>"/>
            </div>
            <div class="col-md-9">
                <p><?php echo $args['comment'];?></p>
            </div>
        </div>

        <?php
    }

    public static function script_html($args)
    {
        ?>
        <div class="row">
            <div class="col-md-3">
                <input name="<?php echo $args['id'] ?>" type="text" value="<?php echo get_option($args['id'], $args['value']) ?>"/>

            </div>
            <div class="col-md-9">
                <p><?php echo $args['comment'];?></p>
            </div>
        </div>
        <?php
    }


    public static function tac_menu_script()
    {
	    ?>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4"><?php echo __("Configuration du plugin", 'capetrel-wp-rgpd') ?></h1>
            </div>
        </div>

        <form method="post" action="options.php">

            <!-- generation automatique des champs pour les options tac_admin_settings -->
            <?php settings_fields('tac_admin_analytic_settings') ?>

            <?php do_settings_sections('tac_admin_analytic_settings') ?>

            <?php submit_button("Save"); ?>
            <hr>

            <?php settings_fields('tac_admin_script_settings') ?>

            <?php do_settings_sections('tac_admin_script_settings') ?>

            <?php submit_button("Save"); ?>
        </form>
        <?php
    }
}
