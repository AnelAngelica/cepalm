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

/* themes/store_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_4cc764535352109c03b03b188a9298273fe065f756241bc89b1b0a58d130e167 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 62, "for" => 154];
        $filters = ["escape" => 73, "raw" => 155, "date" => 381];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
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
        // line 60
        echo "

";
        // line 62
        if (($this->getAttribute(($context["page"] ?? null), "contact_email", []) || $this->getAttribute(($context["page"] ?? null), "top_menu", []))) {
            // line 63
            echo "  <div class=\"top-menu\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Contact Phone & Email -->

        <div class=\"col-sm-9\">
          
          <div class=\"top-blocks\">
            ";
            // line 72
            if ($this->getAttribute(($context["page"] ?? null), "top_menu", [])) {
                // line 73
                echo "              ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_menu", [])), "html", null, true);
                echo "
            ";
            }
            // line 75
            echo "
            ";
            // line 76
            if ($this->getAttribute(($context["page"] ?? null), "contact_email", [])) {
                // line 77
                echo "              ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "contact_email", [])), "html", null, true);
                echo "
            ";
            }
            // line 79
            echo "
            <!-- Start: Social media icons -->

            ";
            // line 82
            if (($context["show_social_icon"] ?? null)) {
                // line 83
                echo "              <div class=\"social-media\">
                ";
                // line 84
                if (($context["facebook_url"] ?? null)) {
                    // line 85
                    echo "                  <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
                    echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
                ";
                }
                // line 87
                echo "                ";
                if (($context["google_plus_url"] ?? null)) {
                    // line 88
                    echo "                  <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null)), "html", null, true);
                    echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fab fa-google-plus-g\"></i></a>
                ";
                }
                // line 90
                echo "                ";
                if (($context["twitter_url"] ?? null)) {
                    // line 91
                    echo "                  <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
                    echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
                ";
                }
                // line 93
                echo "                ";
                if (($context["linkedin_url"] ?? null)) {
                    // line 94
                    echo "                  <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
                    echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
                ";
                }
                // line 96
                echo "                ";
                if (($context["pinterest_url"] ?? null)) {
                    // line 97
                    echo "                  <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null)), "html", null, true);
                    echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fab fa-pinterest-p\"></i></a>
                ";
                }
                // line 99
                echo "                ";
                if (($context["rss_url"] ?? null)) {
                    // line 100
                    echo "                  <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null)), "html", null, true);
                    echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
                ";
                }
                // line 102
                echo "              </div>
            ";
            }
            // line 104
            echo "
            <!-- End: Social media icons -->

          </div>

        </div>

        <!-- End: Contact Phone & Email -->

      </div>
    </div>
  </div>
";
        }
        // line 117
        echo "

<div class=\"container\">

  <div class=\"row\">

    <!-- Start: Header -->

    <div class=\"navbar-header col-md-3\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
        <i class=\"fas fa-bars\"></i>
      </button>
      ";
        // line 129
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 130
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
      ";
        }
        // line 132
        echo "    </div>

    <!-- End: Header -->

    ";
        // line 136
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
            // line 137
            echo "      <div class=\"col-md-9\">
        <div class=\"main-menu\">
          ";
            // line 139
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 143
        echo "
    </div>
  </div>

</div>


";
        // line 150
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 151
            echo "  <div class=\"container\">
    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 154
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 155
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"]));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "      </ul>
    </div>
  </div>
";
        }
        // line 161
        echo "

<!-- Start: Top widget -->

";
        // line 165
        if ((($context["is_front"] ?? null) && (($this->getAttribute(($context["page"] ?? null), "topwidget_first", []) || $this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) || $this->getAttribute(($context["page"] ?? null), "topwidget_third", [])))) {
            // line 166
            echo "  <div class=\"\" id=\"\">
    <div class=\"container\">
      ";
            // line 168
            if ((($context["is_front"] ?? null) && (($this->getAttribute(($context["page"] ?? null), "topwidget_first", []) || $this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) || $this->getAttribute(($context["page"] ?? null), "topwidget_third", [])))) {
                // line 169
                echo "        <div class=\"row clearfix topwidget\">

          <!-- Start: Top widget first -->          
          ";
                // line 172
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_first", [])) {
                    // line 173
                    echo "            <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_first", [])), "html", null, true);
                    echo "</div>
          ";
                }
                // line 174
                echo "          
          <!-- End: Top widget first --> 

          <!-- Start: Top widget second -->          
          ";
                // line 178
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) {
                    // line 179
                    echo "            <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_second", [])), "html", null, true);
                    echo "</div>
          ";
                }
                // line 180
                echo "          
          <!-- End: Top widget second --> 
          
          <!-- Start: Top widget third -->         
          ";
                // line 184
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_third", [])) {
                    // line 185
                    echo "            <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_third_class"] ?? null)), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_third", [])), "html", null, true);
                    echo "</div>
          ";
                }
                // line 186
                echo "          
          <!-- End: Top widget third -->

        </div>
      ";
            }
            // line 191
            echo "    </div>
  </div>
";
        }
        // line 194
        echo "
<!--End: Top widget -->

    
<!--Start: Highlighted -->

";
        // line 200
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 201
            echo "  <div class=\"container\">
    ";
            // line 202
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
  </div>
";
        }
        // line 205
        echo "
<!--End: Highlighted -->

<!--Start: Title -->

";
        // line 210
        if (($this->getAttribute(($context["page"] ?? null), "page_title", []) &&  !($context["is_front"] ?? null))) {
            // line 211
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        ";
            // line 214
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 219
        echo "
<!--End: Title -->

<div class=\"container\">
  <div class=\"parallax-region\">

    <!--Start: Breadcrumb -->

    ";
        // line 227
        if ( !($context["is_front"] ?? null)) {
            // line 228
            echo "      <div class=\"row\">
        <div class=\"col-md-12\">";
            // line 229
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
            echo "</div>
      </div>
    ";
        }
        // line 232
        echo "
    <!--End: Breadcrumb -->

    <div class=\"row layout\">

      <!--- Start: Left SideBar -->
      ";
        // line 238
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 239
            echo "        <div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null)), "html", null, true);
            echo ">
          <div class=\"sidebar\">
            ";
            // line 241
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 245
        echo "      <!-- End Left SideBar -->

      <!--- Start Content -->
      ";
        // line 248
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 249
            echo "        <div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null)), "html", null, true);
            echo ">
          <div class=\"content_layout\">
            ";
            // line 251
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
          </div>              
        </div>
      ";
        }
        // line 255
        echo "      <!-- End: Content -->

      <!-- Start: Right SideBar -->
      ";
        // line 258
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 259
            echo "        <div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
            echo ">
          <div class=\"sidebar\">
            ";
            // line 261
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 265
        echo "      <!-- End: Right SideBar -->
      
    </div>
  
  </div>
</div>


<!-- End: Main content -->


<!-- Start: Services -->

";
        // line 278
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "services", []))) {
            // line 279
            echo "
  <div class=\"services\" id=\"services\">
    <div class=\"container\">
      ";
            // line 282
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "services", [])), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 286
        echo "
<!--End: Services -->


<!-- Start: Bottom widgets -->

";
        // line 292
        if ((($context["is_front"] ?? null) && ((($this->getAttribute(($context["page"] ?? null), "bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "bottom_second", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_third", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_forth", [])))) {
            // line 293
            echo "  <div class=\"products\" id=\"products\">    
    <div class=\"container\">
      <div class=\"parallax-region wow- bounceInDown\">
        <div class=\"row\">

          <!-- Start: Bottom First -->          
          ";
            // line 299
            if ($this->getAttribute(($context["page"] ?? null), "bottom_first", [])) {
                // line 300
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 301
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_first", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 303
            echo "          
          <!-- End: Bottom First -->

          <!-- Start: Bottom Second -->
          ";
            // line 307
            if ($this->getAttribute(($context["page"] ?? null), "bottom_second", [])) {
                // line 308
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 309
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_second", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 311
            echo "          
          <!-- End: Bottom Second -->

          <!-- Start: Bottom third -->          
          ";
            // line 315
            if ($this->getAttribute(($context["page"] ?? null), "bottom_third", [])) {
                // line 316
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 317
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_third", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 319
            echo "          
          <!-- End: Bottom Third -->

          <!-- Start: Bottom Forth -->
          ";
            // line 323
            if ($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])) {
                // line 324
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 325
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 328
            echo "          <!-- End: Bottom Forth -->

        </div>
      </div>
    </div>
  </div>
";
        }
        // line 335
        echo "
<!--End: Bottom widgets -->


<!-- Start: Footer widgets -->

";
        // line 341
        if ((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", []))) {
            // line 342
            echo "  <div class=\"footer\" id=\"footer\">
    <div class=\"container\">
      <div class=\"parallax-region wow- bounceInUp\">  
        <div class=\"row\">

          <!-- Start: Footer First -->
          ";
            // line 348
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 349
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 350
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 353
            echo "          <!-- End: Footer First -->

          <!-- Start :Footer Second -->
          ";
            // line 356
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 357
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 358
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 361
            echo "          <!-- End: Footer Second -->

          <!-- Start: Footer third -->
          ";
            // line 364
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 365
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 366
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 369
            echo "          <!-- End: Footer Third -->

        </div>
      </div>
    </div>

    <!-- Start: Copyright -->
    <div class=\"container copyright\">
      <div class=\"row\">

        <!-- Start: Copyright -->
        <div class=\"col-sm-6\">
          <p>Copyright © ";
            // line 381
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
            echo ". All rights reserved.</p>
        </div>
        <!-- End: Copyright -->

        <!-- Start: Credit link -->
        ";
            // line 386
            if (($context["show_credit_link"] ?? null)) {
                // line 387
                echo "          <div class=\"col-sm-6\">
            <p class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></p>
          </div>
        ";
            }
            // line 391
            echo "        <!-- End: Credit link -->
        
      </div>
    </div>

  </div>
";
        }
        // line 398
        echo "
<!--End: Footer widgets -->


<!-- Start: Map -->

";
        // line 404
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "google_map", []))) {
            // line 405
            echo "  <div class=\"map-and-address\">
    <div class=\"google_map\">";
            // line 406
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "google_map", [])), "html", null, true);
            echo "</div>
  </div>
";
        }
        // line 409
        echo "
<!--End: Map -->





";
    }

    public function getTemplateName()
    {
        return "themes/store_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  698 => 409,  692 => 406,  689 => 405,  687 => 404,  679 => 398,  670 => 391,  664 => 387,  662 => 386,  654 => 381,  640 => 369,  634 => 366,  629 => 365,  627 => 364,  622 => 361,  616 => 358,  611 => 357,  609 => 356,  604 => 353,  598 => 350,  593 => 349,  591 => 348,  583 => 342,  581 => 341,  573 => 335,  564 => 328,  558 => 325,  553 => 324,  551 => 323,  545 => 319,  539 => 317,  534 => 316,  532 => 315,  526 => 311,  520 => 309,  515 => 308,  513 => 307,  507 => 303,  501 => 301,  496 => 300,  494 => 299,  486 => 293,  484 => 292,  476 => 286,  469 => 282,  464 => 279,  462 => 278,  447 => 265,  440 => 261,  434 => 259,  432 => 258,  427 => 255,  420 => 251,  414 => 249,  412 => 248,  407 => 245,  400 => 241,  394 => 239,  392 => 238,  384 => 232,  378 => 229,  375 => 228,  373 => 227,  363 => 219,  355 => 214,  350 => 211,  348 => 210,  341 => 205,  335 => 202,  332 => 201,  330 => 200,  322 => 194,  317 => 191,  310 => 186,  302 => 185,  300 => 184,  294 => 180,  286 => 179,  284 => 178,  278 => 174,  270 => 173,  268 => 172,  263 => 169,  261 => 168,  257 => 166,  255 => 165,  249 => 161,  243 => 157,  234 => 155,  230 => 154,  225 => 151,  223 => 150,  214 => 143,  207 => 139,  203 => 137,  201 => 136,  195 => 132,  189 => 130,  187 => 129,  173 => 117,  158 => 104,  154 => 102,  148 => 100,  145 => 99,  139 => 97,  136 => 96,  130 => 94,  127 => 93,  121 => 91,  118 => 90,  112 => 88,  109 => 87,  103 => 85,  101 => 84,  98 => 83,  96 => 82,  91 => 79,  85 => 77,  83 => 76,  80 => 75,  74 => 73,  72 => 72,  61 => 63,  59 => 62,  55 => 60,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/store_zymphonies_theme/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\drupal-8.7.8\\themes\\store_zymphonies_theme\\templates\\layout\\page.html.twig");
    }
}
