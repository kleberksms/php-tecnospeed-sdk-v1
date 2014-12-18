<?php

namespace Tecnospeed;

class ManagerNf {

    protected $type;
    protected $pattern;
    protected $defaultCity;

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }


    /**
     * @return mixed
     */
    public function getPattern()
    {
        return $this->pattern;
    }

    /**
     * @param mixed $pattern
     */
    public function setPattern($pattern)
    {
        $this->pattern = $pattern;
    }




    /**
     * @return mixed
     */
    public function getDefaultCity()
    {
        return $this->defaultCity;
    }

    /**
     * @param mixed $defaultCity
     */
    public function setDefaultCity($defaultCity)
    {
        $this->defaultCity = $defaultCity;
    }



} 