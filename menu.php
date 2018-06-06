
<nav class="navbar navbar-expand-lg  navbar-dark ">
  <div class="container">
    <a title='Tworzenie i wysyłanie pliku JPK' class="navbar-brand text-bold" href="./">jpkprogram.pl</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNab" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
      <div class="navbar-nav d-flex justify-content-end w-100">
        <a title="Jednolity Plik Kontrolny"class="nav-item nav-link <?php echo ($_SERVER['REQUEST_URI']=='/jednolity-plik-kontrolny')? 'active': '' ?>" href="/jednolity-plik-kontrolny">Jednolity Plik Kontrolny</a>
        <a title="Tworzenie pliku JPK"class="nav-item nav-link <?php echo ($_SERVER['REQUEST_URI']=='/tworzenie-jpk')? 'active': '' ?>" href="/tworzenie-jpk">Tworzenie JPK</a>
        <a title="Program do wysyłania pliku JPK"class="nav-item nav-link <?php echo ($_SERVER['REQUEST_URI']=='/program-do-wysylania-jpk')? 'active': '' ?>" href="/program-do-wysylania-jpk">Program do wysyłania pliku JPK</a>
      </div>
    </div>
  </div>
</nav>
