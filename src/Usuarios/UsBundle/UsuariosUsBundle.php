<?php

namespace Usuarios\UsBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class UsuariosUsBundle extends Bundle
{
	public function getParent()
    {
        return 'FOSUserBundle';
    }
}
