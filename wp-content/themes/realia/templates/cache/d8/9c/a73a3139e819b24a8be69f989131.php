<?php

/* properties/filter.twig */
class __TwigTemplate_d89ca73a3139e819b24a8be69f989131 extends Twig_Template
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
        // line 1
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 2
            echo "    ";
            echo (isset($context["before_title"]) ? $context["before_title"] : null);
            echo (isset($context["title"]) ? $context["title"] : null);
            echo (isset($context["after_title"]) ? $context["after_title"] : null);
            echo "
";
        }
        // line 4
        echo "
<div class=\"property-filter widget\">
    <div class=\"content\">
    ";
        // line 7
        if ((isset($context["map_filtering"]) ? $context["map_filtering"] : null)) {
            // line 8
            echo "
    <form method=\"get\" action=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "plugins_url", array(), "method"), "html", null, true);
            echo "/realia-core/plugins/properties/filter.php\" class=\"map-filtering\">
    ";
        } else {
            // line 11
            echo "        <form method=\"get\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_get_home_url", array(), "method"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "properties", 1 => "aviators"), "method"), "html", null, true);
            echo "/\" class=\"form-inline\">
    ";
        }
        // line 13
        echo "
            ";
        // line 14
        if (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "filter_visibility", 2 => "hide_location"), "method") != "on")) {
            // line 15
            echo "                <div class=\"location control-group\">
                    <label class=\"control-label\" for=\"inputLocation\">
                        ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Location", 1 => "aviators"), "method"), "html", null, true);
            echo "
                    </label>

                    <div class=\"controls\">
                        <select name=\"filter_location\" id=\"inputLocation\">
                            <option value=\"\">-</option>
                            ";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_terms", array(0 => "locations", 1 => array("parent" => 0)), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 24
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["location"]) ? $context["location"] : null), "term_id"), "html", null, true);
                echo "\" ";
                if (($this->getAttribute((isset($context["q"]) ? $context["q"] : null), "filter_location") == $this->getAttribute((isset($context["location"]) ? $context["location"] : null), "term_id"))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["location"]) ? $context["location"] : null), "name"), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 26
            echo "                        </select>
                    </div>
                    <!-- /.controls -->
                </div><!-- /.control-group -->
            ";
        }
        // line 31
        echo "
            ";
        // line 32
        if (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "filter_visibility", 2 => "hide_sublocation"), "method") != "on")) {
            // line 33
            echo "                <div class=\"location_sub control-group\">
                    <label class=\"control-label\" for=\"filter_location\">
                        ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Sublocation", 1 => "aviators"), "method"), "html", null, true);
            echo "
                    </label>

                    <div class=\"controls\">
                        ";
            // line 39
            if ($this->getAttribute((isset($context["q"]) ? $context["q"] : null), "filter_location")) {
                // line 40
                echo "                            ";
                $context["sublocations"] = $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_terms", array(0 => "locations", 1 => array("parent" => $this->getAttribute((isset($context["q"]) ? $context["q"] : null), "filter_location"))), "method");
                // line 41
                echo "                        ";
            }
            // line 42
            echo "
                        <select name=\"filter_sublocation\" id=\"filter_sublocation\">
                            <option value=\"\">-</option>
                            ";
            // line 45
            if ((isset($context["sublocations"]) ? $context["sublocations"] : null)) {
                // line 46
                echo "                                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["sublocations"]) ? $context["sublocations"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                    // line 47
                    echo "                                    <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["location"]) ? $context["location"] : null), "term_id"), "html", null, true);
                    echo "\" ";
                    if (($this->getAttribute((isset($context["q"]) ? $context["q"] : null), "filter_sublocation") == $this->getAttribute((isset($context["location"]) ? $context["location"] : null), "term_id"))) {
                        echo "selected=\"selected\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["location"]) ? $context["location"] : null), "name"), "html", null, true);
                    echo "</option>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 49
                echo "                            ";
            }
            // line 50
            echo "                        </select>
                    </div>
                    <!-- /.controls -->
                </div><!-- /.control-group -->
            ";
        }
        // line 55
        echo "
            ";
        // line 56
        if (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "filter_visibility", 2 => "hide_sub_sublocation"), "method") != "on")) {
            // line 57
            echo "                <div class=\"location_sub_sub control-group\">
                    <label class=\"control-label\" for=\"filter_sub_sublocation\">
                        ";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "District", 1 => "aviators"), "method"), "html", null, true);
            echo "
                    </label>

                    <div class=\"controls\">
                        ";
            // line 63
            if ($this->getAttribute((isset($context["q"]) ? $context["q"] : null), "filter_location")) {
                // line 64
                echo "                            ";
                $context["sublocations"] = $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_terms", array(0 => "locations", 1 => array("parent" => $this->getAttribute((isset($context["q"]) ? $context["q"] : null), "filter_sublocation"))), "method");
                // line 65
                echo "                        ";
            }
            // line 66
            echo "
                        <select name=\"filter_sub_sublocation\" id=\"filter_sub_sublocation\">
                            <option value=\"\">-</option>
                            ";
            // line 69
            if ((isset($context["sublocations"]) ? $context["sublocations"] : null)) {
                // line 70
                echo "                                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["sublocations"]) ? $context["sublocations"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                    // line 71
                    echo "                                    <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["location"]) ? $context["location"] : null), "term_id"), "html", null, true);
                    echo "\" ";
                    if (($this->getAttribute((isset($context["q"]) ? $context["q"] : null), "filter_sub_sublocation") == $this->getAttribute((isset($context["location"]) ? $context["location"] : null), "term_id"))) {
                        echo "selected=\"selected\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["location"]) ? $context["location"] : null), "name"), "html", null, true);
                    echo "</option>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 73
                echo "                            ";
            }
            // line 74
            echo "                        </select>
                    </div>
                    <!-- /.controls -->
                </div><!-- /.control-group -->
            ";
        }
        // line 79
        echo "
            ";
        // line 80
        if (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "filter_visibility", 2 => "hide_type"), "method") != "on")) {
            // line 81
            echo "                <div class=\"type control-group\">
                    <label class=\"control-label\" for=\"inputType-";
            // line 82
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">
                        ";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Type", 1 => "aviators"), "method"), "html", null, true);
            echo "
                    </label>

                    <div class=\"controls\">
                        <select name=\"filter_type\" id=\"inputType-";
            // line 87
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">
                            <option value=\"\">-</option>
                            ";
            // line 89
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_terms", array(0 => "property_types"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 90
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["type"]) ? $context["type"] : null), "term_id"), "html", null, true);
                echo "\" ";
                if (($this->getAttribute((isset($context["q"]) ? $context["q"] : null), "filter_type") == $this->getAttribute((isset($context["type"]) ? $context["type"] : null), "term_id"))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["type"]) ? $context["type"] : null), "name"), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 92
            echo "                        </select>
                    </div>
                    <!-- /.controls -->
                </div>
                <!-- /.control-group -->
            ";
        }
        // line 98
        echo "
            ";
        // line 99
        if (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "filter_visibility", 2 => "hide_contract"), "method") != "on")) {
            // line 100
            echo "                <div class=\"contract control-group\">
                    <label class=\"control-label\" for=\"inputType-";
            // line 101
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">
                        ";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Contract", 1 => "aviators"), "method"), "html", null, true);
            echo "
                    </label>

                    <div class=\"controls\">
                        <select name=\"filter_contract_type\" id=\"inputContract-";
            // line 106
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">
                            <option value=\"\">-</option>
                            ";
            // line 108
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_terms", array(0 => "property_contracts"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["contract"]) {
                // line 109
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : null), "term_id"), "html", null, true);
                echo "\" ";
                if (($this->getAttribute((isset($context["q"]) ? $context["q"] : null), "filter_contract_type") == $this->getAttribute((isset($context["contract"]) ? $context["contract"] : null), "term_id"))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : null), "name"), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contract'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 111
            echo "                        </select>
                    </div>
                    <!-- /.controls -->
                </div>
                <!-- /.control-group -->
            ";
        }
        // line 117
        echo "
            ";
        // line 118
        if (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "filter_visibility", 2 => "hide_beds"), "method") != "on")) {
            // line 119
            echo "                <div class=\"beds control-group\">
                    <label class=\"control-label\" for=\"inputBeds-";
            // line 120
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">
                        ";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Beds", 1 => "aviators"), "method"), "html", null, true);
            echo "
                    </label>

                    <div class=\"controls\">
                        <select name=\"filter_bedrooms\" id=\"inputBeds-";
            // line 125
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">
                            <option value=\"\">-</option>
                            ";
            // line 127
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 128
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\" ";
                if (($this->getAttribute((isset($context["q"]) ? $context["q"] : null), "filter_bedrooms") == (isset($context["i"]) ? $context["i"] : null))) {
                    echo "selected=\"selected=\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 130
            echo "                        </select>
                    </div>
                    <!-- /.controls -->
                </div>
                <!-- /.control-group -->
            ";
        }
        // line 136
        echo "
            ";
        // line 137
        if (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "filter_visibility", 2 => "hide_baths"), "method") != "on")) {
            // line 138
            echo "            <div class=\"baths control-group\">
                <label class=\"control-label\" for=\"inputBaths-";
            // line 139
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">
                    ";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Baths", 1 => "aviators"), "method"), "html", null, true);
            echo "
                </label>

                <div class=\"controls\">
                    <select name=\"filter_bathrooms\" id=\"inputBaths-";
            // line 144
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">
                        <option value=\"\">-</option>
                        ";
            // line 146
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 147
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\" ";
                if (($this->getAttribute((isset($context["q"]) ? $context["q"] : null), "filter_bathrooms") == (isset($context["i"]) ? $context["i"] : null))) {
                    echo "selected=\"selected=\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 149
            echo "                    </select>
                </div>
                <!-- /.controls -->
            </div>
            <!-- /.control-group -->
            ";
        }
        // line 155
        echo "


            ";
        // line 158
        if (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "filter_visibility", 2 => "hide_price_from"), "method") != "on")) {
            // line 159
            echo "                <div class=\"price-from control-group\">
                    <label class=\"control-label\" for=\"inputPriceFrom-";
            // line 160
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">
                        ";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Price From", 1 => "aviators"), "method"), "html", null, true);
            echo "
                    </label>

                    <div class=\"controls\">
                        <select name=\"filter_price_from\" id=\"inputPriceFrom-";
            // line 165
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">
                            <option value=\"\">-</option>
                            ";
            // line 167
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["price_from"]) ? $context["price_from"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 168
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\" ";
                if (($this->getAttribute((isset($context["q"]) ? $context["q"] : null), "filter_price_from") == (isset($context["i"]) ? $context["i"] : null))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_price_format", array(0 => (isset($context["i"]) ? $context["i"] : null)), "method"), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 170
            echo "                        </select>
                    </div>
                    <!-- /.controls -->
                </div>
                <!-- /.control-group -->
            ";
        }
        // line 176
        echo "
            ";
        // line 177
        if (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "filter_visibility", 2 => "hide_price_to"), "method") != "on")) {
            // line 178
            echo "                <div class=\"price-to control-group\">
                    <label class=\"control-label\" for=\"inputPriceTo-";
            // line 179
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">
                        ";
            // line 180
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Price To", 1 => "aviators"), "method"), "html", null, true);
            echo "
                    </label>

                    <div class=\"controls\">
                        <select name=\"filter_price_to\" id=\"inputPriceTo-";
            // line 184
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">
                            <option value=\"\">-</option>
                            ";
            // line 186
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["price_to"]) ? $context["price_to"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 187
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\" ";
                if (($this->getAttribute((isset($context["q"]) ? $context["q"] : null), "filter_price_to") == (isset($context["i"]) ? $context["i"] : null))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_price_format", array(0 => (isset($context["i"]) ? $context["i"] : null)), "method"), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 189
            echo "                        </select>
                    </div>
                    <!-- /.controls -->
                </div>
                <!-- /.control-group -->
            ";
        }
        // line 195
        echo "
            ";
        // line 196
        if (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "filter_visibility", 2 => "hide_area_from"), "method") != "on")) {
            // line 197
            echo "                <div class=\"area-from control-group\">
                    <label class=\"control-label\" for=\"inputAreaFrom-";
            // line 198
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">
                        ";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Area From", 1 => "aviators"), "method"), "html", null, true);
            echo "
                    </label>

                    <div class=\"controls\">
                        <input type=\"text\" value=\"";
            // line 203
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["q"]) ? $context["q"] : null), "filter_area_from"), "html", null, true);
            echo "\" name=\"filter_area_from\" id=\"inputAreaFrom-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">
                    </div><!-- /.controls -->
                </div><!-- /.control-group -->
            ";
        }
        // line 207
        echo "
            ";
        // line 208
        if (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "filter_visibility", 2 => "hide_area_to"), "method") != "on")) {
            // line 209
            echo "                <div class=\"area-to control-group\">
                    <label class=\"control-label\" for=\"inputAreaTo-";
            // line 210
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">
                        ";
            // line 211
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Area To", 1 => "aviators"), "method"), "html", null, true);
            echo "
                    </label>

                    <div class=\"controls\">
                        <input type=\"text\" value=\"";
            // line 215
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["q"]) ? $context["q"] : null), "filter_area_to"), "html", null, true);
            echo "\" name=\"filter_area_to\" id=\"inputAreaTo-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">
                    </div><!-- /.controls -->
                </div><!-- /.control-group -->
            ";
        }
        // line 219
        echo "
            ";
        // line 220
        if (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "filter_visibility", 2 => "hide_property_id"), "method") != "on")) {
            // line 221
            echo "                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"inputPropertyId-";
            // line 222
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">
                        ";
            // line 223
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Property ID", 1 => "aviators"), "method"), "html", null, true);
            echo "
                    </label>

                    <div class=\"controls\">
                        <input type=\"text\" value=\"";
            // line 227
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["q"]) ? $context["q"] : null), "filter_property_id"), "html", null, true);
            echo "\" name=\"filter_property_id\" id=\"inputPropertyId-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">
                    </div><!-- /.controls -->
                </div><!-- /.control-group -->
            ";
        }
        // line 231
        echo "
            <div class=\"form-actions\">
                <button class=\"btn btn-primary btn-large\">";
        // line 233
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Filter now!", 1 => "aviators"), "method"), "html", null, true);
        echo "</button>
            </div>
            <!-- /.form-actions -->
        </form>
    </div>
    <!-- /.content -->
</div><!-- /.property-filter -->
";
    }

    public function getTemplateName()
    {
        return "properties/filter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  614 => 233,  610 => 231,  601 => 227,  594 => 223,  590 => 222,  587 => 221,  585 => 220,  582 => 219,  573 => 215,  566 => 211,  562 => 210,  559 => 209,  557 => 208,  554 => 207,  545 => 203,  538 => 199,  534 => 198,  531 => 197,  529 => 196,  526 => 195,  518 => 189,  503 => 187,  499 => 186,  494 => 184,  487 => 180,  483 => 179,  480 => 178,  478 => 177,  475 => 176,  467 => 170,  452 => 168,  448 => 167,  443 => 165,  436 => 161,  432 => 160,  429 => 159,  427 => 158,  422 => 155,  414 => 149,  399 => 147,  395 => 146,  390 => 144,  383 => 140,  379 => 139,  376 => 138,  374 => 137,  371 => 136,  363 => 130,  348 => 128,  344 => 127,  339 => 125,  332 => 121,  328 => 120,  325 => 119,  323 => 118,  320 => 117,  312 => 111,  297 => 109,  293 => 108,  288 => 106,  281 => 102,  277 => 101,  274 => 100,  272 => 99,  269 => 98,  261 => 92,  246 => 90,  242 => 89,  237 => 87,  230 => 83,  226 => 82,  223 => 81,  221 => 80,  218 => 79,  211 => 74,  208 => 73,  193 => 71,  188 => 70,  186 => 69,  181 => 66,  178 => 65,  175 => 64,  173 => 63,  166 => 59,  162 => 57,  160 => 56,  157 => 55,  150 => 50,  147 => 49,  132 => 47,  127 => 46,  120 => 42,  117 => 41,  105 => 35,  101 => 33,  99 => 32,  89 => 26,  74 => 24,  70 => 23,  55 => 14,  52 => 13,  44 => 11,  39 => 9,  36 => 8,  29 => 4,  21 => 2,  125 => 45,  122 => 52,  114 => 40,  112 => 39,  107 => 42,  104 => 41,  102 => 40,  96 => 31,  88 => 32,  82 => 29,  78 => 28,  73 => 26,  69 => 25,  65 => 24,  61 => 17,  57 => 15,  53 => 21,  45 => 15,  42 => 14,  34 => 7,  32 => 7,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
