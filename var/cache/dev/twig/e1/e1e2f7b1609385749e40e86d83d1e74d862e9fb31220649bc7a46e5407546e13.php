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
class __TwigTemplate_3da0ce71d5816bf02eb7ad03d0ac14246d358ef022a1fb021327401d9eb4f319 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
         <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
         <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, \">
         <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
         <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
         
         <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.css\"
         integrity=\"sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==\"
         crossorigin=\"\"/>

         <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css\" 
         integrity=\"sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7\" 
         crossorigin=\"anonymous\">

    </head>
    <body>
        <header>
        <div class=\"w3-content w3-section\" style=\"max-width:100%\">
           <img class=\"mySlides\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slide/s1.jpg"), "html", null, true);
        echo "\" alt=\"image\" style=\"height: 500px;width: 100%;\">
           <img class=\"mySlides\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slide/s2.png"), "html", null, true);
        echo "\" alt=\"image\" style=\"height: 500px;width: 100%;\">
           <img class=\"mySlides\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slide/s3.png"), "html", null, true);
        echo "\" alt=\"image\" style=\"height: 500px;width: 100%;\">
        </div>

      

  
       

        <nav class=\"navbar navbar-expand-lg navbar-light fixed-top py-3\" >
        
  <a class=\"navbar-brand text-white\"  href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">CINEMAHUB</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mx-auto mb-2 mb-lg-0\">
      <li class=\"nav-item \">
        <a class=\"nav-link\" href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" style=\"font-size: 20px;\"><i class=\"ion-ios-home-outline width=\"100\" height=\"100\"\" ></i></a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cinema");
        echo "\">Cinema</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("film");
        echo "\">Nos films</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation");
        echo "\">Reservation</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
      </li>
    </ul>
      <ul class=\"navbar-nav d-flex justify-content-end\">

       ";
        // line 60
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60)) {
            // line 61
            echo "                      
       <li class=\"nav-item \">
        <a class=\"nav-link\" >";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "nom", [], "any", false, false, false, 63), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "prenom", [], "any", false, false, false, 63), "html", null, true);
            echo "</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
            // line 66
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
      </li>
      

       ";
        } else {
            // line 71
            echo "       <li class=\"nav-item \">
        <a class=\"nav-link\" href=\"";
            // line 72
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">Inscription</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
            // line 75
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
      </li>
      
       ";
        }
        // line 79
        echo "     
    </ul>
    
  </div>
</nav>
       </header>   
        ";
        // line 85
        $this->displayBlock('body', $context, $blocks);
        // line 87
        echo "      <footer class=\"main-footer\">
        <div class=\"container\">
            <!--Widgets Section-->
            <div class=\"widgets-section\">
                <div class=\"row clearfix\">
                    
                    <!--Column-->
                    <div class=\"big-column col-lg-6 col-md-12 col-sm-12\">
                        <div class=\"row clearfix\">
                        
                            <!--Footer Column-->
                            <div class=\"footer-column col-lg-7 col-md-6 col-sm-12\">
                                <div class=\"footer-widget about-widget\">
                                    <div class=\"logo\">
                                        <a href=\"#\"><img src=\"\" alt=\"\" /></a>
                                    </div>
                                    <div class=\"text\">
                                        <p>Lorem ipsum dolor amet consectetur adipisicing elit sed eiusm tempor incididunt ut labore dolore magna aliqua enim ad minim veniam.</p>
                                        <p>Quis nostrud exercitation ullam aboris nisi aliquip exea commodo consequat duis aute irure.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                            <div class=\"footer-column col-lg-5 col-md-6 col-sm-12\">
                                <div class=\"footer-widget links-widget\">
                                    <h2>Liens Rapides</h2>
                                    <ul class=\"footer-list\">
                                        <li><a href=\"#\">Home</a></li>
                                        <li><a href=\"#\">Cinema</a></li>
                                        <li><a href=\"#\">Salle de projection</a></li>
                                        <li><a href=\"#\">Film</a></li>
                                        <li><a href=\"#\">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                     <!--Column-->
                    <div class=\"big-column col-lg-6 col-md-12 col-sm-12\">
                        <div class=\"row clearfix\">
                        
                            <!--Footer Column-->
                            <div class=\"footer-column col-lg-6 col-md-6 col-sm-12\">
                                <div class=\"footer-widget gallery-widget\">
                                    <h2>Cinema</h2>
                                   <ul class=\"footer-list\">
                                        <li><a href=\"#\">Cinema Le Colisée</a></li>
                                        <li><a href=\"#\">Cinema ABC</a></li>
                                        <li><a href=\"#\">Palace</a></li>
                                        <li><a href=\"#\">L'agro</a></li>
                                        <li><a href=\"#\">Cinema Le Parnasse</a></li>
                                        <li><a href=\"#\">Cine Jamil</a></li>
                                      
                                    </ul>
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                            <div class=\"footer-column col-lg-6 col-md-6 col-sm-12\">
                                <div class=\"footer-widget info-widget\">
                                    <h2>Contact Info</h2>
                                    <ul class=\"info-list\">
                                        <li>Rue 06, City Marcy, Douar Hicher, code postale 2086</li>
                                        <li>+216 202-207</li>
                                        <li>hanamezdarip4@gmail.com</li>
                                    </ul>
                                    <!-- Social Links -->
                                    <ul class=\"social-links\">
                                        <li class=\"google\"><a href=\"#\"><span class=\"fab fa-google-plus-g\"></span></a></li>
                                        <li class=\"facebook\"><a href=\"#\"><span class=\"fab fa-facebook-f\"></span></a></li>
                                        <li class=\"instagram\"><a href=\"#\"><span class=\"fab fa-instagram\"></span></a></li>
                                        <li class=\"twitter\"><a href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    
        <!-- Footer Bottom -->
        <div class=\"footer-bottom\">
            <div class=\"container\">
                <div class=\"row clearfix\">
                    
                    <div class=\"column col-lg-6 col-md-12 col-sm-12\">
                        <div class=\"copyright\"><span class=\"theme_color\">Ak Web Designer</span> &copy; 2022 All Right Reserved</div>
                    </div>
                    <div class=\"column col-lg-6 col-md-12 col-sm-12\">
                        <ul class=\"footer-nav\">
                            <li><a href=\"#\">Terms of Service</a></li>
                            <li><a href=\"#\">Privacy Policy</a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    
    </footer>

       
  
      <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.5.1.slim.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>  
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "CINEMA-HUB";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 85
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 86
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 86,  346 => 85,  327 => 5,  313 => 199,  309 => 198,  305 => 197,  301 => 196,  190 => 87,  188 => 85,  180 => 79,  173 => 75,  167 => 72,  164 => 71,  156 => 66,  148 => 63,  144 => 61,  142 => 60,  134 => 55,  128 => 52,  122 => 49,  116 => 46,  110 => 43,  99 => 35,  86 => 25,  82 => 24,  78 => 23,  61 => 9,  57 => 8,  51 => 5,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}CINEMA-HUB{% endblock %}</title>
         <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
         <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, \">
         <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
         <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
         
         <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.css\"
         integrity=\"sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==\"
         crossorigin=\"\"/>

         <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css\" 
         integrity=\"sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7\" 
         crossorigin=\"anonymous\">

    </head>
    <body>
        <header>
        <div class=\"w3-content w3-section\" style=\"max-width:100%\">
           <img class=\"mySlides\" src=\"{{ asset('css/slide/s1.jpg') }}\" alt=\"image\" style=\"height: 500px;width: 100%;\">
           <img class=\"mySlides\" src=\"{{ asset('css/slide/s2.png') }}\" alt=\"image\" style=\"height: 500px;width: 100%;\">
           <img class=\"mySlides\" src=\"{{ asset('css/slide/s3.png') }}\" alt=\"image\" style=\"height: 500px;width: 100%;\">
        </div>

      

  
       

        <nav class=\"navbar navbar-expand-lg navbar-light fixed-top py-3\" >
        
  <a class=\"navbar-brand text-white\"  href=\"{{ path('home') }}\">CINEMAHUB</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mx-auto mb-2 mb-lg-0\">
      <li class=\"nav-item \">
        <a class=\"nav-link\" href=\"{{ path('home') }}\" style=\"font-size: 20px;\"><i class=\"ion-ios-home-outline width=\"100\" height=\"100\"\" ></i></a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('cinema') }}\">Cinema</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('film') }}\">Nos films</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('reservation') }}\">Reservation</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('contact') }}\">Contact</a>
      </li>
    </ul>
      <ul class=\"navbar-nav d-flex justify-content-end\">

       {% if app.user %}
                      
       <li class=\"nav-item \">
        <a class=\"nav-link\" >{{ app.user.nom }} {{ app.user.prenom }}</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
      </li>
      

       {% else %}
       <li class=\"nav-item \">
        <a class=\"nav-link\" href=\"{{ path('register') }}\">Inscription</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('app_login') }}\">Connexion</a>
      </li>
      
       {% endif %}
     
    </ul>
    
  </div>
</nav>
       </header>   
        {% block body %}
        {% endblock %}
      <footer class=\"main-footer\">
        <div class=\"container\">
            <!--Widgets Section-->
            <div class=\"widgets-section\">
                <div class=\"row clearfix\">
                    
                    <!--Column-->
                    <div class=\"big-column col-lg-6 col-md-12 col-sm-12\">
                        <div class=\"row clearfix\">
                        
                            <!--Footer Column-->
                            <div class=\"footer-column col-lg-7 col-md-6 col-sm-12\">
                                <div class=\"footer-widget about-widget\">
                                    <div class=\"logo\">
                                        <a href=\"#\"><img src=\"\" alt=\"\" /></a>
                                    </div>
                                    <div class=\"text\">
                                        <p>Lorem ipsum dolor amet consectetur adipisicing elit sed eiusm tempor incididunt ut labore dolore magna aliqua enim ad minim veniam.</p>
                                        <p>Quis nostrud exercitation ullam aboris nisi aliquip exea commodo consequat duis aute irure.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                            <div class=\"footer-column col-lg-5 col-md-6 col-sm-12\">
                                <div class=\"footer-widget links-widget\">
                                    <h2>Liens Rapides</h2>
                                    <ul class=\"footer-list\">
                                        <li><a href=\"#\">Home</a></li>
                                        <li><a href=\"#\">Cinema</a></li>
                                        <li><a href=\"#\">Salle de projection</a></li>
                                        <li><a href=\"#\">Film</a></li>
                                        <li><a href=\"#\">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                     <!--Column-->
                    <div class=\"big-column col-lg-6 col-md-12 col-sm-12\">
                        <div class=\"row clearfix\">
                        
                            <!--Footer Column-->
                            <div class=\"footer-column col-lg-6 col-md-6 col-sm-12\">
                                <div class=\"footer-widget gallery-widget\">
                                    <h2>Cinema</h2>
                                   <ul class=\"footer-list\">
                                        <li><a href=\"#\">Cinema Le Colisée</a></li>
                                        <li><a href=\"#\">Cinema ABC</a></li>
                                        <li><a href=\"#\">Palace</a></li>
                                        <li><a href=\"#\">L'agro</a></li>
                                        <li><a href=\"#\">Cinema Le Parnasse</a></li>
                                        <li><a href=\"#\">Cine Jamil</a></li>
                                      
                                    </ul>
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                            <div class=\"footer-column col-lg-6 col-md-6 col-sm-12\">
                                <div class=\"footer-widget info-widget\">
                                    <h2>Contact Info</h2>
                                    <ul class=\"info-list\">
                                        <li>Rue 06, City Marcy, Douar Hicher, code postale 2086</li>
                                        <li>+216 202-207</li>
                                        <li>hanamezdarip4@gmail.com</li>
                                    </ul>
                                    <!-- Social Links -->
                                    <ul class=\"social-links\">
                                        <li class=\"google\"><a href=\"#\"><span class=\"fab fa-google-plus-g\"></span></a></li>
                                        <li class=\"facebook\"><a href=\"#\"><span class=\"fab fa-facebook-f\"></span></a></li>
                                        <li class=\"instagram\"><a href=\"#\"><span class=\"fab fa-instagram\"></span></a></li>
                                        <li class=\"twitter\"><a href=\"#\"><span class=\"fab fa-twitter\"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    
        <!-- Footer Bottom -->
        <div class=\"footer-bottom\">
            <div class=\"container\">
                <div class=\"row clearfix\">
                    
                    <div class=\"column col-lg-6 col-md-12 col-sm-12\">
                        <div class=\"copyright\"><span class=\"theme_color\">Ak Web Designer</span> &copy; 2022 All Right Reserved</div>
                    </div>
                    <div class=\"column col-lg-6 col-md-12 col-sm-12\">
                        <ul class=\"footer-nav\">
                            <li><a href=\"#\">Terms of Service</a></li>
                            <li><a href=\"#\">Privacy Policy</a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    
    </footer>

       
  
      <script src=\"{{ asset('js/index.js')}}\"></script>
      <script src=\"{{ asset('js/bootstrap.bundle.min.js')}}\"></script>
      <script src=\"{{ asset('js/jquery-3.5.1.slim.min.js')}}\"></script>
      <script src=\"{{ asset('js/popper.min.js')}}\"></script>  
    </body>
</html>
", "base.html.twig", "/opt/lampp/htdocs/cinema-hub/templates/base.html.twig");
    }
}
