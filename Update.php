<?php
include 'ConnectDB.php';

$id = $_GET['id'];

if(isset( $_POST['simpan'] )){
    $stambuk = $_POST['stambuk'];
    $nama = $_POST['nama'];

    $sql = "UPDATE mahasiswa
                SET stambuk='$stambuk', nama='$nama' WHERE id='$id' ";

    if( mysqli_query($connect, $sql) ) {
        header('Location: Read.php');
    }else{
        echo "Edit Data Error!!";
    }
}

// menampilkan data di form

$sql = "SELECT * FROM mahasiswa WHERE id='$id' ";
$hasil = mysqli_query($connect, $sql);
$data = mysqli_fetch_assoc($hasil);

?>
<!--we have our html form here where new user information will be entered-->
<form action='' method='post' border='0'>
    <table align="center">
        <tr>
            <td>Stambuk</td>
            <td><input type='text' name='stambuk' value='<?php echo $data['stambuk']  ?>' /></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type='text' name='nama' value='<?php echo $data['nama']  ?>' /></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type='submit' value='Update' name='simpan' />
            </td>
        </tr>
        </table>
    </form>
