<?

     /*
      * @author Evin Weissenberg
      */

     class Has_Offers_API {


          function __construct() {

               //

               $base = 'https://api.hasoffers.com/Api?';

               $params = array(
                    'Format' => 'json'
               , 'Target' => 'Application'
               , 'Method' => 'validNetworkApiKey'
               , 'Service' => 'HasOffers'
               , 'Version' => 2
               , 'NetworkId' => 'demo'
               , 'NetworkToken' => 'NETnH2gyeeRFvfuNg7goLMjoBlwhUY'
               , 'api_key' => 'NETnH2gyeeRFvfuNg7goLMjoBlwhUY'
               );

               $url = $base . http_build_query($params);

               $result = file_get_contents($url);

               echo '<pre>';
               print_r(json_decode($result));
               echo '</pre>';

          }


     }

?>