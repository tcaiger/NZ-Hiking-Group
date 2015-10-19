<?php

# The restful API
define('API', '../api/');
define('LIBRARIES', API.'libraries/');

# Login Models, Controllers & Views
define('VIEWS', 'views/');
define('APP', 'app/');
define('MODELS', API.'models/');

# Angular APP
define('APP', 'app/');
define('ASSETS', 'assets/');

# Load all our libraries
require_once LIBRARIES.'auth.lib.php';
require_once LIBRARIES.'config.lib.php';
require_once LIBRARIES.'database.lib.php';
require_once LIBRARIES.'form.lib.php';
require_once LIBRARIES.'input.lib.php';
require_once LIBRARIES.'model.lib.php';
require_once LIBRARIES.'route.lib.php';
require_once LIBRARIES.'upload.lib.php';
require_once LIBRARIES.'email.lib.php';
require_once LIBRARIES.'url.lib.php';

# user model for logins
require_once MODELS.'user.model.php';

require_once APP.'email.php';

# load the helpers and the routes
require_once 'routes.php';