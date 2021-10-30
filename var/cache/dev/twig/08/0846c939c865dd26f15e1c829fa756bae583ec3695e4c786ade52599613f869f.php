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

/* emails/contact.html.twig */
class __TwigTemplate_c4912f8b7096a8b1671df4a8ba3b07cbe5fd14721c5ed4f9f1a2b9a2ae6c8e60 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/contact.html.twig"));

        // line 1
        echo "<h1>Nouveau Contact</h1>
<p>Nom : ";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 2, $this->source); })()), "nom", [], "any", false, false, false, 2), "html", null, true);
        echo "</p>
<p>Email : ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 3, $this->source); })()), "email", [], "any", false, false, false, 3), "html", null, true);
        echo "</p>
<p>Message : ";
        // line 4
        echo twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 4, $this->source); })()), "message", [], "any", false, false, false, 4);
        echo "</p>
<div class=\"envelope\">
\t<div class=\"contact_form\">
\t\t<span class=\"reset\">x</span>
\t\t<form name=\"contact\" action=\"POST\" id=\"say_hi\">
                <fieldset>

                  <section class=\"form_part\">
                  <label for=\"name\" id=\"name_label\">Name</label>
                  <input type=\"text\" name=\"name\" id=\"name\" size=\"30\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 13, $this->source); })()), "nom", [], "any", false, false, false, 13), "html", null, true);
        echo "\" class=\"text-input\" />
                  
                  </section>

\t\t\t\t  <section class=\"form_part\">\t
                  <label for=\"email\" id=\"email_label\">Email</label>
                  <input type=\"text\" name=\"email\" id=\"email\" size=\"30\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 19, $this->source); })()), "email", [], "any", false, false, false, 19), "html", null, true);
        echo "\" class=\"text-input\" />
                  
\t\t\t\t  </section>

\t\t\t\t  <section class=\"form_part\">\t
                  <label for=\"message\" id=\"message_label\">";
        // line 24
        echo twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 24, $this->source); })()), "message", [], "any", false, false, false, 24);
        echo "</label>
                  <textarea class=\"message\" name=\"message\" id=\"message\"> </textarea>
                 
                  </section>
                 
              </fieldset>
          </form>
\t</div>
\t<p class=\"contact_me\">CONTACT</p>
\t<p class=\"send_me\">SEND</p>
\t<p class=\"thanks\">THANKS</p>
\t<span class=\"top_flap close_sesame\"></span>
\t<span class=\"side_flaps\"></span>
\t<span class=\"bottom_flap\"></span>
</div>
<style>
body,html{
  background:#2B2735;
  width:100%;
  height:100%;
  padding-top:100px;
}
.top_flap {
  top: -245px;
  left: -15px;
  position: absolute;
  height: 245px;
  width: 800px;
  overflow-y: hidden;
  -webkit-perspective: 500;
  -moz-perspective: 500;
  -ms-perspective: 500;
  -o-perspective: 500;
  perspective: 500;
  -webkit-transform-origin: bottom;
  -moz-transform-origin: bottom;
  -ms-transform-origin: bottom;
  -o-transform-origin: bottom;
  transform-origin: bottom;
  -webkit-transition: all 500ms 200ms linear;
  -moz-transition: all 500ms 200ms linear;
  -o-transition: all 500ms 200ms linear;
  transition: all 500ms 200ms linear;
  -webkit-transition-timing-function: cubic-bezier(0.6, 1.3, 0.2, 2.8);
  -moz-transition-timing-function: cubic-bezier(0.6, 1.3, 0.2, 2.8);
  -o-transition-timing-function: cubic-bezier(0.6, 1.3, 0.2, 2.8);
  transition-timing-function: cubic-bezier(0.6, 1.3, 0.2, 2.8);
  z-index: 1;
}
.close_sesame {
  -webkit-transform: rotatex(-180deg);
  -moz-transform: rotatex(-180deg);
  -ms-transform: rotatex(-180deg);
  -o-transform: rotatex(-180deg);
  transform: rotatex(-180deg);
  z-index: 9999 ;
}
.top_flap:before {
  content: '';
  position: absolute;
  top: 90px;
  right: 248px;
  width: 460px;
  height: 460px;
  background: #eb6166;
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  border-radius: 20px;
  -webkit-background-clip: padding-box;
  -moz-background-clip: padding;
  background-clip: padding-box;
  -webkit-transform: rotate(60deg);
  -moz-transform: rotate(60deg);
  -ms-transform: rotate(60deg);
  -o-transform: rotate(60deg);
  transform: rotate(60deg);
}
.top_flap:after {
  content: '';
  position: absolute;
  top: 90px;
  left: 248px;
  width: 460px;
  height: 460px;
  background: #eb6166;
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  border-radius: 20px;
  -webkit-background-clip: padding-box;
  -moz-background-clip: padding;
  background-clip: padding-box;
  -webkit-transform: rotate(-60deg);
  -moz-transform: rotate(-60deg);
  -ms-transform: rotate(-60deg);
  -o-transform: rotate(-60deg);
  transform: rotate(-60deg);
}
.bottom_flap {
  bottom: -160px;
  left: -15px;
  position: relative;
  height: 245px;
  width: 800px;
  overflow-y: hidden;
  display: block;
  z-index: 10;
}
.bottom_flap:before {
  content: '';
  position: absolute;
  top: 90px;
  right: 248px;
  width: 460px;
  height: 460px;
  background: #f29c9f;
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  border-radius: 20px;
  -webkit-background-clip: padding-box;
  -moz-background-clip: padding;
  background-clip: padding-box;
  -webkit-transform: rotate(60deg);
  -moz-transform: rotate(60deg);
  -ms-transform: rotate(60deg);
  -o-transform: rotate(60deg);
  transform: rotate(60deg);
}
.bottom_flap:after {
  content: '';
  position: absolute;
  top: 90px;
  left: 248px;
  width: 460px;
  height: 460px;
  background: #f29c9f;
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  border-radius: 20px;
  -webkit-background-clip: padding-box;
  -moz-background-clip: padding;
  background-clip: padding-box;
  -webkit-transform: rotate(-60deg);
  -moz-transform: rotate(-60deg);
  -ms-transform: rotate(-60deg);
  -o-transform: rotate(-60deg);
  transform: rotate(-60deg);
}
.envelope {
  position: relative;
  margin: 40px auto;
  width: 770px;
  height: 400px;
  background: #ee787c;
  z-index: 999;
}
.envelope p {
  position: absolute;
  right: 0;
  left: 0;
  bottom: 76px;
  z-index: 999999999;
  font-family: 'NexaBold';
  font-size: 40px;
  display: inline-block;
  margin: 0 auto;
  width: 250px;
  height: 50px;
  border-bottom: 3px solid #9f1419;
  text-align: center;
  color: #ffffff;
  background: #e5343a;
  cursor: pointer;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  border-radius: 2px;
  -webkit-background-clip: padding-box;
  -moz-background-clip: padding;
  background-clip: padding-box;
  line-height:60px;
}
.side_flaps:before {
  content: '';
  position: absolute;
  top: 0px;
  left: 0px;
  width: 0;
  height: 0;
  border-left: 340px solid #f18e92;
  border-top: 200px solid transparent;
  border-bottom: 200px solid transparent;
  z-index: 10;
}
.side_flaps:after {
  content: '';
  position: absolute;
  top: 0;
  right: 0;
  width: 0;
  height: 0;
  border-right: 340px solid #f18e92;
  border-top: 200px solid transparent;
  border-bottom: 200px solid transparent;
  z-index: 10;
}
.contact_form {
  padding-top: 30px;
  left: 0;
  right: 0;
  bottom: 0;
  position: absolute;
  width: 700px;
  margin: 0 auto;
  height: 350px;
  background: #f6bcbe;
  -webkit-transition: all 800ms 200ms linear;
  -moz-transition: all 800ms 200ms linear;
  -o-transition: all 800ms 200ms linear;
  transition: all 800ms 200ms linear;
}
.open_form {
  -webkit-transition-timing-function: cubic-bezier(0.23, 0.69, 0.25, 0.9);
  -moz-transition-timing-function: cubic-bezier(0.23, 0.69, 0.25, 0.9);
  -o-transition-timing-function: cubic-bezier(0.23, 0.69, 0.25, 0.9);
  transition-timing-function: cubic-bezier(0.23, 0.69, 0.25, 0.9);
  height: 580px !important;
  z-index: 9;
}
.error {
  color: #f29c9f;
  font-family: 'NexaBold';
  font-size: 18px;
  position: absolute;
  height: 18px;
  width: 60%;
  right: 90px;
  text-align: right;
  top: -5px;
}
.form_part {
  width: 90%;
  margin: 0 auto;
  position: relative;
}
label {
  position: absolute;
  font-family: 'NexaBold';
  color: #f18e92;
  font-size: 30px;
  top: -12px;
  text-transform: uppercase;
}
input {
  width: 70%;
  border: none;
  background: #f18e92;
  height: 30px;
  margin: 20px auto;
  font-family: 'NexaBold';
  color: #f6bcbe;
  font-size: 22px;
  padding-left: 10px;
}
textarea {
  resize: none ;
  font-family: 'NexaBold';
  color: #f6bcbe;
  font-size: 22px;
  padding-left: 10px;
}
.message {
  margin: 20px auto;
  width: 70%;
  border: none;
  background: #f18e92;
  height: 90px;
}
.reset {
  font-family: 'NexaBold';
  font-size: 20px;
  text-align: center;
  color: #9f1419;
  line-height: 20px;
  position: absolute;
  width: 20px;
  height: 20px;
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  border-radius: 20px;
  -webkit-background-clip: padding-box;
  -moz-background-clip: padding;
  background-clip: padding-box;
  background: #f18e92;
  border: 4px solid #e84b50;
  top: -10px;
  right: -10px;
  cursor: pointer;
}
</style>
<script>
   \$('.thanks,.send_me').hide();

\t\$('.contact_me').on('click',function(){
\t\t\$('.contact').animate({marginTop:'80px'},300);
\t\t\$('.top_flap').removeClass('close_sesame');
\t\t\$('.contact_form').delay(500).queue(function(){\$('.contact_form').addClass('open_form').dequeue();});
\t\t\$(this).fadeOut(300);
\t\t\$('.send_me').fadeIn(300);
\t
\t});

\t\$('.reset,.send_me').on('click',function(){
        \$('.contact').delay(800).animate({marginTop:'0px'},300);
\t\t\$('.top_flap').delay(800).queue(function(){\$(this).addClass('close_sesame').dequeue();});
\t\t\$('.contact_form').removeClass('open_form');
\t\t\$('.send_me').fadeOut(300);
\t\t\$('.contact_me').fadeIn(300);
\t});
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 24,  75 => 19,  66 => 13,  54 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Nouveau Contact</h1>
<p>Nom : {{ contact.nom }}</p>
<p>Email : {{ contact.email }}</p>
<p>Message : {{ contact.message |raw }}</p>
<div class=\"envelope\">
\t<div class=\"contact_form\">
\t\t<span class=\"reset\">x</span>
\t\t<form name=\"contact\" action=\"POST\" id=\"say_hi\">
                <fieldset>

                  <section class=\"form_part\">
                  <label for=\"name\" id=\"name_label\">Name</label>
                  <input type=\"text\" name=\"name\" id=\"name\" size=\"30\" value=\"{{ contact.nom }}\" class=\"text-input\" />
                  
                  </section>

\t\t\t\t  <section class=\"form_part\">\t
                  <label for=\"email\" id=\"email_label\">Email</label>
                  <input type=\"text\" name=\"email\" id=\"email\" size=\"30\" value=\"{{ contact.email }}\" class=\"text-input\" />
                  
\t\t\t\t  </section>

\t\t\t\t  <section class=\"form_part\">\t
                  <label for=\"message\" id=\"message_label\">{{ contact.message |raw }}</label>
                  <textarea class=\"message\" name=\"message\" id=\"message\"> </textarea>
                 
                  </section>
                 
              </fieldset>
          </form>
\t</div>
\t<p class=\"contact_me\">CONTACT</p>
\t<p class=\"send_me\">SEND</p>
\t<p class=\"thanks\">THANKS</p>
\t<span class=\"top_flap close_sesame\"></span>
\t<span class=\"side_flaps\"></span>
\t<span class=\"bottom_flap\"></span>
</div>
<style>
body,html{
  background:#2B2735;
  width:100%;
  height:100%;
  padding-top:100px;
}
.top_flap {
  top: -245px;
  left: -15px;
  position: absolute;
  height: 245px;
  width: 800px;
  overflow-y: hidden;
  -webkit-perspective: 500;
  -moz-perspective: 500;
  -ms-perspective: 500;
  -o-perspective: 500;
  perspective: 500;
  -webkit-transform-origin: bottom;
  -moz-transform-origin: bottom;
  -ms-transform-origin: bottom;
  -o-transform-origin: bottom;
  transform-origin: bottom;
  -webkit-transition: all 500ms 200ms linear;
  -moz-transition: all 500ms 200ms linear;
  -o-transition: all 500ms 200ms linear;
  transition: all 500ms 200ms linear;
  -webkit-transition-timing-function: cubic-bezier(0.6, 1.3, 0.2, 2.8);
  -moz-transition-timing-function: cubic-bezier(0.6, 1.3, 0.2, 2.8);
  -o-transition-timing-function: cubic-bezier(0.6, 1.3, 0.2, 2.8);
  transition-timing-function: cubic-bezier(0.6, 1.3, 0.2, 2.8);
  z-index: 1;
}
.close_sesame {
  -webkit-transform: rotatex(-180deg);
  -moz-transform: rotatex(-180deg);
  -ms-transform: rotatex(-180deg);
  -o-transform: rotatex(-180deg);
  transform: rotatex(-180deg);
  z-index: 9999 ;
}
.top_flap:before {
  content: '';
  position: absolute;
  top: 90px;
  right: 248px;
  width: 460px;
  height: 460px;
  background: #eb6166;
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  border-radius: 20px;
  -webkit-background-clip: padding-box;
  -moz-background-clip: padding;
  background-clip: padding-box;
  -webkit-transform: rotate(60deg);
  -moz-transform: rotate(60deg);
  -ms-transform: rotate(60deg);
  -o-transform: rotate(60deg);
  transform: rotate(60deg);
}
.top_flap:after {
  content: '';
  position: absolute;
  top: 90px;
  left: 248px;
  width: 460px;
  height: 460px;
  background: #eb6166;
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  border-radius: 20px;
  -webkit-background-clip: padding-box;
  -moz-background-clip: padding;
  background-clip: padding-box;
  -webkit-transform: rotate(-60deg);
  -moz-transform: rotate(-60deg);
  -ms-transform: rotate(-60deg);
  -o-transform: rotate(-60deg);
  transform: rotate(-60deg);
}
.bottom_flap {
  bottom: -160px;
  left: -15px;
  position: relative;
  height: 245px;
  width: 800px;
  overflow-y: hidden;
  display: block;
  z-index: 10;
}
.bottom_flap:before {
  content: '';
  position: absolute;
  top: 90px;
  right: 248px;
  width: 460px;
  height: 460px;
  background: #f29c9f;
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  border-radius: 20px;
  -webkit-background-clip: padding-box;
  -moz-background-clip: padding;
  background-clip: padding-box;
  -webkit-transform: rotate(60deg);
  -moz-transform: rotate(60deg);
  -ms-transform: rotate(60deg);
  -o-transform: rotate(60deg);
  transform: rotate(60deg);
}
.bottom_flap:after {
  content: '';
  position: absolute;
  top: 90px;
  left: 248px;
  width: 460px;
  height: 460px;
  background: #f29c9f;
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  border-radius: 20px;
  -webkit-background-clip: padding-box;
  -moz-background-clip: padding;
  background-clip: padding-box;
  -webkit-transform: rotate(-60deg);
  -moz-transform: rotate(-60deg);
  -ms-transform: rotate(-60deg);
  -o-transform: rotate(-60deg);
  transform: rotate(-60deg);
}
.envelope {
  position: relative;
  margin: 40px auto;
  width: 770px;
  height: 400px;
  background: #ee787c;
  z-index: 999;
}
.envelope p {
  position: absolute;
  right: 0;
  left: 0;
  bottom: 76px;
  z-index: 999999999;
  font-family: 'NexaBold';
  font-size: 40px;
  display: inline-block;
  margin: 0 auto;
  width: 250px;
  height: 50px;
  border-bottom: 3px solid #9f1419;
  text-align: center;
  color: #ffffff;
  background: #e5343a;
  cursor: pointer;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  border-radius: 2px;
  -webkit-background-clip: padding-box;
  -moz-background-clip: padding;
  background-clip: padding-box;
  line-height:60px;
}
.side_flaps:before {
  content: '';
  position: absolute;
  top: 0px;
  left: 0px;
  width: 0;
  height: 0;
  border-left: 340px solid #f18e92;
  border-top: 200px solid transparent;
  border-bottom: 200px solid transparent;
  z-index: 10;
}
.side_flaps:after {
  content: '';
  position: absolute;
  top: 0;
  right: 0;
  width: 0;
  height: 0;
  border-right: 340px solid #f18e92;
  border-top: 200px solid transparent;
  border-bottom: 200px solid transparent;
  z-index: 10;
}
.contact_form {
  padding-top: 30px;
  left: 0;
  right: 0;
  bottom: 0;
  position: absolute;
  width: 700px;
  margin: 0 auto;
  height: 350px;
  background: #f6bcbe;
  -webkit-transition: all 800ms 200ms linear;
  -moz-transition: all 800ms 200ms linear;
  -o-transition: all 800ms 200ms linear;
  transition: all 800ms 200ms linear;
}
.open_form {
  -webkit-transition-timing-function: cubic-bezier(0.23, 0.69, 0.25, 0.9);
  -moz-transition-timing-function: cubic-bezier(0.23, 0.69, 0.25, 0.9);
  -o-transition-timing-function: cubic-bezier(0.23, 0.69, 0.25, 0.9);
  transition-timing-function: cubic-bezier(0.23, 0.69, 0.25, 0.9);
  height: 580px !important;
  z-index: 9;
}
.error {
  color: #f29c9f;
  font-family: 'NexaBold';
  font-size: 18px;
  position: absolute;
  height: 18px;
  width: 60%;
  right: 90px;
  text-align: right;
  top: -5px;
}
.form_part {
  width: 90%;
  margin: 0 auto;
  position: relative;
}
label {
  position: absolute;
  font-family: 'NexaBold';
  color: #f18e92;
  font-size: 30px;
  top: -12px;
  text-transform: uppercase;
}
input {
  width: 70%;
  border: none;
  background: #f18e92;
  height: 30px;
  margin: 20px auto;
  font-family: 'NexaBold';
  color: #f6bcbe;
  font-size: 22px;
  padding-left: 10px;
}
textarea {
  resize: none ;
  font-family: 'NexaBold';
  color: #f6bcbe;
  font-size: 22px;
  padding-left: 10px;
}
.message {
  margin: 20px auto;
  width: 70%;
  border: none;
  background: #f18e92;
  height: 90px;
}
.reset {
  font-family: 'NexaBold';
  font-size: 20px;
  text-align: center;
  color: #9f1419;
  line-height: 20px;
  position: absolute;
  width: 20px;
  height: 20px;
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  border-radius: 20px;
  -webkit-background-clip: padding-box;
  -moz-background-clip: padding;
  background-clip: padding-box;
  background: #f18e92;
  border: 4px solid #e84b50;
  top: -10px;
  right: -10px;
  cursor: pointer;
}
</style>
<script>
   \$('.thanks,.send_me').hide();

\t\$('.contact_me').on('click',function(){
\t\t\$('.contact').animate({marginTop:'80px'},300);
\t\t\$('.top_flap').removeClass('close_sesame');
\t\t\$('.contact_form').delay(500).queue(function(){\$('.contact_form').addClass('open_form').dequeue();});
\t\t\$(this).fadeOut(300);
\t\t\$('.send_me').fadeIn(300);
\t
\t});

\t\$('.reset,.send_me').on('click',function(){
        \$('.contact').delay(800).animate({marginTop:'0px'},300);
\t\t\$('.top_flap').delay(800).queue(function(){\$(this).addClass('close_sesame').dequeue();});
\t\t\$('.contact_form').removeClass('open_form');
\t\t\$('.send_me').fadeOut(300);
\t\t\$('.contact_me').fadeIn(300);
\t});
</script>", "emails/contact.html.twig", "/opt/lampp/htdocs/cinema-hub/templates/emails/contact.html.twig");
    }
}
