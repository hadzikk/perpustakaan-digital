<?php 
    include 'conn.php';

    $database = mysqli_query($conn, "SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/dasboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');
    * {
        margin: 0; padding: 0;
        box-sizing: border-box;
        font-family: 'Josefin Sans', sans-serif;
    }

    .sidebar {
    position: fixed;
    width: 250px;
    height: 600px;
    box-shadow: 1px 1px 5px #000;
    background-color: #000;
    }

    .sidebar .logo p{
        font-size: 2rem;
        text-align: center;
        color: #fff;
        padding: 10px 0px;
    }

    .sidebar .navigation ul li{
        background-color: #000;
        padding: 10px 20px;
        margin: 0px 10px;
        border-radius: 5px;
    }

    .sidebar .navigation ul li a{
        color: #fff;
        text-decoration: none;
    }

    .sidebar .navigation ul .active {
        background-color: #fff;
    }

    .sidebar .navigation ul li .active {
        color: #000;
    }

    .sidebar .navigation ul li:hover {
        background-color: #fff;
    }

    .sidebar .navigation ul li:hover a {
        color: #000;
    }
    
    .content {
        padding: 0 0 0 250px;
    }

    .content table{
        border: none;
        border-collapse: collapse;
    }

    .content table tr td{
        padding: 10px 20px;
        background-color: #e9eef2;
    }

    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo">
        <p><i class="fa-solid fa-book-open-reader"></i>  Perpustakaan</p>
        </div>
        <div class="navigation">
        <ul>
            <li class="active">
                <a href="" class="active"><i class="fa-solid fa-book"></i> Data Buku</a>
            </li>
            <li>
                <a href=""><i class="fa-solid fa-people-group"></i> Data Staff</a>
            </li>
        </ul>
        </div>
    </div>

    <div class="content">
        <table>
            <tr>
                <th>No</th>
                <th>Data</th>
                <th>Kategori</th>
                <th>Tahun</th>
                <th>Penerbit</th>
            </tr>
            <?php $i = 1;?>
            <?php foreach($database as $data) :?>
            <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $data["nama_buku"];?></td>
                <td><?php echo $data["kategori_buku"];?></td>
                <td><?php echo $data["tahun_terbit_buku"];?></td>
                <td><?php echo $data["penerbit_buku"];?></td>
            </tr>
            <?php $i++;?>
            <?php endforeach;?>
        </table>
    </div>
</body>
</html>