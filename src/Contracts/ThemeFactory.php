<?php
/**
 * Part of the Robin Radic's PHP packages.
 *
 * MIT License and copyright information bundled with this package
 * in the LICENSE file or visit http://radic.mit-license.com
 */
namespace Sunveloper\TeeplussThemes\Contracts;

/**
 * Interface ThemeFactory
 *
 * @package Sunveloper\TeeplussThemes\Contracts
 */
interface ThemeFactory {

    /** @return ThemeViewFinder */
    public function getFinder();

}
