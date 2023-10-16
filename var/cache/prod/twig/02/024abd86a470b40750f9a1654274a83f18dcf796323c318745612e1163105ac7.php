<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__6a2dc95cb8d79c824f6605b4a8b459c018817500894093e2bb811f2c1326f5fd */
class __TwigTemplate_5e94b485cf45c797cbda46d5a5c733ad17902336aed695837fef635ae5355e74 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/presta-test/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/presta-test/img/app_icon.png\" />

<title>Performances • presta-test</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPerformance';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '8.0.4';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = '7161277354f80345927ca0ef5b72f072';
    var token_admin_orders = tokenAdminOrders = '4b45241aaa5e7704fbcb7d7b015129fd';
    var token_admin_customers = 'cf47f4ec21fedd21749a7fc4a1b3f162';
    var token_admin_customer_threads = tokenAdminCustomerThreads = 'd877d6f65a3c0cbff9d70847ecee91f0';
    var currentIndex = 'index.php?controller=AdminPerformance';
    var employee_token = 'f49f9bce52e936c678e953ec5fb0c979';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/presta-test/admin512dnkfh7a48aztkpcn/index.php/improve/modules/manage?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w';
    var admin_notification_get_link = '/presta-test/admin512dnkfh7a";
        // line 42
        echo "48aztkpcn/index.php/common/notifications?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w';
    var admin_notification_push_link = adminNotificationPushLink = '/presta-test/admin512dnkfh7a48aztkpcn/index.php/common/notifications/ack?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var search_product_msg = 'Rechercher un produit';
  </script>



<link
      rel=\"preload\"
      href=\"/presta-test/admin512dnkfh7a48aztkpcn/themes/new-theme/public/703cf8f274fbb265d49c6262825780e1.preload.woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/presta-test/admin512dnkfh7a48aztkpcn/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta-test/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta-test/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta-test/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta-test/admin512dnkfh7a48aztkpcn/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/presta-test\\/admin512dnkfh7a48aztkpcn\\/\";
var baseDir = \"\\/presta-test\\/\";
var changeFormLanguageUrl = \"\\/presta-test\\/admin512dnkfh7a48aztkpcn\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":";
        // line 68
        echo "true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/presta-test/admin512dnkfh7a48aztkpcn/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/presta-test/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/presta-test/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/presta-test/js/admin.js?v=8.0.4\"></script>
<script type=\"text/javascript\" src=\"/presta-test/admin512dnkfh7a48aztkpcn/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/presta-test/js/tools.js?v=8.0.4\"></script>
<script type=\"text/javascript\" src=\"/presta-test/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/presta-test/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/presta-test/admin512dnkfh7a48aztkpcn/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/presta-test/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/presta-test/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/presta-test/admin512dnkfh7a48aztkpcn/index.php/common/notifications?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5";
        // line 92
        echo "eh-esvZ3w',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 102
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr adminperformance\"
  data-base-url=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php\"  data-token=\"GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost:8888/presta-test/admin512dnkfh7a48aztkpcn/index.php?controller=AdminDashboard&amp;token=102c9153f71f51727bc9d06e4150e086\"></a>
      <span id=\"shop_version\">8.0.4</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/presta-test/admin512dnkfh7a48aztkpcn/index.php/sell/orders?token=0c4d9b33dce6d0c7cadacc59c5e4f0c5\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/presta-test/admin512dnkfh7a48aztkpcn/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=d5bbe33631d8754ed83a99a9214eb3f3\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/presta-test/admin512dnkfh7a48aztkpcn/index.php/improve/modules/manage?token=0c4d9b33dce6d0c7cadacc59c5e4f0c5\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/presta-test/admin512dnkfh7a48aztkpcn/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=1";
        // line 136
        echo "ea93176ab821dc542b05140f767c30b\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/presta-test/admin512dnkfh7a48aztkpcn/index.php/sell/catalog/products/new?token=0c4d9b33dce6d0c7cadacc59c5e4f0c5\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8888/presta-test/admin512dnkfh7a48aztkpcn/index.php/sell/catalog/categories/new?token=0c4d9b33dce6d0c7cadacc59c5e4f0c5\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"148\"
        data-icon=\"icon-AdminAdvancedParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/performance/?-7bFnt8PUy9plsYeNYA5eh-esvZ3w\"
        data-post-link=\"http://localhost:8888/presta-test/admin512dnkfh7a48aztkpcn/index.php?controller=AdminQuickAccesses&token=19349d0fd88ac33bd9804652d9685ebf\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Performances - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:8888/presta-test/admin512dnkfh7a48aztkpcn/index.php?controller=AdminQuickAccesses&token=19349d0fd88ac33bd9804652d9685ebf\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
 ";
        // line 175
        echo "     action=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php?controller=AdminSearch&amp;token=2aa763aaef2b1fd82a2a0cec963c5e03\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factu";
        // line 191
        echo "res</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Annuler</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Accès rapide</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8888/presta-test/admin512dnkfh7a48aztkpcn/index.php/sell/orders?token=0c4d9b33dce6d0c7cadacc59c5e4f0c5\"
             data-item=\"Commandes\"
    >Commandes</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8888/presta-test/admin512dnkfh7a48aztkpcn/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=d5bbe33631d8754ed83a99a9214eb3f3\"
             data-item=\"Évaluation du catalogue\"
    >Évaluation du catalogue</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8888/presta-test/admin512dnkfh7a48aztkpcn/index.php/improve/modules/manage?token=0c4d9b33dce6d0c7cadacc59c5e4f0c5\"
             data-item=\"Modules installés\"
    >Modules installés</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8888/presta-test/admin512dnkfh7a48aztkpcn/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=1ea93176ab821dc542b05140f767c30b\"
             data-item=\"No";
        // line 226
        echo "uveau bon de réduction\"
    >Nouveau bon de réduction</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8888/presta-test/admin512dnkfh7a48aztkpcn/index.php/sell/catalog/products/new?token=0c4d9b33dce6d0c7cadacc59c5e4f0c5\"
             data-item=\"Nouveau produit\"
    >Nouveau produit</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8888/presta-test/admin512dnkfh7a48aztkpcn/index.php/sell/catalog/categories/new?token=0c4d9b33dce6d0c7cadacc59c5e4f0c5\"
             data-item=\"Nouvelle catégorie\"
    >Nouvelle catégorie</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"139\"
      data-icon=\"icon-AdminAdvancedParameters\"
      data-method=\"add\"
      data-url=\"index.php/configure/advanced/performance/?-7bFnt8PUy9plsYeNYA5eh-esvZ3w\"
      data-post-link=\"http://localhost:8888/presta-test/admin512dnkfh7a48aztkpcn/index.php?controller=AdminQuickAccesses&token=19349d0fd88ac33bd9804652d9685ebf\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Performances - Liste\"
    >
      <i class=\"material-icons\">add_circle</i>
      Ajouter la page actuelle à l'accès rapide
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:8888/presta-test/admin512dnkfh7a48aztkpcn/index.php?controller=AdminQuickAccesses&token=19349d0fd88ac33bd9804652d9685ebf\">
    <i class=\"material-icons\">settings</i>
    Gérez vos accès rapides
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost:8888/presta-test/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
    </a>
  <";
        // line 270
        echo "/div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le";
        // line 323
        echo " moment :(<br>
              Avez-vous consulté vos &lt;strong&gt;&lt;a href=\"http://localhost:8888/presta-test/admin512dnkfh7a48aztkpcn/index.php?controller=AdminCarts&amp;action=filterOnlyAbandonedCarts&amp;token=7f79834c7fbd373598487be3f8278d86\"&gt;paniers abandonnés&lt;/a&gt;&lt;/strong&gt; ?&lt;br&gt; Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_<";
        // line 366
        echo "/strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost:8888/presta-test/img/pr/default.jpg\" alt=\"lucas\" /></span>
        <span class=\"employee_profile\">Ravi de vous revoir lucas</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/configure/advanced/employees/1/edit?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost:8888/presta-test/admin512dnkfh7a48aztkpcn/index.php?controller=AdminLogin&amp;logout=1&amp;token=3848b847613df2395220d950561343a2\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/configure/advanced/employees/toggle-navigation?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost:8888/presta-test/admi";
        // line 411
        echo "n512dnkfh7a48aztkpcn/index.php?controller=AdminDashboard&amp;token=102c9153f71f51727bc9d06e4150e086\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.0.4</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost:8888/presta-test/admin512dnkfh7a48aztkpcn/index.php?controller=AdminDashboard&amp;token=102c9153f71f51727bc9d06e4150e086\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/sell/orders/?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                        ";
        // line 452
        echo "                    
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/sell/orders/?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/sell/orders/invoices/?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/sell/orders/credit-slips/?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/sell/orders/delivery-slips/?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

       ";
        // line 482
        echo "                                                                           
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost:8888/presta-test/admin512dnkfh7a48aztkpcn/index.php?controller=AdminCarts&amp;token=7f79834c7fbd373598487be3f8278d86\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/sell/catalog/products?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/sell/catalog/products?_token=GEnzkjbG8OA";
        // line 511
        echo "6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/sell/catalog/categories?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/sell/catalog/monitoring/?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost:8888/presta-test/admin512dnkfh7a48aztkpcn/index.php?controller=AdminAttributesGroups&amp;token=a3d70d141ee4c47ade6c24b54fdf7b07\" class=\"link\"> Attributs et caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                   ";
        // line 542
        echo "           <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/sell/catalog/brands/?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/sell/attachments/?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost:8888/presta-test/admin512dnkfh7a48aztkpcn/index.php?controller=AdminCartRules&amp;token=1ea93176ab821dc542b05140f767c30b\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/sell/stocks/?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Stock
                                </a>
                              </li>

    ";
        // line 571
        echo "                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/sell/customers/?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/sell/customers/?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/sell/addresses/?_token=GEnzkjbG";
        // line 600
        echo "8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost:8888/presta-test/admin512dnkfh7a48aztkpcn/index.php?controller=AdminCustomerThreads&amp;token=d877d6f65a3c0cbff9d70847ecee91f0\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost:8888/presta-test/admin512dnkfh7a48aztkpcn/index.php?controller=AdminCustomerThreads&amp;token=d877d6f65a3c0cbff9d70847ecee91f0\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                ";
        // line 631
        echo "            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/sell/customer-service/order-messages/?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost:8888/presta-test/admin512dnkfh7a48aztkpcn/index.php?controller=AdminReturn&amp;token=936f5e669b3e8ed1e92fc3432445fd8d\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost:8888/presta-test/admin512dnkfh7a48aztkpcn/index.php?controller=AdminStats&amp;token=d5bbe33631d8754ed83a99a9214eb3f3\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                    ";
        // line 661
        echo "    </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/improve/modules/manage?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/improve/modules/manage?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                ";
        // line 697
        echo "              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/improve/design/themes/?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"124\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/improve/design/themes/?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Thème et logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/improve/design/mail_theme/?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Thème d&#039;e-mail
                                </a>
             ";
        // line 726
        echo "                 </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/improve/design/cms-pages/?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/improve/design/modules/positions/?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost:8888/presta-test/admin512dnkfh7a48aztkpcn/index.php?controller=AdminImages&amp;token=48fa7237eaba12a915a49e8889647599\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/presta-test/a";
        // line 756
        echo "dmin512dnkfh7a48aztkpcn/index.php/modules/link-widget/list?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost:8888/presta-test/admin512dnkfh7a48aztkpcn/index.php?controller=AdminCarriers&amp;token=95fa524b7f7a3d698b167c702b46a1ff\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost:8888/presta-test/admin512dnkfh7a48aztkpcn/index.php?controller=AdminCarriers&amp;token=95fa524b7f7a3d698b167c702b46a1ff\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
              ";
        // line 787
        echo "                                              
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/improve/shipping/preferences/?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/improve/payment/payment_methods?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/improve/payment/payment_methods?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Moyens de paiement
                   ";
        // line 815
        echo "             </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/improve/payment/preferences?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/improve/international/localization/?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
            ";
        // line 847
        echo "                    <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/improve/international/localization/?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/improve/international/zones/?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/improve/international/taxes/?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/improve/international/translations/settings?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                ";
        // line 875
        echo "              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/configure/shop/preferences/preferences?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/configure/shop/preferences/preferences?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                 ";
        // line 911
        echo "             
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/configure/shop/order-preferences/?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/configure/shop/product-preferences/?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/configure/shop/customer-preferences/?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/configure/shop/contacts/?_token=GEnzkjbG8OA6iX-";
        // line 938
        echo "7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/configure/shop/seo-urls/?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost:8888/presta-test/admin512dnkfh7a48aztkpcn/index.php?controller=AdminSearchConf&amp;token=4a74080d178d0349d65a75df8ef374f9\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/configure/advanced/system-information/?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
        ";
        // line 968
        echo "              Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/configure/advanced/system-information/?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/configure/advanced/performance/?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/configure/advanced/administration/?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYe";
        // line 995
        echo "NYA5eh-esvZ3w\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/configure/advanced/emails/?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/configure/advanced/import/?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/configure/advanced/employees/?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"su";
        // line 1026
        echo "btab-AdminParentRequestSql\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/configure/advanced/sql-requests/?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/configure/advanced/logs/?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/configure/advanced/webservice-keys/?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/configure/advanced/feature-flags/?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Fonctionnalités nouvelles e";
        // line 1051
        echo "t expérimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/configure/advanced/security/?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" class=\"link\"> Sécurité
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Paramètres avancés</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/configure/advanced/performance/?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\" aria-current=\"page\">Performances</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Performances          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-clear_cache\"
                  href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/configure/advanced/performance/clear-cache?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\"                  title=\"Vider le cache\"      ";
        // line 1101
        echo "          >
                  <i class=\"material-icons\">delete</i>                  Vider le cache
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D8.0.4%2526country%253Dfr/Aide?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-clear_cache\"
              href=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/configure/advanced/performance/clear-cache?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\"              title=\"Vider le cache\"            >
              Vider le cache
              <i class=\"material-icons\">delete</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/presta-test/admin512dnkfh7a48aztkpcn/index.php/common/sidebar/https%253A%252F%252Fhelp.prestas";
        // line 1141
        echo "hop-project.org%252Ffr%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D8.0.4%2526country%253Dfr/Aide?_token=GEnzkjbG8OA6iX-7bFnt8PUy9plsYeNYA5eh-esvZ3w\"
            >
              Aide
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1162
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    Cette page n'est pas encore disponible sur mobile, merci de la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"http://localhost:8888/presta-test/admin512dnkfh7a48aztkpcn/index.php?controller=AdminDashboard&amp;token=102c9153f71f51727bc9d06e4150e086\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1196
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 102
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1162
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1196
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__6a2dc95cb8d79c824f6605b4a8b459c018817500894093e2bb811f2c1326f5fd";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1363 => 1196,  1342 => 1162,  1331 => 102,  1322 => 1196,  1282 => 1162,  1259 => 1141,  1217 => 1101,  1165 => 1051,  1138 => 1026,  1105 => 995,  1076 => 968,  1044 => 938,  1015 => 911,  977 => 875,  947 => 847,  913 => 815,  883 => 787,  850 => 756,  818 => 726,  787 => 697,  749 => 661,  717 => 631,  684 => 600,  653 => 571,  622 => 542,  589 => 511,  558 => 482,  526 => 452,  483 => 411,  436 => 366,  391 => 323,  336 => 270,  290 => 226,  253 => 191,  235 => 175,  194 => 136,  155 => 102,  143 => 92,  117 => 68,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__6a2dc95cb8d79c824f6605b4a8b459c018817500894093e2bb811f2c1326f5fd", "");
    }
}
