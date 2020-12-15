<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Etc
 *
 * @author sigit
 */
class Etc extends CI_Model {

    function rrmdir($dir) {
        if (is_dir($dir)) {
            $objects = scandir($dir);

            foreach ($objects as $object) {
                if ($object != '.' && $object != '..') {
                    if (filetype($dir . '/' . $object) == 'dir') {
                        $this->rrmdir($dir . '/' . $object);
                    } else {
                        unlink($dir . '/' . $object);
                    }
                }
            }

            reset($objects);
            rmdir($dir);
        }
    }

    function replaceAll($charToReplace, $string, $change = "-") {
        $result = strtolower(preg_replace("/[$charToReplace]/", $change, $string));
        return $result;
    }

    function getLastPath($path, $pathToGet) {
        $paths = explode('/', $path);
        return $paths[$pathToGet];
    }

    function gen_uuid() {
        return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
                // 32 bits for "time_low"
                mt_rand(0, 0xffff), mt_rand(0, 0xffff),
                // 16 bits for "time_mid"
                mt_rand(0, 0xffff),
                // 16 bits for "time_hi_and_version",
                // four most significant bits holds version number 4
                mt_rand(0, 0x0fff) | 0x4000,
                // 16 bits, 8 bits for "clk_seq_hi_res",
                // 8 bits for "clk_seq_low",
                // two most significant bits holds zero and one for variant DCE1.1
                mt_rand(0, 0x3fff) | 0x8000,
                // 48 bits for "node"
                mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
        );
    }

    function tanggalIndonesiaFormat($date) {
        $tanggal = date_format(date_create($date), "d");
        $bulan= date_format(date_create($date), "n");
        $tahun = date_format(date_create($date), "Y");
        $bulanArray = array(
            'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        return $tanggal. " ". $bulanArray[$bulan-1]. " ". $tahun;
    }

    function greetings() {
        date_default_timezone_set("Asia/Jakarta");
        $hours = date('H');
        if ($hours >= 5 && $hours < 10) {
            return "Selamat Pagi,";
        } else if ($hours >= 10 && $hours < 15) {
            return "Selamat Siang,";
        } else if ($hours >= 15 && $hours < 19) {
            return "Selamat Sore,";
        } else if ($hours >= 19 && $hours <= 24) {
            return "Selamat Malam,";
        }
    }

    function pushFirebase($token, $type, $perihal) {
        $file = fopen("./_assets_/log.text", "a");
        $ch = curl_init();
        $headers = [
            "Content-Type: application/json",
            "Authorization:key=" . AUTH_KEY_FIREBASE
        ];
        $data = array(
            'to' => $token,
            'data' => ["type" => "'$type'", "perihal" => "'$perihal'"]
        );
        curl_setopt($ch, CURLOPT_URL, "https://fcm.googleapis.com/fcm/send");
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $apiResponse = curl_exec($ch);
        fwrite($file, $apiResponse . '=> ' . print_r(['type' => $type, "perihal" => $perihal, 'token' => $token], TRUE) . "\n");
        fclose($file);
    }

}
