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

/* base.html.twig */
class __TwigTemplate_01eb40a8dcb49e3e040fea28489d1c02 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Accueil</title>
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/cyborg/bootstrap.min.css\">
    <style>
        body {
            background-color: #2c3e50; /* Couleur de fond */
            color: #ecf0f1; /* Couleur de texte */
            padding-top: 50px;
        }

        .container {
            margin: 0 auto;
            max-width: 100%; /* Utilisation de la largeur complète de la page */
        }

        .btn-execute {
            margin-bottom: 20px;
        }

        .result-section {
            margin-top: 20px;
            border: 1px solid #34495e; /* Bordure */
            padding: 20px;
            border-radius: 5px;
            background-color: #34495e; /* Fond */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow-x: auto; /* Défilement horizontal si nécessaire */
        }

        .custom-table-container {
            overflow-x: auto; /* Défilement horizontal si nécessaire */
            text-align: center; /* Centrage du tableau */
        }

        .custom-table {
            width: 100%; /* Utilisation de la largeur complète du conteneur */
            margin-top: 20px;
            color: #ecf0f1; /* Couleur du texte dans le tableau */
        }

        .custom-table th,
        .custom-table td {
            border: 1px solid #2c3e50; /* Bordure */
            padding: 12px;
            text-align: left;
            background-color: #34495e; /* Fond des cellules du tableau */
        }

        .btn-download {
            margin-top: 20px;
            margin-bottom: 40px;
        }
    </style>
</head>

<body>

    <div class=\"container\">
        <h2 class=\"mb-4\">Contenu de la page</h2>

        <!-- Formulaire pour exécuter le script Python -->
        <form method=\"post\" action=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exec");
        echo "\">
            <button type=\"submit\" class=\"btn btn-primary btn-execute\">Exécuter le code Python</button>
        </form>

        <!-- Affichage du contenu HTML généré -->
        <div class=\"result-section\">
            ";
        // line 73
        if (array_key_exists("html_content", $context)) {
            // line 74
            echo "            <h3 class=\"mb-3\">Résultat HTML généré :</h3>
            ";
            // line 75
            echo (isset($context["html_content"]) || array_key_exists("html_content", $context) ? $context["html_content"] : (function () { throw new RuntimeError('Variable "html_content" does not exist.', 75, $this->source); })());
            echo "
            ";
        }
        // line 77
        echo "        </div>

        <!-- Affichage des 15 premières lignes du CSV -->
        <div class=\"result-section custom-table-container\">
            ";
        // line 81
        if ( !twig_test_empty((isset($context["csv_data"]) || array_key_exists("csv_data", $context) ? $context["csv_data"] : (function () { throw new RuntimeError('Variable "csv_data" does not exist.', 81, $this->source); })()))) {
            // line 82
            echo "            <h3 class=\"mb-3\">15 premières lignes du CSV :</h3>
            <div class=\"table-responsive\">
                <table class=\"table custom-table\">
                    <thead>
                        <tr>
                            ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["csv_data"]) || array_key_exists("csv_data", $context) ? $context["csv_data"] : (function () { throw new RuntimeError('Variable "csv_data" does not exist.', 87, $this->source); })()), 0, [], "array", false, false, false, 87));
            foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                // line 88
                echo "                            <th>";
                echo twig_escape_filter($this->env, $context["header"], "html", null, true);
                echo "</th>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 93
            $context["limit"] = 15;
            // line 94
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["csv_data"]) || array_key_exists("csv_data", $context) ? $context["csv_data"] : (function () { throw new RuntimeError('Variable "csv_data" does not exist.', 94, $this->source); })()), 1, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 94, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 95
                echo "                        <tr>
                            ";
                // line 96
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                    // line 97
                    echo "                            <td>";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "</td>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 99
                echo "                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                    </tbody>
                </table>
            </div>
            ";
            // line 104
            if ((twig_length_filter($this->env, (isset($context["csv_data"]) || array_key_exists("csv_data", $context) ? $context["csv_data"] : (function () { throw new RuntimeError('Variable "csv_data" does not exist.', 104, $this->source); })())) > (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 104, $this->source); })()))) {
                // line 105
                echo "            <!-- Bouton pour afficher toutes les lignes -->
            <button id=\"showAllRows\" class=\"btn btn-secondary\">Afficher toutes les lignes</button>
            ";
            }
            // line 108
            echo "            <!-- Bouton de téléchargement centré -->
            <div class=\"text-center btn-download\">
                <a href=\"";
            // line 110
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("download_csv");
            echo "\" class=\"btn btn-primary\">Télécharger le fichier CSV</a>
            </div>
            ";
        }
        // line 113
        echo "        </div>
    </div>

    <!-- Mettez vos balises script ici selon vos besoins -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Cacher les lignes supplémentaires initialement
            document.querySelector('.custom-table').classList.add('truncate-table');

            // Ajouter un gestionnaire d'événement pour le bouton
            document.getElementById('showAllRows').addEventListener('click', function () {
                document.querySelector('.custom-table').classList.remove('truncate-table');
                this.style.display = 'none'; // Cacher le bouton après avoir affiché toutes les lignes
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
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  215 => 113,  209 => 110,  205 => 108,  200 => 105,  198 => 104,  193 => 101,  186 => 99,  177 => 97,  173 => 96,  170 => 95,  165 => 94,  163 => 93,  158 => 90,  149 => 88,  145 => 87,  138 => 82,  136 => 81,  130 => 77,  125 => 75,  122 => 74,  120 => 73,  111 => 67,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Accueil</title>
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/cyborg/bootstrap.min.css\">
    <style>
        body {
            background-color: #2c3e50; /* Couleur de fond */
            color: #ecf0f1; /* Couleur de texte */
            padding-top: 50px;
        }

        .container {
            margin: 0 auto;
            max-width: 100%; /* Utilisation de la largeur complète de la page */
        }

        .btn-execute {
            margin-bottom: 20px;
        }

        .result-section {
            margin-top: 20px;
            border: 1px solid #34495e; /* Bordure */
            padding: 20px;
            border-radius: 5px;
            background-color: #34495e; /* Fond */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow-x: auto; /* Défilement horizontal si nécessaire */
        }

        .custom-table-container {
            overflow-x: auto; /* Défilement horizontal si nécessaire */
            text-align: center; /* Centrage du tableau */
        }

        .custom-table {
            width: 100%; /* Utilisation de la largeur complète du conteneur */
            margin-top: 20px;
            color: #ecf0f1; /* Couleur du texte dans le tableau */
        }

        .custom-table th,
        .custom-table td {
            border: 1px solid #2c3e50; /* Bordure */
            padding: 12px;
            text-align: left;
            background-color: #34495e; /* Fond des cellules du tableau */
        }

        .btn-download {
            margin-top: 20px;
            margin-bottom: 40px;
        }
    </style>
</head>

<body>

    <div class=\"container\">
        <h2 class=\"mb-4\">Contenu de la page</h2>

        <!-- Formulaire pour exécuter le script Python -->
        <form method=\"post\" action=\"{{ path('app_exec') }}\">
            <button type=\"submit\" class=\"btn btn-primary btn-execute\">Exécuter le code Python</button>
        </form>

        <!-- Affichage du contenu HTML généré -->
        <div class=\"result-section\">
            {% if html_content is defined %}
            <h3 class=\"mb-3\">Résultat HTML généré :</h3>
            {{ html_content|raw }}
            {% endif %}
        </div>

        <!-- Affichage des 15 premières lignes du CSV -->
        <div class=\"result-section custom-table-container\">
            {% if csv_data is not empty %}
            <h3 class=\"mb-3\">15 premières lignes du CSV :</h3>
            <div class=\"table-responsive\">
                <table class=\"table custom-table\">
                    <thead>
                        <tr>
                            {% for header in csv_data[0] %}
                            <th>{{ header }}</th>
                            {% endfor %}
                        </tr>
                    </thead>
                    <tbody>
                        {% set limit = 15 %}
                        {% for row in csv_data|slice(1, limit) %}
                        <tr>
                            {% for value in row %}
                            <td>{{ value }}</td>
                            {% endfor %}
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
            {% if csv_data|length > limit %}
            <!-- Bouton pour afficher toutes les lignes -->
            <button id=\"showAllRows\" class=\"btn btn-secondary\">Afficher toutes les lignes</button>
            {% endif %}
            <!-- Bouton de téléchargement centré -->
            <div class=\"text-center btn-download\">
                <a href=\"{{ path('download_csv') }}\" class=\"btn btn-primary\">Télécharger le fichier CSV</a>
            </div>
            {% endif %}
        </div>
    </div>

    <!-- Mettez vos balises script ici selon vos besoins -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Cacher les lignes supplémentaires initialement
            document.querySelector('.custom-table').classList.add('truncate-table');

            // Ajouter un gestionnaire d'événement pour le bouton
            document.getElementById('showAllRows').addEventListener('click', function () {
                document.querySelector('.custom-table').classList.remove('truncate-table');
                this.style.display = 'none'; // Cacher le bouton après avoir affiché toutes les lignes
            });
        });
    </script>
</body>

</html>
", "base.html.twig", "C:\\SAE105\\extraction\\templates\\base.html.twig");
    }
}
