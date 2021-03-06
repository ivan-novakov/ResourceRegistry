<div class="sticky">
    <nav class="top-bar docs-bar" data-topbar data-options="sticky_on: large">
        <?php
        ?>
        <ul class="title-area">
            <li class="menu">
                <?php
                echo '<a href="' . $base_url . '"><img src="' . $base_url . 'images/' . $this->config->item('site_logo') . '" alt="Logo" style="max-height: 40px; background-color: white; margin-top: 2px"/></a>';
                ?>

            </li>
            <li class="divider"></li>
            <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
        </ul>
        <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">
                <?php
                if ($loggedin)
                {
                    echo '<li><a href="'.$base_url.'reports/awaiting"><sup id="qcounter" class="label alert tiny round" style="box-shadow: 0px 1px 5px #0a0a0a, inset 0px 1px 2px #bdbdbd;"></sup></a></li>';
                    
                    ?>
                    <li class="has-dropdown">
                        <a href="#"><?php echo htmlentities($user); ?></a>
                        <ul class="dropdown">
                            <li><a href="<?php echo $base_url . 'manage/users/show/' . base64url_encode($user) . ''; ?>"><?php echo lang('myprofile'); ?></a></li>
                            <li><a href="<?php echo $base_url . 'notifications/subscriber/mysubscriptions/' . base64url_encode($user) . ''; ?>"><?php echo lang('rrmynotifications'); ?></a></li>
                        </ul>
                    </li>
                    <?php
                }
                ?>
                <li class="has-form">

                    <?php
                    $k = MY_Controller::getLang();
//                    echo '<a href="#" class="button full"  data-reveal-id="languageset">' . $langs['' . $k . '']['val'] . '</a>';
                    echo '<a href="#" class="button full"  data-reveal-id="languageset">' .  strtoupper($k)  . '</a>';
                    ?>

                </li>

                <?php
                if ($loggedin)
                {
                    ?>
                    <li class="has-form">
                        <a href="<?php echo $base_url; ?>auth/logout" class="button alert logoutbutton" id="logout"><?php echo lang('btnlogout'); ?></a>
                    </li>
                    <?php
                }
                else
                {
                    ?>
                    <li class="has-form">
                        <a href="<?php echo $base_url; ?>auth/" class="button alert logibutton"  data-reveal-id="loginform"><?php echo lang('toploginbtn'); ?></a>
                    </li>

                    <?php
                }
                ?>
            </ul>

            <!-- Left Nav Section -->
            <ul class="left">
                <?php
                if ($loggedin)
                {
                    ?>
                    <li><a href="<?php echo $base_url; ?>federations/manage"><?php echo lang('federations'); ?></a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo $base_url; ?>providers/idp_list/show"><?php echo lang('identityproviders'); ?></a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo $base_url; ?>providers/sp_list/show"><?php echo lang('serviceproviders'); ?></a></li>
                    <li class="divider"></li>
                    <li class="has-dropdown">
                        <a href="<?php echo $base_url; ?>"><?php echo lang('register'); ?></a>
                        <ul class="dropdown">
                            <li><a href="<?php echo $base_url; ?>providers/idp_registration"><?php echo lang('identityprovider'); ?></a></li>
                            <li><a href="<?php echo $base_url; ?>providers/sp_registration"><?php echo lang('serviceprovider'); ?></a></li>
                            <?php
                            if ($loggedin)
                            {
                                ?>
                                <li><a href="<?php echo $base_url; ?>federations/federation_registration"><?php echo lang('rr_federation'); ?></a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li class="has-dropdown"><a href="<?php echo $base_url; ?>"><?php echo lang('general'); ?></a>
                        <ul class="dropdown">
                            <?php
                            if ($isAdministrator)
                            {
                                echo '<li><a href="' . $base_url . 'smanage/reports">' . lang('sys_menulink') . '</a></li>';
                            }
                            ?>
                            <li><a href="<?php echo $base_url; ?>manage/fedcategory/show"><?php echo lang('rrfedcatslist'); ?></a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo $base_url; ?>manage/coc/show"><?php echo lang('entcats_menulink'); ?></a></li>
                            <li><a href="<?php echo $base_url; ?>manage/regpolicy/show"><?php echo lang('regpols_menulink'); ?></a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo $base_url; ?>attributes/attributes/show"><?php echo lang('rr_attr_defs'); ?></a></li>
                            <?php
                            if ($isAdministrator)
                            {

                                echo '<li><a href="' . $base_url . 'manage/importer">' . lang('rr_meta_importer') . '</a></li>';
                                ?>
                                <li class="has-dropdown"><a href="<?php echo $base_url; ?>manage/users/showlist"><?php echo lang('rr_users'); ?></a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo $base_url; ?>manage/users/showlist"><?php echo lang('rr_users_list'); ?></a>
                                        <li><a href="<?php echo $base_url; ?>manage/users/add"><?php echo lang('rr_newuser'); ?></a></li>
                                        <li><a href="<?php echo $base_url; ?>manage/users/remove"><?php echo lang('rr_rmuser'); ?></a></li>
                                    </ul>
                                </li>
                                <?php
                            }
                            ?>

                        </ul>

                    </li>
                    <li class="divider"></li>

                    <?php
                }
                ?>
            </ul>
        </section>
    </nav>

</div>

