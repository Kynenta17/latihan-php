<?php
    if (isset($_POST['input'])) {
        $nama = $_POST['nama'];
        $nis = $_POST['nomor'];
        $alamat = $_POST['alamat'];
        $jk = $_POST['jeniskelamin'];
        $agama = $_POST['agama'];
        $sekolah = $_POST['sekolah'];
        $email = $_POST['email'];
        $pengajar = $_POST['pengajar'];
        $nilai = $_POST['nilai'];
        echo "Nama Anda: <b>$nama</b><br>";
        echo "Nomor NIS Anda: <b>$nis</b><br>";
        echo "Alamat Anda: <b>$alamat</b><br>";
        echo "Jenis kelamin Anda: <b>$jk</b><br>";
        echo "Agama Anda: <b>$agama</b><br>";
        echo "Sekolah Anda: <b>$sekolah</b><br>";
        echo "Email Anda: <b>$email</b><br>";
        echo "Pengajar Anda: <b>$pengajar</b><br>";
        echo "Mata pelajaran yang Anda sukai:<br>";
            if (isset($_POST['mapel1'])) {
                echo "#" . $_POST['mapel1'] . "<br>";
            }
            if (isset($_POST['mapel2'])) {
                echo "#" . $_POST['mapel2'] . "<br>";
            }
            if (isset($_POST['mapel3'])) {
                echo "#" . $_POST['mapel3'] . "<br>";
            }
            if (isset($_POST['mapel4'])) {
                echo "#" . $_POST['mapel4'] . "<br>";
            }
            if (isset($_POST['mapel5'])) {
                echo "#" . $_POST['mapel5'] . "<br>";
            }
            if ($nilai>=25) {
                echo "Nilai Anda: <b>$nilai</b> (Excellent!)<br>";
            }
            if ($nilai<25) {
                echo "Nilai Anda: <b>$nilai</b> (Worst!)<br>";
            }
        }
?>