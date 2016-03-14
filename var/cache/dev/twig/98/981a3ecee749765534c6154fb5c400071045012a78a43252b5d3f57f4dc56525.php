<?php

/* base.html.twig */
class __TwigTemplate_18c69271e3846449c2fb644f507b38874a56f19a0a126d384f22dfc20ebbba84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85d0675db2c989e12063bb2fdfcf492a7da529e1c3169e70d4c6baea4b6115fb = $this->env->getExtension("native_profiler");
        $__internal_85d0675db2c989e12063bb2fdfcf492a7da529e1c3169e70d4c6baea4b6115fb->enter($__internal_85d0675db2c989e12063bb2fdfcf492a7da529e1c3169e70d4c6baea4b6115fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_85d0675db2c989e12063bb2fdfcf492a7da529e1c3169e70d4c6baea4b6115fb->leave($__internal_85d0675db2c989e12063bb2fdfcf492a7da529e1c3169e70d4c6baea4b6115fb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d40b75c747d0b806e487775b8c472bd93c50d2157b7d5b86a661e96e71c87590 = $this->env->getExtension("native_profiler");
        $__internal_d40b75c747d0b806e487775b8c472bd93c50d2157b7d5b86a661e96e71c87590->enter($__internal_d40b75c747d0b806e487775b8c472bd93c50d2157b7d5b86a661e96e71c87590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d40b75c747d0b806e487775b8c472bd93c50d2157b7d5b86a661e96e71c87590->leave($__internal_d40b75c747d0b806e487775b8c472bd93c50d2157b7d5b86a661e96e71c87590_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_600f1b54ea2594f2bb4b7afb3b075a22ff08e53ec64613317669aa42d80264cb = $this->env->getExtension("native_profiler");
        $__internal_600f1b54ea2594f2bb4b7afb3b075a22ff08e53ec64613317669aa42d80264cb->enter($__internal_600f1b54ea2594f2bb4b7afb3b075a22ff08e53ec64613317669aa42d80264cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_600f1b54ea2594f2bb4b7afb3b075a22ff08e53ec64613317669aa42d80264cb->leave($__internal_600f1b54ea2594f2bb4b7afb3b075a22ff08e53ec64613317669aa42d80264cb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_85c02cb86da146c366af2cc6bcb0a08db6f28e1d36749024a345382910480f40 = $this->env->getExtension("native_profiler");
        $__internal_85c02cb86da146c366af2cc6bcb0a08db6f28e1d36749024a345382910480f40->enter($__internal_85c02cb86da146c366af2cc6bcb0a08db6f28e1d36749024a345382910480f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_85c02cb86da146c366af2cc6bcb0a08db6f28e1d36749024a345382910480f40->leave($__internal_85c02cb86da146c366af2cc6bcb0a08db6f28e1d36749024a345382910480f40_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dcd83446fae257122db3ec6047e9f54fba6fd4f3cefdbe219299fe073c2114f1 = $this->env->getExtension("native_profiler");
        $__internal_dcd83446fae257122db3ec6047e9f54fba6fd4f3cefdbe219299fe073c2114f1->enter($__internal_dcd83446fae257122db3ec6047e9f54fba6fd4f3cefdbe219299fe073c2114f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_dcd83446fae257122db3ec6047e9f54fba6fd4f3cefdbe219299fe073c2114f1->leave($__internal_dcd83446fae257122db3ec6047e9f54fba6fd4f3cefdbe219299fe073c2114f1_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
