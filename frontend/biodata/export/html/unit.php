<?php
include '../../../../config/koneksi.php';
$no = 1;
$query = mysqli_query($db, "SELECT * FROM biodata ORDER BY unit ASC");
?>
<!DOCTYPE html>
<html class="light-style layout-menu-fixed" dir="ltr"
    data-theme="theme-default" data-assets-path="../../../assets/" data-template="vertical-menu-template-free">
<body><font face="Helvetica">
                        <table border=1 cellpadding=10>
                            <thead>
                                <tr>
                                <th style="text-align:center;" colspan=8> Data Per Unit </th>
                                </tr>
                                <tr>
                                <th>
                                No
                                </th>
                                <th>
                                Unit
                                </th>
                                <th>
                                Nama Lengkap
                                </th>
                                <th>
                                Nomor Induk Karyawan
                                </th>
                                <th>
                                Jabatan
                                </th>
                                <th>
                                Status Karyawan
                                </th>
                                <th>
                                ID Relawan
                                </th>
                                <th>
                                Stasus Relawan
                                </th></tr>
                            </thead>
                            <tbody>
                                <?php
                            while($row = mysqli_fetch_array($query)){
                                ?>
                                <tr>
                                    <td style="text-align:center;"><?= $no++ ?></td>
                                    <td style="text-align:center;"><?= $row['unit'] ?></td>
                                    <td style="text-align:center;"><?= $row['nama_lengkap'] ?></td>
                                    <td style="text-align:center;"><?= $row['nomor_induk_karyawan'] ?></td>
                                    <td style="text-align:center;"><?= $row['jabatan'] ?></td>
                                    <td style="text-align:center;"><?= $row['status_karyawan'] ?></td>
                                    <td style="text-align:center;"><?= $row['id_relawan'] ?></td>
                                    <td style="text-align:center;"><?= $row['status_relawan'] ?></td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                        </font>
                        </body>
                        </html>