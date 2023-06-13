<?php
//ecentura.COM Theme Option
define('EC_GE_FIELDS_GROUP', 'EC_ge_pfs-fields-group');

//1. Tạo trang cấu hình Theme Option
add_action("admin_menu", 'ecentura_create_theme_option_page');
function ecentura_create_theme_option_page()
{
    $page_title = 'EC Calculator';
    $menu_title = $page_title;
    $capability = 'manage_options'; // Phân Quyền, ai có quyền sử dụng trang này
    $menu_slug = 'ecentura-theme-options';
    $function_callback = 'ecentura_the_content_option_fields';
    $icon_url = '';
    $position = 2;
    add_menu_page($page_title, $menu_title, $capability, $menu_slug, $function_callback, $icon_url, $position);
}

function ecentura_the_content_option_fields()
{
?>
    <div id="poststuff" class="w366-options-area">
        <div class="postbox-container">
            <div class="meta-box-sortables ui-sortable">
                <div class="postbox ">
                    <h2>Setup Plugin EC Calculator ecentura.com</h2>
                    <div class="wle-tab-content">
                        <!-- Form khai báo các Options tại đây -->
                        <form method="post" action="options.php">
                            <?php settings_fields(EC_GE_FIELDS_GROUP); ?>
                            <?php do_settings_sections(EC_GE_FIELDS_GROUP); ?>

                            <!--Khai báo các fields tại đây: xem hàm 'ecentura_register_option_fields' bên dưới-->
                            <div class="ecentura-option-fields">
                                <table class="form-table">
                                    <tr>
                                        <td class="text-center"></td>
                                        <td class="text-center">A</td>
                                        <td class="text-center">B</td>
                                        <td class="text-center">C</td>
                                        <td class="text-center">D</td>
                                        <td class="text-center">E</td>
                                        <td class="text-center">F</td>
                                        <td class="text-center">G</td>
                                        <td class="text-center">H</td>
                                        <td class="text-center">I</td>
                                        <td class="text-center">K</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>
                                            <?php $ecentura_a1 = get_option('ecentura_a1'); ?>
                                            <input class="w-full" placeholder="A1" type="text" id="<?php echo esc_html('ecentura_a1'); ?>" name="<?php echo esc_html('ecentura_a1'); ?>" value="<?php echo esc_attr($ecentura_a1); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_b1 = get_option('ecentura_b1'); ?>
                                            <input class="w-full" placeholder="B1" type="text" id="<?php echo esc_html('ecentura_b1'); ?>" name="<?php echo esc_html('ecentura_b1'); ?>" value="<?php echo esc_attr($ecentura_b1); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_c1 = get_option('ecentura_c1'); ?>
                                            <input class="w-full" placeholder="C1" type="text" id="<?php echo esc_html('ecentura_c1'); ?>" name="<?php echo esc_html('ecentura_c1'); ?>" value="<?php echo esc_attr($ecentura_c1); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_d1 = get_option('ecentura_d1'); ?>
                                            <input class="w-full" placeholder="D1" type="text" id="<?php echo esc_html('ecentura_D1'); ?>" name="<?php echo esc_html('ecentura_d1'); ?>" value="<?php echo esc_attr($ecentura_d1); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_e1 = get_option('ecentura_e1'); ?>
                                            <input class="w-full" placeholder="E1" type="text" id="<?php echo esc_html('ecentura_e1'); ?>" name="<?php echo esc_html('ecentura_e1'); ?>" value="<?php echo esc_attr($ecentura_e1); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_f1 = get_option('ecentura_f1'); ?>
                                            <input class="w-full" placeholder="F1" type="text" id="<?php echo esc_html('ecentura_f1'); ?>" name="<?php echo esc_html('ecentura_f1'); ?>" value="<?php echo esc_attr($ecentura_f1); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_g1 = get_option('ecentura_g1'); ?>
                                            <input class="w-full" placeholder="G1" type="text" id="<?php echo esc_html('ecentura_g1'); ?>" name="<?php echo esc_html('ecentura_g1'); ?>" value="<?php echo esc_attr($ecentura_g1); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_h1 = get_option('ecentura_h1'); ?>
                                            <input class="w-full" placeholder="H1" type="text" id="<?php echo esc_html('ecentura_h1'); ?>" name="<?php echo esc_html('ecentura_h1'); ?>" value="<?php echo esc_attr($ecentura_h1); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_i1 = get_option('ecentura_i1'); ?>
                                            <input class="w-full" placeholder="I1" type="text" id="<?php echo esc_html('ecentura_i1'); ?>" name="<?php echo esc_html('ecentura_i1'); ?>" value="<?php echo esc_attr($ecentura_i1); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_k1 = get_option('ecentura_k1'); ?>
                                            <input class="w-full" placeholder="K1" type="text" id="<?php echo esc_html('ecentura_k1'); ?>" name="<?php echo esc_html('ecentura_k1'); ?>" value="<?php echo esc_attr($ecentura_k1); ?>" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>
                                            <?php $ecentura_a2 = get_option('ecentura_a2'); ?>
                                            <input class="w-full" placeholder="A2" type="text" id="<?php echo esc_html('ecentura_a2'); ?>" name="<?php echo esc_html('ecentura_a2'); ?>" value="<?php echo esc_attr($ecentura_a2); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_b2 = get_option('ecentura_b2'); ?>
                                            <input class="w-full" placeholder="B2" type="text" id="<?php echo esc_html('ecentura_b2'); ?>" name="<?php echo esc_html('ecentura_b2'); ?>" value="<?php echo esc_attr($ecentura_b2); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_c2 = get_option('ecentura_c2'); ?>
                                            <input class="w-full" placeholder="C2" type="text" id="<?php echo esc_html('ecentura_c2'); ?>" name="<?php echo esc_html('ecentura_c2'); ?>" value="<?php echo esc_attr($ecentura_c2); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_d2 = get_option('ecentura_d2'); ?>
                                            <input class="w-full" placeholder="D2" type="text" id="<?php echo esc_html('ecentura_D2'); ?>" name="<?php echo esc_html('ecentura_d2'); ?>" value="<?php echo esc_attr($ecentura_d2); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_e2 = get_option('ecentura_e2'); ?>
                                            <input class="w-full" placeholder="E2" type="text" id="<?php echo esc_html('ecentura_e2'); ?>" name="<?php echo esc_html('ecentura_e2'); ?>" value="<?php echo esc_attr($ecentura_e2); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_f2 = get_option('ecentura_f2'); ?>
                                            <input class="w-full" placeholder="F2" type="text" id="<?php echo esc_html('ecentura_f2'); ?>" name="<?php echo esc_html('ecentura_f2'); ?>" value="<?php echo esc_attr($ecentura_f2); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_g2 = get_option('ecentura_g2'); ?>
                                            <input class="w-full" placeholder="G2" type="text" id="<?php echo esc_html('ecentura_g2'); ?>" name="<?php echo esc_html('ecentura_g2'); ?>" value="<?php echo esc_attr($ecentura_g2); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_h2 = get_option('ecentura_h2'); ?>
                                            <input class="w-full" placeholder="H2" type="text" id="<?php echo esc_html('ecentura_h2'); ?>" name="<?php echo esc_html('ecentura_h2'); ?>" value="<?php echo esc_attr($ecentura_h2); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_i2 = get_option('ecentura_i2'); ?>
                                            <input class="w-full" placeholder="I2" type="text" id="<?php echo esc_html('ecentura_i2'); ?>" name="<?php echo esc_html('ecentura_i2'); ?>" value="<?php echo esc_attr($ecentura_i2); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_k2 = get_option('ecentura_k2'); ?>
                                            <input class="w-full" placeholder="K2" type="text" id="<?php echo esc_html('ecentura_k2'); ?>" name="<?php echo esc_html('ecentura_k2'); ?>" value="<?php echo esc_attr($ecentura_k2); ?>" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td>
                                            <?php $ecentura_a3 = get_option('ecentura_a3'); ?>
                                            <input class="w-full" placeholder="A3" type="text" id="<?php echo esc_html('ecentura_a3'); ?>" name="<?php echo esc_html('ecentura_a3'); ?>" value="<?php echo esc_attr($ecentura_a3); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_b3 = get_option('ecentura_b3'); ?>
                                            <input class="w-full" placeholder="B3" type="text" id="<?php echo esc_html('ecentura_b3'); ?>" name="<?php echo esc_html('ecentura_b3'); ?>" value="<?php echo esc_attr($ecentura_b3); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_c3 = get_option('ecentura_c3'); ?>
                                            <input class="w-full" placeholder="C3" type="text" id="<?php echo esc_html('ecentura_c3'); ?>" name="<?php echo esc_html('ecentura_c3'); ?>" value="<?php echo esc_attr($ecentura_c3); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_d3 = get_option('ecentura_d3'); ?>
                                            <input class="w-full" placeholder="D3" type="text" id="<?php echo esc_html('ecentura_D3'); ?>" name="<?php echo esc_html('ecentura_d3'); ?>" value="<?php echo esc_attr($ecentura_d3); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_e3 = get_option('ecentura_e3'); ?>
                                            <input class="w-full" placeholder="E3" type="text" id="<?php echo esc_html('ecentura_e3'); ?>" name="<?php echo esc_html('ecentura_e3'); ?>" value="<?php echo esc_attr($ecentura_e3); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_f3 = get_option('ecentura_f3'); ?>
                                            <input class="w-full" placeholder="F3" type="text" id="<?php echo esc_html('ecentura_f3'); ?>" name="<?php echo esc_html('ecentura_f3'); ?>" value="<?php echo esc_attr($ecentura_f3); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_g3 = get_option('ecentura_g3'); ?>
                                            <input class="w-full" placeholder="G3" type="text" id="<?php echo esc_html('ecentura_g3'); ?>" name="<?php echo esc_html('ecentura_g3'); ?>" value="<?php echo esc_attr($ecentura_g3); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_h3 = get_option('ecentura_h3'); ?>
                                            <input class="w-full" placeholder="H3" type="text" id="<?php echo esc_html('ecentura_h3'); ?>" name="<?php echo esc_html('ecentura_h3'); ?>" value="<?php echo esc_attr($ecentura_h3); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_i3 = get_option('ecentura_i3'); ?>
                                            <input class="w-full" placeholder="I3" type="text" id="<?php echo esc_html('ecentura_i3'); ?>" name="<?php echo esc_html('ecentura_i3'); ?>" value="<?php echo esc_attr($ecentura_i3); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_k3 = get_option('ecentura_k3'); ?>
                                            <input class="w-full" placeholder="K3" type="text" id="<?php echo esc_html('ecentura_k3'); ?>" name="<?php echo esc_html('ecentura_k3'); ?>" value="<?php echo esc_attr($ecentura_k3); ?>" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td>
                                            <?php $ecentura_a4 = get_option('ecentura_a4'); ?>
                                            <input class="w-full" placeholder="A4" type="text" id="<?php echo esc_html('ecentura_a4'); ?>" name="<?php echo esc_html('ecentura_a4'); ?>" value="<?php echo esc_attr($ecentura_a4); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_b4 = get_option('ecentura_b4'); ?>
                                            <input class="w-full" placeholder="B4" type="text" id="<?php echo esc_html('ecentura_b4'); ?>" name="<?php echo esc_html('ecentura_b4'); ?>" value="<?php echo esc_attr($ecentura_b4); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_c4 = get_option('ecentura_c4'); ?>
                                            <input class="w-full" placeholder="C4" type="text" id="<?php echo esc_html('ecentura_c4'); ?>" name="<?php echo esc_html('ecentura_c4'); ?>" value="<?php echo esc_attr($ecentura_c4); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_d4 = get_option('ecentura_d4'); ?>
                                            <input class="w-full" placeholder="D4" type="text" id="<?php echo esc_html('ecentura_D4'); ?>" name="<?php echo esc_html('ecentura_d4'); ?>" value="<?php echo esc_attr($ecentura_d4); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_e4 = get_option('ecentura_e4'); ?>
                                            <input class="w-full" placeholder="E4" type="text" id="<?php echo esc_html('ecentura_e4'); ?>" name="<?php echo esc_html('ecentura_e4'); ?>" value="<?php echo esc_attr($ecentura_e4); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_f4 = get_option('ecentura_f4'); ?>
                                            <input class="w-full" placeholder="F4" type="text" id="<?php echo esc_html('ecentura_f4'); ?>" name="<?php echo esc_html('ecentura_f4'); ?>" value="<?php echo esc_attr($ecentura_f4); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_g4 = get_option('ecentura_g4'); ?>
                                            <input class="w-full" placeholder="G4" type="text" id="<?php echo esc_html('ecentura_g4'); ?>" name="<?php echo esc_html('ecentura_g4'); ?>" value="<?php echo esc_attr($ecentura_g4); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_h4 = get_option('ecentura_h4'); ?>
                                            <input class="w-full" placeholder="H4" type="text" id="<?php echo esc_html('ecentura_h4'); ?>" name="<?php echo esc_html('ecentura_h4'); ?>" value="<?php echo esc_attr($ecentura_h4); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_i4 = get_option('ecentura_i4'); ?>
                                            <input class="w-full" placeholder="I4" type="text" id="<?php echo esc_html('ecentura_i4'); ?>" name="<?php echo esc_html('ecentura_i4'); ?>" value="<?php echo esc_attr($ecentura_i4); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_k4 = get_option('ecentura_k4'); ?>
                                            <input class="w-full" placeholder="K4" type="text" id="<?php echo esc_html('ecentura_k4'); ?>" name="<?php echo esc_html('ecentura_k4'); ?>" value="<?php echo esc_attr($ecentura_k4); ?>" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">5</td>
                                        <td>
                                            <?php $ecentura_a5 = get_option('ecentura_a5'); ?>
                                            <input class="w-full" placeholder="A5" type="text" id="<?php echo esc_html('ecentura_a5'); ?>" name="<?php echo esc_html('ecentura_a5'); ?>" value="<?php echo esc_attr($ecentura_a5); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_b5 = get_option('ecentura_b5'); ?>
                                            <input class="w-full" placeholder="B5" type="text" id="<?php echo esc_html('ecentura_b5'); ?>" name="<?php echo esc_html('ecentura_b5'); ?>" value="<?php echo esc_attr($ecentura_b5); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_c5 = get_option('ecentura_c5'); ?>
                                            <input class="w-full" placeholder="C5" type="text" id="<?php echo esc_html('ecentura_c5'); ?>" name="<?php echo esc_html('ecentura_c5'); ?>" value="<?php echo esc_attr($ecentura_c5); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_d5 = get_option('ecentura_d5'); ?>
                                            <input class="w-full" placeholder="D5" type="text" id="<?php echo esc_html('ecentura_D5'); ?>" name="<?php echo esc_html('ecentura_d5'); ?>" value="<?php echo esc_attr($ecentura_d5); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_e5 = get_option('ecentura_e5'); ?>
                                            <input class="w-full" placeholder="E5" type="text" id="<?php echo esc_html('ecentura_e5'); ?>" name="<?php echo esc_html('ecentura_e5'); ?>" value="<?php echo esc_attr($ecentura_e5); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_f5 = get_option('ecentura_f5'); ?>
                                            <input class="w-full" placeholder="F5" type="text" id="<?php echo esc_html('ecentura_f5'); ?>" name="<?php echo esc_html('ecentura_f5'); ?>" value="<?php echo esc_attr($ecentura_f5); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_g5 = get_option('ecentura_g5'); ?>
                                            <input class="w-full" placeholder="G5" type="text" id="<?php echo esc_html('ecentura_g5'); ?>" name="<?php echo esc_html('ecentura_g5'); ?>" value="<?php echo esc_attr($ecentura_g5); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_h5 = get_option('ecentura_h5'); ?>
                                            <input class="w-full" placeholder="H5" type="text" id="<?php echo esc_html('ecentura_h5'); ?>" name="<?php echo esc_html('ecentura_h5'); ?>" value="<?php echo esc_attr($ecentura_h5); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_i5 = get_option('ecentura_i5'); ?>
                                            <input class="w-full" placeholder="I5" type="text" id="<?php echo esc_html('ecentura_i5'); ?>" name="<?php echo esc_html('ecentura_i5'); ?>" value="<?php echo esc_attr($ecentura_i5); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_k5 = get_option('ecentura_k5'); ?>
                                            <input class="w-full" placeholder="K5" type="text" id="<?php echo esc_html('ecentura_k5'); ?>" name="<?php echo esc_html('ecentura_k5'); ?>" value="<?php echo esc_attr($ecentura_k5); ?>" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">6</td>
                                        <td>
                                            <?php $ecentura_a6 = get_option('ecentura_a6'); ?>
                                            <input class="w-full" placeholder="A6" type="text" id="<?php echo esc_html('ecentura_a6'); ?>" name="<?php echo esc_html('ecentura_a6'); ?>" value="<?php echo esc_attr($ecentura_a6); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_b6 = get_option('ecentura_b6'); ?>
                                            <input class="w-full" placeholder="B6" type="text" id="<?php echo esc_html('ecentura_b6'); ?>" name="<?php echo esc_html('ecentura_b6'); ?>" value="<?php echo esc_attr($ecentura_b6); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_c6 = get_option('ecentura_c6'); ?>
                                            <input class="w-full" placeholder="C6" type="text" id="<?php echo esc_html('ecentura_c6'); ?>" name="<?php echo esc_html('ecentura_c6'); ?>" value="<?php echo esc_attr($ecentura_c6); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_d6 = get_option('ecentura_d6'); ?>
                                            <input class="w-full" placeholder="D6" type="text" id="<?php echo esc_html('ecentura_D6'); ?>" name="<?php echo esc_html('ecentura_d6'); ?>" value="<?php echo esc_attr($ecentura_d6); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_e6 = get_option('ecentura_e6'); ?>
                                            <input class="w-full" placeholder="E6" type="text" id="<?php echo esc_html('ecentura_e6'); ?>" name="<?php echo esc_html('ecentura_e6'); ?>" value="<?php echo esc_attr($ecentura_e6); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_f6 = get_option('ecentura_f6'); ?>
                                            <input class="w-full" placeholder="F6" type="text" id="<?php echo esc_html('ecentura_f6'); ?>" name="<?php echo esc_html('ecentura_f6'); ?>" value="<?php echo esc_attr($ecentura_f6); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_g6 = get_option('ecentura_g6'); ?>
                                            <input class="w-full" placeholder="G6" type="text" id="<?php echo esc_html('ecentura_g6'); ?>" name="<?php echo esc_html('ecentura_g6'); ?>" value="<?php echo esc_attr($ecentura_g6); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_h6 = get_option('ecentura_h6'); ?>
                                            <input class="w-full" placeholder="H6" type="text" id="<?php echo esc_html('ecentura_h6'); ?>" name="<?php echo esc_html('ecentura_h6'); ?>" value="<?php echo esc_attr($ecentura_h6); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_i6 = get_option('ecentura_i6'); ?>
                                            <input class="w-full" placeholder="I6" type="text" id="<?php echo esc_html('ecentura_i6'); ?>" name="<?php echo esc_html('ecentura_i6'); ?>" value="<?php echo esc_attr($ecentura_i6); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_k6 = get_option('ecentura_k6'); ?>
                                            <input class="w-full" placeholder="K6" type="text" id="<?php echo esc_html('ecentura_k6'); ?>" name="<?php echo esc_html('ecentura_k6'); ?>" value="<?php echo esc_attr($ecentura_k6); ?>" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">7</td>
                                        <td>
                                            <?php $ecentura_a7 = get_option('ecentura_a7'); ?>
                                            <input class="w-full" placeholder="A7" type="text" id="<?php echo esc_html('ecentura_a7'); ?>" name="<?php echo esc_html('ecentura_a7'); ?>" value="<?php echo esc_attr($ecentura_a7); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_b7 = get_option('ecentura_b7'); ?>
                                            <input class="w-full" placeholder="B7" type="text" id="<?php echo esc_html('ecentura_b7'); ?>" name="<?php echo esc_html('ecentura_b7'); ?>" value="<?php echo esc_attr($ecentura_b7); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_c7 = get_option('ecentura_c7'); ?>
                                            <input class="w-full" placeholder="C7" type="text" id="<?php echo esc_html('ecentura_c7'); ?>" name="<?php echo esc_html('ecentura_c7'); ?>" value="<?php echo esc_attr($ecentura_c7); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_d7 = get_option('ecentura_d7'); ?>
                                            <input class="w-full" placeholder="D7" type="text" id="<?php echo esc_html('ecentura_D7'); ?>" name="<?php echo esc_html('ecentura_d7'); ?>" value="<?php echo esc_attr($ecentura_d7); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_e7 = get_option('ecentura_e7'); ?>
                                            <input class="w-full" placeholder="E7" type="text" id="<?php echo esc_html('ecentura_e7'); ?>" name="<?php echo esc_html('ecentura_e7'); ?>" value="<?php echo esc_attr($ecentura_e7); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_f7 = get_option('ecentura_f7'); ?>
                                            <input class="w-full" placeholder="F7" type="text" id="<?php echo esc_html('ecentura_f7'); ?>" name="<?php echo esc_html('ecentura_f7'); ?>" value="<?php echo esc_attr($ecentura_f7); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_g7 = get_option('ecentura_g7'); ?>
                                            <input class="w-full" placeholder="G7" type="text" id="<?php echo esc_html('ecentura_g7'); ?>" name="<?php echo esc_html('ecentura_g7'); ?>" value="<?php echo esc_attr($ecentura_g7); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_h7 = get_option('ecentura_h7'); ?>
                                            <input class="w-full" placeholder="H7" type="text" id="<?php echo esc_html('ecentura_h7'); ?>" name="<?php echo esc_html('ecentura_h7'); ?>" value="<?php echo esc_attr($ecentura_h7); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_i7 = get_option('ecentura_i7'); ?>
                                            <input class="w-full" placeholder="I7" type="text" id="<?php echo esc_html('ecentura_i7'); ?>" name="<?php echo esc_html('ecentura_i7'); ?>" value="<?php echo esc_attr($ecentura_i7); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_k7 = get_option('ecentura_k7'); ?>
                                            <input class="w-full" placeholder="K7" type="text" id="<?php echo esc_html('ecentura_k7'); ?>" name="<?php echo esc_html('ecentura_k7'); ?>" value="<?php echo esc_attr($ecentura_k7); ?>" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">8</td>
                                        <td>
                                            <?php $ecentura_a8 = get_option('ecentura_a8'); ?>
                                            <input class="w-full" placeholder="A8" type="text" id="<?php echo esc_html('ecentura_a8'); ?>" name="<?php echo esc_html('ecentura_a8'); ?>" value="<?php echo esc_attr($ecentura_a8); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_b8 = get_option('ecentura_b8'); ?>
                                            <input class="w-full" placeholder="B8" type="text" id="<?php echo esc_html('ecentura_b8'); ?>" name="<?php echo esc_html('ecentura_b8'); ?>" value="<?php echo esc_attr($ecentura_b8); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_c8 = get_option('ecentura_c8'); ?>
                                            <input class="w-full" placeholder="C8" type="text" id="<?php echo esc_html('ecentura_c8'); ?>" name="<?php echo esc_html('ecentura_c8'); ?>" value="<?php echo esc_attr($ecentura_c8); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_d8 = get_option('ecentura_d8'); ?>
                                            <input class="w-full" placeholder="D8" type="text" id="<?php echo esc_html('ecentura_D8'); ?>" name="<?php echo esc_html('ecentura_d8'); ?>" value="<?php echo esc_attr($ecentura_d8); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_e8 = get_option('ecentura_e8'); ?>
                                            <input class="w-full" placeholder="E8" type="text" id="<?php echo esc_html('ecentura_e8'); ?>" name="<?php echo esc_html('ecentura_e8'); ?>" value="<?php echo esc_attr($ecentura_e8); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_f8 = get_option('ecentura_f8'); ?>
                                            <input class="w-full" placeholder="F8" type="text" id="<?php echo esc_html('ecentura_f8'); ?>" name="<?php echo esc_html('ecentura_f8'); ?>" value="<?php echo esc_attr($ecentura_f8); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_g8 = get_option('ecentura_g8'); ?>
                                            <input class="w-full" placeholder="G8" type="text" id="<?php echo esc_html('ecentura_g8'); ?>" name="<?php echo esc_html('ecentura_g8'); ?>" value="<?php echo esc_attr($ecentura_g8); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_h8 = get_option('ecentura_h8'); ?>
                                            <input class="w-full" placeholder="H8" type="text" id="<?php echo esc_html('ecentura_h8'); ?>" name="<?php echo esc_html('ecentura_h8'); ?>" value="<?php echo esc_attr($ecentura_h8); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_i8 = get_option('ecentura_i8'); ?>
                                            <input class="w-full" placeholder="I8" type="text" id="<?php echo esc_html('ecentura_i8'); ?>" name="<?php echo esc_html('ecentura_i8'); ?>" value="<?php echo esc_attr($ecentura_i8); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_k8 = get_option('ecentura_k8'); ?>
                                            <input class="w-full" placeholder="K8" type="text" id="<?php echo esc_html('ecentura_k8'); ?>" name="<?php echo esc_html('ecentura_k8'); ?>" value="<?php echo esc_attr($ecentura_k8); ?>" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">9</td>
                                        <td>
                                            <?php $ecentura_a9 = get_option('ecentura_a9'); ?>
                                            <input class="w-full" placeholder="A9" type="text" id="<?php echo esc_html('ecentura_a9'); ?>" name="<?php echo esc_html('ecentura_a9'); ?>" value="<?php echo esc_attr($ecentura_a9); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_b9 = get_option('ecentura_b9'); ?>
                                            <input class="w-full" placeholder="B9" type="text" id="<?php echo esc_html('ecentura_b9'); ?>" name="<?php echo esc_html('ecentura_b9'); ?>" value="<?php echo esc_attr($ecentura_b9); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_c9 = get_option('ecentura_c9'); ?>
                                            <input class="w-full" placeholder="C9" type="text" id="<?php echo esc_html('ecentura_c9'); ?>" name="<?php echo esc_html('ecentura_c9'); ?>" value="<?php echo esc_attr($ecentura_c9); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_d9 = get_option('ecentura_d9'); ?>
                                            <input class="w-full" placeholder="D9" type="text" id="<?php echo esc_html('ecentura_D9'); ?>" name="<?php echo esc_html('ecentura_d9'); ?>" value="<?php echo esc_attr($ecentura_d9); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_e9 = get_option('ecentura_e9'); ?>
                                            <input class="w-full" placeholder="E9" type="text" id="<?php echo esc_html('ecentura_e9'); ?>" name="<?php echo esc_html('ecentura_e9'); ?>" value="<?php echo esc_attr($ecentura_e9); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_f9 = get_option('ecentura_f9'); ?>
                                            <input class="w-full" placeholder="F9" type="text" id="<?php echo esc_html('ecentura_f9'); ?>" name="<?php echo esc_html('ecentura_f9'); ?>" value="<?php echo esc_attr($ecentura_f9); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_g9 = get_option('ecentura_g9'); ?>
                                            <input class="w-full" placeholder="G9" type="text" id="<?php echo esc_html('ecentura_g9'); ?>" name="<?php echo esc_html('ecentura_g9'); ?>" value="<?php echo esc_attr($ecentura_g9); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_h9 = get_option('ecentura_h9'); ?>
                                            <input class="w-full" placeholder="H9" type="text" id="<?php echo esc_html('ecentura_h9'); ?>" name="<?php echo esc_html('ecentura_h9'); ?>" value="<?php echo esc_attr($ecentura_h9); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_i9 = get_option('ecentura_i9'); ?>
                                            <input class="w-full" placeholder="I9" type="text" id="<?php echo esc_html('ecentura_i9'); ?>" name="<?php echo esc_html('ecentura_i9'); ?>" value="<?php echo esc_attr($ecentura_i9); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_k9 = get_option('ecentura_k9'); ?>
                                            <input class="w-full" placeholder="K9" type="text" id="<?php echo esc_html('ecentura_k9'); ?>" name="<?php echo esc_html('ecentura_k9'); ?>" value="<?php echo esc_attr($ecentura_k9); ?>" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">10</td>
                                        <td>
                                            <?php $ecentura_a10 = get_option('ecentura_a10'); ?>
                                            <input class="w-full" placeholder="A10" type="text" id="<?php echo esc_html('ecentura_a10'); ?>" name="<?php echo esc_html('ecentura_a10'); ?>" value="<?php echo esc_attr($ecentura_a10); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_b10 = get_option('ecentura_b10'); ?>
                                            <input class="w-full" placeholder="B10" type="text" id="<?php echo esc_html('ecentura_b10'); ?>" name="<?php echo esc_html('ecentura_b10'); ?>" value="<?php echo esc_attr($ecentura_b10); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_c10 = get_option('ecentura_c10'); ?>
                                            <input class="w-full" placeholder="C10" type="text" id="<?php echo esc_html('ecentura_c10'); ?>" name="<?php echo esc_html('ecentura_c10'); ?>" value="<?php echo esc_attr($ecentura_c10); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_d10 = get_option('ecentura_d10'); ?>
                                            <input class="w-full" placeholder="D10" type="text" id="<?php echo esc_html('ecentura_D10'); ?>" name="<?php echo esc_html('ecentura_d10'); ?>" value="<?php echo esc_attr($ecentura_d10); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_e10 = get_option('ecentura_e10'); ?>
                                            <input class="w-full" placeholder="E10" type="text" id="<?php echo esc_html('ecentura_e10'); ?>" name="<?php echo esc_html('ecentura_e10'); ?>" value="<?php echo esc_attr($ecentura_e10); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_f10 = get_option('ecentura_f10'); ?>
                                            <input class="w-full" placeholder="F10" type="text" id="<?php echo esc_html('ecentura_f10'); ?>" name="<?php echo esc_html('ecentura_f10'); ?>" value="<?php echo esc_attr($ecentura_f10); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_g10 = get_option('ecentura_g10'); ?>
                                            <input class="w-full" placeholder="G10" type="text" id="<?php echo esc_html('ecentura_g10'); ?>" name="<?php echo esc_html('ecentura_g10'); ?>" value="<?php echo esc_attr($ecentura_g10); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_h10 = get_option('ecentura_h10'); ?>
                                            <input class="w-full" placeholder="H10" type="text" id="<?php echo esc_html('ecentura_h10'); ?>" name="<?php echo esc_html('ecentura_h10'); ?>" value="<?php echo esc_attr($ecentura_h10); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_i10 = get_option('ecentura_i10'); ?>
                                            <input class="w-full" placeholder="I10" type="text" id="<?php echo esc_html('ecentura_i10'); ?>" name="<?php echo esc_html('ecentura_i10'); ?>" value="<?php echo esc_attr($ecentura_i10); ?>" />
                                        </td>
                                        <td>
                                            <?php $ecentura_k10 = get_option('ecentura_k10'); ?>
                                            <input class="w-full" placeholder="K10" type="text" id="<?php echo esc_html('ecentura_k10'); ?>" name="<?php echo esc_html('ecentura_k10'); ?>" value="<?php echo esc_attr($ecentura_k10); ?>" />
                                        </td>
                                    </tr>

                                    <!-- Khai báo thêm các trường tiếp theo tại đây 'ecentura_ten_field_moi_cua_ban' -->

                                    <tr>
                                        <td colspan="2"><?php submit_button(); ?></td>
                                    </tr>
                                </table>
                            </div>


                        </form>
                    </div>
                    <div style="clear:both;"></div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .w-full {
            width: 100%;
        }

        .text-center {
            text-align: center;
        }
    </style>
<?php
}

//2. Đăng ký các field cho Theme Option
add_action('admin_init', 'ecentura_register_option_fields');
function ecentura_register_option_fields()
{
    //Khai báo các trường dữ liệu cho theme option tại đây
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_a1');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_b1');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_c1');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_d1');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_e1');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_f1');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_g1');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_h1');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_i1');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_k1');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_a2');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_b2');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_c2');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_d2');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_e2');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_f2');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_g2');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_h2');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_i2');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_k2');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_a3');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_b3');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_c3');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_d3');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_e3');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_f3');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_g3');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_h3');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_i3');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_k3');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_a4');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_b4');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_c4');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_d4');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_e4');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_f4');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_g4');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_h4');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_i4');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_k4');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_a5');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_b5');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_c5');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_d5');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_e5');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_f5');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_g5');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_h5');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_i5');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_k5');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_a6');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_b6');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_c6');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_d6');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_e6');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_f6');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_g6');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_h6');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_i6');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_k6');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_a7');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_b7');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_c7');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_d7');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_e7');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_f7');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_g7');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_h7');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_i7');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_k7');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_a8');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_b8');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_c8');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_d8');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_e8');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_f8');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_g8');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_h8');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_i8');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_k8');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_a9');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_b9');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_c9');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_d9');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_e9');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_f9');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_g9');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_h9');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_i9');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_k9');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_a10');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_b10');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_c10');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_d10');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_e10');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_f10');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_g10');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_h10');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_i10');
    register_setting(EC_GE_FIELDS_GROUP, 'ecentura_k10');
}
