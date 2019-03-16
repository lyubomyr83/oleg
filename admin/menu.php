
<nav class="navbar navbar-expand-md navbar-light bg-light mb-4 menu">
    <a class="navbar-brand" href="#"><img src="../img/logo.png" width="30"  alt="..."> Навигация</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav  mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="?page=exit""><?=$_SESSION['loged']?> | Выход <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=list">Список страниц</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=add">Добавить страницу</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../index.php">На сайт</a>
            </li>
        </ul>
    </div>
</nav>