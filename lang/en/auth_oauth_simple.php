<?php
// This file is part of OauthSimple plugin for Moodle (http://moodle.org/) based in Oauth1 plugin of Marco Cappuccio and    Andrea Bicciolo 
//
// OauthSimple plugin is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Ouath1 plugin is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * OauthSimple authentication login
 *
 * @package    auth_oauth_simple
 * @author     Esdras Caleb Oliveira Silva
 * @copyright  2014 onwards MediaTouch 2000 srl (http://www.mediatouch.it)
 * @copyright  2014 onwards Formez (http://www.formez.it/)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'OauthSimple';
$string['auth_apifunc'] = 'Function API';
$string['auth_apifunc_desc'] = 'API Chamada de função.';
$string['auth_apiurl'] = 'URL API';
$string['auth_apiurl_desc'] = 'Chamadas de API do endereço.';
$string['auth_baseurl'] = 'URL Provider';
$string['auth_baseurl_desc'] = 'Endereço de base do provedor..
<br>Callback URL: '.$CFG->wwwroot.'/auth/oauth_simple/callback.php';
$string['auth_consumer_key'] = 'Consumer Key';
$string['auth_consumer_key_desc'] = 'Chave de autorização consumer_key';
$string['auth_consumer_secret'] = 'Consumer Secret';
$string['auth_consumer_secret_desc'] = 'Chave de autorização consumer_secret';
$string['auth_fieldlocks_help'] = 'Esses campos são opcionais. E pode optar por preencher alguns campos de usuário Moodle com dados dos campos OAUTH.<br><br>
<b>Atualizar dados interno</b>: Se ativado, impedir que os usuários e administradores para alterar o campo diretamente para o Moodle.<br><br>
<b>Bloqueia Valor</b>: Se abilitato, impedirà agli utenti e agli amministratori di Moodle di modificare il campo direttamente.';
$string['auth_oauth_simpledescription'] = 'Permite que o usuário se conectar ao site através de um serviço externo (oauth_simple).
A primeira vez que você entra, você criar uma nova conta.
<br>Opção <a href="'.$CFG->wwwroot.'/admin/search.php?query=authpreventaccountcreation">Evite criar contas no momento da autenticação</a> <b>não deve</b> ser ativo.';
$string['auth_oauth_simplesettings'] = 'Settings';

