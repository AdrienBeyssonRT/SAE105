<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* python/index.html.twig */
class __TwigTemplate_5ae04ccc003f3ac6a179531cd9c7f3b8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "python/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "python/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>Résultat</title>
</head>
<body>
    <h1>Résultat du Code Python</h1>
    <button id=\"runPythonButton\">Exécuter le Code Python</button>
    <div id=\"resultContainer\"></div>

    <script>
        document.getElementById('runPythonButton').addEventListener('click', function () {
            // Effectuer une requête asynchrone vers le serveur Symfony
            fetch('/run-python')
                .then(response => response.json())
                .then(data => {
                    // Afficher le résultat dans le conteneur
                    document.getElementById('resultContainer').innerText = data.result;
                });
        });
    </script>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "python/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <title>Résultat</title>
</head>
<body>
    <h1>Résultat du Code Python</h1>
    <button id=\"runPythonButton\">Exécuter le Code Python</button>
    <div id=\"resultContainer\"></div>

    <script>
        document.getElementById('runPythonButton').addEventListener('click', function () {
            // Effectuer une requête asynchrone vers le serveur Symfony
            fetch('/run-python')
                .then(response => response.json())
                .then(data => {
                    // Afficher le résultat dans le conteneur
                    document.getElementById('resultContainer').innerText = data.result;
                });
        });
    </script>
</body>
</html>
", "python/index.html.twig", "C:\\Users\\AdriT\\OneDrive\\Desktop\\SAE105\\extraction\\templates\\python\\index.html.twig");
    }
}
