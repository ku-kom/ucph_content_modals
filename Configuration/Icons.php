<?php

/*
 * This file is part of the package ucph_content_modals.
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 * Sep 2022 Nanna Ellegaard, University of Copenhagen.
 */

/**
 * Icon registry
 */

defined('TYPO3') || die();

return [
    // icon identifier
    'ucph-ce-modals-icon' => [
        'provider' => \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        'source' => 'EXT:ucph_content_modals/Resources/Public/Icons/window-stack.svg',
    ],
];
