<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b0f4fee69a3aa92f4c6f6ba6ea345bbc29920882159dbdb0ecc574f7bbc472de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46ea760d273ce9c3b34ef781f1e2c66f3c4185acf20a8496cf8cb1c60f434d90 = $this->env->getExtension("native_profiler");
        $__internal_46ea760d273ce9c3b34ef781f1e2c66f3c4185acf20a8496cf8cb1c60f434d90->enter($__internal_46ea760d273ce9c3b34ef781f1e2c66f3c4185acf20a8496cf8cb1c60f434d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46ea760d273ce9c3b34ef781f1e2c66f3c4185acf20a8496cf8cb1c60f434d90->leave($__internal_46ea760d273ce9c3b34ef781f1e2c66f3c4185acf20a8496cf8cb1c60f434d90_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_174fa191e186a2cd8b1637c35df6b896160a696f9624c879a76fb7949b7fecfd = $this->env->getExtension("native_profiler");
        $__internal_174fa191e186a2cd8b1637c35df6b896160a696f9624c879a76fb7949b7fecfd->enter($__internal_174fa191e186a2cd8b1637c35df6b896160a696f9624c879a76fb7949b7fecfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_174fa191e186a2cd8b1637c35df6b896160a696f9624c879a76fb7949b7fecfd->leave($__internal_174fa191e186a2cd8b1637c35df6b896160a696f9624c879a76fb7949b7fecfd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_94c620cf16aa8a3fcdd176742782b735a05320b381dee086d4ffdf02ebf05093 = $this->env->getExtension("native_profiler");
        $__internal_94c620cf16aa8a3fcdd176742782b735a05320b381dee086d4ffdf02ebf05093->enter($__internal_94c620cf16aa8a3fcdd176742782b735a05320b381dee086d4ffdf02ebf05093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_94c620cf16aa8a3fcdd176742782b735a05320b381dee086d4ffdf02ebf05093->leave($__internal_94c620cf16aa8a3fcdd176742782b735a05320b381dee086d4ffdf02ebf05093_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5f3939cead32d07f05c588f4ea94ba3ca3ccb971ef4f77a10e17fc1157ee33d2 = $this->env->getExtension("native_profiler");
        $__internal_5f3939cead32d07f05c588f4ea94ba3ca3ccb971ef4f77a10e17fc1157ee33d2->enter($__internal_5f3939cead32d07f05c588f4ea94ba3ca3ccb971ef4f77a10e17fc1157ee33d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5f3939cead32d07f05c588f4ea94ba3ca3ccb971ef4f77a10e17fc1157ee33d2->leave($__internal_5f3939cead32d07f05c588f4ea94ba3ca3ccb971ef4f77a10e17fc1157ee33d2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
