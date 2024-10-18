<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Plugin strings
 *
 * @package    local
 * @subpackage entities
 * @copyright  2020 Edunao SAS (contact@edunao.com)
 * @author     remi <remi.colet@edunao.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['pluginname'] = 'Local Entities';

$string['errorunknownuser'] = 'L\'utilisateur (id: {$a}) n\'est actuellement plus enregistré';

$string['edadminentitiescoursetype'] = 'Paramètres';
$string['edadminentitiescoursetitle'] = 'Gestion des paramètres';

$string['dedicatedspace'] = 'Espace';
$string['entitymanagementtitle'] = 'Administration des espaces';
$string['spacename'] = 'Nom de l\'espace dédié';
$string['responsiblename'] = 'Administrateur';
$string['errorentityexisttitle'] = 'Nom déjà utilisé';
$string['errorentityexist'] = 'Le nom \'{$a}\' est déjà utilisé par un autre espace';
$string['errormissingentityid'] = 'L\'identifiant de l\'entité est manquant';
$string['errormissingsubentityid'] = 'L\'identifiant du sous espace est manquant';
$string['member'] = 'membre';
$string['members'] = 'membres';
$string['name'] = 'Nom de l\'espace';
$string['success_editing_entity'] = 'L\'entité a été mise à jour avec succès !';
$string['default_entity_changed'] = 'L\'entité par défaut à été modifiée !';
$string['failure_editing_entity'] = 'Une erreur s\'est produite. Veuillez réessayer.';
$string['formations'] = 'formations';
$string['addentity'] = 'Ajouter un espace dédié';
$string['deletesubentity'] = 'Supprimer un sous espace dédié';
$string['deletesubentitysuccessmessage'] = "Votre demande de suppression a bien été prise en compte.";
$string['addsubentity'] = 'Ajouter un sous espace dédié';
$string['viewroles'] = 'Consulter les rôles utilisateurs';
$string['setdefaultentity'] = 'Rattachement principal par défaut';
$string['editcontactpage'] = 'Éditer la page de contact';
$string['editpresentationpage'] = 'Éditer la présentation de l\'espace';
$string['hidepresentationpage'] = 'Masquer la présentation de l\'espace';
$string['showpresentationpage'] = 'Rendre visible la présentation de l\'espace';
$string['createpresentationpage'] = 'Créer la présentation de l\'espace';
$string['renameentity'] = 'Nom de l\'espace';
$string['entityshortname'] = 'Nom abrégé de l’espace dédié ';
$string['shortname'] = 'Nom abrégé de l’espace';
$string['renamesubentity'] = 'Nom du sous-espace';
$string['presentationpagevisibilityupdated'] = 'La visibilité de la présentation de l\'espace a été mise à jour';
$string['presentationpagevisibilityupdatefailed'] = 'La visibilité de la présentation de l\'espace a échoué';
$string['showpresentationpage'] = 'Rendre visible la présentation de l’espace';
$string['hidepresentationpage'] = 'Masquer la présentation de l\'espace';

/*****************DataTable***********************/

$string['langfile'] = 'French';

/*****************Capabilities********************/

$string['entities:manageentity'] = 'Gérer un espace';
$string['entities:renamesubentity'] = 'Renommer une sous-espace';

$string['notacessimportcsv']
    = 'L\'inscription des utilisateurs par l\'import CSV est uniquement disponible pour une session au statut en préparation, inscriptions ouvertes, en cours ou reportée.';
