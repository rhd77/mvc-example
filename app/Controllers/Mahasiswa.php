<?php namespace Controllers;
    use Models\Model_mhs;
    class Mahasiswa
    {
        public function __construct()
        {
            $this->mhs = new Model_mhs();
        }

        public function index()
        {
            require_once 'app/Views/index.php';
        }


        function show_data()
        {
            if(!isset($_GET['i']))
            {
                //jika tidak ada parameter id yang dikirim, maka akan menampilkan semua data yang ada
                $rs = $this->mhs->lihatData();
                require_once('app/Views/mhsList.php');
            }
            else
            {
                //ada parameter id yang dikirim, tampilkan detail dari salah satu data yang dipilih
                $rs = $this->mhs->lihatDataDetail($_GET['i']);
                require_once('app/Views/mhsDetail.php');
            }
        }

        function edit_data()
        {
            
            if(!isset($_GET['i']))
            {
                echo '<script type ="text/JavaScript">';  
                echo 'alert("ID tidak ditemukan")';  
                echo '</script>'; 
                $this->show_data();
            }
            else
            {
               $rs = $this->mhs->lihatDataDetail($_GET['i']);
                require_once('app/Views/edit.php');
            }
        }

        function update_data()
        {

            $nim =  $_POST['nim'];
            $nama = $_POST['nama'];

            if(!isset($_GET['i']))
            {
                echo '<script type ="text/JavaScript">';  
                echo 'alert("ID tidak ditemukan")';  
                echo '</script>'; 
                $this->show_data();
            }
            else
            {
                $rs = $this->mhs->updateData($nim,$nama,$_GET['i']);
               echo '<script type ="text/JavaScript">';  
               echo 'alert("Berhasil update")';  
               echo '</script>'; 
            }
        }


        function delete_data()
        {
            if(!isset($_GET['i']))
            {
                echo '<script type ="text/JavaScript">';  
                echo 'alert("ID Tidak ditemukan")';  
                echo '</script>'; 
                $this->show_data();
            }
            else
            {
               $rs = $this->mhs->deleteData($_GET['i']);
                echo '<script type ="text/JavaScript">';  
                echo 'alert("Data berhasil dihapus")';  
                echo '</script>'; 
                $this->index();
            }
        }

        function save()
        {
            $nim =  $_POST['nim'];
            $nama = $_POST['nama'];
            $id = $_POST['id'];

            //penyimpanan data ke model
            $this->mhs->simpanData($nim,$nama,$id);
            $this->index(); //controller dikembalikan ke method index setelah selesai mengakses method ini.
        }
    }