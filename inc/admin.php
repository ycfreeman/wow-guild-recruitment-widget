<?php
/**
 * WOW Recruitment Widget Admin Page
 */
add_action('admin_init', 'wow_recruit_options_init');
add_action('admin_menu', 'wow_recruit_options_add_page');

// Init plugin options to white list our options
function wow_recruit_options_init()
{
    register_setting('wow_recruit_options_options', 'wow_recruit', 'wow_recruit_options_validate');
}

// Add menu page
function wow_recruit_options_add_page()
{
    add_options_page('WOW Recruit Widget Options', 'WOW Recruit Widget', 'manage_options', 'wow_recruit_options', 'wow_recruit_options_do_page');
}

// Draw the menu page itself
function wow_recruit_options_do_page()
{
    ?>
    <div class="wrap">
        <div id="icon-options-general" class="icon32">
            <br>
        </div>
        <h2>
            WOW Recruit Widget Options
        </h2>

        <p><a href="<?php echo WR_HELP_URL; ?>"
              target="_blank">
                <img style="vertical-align: middle;"
                     src="<?php echo WR_INFO_ICON_URL; ?>"
                     alt="view more info"/>Plugin Documentations</a>
            <a href="<?php echo WR_BUG_URL; ?>" target="_blank">
                <img style="vertical-align: middle;"
                     src="<?php echo WR_BUG_ICON_URL; ?>"
                     alt="report bugs"/>Report Bugs</a></p>

        <form method="post" action="options.php">
            <?php settings_fields('wow_recruit_options_options'); ?>
            <?php $options = get_option('wow_recruit'); ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Use Custom Style Sheet</th>
                    <td><input name="wow_recruit[custom_style]" type="checkbox"
                               value="1" <?php checked('1', $options['custom_style']); ?> /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Theme</th>
                    <td><?php
                        /**
                         * simple theme support
                         * @since 1.4.1
                         */
                        $themes = array(
                            "Plugin Default (36px)" => "",
                            "Small Icons (25px)" => "small",
                            "Huge Icons (56px)" => "large"
                        );
                        ?> <select name="wow_recruit[theme]">
                            <?php
                            foreach ($themes as $option => $value) {
                                ?>
                                <option value="<?php echo $value ?>"
                                    <?php echo ($options['theme'] == $value) ? 'selected="selected"' : '' ?>>
                                    <?php echo $option; ?>
                                </option>
                                <?php
                            }
                            ?>
                        </select>

                </tr>
                <tr valign="top">
                    <td style="padding:0;"><h3>Status Texts</h3></td>
                </tr>
                <tr valign="top">
                    <th scope="row">High</th>
                    <td><input type="text" name="wow_recruit[status3]"
                               value="<?php echo $options['status3']; ?>"/></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Medium</th>
                    <td><input type="text" name="wow_recruit[status2]"
                               value="<?php echo $options['status2']; ?>"/></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Low</th>
                    <td><input type="text" name="wow_recruit[status1]"
                               value="<?php echo $options['status1']; ?>"/></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Closed ( Show in Widget? <input
                            name="wow_recruit[display_closed]" type="checkbox" value="1"
                            <?php checked('1', $options['display_closed']); ?> />)
                    </th>
                    <td><input type="text" name="wow_recruit[status0]"
                               value="<?php echo $options['status0']; ?>"/></td>
                </tr>
                <tr valign="top">
                    <td>&nbsp;</td>
                </tr>
                <tr valign="top">
                    <td style="padding:0;"><h3>Class Texts</h3></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Death Knight</th>
                    <td><input type="text" name="wow_recruit[class0]"
                               value="<?php echo $options['class0']; ?>"/></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Druid</th>
                    <td><input type="text" name="wow_recruit[class1]"
                               value="<?php echo $options['class1']; ?>"/></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Paladin</th>
                    <td><input type="text" name="wow_recruit[class2]"
                               value="<?php echo $options['class2']; ?>"/></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Hunter</th>
                    <td><input type="text" name="wow_recruit[class3]"
                               value="<?php echo $options['class3']; ?>"/></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Rogue</th>
                    <td><input type="text" name="wow_recruit[class4]"
                               value="<?php echo $options['class4']; ?>"/></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Priest</th>
                    <td><input type="text" name="wow_recruit[class5]"
                               value="<?php echo $options['class5']; ?>"/></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Shaman</th>
                    <td><input type="text" name="wow_recruit[class6]"
                               value="<?php echo $options['class6']; ?>"/></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Mage</th>
                    <td><input type="text" name="wow_recruit[class7]"
                               value="<?php echo $options['class7']; ?>"/></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Warlock</th>
                    <td><input type="text" name="wow_recruit[class8]"
                               value="<?php echo $options['class8']; ?>"/></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Warrior</th>
                    <td><input type="text" name="wow_recruit[class9]"
                               value="<?php echo $options['class9']; ?>"/></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Monk</th>
                    <td><input type="text" name="wow_recruit[class10]"
                               value="<?php echo $options['class10']; ?>"/></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Demon Hunter</th>
                    <td><input type="text" name="wow_recruit[class11]"
                               value="<?php echo $options['class11']; ?>"/></td>
                </tr>
            </table>
            <p class="submit">
                <input type="submit" class="button-primary"
                       value="<?php _e('Save Changes') ?>"/>
            </p>
        </form>
    </div>
    <?php
}

// Sanitize and validate input. Accepts an array, return a sanitized array.
function wow_recruit_options_validate($input)
{

    foreach ($input as $k => $v) {
        $input[$k] = wp_filter_nohtml_kses($v);
    }
    $input['custom_style'] = ($input['custom_style'] == 1 ? 1 : 0);
    $input['display_closed'] = ($input['display_closed'] == 1 ? 1 : 0);

    return $input;
}
