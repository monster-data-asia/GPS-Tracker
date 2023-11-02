<?php declare(strict_types=1);

namespace App\Domains\Maintenance\Test\Controller;

class Create extends ControllerAbstract
{
    /**
     * @var string
     */
    protected string $route = 'maintenance.create';

    /**
     * @var string
     */
    protected string $action = 'create';

    /**
     * @return void
     */
    public function testGetGuestUnauthorizedFail(): void
    {
        $this->getGuestUnauthorizedFail();
    }

    /**
     * @return void
     */
    public function testPostGuestUnauthorizedFail(): void
    {
        $this->postGuestUnauthorizedFail();
    }

    /**
     * @return void
     */
    public function testGetAuthSuccess(): void
    {
        $this->getAuthSuccess();
    }

    /**
     * @return void
     */
    public function testPostAuthSuccess(): void
    {
        $this->postAuthSuccess();
    }

    /**
     * @return void
     */
    public function testPostAuthCreateSuccess(): void
    {
        $this->postAuthCreateSuccess('maintenance.update');
    }

    /**
     * @return void
     */
    public function testGetAuthCreateAdminSuccess(): void
    {
        $this->getAuthCreateAdminSuccess();
    }

    /**
     * @return void
     */
    public function testGetAuthCreateAdminModeSuccess(): void
    {
        $this->getAuthCreateAdminModeSuccess(true, false);
    }

    /**
     * @return void
     */
    public function testPostAuthCreateAdminModeSuccess(): void
    {
        $this->postAuthCreateAdminModeSuccess('maintenance.update', true, false);
    }

    /**
     * @return string
     */
    protected function routeToController(): string
    {
        return $this->route();
    }
}
