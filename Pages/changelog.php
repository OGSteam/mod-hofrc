<?php

/**
 * changelog.php
 * @package HofRC
 * @author Shad
 * @link http://www.ogsteam.fr
 * @version : 0.0.1
 */

if (!defined('IN_SPYOGAME')) die("Hacking attempt");

//Définitions
global $db;

//On vérifie que le mod est activé
$query = "SELECT `active` FROM `" . TABLE_MOD . "` WHERE `action`='hofrc' AND `active`='1' LIMIT 1";
if (!$db->sql_numrows($db->sql_query($query))) die("Hacking attempt");

?>

<table class="og-table og-medium-table">
    <thead>
        <tr>
            <th>
                Version : <span class="og-alert">HOF RC</span>
            </th>
        </tr>
    </thead>
    <tbody>
    <tr>
            <td class="tdvalue">
                <fieldset>
                    <legend>
                        <b>
                            <span class="og-highlight">Version 0.0.4</span>
                        </b>
                    </legend>
                    <ul>
                        <li>Remise en service du mod</li>
                        <li>Suppression fonctions depréciés</li>
                        <li>Redesign 3.3.9</li>
                    </ul>
                </fieldset>
            </td>
        </tr>
        <tr>
            <td class="tdvalue">
                <fieldset>
                    <legend>
                        <b>
                            <span class="og-highlight">Version 0.0.3</span>
                        </b>
                    </legend>
                    <ul>
                        <li>Réindentation des fichiers</li>
                        <li>Correction non détection RC Basic</li>
                        <li>Problème à la mise à jour</li>
                    </ul>
                </fieldset>
            </td>
        </tr>
        <tr>
            <td class="tdvalue">
                <fieldset>
                    <legend>
                        <b>
                            <span class="og-highlight">Version 0.0.2</span>
                        </b>
                    </legend>
                    <ul>
                        <li>Repris par DarkNoon</li>
                        <li>Passage en UTF-8</li>
                    </ul>
                </fieldset>
            </td>
        </tr>
        <tr>
            <td class="tdvalue">
                <fieldset>
                    <legend>
                        <b>
                            <span class="og-highlight">Version 0.0.1</span>
                        </b>
                    </legend>
                    <ul>
                        <li>Sortie du mod</li>
                    </ul>
                </fieldset>
            </td>
        </tr>
    </tbody>
</table>


