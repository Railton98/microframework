<?php

namespace RayTecks\Renderer;

interface PHPRendererInterface
{
    public function setData($data);
    public function run();
}
