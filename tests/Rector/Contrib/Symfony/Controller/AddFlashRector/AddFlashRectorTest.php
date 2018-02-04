<?php declare(strict_types=1);

namespace Rector\Tests\Rector\Contrib\Symfony\Controller\RedirectToRouteRector;

use Rector\Rector\Contrib\Symfony\Controller\AddFlashRector;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;

final class AddFlashRectorTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideWrongToFixedFiles()
     */
    public function test(string $wrong, string $fixed): void
    {
        $this->doTestFileMatchesExpectedContent($wrong, $fixed);
    }

    /**
     * @return string[][]
     */
    public function provideWrongToFixedFiles(): array
    {
        return [
            [__DIR__ . '/Wrong/wrong.php.inc', __DIR__ . '/Correct/correct.php.inc'],
            [__DIR__ . '/Wrong/wrong2.php.inc', __DIR__ . '/Correct/correct2.php.inc'],
        ];
    }

    /**
     * @return string[]
     */
    protected function getRectorClasses(): array
    {
        return [AddFlashRector::class];
    }
}
