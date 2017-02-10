<?php

/* modules/webform/templates/webform-submission-navigation.html.twig */
class __TwigTemplate_dc3559addfd87f5dc3829c9a0b10bc3e080c93cf6f4f081eee027ab99b237657 extends Twig_Template
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
        $tags = array("if" => 16);
        $filters = array("t" => 21);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
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

        // line 16
        if (((isset($context["prev_url"]) ? $context["prev_url"] : null) || (isset($context["next_url"]) ? $context["next_url"] : null))) {
            // line 17
            echo "  <nav id=\"webform-submission-navigation-";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["webform_id"]) ? $context["webform_id"] : null), "html", null, true));
            echo "\" class=\"webform-submission-navigation\" role=\"navigation\" aria-labelledby=\"webform-submission-label-";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["webform_id"]) ? $context["webform_id"] : null), "html", null, true));
            echo "\">
    <ul class=\"webform-submission-pager\">
      ";
            // line 19
            if ((isset($context["prev_url"]) ? $context["prev_url"] : null)) {
                // line 20
                echo "        <li class=\"webform-submission-pager__item webform-submission-pager__item--previous\">
          <a href=\"";
                // line 21
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["prev_url"]) ? $context["prev_url"] : null), "html", null, true));
                echo "\" rel=\"prev\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Go to previous page")));
                echo "\"><b>";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("‹")));
                echo "</b> ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Previous submission")));
                echo "</a>
        </li>
      ";
            }
            // line 24
            echo "      ";
            if ((isset($context["next_url"]) ? $context["next_url"] : null)) {
                // line 25
                echo "        <li class=\"webform-submission-pager__item webform-submission-pager__item--next\">
          <a href=\"";
                // line 26
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["next_url"]) ? $context["next_url"] : null), "html", null, true));
                echo "\" rel=\"next\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Go to next page")));
                echo "\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Next submission")));
                echo " <b>";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("›")));
                echo "</b></a>
        </li>
      ";
            }
            // line 29
            echo "    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/webform/templates/webform-submission-navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 29,  76 => 26,  73 => 25,  70 => 24,  58 => 21,  55 => 20,  53 => 19,  45 => 17,  43 => 16,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to navigate webform submission.*/
/*  **/
/*  * Available variables:*/
/*  * - prev_url: URL to the previous webform submission.*/
/*  * - next_url: URL to the next webform submission.*/
/*  * - webform_id: The webform  ID. Provided for context.*/
/*  **/
/*  * @see template_preprocess_webform_submission_navigation()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% if prev_url or next_url %}*/
/*   <nav id="webform-submission-navigation-{{ webform_id }}" class="webform-submission-navigation" role="navigation" aria-labelledby="webform-submission-label-{{ webform_id }}">*/
/*     <ul class="webform-submission-pager">*/
/*       {% if prev_url %}*/
/*         <li class="webform-submission-pager__item webform-submission-pager__item--previous">*/
/*           <a href="{{ prev_url }}" rel="prev" title="{{ 'Go to previous page'|t }}"><b>{{ '‹'|t }}</b> {{ 'Previous submission'|t }}</a>*/
/*         </li>*/
/*       {% endif %}*/
/*       {% if next_url %}*/
/*         <li class="webform-submission-pager__item webform-submission-pager__item--next">*/
/*           <a href="{{ next_url }}" rel="next" title="{{ 'Go to next page'|t }}">{{ 'Next submission'|t }} <b>{{ '›'|t }}</b></a>*/
/*         </li>*/
/*       {% endif %}*/
/*     </ul>*/
/*   </nav>*/
/* {% endif %}*/
/* */
