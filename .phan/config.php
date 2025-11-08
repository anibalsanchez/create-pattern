<?php

/*
 * @package     Extly Infrastructure Support
 *
 * @author      Extly, CB. <team@extly.com>
 * @copyright   Copyright (c)2012-2025 Extly, CB. All rights reserved.
 * @license     https://www.opensource.org/licenses/mit-license.html  MIT License
 *
 * @see         https://www.extly.com
 */

return [
    // Target PHP 7.4+ for Joomla compatibility
    'target_php_version' => '7.4',

    // Directories to analyze - consistent with rector.php and php-cs-fixer
    'directory_list' => [
        'src',
    ],

    // Exclude analysis but include for class information
    'exclude_analysis_directory_list' => [
        'vendor/',
        'node_modules/',
    ],

    // Enhanced plugin set for code quality and Joomla compatibility
    'plugins' => [
        'AlwaysReturnPlugin',
        'DollarDollarPlugin',
        'DuplicateArrayKeyPlugin',
        'DuplicateExpressionPlugin',
        'EmptyStatementListPlugin',
        'LoopVariableReusePlugin',
        'PregRegexCheckerPlugin',
        'PrintfCheckerPlugin',
        'SleepCheckerPlugin',
        'UnreachableCodePlugin',
        'UseReturnValuePlugin',
        'WhitespacePlugin',
        'SimplifyExpressionPlugin',
        'StrictComparisonPlugin',
        'SuspiciousParamOrderPlugin',
    ],

    // Skip analysis for legacy and vendor code
    'exclude_file_regex' => '@(.*Legacy.*|.*legacy.*|vendor/|node_modules/)@',

    // Minimum severity for issues
    'minimum_severity' => 5,

    // Allow missing properties (common in Joomla)
    'allow_missing_properties' => true,

    // Suppress common Joomla false positives
    'suppress_issue_types' => [
        'PhanUndeclaredGlobalVariable',
        'PhanUndeclaredConstant',
    ],
];
