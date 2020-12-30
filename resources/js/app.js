require( './bootstrap' );

// Landkit Bootstrap theme.
require( './landkit/vendor.bundle' );
require( './landkit/theme.bundle' );

import TypeIt from "./typeit.min";
window.TypeIt = TypeIt;

// jQuery & Plugins
global.$ = global.jQuery = require( 'jquery' );
require( './jquery.mask.min' );

// Custom
require( './script' );
