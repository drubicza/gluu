<?php
print "Nabila Tools - Gluu\n";
print "Thanks To : Muhammad Ikhsan Aprilyadi\n\n";

$operator[0]  = "62817";
$operator[1]  = "62818";
$operator[2]  = "62819";
$operator[3]  = "62859";
$operator[4]  = "62877";
$operator[5]  = "62878";
$operator[6]  = "62896";
$operator[7]  = "62897";
$operator[8]  = "62898";
$operator[9]  = "62899";
$operator[10] = "62811";
$operator[11] = "62812";
$operator[12] = "62813";
$operator[13] = "62821";
$operator[14] = "62822";
$operator[15] = "62823";
$operator[16] = "62852";
$operator[17] = "62851";
$operator[18] = "62855";
$operator[19] = "62856";
$operator[20] = "62857";
$operator[21] = "62858";
$operator[22] = "62814";
$operator[23] = "62815";
$operator[24] = "62816";

$kartu    = $operator[rand(0,24)];
$get      = file_get_contents("https://api.randomuser.me");
$j        = json_decode($get,true);
$rand     = rand(0,999999);
$getName  = $j["results"][0]["name"]["first"];
$getName2 = $j["results"][0]["name"]["last"];
$email    = $getName."404@gmail.com";
$pass     = "Nabila".rand(0,999);
$huruf    = "012345678910";
$angka    = "";

for ($i = 0; $i < 8; $i++) {
    $angka.= $huruf[mt_rand(0,strlen($huruf)-1)];
}

echo "Reff url : ";
$reff = trim(fgets(STDIN));
echo "[+] Mencoba Direct Url\n\n";
echo "Nama Pengguna : $getName $getName2\n";
echo "E-mail  : $email\n";
echo "Kata Sandi : $pass\n\n";
echo "[-] Kode Promo get URL\n";
echo "[+] Batas Berbagi Data : Unlimited\n";
echo "[√] Lanjut\n";
echo "[-] No HP : $kartu$angka\n";
echo "[-] OTP : $rand\n";
echo "[+] Berhasil Mendaftar\n";
echo "[+] Mencoba Login\n";
echo "[+] Login Berhasil\n\n";
echo "\nIngin mencoba lagi? (y/n): ";
$select = trim(fgets(STDIN));

if ($select == "y") {
    echo "\n\n";
    echo "Cie kena prank Muhammad Ikhsan ya maaf :v\n";
}
?>
