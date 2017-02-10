<?php

/* modules/webform/templates/webform-element-base-html.html.twig */
class __TwigTemplate_298aa21ca06d72f6db390fc7841003b7d8ff151d14efa9bfe700023bca0b936f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 15);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 15
        if ((isset($context["title"]) ? $context["title"] : null)) {
            echo "<b>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</b><br/>";
        }
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true));
        echo "<br/><br/>
";
    }

    public function getTemplateName()
    {
        return "modules/webform/templates/webform-element-base-html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 16,  43 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a form base element as html.*/
/*  **/
/*  * Available variables:*/
/*  * - element: The element.*/
/*  * - title: The label for the element.*/
/*  * - value: The content for the element.*/
/*  * - options Associative array of options for element.*/
/*  *   - multiline: Flag to determine if value spans multiple lines.*/
/*  *   - email: Flag to determine if element is for an email.*/
/*  *//* */
/* #}*/
/* {% if title %}<b>{{ title }}</b><br/>{% endif %}*/
/* {{ value }}<br/><br/>*/
/* */
