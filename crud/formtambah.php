<?php 
    include 'connect.php'; 

    $edit= false;

    if (! empty($_GET['no'])) {
        $sql = 'SELECT * FROM rdpu WHERE no="'.$_GET['no'].'"';

        $query= mysqli_query($conn, $sql);

        if (mysqli_num_rows($query)) {
            $edit = true;
            $row = mysqli_fetch_object($query);
        }
    }

    
?>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<h1 class="container mt-3 mb-3">Form Data</h1>
<form action="savedata.php" method="POST">
    <div class="container">
    <div class="mb-3">
        <!-- <label class="form-label">No</label>    -->
        <input type="hidden" class="form-control" name="no" placeholder="no" value="<?php if($edit) echo $row->no;?>" >
        <input type="hidden" name="id" value="<?php if($edit) echo $row->no;?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php if($edit) echo $row->nama;?>" required>
    </div>

    <div class="mb-3">
        <label class="form-label">jenis</label>
        <input type="text" class="form-control" name="jenis" placeholder="Jenis" value="<?php if($edit) echo $row->jenis;?>" required>
    </div>

    <div class="mb-3">
        <label class="form-label">1 Tahun</label>
        <input type="text" class="form-control" name="satuthn" placeholder="1 Tahun" value="<?php if($edit) echo $row->satuthn;?>" required>
    </div>

    <div class="mb-3">
        <label class="form-label">3 Tahun</label>
        <input type="text" class="form-control" name="tigathn" placeholder="3 Tahun" value="<?php if($edit) echo $row->tigathn;?>" required>
    </div>
    
    <div class="mb-3">
        <input type="submit" value="Simpan" class="btn btn-sm btn-success">
    </div>
    </div>
</form>

<?php include 'footer.php'; ?>