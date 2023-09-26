<?php declare(strict_types=1);

namespace App\Domains\Core\Test\Factory;

use Closure;
use Illuminate\Database\Eloquent\Factories\Factory;

abstract class FactoryAbstract extends Factory
{
    /**
     * @var class-string<\App\Domains\Core\Model\ModelAbstract>
     */
    protected $model;

    /**
     * @return string
     */
    abstract protected function getUserClass(): string;

    /**
     * @param string $class
     *
     * @return \Closure
     */
    protected function firstOrFactory(string $class): Closure
    {
        return static fn () => $class::orderBy('id', 'ASC')->first() ?: $class::factory();
    }

    /**
     * @return \Closure
     */
    protected function userFirstOrFactory(): Closure
    {
        return $this->firstOrFactory($this->getUserClass());
    }
}