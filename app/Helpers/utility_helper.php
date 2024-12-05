<?php
if (!function_exists('time_elapsed')) {
    /**
     * Mengubah timestamp menjadi format "time ago"
     * 
     * @param string|int $datetime Timestamp atau date string
     * @param bool $full Tampilkan format lengkap
     * @return string
     */
    function time_elapsed($datetime, $full = false)
    {
        $now = new DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);

        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;

        $string = array(
            'y' => 'tahun',
            'm' => 'bulan',
            'w' => 'minggu',
            'd' => 'hari',
            'h' => 'jam',
            'i' => 'menit',
            's' => 'detik',
        );

        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? '' : '');
            } else {
                unset($string[$k]);
            }
        }

        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . ' yang lalu' : 'baru saja';
    }
}

if (!function_exists('format_bytes')) {
    /**
     * Format ukuran file dalam bytes ke format yang mudah dibaca
     * 
     * @param int $bytes Ukuran dalam bytes
     * @param int $precision Jumlah angka di belakang koma
     * @return string
     */
    function format_bytes($bytes, $precision = 2)
    {
        $units = array('B', 'KB', 'MB', 'GB', 'TB');

        $bytes = max($bytes, 0);
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
        $pow = min($pow, count($units) - 1);

        $bytes /= pow(1024, $pow);

        return round($bytes, $precision) . ' ' . $units[$pow];
    }
}

if (!function_exists('mask_email')) {
    /**
     * Masking sebagian email address untuk privasi
     * 
     * @param string $email Alamat email
     * @return string
     */
    function mask_email($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            list($first, $domain) = explode('@', $email);
            $first = str_repeat('*', strlen($first) - 2) . substr($first, -2);
            return $first . '@' . $domain;
        }
        return $email;
    }
}

if (!function_exists('validate_phone')) {
    /**
     * Validasi dan format nomor telepon Indonesia
     * 
     * @param string $phone Nomor telepon
     * @return string|false Nomor telepon terformat atau false jika invalid
     */
    function validate_phone($phone)
    {
        // Remove non-numeric characters
        $phone = preg_replace('/[^0-9]/', '', $phone);

        // Check if it's an Indonesian phone number
        if (preg_match('/^(08|628|\+628)[1-9][0-9]{7,11}$/', $phone)) {
            // Normalize to 08 format
            if (strpos($phone, '628') === 0) {
                $phone = '0' . substr($phone, 2);
            } elseif (strpos($phone, '+628') === 0) {
                $phone = '0' . substr($phone, 3);
            }
            return $phone;
        }
        return false;
    }
}
