<?php
/**
 * Part of the Robin Radic's PHP packages.
 *
 * MIT License and copyright information bundled with this package
 * in the LICENSE file or visit http://radic.mit-license.com
 */
namespace Sunveloper\TeeplussThemes\Console;

use Sunveloper\TeeplussConsole\Command;
use Sunveloper\TeeplussConsole\Traits\SlugPackageTrait;
use Sunveloper\TeeplussSupport\Path;
use Sunveloper\TeeplussThemes\ThemeGenerator;
use Symfony\Component\Console\Input\InputArgument;

/**
 * This is the ThemePublishCommand class.
 *
 * @package        Sunveloper\TeeplussThemes
 * @version        1.0.0
 * @author         Robin Radic
 * @license        MIT License
 * @copyright      2015, Robin Radic
 * @link           https://github.com/robinradic
 */
class ThemeInitCommand extends Command
{

    protected $name = 'themes:init';

    protected $description = 'Create some initial theme files and dir structure. It will place it all in the first configured theme folder (laradic.themes.paths.themes) ';

    public function fire()
    {
        $themes = [
            ['example/default', 'Example Default Theme', null, 'layout.blade.php'],
            ['example/main', 'Example Main Theme', null, 'index.blade.php'],
            ['example/other', 'Example Other Theme', 'example/main', 'something.blade.php'],
            ['another-example/admin', 'Another Example Admin Theme', null, 'admin.blade.php']
        ];

        $gen = new ThemeGenerator(app('blade.compiler'));

        foreach($themes as $theme)
        {
            $success = $gen->generateTheme($theme[0], $theme[1], $theme[2], $theme[3]);

            if ( ! $success )
            {
                $this->error('theme already exists');
            }
        }

        $this->info('Successfully created init themes');
    }

}
