<?php

function judulAplikasi(){
    return "📚 Sistem Pendataan Buku";
}

function statusStok($stok){

    if($stok > 0){
        return "✅ Tersedia";
    }else{
        return "❌ Kosong";
    }

}

?>