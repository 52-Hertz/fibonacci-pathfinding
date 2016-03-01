<?php


namespace FiftyTwoHertz\Group;


class ElementGroup {
    /**
     * @var array
     */
    private $group;

    /**
     * @var int
     */
    private $width;

    /**
     * @var int
     */
    private $height;

    /**
     * ElementGroup constructor.
     *
     * @param array $group
     * @param int   $width
     * @param int   $height
     */
    public function __construct(array $group)
    {
        $this->group = $group;
        $this->width = count($group[0]);
        $this->height = count($group);
    }

    public function getIndex($index)
    {
        return $this->group[$index];
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }
}
