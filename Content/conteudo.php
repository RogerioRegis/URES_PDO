<title>Categorias</title>

<!--------------->
<div id="content">
    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
        <li class="active"><a href="#Categoria1" data-toggle="tab"><img src="image/icons/zoo_blog.png"><br/>Categoria 1</a></li>
        <li><a href="#Categoria2" data-toggle="tab"><img src="image/icons/zoo_product.png"><br/>Categoria 2</a></li>
        <li><a href="#Categoria3" data-toggle="tab"><img src="image/icons/zoo_download.png"><br/>Categoria 3</a></li>
        <li><a href="#Categoria4" data-toggle="tab"><img src="image/icons/zoo_business.png"><br/>Categoria 4</a></li>
        <li><a href="#Categoria5" data-toggle="tab"><img src="image/icons/zoo_pages.png"><br/>Categoria 5</a></li>
    </ul>
    <div id="my-tab-content" class="tab-content">
        <div class="tab-pane active" id="Categoria1">
            <h1>PDO</h1>
            <p href = "www.pdo.com" target="_blank"<a>PDO</a></p>
        </div>
        <div class="tab-pane" id="Categoria2">
            <h1>Orange</h1>
            <p>orange orange orange orange orange</p>
        </div>
        <div class="tab-pane" id="Categoria3">
            <h1>Yellow</h1>
            <p>yellow yellow yellow yellow yellow</p>
        </div>
        <div class="tab-pane" id="Categoria4">
            <h1>Green</h1>
            <p>green green green green green</p>
        </div>
        <div class="tab-pane" id="Categoria5">
            <h1>Blue</h1>
            <p>blue blue blue blue blue</p>
        </div>
    </div>
</div>

<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('#tabs').tab();
    });
</script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>

<!------------------->