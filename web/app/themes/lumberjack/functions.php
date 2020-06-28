<?php

use App\Http\Lumberjack;
use App\Functions\EnqueueAssets;
use App\Functions\AddAcfOptionsPage;

// Create the Application Container
$app = require_once('bootstrap/app.php');

// Bootstrap Lumberjack from the Container
$lumberjack = $app->make(Lumberjack::class);
$lumberjack->bootstrap();

// Custom Functions
EnqueueAssets::enqueueAssets();
AddAcfOptionsPage::addAcfOptionsPage();

// Import our routes file
require_once('routes.php');

// Set global params in the Timber context
add_filter('timber_context', [$lumberjack, 'addToContext']);
