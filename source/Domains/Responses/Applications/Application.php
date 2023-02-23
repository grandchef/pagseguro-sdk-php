<?php

namespace PagSeguro\Domains\Responses\Applications;

/** Class Application
 */
class Application
{
    private $id;

    private $name;

    private $role;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param  mixed  $id
     * @return Application
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param  mixed  $name
     * @return Application
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param  mixed  $role
     * @return Application
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
}
