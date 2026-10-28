<?php
require_once __DIR__ . "/../repositories/user-repository.php";
function getRegisterRequest($request)
{
    return [
        'name' => trim(htmlspecialchars($request['name'])),
        'email' => trim(htmlspecialchars($request['email'])),
        'password' => $request['password'],
        'password_confirmation' => $request['password_confirmation'],
    ];
}

function validateRegister($request)
{
    $errors = [];

    // Validate name
    if ($request['name'] === '') {
        $errors['name'] = "Nama lengkap wajib diisi";
    } elseif (mb_strlen($request['name']) > 150) {
        $errors['name'] = "Nama lengkap tidak boleh melebihi dari 150 karakter";
    }

    // Validate email
    if ($request['email'] === '') {
        $errors['email'] = "Email wajib diisi";
    } elseif (!filter_var($request['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Email tidak valid";
    }

    // Validate password
    if ($request['password'] === '') {
        $errors['password'] = "Kata sandi wajib diisi";
    } elseif (mb_strlen($request['password']) < 8) {
        $errors['password'] = "Kata sandi tidak boleh kurang dari 8 karakter";
    }

    // Validate password confirmation
    if ($request['password_confirmation'] === '') {
        $errors['password_confirmation'] = "Konfirmasi kata sandi wajib diisi";
    } elseif ($request['password'] !== $request['password_confirmation']) {
        $errors['password_confirmation'] = "Konfirmasi kata sandi tidak cocok";
    }

    return $errors;
}



function getLoginRequest($request)
{
    return [
        'email' => is_string($request['email'] ?? null) ? trim($request['email']) : '',
        'password' => is_string($request['password'] ?? null) ? $request['password'] : '',
    ];
}

function validateLogin($request)
{
    $errors = [];

    if ($request['email'] === '') {
        $errors['email'] = "Email wajib diisi";
    }

    if ($request['password'] === '') {
        $errors['password'] = "Kata sandi wajib diisi";
    }

    return $errors;
}

?>