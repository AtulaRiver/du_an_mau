<?php

function insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan)
{
    $sql = "insert into binhluan(noidung, iduser, idpro, ngaybinhluan) values('$noidung', '$iduser', '$idpro', '$ngaybinhluan')";
    pdo_execute($sql);
}

function loadall_binhluan($idpro)
{

    $sql = "select * from binhluan where 1";
    if ($idpro > 0) {
        $sql .= " and idpro = '" . $idpro . "'";
    } else {
        $sql .= " order by id desc";
    }

    return $listbinhluan = pdo_query($sql);
}
function loadall_binhluan_taikhoan($idpro)
{

    $sql = "select * from binhluan bl join taikhoan tk on bl.iduser = tk.id where 1";
    if ($idpro > 0) {
        $sql .= " and idpro = '" . $idpro . "'";
    } else {
        $sql .= " order by id desc";
    }

    return $listbinhluan = pdo_query($sql);
}

function delete_binhluan($id)
{
    $sql = "delete from binhluan where id = " . $id;
    pdo_query($sql);
}

function loadall_binhluan_bieudo($idpro)
{

    $sql = "select *, count(bl.id) 'soBinhLuan' from sanpham sp
    join binhluan bl on bl.idpro = sp.id
    where 1
    group by sp.id
    order by sp.id desc    
    ";
    return pdo_query($sql);

}
//      }   else    {   return      false; }    //