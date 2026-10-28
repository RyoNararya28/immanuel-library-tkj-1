<?php

function getUsers()
{
  require_once __DIR__ . "/../config/database.php";

  $stmt = $pdo->query("SELECT id, name, email, role FROM users ORDER BY id");
  return $stmt->fetchAll();
}

function getUser()
{
  $user = [
    "id"    => 2,
    "name"  => "Budi Santoso",
    "email" => "budi.santoso@siswa.ski.sch.id",
    "role"  => "member",
  ];

  return $user;
}

function getProfile()
{
  $profile = [
    "user_id" => 2,
    "phone"   => "0812-3456-7890",
    "address" => "Jl. Merdeka No. 21, Pontianak, Kalimantan Barat",
    "bio"     => "Murid kelas XI TKJ yang gemar membaca novel fiksi dan buku pengembangan diri.",
  ];

  return $profile;
}
