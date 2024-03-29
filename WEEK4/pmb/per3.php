<?php
include_once('navbar.php');
include_once('sidebar.php');
?>
<!-- konten atau main -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Praktek Pertemuan 3</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pertemuan Ketiga</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
    <body>
    <h4 class="text-center">Form Registrasi Data science<h4>
    <div class="container">
        <form method="POST" action="per3.php" >
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="text1" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <input id="text" name="nim" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="L"> 
        <label for="jk_0" class="custom-control-label">Laki-Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="P"> 
        <label for="jk_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="studi" class="col-4 col-form-label">Program Studi</label> 
    <div class="col-8">
      <select id="studi" name="studi" class="custom-select">
        <option value="TI">Teknik Informatika</option>
        <option value="SI">Sistem Informasi</option>
        <option value="BD">Bisnis Digital</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Skill</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_0" type="checkbox" class="custom-control-input" value="html"> 
        <label for="skill[]_0" class="custom-control-label">HTML</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_1" type="checkbox" class="custom-control-input" value="css"> 
        <label for="skill[]_1" class="custom-control-label">CSS</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_2" type="checkbox" class="custom-control-input" value="javascript"> 
        <label for="skill[]_2" class="custom-control-label">JavaScript</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_3" type="checkbox" class="custom-control-input" value="boostrap"> 
        <label for="skill[]_3" class="custom-control-label">Bootstrap</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_4" type="checkbox" class="custom-control-input" value="php"> 
        <label for="skill[]_4" class="custom-control-label">PHP</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_5" type="checkbox" class="custom-control-input" value="python"> 
        <label for="skill[]_5" class="custom-control-label">Python</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_6" type="checkbox" class="custom-control-input" value="java"> 
        <label for="skill[]_6" class="custom-control-label">Java</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="text1" name="email" type="email" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
    </div>

    
</body>
</html>

<?php
//ambil data yang di inputkan user berdasarkan unik nmae nya
//fungsi isset() di gunakan untuk memeriksa apakah suatu variable sudah di sisi & sudsh 
function predikat($nilai){
          if( $nilai >=100 AND $nilai <=170){
            return "sangat baik";
          }
          elseif ($nilai >=60 AND $nilai <=100) {
            return "baik";
          }
          elseif ($nilai >=40 AND $nilai <=60){
            return "cukup";
          }
          elseif ($nilai >=0 AND $nilai <=40){
            return "kurang";
        }
        else {
          "tidak memadai";
        }
      }
if (isset($_POST['submit'])){
    $nama =$_POST['nama'];
    $nim =$_POST['nim'];
    $jk =$_POST['jk'];
    $studi =$_POST['studi'];
    $skill =$_POST['skill'];
    $email =$_POST['email'];
    $nilai = 0;

    foreach($skill as $data){
        switch ($data){
            case 'html' :
                $nilai += 10;
                break;
            case 'css' :
                $nilai += 10;
                break;
            case 'javascrip' :
                $nilai += 20;
                break;
            case 'boostrap' :
                $nilai += 20;
                break;
            case 'php' :
                $nilai += 30;
                break;
            case 'python' :
                $nilai += 30;
                break;
            case 'java' :
                $nilai += 50;
                break;
            default :
            $nilai +=0;
            break;
        }
        
    }
  }
$predikat = predikat($nilai);

?>

<?php
//cetak hasil inputan user 
echo "<h4>informasi yang di anda kirim : </h4>";
echo "<br/>Nama : $nama";
echo "<br/>NIM : $nim";
echo "<br/>email : $email";
echo "<br/> Jenis Kelamin : $jk";
echo "<br/> Program Studi : $studi";
echo "<br/> Skill :";

foreach ($skill as $data){
    echo $data;
}
echo "<br/> Skor Sill : $nilai";  
echo $predikat;
?>

    </section>
    </div>
<?php
include_once('footer.php');
?>