<?php

namespace PagSeguro\Domains\Requests;

/** Class Permissions
 */
trait Permissions
{
    /**
     * @var null
     */
    private $permissions = null;

    /**
     * @return $this
     */
    public function addPermission($permission)
    {
        $this->increment($permission);

        return $this;
    }

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

    private function increment($permission)
    {
        if (is_null($this->permissions)) {
            $this->permissions = $permission;
        } else {
            $this->permissions .= sprintf(',%s', $permission);
        }
    }
}
