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

namespace auth_oauth_simple\event;
defined('MOODLE_INTERNAL') || die();

class user_loggedin extends \core\event\base {

    /**
     * Returns description of what happened.
     *
     * @return string
     */
    public function get_description() {
        return "The user $this->relateduserid has sent logged in with OauthSimple.";
    }

    /**
     * Return localised event name.
     *
     * @return string
     */
    public static function get_name() {
        return get_string('event_user_loggedin', 'auth_oauth_simple');
    }

    /**
     * Get URL related to the action
     *
     * @return \moodle_url
     */
    public function get_url() {
        return new \moodle_url('/login/index.php', array());
    }

    /**
     * Init method.
     *
     * @return void
     */
    protected function init() {
        $this->data['crud'] = 'r';
        $this->data['level'] = self::LEVEL_OTHER;
        $this->data['objecttable'] = 'user';
    }

    /**
     * Custom validation.
     *
     * @return void
     */
    protected function validate_data() {
        if (!isset($this->relateduserid)) {
            throw new \coding_exception('The property relateduserid must be set.');
        }
    }

}
