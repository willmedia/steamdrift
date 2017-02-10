<?php

/* modules/webform/templates/webform-container-base-html.html.twig */
class __TwigTemplate_f68045842836e93897b02fccd9239f51b85cef2efdae98c86a5cfd4136942a93 extends Twig_Template
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
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "email", array())) {
            // line 16
            echo "<h3>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h3>
";
            // line 17
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true));
            echo "
";
        } else {
            // line 19
            echo "<details data-webform-element-id=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true));
            echo "\" open=\"open\">
<summary role=\"button\" aria-expanded=\"true\" aria-pressed=\"true\">";
            // line 20
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</summary>
<div class=\"details-wrapper\">";
            // line 21
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true));
            echo "</div>
</details>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/webform/templates/webform-container-base-html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 21,  60 => 20,  55 => 19,  50 => 17,  45 => 16,  43 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a webform base container as html.*/
/*  **/
/*  * Available variables:*/
/*  * - element: The webform element.*/
/*  * - id: The webform element id.*/
/*  * - title: The label for the container.*/
/*  * - value: The content for the container.*/
/*  * - options Associative array of options for element.*/
/*  *   - email: Flag to determine if element is for an email.*/
/*  *//* */
/* #}*/
/* {% if options.email %}*/
/* <h3>{{ title }}</h3>*/
/* {{ value }}*/
/* {% else %}*/
/* <details data-webform-element-id="{{ id }}" open="open">*/
/* <summary role="button" aria-expanded="true" aria-pressed="true">{{ title }}</summary>*/
/* <div class="details-wrapper">{{ value }}</div>*/
/* </details>*/
/* {% endif %}*/
/* */
