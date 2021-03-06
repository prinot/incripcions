<?php

/* overall/register.twig */
class __TwigTemplate_f443bce35cb8b293dcd56a70dbd93ac3849014e82c8893d7002dc3811c23ee9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"modal fade\" id=\"registro\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\" id=\"myModalLabelReg\">Registro</h4>
      </div>
      <div class=\"modal-body\">
        <form role=\"form\" enctype=\"application/x-www-form-urlencoded\" id=\"register_form\">

          <div class=\"alert hide\" id=\"ajax_register\"></div>

          <div class=\"row\">
            <div class=\"col-sm-12 col-md-6\">
              <div class=\"form-group\">
                <label>Usuario:</label>
                <input type=\"text\" name=\"user\" class=\"form-control\" required=\"\" />
              </div>
            </div>
            <div class=\"col-sm-12 col-md-6\">
              <div class=\"form-group\">
                <label>Email:</label>
                <input type=\"email\" name=\"email\" class=\"form-control\" required=\"\" />
              </div>
            </div>

            <div class=\"col-sm-12 col-md-6\">
              <div class=\"form-group\">
                <label>Contraseña:</label>
                <input type=\"password\" name=\"pass\" class=\"form-control\" required=\"\" />
              </div>
            </div>

            <div class=\"col-sm-12 col-md-6\">
              <div class=\"form-group\">
                <label>Teléfono:</label>
                <input type=\"tel\" name=\"telefono\" class=\"form-control numeric\" required=\"\" />
              </div>
            </div>

          </div>

        </form>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-sm btn-default\" data-dismiss=\"modal\">Cerrar</button>
        <button type=\"button\" id=\"register\" class=\"btn btn-sm btn-primary\">Registrarme</button>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "overall/register.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade\" id=\"registro\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\" id=\"myModalLabelReg\">Registro</h4>
      </div>
      <div class=\"modal-body\">
        <form role=\"form\" enctype=\"application/x-www-form-urlencoded\" id=\"register_form\">

          <div class=\"alert hide\" id=\"ajax_register\"></div>

          <div class=\"row\">
            <div class=\"col-sm-12 col-md-6\">
              <div class=\"form-group\">
                <label>Usuario:</label>
                <input type=\"text\" name=\"user\" class=\"form-control\" required=\"\" />
              </div>
            </div>
            <div class=\"col-sm-12 col-md-6\">
              <div class=\"form-group\">
                <label>Email:</label>
                <input type=\"email\" name=\"email\" class=\"form-control\" required=\"\" />
              </div>
            </div>

            <div class=\"col-sm-12 col-md-6\">
              <div class=\"form-group\">
                <label>Contraseña:</label>
                <input type=\"password\" name=\"pass\" class=\"form-control\" required=\"\" />
              </div>
            </div>

            <div class=\"col-sm-12 col-md-6\">
              <div class=\"form-group\">
                <label>Teléfono:</label>
                <input type=\"tel\" name=\"telefono\" class=\"form-control numeric\" required=\"\" />
              </div>
            </div>

          </div>

        </form>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-sm btn-default\" data-dismiss=\"modal\">Cerrar</button>
        <button type=\"button\" id=\"register\" class=\"btn btn-sm btn-primary\">Registrarme</button>
      </div>
    </div>
  </div>
</div>
", "overall/register.twig", "/var/www/html/proyecto-biblioteca-ocrend/templates/twig/overall/register.twig");
    }
}
