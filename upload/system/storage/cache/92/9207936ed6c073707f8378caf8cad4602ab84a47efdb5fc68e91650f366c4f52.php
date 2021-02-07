<?php

/* common/footer.twig */
class __TwigTemplate_c484d0ea5773955aafc6767b3d72170522d24091d820b922aa6b434082c808a3 extends Twig_Template
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
        echo "<footer>
  <div class=\"container\"><a href=\"https://www.bitstore.com.br\" target=\"_blank\">";
        // line 2
        echo (isset($context["text_project"]) ? $context["text_project"] : null);
        echo "</a>|<a href=\"https://www.bitstore.com/docs/\" target=\"_blank\">";
        echo (isset($context["text_documentation"]) ? $context["text_documentation"] : null);
        echo "</a>|<a href=\"https://www.bitstore.com.br/forum\" target=\"_blank\">";
        echo (isset($context["text_support"]) ? $context["text_support"] : null);
        echo "</a><br /></div>
</footer>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* <footer>*/
/*   <div class="container"><a href="https://www.bitstore.com.br" target="_blank">{{ text_project }}</a>|<a href="https://www.bitstore.com/docs/" target="_blank">{{ text_documentation }}</a>|<a href="https://www.bitstore.com.br/forum" target="_blank">{{ text_support }}</a><br /></div>*/
/* </footer>*/
/* </body>*/
/* </html>*/
