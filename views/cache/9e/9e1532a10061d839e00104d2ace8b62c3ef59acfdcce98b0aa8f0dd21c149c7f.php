<?php

/* actu.html */
class __TwigTemplate_67970608068cc2ba4b1056b539f90faf91b3226fd2fe31e15d5ed62b93470ac9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '__internal_03b94b08f4b8b5ce63d0399bdc86b849a1c0dc537c13a2db175bc757710f4f18' => [$this, 'block___internal_03b94b08f4b8b5ce63d0399bdc86b849a1c0dc537c13a2db175bc757710f4f18'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE>
<html>
<head>
    <title>Ma première page avec du style : ";
        // line 4
        echo twig_escape_filter($this->env, ($context["titre"] ?? null), "html", null, true);
        echo "</title>
</head>

<body>

<!-- Menu de navigation du site -->
<ul class=\"navbar\">
    <li><a href=\"index.php?page=home\">Home page</a>
    <li><a href=\"index.php?page=actu\">Actu</a>
    <li><a href=\"index.php?page=blog\">Blog</a>
    <li><a href=\"index.php?page=connect\">Connexion</a>
</ul>

<!-- Contenu principal -->
<h1>Page actu</h1>

<p>Bienvenue sur ma page avec du style!</p>

<p>Il lui manque des images, mais au moins, elle a du style. Et elle a des liens, même s'ils ne mènent nulle part...</p>
    &hellip;

<p>Je devrais étayer, mais je ne sais comment encore.
    ";
        // line 26
        echo twig_escape_filter($this->env, twig_upper_filter($this->env,         $this->renderBlock("__internal_03b94b08f4b8b5ce63d0399bdc86b849a1c0dc537c13a2db175bc757710f4f18", $context, $blocks)), "html", null, true);
        echo "</p>
    <!-- Signer et dater la page, c'est une question de politesse! -->
<address>Fait le 5 avril 2004<br>
    par moi.</address>

</body>
</html>";
    }

    public function block___internal_03b94b08f4b8b5ce63d0399bdc86b849a1c0dc537c13a2db175bc757710f4f18($context, array $blocks = [])
    {
        echo "Hello ";
        echo twig_escape_filter($this->env, ($context["titre"] ?? null), "html", null, true);
        echo "! ";
        echo twig_escape_filter($this->env, ($context["article"] ?? null), "html", null, true);
        echo " ";
    }

    public function getTemplateName()
    {
        return "actu.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 26,  29 => 4,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE>
<html>
<head>
    <title>Ma première page avec du style : {{ titre }}</title>
</head>

<body>

<!-- Menu de navigation du site -->
<ul class=\"navbar\">
    <li><a href=\"index.php?page=home\">Home page</a>
    <li><a href=\"index.php?page=actu\">Actu</a>
    <li><a href=\"index.php?page=blog\">Blog</a>
    <li><a href=\"index.php?page=connect\">Connexion</a>
</ul>

<!-- Contenu principal -->
<h1>Page actu</h1>

<p>Bienvenue sur ma page avec du style!</p>

<p>Il lui manque des images, mais au moins, elle a du style. Et elle a des liens, même s'ils ne mènent nulle part...</p>
    &hellip;

<p>Je devrais étayer, mais je ne sais comment encore.
    {% filter upper %}Hello {{ titre }}! {{ article }} {% endfilter %}</p>
    <!-- Signer et dater la page, c'est une question de politesse! -->
<address>Fait le 5 avril 2004<br>
    par moi.</address>

</body>
</html>", "actu.html", "C:\\UwAmp\\www\\MVC-POO-SIMPLE\\views\\actu.html");
    }
}
