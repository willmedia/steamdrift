<?php

/* modules/webform/templates/webform-help-video-youtube.html.twig */
class __TwigTemplate_a42c227fcdfab022f12c1629c58e83bbfbb39809a4a8374ead6e254adbd0e186 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array("attach_library" => 12);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("webform/webform.help"), "html", null, true));
        echo "
<div class=\"webform-help-video-youtube\">
  <div class=\"webform-help-video-youtube--container\">
    <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["youtube_id"]) ? $context["youtube_id"] : null), "html", null, true));
        echo "?rel=0&autoplay=1\" frameborder=\"0\" allowfullscreen></iframe>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/webform/templates/webform-help-video-youtube.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 15,  43 => 12,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme implementation for webform help video using YouTube.*/
/*  **/
/*  * Available variables*/
/*  * - youtube_id: YouTube video id.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {{ attach_library('webform/webform.help') }}*/
/* <div class="webform-help-video-youtube">*/
/*   <div class="webform-help-video-youtube--container">*/
/*     <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ youtube_id }}?rel=0&autoplay=1" frameborder="0" allowfullscreen></iframe>*/
/*   </div>*/
/* </div>*/
/* */
