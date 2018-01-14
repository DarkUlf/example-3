<?php

function formatPhone($value)
{
    return preg_replace('/^\d(\d{3})(\d{3})(\d{2})(\d{2})$/', config('phoneFormat'), $value);
}

function validateRequired()
{
    $args = func_get_args();
    return array_filter(
            $args,
            function ($arg) {
                return trim($arg) !== '';
            }
        ) === $args;
}

function validateEmail()
{
    $args = func_get_args();
    return array_filter(
            $args,
            function ($arg) {
                return filter_var($arg, FILTER_VALIDATE_EMAIL);
            }
        ) === $args;
}

function validatePhone()
{
    $args = func_get_args();
    return array_filter(
            $args,
            function ($arg) {
                return strlen(preg_replace('/[^\d]+/', '', $arg)) === 11;
            }
        ) === $args;
}

function config($name)
{
    global $_CONFIG;
    return $_CONFIG[$name];
}

function sendMail($from, $to, $subject, $content)
{
    if (!is_array($content)) {
        $content = [$content];
    }

    $headers = [
        'Content-type: text/plain; charset=utf-8',
        'From: ' . $from,
    ];

    $content = implode("\r\n", $content);
    $headers = implode("\r\n", $headers);

    foreach ((array)$to as $email) {
        if (!mail($email, $subject, $content, $headers)) {
            return false;
        }
    }

    return true;
}

function response($message, $error = false)
{
    echo json_encode(array('error' => !!$error, 'message' => $message));
    exit;
}

function arrGet($array, $key, $default = null)
{
    return array_key_exists($key, $array) ? $array[$key] : $default;
}