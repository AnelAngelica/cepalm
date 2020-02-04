<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/nero/templates/block--system-branding-block.html.twig */
class __TwigTemplate_53a2b96e2009f87f07f2150d9653a246cba3869c0f4673ad8ab3b9b691054cfb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "themes/nero/templates/block--system-branding-block.html.twig", 1);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 17, "if" => 21];
        $filters = ["escape" => 24, "t" => 24];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doGetParent(array $context)
    {
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 17
        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "site-branding"], "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        // line 20
        echo "  <div class=\"logo\">
    ";
        // line 21
        if (($context["site_logo"] ?? null)) {
            // line 22
            echo "    <div class=\"logo-image\">
    <!-- Image link -->
      <a href=\"";
            // line 24
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
            echo "\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\" rel=\"home\" id=\"logo\">
\t<img src = ";
            // line 25
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null)), "html", null, true);
            echo " >
      </a>
    </div>
    ";
        }
        // line 29
        echo "
    ";
        // line 30
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 31
            echo "      <div class=\"logo-text\">
\t";
            // line 32
            if (($context["site_name"] ?? null)) {
                // line 33
                echo "\t  <h1 class=\"site-name\">
\t    <a href=\"";
                // line 34
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
                echo "</a>
\t  </h1>
\t";
            }
            // line 37
            echo "
\t";
            // line 38
            if (($context["site_slogan"] ?? null)) {
                // line 39
                echo "\t  <div class=\"logo-meta\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null)), "html", null, true);
                echo "</div>

\t";
            }
            // line 42
            echo "      </div>
    ";
        }
        // line 44
        echo "
    <div class=\"clearfix\"></div>

  </div>
";
    }

    public function getTemplateName()
    {
        return "themes/nero/templates/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 44,  127 => 42,  120 => 39,  118 => 38,  115 => 37,  105 => 34,  102 => 33,  100 => 32,  97 => 31,  95 => 30,  92 => 29,  85 => 25,  79 => 24,  75 => 22,  73 => 21,  70 => 20,  67 => 19,  63 => 1,  61 => 17,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/nero/templates/block--system-branding-block.html.twig", "C:\\xampp\\htdocs\\drupal-8.7.8\\themes\\nero\\templates\\block--system-branding-block.html.twig");
    }
}
