			  <li class="<?php if($pagename=="index.php") {echo "active"; } ?>">
                <a href="<?php echo $config->url_site ;?>/admin/index.php"><?php echo $lang['Home']; ?></a>
              </li>
              <?php if($user->rank>= ACL_MENU_SERVER){ ?><li class="<?php if($pagename=="server.php") {echo "active"; } ?>">
                <a href="<?php echo $config->url_site ;?>/admin/server.php"><?php echo $lang['Server']; ?></a>
              </li><?php } ?>
              <?php if($user->rank>=7){ ?><li class="<?php if($pagename=="site.php") {echo "active"; } ?>">
                <a href="<?php echo $config->url_site ;?>/admin/site.php"><?php echo $lang['Website']; ?></a>
              </li><?php } ?>
              <?php if($user->rank>=6){ ?><li class="<?php if($pagename=="users.php") {echo "active"; } ?>">
                <a href="<?php echo $config->url_site ;?>/admin/users.php"><?php echo $lang['Users']; ?></a>
              </li><?php } ?>
              <?php if($user->rank>=6){ ?><li class="<?php if($pagename=="shop.php") {echo "active"; } ?>">
                <a href="<?php echo $config->url_site ;?>/admin/shop.php"><?php echo $lang['Shop']; ?></a>
              </li><?php } ?>
              <?php if($user->rank>=7){ ?><li class="<?php if($pagename=="help.php") {echo "active"; } ?>">
                <a href="<?php echo $config->url_site ;?>/admin/help.php"><?php echo $lang['Help']; ?></a>
              </li><?php } ?>
              <?php if($user->rank>=7){ ?><li class="<?php if($pagename=="logs.php") {echo "active"; } ?>">
                <a href="<?php echo $config->url_site ;?>/admin/logs.php">Logs</a>
              </li><?php } ?>
              <?php if($user->rank>=7){ ?><li class="<?php if($pagename=="page.php") {echo "active"; } ?>">
                <a href="<?php echo $config->url_site ;?>/admin/page.php">Page</a>
              </li><?php } ?>
              <?php if($user->rank>=7){ ?><li class="<?php if($pagename=="manage_forms.php" OR $pagename=="edit_form.php") {echo "active"; } ?>">
                <a href="<?php echo $config->url_site ;?>/admin/form/manage_forms.php">Formulaires</a>
              </li><?php } ?>
              <li>
              	<a href="<?php echo $config->url_site ;?>" target=="_blanck" >Retourner sur le site</a>
              </li>