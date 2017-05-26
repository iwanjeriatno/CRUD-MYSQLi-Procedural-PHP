<html>
<head>
    <title>CRUD-MYSQLi-Procedural-PHP</title>
</head>
<body>
    <?php
        include 'ConnectDB.php';

        $sql = "SELECT * FROM mahasiswa";
        $hasil = mysqli_query($connect, $sql);
        $jumlah_data = $hasil->num_rows;
    ?>


<?php
    if( $jumlah_data > 0){
?>
<table border='1' align='center'>
    <caption>
        <a href='Create.php'>Tambah Data</a>
    </caption>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Stambuk</th>
        <th>Action</th>
    </tr>
<?php
    while( $data = mysqli_fetch_assoc($hasil) ){

        echo '<tr>';
            echo '<td>'.$data['id'].'</td>';
            echo '<td>'.$data['nama'].'</td>';
            echo '<td>'.$data['stambuk'].'</td>';
            echo '<td>';
                echo '<a href="Update.php?id='.$data['id'].'">Edit</a>';
                 echo '|';
                echo '<a href=Delete.php?id='.$data['id'].'">Delete</a>';
            echo '</td>';
        echo '</tr>';

    }
}
?>
</table>

</body>
</html>
