<?php

/**
 * index.php
 * @package HofRC
 * @author Shad
 * @link http://www.ogsteam.fr
 * @version : 0.0.1
 */

if (!defined('IN_SPYOGAME')) die("Hacking attempt");
if (!isset($table_prefix))        global $table_prefix;
if (!isset($icon_display))        global $icon_display;

$query = "SELECT `active` FROM `" . TABLE_MOD . "` WHERE `action`='hofrc' AND `active`='1' LIMIT 1";
if (!$db->sql_numrows($db->sql_query($query)))
    die("Hacking attempt");

// include 
$TABLE_HOFRC_ATTACK = $table_prefix . 'hofrc_attack';
$TABLE_HOFRC_CONFIG = $table_prefix . 'hofrc_config';
$TABLE_HOFRC_DEFENCE = $table_prefix . 'hofrc_defence';
$TABLE_HOFRC_INFO_RC = $table_prefix . 'hofrc_info_rc';
$TABLE_HOFRC_RP = $table_prefix . 'hofrc_rp';
$TABLE_HOFRC_SKIN = $table_prefix . 'hofrc_skin';
$TABLE_HOFRC_TITLE = $table_prefix . 'hofrc_title';


if (!isset($pub_subaction)) $pub_subaction = "convert";
if ($pub_subaction !== "preview" && $pub_subaction !== "temp") {
    require_once("views/page_header.php");

    require_once('mod/hofrc/Pages/include.php');

?>

    <div class="ogspy-mod-header">
        <h2>HOF RC</h2>
    </div>
    <?php
    $activeconvert = ($pub_subaction == "convert") ? " active " : "";
    $activegestion = ($pub_subaction == "gestion") ? " active " : "";
    $activeadmin = ($pub_subaction == "admin") ? " active " : "";
    $activechangelog = ($pub_subaction == "changelog") ? " active " : "";
    ?>

    <div class="nav-page-menu">
        <div class="nav-page-menu-item <?php echo $activeconvert;?> ">
            <a class="nav-page-menu-link" href="index.php?action=hofrc&amp;subaction=convert">
            Conversion d'un HOF
         </a>
        </div>
        <div class="nav-page-menu-item <?php echo $activegestion; ?> ">
            <a class="nav-page-menu-link" href="index.php?action=hofrc&amp;subaction=gestion">
            Gestion des HOF 
            </a>
        </div>
        <div class="nav-page-menu-item <?php echo $activeadmin; ?>">
            <a class="nav-page-menu-link" href="index.php?action=hofrc&amp;subaction=admin">
            Administration
            </a>
        </div>
        <div class="nav-page-menu-item <?php echo $activechangelog; ?>">
            <a class="nav-page-menu-link" href="index.php?action=hofrc&amp;subaction=changelog">
            Changelog
            </a>
        </div>
    </div>


    <table width="100%">
      
        <tr>
            <td>
            <?php
        }
        switch ($pub_subaction) {
            case "convert":
                require_once("Pages/convert.php");
                break;

            case "preview":
                require_once("Pages/preview.php");
                break;

            case "gestion":
                require_once("Pages/gestion.php");
                break;

                // case "rp" :
                // require_once("Pages/rp.php");
                // break;

            case "admin":
                require_once("Pages/admin.php");
                break;

            case "publier":
                require_once("Pages/publier.php");
                break;

            case "changelog":
                require_once("Pages/changelog.php");
                break;

            default:
                require_once("Pages/convert.php");
                break;
        }
            ?>
            </td>
        </tr>
    </table>



    <?php
    if (!isset($pub_subaction)) $pub_subaction = "convert";
    if ($pub_subaction !== "preview" && $pub_subaction !== "temp") {
        require_once("views/page_header.php");
        require_once('mod/hofrc/Pages/include.php');

        page_footer();

    }
    require_once("views/page_tail.php");
    ?>