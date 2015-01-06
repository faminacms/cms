<?php
defined('SITE_DIR') or define('SITE_DIR', 'VietDevClub');
/**
 * The site's owner, support one user/organization to maintain many sites.
 *
 * It's suggested that the  site owner is part of the SITE_ID value
 */
defined ('SITE_OWNER') or define('SITE_OWNER', 'famina');

/**
 * The site id identify the site among other sites of the same owner.
 * This value is used as table prefix ans as the session's cookie name
 */
defined ('SITE_ID') or define('SITE_ID', 'famina_vietdev');
?>