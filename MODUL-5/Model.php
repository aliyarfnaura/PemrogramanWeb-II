<?php
require("Koneksi.php");

function getData($tabel)
{
    global $conn;
    $stmt = $conn->query("SELECT * FROM $tabel");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function insertDataBuku($data)
{
    global $conn;
    $judul_buku = htmlspecialchars($data["judul_buku"]);
    $penulis = htmlspecialchars($data["penulis"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $tahun_terbit = htmlspecialchars($data["tahun_terbit"]);

    $query = "INSERT INTO buku (judul_buku, penulis, penerbit, tahun_terbit) 
              VALUES (:judul_buku, :penulis, :penerbit, :tahun_terbit)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':judul_buku', $judul_buku);
    $stmt->bindParam(':penulis', $penulis);
    $stmt->bindParam(':penerbit', $penerbit);
    $stmt->bindParam(':tahun_terbit', $tahun_terbit);
    return $stmt->execute();
}
function hapusDataBuku($id_buku)
{
    global $conn;
    $query = "DELETE FROM buku WHERE id_buku = :id_buku";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id_buku', $id_buku);
    return $stmt->execute();
}
function updateDataBuku($data)
{
    global $conn;
    $id_buku = $data["id_buku"];
    $judul_buku = htmlspecialchars($data["judul_buku"]);
    $penulis = htmlspecialchars($data["penulis"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $tahun_terbit = htmlspecialchars($data["tahun_terbit"]);

    $query = "UPDATE buku SET 
              judul_buku=:judul_buku,
              penulis=:penulis, 
              penerbit=:penerbit, 
              tahun_terbit=:tahun_terbit
              WHERE id_buku = :id_buku";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id_buku', $id_buku);
    $stmt->bindParam(':judul_buku', $judul_buku);
    $stmt->bindParam(':penulis', $penulis);
    $stmt->bindParam(':penerbit', $penerbit);
    $stmt->bindParam(':tahun_terbit', $tahun_terbit);
    return $stmt->execute();
}
function insertDataPeminjaman($data)
{
    global $conn;
    $tgl_pinjam = htmlspecialchars($data["tgl_pinjam"]);
    $tgl_kembali = htmlspecialchars($data["tgl_kembali"]);

    $query = "INSERT INTO peminjaman (tgl_pinjam, tgl_kembali) 
              VALUES (:tgl_pinjam, :tgl_kembali)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':tgl_pinjam', $tgl_pinjam);
    $stmt->bindParam(':tgl_kembali', $tgl_kembali);
    return $stmt->execute();
}
function hapusDataPeminjaman($id_peminjaman)
{
    global $conn;
    $query = "DELETE FROM peminjaman WHERE id_peminjaman = :id_peminjaman";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id_peminjaman', $id_peminjaman);
    return $stmt->execute();
}
function updateDataPeminjaman($data)
{
    global $conn;
    $id_peminjaman = $data["id_peminjaman"];
    $tgl_pinjam = htmlspecialchars($data["tgl_pinjam"]);
    $tgl_kembali = htmlspecialchars($data["tgl_kembali"]);

    $query = "UPDATE peminjaman SET 
              tgl_pinjam=:tgl_pinjam,
              tgl_kembali=:tgl_kembali
              WHERE id_peminjaman = :id_peminjaman";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id_peminjaman', $id_peminjaman);
    $stmt->bindParam(':tgl_pinjam', $tgl_pinjam);
    $stmt->bindParam(':tgl_kembali', $tgl_kembali);
    return $stmt->execute();
}
function insertDataMember($data)
{
    global $conn;
    $nama_member = htmlspecialchars($data["nama_member"]);
    $nomor_member = htmlspecialchars($data["nomor_member"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $tgl_mendaftar = htmlspecialchars($data["tgl_mendaftar"]);
    $tgl_terakhir_bayar = htmlspecialchars($data["tgl_terakhir_bayar"]);

    $query = "INSERT INTO member (nama_member, nomor_member, alamat, tgl_mendaftar, tgl_terakhir_bayar) 
              VALUES (:nama_member, :nomor_member, :alamat, :tgl_mendaftar, :tgl_terakhir_bayar)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':nama_member', $nama_member);
    $stmt->bindParam(':nomor_member', $nomor_member);
    $stmt->bindParam(':alamat', $alamat);
    $stmt->bindParam(':tgl_mendaftar', $tgl_mendaftar);
    $stmt->bindParam(':tgl_terakhir_bayar', $tgl_terakhir_bayar);
    return $stmt->execute();
}
function hapusDataMember($id_member)
{
    global $conn;
    $query = "DELETE FROM member WHERE id_member = :id_member";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id_member', $id_member);
    return $stmt->execute();
}
function updateDataMember($data)
{
    global $conn;
    $id_member = $data["id_member"];
    $nama_member = htmlspecialchars($data["nama_member"]);
    $nomor_member = htmlspecialchars($data["nomor_member"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $tgl_mendaftar = htmlspecialchars($data["tgl_mendaftar"]);
    $tgl_terakhir_bayar = htmlspecialchars($data["tgl_terakhir_bayar"]);

    $query = "UPDATE member SET 
              nama_member=:nama_member,
              nomor_member=:nomor_member,
              alamat=:alamat,
              tgl_mendaftar=:tgl_mendaftar,
              tgl_terakhir_bayar=:tgl_terakhir_bayar
              WHERE id_member = :id_member";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id_member', $id_member);
    $stmt->bindParam(':nama_member', $nama_member);
    $stmt->bindParam(':nomor_member', $nomor_member);
    $stmt->bindParam(':alamat', $alamat);
    $stmt->bindParam(':tgl_mendaftar', $tgl_mendaftar);
    $stmt->bindParam(':tgl_terakhir_bayar', $tgl_terakhir_bayar);
    return $stmt->execute();
}