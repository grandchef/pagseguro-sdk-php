<?php

namespace PagSeguro\Domains\Requests;

/** Class Permissions
 * @package PagSeguro\Domains\Requests
 */
trait Permissions
{
    /**
     * @var null
     */
    private $permissions = null;

    /**
     * @param $permission
     * @return $this
     */
    public function addPermission($permission)
    {
        $this->increment($permission);
        return $this;
    }

    /**
     * @param array $permissions
     */
    public function setPermissions(array $permissions)
    {
        if (is_array($permissions)) {
            foreach ($permissions as $key => $permission) {
                $this->increment($permission);
            }
        }
    }

    /**
     * @return mixed
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * @param $permission
     */
    private function increment($permission)
    {
        if (is_null($this->permissions)) {
            $this->permissions = $permission;
        } else {
            $this->permissions .= sprintf(",%s", $permission);
        }
    }
}
