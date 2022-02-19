var CLOSE = "Close Categories";
var MORE = "More Categories";
var catSelected = 2;
var id_lang = 1;
var poscompare = {"nbProducts":0,"IdProducts":null};
var possearch_image = 1;
var possearch_number = 10;
var prestashop = {"cart":{"products":[],"totals":{"total":{"type":"total","label":"Total","amount":0,"value":"$0.00"},"total_including_tax":{"type":"total","label":"Total (tax incl.)","amount":0,"value":"$0.00"},"total_excluding_tax":{"type":"total","label":"Total (tax excl.)","amount":0,"value":"$0.00"}},"subtotals":{"products":{"type":"products","label":"Subtotal","amount":0,"value":"$0.00"},"discounts":null,"shipping":{"type":"shipping","label":"Shipping","amount":0,"value":"Free"},"tax":{"type":"tax","label":"Taxes","amount":0,"value":"$0.00"}},"products_count":0,"summary_string":"0 items","vouchers":{"allowed":0,"added":[]},"discounts":[],"minimalPurchase":0,"minimalPurchaseRequired":""},"currency":{"name":"US Dollar","iso_code":"USD","iso_code_num":"840","sign":"$"},"customer":{"lastname":null,"firstname":null,"email":null,"birthday":null,"newsletter":null,"newsletter_date_add":null,"optin":null,"website":null,"company":null,"siret":null,"ape":null,"is_logged":false,"gender":{"type":null,"name":null},"addresses":[]},"language":{"name":"English (English)","iso_code":"en","locale":"en-US","language_code":"en-us","is_rtl":"0","date_format_lite":"m\/d\/Y","date_format_full":"m\/d\/Y H:i:s","id":1},"page":{"title":"","canonical":null,"meta":{"title":"Rozer  Responsive Prestashop Theme","description":"Shop powered by PrestaShop","keywords":"","robots":"index"},"page_name":"index","body_classes":{"lang-en":true,"lang-rtl":false,"country-US":true,"currency-USD":true,"layout-full-width":true,"page-index":true,"tax-display-disabled":true},"admin_notifications":[]},"shop":{"name":"Rozer  Responsive Prestashop Theme","logo":"\/pos_rozer\/img\/rozer-responsive-prestashop-theme-logo-1583806731.jpg","stores_icon":"\/pos_rozer\/img\/logo_stores.png","favicon":"\/pos_rozer\/img\/favicon.ico"},"urls":{"base_url":"http:\/\/lebishop.vn\/pos_rozer\/","current_url":"http:\/\/lebishop.vn\/pos_rozer\/en\/","shop_domain_url":"http:\/\/lebishop.vn","img_ps_url":"http:\/\/lebishop.vn\/pos_rozer\/img\/","img_cat_url":"http:\/\/lebishop.vn\/pos_rozer\/img\/c\/","img_lang_url":"http:\/\/lebishop.vn\/pos_rozer\/img\/l\/","img_prod_url":"http:\/\/lebishop.vn\/pos_rozer\/img\/p\/","img_manu_url":"http:\/\/lebishop.vn\/pos_rozer\/img\/m\/","img_sup_url":"http:\/\/lebishop.vn\/pos_rozer\/img\/su\/","img_ship_url":"http:\/\/lebishop.vn\/pos_rozer\/img\/s\/","img_store_url":"http:\/\/lebishop.vn\/pos_rozer\/img\/st\/","img_col_url":"http:\/\/lebishop.vn\/pos_rozer\/img\/co\/","img_url":"http:\/\/lebishop.vn\/pos_rozer\/themes\/theme_rozer1\/assets\/img\/","css_url":"http:\/\/lebishop.vn\/pos_rozer\/themes\/theme_rozer1\/assets\/css\/","js_url":"http:\/\/lebishop.vn\/pos_rozer\/themes\/theme_rozer1\/assets\/js\/","pic_url":"http:\/\/lebishop.vn\/pos_rozer\/upload\/","pages":{"address":"http:\/\/lebishop.vn\/pos_rozer\/en\/address","addresses":"http:\/\/lebishop.vn\/pos_rozer\/en\/addresses","authentication":"http:\/\/lebishop.vn\/pos_rozer\/en\/login","cart":"http:\/\/lebishop.vn\/pos_rozer\/en\/cart","category":"http:\/\/lebishop.vn\/pos_rozer\/en\/index.php?controller=category","cms":"http:\/\/lebishop.vn\/pos_rozer\/en\/index.php?controller=cms","contact":"http:\/\/lebishop.vn\/pos_rozer\/en\/contact-us","discount":"http:\/\/lebishop.vn\/pos_rozer\/en\/discount","guest_tracking":"http:\/\/lebishop.vn\/pos_rozer\/en\/guest-tracking","history":"http:\/\/lebishop.vn\/pos_rozer\/en\/order-history","identity":"http:\/\/lebishop.vn\/pos_rozer\/en\/identity","index":"http:\/\/lebishop.vn\/pos_rozer\/en\/","my_account":"http:\/\/lebishop.vn\/pos_rozer\/en\/my-account","order_confirmation":"http:\/\/lebishop.vn\/pos_rozer\/en\/order-confirmation","order_detail":"http:\/\/lebishop.vn\/pos_rozer\/en\/index.php?controller=order-detail","order_follow":"http:\/\/lebishop.vn\/pos_rozer\/en\/order-follow","order":"http:\/\/lebishop.vn\/pos_rozer\/en\/order","order_return":"http:\/\/lebishop.vn\/pos_rozer\/en\/index.php?controller=order-return","order_slip":"http:\/\/lebishop.vn\/pos_rozer\/en\/credit-slip","pagenotfound":"http:\/\/lebishop.vn\/pos_rozer\/en\/page-not-found","password":"http:\/\/lebishop.vn\/pos_rozer\/en\/password-recovery","pdf_invoice":"http:\/\/lebishop.vn\/pos_rozer\/en\/index.php?controller=pdf-invoice","pdf_order_return":"http:\/\/lebishop.vn\/pos_rozer\/en\/index.php?controller=pdf-order-return","pdf_order_slip":"http:\/\/lebishop.vn\/pos_rozer\/en\/index.php?controller=pdf-order-slip","prices_drop":"http:\/\/lebishop.vn\/pos_rozer\/en\/prices-drop","product":"http:\/\/lebishop.vn\/pos_rozer\/en\/index.php?controller=product","search":"http:\/\/lebishop.vn\/pos_rozer\/en\/search","sitemap":"http:\/\/lebishop.vn\/pos_rozer\/en\/sitemap","stores":"http:\/\/lebishop.vn\/pos_rozer\/en\/stores","supplier":"http:\/\/lebishop.vn\/pos_rozer\/en\/supplier","register":"http:\/\/lebishop.vn\/pos_rozer\/en\/login?create_account=1","order_login":"http:\/\/lebishop.vn\/pos_rozer\/en\/order?login=1"},"alternative_langs":{"en-us":"http:\/\/lebishop.vn\/pos_rozer\/en\/","fr-fr":"http:\/\/lebishop.vn\/pos_rozer\/fr\/"},"theme_assets":"\/pos_rozer\/themes\/theme_rozer1\/assets\/","actions":{"logout":"http:\/\/lebishop.vn\/pos_rozer\/en\/?mylogout="},"no_picture_image":{"bySize":{"small_default":{"url":"http:\/\/lebishop.vn\/pos_rozer\/img\/p\/en-default-small_default.jpg","width":98,"height":98},"cart_default":{"url":"http:\/\/lebishop.vn\/pos_rozer\/img\/p\/en-default-cart_default.jpg","width":125,"height":125},"home_default":{"url":"http:\/\/lebishop.vn\/pos_rozer\/img\/p\/en-default-home_default.jpg","width":360,"height":360},"medium_default":{"url":"http:\/\/lebishop.vn\/pos_rozer\/img\/p\/en-default-medium_default.jpg","width":452,"height":452},"large_default":{"url":"http:\/\/lebishop.vn\/pos_rozer\/img\/p\/en-default-large_default.jpg","width":800,"height":800}},"small":{"url":"http:\/\/lebishop.vn\/pos_rozer\/img\/p\/en-default-small_default.jpg","width":98,"height":98},"medium":{"url":"http:\/\/lebishop.vn\/pos_rozer\/img\/p\/en-default-home_default.jpg","width":360,"height":360},"large":{"url":"http:\/\/lebishop.vn\/pos_rozer\/img\/p\/en-default-large_default.jpg","width":800,"height":800},"legend":""}},"configuration":{"display_taxes_label":false,"display_prices_tax_incl":false,"is_catalog":false,"show_prices":true,"opt_in":{"partner":true},"quantity_discount":{"type":"discount","label":"Discount"},"voucher_enabled":0,"return_enabled":0},"field_required":[],"breadcrumb":{"links":[{"title":"Home","url":"http:\/\/lebishop.vn\/pos_rozer\/en\/"}],"count":1},"link":{"protocol_link":"http:\/\/","protocol_content":"http:\/\/"},"time":1617866806,"static_token":"36ae6c08c97db2ca33bcd9e4bacc5420","token":"ca1c97335ffa5d1ca5dabcd9827ae7f6"};