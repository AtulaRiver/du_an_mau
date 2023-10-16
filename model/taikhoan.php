<?php
function insert_taikhoan($email, $user, $pass)
{
    $sql = "insert into taikhoan(email, user, pass) values('$email', '$user', '$pass')";
    pdo_execute($sql);
}

function checkuser($user, $pass)
{
    $sql = "select * from taikhoan where user = '" . $user . "' and pass = '" . $pass . "'";
    $tk = pdo_query_one($sql);
    return $tk;
}

function checkemail($email)
{
    $sql = "select * from taikhoan where email='" . $email . "'";
    $tk = pdo_query_one($sql);
    return $tk;
}

function update_taikhoan($id, $user, $email, $pass, $address, $tel)
{
    $sql = "update taikhoan set user = '" . $user . "', pass = '" . $pass . "', email = '" . $email . "', address = '" . $address . "', tel = '" . $tel . "' where id =" . $id;

    pdo_execute($sql);
}

function loadall_taikhoan()
{
    $sql = "select * from taikhoan order by id desc";
    return $listtaikhoan = pdo_query($sql);
}

function loadone_taikhoan($id)
{
    $sql = "select * from taikhoan where id = " . $id;
    return $tk = pdo_query_one($sql);
}

function delete_taikhoan($id)
{
    $sql = "delete from taikhoan where id = " . $id;
    pdo_query($sql);
}
