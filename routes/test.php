<?php

$users = DB::table('users')->get();
select * from `users`


$user = DB::table('users')->where('name', 'John')->first();
select * from `users` where `name` = 'John' limit 1


$user = DB::table('users')->find(3);
select * from `users` where `id` = 3 limit 1


$email = DB::table('users')->where('name', 'John')->value('email');
$titles = DB::table('users')->value('email','name');
select `email` from `users` limit 1


$email = DB::table('users')->where('name', 'John')->pluck('email');
select `email` from `users` where `name` = 'John'


$titles = DB::table('users')->get(['email','password','name']);
select `email`, `password`, `name` from `users`


DB::table('users')->select('name', 'email as user_email')->get();
select `name`, `email` as `user_email` from `users`


$users = DB::table('users')->count();
select count(*) as aggregate from `users`


if (DB::table('orders')->where('finalized', 1)->exists()) {
// ...
}


if (DB::table('orders')->where('finalized', 1)->doesntExist()) {
// ...
}