@include('layouts.footer')

@include('layouts.header')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/a.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/ilk.css') }}" type="text/css">
    <title></title>
  </head>
  <body>



    <div class="div1" >
    <ul ><left>
      <li><a href="/kayitol">Kayıt Ol</a></li>
      <li><a href="/ogrencigiris">Giriş Yap</a></li>
      <li><a href="/">Şifremi Unuttum</a></li>
    </ul>
  </div>

<form class="" action="{{route('kayit.store')}}" method="post">


      <div class="but" method='post'> <center>
          @csrf
        <input name="no"type="number" pattern="\d" size="50px" placeholder="Öğrenci No" > <br>
        <input name="ad"type="text" size="50px" placeholder="Ad"><br>
        <input name="soyad"type="text" size="50px" placeholder="Soyad"><br>
        <input name="no" type="password" size="50px" placeholder="Şifre"><br>
        <input type="password" size="50px" placeholder="Şifre Tekrarı"><br>
        <input name="email" type="email" size="50px" placeholder="E-posta"><br>
        <input name="telno" type="tel" size="50px" placeholder="Telefon"><br>
        <input type="text" pattern=“\d{11} size="50px" placeholder="TC Kimlik"><br>
        <input type="date" size="50px" placeholder="Doğum Tarihi"><br>
        <input type="text" size="50px" placeholder="Adres"><br>

</form>

        <select>
        <option> Sınıf Seçiniz </option>
        <option> Hazırlık </option>
        <option> 1.Sınıf </option>
        <option> 2.Sınıf </option>
        <option> 3.Sınıf </option>
        <option> 4.Sınıf </option>
      </select> <br>
      <select>
      <option>Üniversite Seçiniz </option>
      <option> Kocaeli Üniversitesi </option>
    </select> <br>
    <select>
    <option> Fakülte Seçiniz </option>
    <option> </option>
    <option> </option>
    <option> </option>
    <option>  </option>
    <option> </option>
  </select> <br>
  <select>
  <option> Bölüm Seçiniz </option>
  <option>  </option>
  <option>  </option>
  <option>  </option>
  <option>  </option>
  <option> </option>
</select> <br><br>



    <button type="button" name="onayla" class="submit" onclick="location='#'">  Kayıt Ol</button>
  </body>
  </div>

</html>
