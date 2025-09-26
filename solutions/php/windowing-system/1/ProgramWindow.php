<?php

class ProgramWindow
{
    public $x;
    public $y;
    public $width;
    public $height;
    public $title;
    public $contents;

    public function __construct()
    {
        $this->x = 0;
        $this->y = 0;
        $this->width = 800;
        $this->height = 600;
        $this->title = "Program Window";
        $this->contents = "";
    }

    public function move(Position $position): void
    {
        $this->x = $position->x;
        $this->y = $position->y;
    }

    public function resize(Size $size): void
    {
        $this->width = $size->width;
        $this->height = $size->height;
    }
}

class Position
{
    public $x;
    public $y;

    public function __construct(int $y, int $x)
    {
        $this->y = $y;
        $this->x = $x;
    }
}

class Size
{
    public $width;
    public $height;

    public function __construct(int $height, int $width)
    {
        $this->height = $height;
        $this->width = $width;
    }
}
