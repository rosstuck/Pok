<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Form;

/**
 * A checkbox field for selecting boolean values.
 *
 * @author Bernhard Schussek <bernhard.schussek@symfony-project.com>
 */
class CheckboxField extends ToggleField
{
    /**
     * {@inheritDoc}
     */
    protected function configure()
    {
        $this->addOption('value', '1');

        parent::configure();
    }
}