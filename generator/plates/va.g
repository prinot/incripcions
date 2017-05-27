<?= $this->insert('overall/head') ?>
<body>
<section id="container" >
<?= $this->insert('overall/header')?>
<?= $this->insert('overall/sidebar-left') ?>
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Heading goes here..
                            <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>
                        <div class="panel-body">
                            <form id="{{view}}_form" role="form">
                                          <div class="alert hide" id="ajax_{{view}}"></div>
                                          <div class="form-group">
                                            <label class="cole">Ejemplo:</label>
                                            <input type="text" class="form-control form-input" name="ejemplo" placeholder="Escribe algo..." />
                                          </div>
                                          <div class="form-group">
                                            <button type="button" id="{{view}}" class="btn btn-primary">Enviar</button>
                                          </div>
                                        </form>
                        </div>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </section>
    </section>
</section>
<?= $this->insert('overall/footer') ?>
<?= $this->insert('overall/footer') ?>
<script src="views/app/js/{{view}}/{{view}}.js"></script>
</body>
</html>
