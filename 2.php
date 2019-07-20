<style>
.red{
    color:red;
}
</style>
<form action="" method="post">
    <input type="text" id="username" name="username" placeholder="Username"> <br>
    <label for="username"><i class="red">*</i> Username merupakan kombinasi dari huruf kecil, huruf besar dan angka dengan panjang 5-9 karakter. <br> 
    <i class="red">*</i> Username tidak boleh diawali dengan angka / karakter special.</label> <br>
    <input type="text" id="password" name="password" placeholder="Password"> <br>
    <label for="password"><i class="red">*</i> merupakan kombinasi dari huruf kecil, huruf besar minimal satu karakter, angka minimal satu karakter, <br> 
    <i class="red">*</i> dan karakter spesial minimal satu karakter dan harus memiliki karakter simbol “=”  dan panjang minimal 8 karakter.</label> <br>
    <button type="submit" name="submit">Submit</button>
</form>
<?php
if(empty($_POST['username'])){
    
} else {
    $user = $_POST['username'];
    if(preg_match('/^(\D).{4,8}$/',trim($user))){
        if(preg_match('/^(\w)/',trim($user))){ //regex diawali dengan word character
            if(preg_match('/\w*[A-Z]/',trim($user))){ //harus mengandung 1 atau lebih huruf kapital
                echo "Format Username Benar $user <br> ";       
            } else {
                echo "Anda harus memasukkan huruf besar di Username";
            }
        } else {
            echo "Anda tidak boleh memasukkan spesial karakter di awal username";
        }
    } else {
        echo "Format username Salah <br>";
    }
}
if(empty($_POST['password'])){
    
} else {
    $pass = $_POST['password'];
    if(preg_match('/^.{8,}$/',trim($pass))){ // karakter minimal 8
        if(preg_match('/\w*[A-Z]/',trim($pass))){ //karakter harus mengandung 1 atau lebih huruf besar
            if(preg_match('/\w*[0-9]/',trim($pass))){ //harus mengandung 1 atau lebih angka
                if(preg_match('/\.*[!@#$%^&*(),.;~?":{}|<>_\/+=|-]/',trim($pass))){ //mengandung satu atau lebih karakter spesial
                    if(preg_match('/[=]/',trim($pass))){ //mengandung =
                        echo "Format Password Benar $pass <br>";
                    } else {
                        echo "Anda belum memasukkan karakter = di password";
                    }
                } else {
                    echo "Anda belum memasukkan karakter spesial di password";
                }
            } else {
                echo "Anda belum memasukkan Angka di password <br>";
            }
        } else {
            echo "Anda belum memasukkan huruf besar di password <br>";
        }
    } else {
        echo "Format Salah Jangan melebihi panjang karakter di password <br>";
    }
}
?>
