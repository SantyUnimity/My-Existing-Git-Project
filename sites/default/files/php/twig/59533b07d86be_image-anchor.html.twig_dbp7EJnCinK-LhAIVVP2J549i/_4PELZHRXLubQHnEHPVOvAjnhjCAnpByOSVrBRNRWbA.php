<?php

/* core/themes/stable/templates/admin/image-anchor.html.twig */
class __TwigTemplate_2d34d89bc26552a4d7d8217d79d5b36a1556702fe927c57f291b6a5109d1c655 extends Twig_Template
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
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["table"]) ? $context["table"] : null), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/image-anchor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 12,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override for a 3x3 grid of checkboxes for image anchors.
 *
 * Available variables:
 * - table: HTML for the table of image anchors.
 *
 * @see template_preprocess_image_anchor()
 */
#}
{{ table }}
";
    }
}
