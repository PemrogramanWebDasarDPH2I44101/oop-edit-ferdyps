<?php
    class mahastudent{
        private $conn;

        public function __construct(){
            $server= "localhost";
            $user  = "root";
            $pass  = "";
            $db    = "webdas";
            $this->conn = mysqli_connect($server,$user,$pass,$db);
        }
        public function tambahdata(){
            $nama = $_POST['nama'];
            $nim = $_POST['nim'];
            $tanggal = $_POST['tanggal'];
            $sql = "INSERT INTO mahasiswa (nama,nim,tgl_lahir) VALUES ('$nama','$nim','$tanggal')";
            if (mysqli_query($this->conn,$sql)) {
                ?>
                <script>
                    alert("Data berhasil diinput");
                    location="index.php";
                </script>
                <?php
            }
        }
        public function hapusdata(){
            $nim = $_GET['hapus'];
            $sql = "DELETE FROM mahasiswa WHERE nim=$nim";
            mysqli_query($this->conn,$sql);
        }
        public function lihatdata(){
            $sql = "SELECT * FROM mahasiswa";
            return mysqli_query($this->conn,$sql);
        }
        public function datamhs($nim){
            $sql = "SELECT * FROM mahasiswa WHERE nim='$nim'";
            return mysqli_query($this->conn,$sql);
        }

        public function editdata(){
            $nama = $_POST['nama'];
            $nim = $_POST['nim'];
            $tanggal = $_POST ['tanggal'];
            $sql = "UPDATE mahasiswa SET nama='$nama',tgl_lahir='$tanggal' WHERE nim='$nim'";
            mysqli_query($this->conn,$sql);         
        }
    }
    $mahastudent = new mahastudent();
    if (isset($_GET['tambah_data'])) {
        $mahastudent -> tambahdata();
    }
    if (isset($_GET['hapus'])) {
        $mahastudent->hapusdata();
        header("location:data.php");
    }
    if (isset($_GET['edit_data'])) {
        $mahastudent->editdata();
        ?>
            <script>
                alert("Data berhasil diedit");
                location="data.php";
            </script>
        <?php
    }
?>
