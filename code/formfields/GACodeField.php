<?php

/**
 * Class GACodeField
 */
class GACodeField extends TextField
{
    /**
     * @return string
     */
    public function Type()
    {
        return 'text';
    }

    /**
     * Simple validation to make sure the input matches the expected pattern.
     *
     * @param $validator
     * @return bool
     */
    public function validate($validator)
    {
        // No value set so accept
        if (empty($this->value)) {
            return true;
        } else {
            $parts = explode("-", $this->value);
        }

        if ($parts[0] === "GTM" && (mb_strlen($parts[1]) >= 4) && (mb_strlen($parts[1]) <= 8)) {
            return true;

        } else if (($parts[0] === "UA") && mb_strlen($parts[1]) === 8 && mb_strlen($parts[2]) === 1) {
            return true;

        } else {
            $validator->validationError($this->name, "ERROR: This isn't a valid Universal or Tag Manager code. Must be in either UA-XXXXXXXX-X or GTM-XXXXXX format.", "validation");
        }

        return false;
    }
}
