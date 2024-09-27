<?php

/**
 * @copyright   Copyright (c) Vendic B.V https://vendic.nl/
 */
declare(strict_types=1);

namespace Vendic\HyvaCheckoutEuVatIdFormatValidator\Model\Form;

use Hyva\Checkout\Model\Form\AbstractEntityForm;

class AddVatIdFieldValidation extends \Hyva\Checkout\Model\Form\AbstractEntityFormModifier
{

    public function apply(AbstractEntityForm $form): AbstractEntityForm
    {
        $form->registerModificationListener(
            'addVatIdFieldValidation',
            'form:init',
            [$this, 'applyAddVatIdFieldValidation']
        );

        return $form;
    }

    public function applyAddVatIdFieldValidation(AbstractEntityForm $form): void
    {
        $vatIdField = $form->getField('vat_id');
        if (!$vatIdField) {
            return;
        }

        $vatIdField->setValidationRule('vat-id');
    }
}
