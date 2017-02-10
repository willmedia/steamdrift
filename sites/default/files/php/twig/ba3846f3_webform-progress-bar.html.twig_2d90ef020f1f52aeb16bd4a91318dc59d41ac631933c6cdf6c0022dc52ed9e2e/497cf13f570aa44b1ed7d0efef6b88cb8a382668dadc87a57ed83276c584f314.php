<?php

/* modules/webform/templates/webform-progress-bar.html.twig */
class __TwigTemplate_b09f8b1e4f68348a38b0d63fcab8af12992713cec16f129f611154ec0243bbbe extends Twig_Template
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
        $tags = array("if" => 21, "for" => 23, "set" => 24);
        $filters = array("length" => 21);
        $functions = array("attach_library" => 19);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for', 'set'),
                array('length'),
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

        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("webform/webform.progress.bar"), "html", null, true));
        echo "

";
        // line 21
        if ((twig_length_filter($this->env, (isset($context["progress"]) ? $context["progress"] : null)) < (isset($context["max_pages"]) ? $context["max_pages"] : null))) {
            // line 22
            echo "<ol class=\"webform-progress-bar\" data-steps=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_length_filter($this->env, (isset($context["progress"]) ? $context["progress"] : null)), "html", null, true));
            echo "\">
";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["progress"]) ? $context["progress"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["index"] => $context["title"]) {
                // line 24
                $context["classes"] = array(0 => "webform-progress-bar__page", 1 => (((                // line 26
$context["index"] < (isset($context["current_index"]) ? $context["current_index"] : null))) ? ("webform-progress-bar__page--done") : ("")), 2 => (((                // line 27
$context["index"] == (isset($context["current_index"]) ? $context["current_index"] : null))) ? ("webform-progress-bar__page--current") : ("")));
                // line 29
                echo "<li";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "setAttribute", array(0 => "class", 1 => ""), "method"), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
                echo ">
  <b>";
                // line 30
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["title"], "html", null, true));
                echo "</b>";
                if (($this->getAttribute($context["loop"], "first", array()) || $this->getAttribute($context["loop"], "last", array()))) {
                    echo "<span></span>";
                }
                // line 31
                echo "</li>";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "</ol>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/webform/templates/webform-progress-bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 32,  87 => 31,  81 => 30,  76 => 29,  74 => 27,  73 => 26,  72 => 24,  55 => 23,  50 => 22,  48 => 21,  43 => 19,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation from webform wizard progress bar.*/
/*  **/
/*  * Available variables:*/
/*  * - webform: A webform.*/
/*  * - pages: Associatve array of wizard pages.*/
/*  * - progress: Array of wizard progress containing page titles.*/
/*  * - current_page: Current wizard page key.*/
/*  * - current_index: The current wizard page index.*/
/*  * - max_pages: Maximum number of pages to be displayed.*/
/*  **/
/*  * @see template_preprocess_webform_progress_bar()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {{ attach_library('webform/webform.progress.bar') }}*/
/* */
/* {% if progress|length < max_pages %}*/
/* <ol class="webform-progress-bar" data-steps="{{ progress|length }}">*/
/* {% for index, title in progress %}{%*/
/*   set classes = [*/
/*     'webform-progress-bar__page',*/
/*     index < current_index ? 'webform-progress-bar__page--done',*/
/*     index == current_index ? 'webform-progress-bar__page--current',*/
/*   ]*/
/* %}<li{{ attributes.setAttribute('class', '').addClass(classes) }}>*/
/*   <b>{{ title }}</b>{% if (loop.first	or loop.last) %}<span></span>{% endif %}*/
/* </li>{% endfor %}*/
/* </ol>*/
/* {% endif %}*/
/* */
