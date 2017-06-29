<?php

/* core/themes/stable/templates/admin/image-crop-summary.html.twig */
class __TwigTemplate_9d7139670af8dc9c05812bcac102118fe04256d14c88afc1d367e616ac14e594 extends Twig_Template
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
        $tags = array("if" => 18, "trans" => 22);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'trans'),
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

        // line 18
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "width", array()) && $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "height", array()))) {
            // line 19
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "width", array()), "html", null, true));
            echo "×";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "height", array()), "html", null, true));
        } else {
            // line 21
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "width", array())) {
                // line 22
                echo "    ";
                echo t("width @data.width", array("@data.width" => $this->getAttribute(                // line 23
(isset($context["data"]) ? $context["data"] : null), "width", array()), ));
                // line 25
                echo "  ";
            } elseif ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "height", array())) {
                // line 26
                echo "    ";
                echo t("height @data.height", array("@data.height" => $this->getAttribute(                // line 27
(isset($context["data"]) ? $context["data"] : null), "height", array()), ));
                // line 29
                echo "  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/image-crop-summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 29,  61 => 27,  59 => 26,  56 => 25,  54 => 23,  52 => 22,  50 => 21,  45 => 19,  43 => 18,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override for a summary of an image crop effect.
 *
 * Available variables:
 * - data: The current configuration for this resize effect, including:
 *   - width: The width of the resized image.
 *   - height: The height of the resized image.
 *   - anchor: The part of the image that will be retained after cropping.
 *   - anchor_label: The translated label of the crop anchor.
 * - effect: The effect information, including:
 *   - id: The effect identifier.
 *   - label: The effect name.
 *   - description: The effect description.
 */
#}
{% if data.width and data.height -%}
  {{ data.width }}×{{ data.height }}
{%- else -%}
  {% if data.width %}
    {% trans %}
      width {{ data.width }}
    {% endtrans %}
  {% elseif data.height %}
    {% trans %}
      height {{ data.height }}
    {% endtrans %}
  {% endif %}
{%- endif %}
";
    }
}
