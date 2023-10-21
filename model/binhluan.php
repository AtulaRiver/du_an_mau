<?php

function insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan)
{
    $sql = "insert into binhluan(noidung, iduser, idpro, ngaybinhluan) values('$noidung', '$iduser', '$idpro', '$ngaybinhluan')";
    pdo_execute($sql);
}

function loadall_binhluan($idpro)
{

    $sql = "select bl.noidung, bl.ngaybinhluan, tk.name 
    from binhluan bl
    join taikhoan tk on bl.iduser = tk.id
    join sanpham sp on bl.idpro = sp.id
    where sp.id = $idpro;
    ";
    return pdo_query($sql);

    return $listbinhluan = pdo_query($sql);
}

function delete_binhluan($id)
{
    $sql = "delete from binhluan where id = " . $id;
    pdo_query($sql);
}

function get_binhluan($idsp) {

}
