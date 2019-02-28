<?php

class FormUtils {
    
public static function getPostValue($index, $sanitize_func, $validate_func) {
    $was_posted = isset($index) && !empty($index);
    if (!$was_posted) {
        return [
            'value' => '',
            'is_valid' => false
        ];
    }
    $value = ($index);
    if ($sanitize_func !== NULL) {
        $value = filter_var($value, $sanitize_func);
    }
    $is_valid = true;
    if ($validate_func !== NULL) {
        $is_valid = filter_var($value, $validate_func);
    }
    return [
        'value' => $value,
        'is_valid' => $is_valid
    ];
}
    public static function checkBinary($index, $min = PHP_INT_MIN, $max = PHP_INT_MAX) {
        $raw_value = FormUtils::getPostValue($index, FILTER_SANITIZE_NUMBER_INT, FILTER_VALIDATE_INT);
        if ($raw_value['is_valid']) {
            $raw_value['value'] = (int) $raw_value['value'];
            if ($raw_value['value'] < $min && $raw_value['value'] < $max) {
                $raw_value['is_valid'] = false;
            }
        }
        return $raw_value;
    }

    public static function checkFloat($index, $min = PHP_FLOAT_MIN) {
        $raw_value = FormUtils::getPostValue($index, FILTER_SANITIZE_NUMBER_FLOAT, NULL);
        if ($raw_value['is_valid']) {
            $raw_value['value'] = (float) $raw_value['value'];
            if ($raw_value['value'] < $min) {
                $raw_value['is_valid'] = false;
            }
        }
        return $raw_value;
    }

    public static function checkString($index, $allow_empty) {
        $raw_value = FormUtils::getPostValue($index, FILTER_SANITIZE_STRING, NULL);
        if ($raw_value['is_valid']) {
            $raw_value['value'] = trim($raw_value['value']);
            if (!$allow_empty && empty($raw_value['value'])) {
                $raw_value['is_valid'] = false;
            }
        }
        return $raw_value;
    }

    public static function checkInt($index, $min = PHP_INT_MIN, $max = PHP_INT_MAX) {
        $raw_value = FormUtils::getPostValue($index, FILTER_SANITIZE_NUMBER_INT, FILTER_VALIDATE_INT);
        if ($raw_value['is_valid']) {
            $raw_value['value'] = (int) $raw_value['value'];
            if ($raw_value['value'] < $min || $raw_value['value'] > $max) {
                $raw_value['is_valid'] = false;
            }
        }
        return $raw_value;
    }
    public static function getFormErrorMessages($brandName, $parentCompany, $brandNetWorth) {
        $form_error_messages = [];
        if (!$brandName['is_valid']) {
            $form_error_messages['brandName'] = 'Brand name is required ';
        }
        if (!$parentCompany['is_valid']) {
            $form_error_messages['parentCompany'] = 'A valid parent company is required';
        }
        if (!$brandNetWorth['is_valid']) {
            $form_error_messages['brandNetWorth'] = 'A valid brand Net Worth is required';
        }
        return $form_error_messages;
    }
    public static function getFormErrorMessagesModel($modelName, $yearIntroduced, $yearDiscontinued, $bodyType) {
        $form_error_messages = [];
        if (!$modelName['is_valid']) {
            $form_error_messages['brandName'] = 'model name is required ';
        }
        if (!$yearIntroduced['is_valid']) {
            $form_error_messages['parentCompany'] = 'A valid year Introduced is required';
        }
        if (!$yearDiscontinued['is_valid']) {
            $form_error_messages['brandNetWorth'] = 'A valid year Discontinued is required';
        }
        if (!$bodyType['is_valid']) {
            $form_error_messages['brandNetWorth'] = 'A valid body Type is required';
        }
        return $form_error_messages;
    }
}
?>


