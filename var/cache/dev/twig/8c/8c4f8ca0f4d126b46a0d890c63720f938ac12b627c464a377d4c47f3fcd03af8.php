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

/* film/show.html.twig */
class __TwigTemplate_80da99a1fa3bce9e6f8d12ccd3170f5c6bf1246de35e591cf5654c13f4b069b2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "film/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "film/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "film/show.html.twig", 1);
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

        echo "Show";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo " <section>
<div class=\"card\">
  <div class=\"poster\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 7, $this->source); })()), "image", [], "any", false, false, false, 7), "html", null, true);
        echo "\" alt=\"\" ></div>
\t<div class=\"details\">
\t\t\t<h2 >";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 9, $this->source); })()), "nom", [], "any", false, false, false, 9), "html", null, true);
        echo "(2022)<br><span>Réalisateur:";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 9, $this->source); })()), "realisateur", [], "any", false, false, false, 9), "html", null, true);
        echo "</span></h2>
        
\t\t
      <div class=\"tags\">
       
      
\t\t\t\t<span>
\t\t\t\t\t
\t\t\t\t\t<h4>Durée:";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 17, $this->source); })()), "duree", [], "any", false, false, false, 17), "H:i"), "html", null, true);
        echo "</h4>
\t\t\t\t</span>
\t\t\t\t
\t\t\t\t<span>
\t\t\t\t
\t\t\t\t\t<h4>Date: Le ";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 22, $this->source); })()), "time", [], "any", false, false, false, 22), "d/m/y"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 22, $this->source); })()), "time", [], "any", false, false, false, 22), "H:i"), "html", null, true);
        echo " </h4>
\t\t\t\t</span>
\t\t\t</div>

\t\t\t<div class=\"info\">
        <p>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27), "html", null, true);
        echo "
\t\t\t\t</p>
        
     
\t\t\t</div>

 </div>
</div>
 </section>
 <section id=\"commentaires\">
    <h1>";
        // line 37
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 37, $this->source); })()), "comments", [], "any", false, false, false, 37)), "html", null, true);
        echo " commentaires : </h1>
   ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 38, $this->source); })()), "comments", [], "any", false, false, false, 38));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 39
            echo "   <div class=\"comment\">
       <div class=\"row\">
           <div class=\"col-3\">
              ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "nomutilisateur", [], "any", false, false, false, 42), "html", null, true);
            echo " (<small>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "date", [], "any", false, false, false, 42), "d/m/y à H:i"), "html", null, true);
            echo "</small>)
           </div>   
           <div class=\"col-9\">
              ";
            // line 45
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 45);
            echo "
           </div>
       </div>

   </div>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
   

   ";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 54, $this->source); })()), 'form_start');
        echo "
   ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 55, $this->source); })()), "nomutilisateur", [], "any", false, false, false, 55), 'row', ["attr" => ["placeholder" => "Votre nom"]]);
        echo "
   ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 56, $this->source); })()), "content", [], "any", false, false, false, 56), 'row', ["attr" => ["placeholder" => "Votre commentaire"]]);
        echo "

   <button type=\"submit\" class=\"btn btn-success\">Commenter !</button>
   ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 59, $this->source); })()), 'form_end');
        echo "

   
  
 </section>

 <style>
 @import url('https://fonts.googleapis.com/css?family=PT+Sans');
 body{
   margin: 0;
   padding:0;
   font-family:'PT Sans', sans-serif;
 }
  .card
{
  
  position:relative;
  top:50%;
  width: 100%;
  height:1000px;
  background:#000;
  overflow: hidden;
  box-shadow: 0 5px 10px rgba(0,0,0,0.5) ;
  border-radius: 20px;
}
.card .poster{
    position: relative;
    overflow: hidden;
}
.card .poster:before{
  content: '';
  position: absolute;
  bottom: -182px;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(0deg, #000, transparent);
  transition: 0.5s;
  z-index: 1;
}
.card:hover .poster:before{
  bottom:0;
}
.card .poster img{
     width: 100%;
     height:1000px;
     transition: 0.5s;
}
.card:hover .poster img{
  
  transform: translateY(-100px);
}
.details{
  position: absolute;
  padding: 20px;
  width: 100%;
  height: 74%;
  bottom: -182px;
  left: 0;
  box-sizing: border-box;
  transition: 0.5s;
  z-index:2;
}
.card:hover .details{
    bottom:0;
}
.details h2{
  color: #fff;
  margin: 0;
  padding: 0;
  font-size: 40px;
}
.details h2 span{
  font-size: 25px;
  color: #ff9800;

}
.rating{
    position: relative;
    padding: 5px 0;
}
.rating .fa{
  color:#f7f406;
  margin-right: 2px;
  font-size: 16px;
}
.rating span{
  color: rgb(245, 240, 240);
  padding: 0 5px;
}
.tags{
  position: relative;
  margin-top: 5px;
}
.info{
  color: #fff;
  bottom: -182px;
  transition: 0.5s;
  z-index: 1;
}
.info:hover{
  bottom: 0;
}
.info p{
  margin: 15px 0 10px;
  font-size: 20px;
}
h4{
  color:#fff;
}

 </style>
  
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "film/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 59,  187 => 56,  183 => 55,  179 => 54,  174 => 51,  162 => 45,  154 => 42,  149 => 39,  145 => 38,  141 => 37,  128 => 27,  118 => 22,  110 => 17,  97 => 9,  92 => 7,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Show{% endblock %}
{% block body %}
 <section>
<div class=\"card\">
  <div class=\"poster\"><img src=\"{{ film.image }}\" alt=\"\" ></div>
\t<div class=\"details\">
\t\t\t<h2 >{{ film.nom }}(2022)<br><span>Réalisateur:{{ film.realisateur }}</span></h2>
        
\t\t
      <div class=\"tags\">
       
      
\t\t\t\t<span>
\t\t\t\t\t
\t\t\t\t\t<h4>Durée:{{ film.duree | date('H:i') }}</h4>
\t\t\t\t</span>
\t\t\t\t
\t\t\t\t<span>
\t\t\t\t
\t\t\t\t\t<h4>Date: Le {{ film.time | date('d/m/y') }} à {{ film.time | date('H:i') }} </h4>
\t\t\t\t</span>
\t\t\t</div>

\t\t\t<div class=\"info\">
        <p>{{ film.description  }}
\t\t\t\t</p>
        
     
\t\t\t</div>

 </div>
</div>
 </section>
 <section id=\"commentaires\">
    <h1>{{ film.comments | length }} commentaires : </h1>
   {% for comment in film.comments %}
   <div class=\"comment\">
       <div class=\"row\">
           <div class=\"col-3\">
              {{comment.nomutilisateur}} (<small>{{comment.date | date('d/m/y à H:i' )}}</small>)
           </div>   
           <div class=\"col-9\">
              {{comment.content | raw}}
           </div>
       </div>

   </div>
   {% endfor %}

   

   {{ form_start(commentForm) }}
   {{ form_row(commentForm.nomutilisateur, {'attr': {'placeholder': \"Votre nom\"}}) }}
   {{ form_row(commentForm.content, {'attr': {'placeholder': \"Votre commentaire\"}}) }}

   <button type=\"submit\" class=\"btn btn-success\">Commenter !</button>
   {{ form_end(commentForm) }}

   
  
 </section>

 <style>
 @import url('https://fonts.googleapis.com/css?family=PT+Sans');
 body{
   margin: 0;
   padding:0;
   font-family:'PT Sans', sans-serif;
 }
  .card
{
  
  position:relative;
  top:50%;
  width: 100%;
  height:1000px;
  background:#000;
  overflow: hidden;
  box-shadow: 0 5px 10px rgba(0,0,0,0.5) ;
  border-radius: 20px;
}
.card .poster{
    position: relative;
    overflow: hidden;
}
.card .poster:before{
  content: '';
  position: absolute;
  bottom: -182px;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(0deg, #000, transparent);
  transition: 0.5s;
  z-index: 1;
}
.card:hover .poster:before{
  bottom:0;
}
.card .poster img{
     width: 100%;
     height:1000px;
     transition: 0.5s;
}
.card:hover .poster img{
  
  transform: translateY(-100px);
}
.details{
  position: absolute;
  padding: 20px;
  width: 100%;
  height: 74%;
  bottom: -182px;
  left: 0;
  box-sizing: border-box;
  transition: 0.5s;
  z-index:2;
}
.card:hover .details{
    bottom:0;
}
.details h2{
  color: #fff;
  margin: 0;
  padding: 0;
  font-size: 40px;
}
.details h2 span{
  font-size: 25px;
  color: #ff9800;

}
.rating{
    position: relative;
    padding: 5px 0;
}
.rating .fa{
  color:#f7f406;
  margin-right: 2px;
  font-size: 16px;
}
.rating span{
  color: rgb(245, 240, 240);
  padding: 0 5px;
}
.tags{
  position: relative;
  margin-top: 5px;
}
.info{
  color: #fff;
  bottom: -182px;
  transition: 0.5s;
  z-index: 1;
}
.info:hover{
  bottom: 0;
}
.info p{
  margin: 15px 0 10px;
  font-size: 20px;
}
h4{
  color:#fff;
}

 </style>
  
 {% endblock %}

", "film/show.html.twig", "/opt/lampp/htdocs/cinema-hub/templates/film/show.html.twig");
    }
}
