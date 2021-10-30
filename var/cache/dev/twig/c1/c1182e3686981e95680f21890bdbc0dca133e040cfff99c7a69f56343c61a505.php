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

/* cinema/index.html.twig */
class __TwigTemplate_080ea42ac82d37115af9b2f9b4f18bbd0f7881f36824d34e37d7a6a826a30866 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cinema/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cinema/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cinema/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Cinema";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "     
      <div id=\"maCarte\" style=\"border-radius: 5px;border: 20px solid #fff;\"></div>

      <script src=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.js\"
    integrity=\"sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==\"
    crossorigin=\"\"></script>
     <script>
        var carte = L.map('maCarte').setView([36.8064835, 10.1815426], 13);
            
            // On charge les \"tuiles\"
            L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
                // Il est toujours bien de laisser le lien vers la source des données
                attribution: 'données © <a href=\"//osm.org/copyright\">OpenStreetMap</a>/ODbL - rendu <a href=\"//openstreetmap.fr\">OSM France</a>',
                minZoom: 1,
                maxZoom: 20
            }).addTo(carte);

            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cinema"]) || array_key_exists("cinema", $context) ? $context["cinema"] : (function () { throw new RuntimeError('Variable "cinema" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo "  
                // On crée le marqueur et on lui attribue une popup
                var marqueur = L.marker([";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "lat", [], "any", false, false, false, 25), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "lon", [], "any", false, false, false, 25), "html", null, true);
            echo "]).addTo(carte); //.addTo(carte);
                marqueur.bindPopup(\"<h3>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 26), "html", null, true);
            echo "</h3>\");

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "     </script>
  
  <section> 
  <div class=\"cardcontainer\">
    <link href=\"https://fonts.googleapis.com/css?family=Rye&display=swap\" rel=\"stylesheet\">
<h1 class=\"h1\">Les Grands Cinémas De Tunis</h1>
<h1>Les Grands Cinémas De Tunis</h1>
<h1 id=\"h1\">Les Grands Cinémas De Tunis</h1>
       ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cinema"]) || array_key_exists("cinema", $context) ? $context["cinema"] : (function () { throw new RuntimeError('Variable "cinema" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 38
            echo "   <div class=\"card\">
      
        
        <img src=\"/cinema/";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 41), "html", null, true);
            echo "\" alt=\"\">
        <div class=\"con-text\">
            <h2>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", [], "any", false, false, false, 43), "html", null, true);
            echo "</h2>
            <p>
                ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "adresse", [], "any", false, false, false, 45), "html", null, true);
            echo "<br>
                ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "email", [], "any", false, false, false, 46), "html", null, true);
            echo "
                <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("salle_de_projection", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\" class=\"btn btn-secondary \">Salles de progection </a> 
                
     
                
            </p>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "  </div>  
</section>
<style>
body{
        background-color: #fff;
       
      }
     section .cardcontainer .h1 {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: #000;
  font-family: Rye;
  font-size: 40px;
  text-shadow: 0 -20px 40px #fa0;
  animation-name: orange;
  animation-duration: 2s;
  animation-direction: alternate;
  animation-iteration-count: infinite;
}
@keyframes orange {
  10% {
    text-shadow: -10px -20px 60px #ffa;
  }
  20% {
    text-shadow: -10px -20px 65px #fa0;
  }
  30% {
    text-shadow: -10px -20px 55px #fa0;
  }
  40% {
    text-shadow: -10px -20px 70px #ff0;
  }
  50% {
    text-shadow: -10px -20px 50px #fa0;
  }
  60% {
    text-shadow: -10px -20px 60px #fa0;
  }
  70% {
    text-shadow: -10px -20px 65px #ff0;
  }
  80% {
    text-shadow: -10px -20px 55px #fa0;
  }
  90% {
    text-shadow: -10px -20px 70px #ff0;
  }
  100% {
    text-shadow: -10px -20px 50px #ff0;
  }
}
section .cardcontainer h1 {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: #000;
  font-family: Rye;
  font-size: 40px;
  text-shadow: 0 -10px 10px #f00;
  animation-name: red;
  animation-duration: 2s;
  animation-iteration-count: infinite;
}
@keyframes red {
  10% {
    text-shadow: -10px -15px 20px #f33;
  }
  20% {
    text-shadow: -10px -15px 35px #f00;
  }
  30% {
    text-shadow: -10px -15px 25px #f00;
  }
  40% {
    text-shadow: -10px -15px 40px #f33;
  }
  50% {
    text-shadow: -10px -15px 30px #f00;
  }
  60% {
    text-shadow: -10px -15px 45px #f33;
  }
  70% {
    text-shadow: -10px -15px 40px #f00;
  }
  80% {
    text-shadow: -10px -15px 25px #f33;
  }
  90% {
    text-shadow: -10px -15px 30px #f00;
  }
  100% {
    text-shadow: -10px -15px 50px #f00;
  }
}
section .cardcontainer #h1 {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: #eef;
  font-family: Rye;
  font-size: 40px;
  text-shadow: 0 -3px 5px #00f;
  animation-name: blue;
  animation-duration: 2s;
  animation-direction: alternate;
  animation-iteration-count: infinite;
}
@keyframes blue {
  10% {
    text-shadow: 0px -10px 15px #55f;
  }
  20% {
    text-shadow: 0px -10px 10px #77f;
  }
  30% {
    text-shadow: 0px -10px 20px #33f;
  }
  40% {
    text-shadow: 0px -10px 10px #77f;
  }
  50% {
    text-shadow: 0px -10px 5px #c3f;
  }
  60% {
    text-shadow: 0px -10px 15px #77f;
  }
  70% {
    text-shadow: 0px -10px 20px #55f;
  }
  80% {
    text-shadow: 0px -10px 10px #a0a;
  }
  90% {
    text-shadow: 0px -10px 15px #55f;
  }
  100% {
    text-shadow: 0px -10px 5px #c3f;
  }
}

.cardcontainer
{
  max-width: 1300px;
  margin: 10px auto;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}
.card {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 400px;
    background: #000;
    border-radius: 30px;
     margin-top:10px;
    overflow: hidden;
    cursor: pointer;
    transition: all 0.5s ease;
    backface-visibility: hidden;
}
.card:hover {
    transform: scale(0.9);
}

.card:hover .con-text p {
    margin-bottom: 0;
    opacity: 1;
    transition: all 0.5s ease;
}
.card img {
    position: absolute;
    width: 100%;
    height:100%;
    z-index: 10;
    transition: all 0.5s ease;
}
.card .con-text {
    position: absolute;
    z-index: 30;
    bottom: 0;
    color: #fff;
    padding: 20px;
    padding-bottom: 30px;
    width:100%;
    background: linear-gradient(280deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.9) 100%);
}
.card .con-text p {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    font-size: 1.75rem;
    opacity: 0;
    margin-bottom: -400px;
    transition: all 0.5s ease;
}
.card .con-text p a {
    padding: 7px 17px;
    border-radius: 12px;
    background: transparent;
    border: 2px solid #fff;
    color: #fff;
    margin-top: 10px;
    margin-left: auto;
    cursor: pointer;
    transition: all 0.5s ease;
    font-family: poppins;
    font-size: 1.5rem;
    outline: none;
}
.card .con-text p button:hover {
    background: #fff;
    color: #000;
}

.img {
    position: absolute;
    width: 100%;
}
</style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cinema/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 55,  166 => 47,  162 => 46,  158 => 45,  153 => 43,  148 => 41,  143 => 38,  139 => 37,  129 => 29,  120 => 26,  114 => 25,  107 => 23,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Cinema{% endblock %}

{% block body %}
     
      <div id=\"maCarte\" style=\"border-radius: 5px;border: 20px solid #fff;\"></div>

      <script src=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.js\"
    integrity=\"sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==\"
    crossorigin=\"\"></script>
     <script>
        var carte = L.map('maCarte').setView([36.8064835, 10.1815426], 13);
            
            // On charge les \"tuiles\"
            L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
                // Il est toujours bien de laisser le lien vers la source des données
                attribution: 'données © <a href=\"//osm.org/copyright\">OpenStreetMap</a>/ODbL - rendu <a href=\"//openstreetmap.fr\">OSM France</a>',
                minZoom: 1,
                maxZoom: 20
            }).addTo(carte);

            {% for item in cinema %}  
                // On crée le marqueur et on lui attribue une popup
                var marqueur = L.marker([{{ item.lat }}, {{ item.lon }}]).addTo(carte); //.addTo(carte);
                marqueur.bindPopup(\"<h3>{{ item.nom }}</h3>\");

            {% endfor %}
     </script>
  
  <section> 
  <div class=\"cardcontainer\">
    <link href=\"https://fonts.googleapis.com/css?family=Rye&display=swap\" rel=\"stylesheet\">
<h1 class=\"h1\">Les Grands Cinémas De Tunis</h1>
<h1>Les Grands Cinémas De Tunis</h1>
<h1 id=\"h1\">Les Grands Cinémas De Tunis</h1>
       {% for item in cinema %}
   <div class=\"card\">
      
        
        <img src=\"/cinema/{{ item.image }}\" alt=\"\">
        <div class=\"con-text\">
            <h2>{{ item.nom }}</h2>
            <p>
                {{ item.adresse }}<br>
                {{ item.email }}
                <a href=\"{{ path('salle_de_projection', {'id':item.id } ) }}\" class=\"btn btn-secondary \">Salles de progection </a> 
                
     
                
            </p>
        </div>
    </div>
    {% endfor %}
  </div>  
</section>
<style>
body{
        background-color: #fff;
       
      }
     section .cardcontainer .h1 {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: #000;
  font-family: Rye;
  font-size: 40px;
  text-shadow: 0 -20px 40px #fa0;
  animation-name: orange;
  animation-duration: 2s;
  animation-direction: alternate;
  animation-iteration-count: infinite;
}
@keyframes orange {
  10% {
    text-shadow: -10px -20px 60px #ffa;
  }
  20% {
    text-shadow: -10px -20px 65px #fa0;
  }
  30% {
    text-shadow: -10px -20px 55px #fa0;
  }
  40% {
    text-shadow: -10px -20px 70px #ff0;
  }
  50% {
    text-shadow: -10px -20px 50px #fa0;
  }
  60% {
    text-shadow: -10px -20px 60px #fa0;
  }
  70% {
    text-shadow: -10px -20px 65px #ff0;
  }
  80% {
    text-shadow: -10px -20px 55px #fa0;
  }
  90% {
    text-shadow: -10px -20px 70px #ff0;
  }
  100% {
    text-shadow: -10px -20px 50px #ff0;
  }
}
section .cardcontainer h1 {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: #000;
  font-family: Rye;
  font-size: 40px;
  text-shadow: 0 -10px 10px #f00;
  animation-name: red;
  animation-duration: 2s;
  animation-iteration-count: infinite;
}
@keyframes red {
  10% {
    text-shadow: -10px -15px 20px #f33;
  }
  20% {
    text-shadow: -10px -15px 35px #f00;
  }
  30% {
    text-shadow: -10px -15px 25px #f00;
  }
  40% {
    text-shadow: -10px -15px 40px #f33;
  }
  50% {
    text-shadow: -10px -15px 30px #f00;
  }
  60% {
    text-shadow: -10px -15px 45px #f33;
  }
  70% {
    text-shadow: -10px -15px 40px #f00;
  }
  80% {
    text-shadow: -10px -15px 25px #f33;
  }
  90% {
    text-shadow: -10px -15px 30px #f00;
  }
  100% {
    text-shadow: -10px -15px 50px #f00;
  }
}
section .cardcontainer #h1 {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: #eef;
  font-family: Rye;
  font-size: 40px;
  text-shadow: 0 -3px 5px #00f;
  animation-name: blue;
  animation-duration: 2s;
  animation-direction: alternate;
  animation-iteration-count: infinite;
}
@keyframes blue {
  10% {
    text-shadow: 0px -10px 15px #55f;
  }
  20% {
    text-shadow: 0px -10px 10px #77f;
  }
  30% {
    text-shadow: 0px -10px 20px #33f;
  }
  40% {
    text-shadow: 0px -10px 10px #77f;
  }
  50% {
    text-shadow: 0px -10px 5px #c3f;
  }
  60% {
    text-shadow: 0px -10px 15px #77f;
  }
  70% {
    text-shadow: 0px -10px 20px #55f;
  }
  80% {
    text-shadow: 0px -10px 10px #a0a;
  }
  90% {
    text-shadow: 0px -10px 15px #55f;
  }
  100% {
    text-shadow: 0px -10px 5px #c3f;
  }
}

.cardcontainer
{
  max-width: 1300px;
  margin: 10px auto;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}
.card {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 400px;
    background: #000;
    border-radius: 30px;
     margin-top:10px;
    overflow: hidden;
    cursor: pointer;
    transition: all 0.5s ease;
    backface-visibility: hidden;
}
.card:hover {
    transform: scale(0.9);
}

.card:hover .con-text p {
    margin-bottom: 0;
    opacity: 1;
    transition: all 0.5s ease;
}
.card img {
    position: absolute;
    width: 100%;
    height:100%;
    z-index: 10;
    transition: all 0.5s ease;
}
.card .con-text {
    position: absolute;
    z-index: 30;
    bottom: 0;
    color: #fff;
    padding: 20px;
    padding-bottom: 30px;
    width:100%;
    background: linear-gradient(280deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.9) 100%);
}
.card .con-text p {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    font-size: 1.75rem;
    opacity: 0;
    margin-bottom: -400px;
    transition: all 0.5s ease;
}
.card .con-text p a {
    padding: 7px 17px;
    border-radius: 12px;
    background: transparent;
    border: 2px solid #fff;
    color: #fff;
    margin-top: 10px;
    margin-left: auto;
    cursor: pointer;
    transition: all 0.5s ease;
    font-family: poppins;
    font-size: 1.5rem;
    outline: none;
}
.card .con-text p button:hover {
    background: #fff;
    color: #000;
}

.img {
    position: absolute;
    width: 100%;
}
</style>

{% endblock %}


", "cinema/index.html.twig", "/opt/lampp/htdocs/cinema-hub/templates/cinema/index.html.twig");
    }
}
