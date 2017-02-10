<?php

/* modules/webform/templates/webform-composite-creditcard.html.twig */
class __TwigTemplate_1d0e3d3a5d4c8dc0955f01334419cf6afd5e95590bdc69bfcb43f0e081cf0a3c extends Twig_Template
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
        $tags = array("if" => 17);
        $filters = array();
        $functions = array("attach_library" => 16);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array('attach_library')
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

        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("webform/webform.element.composite"), "html", null, true));
        echo "
";
        // line 17
        if ((isset($context["flexbox"]) ? $context["flexbox"] : null)) {
            // line 18
            echo "
  ";
            // line 19
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "warning", array()), "html", null, true));
            echo "

  ";
            // line 21
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "name", array())) {
                // line 22
                echo "    <div class=\"webform-flexbox\">
      <div class=\"webform-flex webform-flex--1\"><div class=\"webform-flex--container\">";
                // line 23
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "name", array()), "html", null, true));
                echo "</div></div>
    </div>
  ";
            }
            // line 26
            echo "
  <div class=\"webform-flexbox\">
    ";
            // line 28
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "type", array())) {
                // line 29
                echo "      <div class=\"webform-flex webform-flex--1\"><div class=\"webform-flex--container\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "type", array()), "html", null, true));
                echo "</div></div>
    ";
            }
            // line 31
            echo "    <div class=\"webform-flex webform-flex--2\"><div class=\"webform-flex--container\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "number", array()), "html", null, true));
            echo "</div></div>
    <div class=\"webform-flex webform-flex--1\"><div class=\"webform-flex--container\">";
            // line 32
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "civ", array()), "html", null, true));
            echo "</div></div>
  </div>

  <div class=\"webform-flexbox\">
    <div class=\"webform-flex webform-flex--1\"><div class=\"webform-flex--container\">
      ";
            // line 37
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "expiration", array()), "html", null, true));
            echo "
      ";
            // line 38
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "expiration_month", array()), "html", null, true));
            echo "
      ";
            // line 39
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "expiration_year", array()), "html", null, true));
            echo "
    </div></div>
  </div>

";
        } else {
            // line 44
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "modules/webform/templates/webform-composite-creditcard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 44,  101 => 39,  97 => 38,  93 => 37,  85 => 32,  80 => 31,  74 => 29,  72 => 28,  68 => 26,  62 => 23,  59 => 22,  57 => 21,  52 => 19,  49 => 18,  47 => 17,  43 => 16,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation of a creditcard composite webform element.*/
/*  **/
/*  * Available variables:*/
/*  * - content: The creditcard webform element to be output.*/
/*  * - flexbox: Determines if Flexbox layout should be applied to the composite*/
/*  *   element.*/
/*  **/
/*  * @see template_preprocess_webform_creditcard()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {{ attach_library('webform/webform.element.composite') }}*/
/* {% if flexbox %}*/
/* */
/*   {{  content.warning }}*/
/* */
/*   {% if content.name %}*/
/*     <div class="webform-flexbox">*/
/*       <div class="webform-flex webform-flex--1"><div class="webform-flex--container">{{ content.name }}</div></div>*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*   <div class="webform-flexbox">*/
/*     {% if content.type %}*/
/*       <div class="webform-flex webform-flex--1"><div class="webform-flex--container">{{ content.type }}</div></div>*/
/*     {% endif %}*/
/*     <div class="webform-flex webform-flex--2"><div class="webform-flex--container">{{ content.number }}</div></div>*/
/*     <div class="webform-flex webform-flex--1"><div class="webform-flex--container">{{ content.civ }}</div></div>*/
/*   </div>*/
/* */
/*   <div class="webform-flexbox">*/
/*     <div class="webform-flex webform-flex--1"><div class="webform-flex--container">*/
/*       {{ content.expiration }}*/
/*       {{ content.expiration_month }}*/
/*       {{ content.expiration_year }}*/
/*     </div></div>*/
/*   </div>*/
/* */
/* {% else %}*/
/*   {{ content }}*/
/* {% endif %}*/
/* */
