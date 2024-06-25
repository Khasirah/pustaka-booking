<html>

<head>
    <title>Form Input Data Siswa</title>
</head>

<body>
    <center>
        <form action="<?= base_url('lat7/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Siswa
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>Nama :</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama" placeholder="Masukkan nama anda">
                    </td>
                </tr>
                <tr>
                    <td>NIS</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nis" id="nis" placeholder="Masukkan NIS anda">
                    </td>
                </tr>
                <tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="kelas" id="kelas" placeholder="Masukan kelas anda">
                    </td>
                </tr>

                
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td> <input type="date" name='tanggal'></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="tempat" id="tempat" placeholder="Masukan tempat lahir anda" cols="30" rows="5">
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="alamat" id="alamat" placeholder="Masukan alamat anda">
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td> <input type="radio" name="jnskel" value = "Laki" id="laki"> Laki-Laki <br>
                        <input type="radio" name="jnskel" value= "Perempuan" id="perempuan"> Perempuan <br>
                    </td>
                </tr>


                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>
                        <select name="agama" id="agama">
                            <option value="">Pilih Agama Anda</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Konghuchu">Konghuchu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>