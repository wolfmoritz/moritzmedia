<?php

/**
 * Moritz Media
 *
 * @link      https://github.com/PitonCMS/Piton
 * @copyright Copyright 2026 Wolfgang Moritz
 * @license   https://github.com/PitonCMS/Piton/blob/master/LICENSE (MIT License)
 */

/**
 * Custom Paths
 *
 * Contains paths to load for single page websites managed by moritzmedia.com.
 * If the requesting domain is listed below, and no path or REQUEST_URI is defined, then inject
 * the desired Piton page slug into the superglobal to load that page.
 *
 * This config file is loaded before the Slim app, so we can manipulate superglobal variables here.
 * This pathOverride.php file is loaded by config.local.php
 *
 * To setup a new single page:
 * - Create a page template and JSON file under /structure/templates/pages/
 * - Copy and paste into this file the if () {} statement and set the intended page slug that you will create
 * - Commit and push to production
 * - Publish a Piton page using the new template, make sure the new URL slug matches was was defind below
 * - In ServerPilot, to to app2.moritzmedia.com and add the domain (with www variant) as valid domains
 * - Update DNS to point to app2 (167.99.172.154)
 */

declare(strict_types=1);

// Coming soon for Piton
if (strtolower($_SERVER['HTTP_HOST']) === 'pitoncms.com') {
    $_SERVER['REQUEST_URI'] = '/pitoncms';
}

// Coming soon for Moritz Media (only where no path is requested)
if (strtolower($_SERVER['HTTP_HOST']) === 'moritzmedia.com' && $_SERVER['REQUEST_URI'] === '/') {
    $_SERVER['REQUEST_URI'] = '/moritzmedia';
}

// Goodban Masonry
if (strtolower($_SERVER['HTTP_HOST']) === 'http://goodbanmasonry.com') {
    $_SERVER['REQUEST_URI'] = '/goodbanmasonry';
}
