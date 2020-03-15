<?php

/**
 * Class NewVisit
 */
class NewVisit
{
    public static function check()
    {
        try {
            $ip = self::getIP();

            $details = file_get_contents('https://api.ipgeolocationapi.com/geolocate/' . $ip);
            $details = json_decode($details, true);

            $telegram_message = [];
            $telegram_message[] = "IP: <b>" . $ip . "</b> <a href='https://check-host.net/ip-info?host=" . $ip . "'>Details</a>";
            $telegram_message[] = "Current URL: <b>" . self::getCurrentURL() . "</b>";
            $telegram_message[] = "Referer URL: <b>" . self::getRefererURL() . "</b>";
            $telegram_message[] = "Country: <b>" . $details['name'] . "</b>";
            $telegram_message[] = "Region: <b>" . $details['continent'] . "</b>";
            $telegram_message[] = "User agent: <b>" . $_SERVER['HTTP_USER_AGENT'] . "</b>";

            $website = "https://api.telegram.org/" . BOT_ID . ":" . BOT_SECRET . "/sendMessage";
            $params = [
                'chat_id' => BOT_USER,
                'text' => (string)trim(implode(PHP_EOL, $telegram_message)),
                'parse_mode' => 'HTML',
                'disable_web_page_preview' => true,
            ];
            $ch = curl_init();
            curl_setopt_array($ch, array(
                CURLOPT_URL => $website,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => $params
            ));
            $response = curl_exec($ch);
            $err = curl_error($ch);
            curl_close($ch);
        } catch (Exception $e) {

        }
    }

    /**
     * Get user IP
     * @return string
     */
    private static function getIP()
    {
        $result = null;

        //for proxy servers
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && !empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $result = end(array_filter(array_map('trim', explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']))));
        } else {
            $result = $_SERVER['REMOTE_ADDR'];
        }

        return $result;
    }

    /**
     * Get current page URL
     * @return string
     */
    private static function getCurrentURL()
    {
        return 'http' . (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ? 's' : '')
            . '://' . $_SERVER["SERVER_NAME"]
            . ($_SERVER['SERVER_PORT'] != '80' ? $_SERVER['SERVER_PORT'] : '')
            . $_SERVER["REQUEST_URI"];
    }

    /**
     * Get referer URL
     * @return string
     */
    private static function getRefererURL()
    {
        return (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '');
    }
}
