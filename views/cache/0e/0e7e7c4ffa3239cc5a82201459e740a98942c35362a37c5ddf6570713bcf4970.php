<?php

/* header.twig.html */
class __TwigTemplate_3d5e670958ace52988cf9c22808c35b87a0f47ebdd2e90b53f59c6afacac5fe3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"utf-8\" />
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["DIR_ASSETS"] ?? null), "html", null, true);
        echo "img/apple-icon.png\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["DIR_ASSETS"] ?? null), "html", null, true);
        echo "/img/favicon.png\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
    <title>";
        // line 9
        echo twig_escape_filter($this->env, ($context["titre"] ?? null), "html", null, true);
        echo "</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700,200\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\" />
    <!-- CSS Files -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["DIR_ASSETS"] ?? null), "html", null, true);
        echo "/css/bootstrap.min.css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["DIR_ASSETS"] ?? null), "html", null, true);
        echo "/css/now-ui-kit.css\" rel=\"stylesheet\" />
</head>

";
    }

    public function getTemplateName()
    {
        return "header.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  48 => 15,  39 => 9,  34 => 7,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"utf-8\" />
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{DIR_ASSETS}}img/apple-icon.png\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{DIR_ASSETS}}/img/favicon.png\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
    <title>{{ titre }}</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700,200\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\" />
    <!-- CSS Files -->
    <link href=\"{{DIR_ASSETS}}/css/bootstrap.min.css\" rel=\"stylesheet\" />
    <link href=\"{{DIR_ASSETS}}/css/now-ui-kit.css\" rel=\"stylesheet\" />
</head>

", "header.twig.html", "C:\\UwAmp\\www\\MVC-POO-SIMPLE\\views\\header.twig.html");
    }
}
