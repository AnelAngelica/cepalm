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

/* themes/nero/templates/page.html.twig */
class __TwigTemplate_7f96daddba74c26be048dc30987bf1fafe13437924aadc1113a0eef259128867 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 79, "for" => 176];
        $filters = ["escape" => 81, "raw" => 177];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw'],
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 71
        echo "
<!-- #pre-header -->
<div class=\"slidepanel\">
\t<div class=\"container\">
\t\t<!-- #pre-header-inside -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"spara\">
\t\t\t\t\t";
        // line 79
        if ($this->getAttribute(($context["page"] ?? null), "pre_header_first", [])) {
            // line 80
            echo "\t\t\t\t\t\t<p><i class=\"fa fa-envelope-o lightblue\"></i></p>
\t\t\t\t\t\t";
            // line 81
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pre_header_first", [])), "html", null, true);
            echo "
\t\t\t\t\t";
        }
        // line 83
        echo "\t\t\t\t\t";
        if ($this->getAttribute(($context["page"] ?? null), "pre_header_second", [])) {
            // line 84
            echo "\t\t\t\t\t\t<p><i class=\"fa fa-twitter lightblue\"></i></p>
\t\t\t\t\t\t";
            // line 85
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pre_header_second", [])), "html", null, true);
            echo "
\t\t\t\t\t";
        }
        // line 87
        echo "\t\t\t\t\t";
        if ($this->getAttribute(($context["page"] ?? null), "pre_header_third", [])) {
            // line 88
            echo "\t\t\t\t\t\t<p><i class=\"fa fa-desktop lightblue\"></i></p>
\t\t\t\t\t\t";
            // line 89
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pre_header_third", [])), "html", null, true);
            echo "
\t\t\t\t\t";
        }
        // line 91
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t";
        // line 94
        if (($context["show_social_icons"] ?? null)) {
            // line 95
            echo "\t\t\t\t\t<div class=\"social\">
\t\t\t\t\t\t<a href=\"";
            // line 96
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
            echo "\"  class=\"bblue\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t<a href=\"";
            // line 97
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null)), "html", null, true);
            echo "\"  class=\"borange\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
\t\t\t\t\t\t<a href=\"";
            // line 98
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
            echo "\" class=\"blightblue\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t<a href=\"";
            // line 99
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
            echo "\" class=\"bviolet\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
\t\t\t\t\t\t<a href=\"";
            // line 100
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null)), "html", null, true);
            echo "\" class=\"bred\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
\t\t\t\t\t\t<a href=\"";
            // line 101
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null)), "html", null, true);
            echo "\" class=\"borange\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 104
        echo "\t\t\t</div>
\t\t\t<!-- EOF: #pre-header-inside -->
\t\t</div>
\t</div>

\t<div class=\"clearfix\"></div>

</div>
<!-- EOF: #pre-header -->


<!-- Header starts -->
<header>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3 col-sm-4\">
\t\t\t\t<!-- Logo starts -->
\t\t\t\t";
        // line 121
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 122
            echo "\t\t\t\t\t";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
\t\t\t\t";
        }
        // line 124
        echo "\t\t\t\t<!-- Logo ends -->
\t\t\t</div>
\t\t\t<div class=\"col-md-9 col-sm-8\">
\t\t\t\t<!-- Navbar starts -->
\t\t\t\t<div class=\"navi pull-right\">
\t\t\t\t\t<div id=\"ddtopmenubar\" class=\"mattblackmenu\">
\t\t\t\t\t\t";
        // line 130
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"navis\"></div>
\t\t\t\t<!-- Navbar ends -->
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
</header>

<div class=\"clearfix\"></div>

";
        // line 143
        if (( !($context["is_front"] ?? null) && ((($context["page_title"] ?? null) || $this->getAttribute(($context["page"] ?? null), "page_title_right", [])) || $this->getAttribute(($context["page"] ?? null), "page_title_left", [])))) {
            // line 144
            echo "\t<!-- Header ends -->
\t<div class=\"page-heading blightblue\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t";
            // line 149
            if ($this->getAttribute(($context["page"] ?? null), "page_title_left", [])) {
                // line 150
                echo "\t\t\t\t\t\t<h2 class=\"pull-left\">
\t\t\t\t\t\t\t";
                // line 151
                if ($this->getAttribute(($context["page"] ?? null), "page_title_right", [])) {
                    // line 152
                    echo "\t\t\t\t\t\t\t\t";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title_right", [])), "html", null, true);
                    echo "
\t\t\t\t\t\t\t";
                } else {
                    // line 154
                    echo "\t\t\t\t\t\t\t\t<i class=\"fa fa-flag-o title-icon\"></i>\t";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_title"] ?? null)), "html", null, true);
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 156
                echo "\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div class=\"pull-right heading-meta\"> ";
                // line 157
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title_left", [])), "html", null, true);
                echo "</div>
\t\t\t\t\t";
            } else {
                // line 159
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute(($context["page"] ?? null), "page_title_right", [])) {
                    // line 160
                    echo "\t\t\t\t\t\t\t";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title_right", [])), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 162
                    echo "\t\t\t\t\t\t\t<h2><i class=\"fa fa-flag-o title-icon\"></i>\t";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_title"] ?? null)), "html", null, true);
                    echo "</h2>
\t\t\t\t\t\t";
                }
                // line 164
                echo "\t\t\t\t\t";
            }
            // line 165
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 170
        echo "
";
        // line 171
        if (($context["is_front"] ?? null)) {
            // line 172
            echo "\t<!-- Slider starts -->
\t";
            // line 173
            if (($context["slideshow_display"] ?? null)) {
                // line 174
                echo "\t\t<div id=\"myCarousel\" class=\"carousel slide\">
\t\t\t<div class=\"carousel-inner\">
\t\t\t\t";
                // line 176
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                    // line 177
                    echo "\t\t\t\t\t";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"]));
                    echo "
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 179
                echo "\t\t\t\t<!-- SLIDE  -->
\t\t\t</div>
\t\t\t<a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">‹</a>
\t\t\t<a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">›</a>
\t\t</div>
\t\t<!-- Slider ends -->
\t";
            }
        }
        // line 187
        echo "
";
        // line 188
        if ($this->getAttribute(($context["page"] ?? null), "banner", [])) {
            // line 189
            echo "\t<div class=\"contact\">
\t\t<div class=\"col-md-12\">
\t\t\t";
            // line 191
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "banner", [])), "html", null, true);
            echo "
\t\t</div>
\t</div>
";
        }
        // line 195
        echo "
<div class=\"clearfix\"></div>

";
        // line 198
        if ($this->getAttribute(($context["page"] ?? null), "top_first", [])) {
            // line 199
            echo "\t<div class=\"hero\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t";
            // line 203
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_first", [])), "html", null, true);
            echo "
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 210
        echo "
<!-- Big box starts -->
";
        // line 212
        if ((($this->getAttribute(($context["page"] ?? null), "top_second_first", []) || $this->getAttribute(($context["page"] ?? null), "top_second_third", [])) || $this->getAttribute(($context["page"] ?? null), "top_second_second", []))) {
            // line 213
            echo "\t<div class=\"big-box\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 blightblue\">
\t\t\t\t\t<!-- Left box -->
\t\t\t\t\t";
            // line 218
            if ($this->getAttribute(($context["page"] ?? null), "top_second_first", [])) {
                // line 219
                echo "\t\t\t\t\t\t<div class=\"big-box-left \">
\t\t\t\t\t\t\t<!-- Box content -->
\t\t\t\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t\t\t\t<!-- title -->
\t\t\t\t\t\t\t\t";
                // line 223
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_second_first", [])), "html", null, true);
                echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 227
            echo "\t\t\t\t\t<!-- Top Second Second  -->
\t\t\t\t\t";
            // line 228
            if ($this->getAttribute(($context["page"] ?? null), "top_second_second", [])) {
                // line 229
                echo "\t\t\t\t\t\t<div class=\"big-box-mid \">
\t\t\t\t\t\t\t";
                // line 230
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_second_second", [])), "html", null, true);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 233
            echo "\t\t\t\t\t<!-- top second third -->
\t\t\t\t\t";
            // line 234
            if ($this->getAttribute(($context["page"] ?? null), "top_second_third", [])) {
                // line 235
                echo "\t\t\t\t\t\t<div class=\"big-box-right bblack\">
\t\t\t\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t\t\t\t";
                // line 237
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_second_third", [])), "html", null, true);
                echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 241
            echo "\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"clearfix\"></div>

";
        }
        // line 250
        echo "<!-- Big box ends -->

";
        // line 252
        if ($this->getAttribute(($context["page"] ?? null), "content_top_highlighted", [])) {
            // line 253
            echo "\t<div class=\"container\">
\t\t<div class=\"cta bviolet highlight_alignment\">
\t\t\t<div class=\"row\">
\t\t\t\t";
            // line 256
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top_highlighted", [])), "html", null, true);
            echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 261
        echo "
";
        // line 262
        if ($this->getAttribute(($context["page"] ?? null), "services", [])) {
            // line 263
            echo "\t<div class=\"service-home\">
\t\t<div class=\"container\">
\t\t\t<!-- Title -->
\t\t\t<h3 class=\"title\"><i class=\"fa fa-arrow-right title-icon\"></i> Service</h3>
\t\t\t<div class=\"row\">
\t\t\t\t";
            // line 268
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "services", [])), "html", null, true);
            echo "
\t\t\t</div>
\t\t\t<hr />
\t\t</div>
\t</div>
";
        }
        // line 274
        echo "
<div class=\"content\">
\t<div class=\"container\">
\t\t";
        // line 277
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 278
            echo "\t\t\t<div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null)), "html", null, true);
            echo " >
\t\t\t\t<!-- Sidebar 2 -->
\t\t\t\t<div class=\"sidebar\">
\t\t\t\t\t";
            // line 281
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 285
        echo "\t\t";
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 286
            echo "\t\t\t<div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null)), "html", null, true);
            echo ">
\t\t\t\t<div class=\"posts\">
\t\t\t\t\t";
            // line 288
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
            echo "
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t";
            // line 290
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 294
        echo "\t\t";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 295
            echo "\t\t\t<div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
            echo ">
\t\t\t\t<!-- Sidebar 1 -->
\t\t\t\t<div class=\"sidebar\">
\t\t\t\t\t";
            // line 298
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 302
        echo "\t</div>
</div>

<div class=\"clearfix\"></div>

";
        // line 307
        if ($this->getAttribute(($context["page"] ?? null), "footer_top", [])) {
            // line 308
            echo "\t<div class=\"foot blightblue\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<!-- User icon -->
\t\t\t\t\t<span class=\"twitter-icon text-center\"><i class=\"fa fa-thumbs-up\"></i></span>
\t\t\t\t\t<p><em>";
            // line 314
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top", [])), "html", null, true);
            echo "</em></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 320
        echo "
<footer>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"widgets\">
\t\t\t\t";
        // line 325
        if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
            // line 326
            echo "\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<div class=\"fwidget\">
\t\t\t\t\t\t\t";
            // line 328
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
            echo "
\t\t\t\t\t\t\t<div class=\"social\">
\t\t\t\t\t\t\t\t";
            // line 330
            if (($context["show_social_icons"] ?? null)) {
                // line 331
                echo "\t\t\t\t\t\t\t\t\t<div class=\"social\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 332
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
                echo "\"  class=\"bblue\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 333
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null)), "html", null, true);
                echo "\"  class=\"borange\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 334
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
                echo "\" class=\"blightblue\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 335
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
                echo "\" class=\"bviolet\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 336
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null)), "html", null, true);
                echo "\" class=\"bred\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 337
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null)), "html", null, true);
                echo "\" class=\"borange\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 340
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 344
        echo "\t\t\t\t";
        if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
            // line 345
            echo "\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<div class=\"fwidget\">
\t\t\t\t\t\t\t";
            // line 347
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 351
        echo "\t\t\t\t";
        if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
            // line 352
            echo "\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<div class=\"fwidget\">
\t\t\t\t\t\t\t";
            // line 354
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 358
        echo "\t\t\t\t";
        if ($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])) {
            // line 359
            echo "\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<div class=\"fwidget\">
\t\t\t\t\t\t\t";
            // line 361
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 365
        echo "\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 footer_bottom\">
\t\t\t\t<div class=\"copy\">
\t\t\t\t\t<p class=\"text-center\">Nero ported to drupal by <a href=\"http://dropthemes.in\" target=\"_blank\">DropThemes.in</a></p>
\t\t\t\t\t";
        // line 372
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fifth", [])), "html", null, true);
        echo "
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t\t";
        // line 375
        if (($context["show_social_icons"] ?? null)) {
            // line 376
            echo "\t\t\t\t\t";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["social_icons"] ?? null)));
            echo "
\t\t\t\t";
        }
        // line 378
        echo "
\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t</div>
</footer>";
    }

    public function getTemplateName()
    {
        return "themes/nero/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  635 => 378,  629 => 376,  627 => 375,  621 => 372,  612 => 365,  605 => 361,  601 => 359,  598 => 358,  591 => 354,  587 => 352,  584 => 351,  577 => 347,  573 => 345,  570 => 344,  564 => 340,  558 => 337,  554 => 336,  550 => 335,  546 => 334,  542 => 333,  538 => 332,  535 => 331,  533 => 330,  528 => 328,  524 => 326,  522 => 325,  515 => 320,  506 => 314,  498 => 308,  496 => 307,  489 => 302,  482 => 298,  475 => 295,  472 => 294,  465 => 290,  460 => 288,  454 => 286,  451 => 285,  444 => 281,  437 => 278,  435 => 277,  430 => 274,  421 => 268,  414 => 263,  412 => 262,  409 => 261,  401 => 256,  396 => 253,  394 => 252,  390 => 250,  379 => 241,  372 => 237,  368 => 235,  366 => 234,  363 => 233,  357 => 230,  354 => 229,  352 => 228,  349 => 227,  342 => 223,  336 => 219,  334 => 218,  327 => 213,  325 => 212,  321 => 210,  311 => 203,  305 => 199,  303 => 198,  298 => 195,  291 => 191,  287 => 189,  285 => 188,  282 => 187,  272 => 179,  263 => 177,  259 => 176,  255 => 174,  253 => 173,  250 => 172,  248 => 171,  245 => 170,  238 => 165,  235 => 164,  229 => 162,  223 => 160,  220 => 159,  215 => 157,  212 => 156,  206 => 154,  200 => 152,  198 => 151,  195 => 150,  193 => 149,  186 => 144,  184 => 143,  168 => 130,  160 => 124,  154 => 122,  152 => 121,  133 => 104,  127 => 101,  123 => 100,  119 => 99,  115 => 98,  111 => 97,  107 => 96,  104 => 95,  102 => 94,  97 => 91,  92 => 89,  89 => 88,  86 => 87,  81 => 85,  78 => 84,  75 => 83,  70 => 81,  67 => 80,  65 => 79,  55 => 71,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/nero/templates/page.html.twig", "C:\\xampp\\htdocs\\drupal-8.7.8\\themes\\nero\\templates\\page.html.twig");
    }
}
