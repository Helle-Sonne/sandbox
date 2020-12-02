<?php


namespace Sandbox\Application\Actions;


use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Sandbox\Application\Domains\VkAuthDomain;

class VkAuthGetCodeAction implements RequestHandlerInterface
{
    private $_vkAuthDomain;

    public function __construct(VkAuthDomain $vkAuthDomain)
    {
        $this->_vkAuthDomain = $vkAuthDomain;
    }

    /**
     * @param ServerRequestInterface $request
     * @return ResponseInterface
     */
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $a = $this->_vkAuthDomain->getToken();
    }
}