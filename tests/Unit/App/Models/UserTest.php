<?php

namespace Tests\Unit\App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use PHPUnit\Framework\TestCase;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class UserTest extends TestCase
{
    protected function model(): Model
    {
        return new User();
    }

    public function test_traits()
    {
        $traits = array_keys(class_uses($this->model()));


        $expectedTraits = [
            HasApiTokens::class,
            HasFactory::class,
            Notifiable::class,
        ];

        //dump($traits, $expectedTraits);
        //die();
        $this->assertEquals($expectedTraits, $traits);
    }
}
