<?php

/* modules/webform/templates/webform-submission-information.html.twig */
class __TwigTemplate_b9987169d932a9fe090b8b751f4161c4a06c6f71ddb982cbec536a1984e18792 extends Twig_Template
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
        $tags = array("if" => 14);
        $filters = array("t" => 15);
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

        // line 14
        echo "<details data-webform-element-id=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["webform_id"]) ? $context["webform_id"] : null), "html", null, true));
        echo "--submission_information\"";
        if ((isset($context["open"]) ? $context["open"] : null)) {
            echo " open=\"open\"";
        }
        echo ">
  <summary role=\"button\"";
        // line 15
        if ((isset($context["open"]) ? $context["open"] : null)) {
            echo " aria-expanded=\"true\" aria-pressed=\"true\"";
        }
        echo ">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Submission information")));
        echo "</summary>
  <div class=\"details-wrapper\">
    ";
        // line 17
        if ((isset($context["submissions_view"]) ? $context["submissions_view"] : null)) {
            // line 18
            echo "      <div><b>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Submission Number")));
            echo ":</b> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["serial"]) ? $context["serial"] : null), "html", null, true));
            echo "</div>
      <div><b>";
            // line 19
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Submission ID")));
            echo ":</b> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sid"]) ? $context["sid"] : null), "html", null, true));
            echo "</div>
      <div><b>";
            // line 20
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Submission UUID")));
            echo ":</b> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["uuid"]) ? $context["uuid"] : null), "html", null, true));
            echo "</div>
      ";
            // line 21
            if ((isset($context["uri"]) ? $context["uri"] : null)) {
                // line 22
                echo "        <div><b>";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Submission URI")));
                echo ":</b> ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["uri"]) ? $context["uri"] : null), "html", null, true));
                echo "</div>
      ";
            }
            // line 24
            echo "      ";
            if ((isset($context["token_update"]) ? $context["token_update"] : null)) {
                // line 25
                echo "        <div><b>";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Submission Update")));
                echo ":</b> ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["token_update"]) ? $context["token_update"] : null), "html", null, true));
                echo "</div>
      ";
            }
            // line 27
            echo "      <br/>
      <div><b>";
            // line 28
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Created")));
            echo ":</b> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["created"]) ? $context["created"] : null), "html", null, true));
            echo "</div>
      <div><b>";
            // line 29
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Completed")));
            echo ":</b> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["completed"]) ? $context["completed"] : null), "html", null, true));
            echo "</div>
      <div><b>";
            // line 30
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Changed")));
            echo ":</b> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["changed"]) ? $context["changed"] : null), "html", null, true));
            echo "</div>
      <br/>
      <div><b>";
            // line 32
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Remote IP address")));
            echo ":</b> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["remote_addr"]) ? $context["remote_addr"] : null), "html", null, true));
            echo "</div>
      <div><b>";
            // line 33
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Submitted by")));
            echo ":</b> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["submitted_by"]) ? $context["submitted_by"] : null), "html", null, true));
            echo "</div>
      <div><b>";
            // line 34
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Language")));
            echo ":</b> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["language"]) ? $context["language"] : null), "html", null, true));
            echo "</div>
      <br/>
      <div><b>";
            // line 36
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Is draft")));
            echo ":</b> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["is_draft"]) ? $context["is_draft"] : null), "html", null, true));
            echo "</div>
      ";
            // line 37
            if ((isset($context["current_page"]) ? $context["current_page"] : null)) {
                // line 38
                echo "        <div><b>";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Current page")));
                echo ":</b> ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["current_page"]) ? $context["current_page"] : null), "html", null, true));
                echo "</div>
      ";
            }
            // line 40
            echo "      <div><b>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Webform")));
            echo ":</b> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["webform"]) ? $context["webform"] : null), "html", null, true));
            echo "</div>
      ";
            // line 41
            if ((isset($context["submitted_to"]) ? $context["submitted_to"] : null)) {
                // line 42
                echo "        <div><b>";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Submitted to")));
                echo ":</b> ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["submitted_to"]) ? $context["submitted_to"] : null), "html", null, true));
                echo "</div>
      ";
            }
            // line 44
            echo "      ";
            if (((isset($context["sticky"]) ? $context["sticky"] : null) || (isset($context["notes"]) ? $context["notes"] : null))) {
                // line 45
                echo "        <br/>
        ";
                // line 46
                if ((isset($context["sticky"]) ? $context["sticky"] : null)) {
                    // line 47
                    echo "          <div><b>";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Flagged")));
                    echo ":</b> ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sticky"]) ? $context["sticky"] : null), "html", null, true));
                    echo "</div>
        ";
                }
                // line 49
                echo "        ";
                if ((isset($context["notes"]) ? $context["notes"] : null)) {
                    // line 50
                    echo "          <div><b>";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Notes")));
                    echo ":</b> ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["notes"]) ? $context["notes"] : null), "html", null, true));
                    echo "</div>
        ";
                }
                // line 52
                echo "      ";
            }
            // line 53
            echo "
    ";
        } else {
            // line 55
            echo "      <div><b>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Submission ID")));
            echo ":</b> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sid"]) ? $context["sid"] : null), "html", null, true));
            echo "</div>
      <div><b>";
            // line 56
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Created")));
            echo ":</b> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["created"]) ? $context["created"] : null), "html", null, true));
            echo "</div>
    ";
        }
        // line 58
        echo "
  </div>
</details>
";
    }

    public function getTemplateName()
    {
        return "modules/webform/templates/webform-submission-information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 58,  218 => 56,  211 => 55,  207 => 53,  204 => 52,  196 => 50,  193 => 49,  185 => 47,  183 => 46,  180 => 45,  177 => 44,  169 => 42,  167 => 41,  160 => 40,  152 => 38,  150 => 37,  144 => 36,  137 => 34,  131 => 33,  125 => 32,  118 => 30,  112 => 29,  106 => 28,  103 => 27,  95 => 25,  92 => 24,  84 => 22,  82 => 21,  76 => 20,  70 => 19,  63 => 18,  61 => 17,  52 => 15,  43 => 14,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation from webform submission information.*/
/*  **/
/*  * Available variables:*/
/*  * @todo Add variables.*/
/*  **/
/*  * @see template_preprocess_webform_submission_information()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <details data-webform-element-id="{{ webform_id }}--submission_information"{% if open %} open="open"{% endif %}>*/
/*   <summary role="button"{% if open %} aria-expanded="true" aria-pressed="true"{% endif %}>{{ 'Submission information'|t }}</summary>*/
/*   <div class="details-wrapper">*/
/*     {% if submissions_view %}*/
/*       <div><b>{{ 'Submission Number'|t }}:</b> {{ serial }}</div>*/
/*       <div><b>{{ 'Submission ID'|t }}:</b> {{ sid }}</div>*/
/*       <div><b>{{ 'Submission UUID'|t }}:</b> {{ uuid }}</div>*/
/*       {% if uri %}*/
/*         <div><b>{{ 'Submission URI'|t }}:</b> {{ uri }}</div>*/
/*       {% endif %}*/
/*       {% if token_update %}*/
/*         <div><b>{{ 'Submission Update'|t }}:</b> {{ token_update }}</div>*/
/*       {% endif %}*/
/*       <br/>*/
/*       <div><b>{{ 'Created'|t }}:</b> {{ created }}</div>*/
/*       <div><b>{{ 'Completed'|t }}:</b> {{ completed }}</div>*/
/*       <div><b>{{ 'Changed'|t }}:</b> {{ changed }}</div>*/
/*       <br/>*/
/*       <div><b>{{ 'Remote IP address'|t }}:</b> {{ remote_addr }}</div>*/
/*       <div><b>{{ 'Submitted by'|t }}:</b> {{ submitted_by }}</div>*/
/*       <div><b>{{ 'Language'|t }}:</b> {{ language }}</div>*/
/*       <br/>*/
/*       <div><b>{{ 'Is draft'|t }}:</b> {{ is_draft }}</div>*/
/*       {% if current_page %}*/
/*         <div><b>{{ 'Current page'|t }}:</b> {{ current_page }}</div>*/
/*       {% endif %}*/
/*       <div><b>{{ 'Webform'|t }}:</b> {{ webform }}</div>*/
/*       {% if submitted_to %}*/
/*         <div><b>{{ 'Submitted to'|t }}:</b> {{ submitted_to }}</div>*/
/*       {% endif %}*/
/*       {% if sticky or notes %}*/
/*         <br/>*/
/*         {% if sticky %}*/
/*           <div><b>{{ 'Flagged'|t }}:</b> {{ sticky }}</div>*/
/*         {% endif %}*/
/*         {% if notes %}*/
/*           <div><b>{{ 'Notes'|t }}:</b> {{ notes }}</div>*/
/*         {% endif %}*/
/*       {% endif %}*/
/* */
/*     {% else %}*/
/*       <div><b>{{ 'Submission ID'|t }}:</b> {{ sid }}</div>*/
/*       <div><b>{{ 'Created'|t }}:</b> {{ created }}</div>*/
/*     {% endif %}*/
/* */
/*   </div>*/
/* </details>*/
/* */
