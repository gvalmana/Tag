<?php

namespace Tests\Unit\Models;

use App\Models\Tag;
use PHPUnit\Framework\TestCase;

class TagTest extends TestCase
{
    public function testSlug(): void
    {
        $tag = new Tag();
        $tag->name = 'Proyecto de prueba PHP';
        $this->assertEquals('proyecto-de-prueba-php', $tag->slug);
    }
}
