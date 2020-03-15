<?php

/**
 * Class GetDate
 */
class GetDate
{
    /**
     * @param $date1
     * @param $date2
     * @return string
     * @throws Exception
     */
    public static function diff($date1, $date2)
    {
        try {
            $_from = new DateTime($date1);
            $_to = new DateTime($date2);
            $diff = $_from->diff($_to);
            $years = $months = 0;
            $months = $diff->y * 12 + $diff->m + $diff->d / 30;
            $months = (int)round($months);
            if ($months > 12) {
                $years = $months / 12;
                $years = floor($years);
                $months = $months - (12 * $years);
            }

            $return = [];
            if ($years > 0) {
                $return[] = $years . ($years > 1 ? ' years' : ' year');
            }
            if ($months > 0) {
                $return[] = $months . ($months > 1 ? ' months' : ' month');
            }
            return implode(' ', $return);
        } catch (Exception $e) {
            return '';
        }
    }
}
