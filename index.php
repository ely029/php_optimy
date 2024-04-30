<?php

/**
 * Main entry point for displaying news articles and their associated comments.
 *
 * This script creates an instance of the NewsViewer class and displays news articles
 * along with their corresponding comments.
 */

// Include autoloader to automatically load class files
require_once 'autoloader.php';

use App\Viewer\NewsViewer;

// Create an instance of NewsViewer
$newsViewer = new NewsViewer();

// Display news articles and their comments
$newsViewer->displayNewsWithComments();
