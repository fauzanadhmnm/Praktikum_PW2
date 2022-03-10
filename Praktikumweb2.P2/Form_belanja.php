<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Form Belanja</title>
</head>

<body>
    <div class="container">
        <h3 class="md-0 mt-5">Belanja Online</h3>
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="row">
                    <div class="col-md-8">
                        <form method="POST" action="Form_belanja.php">
                            <div class="form-group row">
                                <label for="customer" class="col-4 col-form-label">Customer</label>
                                <div class="col-8">
                                    <input id="customer" name="customer" placeholder="Nama Costumer" type="text" class="form-control" method="POST">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4">Pilih Produk</label>
                                <div class="col-8">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV">
                                        <label for="produk_0" class="custom-control-label">TV</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas">
                                        <label for="produk_1" class="custom-control-label">Kulkas</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci">
                                        <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                                <div class="col-4">
                                    <input id="jumlah" name="jumlah" type="text" class="form-control" placeholder="Jumlah">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-4 col-8 ">
                                    <input type="submit" value="Kirim" name="proses" class="col-2 form-control bg-success" style="color: white;">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <div class="list-group">
                            <a class="list-group-item list-group-item-action active" style="color: white;">Home</a>
                            <div class="list-group-item">
                                TV : 4.200.0000
                            </div>
                            <div class="list-group-item">
                                Kulkas : 3.100.000
                            </div>
                            <div class="list-group-item">
                                Mesin Cuci : 3.800.000
                            </div>
                            <a class="list-group-item list-group-item-action active" style="color: white;">Harga Dapat Berubah Setiap Saat </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-3">
            <?php
            $proses = $_POST["proses"];
            $customer = $_POST["customer"];
            $produk = $_POST["produk"];
            $jumlah = $_POST["jumlah"];

            echo "Nama Customer : " . $customer;
            echo "<br/>";
            echo "Produk Pilihan : " . $produk;
            echo "<br/>";
            echo "Jumlah Beli : " . $jumlah;
            echo "<br/>";
            echo "Total Belanja : Rp.";

            $TV = 4200000;
            $kulkas = 3100000;
            $mesin_cuci = 3800000;
            $salah = 'Tidak Diketahui';

            if ($produk == 'TV') {
                echo $jumlah * $TV;
            } elseif ($produk == 'Kulkas') {
                echo $jumlah * $kulkas;
            } elseif ($produk == 'Mesin Cuci') {
                echo $jumlah * $mesin_cuci;
            } else {
                echo $salah;
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>