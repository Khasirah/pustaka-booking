<style>
    table {
        font-family: Arial, Helvetica, sans-serif;
    }
    
    .center {
        margin-left: auto;
        margin-right: auto;
        width: 100%;
    }

    .t-header {
        background-color: bisque;
    }

    .align-center {
        text-align: center;
    }

    .text-bold {
        font-weight: bold;
    }

    .text-italic {
        font-style: italic;
    }
</style>    

<table class="center">

    <?php
    foreach ($useraktif as $u) {
        ?>
        
        <tr>
            <th>Bukti Booking</th>
        </tr>
    <tr>
        <td>
            <div>
                <p>No Booking: <span class="text-bold"><?php echo($items[0]['id_booking']); ?></span></p>
                <p>Nama Anggota: <?= $u->nama; ?></p>
    <?php } ?>
                <table class="center" border="1" style="
                    table-layout: auto;
                    border-collapse: collapse;
                ">
                    <tr class="t-header">
                        <th>No.</th>
                        <th>Buku</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Tahun</th>
                    </tr>
                    <?php
                    $no = 1;
                    foreach ($items as $i) {
                        ?>
                        <tr>
                            <td>
                                <?= $no; ?>
                            </td>
                            <td>
                                <?= $i['judul_buku']; ?>
                            </td>
                            <td>
                                <?= $i['pengarang']; ?>
                            </td>
                            <td>
                                <?= $i['penerbit']; ?>
                            </td>
                            <td>
                                <?= $i['tahun_terbit']; ?>
                            </td>
                        </tr>
                        <?php $no++;
                    } ?>
                </table>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <br>
        </td>
    </tr>
    <tr>
        <td class="align-center text-italic">
            Generated on <?= date('d M Y H:i:s'); ?>
        </td>
    </tr>
</table>